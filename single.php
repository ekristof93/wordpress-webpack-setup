<?php get_header(); ?>
<div class="row">

    <div class="col-3-of-4">
    <?php while (have_posts(  )) {
        the_post(  ); ?>
        <div>
            <h1><a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a></h1>
            <article><?php the_content(  ) ?></article>
        </div>
        <?php
}; ?>
    </div>

    <div class="col-1-of-4">
        <?php get_sidebar( 'primary' ); ?>
    </div>
</div>
<?php get_footer(); ?>