<?php
/**
 * The template for displaying the footer.
 *
 */
?>
        </div><!-- #main .wrapper -->
    </div><!-- #page -->
    <div id="nav-wrapper" class="small-3 large-3 columns">
        <div class="date-mark">
            <img src="<?php echo get_template_directory_uri(); ?>/images/leaf_left.png" />
            <div class="date">
                <h2>5.10.2013</h2>
            </div>
            <div class="name">
               <h3>Gamle Logen</h3>
            </div>
            <div class="time">
                <h2>16.00</h2>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/leaf_right.png" />
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </div>
</div>
<footer id="colophon" class="row">
    <div class="site-info large-9 text-center columns">
        <a href="http://uio.no"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_uio.png" /></a>
        <a href="http://akademika.no"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_akademika.png" /></a>
    </div>
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.stick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
