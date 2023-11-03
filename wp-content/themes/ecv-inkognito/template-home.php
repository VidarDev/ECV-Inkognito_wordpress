<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

<div class="hero">
    <?php $hero_backgrond = get_field('hero_background'); ?>
    <?php if( $hero_backgrond && !empty( $hero_backgrond )): ?>
        <img src="<?= esc_url($hero_backgrond['url']) ?>" role="presentation" aria-label="<?= esc_url($hero_backgrond['alt']) ?>" alt="<?= esc_url($hero_backgrond['alt']) ?>" loading="lazy" width="320" height="180" />
    <?php endif; ?>
    <div class="hero__wrapper">
        <div class="hero__content">
            <h1 class="hero__title"><?php if( get_field('titre')): echo get_field('titre'); endif; ?></h1>
            <span class="hero__slogan"><?php if( get_field('slogan')): echo get_field('slogan'); endif; ?></span>
            <a class="btn btn--uno" href="">

            </a>
        </div>
        <a href="#content" class="hero__icon">
            <i class="iconoir-arrow-down"></i>
        </a>
    </div>
    <div class="hero__infos">
        <?php
        $hero_items = get_field('home_informations');
        // value can be null, convert in case the array is empty
        $hero_items = $hero_items ?: [];

        foreach ($hero_items as $hero_item) { ?>
            <div class="infos__item">
                <h2 class="infos__title"><?= get_field('hero_info_title') ?></h2>
                <?= get_field('hero_info_content') ?>
            </div>
       <?php } ?>
    </div>
</div>

<div id="about" class="about">
    <?php $about_image = get_field('about_image'); ?>
    <?php if( $about_image && !empty( $about_image )): ?>
        <img class="about__image" src="<?= esc_url($about_image['url']) ?>" role="presentation" aria-label="<?= esc_url($about_image['alt']) ?>" alt="<?= esc_url($about_image['alt']) ?>" loading="lazy" width="320" height="180" />
    <?php endif; ?>
    <div class="about__vertical-text">
        <span><?= get_field('about_vertical_text') ?></span>
    </div>
    <div class="about__content">
        <span class="about__subtitle"></span>
        <h2 class="about__title"><?= get_field('about_title') ?></h2>
        <?= get_field('about_content') ?>
    </div>
</div>

<div id="artistes" class="artistes">
    <div class="container">
        <span class="artistes__subtitle"><?= get_field('artistes_subtitle') ?></span>
        <h2 class="artistes__title"><?= get_field('artistes_title') ?></h2>
        <div class="artistes__container">
            <?php
            $artistes_items = get_field('artiste_repeteur');
            // value can be null, convert in case the array is empty
            $artistes_items = $artistes_items ?: [];

            foreach ($artistes_items as $artistes_item) { ?>
                <div class="artistes__item">
                    <h3 class="artistes__title"><?= get_field('artiste_title') ?></h3>
                    <?php $artiste_image = get_field('artiste_image'); ?>
                    <?php if( $artiste_image && !empty( $artiste_image )): ?>
                        <img class="artistes__image" src="<?= esc_url($artiste_image['url']) ?>" role="presentation" aria-label="<?= esc_url($artiste_image['alt']) ?>" alt="<?= esc_url($artiste_image['alt']) ?>" loading="lazy" width="320" height="180" />
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div id="gallery" class="gallery">
    <div class="container">
        <span class="gallery__subtitle"><?= get_field('gallery_subtitle') ?></span>
        <h2 class="gallery__title"><?= get_field('gallery_title') ?></h2>
        <div class="gallery__container">
            <?php
            $artistes_items = get_field('gallery_repeteur');
            // value can be null, convert in case the array is empty
            $artistes_items = $artistes_items ?: [];

            foreach ($artistes_items as $artistes_item) { ?>
                <div class="gallery__item">
                    <h3 class="gallery__title"><?= get_field('artiste_title') ?></h3>
                    <?php $artiste_image = get_field('artiste_image'); ?>
                    <?php if( $artiste_image && !empty( $artiste_image )): ?>
                        <img class="gallery__image" src="<?= esc_url($artiste_image['url']) ?>" role="presentation" aria-label="<?= esc_url($artiste_image['alt']) ?>" alt="<?= esc_url($artiste_image['alt']) ?>" loading="lazy" width="320" height="180" />
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div id="contact" class="contact">
    <div class="container">
        <span class="contact__subtitle"><?= get_field('contact_subtitle') ?></span>
        <h2 class="contact__title"><?= get_field('contact_title') ?></h2>
        <div class="contact__wrapper">
            <div class="contact__image">
                <div class="contact__vertical">
                    <span><?= get_field('contact_vertical_text') ?></span>
                </div>
                <?php $contact_image = get_field('contact_image'); ?>
                <?php if( $contact_image && !empty( $contact_image )): ?>
                    <img class="gallery__image" src="<?= esc_url($contact_image['url']) ?>" role="presentation" aria-label="<?= esc_url($contact_image['alt']) ?>" alt="<?= esc_url($contact_image['alt']) ?>" loading="lazy" width="320" height="180" />
                <?php endif; ?>
            </div>
            <div class="contact__content">
                <span class="contact__adresse-subtitle"><?= get_field('contact_adresse_subtitle') ?></span>
                <h2 class="contact__adresse-title"><?= get_field('contact_adresse_title') ?></h2>
                <div class="contact__adresse">
                    <i class="iconoir-"></i>
                    <p><?= get_field('contact_adresse') ?></p>
                </div>
                <?php $contact_geoloc = get_field('contact_adresse_image'); ?>
                <?php if( $contact_geoloc && !empty( $contact_geoloc )): ?>
                    <img class="gallery__image" src="<?= esc_url($contact_geoloc['url']) ?>" role="presentation" aria-label="<?= esc_url($contact_geoloc['alt']) ?>" alt="<?= esc_url($contact_geoloc['alt']) ?>" loading="lazy" width="320" height="180" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>