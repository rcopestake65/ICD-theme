<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<!--ACF CONTENT-->

<h3><?php the_field('intro'); ?></h3>

<div class="form-container">

    <div class="form-item">

        <form id="contactForm" action="#" method="post">
            <div class="form-control">
                <label for="name">Name<sup>*</sup></label>
                <input id="name" name="name" type="text" class="feedback-input" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email<sup>*</sup></label>
                <input id="email" name="email" type="text" class="feedback-input" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="phone">Phone<sup>*</sup></label>
                <input id="phone" name="phone" type="text" class="feedback-input" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="message">Message<sup>*</sup></label>
                <textarea id="body" name="body" class="feedback-input"></textarea>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <input type="submit" value="Submit" id="submit-btn" />
        </form>

        <div class="thanks-message">
            <p>Thank you for contacting icandance.</p>
            <p>We'll get back to you shortly</p>
            <img src="../img" alt="">
        </div>
    </div>
    <div class="address mt1">

        <h3 class="mt1">Our venues for weekly sessions are in Hampstead:</h3>
        <div class="pdfs">
            <?php the_field('children'); ?>
            <?php the_field('young_people'); ?>
        </div>

        <?php the_field('session_link'); ?>
        <p><i class="fas fa-phone fa-lg"></i> <?php the_field('phone'); ?><br />
            <i class="fas fa-mobile-alt fa-lg"></i> &nbsp;&nbsp;<?php the_field('mobile'); ?>
        </p>

        <p><?php the_field('address'); ?></p>




    </div>

</div>
<!--close form-container-->

<?php endwhile; else: endif;?>