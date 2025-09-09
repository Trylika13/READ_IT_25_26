<?php

use \App\Controllers\UsersController;

include_once '../app/controllers/usersController.php';

switch ($_GET['users']):
    case 'login':
        UsersController\loginAction($connexion, [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);
        break;

    default:
        UsersController\loginFormAction();
        break;

endswitch;
