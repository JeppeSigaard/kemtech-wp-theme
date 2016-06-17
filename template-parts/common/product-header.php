<?php //$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'hero-banner' ); ?>
<header class="article-header product-header"<?php //if(isset($image_url[0])) { echo 'data-bg="' . $image_url[0] . '"';} ?>>
    <div class="header-text">
        <?php 
        the_title('<h1 class="article-title">','</h1>'); 

        if (has_subtitle()) {
            the_subtitle('<span class="article-subtitle">','</span>');
        } 
    ?>
    </div>
    <?php //if ('produkt' === get_post_type( get_the_ID() )) { get_template_part( 'template-parts/common/product-gallery' );} ?>
</header>