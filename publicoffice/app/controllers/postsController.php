<?php

namespace App\Controllers\PostsController;

use \PDO;
use \App\Models\PostsModel;

function indexAction(PDO $connexion): void
{

    include_once '../app/models/postsModel.php';
    PostsModel\findAll($connexion, 8);
    $posts = PostsModel\findAll($connexion, 8);
    global $content, $title;
    $title = "Latest posts";

    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id): void
{
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    global $content, $title;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}
