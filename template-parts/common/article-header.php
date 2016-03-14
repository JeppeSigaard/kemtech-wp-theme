<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'hero-banner' ); ?>
<header class="article-header"<?php if(isset($image_url[0])) { echo 'data-bg="' . $image_url[0] . '"';} ?>>
    <div class="header-text">
        <?php 
        the_title('<h1 class="article-title">','</h1>'); 

        if (has_subtitle()) {
            the_subtitle('<span class="article-subtitle">','</span>');
        } 
    ?>
    </div>
</header>