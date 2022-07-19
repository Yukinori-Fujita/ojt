<?php
    add_theme_support("post-thumbnails");
    add_theme_support( 'menus' );


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

	add_action( 'pre_get_posts', 'my_custom_query_vars' );
	
	/* ajax処理 */
	function my_ajax(){
		global $post;
		$args = array(
			'posts_per_page' => $_POST["get_post_num"], // 追加で表示する件数
			'offset' => $_POST["now_post_num"],         //既に表示済みの件数は除外 
			'post_type' => $_POST["post_type"],
			'orderby' => 'date', //日付で並び替え
			'order' => 'DESC',
		);
		$my_posts = get_posts($args);
		foreach ($my_posts as $post) : setup_postdata($post);
		echo '<li class="item">';
		echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
		echo '</li>';
		endforeach; wp_reset_postdata();
		wp_die();
	}
	add_action( 'wp_ajax_my_ajax_action', 'my_ajax' );
	add_action( 'wp_ajax_nopriv_my_ajax_action', 'my_ajax' );

?>