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

    <div class="container">
        <h2 style="margin-top: 100px;">مقالات</h2>
    </div>

    <div class="articles">  

        <?php while ( have_posts() ) : the_post(); ?>

        <div class="article-single">

            <h2><?php the_title(); ?></h2>
            
	        <p class="article-info"><?php the_date('l j F   Y'); ?> | نویسنده: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | دسته بندی: 
                                        
            <?php
            
                $categories = get_the_category();
                $separator = " - ";
                $output='';

                foreach ($categories as $category) {
        
                    $output .= '<a href="'. get_category_link($category->term_id) .'">'. $category->cat_name .'</a>' . $separator;
                }                               
                echo trim($output, $separator);

            ?>

            </p>

	        <?php the_content(); ?>
									
        </div>

        <?php endwhile; ?>

    </div>

</div>

<?php get_footer(); ?>
