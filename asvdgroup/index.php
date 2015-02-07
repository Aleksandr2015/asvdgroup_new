<?php get_header(); ?>

    <body class="index">
    
        <!-- Navigation primary / Start -->
        <?php include(TEMPLATEPATH . '/navigation-primary.php'); ?>
        <!-- Navigation primary / End -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>
