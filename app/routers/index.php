<?php

// Routes des posts

if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';


// Route par défaut
// PATTERN: /
// CTRL: postsController
// ACTION: indexAction
else :
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;
