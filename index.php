
    <?php get_header(); ?>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <?php

                    if( !is_single() && is_home() &&
                        function_exists( 'wpp_get_mostpopular' ) &&
                           get_theme_mod( 'patronarrecipe_show_header_popular_posts' ) ){

                            wpp_get_mostpopular( [
                                'wpp_start'     =>  '<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                                <div>
                                    <div class="container clearfix">
                                        <span class="badge badge-danger bnews-title">'. get_theme_mod( 'patronarrecipe_popular_posts_widget_title' ) .':</span>

                                        <div class="fslider bnews-slider nobottommargin" data-speed="800"
                                            data-pause="6000" data-arrows="false" data-pagi="false">
                                            <div class="flexslider">
                                                <div class="slider-wrap">',
                                'wpp_end'       =>  '</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>',
                                'post_html'     =>  '<div class="slide"><a href="{url}"><strong>{text_title}</strong></a></div>'
                            ] );

                        ?>

                        <?php

                    }

                ?>


                <div class="container clearfix">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                            <div id="posts">

                                <?php

                                    if( have_posts() ) {
                                        while( have_posts() ) {
                                            the_post();

                                            // get_template_part( 'partials/post/content-excerpt' );
                                            get_template_part( 'partials/post/content', 'excerpt' );

                                        }
                                    }

                                ?>

                            </div>
                        <!-- #posts end -->

                        <!-- Pagination
                        ============================================= -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <?php

                                    next_posts_link( '&larr; Older' );
                                    next_posts_link( 'Newer &rarr;' );

                                ?>

                                <!-- <a href="#" class="btn btn-outline-secondary float-left">

                                </a>
                                <a href="#" class="btn btn-outline-dark float-right">

                                </a> -->
                            </div>
                        </div>
                        <!-- .pager end -->

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                       <?php

                         get_sidebar();

                       ?>
                    <!-- .sidebar end -->

                </div>

            </div>

            <h5>template: index.php</h5>
        </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <?php get_footer(); ?>