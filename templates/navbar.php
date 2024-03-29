<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-2 mb-5">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="/index.php"><img class="img-fluid" src="/img/LogoAACF.jpg" alt="Alaska Arts & Culture Foundation"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?route=blog">Blog</a>
                    </li>

                    <?php
                    if ($this->session->get('pseudo')) {
                    ?>

                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?route=logout">Déconnexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?route=profile"><?= $this->session->get('pseudo'); ?></a>
                        </li>
                        <?php if ($this->session->get('role') === 'admin') { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/index.php?route=administration">Administration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/index.php?route=addArticle">Nouvel article</a>
                            </li>
                        <?php } ?>

                    <?php
                    } else {
                    ?>

                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?route=register">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?route=login">Connexion</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</header>