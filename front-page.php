<?php get_header(); ?>
<div class="row">
    
    <?php
        if (has_header_image(  )) { ?>
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        <?php } 
    ?>
    <h1>Front Page</h1>

</div>
<?php get_footer(); ?>