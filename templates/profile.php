<?php $this->title = 'Mon profil'; ?>

<?= $this->session->show('update_password'); ?>
<div class="container shadow-sm p-3 mb-5 rounded">
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <p><?= $this->session->get('id'); ?></p>
    <a class="btn btn-secondary" href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a class="btn btn-danger" href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
</div>