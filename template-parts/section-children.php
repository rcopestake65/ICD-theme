<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>
<div class="columns">
    <div class="column-one">
        <?php the_field('text'); ?>

        <div class="video">
            <?php the_field('video_one'); ?>

        </div>
        <div class="video">

            <?php the_field('video_two'); ?>
        </div>
        <?php the_field('text_block_two'); ?>
    </div>
    <div class="column-two">
        <div class="opening-quote">
            <?php the_field('quote'); ?>
        </div>

        <?php

                // check if the repeater field has rows of data
                if( have_rows('image_grid') ): ?>
        <div class="image-grid">


            <?php  
            // loop through the rows of data
            while ( have_rows('image_grid') ) : the_row(); 
                        $image = get_sub_field('image');
                        ?>

            <div class="image-item-<?php echo get_row_index(); ?>">
                <img class="circles" alt="dancers" src="<?php echo $image['url']; ?>" />
            </div>

            <?php
            endwhile;

        else :

    // no rows found

endif;

?>
        </div>
    </div>
</div>



<?php endwhile; else: endif;?>