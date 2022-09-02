<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_ecf_back' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')u/^MTR}QiLQ%L=o}#A$iMk*:_<$uYVesatB.(gbV~,m7!nm?0XE9K11KEr<?#cX' );
define( 'SECURE_AUTH_KEY',  '1S~2$O%e3AEJ]rooR}Sfzc;QZto$g7.2Ajxu/^S%s%b!aD_]S~? F9#3_%pM0EEi' );
define( 'LOGGED_IN_KEY',    'P%8J;Sc<$3//T0T yzPkPK4;UhAHlM)hVb/6n?k-m r:l_ >jiO>IW7EWPy),Tl5' );
define( 'NONCE_KEY',        'x};SSk SA9z5C*(I+!TjlPy^:JPm!5rpa|*W,bL0_gZ5|q9v9x1#eEeMv3o[p@{o' );
define( 'AUTH_SALT',        'lT^CNl}3ym7D,wN/v6~ThtRdw*~}MOy/jKl8BBBc*<}*<x^>E4Ag}-sQz$HQ6~tK' );
define( 'SECURE_AUTH_SALT', 'xm5sq3c,8 ?3HSpk-.{,ZFY>=t|Gxh^1~s;M0Zpb9G,L)_vh.p:5z5~CyuHa*s{m' );
define( 'LOGGED_IN_SALT',   'o4#7Hcbn}Ic0{<UZJZ3}+;4rjix4)uS!=a~IfWB_H0{xkB.5PB!mRNqXIo=Od.=h' );
define( 'NONCE_SALT',       'D.^3Qc!:(WE%5R$5l{8I7j<Es]@i}@CF.pPi=MGH:%#G))suPYn^Ab{;iumW@z]Q' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
