<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
else :
    ?>
    <p>No content found.</p>
    <?php
endif;

get_footer();