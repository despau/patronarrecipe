<?php get_header(); ?>
<!-- Page Title
============================================= -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">
            <?php

            while( have_posts() ){
                the_post();

                the_content();

            }

            ?>
        </div>

    </div>

    <h5>template: buddypress(base).php</h5>
</section><!-- #content end -->

<?php get_footer(); ?>