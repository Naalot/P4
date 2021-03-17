<?php $this->title = "Connexion"; ?>

<div class="container shadow-sm p-3 mb-5 rounded">
    <h2 class="bg-light rounded">Connexion à votre compte</h2>

    <form method="post" action="/index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input class="mt-1" type="submit" value="Connexion" id="submit" name="submit">
    </form>
</div>