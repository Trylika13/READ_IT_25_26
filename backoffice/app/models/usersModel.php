<?php


namespace App\Models\UsersModel;


use \PDO;


function findAll(PDO $connexion)
{
    $sql = "SELECT *
    FROM users
    ORDER BY created_at DESC";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
