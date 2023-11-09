<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div class="contact-form">
    <div class="container">
        <span class="contact-form__subtitle subtitle"><?php if (get_field('contact-form__subtitle')): echo get_field('contact-form__subtitle'); endif; ?></span>
        <h2 class="contact-form__title title"><?php if (get_field('contact-form__title')): echo get_field('contact-form__title'); endif; ?></h2>
        <div class="contact-form__content">
            <?php if (get_field('contact-form__content')): echo get_field('contact-form__content'); endif; ?>
        </div>
        <div class="contact-form__container contact-form-7">
            <?php echo do_shortcode('[contact-form-7 id="9e069af" title="Contact"]'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
