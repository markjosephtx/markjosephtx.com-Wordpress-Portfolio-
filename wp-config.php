<?php
# Database Configuration
define( 'DB_NAME', 'wp_mjtxprd' );
define( 'DB_USER', 'mjtxprd' );
define( 'DB_PASSWORD', 't3-QjzjgErW32SlDwFrj' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '43-*7EfQBhDJZ.@l|yzG(W{m._K<wE=yaSLOLS>pj_S/$uMhyr5w+S@v-PCVDWL2');
define('SECURE_AUTH_KEY',  'C)EU{or@7g/blJ.;qAhDblVC3tJxi=1H+_c0pb2^ZHWap|<B9Bl$rmSi>E6R[/m]');
define('LOGGED_IN_KEY',    'Oewfq~))7H`Va^8c|1p7Z8-TfXF;#29mb1G8w|B/kQ}tQd&*P|9zC++-,(I8+L~d');
define('NONCE_KEY',        'j.u=4DiFOq)|5m!PRx^uWRKB,K8%U_FNG)Ar&q<](uJn=,|9vUV[NB0PBz_W ?sk');
define('AUTH_SALT',        'mz+}[;zj}w)3Hn,3#LChH]J47@?9!HLGY<t-$DsiA*ksQCXf^+[eXWO>/f5(82bT');
define('SECURE_AUTH_SALT', 'A[L~/XM97X1CzvP|iths}BMA &Vg1X+j6gk[Hhhvy6Zf)#jv(+bn5U:gXJGR0mkB');
define('LOGGED_IN_SALT',   'aebx[zE+O*].be)2~q2:<=cg.[kVi>fC;KVO&a+{W2[/6>}_r[|0,dL{w]-e&!Hu');
define('NONCE_SALT',       'um,(hdjPa.E=d[B^]d!B Phgyoq^oSl`tqW[sE8,pKK iH9jKVLxK8V]c9=RyP,,');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'mjtxprd' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', 'b266ed11f8bb300d4a19897d1d3cc9069df5ced7' );

define( 'WPE_CLUSTER_ID', '140775' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'mjtxprd.wpengine.com', 1 => 'markjosephtx.com', 2 => 'www.markjosephtx.com', 3 => 'mjtxprd.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-140775', );

$wpe_special_ips=array ( 0 => '34.83.61.194', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
