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
define('DB_NAME', 'wordpress_local');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'PRh*a{&UJWr/829F/#2h> :_z$+F#gpY2F_kqrIp&!55@-nGd!dD0A&B;To-<O++');
define('SECURE_AUTH_KEY',  '*w|~oCRAdk~1V3:]`-|Q~,X]+,o>|oed-iKK4vlK_o|+|#ub?/A$n+/|__)=gV u');
define('LOGGED_IN_KEY',    '6&$2aj$Ur|mC+}!YeM.;B0Q*l}=J7fAqYi[Iobd-NHetE/|t3IVpexM6|H45@.!g');
define('NONCE_KEY',        '-+BN`TIZc|?CpVP+!hVw&smN++i>=rz(T4tW8,L[hbm.hf|TFwJ/q#Owsd|Y/2cy');
define('AUTH_SALT',        '[+[4MlL% !?-s(/yvnodyP86q-$d#D<kTV=>K#|XyH#]&JBgPgFB.4S=M*o#T}V#');
define('SECURE_AUTH_SALT', '6Xa_&Fv-QG|<?qcE:WY:fI,h:}bzIy%&HUvxqul+txdv8bDfC$nIGC+4#>EFd9-9');
define('LOGGED_IN_SALT',   'b-,$VmWqJnuK=HQpqoHQjC_mY=exU B-iS|y[0Dcb_v2N}(ZlK$G_UTTK]S>6f/}');
define('NONCE_SALT',       'R/%AKXWi![Fv:C}S@|E<1EDcTdnoZ(s[r@:SD#pe8$3n/}ZAR<>7?=)8tk`+h1[2');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tb_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );


define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://files.wordpress.local' );

define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'admin' );

define( 'WP_AUTO_UPDATE_CORE', true );



/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

