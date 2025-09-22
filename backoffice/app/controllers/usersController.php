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


function newAction()
{
    global $title, $content;
    $title = "Add a user";
    ob_start();
    include '../app/views/users/new.php';
    $content = ob_get_clean();
}

function createAction(PDO $connexion, array $data)
{
    include_once '../app/models/usersModel.php';
    $user = UsersModel\create($connexion, $data);
    header('Location: ' . ADMIN_BASE_URL . 'users');
}
