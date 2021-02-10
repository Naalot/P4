<?php $this->title = 'Article'; ?>

<div class="container">
    <div class="container shadow-sm p-1 mb-5 bg-white rounded">
        <div>
            <h2 class="bg-light"><?= htmlspecialchars($article->getTitle()); ?></h2>
            <p><?= $article->getContent(); ?></p>
            <p><?= htmlspecialchars($article->getAuthor()); ?></p>
            <p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
        </div>
        <br>
        <div class="actions">
            <a class="btn btn-warning" href="/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
            <a class="btn btn-danger" href="/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
        </div>
    </div>

    <div id="comments" class="text-left ml-5">
        <h3>Ajouter un commentaire</h3>
        <?php include('form_comment.php'); ?>
        <h3>Commentaires</h3>
        <?php
        foreach ($comments as $comment) {
        ?>
            <h4><?= htmlspecialchars($comment->getPseudo()); ?></h4>
            <p><?= htmlspecialchars($comment->getContent()); ?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt()); ?></p>
            <?php
            if ($comment->isFlag()) {
            ?>
                <p>Ce commentaire a déjà été signalé</p>
            <?php
            } else {
            ?>
                <p><a href="/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
            }
            ?>
            <p><a href="/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
            <br>
        <?php
        }
        ?>
    </div>
</div>