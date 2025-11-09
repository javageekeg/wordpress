<?php
/**
 * The template for the front page.
 *
 * @package EduPrime
 */

get_header(); ?>

<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title"><?php echo esc_html__( 'Start Your Learning Journey', 'eduprime' ); ?></h1>
        <p class="hero-subtitle"><?php echo esc_html__( 'Discover thousands of courses to help you achieve your goals.', 'eduprime' ); ?></p>
        <a href="#" class="hero-cta"><?php echo esc_html__( 'Browse Courses', 'eduprime' ); ?></a>
    </div>
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // You can add other content here, like featured courses, etc.
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_content();
            }
        }
        ?>
    </main>
</div>

<?php
get_footer();
