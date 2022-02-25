<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->

<div class="quote">
    <p><?php the_field('quote'); ?></p>
</div>

<section class="team-section">
    <div class="team-container">
        <?php
if( have_rows('cards') ): ?>
        <?php  
while ( have_rows('cards') ) : the_row(); 
        $image = get_sub_field('image');
        $name = get_sub_field('name');
        $job = get_sub_field('job');
        $biog = get_sub_field('biog');
        ?>
        <div class="team-item">
            <img alt="<?php echo $name; ?>" src="<?php echo $image['url']; ?>" />
            <h4><?php echo $name;?></h4>
            <h5><?php echo $job;?></h5>
            <?php echo $biog;?>
        </div>
        <?php endwhile; else : endif; ?>
    </div>
</section>

<?php

  if( have_rows('volunteers') ):

  while( have_rows('volunteers') ): the_row();

  $heading = get_sub_field('heading');
  $quote = get_sub_field('quote');
  $text = get_sub_field('text'); ?>
<section class="volunteers-section">
    <h4><?php echo $heading;?></h4>
    <div class="quote">
        <p><?php echo $quote;?></p>
    </div>
    <?php echo $text;?>

    <?php endwhile; else : endif; ?>
</section>



<?php

  if( have_rows('student_placements') ):

  while( have_rows('student_placements') ): the_row();

  $heading = get_sub_field('heading');
  $text = get_sub_field('text'); ?>
<section class="student-section">
    <h4><?php echo $heading;?></h4>

    <?php echo $text;?>

    <?php endwhile; else : endif; ?>
</section>
<?php endwhile; else: endif;?>