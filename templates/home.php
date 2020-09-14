<?php
require '../vendor/autoload.php';

use App\src\DAO\ArticleDAO;
?>

<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- -->
  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

  <title>Mon blog</title>
</head>

<body>
  <div>
    <h1>Mon blog</h1>
    <p>En construction</p>
    <?php
    $article = new \App\src\DAO\ArticleDAO();
    $articles = $article->getArticles();
    while ($article = $articles->fetch()) {
    ?>
      <div>
        <h2><a href="single.php?articleId=<?= htmlspecialchars($article->id); ?>"><?= htmlspecialchars($article->title); ?></a></h2>
        <p><?= htmlspecialchars($article->content); ?></p>
        <p><?= htmlspecialchars($article->author); ?></p>
        <p>Créé le : <?= htmlspecialchars($article->createdAt); ?></p>
      </div>
      <br>
    <?php
    }
    $articles->closeCursor();
    ?>
  </div>


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