<?php 
if('produkt' === get_post_type(get_the_ID())) :
$terms = wp_get_post_terms(get_the_ID(),'kategori');
?>

<div class="breadcrumbs">
    <ul>
        <li class="bc-parent">
            <a href="<?php bloginfo('url') ?>"><?php bloginfo('title') ?></a>
        </li>
        <?php if (is_post_type_archive()) : ?>
        <li class="bc-child current">
            <span>Produkter</span>
        </li>
        <?php elseif (is_tax()) : ?>
        <li class="bc-parent">
            <a href="<?php echo get_post_type_archive_link( 'produkt' ); ?>">Produkter</a>
        </li>
        <li class="bc-child current">
            <span><?php echo $terms[0]->name ?></span>
        </li>
        <?php else : ?>
        <li class="bc-parent">
            <a href="<?php echo get_post_type_archive_link( 'produkt' ); ?>">Produkter</a>
        </li>
        <li class="bc-parent">
            <a href="<?php echo get_term_link($terms[0]->term_id); ?>"><?php echo $terms[0]->name ?></a>
        </li>
        <li class="bc-child current">
            <span> <?php the_title(); ?> </span>
        </li>
        <?php endif; ?>
    </ul>
</div>
<?php 

elseif( is_page() ) :
    $parents = get_ancestors(get_the_ID(),'page');
    
    if (!isset($parents[0])) {$parents = false;}

?>

<div class="breadcrumbs">
    <ul>
        <li class="bc-parent">
            <a href="<?php bloginfo('url') ?>"><?php bloginfo('title') ?></a>
        </li>
        <?php if ($parents) : foreach($parents as $p) : if ($p !== get_the_ID()) :?>
        <li class="bc-parent">
            <a href="<?php echo get_permalink($p); ?>"><?php echo get_the_title($p) ?></a>
        </li>
        <?php endif; endforeach; endif; ?>
        <li class="bc-child current">
            <span> <?php the_title(); ?> </span>
        </li>
    </ul>
</div>


<?php endif; ?>