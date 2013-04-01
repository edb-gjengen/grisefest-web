<?php
/**
 * The template for displaying the footer.
 *
 */
?>
        </div><!-- #main .wrapper -->
    </div><!-- #page -->
    <div class="nav-wrapper small-3 large-3 columns">
        <div class="date-mark">
            <img src="<?php echo get_template_directory_uri(); ?>/images/leaf_left.png" />
            <div class="date">
                <h3>5.10.2013</h3>
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
<!--<footer id="colophon" role="contentinfo" class="row">
    <div class="site-info small-8 columns">
        Webdesign: <a href="http://kak.studentersamfundet.no">KAK</a>
    </div>
</footer>-->


<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.stick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
