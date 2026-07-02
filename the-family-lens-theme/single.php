<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="single-shell"><article <?php post_class('single-article'); ?>><p class="single-meta"><?php echo esc_html(get_the_date()); ?><?php if (has_category()) : ?> / <?php the_category(', '); ?><?php endif; ?></p><h1><?php the_title(); ?></h1><?php if (has_post_thumbnail()) : ?><figure class="featured-image"><?php the_post_thumbnail('family-lens-hero'); ?></figure><?php endif; ?><div class="entry-content"><?php the_content(); wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'the-family-lens'), 'after' => '</div>')); ?></div></article><nav class="post-nav"><?php previous_post_link('%link', '&larr; %title'); ?><?php next_post_link('%link', '%title &rarr;'); ?></nav><?php if (comments_open() || get_comments_number()) comments_template(); ?></section>
<?php endwhile; ?>
<?php get_footer(); ?>
