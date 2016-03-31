<section class="archive-content">
    <div class="inner">
        <main class="content-main" id="content-main">
            <div class="archive-list">
            <?php while (have_posts()) { 
                the_post(); 
                if ('produkt' === get_post_type(get_the_ID())){
                    get_template_part('template-parts/common/product-list');
                }
            } ?>
            </div>
        </main>
        <aside class="content-aside fixed-aside">
            <?php get_template_part('template-parts/aside/main'); ?>
        </aside>
    </div>
</section>
