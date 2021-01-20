<?php $this->title = 'Administration'; ?>

<div class="container">

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>

<a class="btn btn-success mb-2" href="../public/index.php?route=addArticle">Nouvel article</a>

<h2>Articles</h2>

<table class="table table-hover table-sucess table-striped shadow-sm mb-5">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Auteur</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($articles as $article) {
        ?>
            <tr>
                <td><?= htmlspecialchars($article->getId()); ?></td>
                <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a></td>
                <td><?= substr($article->getContent(), 0, 150); ?></td>
                <td><?= htmlspecialchars($article->getAuthor()); ?></td>
                <td>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></td>
                <td>
                    <a class="btn btn-warning" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                    <a class="btn btn-danger" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<h2>Commentaires signalés</h2>

<table class="table table-hover table-sucess table-striped shadow-sm mb-5">
    <thead>
        <tr>
            <th>Id</th>
            <th>Pseudo</th>
            <th>Message</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($comments as $comment) {
        ?>
            <tr>
                <td><?= htmlspecialchars($comment->getId()); ?></td>
                <td><?= htmlspecialchars($comment->getPseudo()); ?></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150); ?></td>
                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt()); ?></td>
                <td>
                    <a class="btn btn-secondary" href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                    <a class="btn btn-danger" href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<h2>Utilisateurs</h2>

<table class="table table-hover table-sucess table-striped shadow-sm mb-5">
    <thead>
        <tr>
            <th>Id</th>
            <th>Pseudo</th>
            <th>Date</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= htmlspecialchars($user->getId()); ?></td>
                <td><?= htmlspecialchars($user->getPseudo()); ?></td>
                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt()); ?></td>
                <td><?= htmlspecialchars($user->getRole()); ?></td>
                <td>
                    <?php
                    if ($user->getRole() != 'admin') {
                    ?>
                        <a class="btn btn-danger" href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                    <?php } else {
                    ?>
                        Suppression impossible
                    <?php
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table></div>