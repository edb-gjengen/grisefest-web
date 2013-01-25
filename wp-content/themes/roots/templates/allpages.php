<?php
    $pages = new WP_Query( 'post_type=page' );

    while ( $pages->have_posts() ) :
        $pages->the_post();
        ?>
        <section id="<?php echo "page-".$post->post_name; ?>" class="page page-<?php the_id();?>" style="display:none;">
            <h1 class="title"><?php the_title(); ?></h1>
            <article>
                <?php the_content(); ?>
            </article>
        </section>
        
    <?php endwhile; ?>
