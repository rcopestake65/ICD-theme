<?php if(have_posts()): while(have_posts()): the_post();?>

</ /?php the_content();?>

<!--ACF CONTENT-->
<section class="parent-therapy">
    <div class="two-column-container">
        <div>
            <?php the_field('parent_therapy_groups'); ?>
            <?php the_field('individual_sessions'); ?>
        </div>

        <?php
if( have_rows('quotes_one') ): ?>
        <div>

            <div class="quote">
                <?php  
while ( have_rows('quotes_one') ) : the_row(); 
        $quoteOne = get_sub_field('quote_one');
        ?>
                <p><?php echo ($quoteOne); ?></p>
                <?php
endwhile;

else :
endif;
?>
            </div>


            <?php
if( have_rows('quotes_two') ): ?>


            <div class="quote mt2">
                <?php  
while ( have_rows('quotes_two') ) : the_row(); 
        $quoteTwo = get_sub_field('quote_two');
        ?>
                <p><?php echo ($quoteTwo); ?></p>
                <?php
endwhile;

else :
endif;
?>
            </div>




        </div>


    </div>

</section>





<?php endwhile; else: endif;?>