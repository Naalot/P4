<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Le blog de Jean Forteroche sur son roman 'Un billet simple pour l'Alaska'">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap');
    </style>

    <!-- Tiny MCE -->
    <script src="https://cdn.tiny.cloud/1/mbkz2iix5nw6qqgj6bujfzj8etreltwnck4cldq3f09k5ib5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Icone navigateur + Titre -->
    <link rel="icon" type="image/png" href="/img/LogoAACF.jpg" />

    <title><?= $title ?></title>

    <!-- Open Graph -->
    <meta property="og:title" content="Billet simple pour l'Alaska | Par Jean Forteroche">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://p4.lbureau-portfolio.com/">
    <meta property="og:image" content="https://p4.lbureau-portfolio.com/img/Un_billet_simple_cover.jpg">
    <meta property="og:description" content="Le blog de Jean Forteroche sur son roman 'Un billet simple pour l'Alaska'">

</head>

<body>

    <?php include("navbar.php"); ?>
    <?php include("header.php"); ?>

    <?php include("alert_function.php"); ?>

    <main class="container-fluid">
        <?= $content ?>
    </main>

    <?php include("footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous">
    </script>

</body>

</html>