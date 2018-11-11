<?php
define('DB_NAME', '{{database_name}}');

define('DB_USER', 'root');

define('DB_PASSWORD', '');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');

define('AUTH_KEY',         "{{ '.M7OHL|L xcN;47AHZ1IKkovhh8}%0YOW^Z8uj%-3^6`iM_9G2Way;)W^U_~e%.~' }}");
define('SECURE_AUTH_KEY',  "{{ ';]9:0vCjcf0tBs{W&<@5|KlmJ`_604{eGnq~iC3rC<whR[eHp(Xub)%9l{[R;nkX' }}");
define('LOGGED_IN_KEY',    "{{ 'KWp|AR<Z;~,Dr,uaE=U[F.yP^dB:;9yZv5O:ULs]IXj?! ^zo(Rwu#V 9: 0}3~a' }}");
define('NONCE_KEY',        "{{ '1/JwQ%2n=e;FZ.#_Nj|tr3^}{p$QW:fc,qMn>laH`}_PGZ_>j>GF6T?#hO[qX8md' }}");
define('AUTH_SALT',        "{{ '~O-J9KApZIsoBA#J hg4E]/6PCD|<fM}2&pS@*$M<^#Gc5@J.~=mAJk(_v6 [o]B' }}");
define('SECURE_AUTH_SALT', "{{ 'P_lOzS(2^U_HZfvRo`P{B |-uFzW-+lJSB^N r#aIA9~UgHl;mqg.mp~3Lba7HwQ' }}");
define('LOGGED_IN_SALT',   "{{ '0=h%Me[P YhI-AGlXo%U[[eQLx8DoRXzqxh_*m.$n`&FJ{uSfUXWM 7<QcFHbF]!' }}");
define('NONCE_SALT',       "{{ '5RsGMZGn*EOMRU)Xj8V(n`@ >w)$kj=KSa-hs0}C)fb@P*SqZk)LBt8e6vxahCw%' }}");

$table_prefix  = 'wp_';

define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
