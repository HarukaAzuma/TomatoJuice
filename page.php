<?php get_header(); ?>

<main>
    <div class="page-content">
        <?php while (have_posts()) : the_post(); ?>

            <h1><span class="title-drop"></span><?php the_title(); ?></h1>

            <div class="text">
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
