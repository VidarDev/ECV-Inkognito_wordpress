<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ECV_Inkognito
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link as="style" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet preload" async />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="header" class="header">
		<nav id="navigation" class="nav">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="iconoir-menu"></i><?php esc_html_e( 'Primary Menu', 'ecv-inkognito' ); ?></button>
			<div class="nav-modal">
                <?php $setting_background = get_field('setting_background'); ?>
                <?php if( $setting_background && !empty( $setting_background )): ?>
                    <img src="<?= esc_url($setting_background['url']) ?>" role="presentation" aria-label="<?= esc_url($setting_background['alt']) ?>" alt="<?= esc_url($setting_background['alt']) ?>" loading="lazy" width="320" height="180" />
                <?php endif; ?>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="iconoir-menu"></i><?php esc_html_e( 'Primary Menu', 'ecv-inkognito' ); ?></button>
                <div class="nav-modal__content">
                    <?php $setting_logo = get_field('setting_logo'); ?>
                    <?php if( $setting_logo && !empty( $setting_logo )): ?>
                        <img src="<?= esc_url($setting_logo['url']) ?>" role="presentation" aria-label="<?= esc_url($setting_logo['alt']) ?>" alt="<?= esc_url($setting_logo['alt']) ?>" loading="lazy" width="320" height="180" />
                    <?php endif; ?>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
