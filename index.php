<?php get_header(); ?>
<div class="row">

<?php while (have_posts(  )) {
    the_post(  ); ?>
        <div>
            <h1><a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a></h1>
            <article><?php the_excerpt(  ) ?></article>
        </div>
        <?php
}; ?>

</div>
<?php get_footer(); ?>