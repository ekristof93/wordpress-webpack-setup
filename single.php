<?php get_header(); ?>

<?php while (have_posts(  )) {
    the_post(  ); ?>
    <h1><?php the_title( ); ?></h1>
    <article><?php the_content() ?></article>
    <?php
}; ?>

<?php get_footer(); ?>