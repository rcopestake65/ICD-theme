<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->

<div class="two-column-container">
    <div class="col-1">
        <?php the_field('text_one'); ?>
    </div>
    <div class="col-2">
        <?php if( get_field('quote') ): ?>
        <img src="<?php the_field('quote'); ?>" />
        <?php endif; ?>
    </div>
</div>
<?php
if( have_rows('image_grid_one') ): ?>
<div class="image-container">
    <?php  
while ( have_rows('image_grid_one') ) : the_row(); 
        $image = get_sub_field('image');
        ?>
    <div class="image-grid-one-item-<?php echo get_row_index(); ?>">
        <img class="circles" alt="dancers" src="<?php echo $image['url']; ?>" />
    </div>
    <?php
endwhile;

else :
endif;
?>
</div>





<?php endwhile; else: endif;?>