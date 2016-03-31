<?php 
$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
 ?>
<a href="<?php echo $image_url[0] ?>" class="main-image-toggle" data-lightbox="<?php echo get_the_ID() ?>">
    <?php get_svg('expand'); ?>
    <?php get_svg('images'); ?>
</a>
<?php 
if (get_post_meta(get_the_ID(),'item_gallery_active',true) === '1') :
$images = get_post_meta(get_the_ID(), 'gallery_items',false);
$images[] = get_post_meta(get_the_ID(),'product_param_img',true);
$img_urls = array();

foreach($images as $img){
    
    $small = wp_get_attachment_image_src( $img, 'tinish' );
    $large = wp_get_attachment_image_src( $img, 'full' );
    
    $img_urls[] = array(
        'small' => $small[0],
        'full' => $large[0],
    );
}

$img_count = count($img_urls);
$img_plus = $img_count - 3;

?>

<div class="product-gallery">
    <div class="inner">
        <?php $i = 0; foreach ($img_urls as $url) : $i++; if ($i < 4) :  ?>
            <a data-lightbox="<?php echo get_the_ID() ?>" class="gallery-item preview"<?php if ($i === 3 && $img_count > 3) { echo 'data-more="+'. $img_plus .'"';} ?> href="<?php echo $url['full'] ?>"  data-bg="<?php echo $url['small'] ?>">
            </a>
        <?php else : ?>
        <a data-lightbox="<?php echo get_the_ID() ?>" class="gallery-item no-preview" href="<?php echo $url['full'] ?>"></a>
        <?php endif; endforeach; ?>
    </div>
</div>
<?php endif;