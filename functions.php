<?php
function calling_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_actionv('wp_enqueue_scripts', 'calling_resources');
