<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/yukinori.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/gushiken.css">
    <title>ojt</title>
</head>
<body>

    <header>
        <p id="hamburger-btn" class="js-hamburger hamburger">
            <span></span>
        </p>
        <ul>
            <li>Menu01</li>
            <li>Menu02</li>
            <li>Menu03</li>
            <li>Menu04</li>
        </ul>
    </header>


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

                <div class="ariticles">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_1.png" alt="カフェ"></a>
                    <time datetime="">2018/5/20</time>
                    <p>おしゃれカフェがありますよ</p>
                    <div class="underline">
                        <a href="#">READ MORE</a>
                        <div class="underline-more"></div>
                    </div>
                </div>
                <div class="ariticles">
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




            </div>


        </div>
    </section>



    <footer>
        <span>Copylight <small>&copy;</small> Shinohara. ALL RIGHTS RESERVED.</span>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/script.js"></script>
</body>

</html>