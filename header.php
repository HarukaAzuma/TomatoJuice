<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header--top">
        <div class="inner">
            <h2 class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tomatojuice_logo.svg" alt="Web技術紹介サイトTomato Juiceのロゴマーク">
                </a>
            </h2>

            <nav class="h-nav sp-none">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>

                    <li class="has-dropdown">
                        <a href="#">Coding</a>
                        <ul class="dropdown">

                            <li class="dropdown-header">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_icon.png" alt="" class="dropdown-header-img">
                                <div>
                                    <p class="dropdown-header-title">Coding</p>
                                    <p class="dropdown-header-sub">制作・開発について</p>
                                </div>
                            </li>

                            <li class="dropdown-item">
                                <a href="<?php echo esc_url(home_url('/category/css')); ?>" class="dropdown-link dropdown-link-css">
                                    <span class="dropdown-icon dropdown-icon-css"><i class="fa-brands fa-css3-alt"></i></span>
                                    <span class="dropdown-text">CSS</span>
                                    <i class="fa-solid fa-chevron-right dropdown-arrow"></i>
                                </a>
                            </li>

                            <li class="dropdown-item">
                                <a href="<?php echo esc_url(home_url('/category/javascript')); ?>" class="dropdown-link dropdown-link-js">
                                    <span class="dropdown-icon dropdown-icon-js"><i class="fa-brands fa-js"></i></span>
                                    <span class="dropdown-text">JavaScript</span>
                                    <i class="fa-solid fa-chevron-right dropdown-arrow"></i>
                                </a>
                            </li>

                            <li class="dropdown-item">
                                <a href="<?php echo esc_url(home_url('/category/php')); ?>" class="dropdown-link dropdown-link-php">
                                    <span class="dropdown-icon dropdown-icon-php"><i class="fa-brands fa-wordpress"></i></span>
                                    <span class="dropdown-text">WordPress</span>
                                    <i class="fa-solid fa-chevron-right dropdown-arrow"></i>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-dropdown">
                        <a href="#">Design</a>
                        <ul class="dropdown">

                            <li class="dropdown-header">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_icon.png" alt="" class="dropdown-header-img">
                                <div>
                                    <p class="dropdown-header-title">Design</p>
                                    <p class="dropdown-header-sub">デザインについて</p>
                                </div>
                            </li>

                            <li class="dropdown-item">
                                <a href="<?php echo esc_url(home_url('/category/color')); ?>" class="dropdown-link dropdown-link-color">
                                    <span class="dropdown-icon dropdown-icon-color"><i class="fa-solid fa-palette"></i></span>
                                    <span class="dropdown-text">配色</span>
                                    <i class="fa-solid fa-chevron-right dropdown-arrow"></i>
                                </a>
                            </li>

                            <li class="dropdown-item">
                                <a href="<?php echo esc_url(home_url('/category/layout')); ?>" class="dropdown-link dropdown-link-layout">
                                    <span class="dropdown-icon dropdown-icon-layout"><i class="fa-solid fa-table-cells-large"></i></span>
                                    <span class="dropdown-text">レイアウト</span>
                                    <i class="fa-solid fa-chevron-right dropdown-arrow"></i>
                                </a>
                            </li>

                            <li class="dropdown-item">
                                <a href="<?php echo esc_url(home_url('/category/figma')); ?>" class="dropdown-link dropdown-link-figma">
                                    <span class="dropdown-icon dropdown-icon-figma"><i class="fa-brands fa-figma"></i></span>
                                    <span class="dropdown-text">Figma</span>
                                    <i class="fa-solid fa-chevron-right dropdown-arrow"></i>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                </ul>
            </nav>

            <div class="hamburger pc-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- ハンバーガーメニュー -->
    <div class="mobile-menu" id="mobile-menu">
        <button class="mobile-menu-close" id="mobile-menu-close" aria-label="メニューを閉じる">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="mobile-menu-inner">

            <div class="mobile-menu-hero">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_icon.png" alt="" class="mobile-menu-hero-img">
                <p class="mobile-menu-hero-text">いっしょに<br>楽しいものを<br>つくりたい!</p>
            </div>

            <nav class="mobile-menu-nav">
                <ul>
                    <li class="mm-item mm-item-red">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <span class="mm-icon"><i class="fa-solid fa-house"></i></span>
                            <span class="mm-text">
                                <span class="mm-en">Home</span>
                                <span class="mm-ja">トップページ</span>
                            </span>
                            <i class="fa-solid fa-chevron-right mm-arrow"></i>
                        </a>
                    </li>

                    <li class="mm-item mm-item-green">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">
                            <span class="mm-icon"><i class="fa-solid fa-user"></i></span>
                            <span class="mm-text">
                                <span class="mm-en">About</span>
                                <span class="mm-ja">このサイトについて</span>
                            </span>
                            <i class="fa-solid fa-chevron-right mm-arrow"></i>
                        </a>
                    </li>

                    <li class="mm-item mm-item-orange">
                        <a href="#coding">
                            <span class="mm-icon"><i class="fa-solid fa-code"></i></span>
                            <span class="mm-text">
                                <span class="mm-en">Coding</span>
                                <span class="mm-ja">制作・開発</span>
                            </span>
                            <i class="fa-solid fa-chevron-right mm-arrow"></i>
                        </a>
                    </li>

                    <li class="mm-item mm-item-blue">
                        <a href="#design">
                            <span class="mm-icon"><i class="fa-solid fa-paintbrush"></i></span>
                            <span class="mm-text">
                                <span class="mm-en">Design</span>
                                <span class="mm-ja">デザイン</span>
                            </span>
                            <i class="fa-solid fa-chevron-right mm-arrow"></i>
                        </a>
                    </li>

                    <li class="mm-item mm-item-purple">
                        <a href="#marketing">
                            <span class="mm-icon"><i class="fa-solid fa-chart-simple"></i></span>
                            <span class="mm-text">
                                <span class="mm-en">Marketing</span>
                                <span class="mm-ja">マーケティング</span>
                            </span>
                            <i class="fa-solid fa-chevron-right mm-arrow"></i>
                        </a>
                    </li>

                    <li class="mm-item mm-item-pink">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                            <span class="mm-icon"><i class="fa-solid fa-envelope"></i></span>
                            <span class="mm-text">
                                <span class="mm-en">Contact</span>
                                <span class="mm-ja">お問い合わせ</span>
                            </span>
                            <i class="fa-solid fa-chevron-right mm-arrow"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="mobile-menu-sns">
                <div class="mobile-menu-sns-icons">
                    <a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                </div>
                <p class="mobile-menu-sns-text">SNSも<br>やってます!</p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petit_red.png" alt="" class="mobile-menu-sns-img">
            </div>

        </div>

        <div class="mobile-menu-footer">
            <svg class="mm-footer-wave" viewBox="0 0 500 40" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,20 C60,0 90,40 150,20 C210,0 240,40 300,20 C360,0 390,40 450,20 C480,10 490,20 500,20 L500,40 L0,40 Z" fill="var(--base-red)"></path>
            </svg>

            <p class="mm-footer-logo">Tomato Juice</p>
            <p class="mm-footer-copy">&copy; 2026 Tomato Juice.<br>All rights reserved.</p>
        </div>
    </div>
