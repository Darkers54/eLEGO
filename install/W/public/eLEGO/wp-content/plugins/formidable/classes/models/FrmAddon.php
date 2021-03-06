<?php

if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

class FrmAddon {
	public $store_url = 'https://formidablepro.com';
	public $download_id;
	public $plugin_file;
	public $plugin_folder;
	public $plugin_name;
	public $plugin_slug;
	public $option_name;
	public $version;
	public $author = 'Strategy11';
	private $license;

	public function __construct() {

		if ( empty( $this->plugin_slug ) ) {
			$this->plugin_slug = preg_replace( '/[^a-zA-Z0-9_\s]/', '', str_replace( ' ', '_', strtolower( $this->plugin_name ) ) );
		}
		if ( empty( $this->option_name ) ) {
			$this->option_name = 'edd_' . $this->plugin_slug . '_license_';
		}

		$this->plugin_folder = plugin_basename( $this->plugin_file );
		$this->license = $this->get_license();

		add_filter( 'frm_installed_addons', array( &$this, 'insert_installed_addon' ) );
		$this->edd_plugin_updater();
	}

	public static function load_hooks() {
		add_filter( 'frm_include_addon_page', '__return_true' );
		//new static();
	}

	public function insert_installed_addon( $plugins ) {
		$plugins[ $this->plugin_slug ] = $this;
		return $plugins;
	}

	public static function get_addon( $plugin_slug ) {
		$plugins = apply_filters( 'frm_installed_addons', array() );
		$plugin = false;
		if ( isset( $plugins[ $plugin_slug ] ) ) {
			$plugin = $plugins[ $plugin_slug ];
		}
		return $plugin;
	}

	public function edd_plugin_updater() {

		$license = $this->license;

		if ( empty( $license ) ) {
			add_action( 'after_plugin_row_' . plugin_basename( $this->plugin_file ), array( $this, 'show_license_message' ), 10, 2 );
		} else {

			// setup the updater
			$api_data = array(
				'version' 	=> $this->version,
				'license' 	=> $license,
				'author' 	=> $this->author,
			);
			if ( is_numeric( $this->download_id ) ) {
				$api_data['item_id'] = $this->download_id;
			}

			$edd = new FrmEDD_SL_Plugin_Updater( $this->store_url, $this->plugin_file, $api_data );
			if ( $this->plugin_folder == 'formidable/formidable.php' ) {
				remove_filter( 'plugins_api', array( $edd, 'plugins_api_filter' ), 10, 3 );
			}

			add_filter( 'site_transient_update_plugins', array( &$this, 'clear_expired_download' ) );
		}
	}

	public function get_license() {
		return trim( get_option( $this->option_name . 'key' ) );
	}

	public function set_license( $license ) {
		update_option( $this->option_name . 'key', $license );
	}

	public function clear_license() {
		delete_option( $this->option_name . 'active' );
		delete_option( $this->option_name . 'key' );
	}

	public function set_active( $is_active ) {
		update_option( $this->option_name . 'active', $is_active );
	}

	public function show_license_message( $file, $plugin ) {
		$wp_list_table = _get_list_table( 'WP_Plugins_List_Table' );
		echo '<tr class="plugin-update-tr active"><td colspan="' . esc_attr( $wp_list_table->get_column_count() ) . '" class="plugin-update colspanchange"><div class="update-message">';
		echo sprintf( __( 'Your %1$s license key is missing. Please add it on the %2$slicenses page%3$s.', 'formidable' ), $this->plugin_name, '<a href="' . esc_url( admin_url('admin.php?page=formidable-settings&t=licenses_settings' ) ) . '">', '</a>' );
		$id = sanitize_title( $plugin['Name'] );
		echo '<script type="text/javascript">var d = document.getElementById("' . esc_attr( $id ) . '");if ( d !== null ){ d.className = d.className + " update"; }</script>';
		echo '</div></td></tr>';
	}

	public function clear_expired_download( $transient ) {
		if ( ! is_object( $transient ) ) {
			return $transient;
		}

		if ( $this->is_current_version( $transient ) ) {
			//make sure it doesn't show there is an update if plugin is up-to-date
			if ( isset( $transient->response[ $this->plugin_folder ] ) ) {
				unset( $transient->response[ $this->plugin_folder ] );
			}
		} else if ( isset( $transient->response ) && isset( $transient->response[ $this->plugin_folder ] ) ) {
			$cache_key = 'edd_plugin_' . md5( sanitize_key( $this->license . $this->version ) . '_get_version' );
			$version_info = get_transient( $cache_key );
			if ( $version_info !== false ) {
				$transient->response[ $this->plugin_folder ] = $version_info;
			} else {
				if ( ! $this->has_been_cleared() ) {
					// if the transient has expired, clear the update and trigger it again
					$this->cleared_plugins();
					$this->manually_queue_update();
				}

				unset( $transient->response[ $this->plugin_folder ] );
			}
		}

		return $transient;
	}

	private function is_current_version( $transient ) {
		if ( empty( $transient->checked ) || ! isset( $transient->checked[ $this->plugin_folder ] ) ) {
			return false;
		}

		$response = ! isset( $transient->response ) || empty( $transient->response );
		if ( $response ) {
			return true;
		}

		return isset( $transient->response ) && isset( $transient->response[ $this->plugin_folder ] ) && $transient->checked[ $this->plugin_folder ] == $transient->response[ $this->plugin_folder ]->new_version;
	}

