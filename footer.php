


<footer id="footer" class="dark">

<!-- Copyrights
============================================= -->
<div id="copyrights">

    <div class="container clearfix">

        <div class="col_half">
            <?php get_theme_mod( 'patronarrecipe_footer_copyright_text' ); ?>.<br>
            <div class="copyright-links">
                <?php

                    if ( get_theme_mod( 'patronarrecipe_tos_page' ) ) {
                        ?>
                            <a href="<?php the_permalink( get_theme_mod( 'patronarrecipe_tos_page' ) ); ?>">Terms of Use</a> /
                        <?php
                    }

                    if ( get_theme_mod( 'patronarrecipe_privacy_page' ) ) {
                        ?>
                            <a href="<?php the_permalink( get_theme_mod( 'patronarrecipe_privacy_page' ) ); ?>">Privacy Policy</a>
                        <?php
                    }

                ?>


            </div>
        </div>

        <div class="col_half col_last tright">
            <div class="fright clearfix">
                <a href="#" class="social-icon si-small si-borderless si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="#" class="social-icon si-small si-borderless si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

            </div>

            <div class="clear"></div>

            <i class="icon-envelope2"></i> info@email.com <span class="middot">&middot;</span>
            <i class="icon-headphones"></i> +55-5-5555-5555
        </div>

    </div>

</div><!-- #copyrights end -->

</footer><!-- #footer end -->
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
<?php wp_footer(); ?>
</body>
</html>