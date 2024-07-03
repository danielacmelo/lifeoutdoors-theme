<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Life_Outdoors
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lifeoutdoors-theme' ); ?></a>

	<header id="masthead" class="site-header">
    <div class="header-container">
        <div class="site-branding">
            <?php
            
            $lifeoutdoors_theme_description = get_bloginfo( 'description', 'display' );
            if ( $lifeoutdoors_theme_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $lifeoutdoors_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <div class="menu-left">
                <?php
                
                the_custom_logo();
                
                ?>
            </div>

            <div class="menu-center">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-center',
                        'menu_id'        => 'menu-center-items',
                    )
                );
                ?>
            </div>

            <div class="menu-right">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-right',
                        'menu_id'        => 'menu-right-items',
                    )
                );
                ?>
            </div>
        </nav><!-- #site-navigation -->
    </div><!-- .header-container -->
</header><!-- #masthead -->
