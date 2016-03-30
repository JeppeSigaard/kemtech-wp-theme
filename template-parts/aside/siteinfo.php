<div class="sidebar-info">
    <div class="info-logo">
        <?php 
            $logo = str_replace(get_site_url(),ABSPATH,get_theme_mod('info_logo')); 
            if (file_exists($logo)){        
                include $logo;
            }
        ?> 
    </div>
    <p><strong><?php echo get_theme_mod('info_name') ?></strong></p>
    <p><?php echo get_theme_mod('info_address') ?></p>
    <p><?php echo get_theme_mod('info_post') .' '. get_theme_mod('info_by');  ?></p>
    <br/>
    <p>Telefon: <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('info_telefon')); ?>"><?php echo get_theme_mod('info_telefon') ?></a></p>
    <p>Email: <a href="mailto:<?php echo antispambot(sanitize_email(get_theme_mod('info_email')),1); ?>"><?php echo get_theme_mod('info_email') ?></a></p>
    <p><a href="<?php bloginfo('url') ?>"><?php echo str_ireplace('http://','',get_bloginfo('url')) ?></a></p>
</div>