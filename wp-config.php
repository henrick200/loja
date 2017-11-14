<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'loja');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qC/HrkkQp.g{n%w`^-:CiCZIVlfI9Y<|HzQvxKk&v`hp !UfH.TEu%-OlFt{ErO/');
define('SECURE_AUTH_KEY',  'G+&Mn%MS2gFrZt.~F6VN$E.vkYX F)j>y+60%__1?I_BTS#lWA3))pitb5<D^[J5');
define('LOGGED_IN_KEY',    'tCztjpz)MK?{TG:A3Mn/ZaIalO-:Sd/__6 PbLtjxv`G4I;&;Xb7@1T#bhJdzzLE');
define('NONCE_KEY',        'Bc;``PLH9..N;R`;GK#8dk?fD3g{n0AxkV[?Av7)-`9>5!?@7%eA(#lN;/CqFC/a');
define('AUTH_SALT',        'Xk9m=7x4$OI+14:A7avPk,zoQ dRAG-k7*7)SWIdIJpT:)24dj6Hk~B- ^=(jV2>');
define('SECURE_AUTH_SALT', '3[+qrfbc}JvI-_p6<F=INr>,yap8={Vk4!c[)xHFlx&)n=)*d:cG,U+RuufBxo[X');
define('LOGGED_IN_SALT',   'Y*/8xS::OFu~XY*#V!;kNi][gGpgZCPL>1N$eTC(/tkmQ@E0bc.co&aQ,qO-&/IE');
define('NONCE_SALT',       'IqZs]>mW#$%>cm)O8O5+^C}AD.l93C=)}ed^zu_(6eXJI7G- p?m+S`LQG=[QEOt');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
