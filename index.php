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

        <!--<div class="special-part">-->

        <!--<span class="special-section">انگلیسی به فارسی</span>-->
        <!--<span class="special-section">فارسی به انگلیسی</span>-->
        <!--<span class="special-section">فرانسه به فارسی</span>-->
        <!--<span class="special-section">فارسی به فرانسه</span>-->
        <!--<span class="special-section latest">فرانسه به انگلیسی</span>-->
        <!--<span class="special-section latest">انگلیسی به فرانسه</span>-->

        <!--</div>-->

        <div class="container">

            <h2 style="margin-top: 30px;">مقالات</h2>

        </div>

        <div class="articles">


            <?php while ( have_posts() ) : the_post(); ?>


                <div class="article">
<!--                        <h2>--><?php //the_title(); ?><!--</h2>-->
                        <h4><?php the_author(); ?></h4>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/article2.png" alt="">
                        <?php the_content(); ?>
                    <img src="images/article2.png" alt="">
                    <h2><?php the_title(); ?></h2>

                </div>
            <?php endwhile; ?>

            <!--            <div class="article">-->
<!--                <span>آموزش ترجمه بخش دوم</span>-->
<!--                <img src="images/article2.png" alt="">-->
<!---->
<!--            </div>-->
<!--            <div class="article">-->
<!--                <span>آموزش ترجمه بخش سوم</span>-->
<!--                <img src="images/article2.png" alt="">-->
<!---->
<!--            </div>-->
<!--            <div class="article">-->
<!--                <span>آموزش ترجمه بخش چهارم</span>-->
<!--                <img src="images/article2.png" alt="">-->
<!---->
<!--            </div>-->

        </div>

    </div>



<!--<div class="wrap">-->
<!--	--><?php //if ( is_home() && ! is_front_page() ) : ?>
<!--		<header class="page-header">-->
<!--			<h1 class="page-title">--><?php //single_post_title(); ?><!--</h1>-->
<!--		</header>-->
<!--	--><?php //else : ?>
<!--	<header class="page-header">-->
<!--		<h2 class="page-title">--><?php //_e( 'Posts', 'twentyseventeen' ); ?><!--</h2>-->
<!--	</header>-->
<!--	--><?php //endif; ?>
<!---->
<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main" role="main">-->
<!---->
<!--			--><?php
//			if ( have_posts() ) :
//
//				/* Start the Loop */
//				while ( have_posts() ) : the_post();
//
//					/*
//					 * Include the Post-Format-specific template for the content.
//					 * If you want to override this in a child theme, then include a file
//					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//					 */
//					get_template_part( 'template-parts/post/content', get_post_format() );
//
//				endwhile;
//
//				the_posts_pagination( array(
//					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
//					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
//					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
//				) );
//
//			else :
//
//				get_template_part( 'template-parts/post/content', 'none' );
//
//			endif;
//			?>
<!---->
<!--		</main><!-- #main -->
<!--	</div><!-- #primary -->
<!--	--><?php //get_sidebar(); ?>
<!--</div><!-- .wrap -->

<?php get_footer(); ?>
