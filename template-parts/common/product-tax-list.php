<?php 

$terms = get_terms('kategori',array('hide_empty' => false,));
if($terms) :

?>  
<ul>
    <?php foreach($terms as $term) : $img = get_tax_meta($term->term_id,'kategori_img',true);?>
    <li>
        <a data-bg="<?php echo esc_url($img['url']); ?>" href="<?php echo get_term_link($term->term_id); ?>">
            <span><?php echo $term->name; ?></span>
        </a>
    </li>
    <?php endforeach; ?> 
</ul>
<?php endif;