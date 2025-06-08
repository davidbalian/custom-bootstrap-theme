<?php
/**
 * Template part for displaying posts
 * Markup for a single post item within a WordPress loop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card bg-light mb-4 rounded p-3' ); ?>>
    <?php if ( has_post_thumbnail() ) : // Check if the post has a featured image ?>
        <div class="d-flex justify-content-center mb-3">
            <div class="post-thumbnail-container rounded-circle overflow-hidden d-flex justify-content-center align-items-center">
                <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
            </div>
        </div>
    <?php endif; ?>

    <div class="card-body text-center">
        <h2 class="card-title text-dark"><a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a></h2>
        <p class="card-text">
            <small class="text-muted">
                <?php the_time( 'F j, Y' ); ?> by <?php the_author(); ?>
            </small>
        </p>
        <hr class="my-3 border-secondary-subtle"> <!-- Very light gray separator -->
        <div class="card-text text-start">
            <?php the_excerpt(); // Displays a short summary of the post content ?>
        </div>
        <div class="d-flex justify-content-end">
            <a href="<?php the_permalink(); ?>" class="btn btn-success mt-3 rounded">Read More</a>
        </div>
    </div>
</article>
