<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header container">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </header>

    <div class="site-content container">
        <div class="row">
            <main class="col-md-8">