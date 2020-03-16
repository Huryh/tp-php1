<?php

namespace App\Service;

use PDO;
use PDOException;

class UserService{
    public function findAll(): array
    {
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=tp-php1",
                "tp-php1",
                "LFIWDDMFH58bhEkA"
            );
        } catch(PDOException $ex) {
            exit("ECHEC !");
        }

        $query = "SELECT * FROM voiture";
        $stmt = $pdo->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}