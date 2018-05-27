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
    <meta charset="utf-8">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/IRANSansWeb.woff">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/Itim-Regular.ttf">

    <title>Translate</title>

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
            <a class="navbar-brand" href="<?php echo get_bloginfo('wpurl');?>">!Francais,Fastoche</a>

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

         </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>