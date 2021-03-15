<!-- Fonction de gestion des "alert"  -->

<?php
function displayMessage($message, $color)
{
    if ($message && $message != '') {
        return '<div class="container text-center shadow-sm alert alert-' . $color . '" role="alert"> ' . $message . ' </div>';
    }
} ?>

<?= displayMessage($this->session->show('add_article'), 'success'); ?>
<?= displayMessage($this->session->show('addComment'), 'success'); ?>
<?= displayMessage($this->session->show('flagComment'), 'success'); ?>
<?= displayMessage($this->session->show('login'), 'success'); ?>
<?= displayMessage($this->session->show('logout'), 'success'); ?>
<?= displayMessage($this->session->show('register'), 'success'); ?>

<?= displayMessage($this->session->show('edit_article'), 'success'); ?>
<?= displayMessage($this->session->show('delete_article'), 'success'); ?>
<?= displayMessage($this->session->show('unflag_comment'), 'success'); ?>
<?= displayMessage($this->session->show('delete_comment'), 'success'); ?>
<?= displayMessage($this->session->show('delete_user'), 'success'); ?>
<?= displayMessage($this->session->show('update_password'), 'success'); ?>
<?= displayMessage($this->session->show('delete_account'), 'success'); ?>

<?= displayMessage($this->session->show('need_login'), 'danger'); ?>
<?= displayMessage($this->session->show('not_admin'), 'danger'); ?>
<?= displayMessage($this->session->show('error_login'), 'danger'); ?>