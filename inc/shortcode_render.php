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



function upct_product_showcase_block($atts,$content) {

    if(is_admin()) {
        return false;
    }

    $atts = shortcode_atts(array(
                            'product-image' => 'https://via.placeholder.net/300',
                            'product-title' => '',
                            'amazon-link' => '#',
    ),$atts);

    $prod_content = do_shortcode($content);

    $image_link = $atts['product-image'];
    $prod_title = $atts['product-title'];
    $amazon_link = $atts['amazon-link'];
            $output = <<<EOT
            <div class="ua-clearfix"></div>
            <div class="ua-product-showcase main-wrap">

            <div class="ua-ps-inner">

                <div class="ua-ps-img-holder">
                <a href="$amazon_link" target="_blank"><img src="$image_link" alt=""></a>
                </div>

                <div class="ua-ps-content-holder">
                <a href="$amazon_link" target="_blank"><span>$prod_title</span></a>
                    
                    <div class="features-wrap">
                        <ul>
                        $prod_content
                        </ul>                
                    </div>

                    <div class="ua-ps-cta-wrap">
                        <a href="$amazon_link" target="_blank">Check Price on Amazon</a>
                    </div>
                </div>

            </div>

        </div>




        <div class="ua-clearfix"></div>
EOT;

        return $output;
}


add_shortcode('upct_showcase','upct_product_showcase_block');



function upct_create_buy_now_button($atts,$content) {

    if(is_admin()) {
        return false;
    }

    $atts = shortcode_atts(array(
                            'product-link' => '#'
                        ),$atts);

    
    $product_link = $atts['product-link'];
    
        $output =  <<<EOT
        <div class="ua-cleafix"></div>
        <div class="ua-cta-button-wrap">
            <a href="$product_link" target="_blank">
                            $content
            </a>                
        </div>
        <div class="ua-cleafix"></div>
EOT;

    return $output;

}

add_shortcode('upct_buynow_button','upct_create_buy_now_button');