<?php
if (!defined('ABSPATH')) {
    exit;
}

function tomato_juice_enqueue_assets()
{
    // tailwind cssの読み込み
    // wp_enqueue_style(
    //     'tomato-juice-tailwind',
    //     get_stylesheet_directory_uri() . '/assets/css/tailwind.css'
    // );

    // フォントの指定
    wp_enqueue_style(
        'tomato-juice-kiwi-maru',
        'https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'tomato-juice-Darumadrop-One',
        'https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap',
        array(),
        null
    );
    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // jsの読み込み
    wp_enqueue_script(
        'tomato-juice-script',
        get_stylesheet_directory_uri() . '/js/script.js',
        array(),
        null,
        true
    );

    if (is_page_template('page-about.php')) {
        wp_enqueue_script(
            'tomato-juice-about',
            get_stylesheet_directory_uri() . '/js/about.js',
            array(),
            null,
            true
        );
    }

    // cssの読み込み
    wp_enqueue_style(
        'tomato-juice-ress',
        get_stylesheet_directory_uri() . '/css/ress.css'
    );

    wp_enqueue_style(
        'tomato-juice-common',
        get_stylesheet_directory_uri() . '/css/common.css'
    );

    wp_enqueue_style(
        'tomato-juice-top',
        get_stylesheet_directory_uri() . '/css/top.css'
    );

    wp_enqueue_style(
        'tomato-juice-article',
        get_stylesheet_directory_uri() . '/css/article.css'
    );

    wp_enqueue_style(
        'tomato-juice-scroll-appear',
        get_stylesheet_directory_uri() . '/css/scroll_appear.css'
    );

    wp_enqueue_style(
        'tomato-juice-contact',
        get_stylesheet_directory_uri() . '/css/contact.css'
    );

    wp_enqueue_style(
        'tomato-juice-about',
        get_stylesheet_directory_uri() . '/css/about.css'
    );

    // Swiperの読み込み
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script(
        'my-swiper-init',
        get_stylesheet_directory_uri() . '/js/custom-swiper.js',
        array('swiper-js'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'tomato_juice_enqueue_assets');

function tomato_juice_theme_setup()
{
    // タブのタイトルをWordPress管理にする
    add_theme_support('title-tag');
    // アイキャッチ画像機能ON
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'tomato_juice_theme_setup');
