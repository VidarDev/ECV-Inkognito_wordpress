<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

<div class="hero">
    <?php $background = get_field('background'); ?>
    <div class="hero__background" style=" height: 100vh; width: 100vw; object-fit: cover;
    <?php if( !empty( $background )): ?>
        background-image: url('<?= esc_url($background['url']); ?>')
    <?php endif; ?>
    "></div>

    <div class="hero__wrapper">
        <div>
            <div>
                <h1><?php if( get_field('titre')): echo get_field('titre'); endif; ?></h1>
                <span><?php if( get_field('slogan')): echo get_field('slogan'); endif; ?></span>
                <a class="btn" href="">

                </a>
            </div>
            <a></a>
        </div>
        <div>

        </div>
    </div>
</div>

<?php get_footer(); ?>