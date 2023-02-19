<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>


<body>

    <header>
        <div class="logo">
            <h2><a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h2>
        </div>

        <?php 
            wp_nav_menu( array( 'theme_location'=>'main-menu', 'container_class'=>'custom-menu-class' ) );
        ?>

    </header>