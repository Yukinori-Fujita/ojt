<?php get_header();?>
    <section id="kv">
        <picture id="logo">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
        </picture>
        <picture id="main-visual">
            <source media="(max-width: 767px)" srcset="img/visual_1_sp.png">
            <img src="<?php echo get_template_directory_uri();?>/img/visual_1_pc.png" alt="">
        </picture>
        <picture id="visual-text">
            <source media="(max-width: 767px)" srcset="img/visual_text_sp.png">
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
                    <!-- <img src="<?php echo get_template_directory_uri();?>/img/post_img_1.png" alt="カフェ"></a> -->
                    <?php the_post_thumbnail();?>
                    <time datetime=""><?php echo get_the_date(); ?></time>
                    <p><?php the_content(); ?></p>
                    <div class="underline">
                        <a href="<?php the_permalink();?>">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
                <?php endwhile;
                else: ?>
                <section class="container-wrap" id="htmlcss">
                    <h2 class="subtitle">表示する記事がありません</h2>
                </section>
            <?php endif;?>
                <!-- <div class="ariticles">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_2.png" alt="観覧車"></a>
                    <time datetime="">2018/5/19</time>
                    <p>あのネオンはいつ交換するのか！？観覧者の謎に迫る！</p>
                    <div class="underline">
                        <a href="#">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
                <div class="ariticles">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_3.png" alt="社内"></a>
                    <time datetime="">2018/5/18</time>
                    <p>ラソナの社内はこんなのよ</p>
                    <div class="underline">
                        <a href="#">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
                <div class="ariticles">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_4.png" alt="アラハビーチ"></a>
                    <time datetime="">2018/5/17</time>
                    <p>お隣のアラハはハワイ？</p>
                    <div class="underline">
                        <a href="#">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
                <div class="ariticles">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_5.png" alt="テント"></a>
                    <time datetime="">2018/5/16</time>
                    <p>なぜテント？ラソナの人にきいてみた</p>
                    <div class="underline">
                        <a href="#">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
                <div class="ariticles">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_6.png" alt="ベイエリア"></a>
                    <time datetime="">2018/5/15</time>
                    <p>ベイエリアおしゃれすぎる問題</p>
                    <div class="underline">
                        <a href="#">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
<?php get_footer();?>