<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wpescobar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9q3d~s53~<UVz:1iHMy<[I2~wABYUp?|q[ioCY`UPC!,&AazAr&Adtv~.q`0(C1z');
define('SECURE_AUTH_KEY',  'x4~<(o*t=v=!JNM.*!c(!VWrdG_P+K<8bn|Y_LP V1hN]PwPA2j[r@Of/b6E?y+k');
define('LOGGED_IN_KEY',    'ma5}lx{H~I.~9V2Ho1k+ZxXvM=:f(Ot<M>+9$0rCPV_[KylJ$XF@scxPQ)#=newY');
define('NONCE_KEY',        'DL;R%xID:4$|NX{*fi<T1E]kM,+$2g$eQXw.UrH,7J#kp]+MDY2:!HIKi0i1L+dY');
define('AUTH_SALT',        '7<X^@o 4b=Xd~>g/(45r/!@vi+X^^AUjI{|61&-tj-*)>NkwDcM~}5oECK.dZ={/');
define('SECURE_AUTH_SALT', '&5yrtd,txeK11gP^RAk8I5a&Gnl3BL&(Xk16jJi(/F#K#1Ny25g:6M`5H$_v?; m');
define('LOGGED_IN_SALT',   '/q.kt%@]kcb[E)$/0D;EV8Gz4wLeK0hF%|g[7L+@VHL`7eDE(MZ%,0L>BT3X.{Ux');
define('NONCE_SALT',       'n0<m8`%sQ()cFqWy`S6Aci*YGH1p_iM87%<Ez%f,WKJ%9t.UM6Jf[[<)@%J](^Nw');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');