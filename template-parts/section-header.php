<div class="inner-container">

    <header>
        <div class="pre-nav">
            <div class="logo">
                <a href="<?php echo get_bloginfo('url') . '/'; ?>"><img
                        src="/wp-content/uploads/i-can-dance-logo.png"></a>
                <a href="<?php echo get_bloginfo('url') . '/'; ?>"><img class="logo-gif"
                        src="/wp-content/uploads/Icandancelogo_animated_TRANS.gif"></a>
            </div>
            <div class="social">

                <a class="donate-btn" href="https://cafdonate.cafonline.org/19445#!/DonationDetails">Donate</a>
                <a class="social-icon" href="https://www.facebook.com/icandanceuk/"><i
                        class="fab fa-facebook fa-lg"></i></a>
                <a class="social-icon" href="https://www.instagram.com/icandanceuk/"><i
                        class="fab fa-instagram fa-lg"></i></a>
                <a class="social-icon" href="https://twitter.com/icandanceuk"><i class="fab fa-twitter fa-lg"></i></a>
                <a class="social-icon" href="https://www.youtube.com/channel/UCeljqOmNtzBEGeDoJ0qL3jQ"><i
                        class="fab fa-youtube fa-lg"></i></a>


            </div>


        </div>
        <nav role="navigation" class="menu-container">

            <?php
wp_nav_menu(
array(
'theme-location' => 'main-menu',
'menu_class' => 'menu',
)
);
?>
            <div class="toggle-btn-container">
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times hide"></i>
                </button>
            </div>

        </nav>
    </header>
</div>
<!--close inner container for mobile nav to be full width-->
<div class="mobile-menu-container">
    <?php
wp_nav_menu(
array(
'theme-location' => 'mobile-menu',
'menu_class' => 'mobile-menu',
)
);
?>
</div>

<div class="main-content">