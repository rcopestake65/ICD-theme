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

<div class="stats-container">
    <?php
if( have_rows('stats') ): ?>
    <?php  
while ( have_rows('stats') ) : the_row(); 
        $stat = get_sub_field('statistic');
        $number = get_sub_field('number');
        ?>
    <div class="stats-item">
        <h3><?php echo $stat;?></h3>
        <h4><?php echo $number;?></h4>
    </div>
    <?php endwhile; else : endif; ?>
</div>

<div class="two-column-container">
    <div>
        <?php the_field('copy_2'); ?>
        <?php the_field('copy_3'); ?>
    </div>
    <div class="quote">
        <p><?php the_field('quote_2'); ?></p>
    </div>
    <div class="quote">
        <p><?php the_field('quote_3'); ?></p>
    </div>
    <div class="quote">
        <p><?php the_field('quote_4'); ?></p>
    </div>


</div>










<?php endwhile; else: endif;?>