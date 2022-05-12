<?php get_header() ?>

<section class="container">
    <main>
        <?php while (have_posts()) : ?>
            <?php the_post() ?>

            <article>
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>
            </article>
        <?php endwhile; ?>
    </main>

    <?= get_sidebar() ?>
</section>

<?php get_footer() ?>