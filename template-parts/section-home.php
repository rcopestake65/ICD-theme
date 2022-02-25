<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->

<div class="two-column-container intro">
    <div>
        <?php the_field('intro'); ?>
    </div>


    <div>
        <?php if( get_field('quote') ): ?>
        <img src="<?php the_field('quote'); ?>" />
        <figcaption><?php the_field('caption'); ?></figcaption>
        <?php endif; ?>
    </div>

</div>
<div class="circles-container">
    <?php if( get_field('image_one') ): ?>
    <img class="circle-1 circles" src="<?php the_field('image_one'); ?>" />
    <?php endif; ?>
    <?php if( get_field('image_two') ): ?>
    <img class="circle-2 circles" src="<?php the_field('image_two'); ?>" />
    <?php endif; ?>
</div>
<div class="main-text">
    <?php the_field('main_content'); ?>
</div>
<div class="video">
    <?php the_field('video'); ?>
</div>
<?php endwhile; else: endif;?>