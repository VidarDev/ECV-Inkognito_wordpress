<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ECV_Inkognito
 */

?>

    <div id="contact" class="contact">
        <div class="container">
            <span class="contact__subtitle subtitle"><?php if( get_field('contact_subtitle', 'option')): echo get_field('contact_subtitle', 'option'); endif; ?></span>
            <h2 class="contact__title title"><?php if( get_field('contact_title', 'option')): echo get_field('contact_title', 'option'); endif; ?></h2>
            <div class="contact__wrapper">
                <div class="contact__image">
                    <div class="contact__vertical">
                        <span><?php if( get_field('contact_vertical_text', 'option')): echo get_field('contact_vertical_text', 'option'); endif; ?></span>
                    </div>
                    <?php $contact_image = get_field('contact_image', 'option'); ?>
                    <?php if( $contact_image && !empty( $contact_image )): ?>
                        <img src="<?= esc_url($contact_image['url']) ?>" role="presentation" aria-label="<?= esc_url($contact_image['alt']) ?>" alt="<?= esc_url($contact_image['alt']) ?>" loading="lazy" width="320" height="180" />
                    <?php endif; ?>
                </div>
                <div class="contact__content">
                    <span class="contact__adresse-subtitle"><?php if( get_field('contact_adresse_subtitle', 'option')): echo get_field('contact_adresse_subtitle', 'option'); endif; ?></span>
                    <h3 class="contact__adresse-title"><?php if( get_field('contact_adresse_title', 'option')): echo get_field('contact_adresse_title', 'option'); endif; ?></h3>
                    <div class="contact__adresse">
                        <i class="iconoir-position"></i>
                        <p><?php if( get_field('contact_adresse', 'option')): echo get_field('contact_adresse', 'option'); endif; ?></p>
                    </div>
                    <?php $contact_geoloc = get_field('contact_adresse_image', 'option'); ?>
                    <?php if( $contact_geoloc && !empty( $contact_geoloc )): ?>
                        <img src="<?= esc_url($contact_geoloc['url']) ?>" role="presentation" aria-label="<?= esc_url($contact_geoloc['alt']) ?>" alt="<?= esc_url($contact_geoloc['alt']) ?>" loading="lazy" width="320" height="180" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

	<footer id="footer" class="footer">
		<div class="site-info">
            <span>Copyright ©<?= date('Y'); ?> - Tous droits réservés</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
