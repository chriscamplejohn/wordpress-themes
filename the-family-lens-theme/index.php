<?php get_header(); ?>
<section class="content-shell"><div class="content-header"><p class="kicker"><?php esc_html_e('The Journal', 'the-family-lens'); ?></p><h1><?php esc_html_e('Latest stories', 'the-family-lens'); ?></h1></div><?php if (have_posts()) : ?><div class="content-grid"><?php while (have_posts()) : the_post(); get_template_part('template-parts/content', 'card'); endwhile; ?></div><?php the_posts_pagination(); else : get_template_part('template-parts/content', 'none'); endif; ?></section>
<?php get_footer(); ?>
