        <nav id="nav-front-huge" role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array(
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'huge-nav',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                ));
            endif;
            ?>
        </nav>
