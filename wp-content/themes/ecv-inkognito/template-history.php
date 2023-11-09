<?php
/*
Template Name: History
*/
?>
<?php get_header(); ?>

<h1 class="screen-reader-only"><?= get_the_title(); ?></h1>

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

<div id="about-content" class="about-content">
    <div class="container">
        <span class="about-content__subtitle subtitle"><?php if (get_field('about-content-subtitle')): echo get_field('about-content-subtitle'); endif; ?></span>
        <h2 class="about-content__title title"><?php if (get_field('about-content__title')): echo get_field('about-content__title'); endif; ?></h2>
        <?php if (get_field('about-content__content')): ?>
            <div class="about-content__content">
                <?= get_field('about-content__content'); ?>
            </div>
        <?php endif; ?>
        <div id="timeline" class="timeline">
            <span class="timeline__subtitle subtitle"><?php if (get_field('timeline__subtitle')): echo get_field('timeline__subtitle'); endif; ?></span>
            <h2 class="timeline__title title"><?php if (get_field('timeline__title')): echo get_field('timeline__title'); endif; ?></h2>
            <ul class="timeline__wrapper">
                <?php if (have_rows('timeline')): ?>
                    <?php while (have_rows('timeline')): the_row(); ?>
                        <li class="timeline__items">
                            <details>
                                <summary
                                        class="timeline__label">
                                    <h3><?php if (get_sub_field('timeline__label')): echo get_sub_field('timeline__label'); endif; ?></h3>
                                </summary>
                                <div class="timeline__content">
                                    <span class="timeline__date"><?php if (get_sub_field('timeline__date')): echo get_sub_field('timeline__date'); endif; ?></span>
                                    <?php if (get_sub_field('timeline__content')): echo get_sub_field('timeline__content'); endif; ?>
                                </div>
                            </details>
                            <?php $artiste_image = get_sub_field('timeline__image', 'option'); ?>
                            <?php if ($artiste_image && !empty($artiste_image)): ?>
                                <figure class="timeline__image">
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
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <?php if (get_field('about-content__content2')): ?>
            <div class="about-content__content">
                <?= get_field('about-content__content2'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
