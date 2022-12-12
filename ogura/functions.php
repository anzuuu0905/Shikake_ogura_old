<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{

	wp_enqueue_style( 'my', get_template_directory_uri() . '/assets/css/styles.css', array(), '', 'all' );
// Font Awesome
	wp_enqueue_style( 'awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '', 'all' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.6.1', false );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '', false );
	// slickの読み込み
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', false );

	
	/** 
	 * jsで使えるようにテンプレートパスとホームURLをローカライズ
  **/
	$tmp_path_arr = array(
    'temp_uri' => get_template_directory_uri(),
    'home_url' => home_url()
  );
  wp_localize_script( 'script', 'tmp_path', $tmp_path_arr );
}
add_action('wp_enqueue_scripts', 'my_script_init');



/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );

// get site url
wpcf7_add_form_tag('cf7_url', 'cf7_custom_url', true);
function cf7_custom_url(){
	return get_bloginfo('url');
}


/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function my_trim($str, $num, $display = true)
{
  if (empty($str) || empty($num)) {
    return;
  } else {
    $content      = '';
    $remove_array = array("\r\n", "\r", "\n", ' ', '　');
    $content      = wp_trim_words(strip_shortcodes($str), $num, '...');
    $content      = str_replace($remove_array, '', $content);
    if ($display == false) {
      return $content;
    } else {
      echo $content;
    }
  }
}

function my_posts_search( $search, $wp_query ){
	// クエリを修正する条件
	if ( $wp_query->is_main_query() && is_search() &&  !is_admin() ){
		// 検索結果に対して投稿ページのみとする条件を追加
		$search .= " AND post_type = 'post' ";
	}
	return $search;
}
add_filter('posts_search','my_posts_search', 99, 2);

// スマホ・PCサイズにより切り替え
// 検索対象から固定ページは除外する
function my_query( $query ) {
	// SPの場合、かつ（フロントページ以外かつメインクエリ）の場合、10件表示とする。
	// if(!is_front_page() && !is_single() && !is_page() && wp_is_mobile() && is_main_query($query)){
	// 	$query->set( 'posts_per_page', '3' );
	// }
	if((is_archive() || is_search()) && wp_is_mobile() && is_main_query($query)){
		$query->set( 'posts_per_page', '10' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'my_query' );

/*【出力カスタマイズ】クエリーカスタマイズ、ループから非公開記事を除外 */
function custom_posts() {
  global $wp_query;
  if($wp_query->is_admin) return; // 管理画面内は除く
  if(is_post_type_archive()){ // アーカイブページ
    $wp_query->query_vars['post_status'] = 'publish'; // 投稿ステータス「公開済」
  }
}
add_filter('pre_get_posts', 'custom_posts');