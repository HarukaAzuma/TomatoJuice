<?php get_header(); ?>

<main>

    <!-- ==================== -->
    <!-- ヒーロー -->
    <!-- ==================== -->
    <section class="hero">
        <div class="hero-drips" aria-hidden="true">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petit_red.png" alt="" class="drip drip-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petit_green.png" alt="" class="drip drip-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tomato_red.png" alt="" class="drip drip-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petit_red.png" alt="" class="drip drip-4">
        </div>
        <div class="inner hero-inner">
            <p class="hero-eyebrow">Web制作 学習ブログ</p>
            <h1 class="hero-title">
                しぼりたての<br>
                コーディング知識、<br>
                <span class="accent">一杯どうぞ。</span>
            </h1>
            <p class="hero-lead">
                職業訓練校でWeb制作を学ぶ「トマトさん」が、<br class="sp-none">
                HTML・CSS・JavaScriptで学んだことを、<br class="sp-none">
                自分の言葉でまとめる技術ブログです。
            </p>
            <a href="#coding" class="hero-cta">記事を読む ↓</a>
        </div>
    </section>

    <!-- ==================== -->
    <!-- 記事一覧 -->
    <!-- ==================== -->
    <section class="articles" id="coding">
        <div class="inner">
            <h2 class="section-title"><span>01</span>Articles</h2>
            <p class="section-lead">学んだ技術を、実際に手を動かしながら記事にしています。</p>

            <ul class="article-list">
                <?php
                $articles_query = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        // カテゴリ：未分類は表示させないで
                        'category__not_in' => array(1),
                    )
                );

                if ($articles_query->have_posts()) :
                    while ($articles_query->have_posts()) : $articles_query->the_post();
                ?>
                        <li class="article-card">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card-thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <p class="card-date"><?php echo esc_html(get_the_date('Y年n月j日')); ?></p>
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <p class="card-excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
                                    <span class="card-more">続きを読む →</span>
                                </div>
                            </a>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <li class="article-card coming-soon">
                        <div class="card-body card-body--soon">
                            <p class="card-soon-label">Coming soon</p>
                            <h3 class="card-title card-title--soon">次の記事を準備中です</h3>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <!-- ==================== -->
    <!-- About -->
    <!-- ==================== -->
    <section class="about" id="about">
        <div class="inner about-inner">
            <img class="about-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_icon.png" alt="著者アイコン">
            <div class="about-text">
                <h2 class="section-title"><span>02</span>About</h2>
                <p class="about-name">トマトさん(23)</p>
                <p>
                    Web制作を学習中です。CSSやUI表現、細かい演出を作り込むのが好きで、
                    このサイトも学んだことのアウトプットとして少しずつ更新しています。
                    まだまだ勉強中ですが、一つずつ丁寧に積み重ねていきたいです。
                </p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<?php get_footer(); ?>
