<section class="archive-content">
    <div class="inner">
        <main class="content-main" id="content-main">
            <?php if ( is_tax() ) : ?>
            <div class="archive-list">
               <?php  while (have_posts()) { the_post(); get_template_part('template-parts/common/product-list');} ?>
            </div>
            <?php elseif( 'produkt' === get_post_type(get_the_ID()) ) : ?>
            <div class="tax-list">
                <?php  get_template_part('template-parts/common/product-tax-list'); ?>
            </div>
            <?php endif; ?>
        </main>
        <aside class="content-aside fixed-aside">
            <?php get_template_part('template-parts/aside/main'); ?>
        </aside>
    </div>
</section>
