
<?php get_header(); ?>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <?php

                        if( have_posts() ) {
                            while( have_posts() ) {
                                the_post();

                                global $post;
                                $author_ID          =   $post->post_author;
                                $author_URL         =   get_author_posts_url( $author_ID );

                                ?>

                                    <!-- Posts
                    ============================================= -->
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'single-post nobottommargin' ); ?>>

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <?php the_title( '<h2>', '</h2>' ); ?>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo get_the_date(  ); ?></li>
                                <li>
                                    <a href="<?php echo $author_URL; ?>">
                                        <i class="icon-user"></i> <?php the_author(); ?>
                                    </a>
                                </li>
                                <li><i class="icon-folder-open"></i> <?php the_category( ', ' ); ?></li>
                                <li><a href="#"><i class="icon-comments"></i> <?php comments_number( ); ?></a></li>
                            </ul><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            <?php
                                if( has_post_thumbnail() ) {
                                    ?>
                                        <div class="entry-image">
                                            <a href=" <?php the_permalink(); ?> ">
                                                <?php the_post_thumbnail( 'small' ); ?>
                                            </a>
                                        </div>
                                    <?php
                                }
                            ?>
                            <!-- .entry-image end -->

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">

                                <p>
                                    Release Date: <?php the_field( 'release_date' ); ?>
                                </p>


                                <?php the_content( '<p>', '</p>'); ?>
                                <?php
                                    $args = [
                                        'before'        =>  '<p class="text-center">' .__( 'Pages: ', 'patronarrecipe' ),
                                        'after'         =>  '</p>'
                                    ];

                                    wp_link_pages( $args );
                                ?>
                                <!-- Post Single - Content End -->

                                <!-- Tag Cloud
                                ============================================= -->
                                <div class="tagcloud clearfix bottommargin">
                                    <?php the_tags( '', ' / '); ?>
                                </div><!-- .tagcloud end -->

                                <div class="clear"></div>

                            </div>
                        </div><!-- .entry end -->

                        <!-- Post Navigation
                        ============================================= -->
                        <div class="post-navigation clearfix">

                            <div class="col_half nobottommargin">
                            <?php previous_post_link(); ?>
                            </div>

                            <div class="col_half col_last tright nobottommargin">
                                <?php next_post_link(); ?>
                            </div>

                            </div><!-- .post-navigation end -->

                            <div class="line"></div>

                            <!-- Post Author Info
                            ============================================= -->
                            <div class="card">
                                <div class="card-header">
                                    <strong>
                                        Posted by
                                        <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
                                    </strong>
                                </div>

                                <div class="card-body">
                                    <div class="author-image">
                                        <?php echo get_avatar( $author_ID, 90, '', false, [ 'class'=>'img-circle' ] ); ?>
                                    </div>
                                    <?php echo nl2br( get_the_author_meta( 'description' ) ); ?>
                                </div>
                    </div><!-- Post Single - Author End -->

                                <?php
                            }
                        }

                    ?>



                        <div class="line"></div>


                        </div>
                    <!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->

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

        <h5>template: single-music.php</h5>
    </section><!-- #content end -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>