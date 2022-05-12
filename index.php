<?php get_header() ?>

<section class="container">
    <main>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
                <?php the_post() ?>

                <?php get_template_part('templates/preview_post') ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhum conteúdo encontrado sobre: <strong><?= $_GET['s'] ?></strong></p>
        <?php endif; ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_posts_link('Página anterior') ?></div>
            <div class="pagina_posterios"><?php next_posts_link('Próxima página') ?></div>
        </div>
    </main>

    <?= get_sidebar() ?>
</section>

<?php get_footer() ?>