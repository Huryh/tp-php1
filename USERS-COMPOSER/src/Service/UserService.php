<?php

namespace App\Service;

use PDO;
use PDOException;

class UserService{
    public function findAll(): array
    {
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=cours-php-pdo",
                "cours-php-pdo",
                "LFIWDDMFH58bhEkA"
            );
        } catch(PDOException $ex) {
            exit("Nuuuul !");
        }

        $query = "SELECT * FROM users";
        $stmt = $pdo->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}