	private function has_been_cleared() {
		$last_cleared = get_option( 'frm_last_cleared' );
		return ( $last_cleared < date( 'Y-m-d H:i:s', strtotime('-5 minutes') ) );
	}

	private function cleared_plugins() {
		update_option( 'frm_last_cleared', date('Y-m-d H:i:s') );
	}

	public static function activate() {
	 	check_ajax_referer( 'frm_ajax', 'nonce' );

		if ( ! isset( $_POST['license'] ) || empty( $_POST['license'] ) ) {
			wp_die( __( 'Oops! You forgot to enter your license number.', 'formidable' ) );
		}

		$license = stripslashes( sanitize_text_field( $_POST['license'] ) );
		$plugin_slug = sanitize_text_field( $_POST['plugin'] );
		$this_plugin = self::get_addon( $plugin_slug );
		$this_plugin->set_license( $license );

		$response = array( 'success' => false, 'message' => '' );
		try {
			$license_data = $this_plugin->send_mothership_request( 'activate_license', $license );

			// $license_data->license will be either "valid" or "invalid"
			$is_valid = 'invalid';
			if ( is_array( $license_data ) ) {
				if ( $license_data['license'] == 'valid' ) {
					$is_valid = $license_data['license'];
					$response['message'] = __( 'Your license has been activated. Enjoy!', 'formidable' );
					$response['success'] = true;
				} else if ( $license_data['license'] == 'invalid' ) {
					$response['message'] = __( 'That license is invalid', 'formidable' );
				}
			} else if ( $license_data == 'expired' ) {
				$response['message'] = __( 'That license is expired', 'formidable' );
			} else if ( $license_data == 'no_activations_left' ) {
				$response['message'] = __( 'That license has been used too many times', 'formidable' );
			} else if ( $license_data == 'invalid_item_id' ) {
				$response['message'] = __( 'Oops! That is the wrong license number for this plugin.', 'formidable' );
			} else if ( $license_data == 'missing' ) {
				$response['message'] = __( 'That license is invalid', 'formidable' );
			} else {
				$response['message'] = FrmAppHelper::kses( $license_data, array( 'a' ) );
			}

			$this_plugin->set_active( $is_valid );
		} catch ( Exception $e ) {
			$response['message'] = $e->getMessage();
		}

		echo json_encode( $response );
		wp_die();
	}

	public static function deactivate() {
		check_ajax_referer( 'frm_ajax', 'nonce' );

		$plugin_slug = sanitize_text_field( $_POST['plugin'] );
		$this_plugin = self::get_addon( $plugin_slug );
		$license = $this_plugin->get_license();

		$response = array( 'success' => false, 'message' => '' );
		try {
			// $license_data->license will be either "deactivated" or "failed"
			$license_data = $this_plugin->send_mothership_request( 'deactivate_license', $license );
			if ( is_array( $license_data ) && $license_data['license'] == 'deactivated' ) {
				$response['success'] = true;
				$response['message'] = __( 'That license was removed successfully', 'formidable' );
			} else {
				$response['message'] = __( 'There was an error deactivating your license.', 'formidable' );
			}
		} catch ( Exception $e ) {
			$response['message'] = $e->getMessage();
		}

		$this_plugin->clear_license();

		echo json_encode( $response );
		wp_die();
	}

	public function send_mothership_request( $action, $license ) {
		$api_params = array(
			'edd_action' => $action,
			'license'    => $license,
			'item_name'  => urlencode( $this->plugin_name ),
			'url'        => home_url(),
		);
		if ( is_numeric( $this->download_id ) ) {
			$api_params['item_id'] = absint( $this->download_id );
		}

		$arg_array = array(
			'body'      => $api_params,
			'timeout'   => 15,
			'sslverify' => false,
			'user-agent' => $this->plugin_slug . '/' . $this->version . '; ' . get_bloginfo( 'url' ),
		);

		$resp = wp_remote_post( $this->store_url, $arg_array );
		$body = wp_remote_retrieve_body( $resp );

		$message = __( 'Your License Key was invalid', 'formidable' );
		if ( is_wp_error( $resp ) ) {
			$message = sprintf( __( 'You had an error communicating with Formidable Pro\'s API. %1$sClick here%2$s for more information.', 'formidable' ), '<a href="http://formidablepro.com/knowledgebase/why-cant-i-activate-formidable-pro/" target="_blank">', '</a>');
			if ( is_wp_error( $resp ) ) {
				$message .= ' '. $resp->get_error_message();
			}
		} else if ( $body == 'error' || is_wp_error( $body ) ) {
			$message = __( 'You had an HTTP error connecting to Formidable Pro\'s API', 'formidable' );
		} else {
			$json_res = json_decode( $body, true );
			if ( null !== $json_res ) {
				if ( is_array( $json_res ) && isset( $json_res['error'] ) ) {
					$message = $json_res['error'];
				} else {
					$message = $json_res;
				}
			} else if ( isset( $resp['response'] ) && isset( $resp['response']['code'] ) ) {
				$message = sprintf( __( 'There was a %1$s error: %2$s', 'formidable' ), $resp['response']['code'], $resp['response']['message'] .' '. $resp['body'] );
			}
		}

		return $message;
	}

    public function manually_queue_update(){
        set_site_transient( 'update_plugins', null );
    }
}
