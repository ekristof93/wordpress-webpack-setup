<?php get_header(); ?>

<?php while (have_posts(  )) {
    the_post(  ); ?>
    <h1><a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a></h1>
    <article><?php the_excerpt(  ) ?></article>
    <?php
}; ?>

<?php get_footer(); ?>