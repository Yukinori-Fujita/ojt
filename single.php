        <?php get_header();?>
        <?php 
                if (have_posts()):
                while(have_posts()):
                the_post();?>
                    <!-- <img src="<?php echo get_template_directory_uri();?>/img/post_img_1.png" alt="カフェ"></a> -->
                    <?php the_post_thumbnail();?>
                    <p><?php the_content(); ?></p>
                <?php endwhile;
                else: ?>
                <section class="container-wrap" id="htmlcss">
                    <h2 class="subtitle">表示する記事がありません</h2>
                </section>
        <?php endif;?>
        <?php get_footer();?>