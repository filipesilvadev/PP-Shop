<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
define('DB_NAME', 'pripacheco');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'pri-user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '!@#pri#@!');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!L{zlSpJDrxO.gcO:Df.%U0 `zZz7~1TVY2YdmMx_kzAc2v8=&A@2ZP!`fQEBD*&');
define('SECURE_AUTH_KEY',  '#Md:RZs}QDY]gw9**4W>q[DRt-D*dde<(64#>>~c1.+hmDKc]o&SynrC]@iD,k`Z');
define('LOGGED_IN_KEY',    'lR-AF=Y)2|8g42(9YP^,{eC]e{^ZrQZf @*zk1z4(-_bxP]YAlz+vj]LbdzsC <+');
define('NONCE_KEY',        'HBOriN,JHKxFMLXK@seDD~@v%)~V&Xp2Qye3QvITCn +IMVJO:Kw@X+G +/NuClr');
define('AUTH_SALT',        '$c 5uiu=k>CA~`zMqj?P&!?Ib?GAlQhW9smyy*|FXlSBgC)ncTQJeTJBqmVI*uvF');
define('SECURE_AUTH_SALT', 'U$i=c;(fop*bfL4SNn=o+?UF*g&q!E)rZ37wSpg~^ri<O0{qQrO>woCO`2/FI6U~');
define('LOGGED_IN_SALT',   ')&FPv*a}|z*wpp|l+6NoX ; */!_%#S2%P$MQR-b*#n(r0nI8<BfoP`qZ(^CXKz-');
define('NONCE_SALT',       '[r!-_iQ;+KjVgYZQ#]uunF|FSrdB/3d>$e!B+0`:.0n=9a7bVqd;TqyH@<1=g0!f');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
