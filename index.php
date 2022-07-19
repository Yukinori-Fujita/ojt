<?php get_header();?>
    <section id="kv">
        <picture id="logo">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
        </picture>
        <picture id="main-visual">
            <!-- <source media="(max-width: 767px)" srcset="img/visual_1_sp.png"> -->
            <?php echo do_shortcode('[metaslider id="54"]'); ?>
        </picture>
        <picture id="visual-text">
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png">
            <img src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" alt="">
        </picture>
        <p>進化し続ける「街」<br class="br-sp">アメリカンビレッジマガジン</p>
    </section>
    <section class="Latest-Articles">
        <h1>Latest Article</h1>
        <div class="container-articles">
            <div class="box-articles1">
            <?php 
                if (have_posts()):
                while(have_posts()):
                the_post();?>
                <div class="ariticles">
                    <?php the_post_thumbnail();?>
                    <time datetime=""><?php echo get_the_date(); ?></time>
                    <p><?php the_content(); ?></p>
                    <div class="underline">
                        <a href="<?php the_permalink();?>">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
                <?php endwhile;?>
                <!-- カスタム投稿全件数取得 -->
            <?php global $wp_query; $count = $wp_query->found_posts;?>
            <?php //echo $count?>
            <!-- この部分がajaxで追加読み込みする箇所 -->
            <!-- javascript側に渡したい値は、data属性を使って指定 -->
            <div class="load" data-count="<?php echo $count; ?>" data-post-type="news" ></div>
            <!-- 初期表示件数が全件数より少ない場合、もっと読み込むボタンを表示 -->
            <?php if($count > 6): ?>
            <button class="more_btn">もっと読み込む</button>
            <?php endif; ?>
            <?php endif;?>
        </div>
    </section>
<?php get_footer();?>