<?php

get_template_part('template-parts/wrapper/start');


if(is_home() || is_front_page() || is_search() ) { get_template_part('templates/home');}

elseif(is_archive() || is_tax()){
    get_template_part('templates/archive');
}

elseif(is_singular() && '' === get_post_type( get_the_ID() )){
    get_template_part('templates/single-product');
}

elseif(is_single() || is_page()){
    get_template_part('templates/single');
}

get_template_part('template-parts/wrapper/end');