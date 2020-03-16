<?php

try { // Dans ce bloc, tout code pouvant lancer une exception
    $pdo = new PDO(
        "mysql:host=localhost;dbname=cours-php-pdo",
        "cours-php-pdo",
        "LFIWDDMFH58bhEkA"
    );
    // Si l'instanciation de l'objet PDO échoue,
    // Alors tout code suivant cette instruction dans "try" ne sera pas exécuté.
} catch(PDOException $ex) {
    // A ce niveau-là, on récupère l'exception lancée et on gère l'erreur
    exit("Erreur lors de la connexion à la base de données");
}

<form method="get">
    <imput type="text" name='s'id="" placeholder='Recherche...'/>