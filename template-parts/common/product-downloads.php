<?php 
$dl_data = wp_get_attachment_url(get_post_meta(get_the_ID(),'download_data',true));
$dl_approve = wp_get_attachment_url(get_post_meta(get_the_ID(),'download_approve',true));

?>
   

<section class="product-downloads">
<?php if($dl_data) : ?>
    <a href="<?php echo $dl_data ?>"><?php get_svg('download'); ?> Hent datablad</a>
<?php endif; if ($dl_approve) : ?>
    <a href="<?php echo $dl_approve ?>"><?php get_svg('download'); ?> Hent godkendelser</a>
<?php endif; ?>
</section>