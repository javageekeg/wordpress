<?php
/**
 * The template for displaying the SmartUp Academy homepage.
 *
 * @package EduPrime
 */

get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <!-- ================================================== -->
            <!-- Hero Section -->
            <!-- ================================================== -->
            <section class="hero-section" style="background-color: var(--sky-light);">
                <div class="hero-content">
                    <h1 class="hero-title"><?php _e( 'التعلم بذكاء... مع SmartUp Academy', 'eduprime' ); ?></h1>
                    <p class="hero-subtitle"><?php _e( 'أكاديمية ذكية لتعليم مهارات التفكير والبرمجة للأطفال', 'eduprime' ); ?></p>
                    <a href="#" class="hero-cta" style="background-color: var(--energy-orange);"><?php _e( 'ابدأ التعلم الآن', 'eduprime' ); ?></a>
                    <div class="lang-switch-placeholder">
                        <button class="lang-switch">Language</button>
                    </div>
                </div>
            </section>

            <!-- ================================================== -->
            <!-- About SmartUp Section -->
            <!-- ================================================== -->
            <section class="about-section">
                <div class="about-container">
                    <div class="about-text">
                        <h2><?php _e( 'رحلة ذكية نحو التعلم الممتع', 'eduprime' ); ?></h2>
                        <p><?php _e( 'نحن في SmartUp Academy نؤمن بأن كل طفل لديه القدرة على أن يصبح مفكراً مبدعاً ومبتكراً. مهمتنا هي توفير بيئة تعليمية ممتعة وملهمة تساعد الأطفال على اكتشاف قدراتهم وتطوير مهاراتهم للمستقبل.', 'eduprime' ); ?></p>
                        <a href="#" class="btn btn-secondary"><?php _e( 'اعرف أكثر', 'eduprime' ); ?></a>
                    </div>
                    <div class="about-image">
                        <img src="https://via.placeholder.com/500x350" alt="Happy child learning with a tablet">
                    </div>
                </div>
            </section>

            <!-- ================================================== -->
            <!-- Programs Section -->
            <!-- ================================================== -->
            <section class="programs-section">
                <div class="programs-container">
                    <div class="program-card">
                        <img src="https://via.placeholder.com/100x100" alt="Creative Thinking Icon">
                        <h3><?php _e( 'التفكير الإبداعي', 'eduprime' ); ?></h3>
                        <p><?php _e( 'دورات تنمي مهارات حل المشكلات والتفكير خارج الصندوق.', 'eduprime' ); ?></p>
                    </div>
                    <div class="program-card">
                        <img src="https://via.placeholder.com/100x100" alt="Fun Math Icon">
                        <h3><?php _e( 'الرياضيات الممتعة', 'eduprime' ); ?></h3>
                        <p><?php _e( 'نجعل الرياضيات مغامرة شيقة وممتعة للأطفال.', 'eduprime' ); ?></p>
                    </div>
                    <div class="program-card">
                        <img src="https://via.placeholder.com/100x100" alt="Smart Programming Icon">
                        <h3><?php _e( 'البرمجة الذكية', 'eduprime' ); ?></h3>
                        <p><?php _e( 'تعليم أساسيات البرمجة بطرق تفاعلية ومبتكرة.', 'eduprime' ); ?></p>
                    </div>
                </div>
            </section>

            <!-- ================================================== -->
            <!-- Testimonials Section -->
            <!-- ================================================== -->
            <section class="testimonials-section" style="background-color: var(--sky-light);">
                <div class="testimonials-container">
                    <h2><?php _e( 'ماذا يقول أولياء الأمور؟', 'eduprime' ); ?></h2>
                    <div class="testimonial-carousel">
                        <div class="testimonial">
                            <p>"<?php _e( 'ابني صار يحب التعلم بفضل SmartUp!', 'eduprime' ); ?>"</p>
                            <span>- <?php _e( 'أحمد، والد طالب', 'eduprime' ); ?></span>
                        </div>
                        <div class="testimonial">
                            <p>"<?php _e( 'محتوى عالي الجودة وطرق تدريس مبتكرة.', 'eduprime' ); ?>"</p>
                            <span>- <?php _e( 'فاطمة، والدة طالبة', 'eduprime' ); ?></span>
                        </div>
                        <div class="testimonial">
                            <p>"<?php _e( 'أفضل استثمار في مستقبل أطفالي.', 'eduprime' ); ?>"</p>
                            <span>- <?php _e( 'يوسف، والد طالب', 'eduprime' ); ?></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ================================================== -->
            <!-- Join Us Section -->
            <!-- ================================================== -->
            <section class="join-us-section">
                <div class="join-us-container">
                    <h2><?php _e( 'ابدأ رحلة طفلك الذكية اليوم', 'eduprime' ); ?></h2>
                    <a href="#" class="btn btn-primary" style="background-color: var(--energy-orange);"><?php _e( 'سجّل الآن', 'eduprime' ); ?></a>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer( 'home' ); ?>
