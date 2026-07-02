<?php
/** Header template. */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'the-family-lens'); ?></a>
<header class="masthead" id="top">
    <a class="brand-banner" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('The Family Lens home', 'the-family-lens'); ?>">
        <?php $family_lens_logo_id = get_theme_mod('custom_logo'); ?>
        <?php if ($family_lens_logo_id) : ?>
            <?php echo wp_get_attachment_image($family_lens_logo_id, 'full', false, array('alt' => get_bloginfo('name'))); ?>
        <?php else : ?>
            <img src="<?php echo family_lens_asset('family-lens-cover-art.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> - <?php echo esc_attr(get_bloginfo('description')); ?>">
        <?php endif; ?>
    </a>
    <nav class="nav" aria-label="<?php esc_attr_e('Primary navigation', 'the-family-lens'); ?>">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'fallback_cb' => 'family_lens_fallback_menu')); ?>
        <button class="search nav-search-toggle" type="button" aria-expanded="false" aria-controls="site-search-panel" aria-label="<?php esc_attr_e('Search', 'the-family-lens'); ?>"><span></span></button>
    </nav>
    <div class="search-panel" id="site-search-panel">
        <?php get_search_form(); ?>
    </div>
</header>
<main id="content">
