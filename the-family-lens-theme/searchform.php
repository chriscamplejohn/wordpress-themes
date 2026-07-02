<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php esc_html_e('Search for:', 'the-family-lens'); ?></span>
        <input type="search" class="search-field" placeholder="<?php esc_attr_e('Search The Family Lens', 'the-family-lens'); ?>" value="<?php echo get_search_query(); ?>" name="s">
    </label>
    <button type="submit" class="search-submit"><?php esc_html_e('Search', 'the-family-lens'); ?></button>
</form>
