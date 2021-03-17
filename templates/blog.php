<?php $this->title = "Blog"; ?>

<?php
foreach ($articles as $article) {
?>

    <div class="container text-center shadow-sm p-0 mb-5 bg-white rounded">
        <h2 class="bg-light pb-2 pt-2"><a href="/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a></h2>
        <p><?= $article->getContent(); ?></p>
        <p><?= htmlspecialchars($article->getAuthor()); ?></p>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
    </div>

<?php
}
?>