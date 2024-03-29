<?php $this->title = "Inscription"; ?>

<div class="container shadow-sm p-3 mb-5 rounded">
    <h2 class="bg-light rounded">Créer un compte</h2>

    <form method="post" action="/index.php?route=register">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
        <input class="mt-1" type="submit" value="Inscription" id="submit" name="submit">
    </form>
</div>