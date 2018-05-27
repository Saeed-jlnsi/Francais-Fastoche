<?php

function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) .'">...بیشتر بخوانید</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>