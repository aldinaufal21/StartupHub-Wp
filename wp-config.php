<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'startuphub' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PBu@4_0b2UOZRrJ_-Q-Dmr2l.?!MPlY!@QkL.@ph)/UFzLyFyJdDjZPJuiKwg/,;' );
define( 'SECURE_AUTH_KEY',  'VRZ^K4U6:%6 1EZE8~`sFaHm7#ZOjEr&-YD.9]jTTF8Fp@`Y@>guYPMoIrOr[dwP' );
define( 'LOGGED_IN_KEY',    '&XE_nPn_r;&0_Ogg(/&i;)wZayoyR#)4cLKAjRvF#iXo|LlT)Btm|]rO*%D7YnD?' );
define( 'NONCE_KEY',        '0i6~nO=R]0sM (tv*gMxto<.u%T~`>CCaOpi3y;W?O#8?)I_=s}v6.-mn7u8VRw#' );
define( 'AUTH_SALT',        'aCRxE3>6 1c$G|s!.&1RU1 7J$Ss0G0l43VY>>,79.mJwGm9vT,iU<K*B<{OW~u#' );
define( 'SECURE_AUTH_SALT', '}Q(;[8WCc[86o7*A!dAYn)kh$0%!&ff!n[(*/I]/5qykf_*io$U;rJ~{y#aCG[aF' );
define( 'LOGGED_IN_SALT',   '!A!Pl:s<oR>wd[P(7A6G.P/R!t@nJ;3Z/T]Xn<Irl n>/GmpBuY7Ot=PyY?Qp)xT' );
define( 'NONCE_SALT',       '{*.va4AyFH<hc(JSoXi.j&i/`<fLr<dK,Ht~+7z$QTOi!#H)1R7f,&UK/dXm&QQd' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_MEMORY_LIMIT', '128M');