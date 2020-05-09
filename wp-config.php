<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'thd?bc6UW-5W1;okX<u;{d#*&:R|XW*Yj%eYOjK)BJ|c1KwS9C^5:[tO7m?}gA*T' );
define( 'SECURE_AUTH_KEY', ',oGQM](}b_f!X771mO#Y?6&UK1,Qw1z#^5X67j( .bZy~kX{$RjGA^:5k|cwKhn+' );
define( 'LOGGED_IN_KEY', ':575Tl~e/~27g]IP~X7+OEk.H7~l*svA&(UQemqXRqCl5S0J} FJar/7;@*P`}9F' );
define( 'NONCE_KEY', 'zG+$3^&}+{**Fi#Vwtq}#8Mz1qJO .%vX/vwNs(pj4g@^EKsKI@{zo6>k9U871y^' );
define( 'AUTH_SALT', '@Hmh>lEUP+&<KHs89t[VJW]|C3O|p8gbX34<?Zf{<(w/+XDjMd*T~=Wo{b-i=6UA' );
define( 'SECURE_AUTH_SALT', '45bk!cZy:pZP8^t63,s$f^,|z|^7?aF~ko]97atOONhG(u LEeKMfa.a5#Dje%@q' );
define( 'LOGGED_IN_SALT', 'ETqH?[iOPDJ`{L;E.D!?i/Btd*0so:kcZ@?=w-S[s~!uCd1=bBvJ*t}]+tr(a4T0' );
define( 'NONCE_SALT', ']5?,kLa:U_^AXdchi~q2#;m4> 37:O;}8-Y;anCx&CbB;ZAg0C 98#reX~+Yy&BF' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'dar_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

