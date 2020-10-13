<?php

function patronarrecipe_recent_recipes_tab(){
    //title function
    add_action( 'bp_template_title', 'patronarrecipe_buddypress_recent_post_title' );

    //content function
    add_action( 'bp_template_content', 'patronarrecipe_buddypress_posts_content' );

    //load bp template file
    bp_core_load_template(
        apply_filters( 'bp_core_template_plugin', 'members/single/plugins' )
    );

}



function patronarrecipe_buddypress_recent_post_title(){

    ?>

        <div class="text-center">MY RECIPES</div>

    <?php

}



function patronarrecipe_buddypress_posts_content(){

    //display a list of recent recipes here
    $profile_user_id                =   bp_displayed_user_id();

    if( !$profile_user_id ){
        return;
    }

    $posts                          =   new WP_Query([
        'author'                =>  $profile_user_id,
        'posts_per_page'        =>  10,
        'post_type'             =>   'recipe'
    ]);


    if( $posts->have_posts() ){

        ?>
            <div id="posts" class="row justify-content-md-center">

            <div class="col-md-8">
                <?php
                    while( $posts->have_posts() ){
                        $posts->the_post();

                        get_template_part( 'partials/post/content-excerpt' );
                    }
                ?>
            </div>

            </div>
        <?php

        wp_reset_postdata();
    }

}