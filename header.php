<?php
/**
 * Header template
 *
 * @package LuxModern
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'lux-modern'); ?></a>

    <header id="masthead" class="navbar" role="banner">
        <div class="navbar-container">
            <div class="navbar-brand">
                <?php
                if (has_custom_logo()) :
                    the_custom_logo();
                else :
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <span class="site-title"><?php bloginfo('name'); ?></span>
                    </a>
                <?php endif; ?>
            </div>

            <nav id="site-navigation" class="navbar-menu" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'lux-modern'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>

            <div class="navbar-actions">
                <a href="#contact" class="btn btn-ghost btn-sm"><?php esc_html_e('Contact', 'lux-modern'); ?></a>
                <a href="#get-started" class="btn btn-primary btn-sm"><?php esc_html_e('Get Started', 'lux-modern'); ?></a>
            </div>

            <button class="mobile-menu-toggle" aria-controls="site-navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
                <span class="screen-reader-text"><?php esc_html_e('Menu', 'lux-modern'); ?></span>
            </button>
        </div>
    </header>
