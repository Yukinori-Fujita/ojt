<?php
    add_theme_support("post-thumbnails");
    add_theme_support( 'menus' );

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
                    'revisions', // リビジョンの保存
                    "comments"
                )
            )
        );
    }
    add_action("init","add_custom_post_type");
?>