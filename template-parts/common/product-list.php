<a class="result result-<?php the_ID(); ?>" href="<?php the_permalink() ?>">
    <div class="inner">
        <div class="result-img">
            <?php the_post_thumbnail('tiny') ?>
        </div>
        <div class="result-text">
            <h3 class="result-title"><?php the_title(); ?></h3>
                <div class="result-desc"><?php echo wp_trim_words(get_the_content(),$num_words = 20) ?></div>
            <footer class="result-footer">
                <?php $product_var = get_post_meta(get_the_ID(),'product_var',true);
                foreach($product_var as $var) :
                    if (isset($var['order_number'])) : 
                ?>
                <span class="result-variation"><?php echo $var['order_number'] ?></span>
                <?php endif; endforeach; ?>
            </footer>
        </div>
        <div class="result-links">
            <?php $data = esc_attr(get_post_meta(get_the_ID(),'download_data',true)); if ($data !== '') : ?>
            <div class="download-link download-data" data-href="<?php echo wp_get_attachment_url($data) ?>">Hent Datablad</div>
            <?php endif; $approve = esc_attr(get_post_meta(get_the_ID(),'download_approve',true)); if ($approve !== '') :?>
            <div class="download-link download-approve" data-href="<?php echo wp_get_attachment_url($approve)?>">Hent Godkendelser</div>
            <?php endif; ?>
        </div>
    </div>
</a>