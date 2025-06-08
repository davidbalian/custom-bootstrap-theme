<?php
/**
 * Template Name: Simple Page Title Only
 * Description: A minimal page template that displays only the page title and a message if there is no content.
 *
 * @package WordPress
 * @subpackage Custom_Theme
 */

global $post;
get_header();
?>

<div class="row site-body">
    <main class="col-md-8 offset-md-2" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="display-4 my-5 text-center"><?php the_title(); ?></h1>
            <?php
            $content = trim( get_the_content() );
            if ( empty( $content ) ) : ?>
                <p class="text-center">No content</p>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </main>
</div>

<?php get_footer(); ?> 