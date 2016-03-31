<?php 
$prod_details = get_post_meta(get_the_ID(),'feature_list',true);
if($prod_details) :
?>
<section class="product-details">
    <h2 class="subsection-heading">Tekniske data</h2>
    <?php foreach($prod_details as $detail) : ?>
    <span><?php echo $detail ?></span>
    <?php endforeach; ?>
</section>
<?php endif;