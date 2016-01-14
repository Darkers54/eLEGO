<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package i-craft
 * @since i-craft 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				
				<h1 class="page-title"><?php _e( 'Page non trouvée', 'i-craft' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'C\'est embarrasant, la page n\'existe pas.', 'i-craft' ); ?></h2>
					<p><?php _e( 'Il semble que rien n\'ait été trouvé, voulez vous faire une recherche ?', 'i-craft' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>