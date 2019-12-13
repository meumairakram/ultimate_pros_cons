<?php 



function upct_wrapper_code($atts,$content) {

    return '<div class="upct_wrapper"><div class="upct_inner_wrap">'.do_shortcode($content).'</div></div>';

}


add_shortcode( 'upctTable', 'upct_wrapper_code' );



function upct_pros_code($atts,$content) {

    return '<div class="upct_block upct_pros_block"><div class="upct_heading">Pros</div>'.do_shortcode($content).'</div>';

}

add_shortcode( 'upct_pros', 'upct_pros_code' );



function upct_cons_code($atts,$content) {

    return '<div class="upct_block upct_cons_block"><div class="upct_heading">Cons</div>'.do_shortcode($content).'</div>';

}

add_shortcode( 'upct_cons', 'upct_cons_code' );




function upct_list_item_code($atts,$content) {

    return '<li>'.$content.'</li>';

}

add_shortcode( 'upct_list_item', 'upct_list_item_code' );
