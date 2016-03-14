<section class="hero-banner<?php if ( is_search() ) { echo ' search-mode';} ?>" data-bg="<?php echo esc_url(get_theme_mod('front_banner_img')) ?>">
    <div class="inner">
        <div class="home-description"><?php bloginfo('description'); ?></div>
        <div class="search-form" id="product-search-form">
            <input name="s" type="text" id="product-search-field" placeholder="søg blandt vores produkter" autocomplete="off"<?php if ( is_search() ) { echo 'value="'.esc_attr($_GET['s']).'"';} ?>>
            <a href="#" class="submit-search">
                <?php get_svg('search') ?>
            </a>
        </div>  
        <div class="search-results-container"></div>  
    </div>
</section>