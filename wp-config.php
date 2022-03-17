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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'quero-trampo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'VzObI-XbND )|]Lt{(K=t`V.(V*rIhIgDUIi2{e1gIuaPA:ZJ4_W+H!DYYr0?nlc' );
define( 'SECURE_AUTH_KEY',  'b1Y0QA]4y^~<:Aj0?!>-*<P1&s0R7%e8i& !S}@y,DD$D=g#6,lbf+EHd|8h23Ev' );
define( 'LOGGED_IN_KEY',    'XaF9k)N75_?}A7s(MiIh7<rE`JtUf s(@^G@NAWrtsC<DItZ*lxVnl/?QZHd 6t1' );
define( 'NONCE_KEY',        'o,ri)Vc{ _p)KE}B<WNOFYKFK~EsNXBg#QNz0]-p,Cn!`NC^^Yb!y87ki:63`}5$' );
define( 'AUTH_SALT',        ';E,=jYvc;Rkpa|Bg5[FG?1HYb5 b>s:>A~wS{MJege5`ns]2CR%CCM#>V:U6((8,' );
define( 'SECURE_AUTH_SALT', 'Mi~|bBE}70RS8$;9qSte6d *V %oUE8Rs[uvMpa6l91SqIUXqBp. !?@y&I*djB$' );
define( 'LOGGED_IN_SALT',   '._c5Ee/%4G>Uc9BT}F(MDH#?tI!wGiQ^]<%Lg&U0it.w18)6H%X_=0]#LpQ$-:]$' );
define( 'NONCE_SALT',       '@9rqiq*6g<)q!g(<96|xNVKr+F{[0-z~ZzZphM7!1CKDBM1<)FQXQnE46NL_n!E/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'qt_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
