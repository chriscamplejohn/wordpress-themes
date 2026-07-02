<article <?php post_class('post-card'); ?>>
    <?php if (has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('family-lens-card'); ?></a><?php endif; ?>
    <p class="entry-meta"><?php echo esc_html(get_the_date()); ?></p>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read article', 'the-family-lens'); ?> &rarr;</a>
</article>
