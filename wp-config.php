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
define( 'DB_NAME', 'database' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'R&L.rXT&dZ4?H2Fgh{yRT0Cv*&5`:e)vVQTqOA>,8(hWHl[S^}gt2~9ctcv@USF9' );
define( 'SECURE_AUTH_KEY',  'pK87(a`pe;If<K?-A wGX/+mIT`9)3a%|%ek`N[MfIy]7]W[6DU%/Q,Oign3K&v/' );
define( 'LOGGED_IN_KEY',    'H:D^IH/coO2Rtho^)*YhsZ_cfN(J(DiDwR7)d,s{r>a+VE6*yVnw@$rYoBGE0ROK' );
define( 'NONCE_KEY',        '>}/Jhd7(9@?{7ne9EG0wZ4N v3&ypo3REK(lYJvRXidS?#_`hPX3-dd.Bc(29SuJ' );
define( 'AUTH_SALT',        'Y+XiC^w~Ia~M*?]ErkJt@!oxhG(K!uFn%u@w4)M&H=t.Bx)_iDuUn2zGji$x-&a*' );
define( 'SECURE_AUTH_SALT', 'dN,a>Tu,4BtU,-~XUQZAFd^mqKXSR~EC3LaR/Nn^7W9;v/z/>F%Jj^g*b)KeZl*#' );
define( 'LOGGED_IN_SALT',   'H-!Wjzp3DRl}6.j @Q-`3uj+7uV36uHWyqI`)p0>rF[}$AMM4b@[<N}K(h}&AjsY' );
define( 'NONCE_SALT',       '0@<$>[GDlNEX5wkoss1r3LyxiGm>1g;i}&oH(C6,iHl1f-voQl/WvC%+W)Fy)=;U' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_practice1';

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

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
