<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;

class FrontController
{
    public function home()
    {
        $article = new ArticleDAO();
        $articles = $article->getArticles();
        require '../templates/home.php';
    }
}
