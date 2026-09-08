<?php get_header(); ?>

<main>
    <div class="pc-flex">
        <article class="container">
            <?php while (have_posts()) : the_post(); ?>

                <?php if (has_post_thumbnail()) : ?>
                    <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'large');
                    ?>
                    <img src="<?php echo esc_url($thumbnail_url); ?>" class="thumbnail" alt="">
                <?php endif; ?>

                <div class="sub-title">
                    <div class="hush">
                        <?php the_category(' '); ?>
                    </div>
                    <p>発表日:<?php echo esc_html(get_the_date('Y年n月j日')); ?></p>
                </div>

                <h1><?php the_title(); ?></h1>

                <div class="text">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        </article>

        <aside class="sidebar">
            <section class="profile">
                <h3>Profile</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_icon.png" alt="著者アイコン">
                <p>トマトさん(23)<br>
                    Web制作を学習中。<br>
                    CSSやUI表現が好きです。
                </p>
            </section>

            <section>
                <h3>人気記事</h3>
                <ul>
                    <li><a href="#">Flexbox完全ガイド</a></li>
                    <li><a href="#">Gridレイアウト入門</a></li>
                    <li><a href="#">CSSアニメーションまとめ</a></li>
                </ul>
            </section>

            <section>
                <h3>カテゴリ</h3>
                <ul>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) :
                    ?>
                        <li><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
