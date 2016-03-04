<?php

/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'dgbompreco');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'dgbompreco');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'silverston@123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AJ>5Vv7t(Ll5SZpuSZ0G~Pp5VkyI^Yz_7>=B;mr#se6!w{I|ecH,S-s+~%jb4Q2{');
define('SECURE_AUTH_KEY',  'x9Jh`0=^Zx{I~*vyvADcgmJ@.;Z1?ZfqG!1pX[IA+<UZBrH[x3>kft~fb&MF49p@');
define('LOGGED_IN_KEY',    '=/L%`h2t?(_LTL--X-27oS3 K3--[xfN~}M/{D@}|Igi9)??DSu=hr7(nU:#0P7y');
define('NONCE_KEY',        '~^A]a9_4cz9e-7O%CZPIN`|cE|^Y}rINe0!&#V77y1LQaV6!|O+0qEg|Xr@q2Y 7');
define('AUTH_SALT',        '/x~_tmn:^%V|^cv|iC}^T*M_A{|;ZeE}1h.x|HNjb0b_mp>G;S]A:#,.ZbNa}jp!');
define('SECURE_AUTH_SALT', 'E![jB1k|u f=,?.1gx!; S%_&?<*~hM+;|{*#c/d@or!g>1X3HN4,eXiITkZn>g+');
define('LOGGED_IN_SALT',   'I4f/$&h4`<JnWqgM5Yo:Z-R~O>;:iOfo`tU7+:&@9mziHJ.zWuG)8)Bv4$%`|FT#');
define('NONCE_SALT',       ']?.p)UuN%r]y)K-JQid|d2v0ev0/.XD~r9Sx!SL]cRU$ndWA@p.Ehy_K)XP+.FZX');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
define( 'WP_MEMORY_LIMIT', '96M' );
