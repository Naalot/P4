<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-2 mb-5">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="#"><img class="img-fluid" src="../public/img/LogoAACF.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../public/index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                    <?php
                    if ($this->session->get('pseudo')) {
                    ?>

                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php?route=logout">Déconnexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php?route=profile">Profil</a>
                        </li>
                        <?php if ($this->session->get('role') === 'admin') { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/index.php?route=administration">Administration</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php?route=addArticle">Nouvel article</a>
                        </li>

                    <?php
                    } else {
                    ?>

                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php?route=register">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php?route=login">Connexion</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</header>