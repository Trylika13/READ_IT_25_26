<?php




// Route par défaut:
// PATTERN: /
// CTRL: pagesController
// ACTION: dashboard


include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($connexion);
