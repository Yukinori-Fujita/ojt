<?php
    add_theme_support("post-thumbnails");
    add_theme_support( 'menus' );
	// add_menu_page( 
	// 	$page_title,  //クリックされたときにHTMLページタイトルになる
	// 	$menu_title,  //トップレベルメニューの管理画面上での名前
	// 	$capability,  //このメニューページを利用できる権限
	// 	$menu_slug,   //トップレベルメニューページの識別子
	// 	$function,    //トップレベルメニューページのコンテンツを出力する関数
	// 	$icon_url,    //トップレベルメニューのアイコン
	// 	$position );  //トップレベルメニューの出す順
	

        /* カスタム投稿一覧の初期表示件数を設定 */
        function my_custom_query_vars( $query ) {
	        if ( !is_admin() && $query->is_main_query()) {
		if ( is_post_type_archive('news') ) {
			$query->set( 'posts_per_page' , 6 );
		}
	}
	return $query;
}

add_action( 'wp_ajax_my_ajax_action', 'my_ajax' );
add_action( 'wp_ajax_nopriv_my_ajax_action', 'my_ajax' );


add_theme_support( 'custom-header',);
?>