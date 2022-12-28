<?php
    function united_styles(){
        wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
        wp_enqueue_script('unitedcarremovel_main_scripts', get_theme_file_uri('/js/script.js'), Null, '1.0.0', true);
        wp_enqueue_style('unitedcarremovel_body_styles', get_theme_file_uri('/css/style.css'), '1.0.0', false);
        wp_enqueue_style('unitedcarremovel_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'united_styles');

    function unitedcarremoval_features(){
        register_nav_menu('primaryMenu', 'Primary Menu Location');
        register_nav_menu('footerColumnFirst', 'Menu for footer column first Location');
        register_nav_menu('footerColumnSecond', 'Menu for footer column second Location');
        register_nav_menu('footerColumnThird', 'Menu or footer column third Location');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'unitedcarremoval_features');

   