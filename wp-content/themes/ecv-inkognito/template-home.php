<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

<div class="hero">
    <?php $hero_backgrond = get_field('hero_background'); ?>
    <?php if( $hero_backgrond && !empty( $hero_backgrond )): ?>
        <img class="hero__background"
             src="<?= esc_url($hero_backgrond['url']) ?>"
             role="presentation"
             aria-label="<?= esc_url($hero_backgrond['alt']) ?>"
             alt="<?= esc_url($hero_backgrond['alt']) ?>"
             loading="lazy"
             width="320"
             height="180" />
    <?php endif; ?>
    <div class="hero__wrapper">
        <div class="hero__content">
            <?php $setting_logo = get_field('setting_logo', 'option'); ?>
            <?php if( $setting_logo && !empty( $setting_logo )): ?>
                <img src="<?= esc_url($setting_logo['url']) ?>"
                     role="presentation"
                     aria-label="<?= esc_url($setting_logo['alt']) ?>"
                     alt="<?= esc_url($setting_logo['alt']) ?>"
                     loading="lazy"
                     width="320"
                     height="180" />
            <?php endif; ?>
            <h1 class="hero__title screen-reader-only">
                <?php if( get_field('titre')):
                    echo get_field('titre');
                else:
                    echo get_the_title();
                endif; ?>
            </h1>
            <span class="hero__slogan"><?php if( get_field('slogan')): echo get_field('slogan'); endif; ?>
            </span>
            <a class="btn btn--uno" href="<?php if( get_field('hero_url')): echo get_field('hero_url'); endif; ?>">Voir plus</a>
        </div>
        <a href="<?php if(get_field('hero_arrow_link')): echo get_field('hero_arrow_link'); endif; ?>" class="hero__icon">
            <i class="iconoir-nav-arrow-down"></i>
        </a>
    </div>
    <?php if( have_rows('home_informations') ): ?>
    <div class="hero__infos">
        <?php while( have_rows('home_informations') ): the_row(); ?>
            <div class="infos__item">
                <div>
                    <h2 class="infos__title"><?php if( get_sub_field('hero_info_title')): echo get_sub_field('hero_info_title'); endif; ?></h2>
                    <?php if( get_sub_field('hero_info_content')): echo get_sub_field('hero_info_content'); endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div>

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

<div id="artistes" class="artistes">
    <?php $setting_logo_background = get_field('setting_logo_background', 'option'); ?>
    <?php if( $setting_logo_background && !empty( $setting_logo_background )): ?>
        <img class="image-decoration" src="<?= esc_url($setting_logo_background['url']) ?>" role="presentation" aria-label="<?= esc_url($setting_logo_background['alt']) ?>" alt="<?= esc_url($setting_logo_background['alt']) ?>" loading="lazy" width="320" height="180" />
    <?php endif; ?>
    <div class="container">
        <span class="artistes__subtitle subtitle"><?php if( get_field('artistes_subtitle', 'option')): echo get_field('artistes_subtitle', 'option'); endif; ?></span>
        <h2 class="artistes__title title"><?php if( get_field('artistes_title', 'option')): echo get_field('artistes_title', 'option'); endif; ?></h2>
        <?php if( have_rows('artiste_repeteur', 'option') ): ?>
        <div class="artistes__container">
            <?php while( have_rows('artiste_repeteur', 'option') ): the_row(); ?>
            <a href="<?php if( get_sub_field('artiste_url', 'option')): echo get_sub_field('artiste_url', 'option'); endif; ?>" target="_blank" class="artistes__item">
                <h3 class="artistes__item-title"><?php if( get_sub_field('artiste_title', 'option')): echo get_sub_field('artiste_title', 'option'); endif; ?></h3>
                <?php $artiste_image = get_sub_field('artiste_image', 'option'); ?>
                <?php if( $artiste_image && !empty( $artiste_image )): ?>
                    <img class="artistes__image" src="<?= esc_url($artiste_image['url']) ?>" role="presentation" aria-label="<?= esc_url($artiste_image['alt']) ?>" alt="<?= esc_url($artiste_image['alt']) ?>" loading="lazy" width="320" height="180" />
                <?php endif; ?>
            </a>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

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