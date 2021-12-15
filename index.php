<?php get_header(); ?>
<div class="row">

    <div class="col-3-of-4">
    <?php while (have_posts(  )) {
        the_post(  ); ?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium', array(
                    'alt' => get_the_title(),
                    'class' => 'post__thumbnail'
                ) ); ?>
            </a>
            <h1><a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a></h1>
            <article><?php the_excerpt(  ) ?></article>
        </div>
        <?php
    }; 
    
    the_posts_pagination();

    ?>
    </div>

    <div class="col-1-of-4">
        <?php get_sidebar( 'primary' ); ?>
    </div>
</div>
<?php get_footer(); ?>