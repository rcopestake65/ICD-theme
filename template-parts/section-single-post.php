<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->
<section class="single-post">
    <div class="two-column-container">
        <div>
            <img src="<?php the_field('image'); ?>" />
        </div>
        <div class="small-screen-hide">
            <h3>Recent News</h3>
            <ul>
                <?php 
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=5' ); ?>

                <?php 
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink
?>

                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

                <?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>
            </ul>
            <p class="mt2"><a href="/category/news">See all news</a></p>
        </div>
    </div>



    <h3><?php the_title(); ?></h3>
    <h4 class="posts-date"><?php the_date(); ?></h4>
    <?php the_field('blog_post'); ?>



    <div class="pagination">
        <div class="nav-next"><?php next_post_link('%link'); ?></div>
        <div class="nav-previous"><?php previous_post_link('%link'); ?></div>

    </div>
    <div class="small-screen-only mt3">
        <h3>Recent News</h3>
        <ul>
            <?php 
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=5' ); ?>

            <?php 
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink
?>

            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

            <?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>
        </ul>
        <p class="mt2"><a href="/category/news">See all news</a></p>
    </div>
</section>

<?php endwhile; else: endif;?>