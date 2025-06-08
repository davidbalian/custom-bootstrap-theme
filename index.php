<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', get_post_type() );
    endwhile;
else :
    ?>
    <p>No content found.</p>
    <?php
endif;

get_footer();
