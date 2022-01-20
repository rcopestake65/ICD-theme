<?php if(have_posts()): while(have_posts()): the_post();?>
<h2 class="handwritten">Our Story</h2>
<?php the_content();?>
<div class="text-quote">
    <p><?php the_field('intro'); ?></p>
    <div class="opening-quote">
        <?php the_field('quote'); ?>
    </div>

</div>

<div class="text-img">
    <div><?php the_field('text_block_one'); ?> <div class="video">
            <?php the_field('video'); ?>
        </div>
    </div>

    <div><?php if( get_field('image_one') ): ?>
        <img class="circles" src="<?php the_field('image_one'); ?>" />
        <?php endif; ?>
    </div>
</div>

<?php the_field('text_block_two'); ?>

<?php endwhile; else: endif;?>