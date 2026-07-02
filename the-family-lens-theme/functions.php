<?php
/**
 * The Family Lens theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

function family_lens_setup() {
    load_theme_textdomain('the-family-lens', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo', array('height' => 220, 'width' => 900, 'flex-height' => true, 'flex-width' => true));
    add_theme_support('automatic-feed-links');
    add_image_size('family-lens-hero', 1536, 1024, true);
    add_image_size('family-lens-card', 720, 460, true);
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'the-family-lens'),
        'footer_explore' => __('Footer Explore', 'the-family-lens'),
        'footer_publication' => __('Footer Publication', 'the-family-lens'),
        'footer_legal' => __('Footer Legal', 'the-family-lens'),
    ));
}
add_action('after_setup_theme', 'family_lens_setup');

function family_lens_scripts() {
    wp_enqueue_style('family-lens-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('family-lens-theme', get_template_directory_uri() . '/assets/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'family_lens_scripts');

function family_lens_excerpt_length($length) {
    return 28;
}
add_filter('excerpt_length', 'family_lens_excerpt_length');

function family_lens_asset($file) {
    return esc_url(get_template_directory_uri() . '/assets/' . ltrim($file, '/'));
}

function family_lens_category_url($slug) {
    $category = get_category_by_slug($slug);
    if ($category) {
        return esc_url(get_category_link($category));
    }
    return esc_url(home_url('/category/' . $slug . '/'));
}

function family_lens_fallback_menu() {
    $items = array(
        'Start Here' => home_url('/start-here/'),
        'Live' => family_lens_category_url('live'),
        'Learn' => family_lens_category_url('learn'),
        'Explore' => family_lens_category_url('explore'),
        'Thrive' => family_lens_category_url('thrive'),
        'Connect' => family_lens_category_url('connect'),
        'Discover' => family_lens_category_url('discover'),
        'The Journal' => home_url('/the-journal/'),
    );
    echo '<ul class="menu">';
    foreach ($items as $label => $url) {
        echo '<li><a href="' . esc_url($url) . '">' . esc_html($label) . '</a></li>';
    }
    echo '</ul>';
}
