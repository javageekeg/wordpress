<footer id="colophon" class="site-footer">
    <div class="footer-widgets">
        <div class="footer-widget-area">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        <div class="footer-widget-area">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        <div class="footer-widget-area">
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
    </div>
    <div class="site-info">
        &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
    </div><!-- .site-info -->
</footer>
<?php wp_footer(); ?>
</body>
</html>
