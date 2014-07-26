<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> <!--Thiết lập bảng mã trang web-->
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/><!--Bật Responsive-->
		
        <!---Insert CSS-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/normalize.min.css" /> <!--Reset CSS-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="screen,handheld" /><!--Default CSS-->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile.css" media="screen and (min-width: 18.750em)" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/tablet.css" media="screen and (min-width: 34.375em)" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/desktop.css" media="screen and (min-width: 48em)" />
	
		<!--IE9 không hỗ trợ query media, do vậy ta sẽ dùng respond.js để bật Responsive cho IE9-->
        <!--[if lt IE 9]> 
            <script src="<?php bloginfo('template_url'); ?>/js/vendor/html5-3.6-respond-1.1.0.min.js"></script> 
        <![endif]-->
	    <?php wp_head(); ?>
    </head>
    <body>
        <div class="top-bar">
            <p>HOT! Hostgator giảm giá 101% - <a href="#">Click để đăng ký</a></p>
        </div>
        <header id="header">
            <div class="site-title">
                <a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
            </div>
            <div class="header-menu">
                <a href="#" class="show-menu">Menu</a>
                <?php
                    if ( has_nav_menu( 'main-menu' ) ) {
                          wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false ) ); 
                    }
                 ?>
            </div>
        </header><!--end #header-->

        <div id="wrapper">
            <div class="featured-post">
                <?php 
                    $featured_post = new WP_Query('tag=featured&posts_per_page=3');
                    if ( $featured_post->have_posts() ): while( $featured_post->have_posts() ) : $featured_post->the_post();
                ?>
                <div class="box">
                    <div class="post">
                        <?php if( has_post_thumbnail() ) { the_post_thumbnail('featured-thumb'); } ?>
                        <h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    </div>
                </div><!--end .box-->
                <?php 
                    endwhile; 
                    else :
                        __('Chưa có bài viết nào cả');
                    endif;
                ?>
            </div>
            <div class="content">