<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ego');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'eadmlego16');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '20CyLanMelLex');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3dVlvz-y,MiH#GhI];1M0d@HaJ]xActy?i(8_/B3slzVe_A+W}vD)$+}2^}FdSJ4');
define('SECURE_AUTH_KEY',  'Q|#qKRQ.=w+}InVcpTei_`J|R@N=9l.-smCeJ<NhMx?KI!o9;FJzSM|qShdSk)3@');
define('LOGGED_IN_KEY',    'Ds2!bTMWLxcA2ruBQ+Z`ec1 sY.?2|eU1hd1d8ke/!X|jJ=gy%Jj8M|/Q^P4dttC');
define('NONCE_KEY',        '-/w |==d_g|BFMK&-4{8k<Z.vHCQ3BO/ihoU4=A^`EL 8Pp_47f~K]VNz6%.o=?l');
define('AUTH_SALT',        '0?$B+{~A<q-O}{r_1R/e?Uco,5zxSr}+-SZLgc3HX!#Vy$+%;=R;tu@qFpga1CJB');
define('SECURE_AUTH_SALT', 'h&Qo0`ve(9TpJDL35i(h|Dd>J0ZY9}:{$=bn3 *z3>dc`NKz/+Zvs<K=5(:d6.r?');
define('LOGGED_IN_SALT',   'L7bc6(N:SFQW6zJ}.(>R369+H7:89;+;.yS-82d88?6h^zs|UdwPE!6Yk%hw`M|N');
define('NONCE_SALT',       'O1?rZEp:gbx .?p<7t$v6<7]&hW6YCpa8V?T-}FTJr1o7lw-+olR!f_<l(;bh>6<');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'ego_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');


