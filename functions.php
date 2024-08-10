<?php

function izumi_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/izumi.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/izumi.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'izumi_script_enqueue');