<?php


//  Route des users

if (isset($_GET['users'])):
    include_once '../app/routers/users.php';


// Route par défaut:
// PATTERN: /
// CTRL: pagesController
// ACTION: dashboard

else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\dashboardAction($connexion);
endif;
