<?php
get_header();
?>

<div class="row site-body">
    <main class="col-md-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-article card bg-white mb-4 p-4 border-0'); ?> style="border-radius: 12px;">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="post-thumbnail-container rounded-circle overflow-hidden d-flex justify-content-center align-items-center" style="width: 180px; height: 180px;">
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                        </div>
                    </div>
                <?php endif; ?>
                <div class="text-center mb-3">
                    <h1 class="display-5 text-dark mb-2"><?php the_title(); ?></h1>
                    <div class="mb-2">
                        <small class="text-muted">
                            <?php echo get_the_date('F j, Y'); ?> by <?php the_author(); ?>
                        </small>
                    </div>
                </div>
                <hr class="my-3 border-secondary-subtle">
                <div class="single-post-content mb-4">
                    <?php the_content(); ?>
                </div>
                <?php $post_tags = get_the_tags(); if ( $post_tags ) : ?>
                    <div class="mt-4">
                        <h6 class="mb-2 text-muted">Tags:</h6>
                        <div class="d-flex flex-wrap">
                            <?php foreach( $post_tags as $tag ) : ?>
                                <span class="tag-badge m-1"><?php echo esc_html( $tag->name ); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile; endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?> 