<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

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



    <div class="subs-form">

        <input type="text" placeholder="نام ...">
        <input type="text" placeholder="ایمیل ...">
        <input type="button" value="ثبت نام در خبرنامه">

    </div>



    <div class="content">

        <hr>
        <div class="description">
            <div class="main-des">
                <div class="des">
                    <span><span class="glyphicon glyphicon-king"></span> آموزش زبان فرانسه</span>
                    <p>     آموزش زبان فرانسه بصورت آنلاین و حضوری با متد جدید گروه آموزشی Francais Fastoche  با فراهم کردن بستری برای تقویت مکالمه، یادگیری تلفظ صحیح زبان فرانسه و ... برای دوستداران زبان فرانسه و مهاجرین به کشورهای فرانسوی زبان (Francophone)

                    </p>
                </div>

                <div class="des">
                    <span><span class="glyphicon glyphicon-education"></span> ترجمه تخصصی</span>
                    <p>ترجمه تخصصی متون علمی و پژوهشی فرانسه و انگلیسی برای محققین و دانشجویان بصورت سفارش آنلاین با تعرفه ی مناسب.</p>
                </div>

                <div class="des">
                    <span><span class="glyphicon glyphicon-camera"></span>  کتاب و فیلم</span>
                    <p>معرفی و بررسی کتاب های زبان فرانسه  و بهترین فیلم های سینمای فرانسه و کشورهای فرانسوی زبان </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">

            <h2 style="margin-top: 30px;">مقالات</h2>

        </div>

        <div class="articles">


            <?php while ( have_posts() ) : the_post();
               
                get_template_part('content', get_post_format());

             endwhile; ?>
        </div>

    </div>
    
</div>
<?php get_footer(); ?>
