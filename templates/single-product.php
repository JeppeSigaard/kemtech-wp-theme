<?php while (have_posts()) : the_post(); ?>
<section class="single-content">
    <div class="inner">
        <main class="content-main" id="content-main">
            <article <?php post_class(); ?>>
                <?php get_template_part('template-parts/common/product-header'); ?>
                <div class="article-content article-base">
                    <?php the_content(); ?>
                    <?php get_template_part('template-parts/common/product-details'); ?>
                    <?php get_template_part('template-parts/common/product-vars'); ?>
                    <?php get_template_part('template-parts/common/product-downloads'); ?>
                </div>
            </article>
        </main>
        <aside class="content-aside fixed-aside">
            <?php get_template_part('template-parts/aside/main'); ?>
        </aside>
    </div>
</section>
<?php endwhile; 
    
    
    