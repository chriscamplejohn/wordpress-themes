<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="single-shell"><article <?php post_class('single-article'); ?>><h1><?php the_title(); ?></h1><?php if (has_post_thumbnail()) : ?><figure class="featured-image"><?php the_post_thumbnail('family-lens-hero'); ?></figure><?php endif; ?><div class="entry-content"><?php the_content(); ?></div></article><?php if (comments_open() || get_comments_number()) comments_template(); ?></section>
<?php endwhile; ?>
<?php get_footer(); ?>
