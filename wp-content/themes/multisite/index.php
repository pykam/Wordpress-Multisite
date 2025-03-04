<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <?php wp_head(); ?>
    </head>
    <body class="font-sans leading-normal tracking-normal">
        <?php get_header(); ?>
        <div class="container w-full md:max-w-3xl mx-auto pt-20 pb-20">
            <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : 
                        the_post(); 
            ?>

                    <h1><?php the_title(); ?></h3>

                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>

                <?php endwhile; ?>

            <?php
                if ( get_next_posts_link() ) {
                    next_posts_link();
                }
            ?>
            <?php
                if ( get_previous_posts_link() ) {
                    previous_posts_link();
                }
            ?>

            <?php else: ?>

            <p>No posts found. :(</p>

            <?php endif; ?>
        </div>
        <?php 

            $blog_details = get_blog_details();

            if ($blog_details->domain === 'site1.multisite') {
                get_footer('site1');
            } elseif ($blog_details->domain === 'site2.multisite') {
                get_footer('site2');
            } else {
                get_footer();
            } 
        ?>

        <?php wp_footer(); ?>
    </body>
</html>