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
    <link rel="stylesheet" href="/wp-ojt/assets/css/yukinori.css">
    <link rel="stylesheet" href="/wp-ojt/assets/css/gushiken.css">
    <title>ojt</title>

    <?php wp_head();?>
</head>
<body>

    <header>
        <p id="hamburger-btn" class="js-hamburger hamburger">
            <span></span>
        </p>
        <ul>
            <?php wp_nav_menu(); ?>
            <!-- <li>Menu01</li>
            <li>Menu02</li>
            <li>Menu03</li>
            <li>Menu04</li> -->
        </ul>
    </header>


    