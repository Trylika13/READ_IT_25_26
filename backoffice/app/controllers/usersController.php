<?php


namespace App\Controllers\UsersController;


use \PDO;


function logoutAction()
{
    unset($_SESSION['users']);
    header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
}
