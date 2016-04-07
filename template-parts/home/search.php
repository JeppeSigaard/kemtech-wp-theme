<section class="hero-banner<?php if ( is_search() ) { echo ' search-mode';} ?>" data-bg="<?php echo esc_url(get_theme_mod('front_banner_img')) ?>">
    <div class="inner">
        <div class="home-description">
            <h1><?php bloginfo('description'); ?></h1>
            <p><?php echo get_theme_mod('long_description'); ?></p>
        </div>
        <form class="search-form" id="product-search-form">
            <input name="s" type="text" id="product-search-field" placeholder="søg blandt vores produkter" autocomplete="off"<?php if ( is_search() ) { echo 'value="'.wp_strip_all_tags($_GET['s']).'"';} ?>>
            <a href="#" class="submit-search">
                <?php get_svg('search') ?>
            </a>
        </form>  
        <div class="search-results-container"></div>  
    </div>
</section>