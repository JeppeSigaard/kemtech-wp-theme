<?php while (have_posts()) : the_post(); ?>
<section class="page-content">
    <div class="inner">
        <main class="content-main" id="content-main">
            <article <?php post_class(); ?>>
                <?php get_template_part('template-parts/common/article-header'); ?>
                <div class="article-content">
                    <?php the_content(); ?>
                </div>
            </article>
        </main>
        <aside class="content-aside fixed-aside">
           <div class="inner">
                <div class="aside-left"></div>
                <div class="aside-right"></div>
           </div>
        </aside>
    </div>
</section>
<?php endwhile; ?>