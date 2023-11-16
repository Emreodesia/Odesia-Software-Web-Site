<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'emre1' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T|B,vs`2nuMD;|+_p(v7]?]v>TjBvGcvA7R.eeFMd> 9{Wz?PTQ^!O7KD,D=z_=[' );
define( 'SECURE_AUTH_KEY',  '(3(_2tmVN=1FYg8~P|z0Y 8}4#;-Q) j?32%&On3GYn5x?W%w%m6E,<FnB(3bjk3' );
define( 'LOGGED_IN_KEY',    '4?.GK9G#-+1&?!4t_l)Ur^o0o;NTQ{R8E{;xX?1pu#[wocU ]eZ,_~M=yhjZGeIi' );
define( 'NONCE_KEY',        'O9l{j#u(* |CkTAUGbr>=pn[@tqDUH?__+Ti`+a&p`kI_$^(m=S{}e$%b`pX$osf' );
define( 'AUTH_SALT',        'jfiSmLbRcWC4s ]G]. 0m^#P:^1wPTcRlu{i`I/8<P=$0N8mb08H~;u1z,;B}_(4' );
define( 'SECURE_AUTH_SALT', 'AdyntQ}!UXC._a8J.]*R[w8$f.S@z)zw^~{>4APze9:IA$o]Ojkp79+,O0$M,cuJ' );
define( 'LOGGED_IN_SALT',   'Fo*yfM.ZR>N@0bFEw>-vHuHT3d)CqtpYe+RZf!XBrWd`:KY5%!j J%Lr-jPznj-M' );
define( 'NONCE_SALT',       'O()k|kf4t&S}*oNjyr<H|;#Nq*<m4w%BP5r3e+sA+4&8LsA|o[u@]%~qu6`qU?Ue' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';