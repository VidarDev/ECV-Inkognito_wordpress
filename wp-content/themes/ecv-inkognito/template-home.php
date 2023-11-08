<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

    <div id="about" class="about">
        <?php $about_image = get_field('about__image'); ?>
        <?php if ($about_image && !empty($about_image)): ?>
            <figure class="about__image">
                <img src="<?= esc_url($about_image['url']) ?>"
                     role="img"
                     aria-label="<?= esc_url($about_image['alt']) ?>"
                     alt="<?= esc_url($about_image['alt']) ?>"
                     title="<?= esc_url($about_image['alt']) ?>"
                     loading="lazy"
                     width="320"
                     height="180"/>
            </figure>
        <?php endif; ?>
        <div class="about__vertical-text">
            <span><?php if (get_field('about__vertical-text')): echo get_field('about__vertical-text'); endif; ?></span>
        </div>
        <div class="about__content">
            <span class="about__subtitle"><?php if (get_field('about__subtitle')): echo get_field('about__subtitle'); endif; ?></span>
            <h2 class="about__title"><?php if (get_field('about__title')): echo get_field('about__title'); endif; ?></h2>
            <?php if (get_field('about__content')): echo get_field('about__content'); endif; ?>
            <?php if (is_home() || is_front_page()) : ?>
                <div class="about__more">
                    <a class="btn btn--uno"
                       aria-label="<?php if (get_field('read-more', 'option')): echo get_field('read-more', 'option'); endif; ?> <?php if (get_field('about__home-btn-label')): echo get_field('about__home-btn-label'); endif; ?>"
                       href="<?php if (get_field('about__home-btn-url')): echo get_field('about__home-btn-url'); endif; ?>">
                        <?php if (get_field('about__home-btn-label')): echo get_field('about__home-btn-label'); endif; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div id="artistes" class="artistes">
        <div class="container">
            <span class="artistes__subtitle subtitle"><?php if (get_field('artistes__subtitle', 'option')): echo get_field('artistes__subtitle', 'option'); endif; ?></span>
            <h2 class="artistes__title title"><?php if (get_field('artistes__title', 'option')): echo get_field('artistes__title', 'option'); endif; ?></h2>
            <?php if (have_rows('artiste__repeteur', 'option')): ?>
                <div class="artistes__container">
                    <?php while (have_rows('artiste__repeteur', 'option')): the_row(); ?>
                        <a href="<?php if (get_sub_field('artiste__url', 'option')): echo get_sub_field('artiste__url', 'option'); endif; ?>"
                           target="_blank" class="artistes__item">
                            <h3 class="artistes__item-title"><?php if (get_sub_field('artiste__title', 'option')): echo get_sub_field('artiste__title', 'option'); endif; ?></h3>
                            <?php $artiste_image = get_sub_field('artiste__image', 'option'); ?>
                            <?php if ($artiste_image && !empty($artiste_image)): ?>
                                <figure class="artistes__image">
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
            <?php endif; ?>
        </div>
    </div>

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