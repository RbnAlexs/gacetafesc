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
define('DB_NAME', 'gacetafesc');


/** Tu nombre de usuario de MySQL */
define('DB_USER', 'gacetafescunam');


/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'g4c3t4!');


/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');


/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');


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
define('AUTH_KEY', 'gduiK=dbgM^[I/  -ZYyBE+ESluRi^W->uK LJm1sC0mlpy!Q#RpR.}fZlQgX0Nb');

define('SECURE_AUTH_KEY', 'ES4tIRN1i!ui,Wz$JKY_u(,qWb3g,1!=W[b<UXGQNNq~$,ZUrWhP)ZG&cLyki0?m');

define('LOGGED_IN_KEY', 'mP,C_ilw0RK08moMh8RP<c>B_8_L9#nEC&me}qzq4wdPq!=5*c$~Sf[[;dpk+w1E');

define('NONCE_KEY', 'Mfm),Of4S/<}vMBPWw|Zs`<%ljXUN{+LIKI;@uD&^Pc}2qR,<UcKQq7S.<1f;R W');

define('AUTH_SALT', 'pUDvAN{J&dtL,<%&drl+@RC4?+>sp]I>pjG1Araz_C$#/u<>?L~7f^s -ndLc(es');

define('SECURE_AUTH_SALT', '+JYYst9}KaqQWe[k-EA(hqWXpj]krnWI[yop/W=c$(kvv)90)mO9PQh[cn/MMQPf');

define('LOGGED_IN_SALT', 'Q&dt@yBb#?:rK4Ar$t}^=K(C?zob^z]ZuGD#R?Sx*lx.ldqNja &gX]S9r}?5@p*');

define('NONCE_SALT', '+uYR+2+O%FU9,a_!P/#2Hyd3)MldmZyLagnhjRty<XKX%sh(0B0Rm&>EsUa7q+*v');


/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'unamgct_';



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

