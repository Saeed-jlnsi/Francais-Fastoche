<div class="article-single">

    <div class="post">
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
           					
      

    <div class="comments">
            
            <?php
                     
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
          
            ?>

    </div>
    
</div>