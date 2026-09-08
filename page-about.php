<?php get_header(); ?>

<main>
    <div class="page-content">

        <!-- 導入 -->
        <section class="about-intro">
            <h1><span class="title-drop"></span><?php the_title(); ?></h1>
        </section>

        <!-- アイキャッチ画像 -->
        <!-- <?php if (has_post_thumbnail()) : ?> -->
        <!-- <div class="page-thumbnail"> -->
        <!-- <?php the_post_thumbnail('large'); ?> -->
        <!-- </div> -->
        <!-- <?php endif; ?> -->

        <!-- サイトについて -->
        <section class="about-section">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petit_green.png" alt="" class="about-decoration about-decoration-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tomato_red.png" alt="" class="about-decoration about-decoration-2">

            <h2><span class="section-number">01</span>このサイトについて</h2>
            <p class="text">Tomato Juiceは、Web制作と学習の記録をまとめた個人のポートフォリオサイトです。</p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tomatojuice_logo.svg" alt="トマトジュースのロゴマーク">
        </section>

        <!-- 経緯・きっかけ -->
        <section class="about-section">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tomato_juice.png" alt="" class="about-decoration about-decoration-3">
            <h2><span class="section-number">02</span>経緯・きっかけ</h2>
            <p class="text">元々は、職業訓練校の朝礼で、Web技術紹介・発表するために作成したサイトです。せっかく技術を紹介するなら。本当に存在しそうでしなさそうな、ブログサイトっぽく作ってみようと思ったのが、きっかけでした。制作中に、ちょうど飲んでいたのがトマトジュースだったので、そのまま名付けました。</p>
        </section>

        <!-- 扱ってるジャンル(タブ切り替え) -->
        <section class="about-section">
            <h2><span class="section-number">03</span>扱っているジャンル</h2>
            <p class="text">興味のあることなら、なんでも。</p>

            <div class="tabs-css">

                <input type="radio" id="tab-web" name="genre-tabs" checked class="tab-radio">
                <input type="radio" id="tab-design" name="genre-tabs" class="tab-radio">
                <input type="radio" id="tab-market" name="genre-tabs" class="tab-radio">

                <div class="tabs-buttons">
                    <label for="tab-web" class="tab-label tab-web-label">Web技術</label>
                    <label for="tab-design" class="tab-label tab-design-label">デザイン</label>
                    <label for="tab-market" class="tab-label tab-market-label">マーケティング</label>
                </div>

                <div class="tab-content tab-content-web" id="content-web">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skill_pc.svg" alt="">
                    <p>HTML・CSS・JavaScriptを中心に、実際にコードを書きながら学んだことを、
                        「なぜそう書くのか」という理由まで含めて、丁寧に解説しています。
                        エラーにぶつかった時の考え方や、実装する上でつまずきやすいポイントも、
                        自分自身の試行錯誤を交えながら、正直にまとめています。</p>
                    <a href="<?php echo esc_url(home_url('/category/web/')); ?>" class="tab-link-web">関連記事を見る →</a>
                </div>

                <div class="tab-content tab-content-design" id="content-design">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skill_design.svg" alt="">
                    <p>見た目を整えるだけでなく、「使う人にとって、どう感じられるか」を意識した
                        デザインの考え方を紹介しています。配色やレイアウト、余白の取り方など、
                        細かい部分の工夫が、サイト全体の印象や使いやすさにどう影響するのか、
                        実例を交えながら掘り下げています。</p>
                    <a href="<?php echo esc_url(home_url('/category/design/')); ?>" class="tab-link-design">関連記事を見る →</a>
                </div>

                <div class="tab-content tab-content-market" id="content-market">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skill_strategy.svg" alt="">
                    <p>サイトやサービスを、必要としている人に、どう届けるか。
                        作って終わりではなく、「見てもらう」「伝わる」ところまでを見据えた、
                        考え方や工夫を紹介していきます。技術を学ぶ側の視点から、
                        制作とマーケティングがどうつながっているのかも、考えていきたいテーマです。</p>
                    <a href="<?php echo esc_url(home_url('/category/market/')); ?>" class="tab-link-market">関連記事を見る →</a>
                </div>
            </div>
        </section>

        <!-- これまでの実績 -->
        <section class="about-section">
            <h2><span class="section-number">04</span>これまでの実績</h2>
            <p class="text">まだまだこれからですが、学んだことを少しずつ記事にしていきます。</p>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $slider_query = new WP_Query(array(
                        'post_type'      => 'post',   // 通常の投稿
                        'posts_per_page' => 5,        // 表示件数
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));

                    // まだ表示していない投稿が残っているか確認
                    if ($slider_query->have_posts()) :
                        while ($slider_query->have_posts()) : $slider_query->the_post();
                    ?>
                            <!-- ループ -->
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <!-- 運営者について -->
        <section class="about-section">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petit_red.png" alt="" class="about-decoration about-decoration-4">
            <h2><span class="section-number">05</span>運営者について</h2>
            <p class="text">トマトさん。Web制作を学習中。夢はECコンサルタント。まだ世の中に知られていない、素敵な商品が、それを求めている人たちの元へ届くお手伝いがしたいと思っています。</p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_icon.png" alt="トマトの顔">
        </section>

        <!-- 今後の展望 -->
        <section class="about-section">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petit_yellow.png" alt="" class="about-decoration about-decoration-5">
            <h2><span class="section-number">06</span>今後の展望</h2>
            <p class="text">短期目標と長期目標</p>
        </section>

    </div>
</main>

<?php get_footer(); ?>
