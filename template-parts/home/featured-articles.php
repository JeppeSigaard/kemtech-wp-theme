<?php 
$featured_articles = new WP_Query(array(
    'post_type' => 'any',
    'meta_key' => 'show_on_front',
    'meta_value' => '1',
    'posts_per_page' => 4,
));

if ( $featured_articles->have_posts() ) :

?>
<section class="featured-articles">
    <div class="inner">
        <?php 
        while ( $featured_articles->have_posts() ) : $featured_articles->the_post(); 
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'featured' );
        
        ?>
            <a href="<?php the_permalink(); ?>" class="featrued-article">
                <article <?php post_class('inner') ?> data-bg="<?php echo $image_url[0] ?>">
                    <header class="article-header">
                        <h3><?php the_title(); ?></h3>
                    </header>
                    <div class="article-content">
                        <?php echo wp_trim_words(get_the_excerpt(),$num_words = 20, $more = ' ...'); ?>
                    </div>
                </article>
            </a>
        <?php endwhile; ?>
    </div>
</section>


<?php endif; ?>