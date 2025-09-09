<?php

namespace App\Models\UsersModel;

use \PDO;

function findOneByEmailAndPassword(PDO $connexion, array $data)
{
    $sql = 'SELECT *
            FROM users
            WHERE email = :email
            AND password = :password;';
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':email', $data['email'], PDO::PARAM_STR);
    $rs->bindValue(':password', $data['password'], PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
