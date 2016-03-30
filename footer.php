<footer class="site-footer" id="site-footer">
    <div class="inner">
        <a href="<?php bloginfo('url'); ?>" class="footer-logo">
            <?php 
                $logo = str_replace(get_site_url(),ABSPATH,get_theme_mod('info_logo')); 
                if (file_exists($logo)){        
                    include $logo;
                }
            ?>
        </a>
        <div>
            <span><?php echo get_theme_mod('info_name'); ?></span>
            <span><?php echo get_theme_mod('info_address'); ?></span>
            <span><?php echo get_theme_mod('info_post') . ' ' . get_theme_mod('info_by'); ?></span>
        </div>
        <div>
            <span><a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('info_telefon')); ?>"><?php echo get_theme_mod('info_telefon'); ?></a></span>
            <span><a href="mailto:<?php echo antispambot(sanitize_email(get_theme_mod('info_email')),1) ?>"><?php echo get_theme_mod('info_email') ?></a></span>
            <span><a href="<?php bloginfo('url') ?>"><?php echo str_ireplace('http://','',get_bloginfo('url')) ?></a></span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>