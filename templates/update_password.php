<?php $this->title = 'Modifier mot mot de passe'; ?>

<div class="container shadow-sm p-1 mb-5 bg-white rounded">
    <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <form method="post" action="../public/index.php?route=updatePassword">
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input class="mt-1" type="submit" value="Mettre à jour" id="submit" name="submit">
    </form>
</div>