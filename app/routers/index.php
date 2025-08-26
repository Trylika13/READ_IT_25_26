<?php


// Route par défaut
// PATTERN: /
// CTRL: postsController
// ACTION: indexAction

include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($connexion);
