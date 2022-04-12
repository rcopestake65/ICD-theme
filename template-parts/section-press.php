<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->
<section class="press">
    <?php the_field('copy'); ?>
    <?php if( have_rows('image_grid') ): ?>
    <div class="image-container">
        <?php  
while ( have_rows('image_grid') ) : the_row(); 
        $image = get_sub_field('image');
        ?>
        <div class="image-grid-one-item-<?php echo get_row_index(); ?>">
            <img class="circles" alt="<?php echo esc_attr($image['alt']); ?>" src="<?php echo $image['url']; ?>" />
        </div>
        <?php
endwhile;

else :
endif;
?>
    </div>

</section>





<?php endwhile; else: endif;?>