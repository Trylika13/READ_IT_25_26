<?php

use \App\Controllers\UsersController;

include_once '../app/controllers/usersController.php';

switch ($_GET['users']):
    case 'logout':
        UsersController\logoutAction();
        break;
    case 'new':
        UsersController\newAction();
        break;
    default:
        UsersController\indexAction($connexion);
endswitch;
