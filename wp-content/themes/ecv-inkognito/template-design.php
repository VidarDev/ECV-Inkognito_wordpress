<?php
/*
Template Name: Design
*/
?>
<?php get_header(); ?>

<h1 class="screen-reader-only"><?= get_the_title(); ?></h1>

<div id="gallery" class="gallery">
    <div class="container">
        <span class="gallery__subtitle subtitle"><?php if( get_field('gallery_subtitle', 'option')): echo get_field('gallery_subtitle', 'option'); endif; ?></span>
        <h2 class="gallery__title title"><?php if( get_field('gallery_title', 'option')): echo get_field('gallery_title', 'option'); endif; ?></h2>
        <?php if( have_rows('gallery_repeteur', 'option') ): ?>
            <div class="gallery__container">
                <?php while( have_rows('gallery_repeteur', 'option') ): the_row(); ?>
                    <a href="<?= get_sub_field('gallery_url', 'option') ?>" class="gallery__item">
                        <h3 class="gallery__item-title screen-reader-only"><?= get_sub_field('gallery_name', 'option') ?></h3>
                        <?php $artiste_image = get_sub_field('gallery_image', 'option'); ?>
                        <?php if( $artiste_image && !empty( $artiste_image )): ?>
                            <img class="gallery__image" src="<?= esc_url($artiste_image['url']) ?>" role="presentation" aria-label="<?= esc_url($artiste_image['alt']) ?>" alt="<?= esc_url($artiste_image['alt']) ?>" loading="lazy" width="320" height="180" />
                        <?php endif; ?>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
