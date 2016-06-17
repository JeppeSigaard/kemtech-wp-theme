<?php /*template name: Kontaktside*/ get_template_part('template-parts/wrapper/start'); ?>
<section class="single-content">
    <div class="inner">
        <?php while (have_posts()) : the_post(); ?>
        <main class="content-main" id="content-main">
            <article <?php post_class(); ?>>
                <?php get_template_part('template-parts/common/article-header'); ?>
                <div class="article-content article-base">
                    <?php the_content(); ?>
                    <?php get_template_part('template-parts/common/contact-form'); ?>
                </div>
            </article>
        </main>
        <?php endwhile; ?>
        <aside class="content-aside fixed-aside">
           <?php get_template_part('template-parts/aside/main'); ?>
        </aside>
    </div>
</section>
<?php get_template_part('template-parts/wrapper/end');