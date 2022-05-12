<?php get_header() ?>

<section class="container">
    <main>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
                <?php the_post() ?>

                <article>
                    <h2><?php the_title() ?></h2>
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('full') ?>
                    <?php endif; ?>
                    <p>
                        <?= get_the_date() ?> | 
                        <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>">
                            <?php the_author() ?>
                        </a>
                        | <?php the_category() ?>
                    </p>
                    <p><?php the_content() ?></p>
                    <p><?php comments_number('0 comentários', '1 comentário', '% comentários') ?></p>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_post_link() ?></div>
            <div class="pagina_posterios"><?php next_post_link() ?></div>
        </div>

        <aside class="area-comentarios" style="border: 1px solid #333">
            <h3>Comentários</h3>
            <?php 
            if(comments_open()) {
                comments_template();
            }
            
            ?>
        </aside>
    </main>

    <?= get_sidebar() ?>
</section>

<?php get_footer() ?>