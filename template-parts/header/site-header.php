<header class="site-header" id="site-header">
    <div class="inner">
        
        <a href="<?php bloginfo('url'); ?>" class="header-logo">
            <?php 
                $logo = str_replace(get_site_url(),ABSPATH,get_theme_mod('info_logo')); 
                if (file_exists($logo)){        
                    include $logo;
                }
            ?> 
        </a>
        
        <a href="#" class="header-hamburger">
        <?php get_svg('hamburger'); ?>
        <?php get_svg('menu-close'); ?>
        Vis menu
        </a>
        
        <?php if (get_theme_mod('folder_url')) : ?>
        <a href="<?php echo get_theme_mod('folder_url') ?>" class="header-download" download target="_blank">
            <?php get_svg('download'); ?>
            <span><?php echo get_theme_mod('folder_label') ?></span>
        </a>
        <?php endif; ?>
    
    </div>
    
    <?php wp_nav_menu( array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => 'main-menu',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => false,
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    )); ?>
    
</header>