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

    <div class="content">
 
	<h2 style="margin:50px;"><?php
	
		if ( is_category() ) {

			single_cat_title();
		} elseif ( is_tag() ) {

			single_tag_title();
		} elseif ( is_author() ) {
			
			the_post();
			echo 'نویسنده :'. get_the_author();
			rewind_posts();
		} elseif ( is_day() ) {

			echo 'آرشیو روزانه :' . get_the_date('l j F   Y');
		} elseif ( is_month() ) {

			echo 'آرشیو ماهانه :' . get_the_date('F Y');
		} elseif ( is_year() ) {

			echo 'آرشیو سالانه :' . get_the_date('Y');
		} else {

			echo 'Archives:';
		}
	
	?></h2>


        <div class="articles">

            <?php while ( have_posts() ) : the_post(); ?>


                <div class="article-single">

					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>

                </div>
            <?php endwhile; ?>

  
        </div>

    </div>

<?php get_footer(); ?>
