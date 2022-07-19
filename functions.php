<?php
    add_theme_support("post-thumbnails");
    add_theme_support( 'menus' );
    add_theme_support( 'custom-header',);

    // 今日の出来事
    function add_custom_post_type(){
        register_post_type(
            "news",
            array(
                "label" => "今日の出来事",
                "public" => true,
                "has_archive" => true,
                "menu_position" => 5,
                "menu_icon" => "dashicons-edit",
                "supports" => array(
                    'title',  // タイトル
                    'editor', // エディター
                    'thumbnail', // アイキャッチ画像
                    // 'revisions', // リビジョンの保存
                    "comments", // コメント
                )
            )
        );
    }
    add_action("init","add_custom_post_type");

    /* カスタム投稿一覧の初期表示件数を設定 */
    function my_custom_query_vars( $query ) {
	    if ( !is_admin() && $query->is_main_query()) {
		    if ( is_post_type_archive('news') ) {
			    $query->set( 'posts_per_page' , 6 );
		    }
	    } 
	    return $query;
        echo $query;
    }
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
        echo '<div class="ariticles">';
	    echo the_post_thumbnail();
	    echo '<time>'.get_the_date().'</time>';
        echo '<p>'.the_content().'</p>';
        echo '<div class="underline">';
        echo '<a href="'.get_the_permalink().'">'.'READ MORE'.'</a>';
        echo '<div class="underline-more">'.'</div>';
        echo '</div>';
        echo '</div>';
	    endforeach; wp_reset_postdata();
	    wp_die();
    }
    add_action( 'wp_ajax_my_ajax_action', 'my_ajax' );
    add_action( 'wp_ajax_nopriv_my_ajax_action', 'my_ajax' );
?>