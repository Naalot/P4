<footer class="container-fluid bg-light p-2 align-middle">

<div class="container center d-flex p-1">
    <div class="container text-left">
        <?php
        if ($this->title != 'Accueil') {
        ?>
            <a class="btn btn-primary" href="../public/index.php">Retour à l'accueil</a>
        <?php
        }
        ?>
    </div>

    <div class="container text-sm-right p-1">

        <a href="p4.lbureau-portfolio.com">© Laurent BUREAU</a>
        <span> | </span>
        <?php echo date("Y"); ?>
    </div>
</div>

</footer>