<?php
get_header();
?>

    <div id="primary" class="site-content">
        <div id="content" role="main">
        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="front-page-caption">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>

        <?php endif; // end have_posts() check ?>

        </div><!-- #content -->
    </div><!-- #primary -->
<?
get_footer();
?>
