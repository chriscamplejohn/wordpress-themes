<?php /** Footer template. */ ?>
</main>
<footer class="site-footer">
    <div class="footer-inner">
        <section class="footer-brand-block" aria-label="<?php esc_attr_e('The Family Lens', 'the-family-lens'); ?>">
            <img src="<?php echo family_lens_asset('family-lens-brush-logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
            <p><?php esc_html_e('Thoughtful journalism for modern family life, written with clarity, curiosity and care.', 'the-family-lens'); ?></p>
            <nav class="footer-socials" aria-label="<?php esc_attr_e('Social links', 'the-family-lens'); ?>">
                <a href="#" class="social-icon instagram" aria-label="Instagram"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5.5" y="5.5" width="13" height="13" rx="4"></rect><circle cx="12" cy="12" r="3.2"></circle><circle cx="16.2" cy="7.8" r=".7"></circle></svg></a>
                <a href="#" class="social-icon facebook" aria-label="Facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.4 20v-7.1h2.4l.4-2.8h-2.8V8.4c0-.8.3-1.4 1.5-1.4h1.5V4.5c-.3 0-1.2-.1-2.3-.1-2.3 0-3.8 1.4-3.8 3.8v1.9H8v2.8h2.3V20"></path></svg></a>
                <a href="#" class="social-icon pinterest" aria-label="Pinterest"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11.8 4.5c-4 0-6.2 2.7-6.2 5.6 0 1.7.8 3.1 2.1 3.6.2.1.4 0 .5-.3l.3-1.2c.1-.3 0-.4-.2-.7-.4-.5-.7-1.1-.7-2 0-2.2 1.7-3.9 4.1-3.9 2.2 0 3.6 1.3 3.6 3.4 0 2.5-1.2 4.2-2.8 4.2-.9 0-1.6-.8-1.4-1.7.3-1.1.8-2.2.8-3 0-.7-.4-1.3-1.1-1.3-.9 0-1.6.9-1.6 2.1 0 .8.3 1.3.3 1.3l-1.2 5.1c-.3 1.2-.2 2.7-.1 3.7"></path></svg></a>
                <a href="#" class="social-icon youtube" aria-label="YouTube"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4.5" y="7" width="15" height="10" rx="3"></rect><path d="M10.5 9.7v4.6l4-2.3z"></path></svg></a>
                <a href="#" class="social-icon linkedin" aria-label="LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.5 10v8"></path><path d="M6.5 6.6v.1"></path><path d="M11 18v-8"></path><path d="M11 13.1c.2-1.8 1.3-3.1 3.1-3.1 2.1 0 3.4 1.4 3.4 4V18"></path></svg></a>
                <a href="#" class="social-icon x-twitter" aria-label="X"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 6l10 12"></path><path d="M17 6L7 18"></path></svg></a>
            </nav>
        </section>
        <nav class="footer-column" aria-label="<?php esc_attr_e('Explore The Family Lens', 'the-family-lens'); ?>">
            <h2><?php esc_html_e('Explore', 'the-family-lens'); ?></h2>
            <?php wp_nav_menu(array('theme_location' => 'footer_explore', 'container' => false, 'fallback_cb' => 'family_lens_fallback_menu', 'items_wrap' => '%3$s')); ?>
        </nav>
        <div class="footer-column footer-combined">
            <nav aria-label="<?php esc_attr_e('Publication links', 'the-family-lens'); ?>">
                <h2><?php esc_html_e('Publication', 'the-family-lens'); ?></h2>
                <?php if (has_nav_menu('footer_publication')) : ?>
                    <?php wp_nav_menu(array('theme_location' => 'footer_publication', 'container' => false, 'fallback_cb' => false, 'items_wrap' => '%3$s')); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/editorial-standards/')); ?>"><?php esc_html_e('Editorial Standards', 'the-family-lens'); ?></a>
                    <a href="<?php echo esc_url(home_url('/newsletter/')); ?>"><?php esc_html_e('Newsletter', 'the-family-lens'); ?></a>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>"><?php esc_html_e('About', 'the-family-lens'); ?></a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact', 'the-family-lens'); ?></a>
                <?php endif; ?>
            </nav>
            <nav aria-label="<?php esc_attr_e('Legal links', 'the-family-lens'); ?>">
                <h2><?php esc_html_e('Legal', 'the-family-lens'); ?></h2>
                <?php if (has_nav_menu('footer_legal')) : ?>
                    <?php wp_nav_menu(array('theme_location' => 'footer_legal', 'container' => false, 'fallback_cb' => false, 'items_wrap' => '%3$s')); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"><?php esc_html_e('Privacy Policy', 'the-family-lens'); ?></a>
                    <a href="<?php echo esc_url(home_url('/terms-of-use/')); ?>"><?php esc_html_e('Terms of Use', 'the-family-lens'); ?></a>
                    <a href="<?php echo esc_url(home_url('/acceptable-use/')); ?>"><?php esc_html_e('Acceptable Use', 'the-family-lens'); ?></a>
                <?php endif; ?>
            </nav>
        </div>
    </div>
    <div class="footer-brush" aria-hidden="true"></div>
    <div class="footer-bottom">
        <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'the-family-lens'); ?></p>
        <a href="#top"><?php esc_html_e('Back to top', 'the-family-lens'); ?></a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
