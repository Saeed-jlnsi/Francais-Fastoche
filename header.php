<?php



/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="profile" href="http://gmpg.org/xfn/11">-->


    <meta charset="utf-8">
    <title>Translate</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/IRANSansWeb.woff">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/ShadowsIntoLight.ttf">

    <?php wp_head(); ?>

</head>
<body style="font-family: IRANSans;">

<nav class="navbar navbar-fixed-top top-menu" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/works/translate/">Francais Fastoche</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">خدمات آموزشی&nbsp;<span class="caret"></span></a>



                    <ul class="dropdown-menu">

                        <li><a href="#">آموزش فرانسه و انگلیسی</a></li>
                        <li><a href="#">ترجمه فیلم و کتاب</a></li>

                    </ul>

                </li>
                <li>
                    <a href="#">درباره ما</a>
                </li>
                <li>
                    <a href="#">ارتباط با ما</a>
                </li>

                <li>
                    <a href="#">تعرفه ها</a>
                </li>
            </ul>


            <!-- <div class="nav navbar-left">
                <form action="" method="post" style="margin-top: 10px">
                    <button class="btn btn-danger btn-sm">خروج از حساب کاربری</button>
                </form>
            </div> -->


            <!-- <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#">ورود</a>
                </li>
                <li>
                    <a href="#">ثبت نام</a>
                </li>
            </ul> -->


        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="content-container">

    <div class="main-slider">

        <h1 id="main-title">Francais, Fastoche!</h1>

        <div class="slider">

            <img src="<?php bloginfo('template_url'); ?>/assets/images/top-arrow.png"  id="top-arrow" alt="">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/down-arrow.png" id="down-arrow" alt="">

            <div id="header-slider">

                <img src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/1.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/2.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/3.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/4.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/5.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/6.jpg" alt="">


            </div>

        </div>



    </div>


<!---->
<!--<!DOCTYPE html>-->
<!--<html --><?php //language_attributes(); ?><!-- class="no-js no-svg">-->
<!--<head>-->
<!--<meta charset="--><?php //bloginfo( 'charset' ); ?><!--">-->
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
<!---->
<?php //wp_head(); ?>
<!--</head>-->
<!---->
<!--<body --><?php //body_class(); ?><!-->
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //_e( 'Skip to content', 'twentyseventeen' ); ?><!--</a>-->
<!---->
<!--	<header id="masthead" class="site-header" role="banner">-->
<!---->
<!--		--><?php //get_template_part( 'template-parts/header/header', 'image' ); ?>
<!---->
<!--		--><?php //if ( has_nav_menu( 'top' ) ) : ?>
<!--			<div class="navigation-top">-->
<!--				<div class="wrap">-->
<!--					--><?php //get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
<!--				</div><!-- .wrap -->
<!--			</div><!-- .navigation-top -->
<!--		--><?php //endif; ?>
<!---->
<!--	</header><!-- #masthead -->
<!---->
<!--	--><?php
//	// If a regular post or page, and not the front page, show the featured image.
//	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
//		echo '<div class="single-featured-image-header">';
//		the_post_thumbnail( 'twentyseventeen-featured-image' );
//		echo '</div><!-- .single-featured-image-header -->';
//	endif;
//	?>
<!---->
<!--	<div class="site-content-contain">-->
<!--		<div id="content" class="site-content">-->
