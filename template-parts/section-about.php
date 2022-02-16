<?php if(have_posts()): while(have_posts()): the_post();?>
<h2 class="handwritten">Our Story</h2>
<?php the_content();?>


<div class="two-columns">
    <div class="item-1">
        <?php the_field('text_block_one'); ?>

    </div>
    <div class="item-2">
        <div class="opening-quote">
            <?php the_field('quote'); ?>
        </div>
        <?php if( get_field('image_one') ): ?>
        <img class="circles" src="<?php the_field('image_one'); ?>" />
        <?php endif; ?>
    </div>
    <div class="item-3">
        <div class="video">
            <?php the_field('video'); ?>
        </div>
    </div>
    <div class="item-4">
        <?php the_field('text_block_two'); ?>
    </div>
    <div class="item-5">
        <div class="pullout">
            <?php the_field('pullout'); ?>
        </div>

    </div>

</div>



<?php endwhile; else: endif;?>