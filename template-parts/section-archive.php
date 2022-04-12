<?php
get_header();
?>
<div class="container">
    <p>Our new website is nearly finished. Once it is, we’ll be sharing our latest news here!</p>
    <!-- <section class="news-archive">


        <div class="posts-container">
            <?php if( have_posts() ){ while( have_posts() ){ ?>
            <div class="posts-item">
                <?php the_post(); ?>
                <div class="img-zoom">
                    <a class="post-img-link" href="<?php the_permalink(); ?>">
                        <img src="<?php the_field('image'); ?>" /></a>
                </div>

                <div class="posts-item-inner-container">
                    <h3><?php the_title(); ?></h3>
                    <h4 class="posts-date"><?php the_date(); ?></h4>
                    <?php the_field('excerpt'); ?>
                    <p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>


                </div>



            </div>
            <?php } } ?>
        </div>

        <div class="pagination mt2">
            <div class="nav-previous"><?php previous_posts_link( 'Prev' ); ?></div>
            <div class="nav-next"><?php next_posts_link( 'Next' ); ?></div>
        </div>
    </section> -->
</div>