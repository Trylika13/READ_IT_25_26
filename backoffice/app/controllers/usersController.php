<?php


namespace App\Controllers\UsersController;


use \PDO, \App\Models\UsersModel;


function logoutAction()
{
    unset($_SESSION['users']);
    header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
}

function indexAction(PDO $connexion)
{
    include_once '../app/models/usersModel.php';
    $users = UsersModel\findAll($connexion);
    global $title, $content;
    $title = "Users List";
    ob_start();
    include '../app/views/users/index.php';
    $content = ob_get_clean();
}
