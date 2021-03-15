<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'mikami23_wp1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'mikami23_wp1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'bklbufwli8' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql12024.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd%&]#4$TdO/$IocoiQnzw2lncg(rBv`G=i-ayz`&jo^(U{T=2rxkb$A$AlzPqM45' );
define( 'SECURE_AUTH_KEY',  'v)~KCoXf=yPvqIR-%osef^ o48k~Ikv-I+i o~H`8OI-]/q_8Wn=x[ =(QOTq#@`' );
define( 'LOGGED_IN_KEY',    'H5o&<TtSB;!?!$Chf,kC-r_O++b1kNY0x*]ra]>8+HA8WwIPFS(*fWZyZ|y/NA.c' );
define( 'NONCE_KEY',        'Eeq$5*TN0ScfG5*jdt5s665$E_f{.(KHd4~=ve:vI(pu!:1e+F%j^v6d_DY95I>g' );
define( 'AUTH_SALT',        'DOeWemrW7=!iE0`0ZZ!E4#H^*t~eR%^m=![HqYpb*S1>x+*3PnMRyb8k=&^V9BYz' );
define( 'SECURE_AUTH_SALT', '$>GIpMK( C|FT(+zvQ|P>1-Ea{rbEC_XRF3WY~ iML~Z$YTd:jbW(bG8xx|6+|!a' );
define( 'LOGGED_IN_SALT',   'N.d[M|Mj9M4Q;:nqN]5{nH3y9a@A.a?m|$7QdILRoPD/U>XP0/uUsb|h?<zCf][D' );
define( 'NONCE_SALT',       'IyzO7_nItvkhL!S)rRc?tqy)aBzN_ir{AAsx_JMT;)nA.]lj9i&XCLo^W^whe% 0' );
define( 'WP_CACHE_KEY_SALT','@*)57(&IYVO5M*WG|/v_m9?E,}bg)(KrG2?o:qpW=ap8Tw0Y~+0_k?;NM+ SV)Pv' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
