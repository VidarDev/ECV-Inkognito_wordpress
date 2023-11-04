<?php
/*
Template Name: History
*/
?>
<?php get_header(); ?>

<h1 class="screen-reader-only"><?= get_the_title(); ?></h1>

<div id="about" class="about">
    <?php $about_image = get_field('about_image'); ?>
    <?php if( $about_image && !empty( $about_image )): ?>
        <img class="about__image" src="<?= esc_url($about_image['url']) ?>" role="presentation" aria-label="<?= esc_url($about_image['alt']) ?>" alt="<?= esc_url($about_image['alt']) ?>" loading="lazy" width="320" height="180" />
    <?php endif; ?>
    <div class="about__vertical-text">
        <span><?php if( get_field('about_vertical_text')): echo get_field('about_vertical_text'); endif; ?></span>
    </div>
    <div class="about__content">
        <span class="about__subtitle"><?php if( get_field('about_subtitle')): echo get_field('about_subtitle'); endif; ?></span>
        <h2 class="about__title"><?php if( get_field('about_title')): echo get_field('about_title'); endif; ?></h2>
        <?php if( get_field('about_content')): echo get_field('about_content'); endif; ?>
    </div>
</div>

<?php get_footer(); ?>
