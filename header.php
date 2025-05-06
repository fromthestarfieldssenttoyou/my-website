<!-- header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="top-nav">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
                </a>
            </div>
            <nav>
                <?php 
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'container' => false,
                    'menu_class' => 'menu',
                ));
                ?>
            </nav>
            <div class="auth-buttons">
                <a href="<?php echo wp_login_url(); ?>" class="login-btn">Log In</a>
                <a href="<?php echo wp_registration_url(); ?>" class="signup-btn">Sign Up</a>
            </div>
        </div>
    </header>
</body>
</html>