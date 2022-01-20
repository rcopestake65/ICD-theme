<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>
<!-- <div class="ribbon">
    <img src="<?php bloginfo('template_url') ?>/img/ribbon-1.svg">
</div> -->

<!--ACF-->
<div class="intro">
    <p><?php the_field('intro'); ?></p>
    <?php if( get_field('quote') ): ?>
    <img class="quote" src="<?php the_field('quote'); ?>" />
    <?php endif; ?>
</div>
<div class="circles">
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