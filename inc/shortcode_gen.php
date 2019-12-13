<?php
/* Shortcode Generator Page */
?>


<div class="wrap upct_admin_page">
    <h1 class="wp-heading-inline">
        Ultimate Pros & Cons Shortcode Generator
    </h1>

    <div class="shortcode_config_wrap">
        <div class="add_pros half_block">
            <div id="added_pros">

            </div>

            <div class="add_control">
                <form data-target="pros-box" class="upct_forms_function">
                    <div class="text-wrap">
                        <textarea name="add_pros" id="add_pros"></textarea>
                    </div>
                
                    <div class="add-btn-wrap">
                        <button type="submit" class="page-title-action">Add Pros</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="add_cons half_block last_block">
        <div id="added_cons">
            
        </div>

        <div class="add_control">
            <form data-target="cons-box" class="upct_forms_function">
                <div class="text-wrap">
                    <textarea name="add_cons" id="add_cons"></textarea>
                </div>

                <div class="add-btn-wrap">
                    <button type="submit" class="page-title-action">Add Cons</button>
                </div>
            </form>
        </div>

        </div>

    </div>

    <div class="shortcode_button_wrap">
        <button onClick="generateShortCode('#added_pros','#added_cons');" class="button-primary" id="gen_shortcode">
            <strong>Generate Shortcode</strong>  
        </button>
    </div>
    <div class="short-code-view">
        <textarea id="shortcode_container">


        </textarea>
    </div>


</div>

