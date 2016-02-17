<?php
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
define('DB_NAME', 'sandrinejx38');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'sandrinejx38');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Z8RHYQjMd9Yt');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'sandrinejx38.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'SvbCn1m|c9:&AyZV[(7U~hYJ%>877`|&5y]YHU::`eN|7k}-+;ASi-2Ar&ng:u=$');
define('SECURE_AUTH_KEY',  '}O~66 xIedmG91,#aDc)f:H+-COe-8+CUBgu,,q&;9-#S[_.eMw#2OXa`a-L]`]3');
define('LOGGED_IN_KEY',    '~0=#*9CE#>|8+[1wnV~|5.blT^sJ=_;d`.>YGRD@(tL -pC?Q!#bOD9RR61tAP>U');
define('NONCE_KEY',        ')(7f_2SbTMc3.OUa+%F-dcL_v[t?M2qhDbPRL0CHB|/vk#&w^_)M1DVIDqC}8r@Q');
define('AUTH_SALT',        'j``iU$xN+2zaWxc]+_`M}R+D1d^@t$K(c_g{aG<PFBwn{N^&aHq1JAc52%;jQ9Zf');
define('SECURE_AUTH_SALT', '!N?;u`a-:uZQW@-|$:|ViG!oBWvKmc^To,{pY0 3)G+-07[>B%iHYm5{Vn7{*B0 ');
define('LOGGED_IN_SALT',   ' $zy#Tqxj5A,@M@8d{(8//n$>hhQIzr)<%}V7-h)#/ RBnGNuWD_56x]tEC[*3k/');
define('NONCE_SALT',       'ok~hyqd/QiG.+qy+X|7MlT-!p|Zx<BR;b~qK+K]lV 0w[cb>1f4{eL#;!%Uxrvxn');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_onepage_';

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