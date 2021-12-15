<?php get_header(); ?>
<div class="row">

    <div class="col-3-of-4">
    <?php
        if(have_posts()) {
            while (have_posts(  )) {
                the_post(  ); ?>
                <div>
                    <?php the_post_thumbnail( 'medium', array(
                        'alt' => get_the_title(),
                        'class' => 'post__thumbnail'
                    ) ); ?>
                    <h1><?php the_title( ); ?></h1>
                    <article><?php the_content(  ) ?></article>
                </div>
                <?php
            };
        }
        else { ?>
            <div>
                <p>Nincsenek megjeleníthető cikkek.</p>
            </div>
        <?php }
    
    the_posts_pagination();

    ?>
    </div>

    <div class="col-1-of-4">
        <?php get_sidebar( 'primary' ); ?>
    </div>
</div>
<?php get_footer(); ?>