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

    //logo
    function unitedcar_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'unitedcar_logo_setup' );

    //estimated reading time
function reading_time() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 60);
    
    if ($readingtime == 1) {
    $timer = " minute";
    } else {
    $timer = " minutes";
    }
    $totalreadingtime = $readingtime . $timer;
    
    return $totalreadingtime;
    }

   