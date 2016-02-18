<header class="article-header">
    <?php 
    if (has_subtitle()) {
        the_subtitle('<span class="article-subtitle">','</span>');
    } 
    
    the_title('<h1 class="article-title">','</h1>'); 
    ?>
</header>