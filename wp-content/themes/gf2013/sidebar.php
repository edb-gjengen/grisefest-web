        </div><!-- #main .wrapper -->
    </div><!-- #page -->
    <div id="nav-wrapper" class="large-3 columns">
        <div class="date-mark">
            <img src="<?php echo get_template_directory_uri(); ?>/images/leaf_left.png" />
            <div class="date">
                <h2>5.10.2013</h2>
            </div>
            <div class="name">
               <h3>Gamle Logen</h3>
            </div>
            <div class="time">
                <h2>kl 18.00</h2>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/leaf_right.png" />
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </div>
