<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">        
        <meta name="description" content="<?php bloginfo('description');?>">    
        <title><?php the_title(); ?> - <?php bloginfo('name');?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap-reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
        <!--[if IE]>
            <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php if ( is_user_logged_in() ) {echo '<style>.navbar.navbar-inverse.navbar-fixed-top {margin-top:32px;}</style>';} ?>
        <?php wp_head(); ?>  
    </head>