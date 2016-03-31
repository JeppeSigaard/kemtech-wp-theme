<?php 
$prod_params = get_post_meta(get_the_ID(),'product_param',true);
$prod_var = get_post_meta(get_the_ID(),'product_var',true);
$ref_draw = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'product_param_img',true), 'full' );
function get_key($param){return sanitize_title('param-'.get_the_ID() . $param);}
?>
   
<section class="product-vars">
    <h2 class="subsection-heading">Produktspecifikationer <a href="<?php echo $ref_draw[0] ?>" data-lightbox="product-drawing">Se referencetegning</a></h2>
    <table class="inner">    
        <thead>
            <tr>
                <th>Bestillingsnr.</th>
                <?php foreach( $prod_params as $param) : ?>
                    <th><?php echo $param ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
           <tbody>
            <?php foreach($prod_var as $var) : ?>
            <tr class="product-var">
                <td><?php echo $var['order_number'] ?></td>
                <?php foreach($prod_params as $param ) : ?>
                <td><?php echo $var[get_key($param)];  ?></td>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>