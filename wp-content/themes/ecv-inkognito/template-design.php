<?php
/*
Template Name: Design
*/
?>
<?php get_header(); ?>

<h1 class="screen-reader-only"><?= get_the_title(); ?></h1>

<div id="gallery" class="gallery">
    <div class="container">
        <span class="gallery__subtitle subtitle"><?php if (get_field('galleries__subtitle', 'option')): echo get_field('galleries__subtitle', 'option'); endif; ?></span>
        <h2 class="gallery__title title"><?php if (get_field('galleries__title', 'option')): echo get_field('galleries__title', 'option'); endif; ?></h2>
        <?php if (have_rows('galleries__repeteur', 'option')): ?>
            <div class="gallery__container">
                <?php while (have_rows('galleries__repeteur', 'option')): the_row(); ?>
                    <a href="<?= get_sub_field('gallery__url', 'option') ?>" class="gallery__item">
                        <h3 class="gallery__item-title screen-reader-only"><?= get_sub_field('gallery__name', 'option') ?></h3>
                        <?php $artiste_image = get_sub_field('gallery__image', 'option'); ?>
                        <?php if ($artiste_image && !empty($artiste_image)): ?>
                            <figure class="gallery__image">
                                <img src="<?= esc_url($artiste_image['url']) ?>"
                                     role="presentation"
                                     aria-label="<?= esc_url($artiste_image['alt']) ?>"
                                     alt="<?= esc_url($artiste_image['alt']) ?>"
                                     title="<?= esc_url($artiste_image['alt']) ?>"
                                     loading="lazy"
                                     width="320"
                                     height="180"/>
                            </figure>
                        <?php endif; ?>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php if (is_home() || is_front_page()) : ?>
                <div class="gallery__more">
                    <a class="btn btn--uno"
                       aria-label="<?php if (get_field('read-more', 'option')): echo get_field('read-more', 'option'); endif; ?> <?php if (get_field('galleries__label', 'option')): echo get_field('galleries__label', 'option'); endif; ?>"
                       href="<?php if (get_field('galleries__url', 'option')): echo get_field('galleries__url', 'option'); endif; ?>">
                        <?php if (get_field('galleries__label', 'option')): echo get_field('galleries__label', 'option'); endif; ?>
                    </a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
