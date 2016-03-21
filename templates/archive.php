<section class="archive-content">
    <div class="inner">
        <main class="content-main" id="content-main">
            <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
            </article>
            <?php endwhile; ?>
        </main>
        <aside class="content-aside fixed-aside">
            <?php get_template_part('template-parts/aside/main'); ?>
        </aside>
    </div>
</section>
