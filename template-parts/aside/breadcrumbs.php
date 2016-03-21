<?php 
$parents = false;
$siblings = false;

if( is_page() ){
    $parents = get_ancestors(get_the_ID(),'page');
    
    if (!isset($parents[0])) {$parents[0] = get_the_ID();}
    
    $children = get_children(array(
        'post_type'   => array('page','post','produkt'), 
        'numberposts' => -1,
        'post_parent' =>  $parents[0],
    ));
   
}

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
        <?php else : ?>
            <li class="bc-parent current">
                <span> <?php the_title(); ?> </span>
            </li>
        <?php endif; endforeach; endif; ?>
        
        <?php if (!empty($children)) : foreach($children as $p) : if ($p->ID !== get_the_ID()) : ?>
            <li class="bc-child">
                <a href="<?php echo get_permalink($p->ID); ?>"><?php echo get_the_title($p->ID) ?></a>
            </li>
        <?php else : ?>
            <li class="bc-child current">
                <span> <?php the_title(); ?> </span>
            </li>
        <?php endif; endforeach; else : ?>
            <li class="bc-child current">
                <span> <?php the_title(); ?> </span>
            </li>
        <?php endif; ?>
    </ul>
</div>