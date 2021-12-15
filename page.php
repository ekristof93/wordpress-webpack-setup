<?php get_header(); ?>
<div class="row">

<?php while (have_posts(  )) {
    the_post(  ); ?>
        <div>
            <h1><?php the_title( ); ?></h1>
            <article><?php the_content(  ) ?></article>
        </div>
        <?php
}; ?>

</div>
<?php get_footer(); ?>