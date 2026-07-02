<?php get_header(); ?>
<section class="content-shell"><div class="content-header"><p class="kicker"><?php esc_html_e('Explore', 'the-family-lens'); ?></p><h1><?php the_archive_title(); ?></h1><?php the_archive_description('<div class="archive-description">', '</div>'); ?></div><?php if (have_posts()) : ?><div class="content-grid"><?php while (have_posts()) : the_post(); get_template_part('template-parts/content', 'card'); endwhile; ?></div><?php the_posts_pagination(); else : get_template_part('template-parts/content', 'none'); endif; ?></section>
<?php get_footer(); ?>
