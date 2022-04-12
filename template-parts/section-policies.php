<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->
<section class="policies">
    <p><?php the_field('copy'); ?></p>
    <div class="three-column-container">
        <?php
            if( have_rows('policies') ):
            while( have_rows('policies') ): the_row();
            $title = get_sub_field('title');
            $abstract = get_sub_field('abstract');
            $download = get_sub_field('download');
            ?>
        <div class="policy">
            <h3><?php echo $title; ?></h3>
            <?php echo $abstract; ?>
            <a class="download-btn" href="<?php echo esc_url( $download ); ?>">Download</a></p>
        </div>


        <?php endwhile; else : endif; ?>
    </div>
</section>





<?php endwhile; else: endif;?>