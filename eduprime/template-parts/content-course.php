<?php
/**
 * Template part for displaying course content
 *
 * @package EduPrime
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'course-card' ); ?>>
    <div class="course-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'medium' ); ?>
        </a>
    </div>

    <header class="entry-header">
        <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>
