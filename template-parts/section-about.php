<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->

<div class="two-column-container">
    <div class="col-1">
        <?php the_field('text_block_one'); ?>
        <div class="video">
            <?php the_field('video'); ?>
            <?php the_field('text_block_two'); ?>
        </div>
        <div class="pullout">
            <?php the_field('pullout'); ?>
        </div>
    </div>
    <div class="col-2">
        <div class="gradient-text">
            <?php if( get_field('quote') ): ?>
            <img src="<?php the_field('quote'); ?>" />
            <?php endif; ?>
        </div>
        <?php if( get_field('image_one') ): ?>
        <img class="circles" src="<?php the_field('image_one'); ?>" />
        <?php endif; ?>

    </div>


</div>



<?php endwhile; else: endif;?>