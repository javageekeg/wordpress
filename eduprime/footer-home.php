<?php
/**
 * The template for displaying the custom homepage footer.
 *
 * @package EduPrime
 */
?>

<!-- Custom Homepage Footer -->
<footer class="homepage-footer" style="background-color: var(--deep-navy); color: #fff;">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="https://via.placeholder.com/150x50" alt="SmartUp Academy Logo">
        </div>
        <div class="footer-social">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
        <div class="footer-copyright">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php _e( 'SmartUp Academy. كل الحقوق محفوظة.', 'eduprime' ); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
