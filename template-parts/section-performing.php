<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->
<div class="two-column-container">
    <div>
        <?php the_field('copy'); ?>
    </div>
    <div class="quote">
        <p><?php the_field('quote'); ?></p>
    </div>
</div>


<div class="video">
    <?php the_field('video'); ?>
</div>
<?php endwhile; else: endif;?>