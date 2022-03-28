<?php


function imraydigital_theme_files() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('index', get_theme_file_uri('/src/index.js'), array("jquery"), 1.0, true);
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
  }
  
  add_action('wp_enqueue_scripts','imraydigital_theme_files');