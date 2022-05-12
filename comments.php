<?php

if(post_password_required()){
    return null;
}
?>

<?php if(have_comments()): ?>
    <?php foreach($comments as $comment): ?>
        <div class="comentario">
            <div class="comentario_foto">
                <?= get_avatar($comment, 60); ?>
            </div>
            <div class="comentario-area">
                <strong><?= comment_author() ?></strong> - <?= comment_date() ?>
                <br>
                <br>
                <?= comment_text() ?>
            </div>
        </div>
    <?php endforeach; ?>
    <?php the_comments_pagination() ?>
<?php endif; ?>

<?php

comment_form([
    'comment_field' => 'Comente aqui:<br><textarea name="comment" required></textarea>',
    'fields' => [
        'author' => '<br><input type="text" name="author" placeholder="Informe seu nome" required/>',
        'email' => '<br><input type="email" name="email" placeholder="Informe seu email" required/>'
    ],
    'class_submit' => 'btn_envia_comentario',
    'label_submit' => 'Publicar comentário'
]);