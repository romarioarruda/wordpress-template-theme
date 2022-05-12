<article>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('full', ['class' => 'post_miniatura']) ?>
        </a>
    <?php endif; ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <p>
        <?= get_the_date() ?> |
        <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>">
            <?php the_author() ?>
        </a>
    </p>
    <p><?php the_excerpt() ?></p>
    <p><?php comments_number('0 comentários', '1 comentário', '% comentários') ?></p>
</article>