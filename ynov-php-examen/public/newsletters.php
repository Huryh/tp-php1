<?php
require_once '../../views/layout/header.php';

$servername  = "localhost";
$username  = "username";
$password  = "password";
$DBname    = "DBname";
// Créer une connexion
function getPdo(): PDO
{
    try {
        $pdo = new PDO(
            "mysql:host=localhost;dbname=ynov-php-exam",
            "ynov-php-exam",
            "2p103det8PHI3c8U"
        );
        return $pdo;
    } catch(PDOException $ex) {
        exit("Erreur lors de la connexion à la base de données");
    }
}

// Vérifier la connexion
if ($pdo) {
    die("La connexion a échoué: " . mysqli_connect_error());
}

// envoie du mail

// titre du mail
$titre = 'Newletters';


$q = $pdo->query("SELECT email FROM newsletters"); // requete
$compteur=1; // variable pour compter les mails
while ($r = mysqli_fetch_array($q)) {
    $e_mail = $r['email']; //prend l'email de la table

    // 1 exemple de contenu du mail
    $contenu = 'Bonjour! <br />Email : '.$e_mail.'<br />';
    $contenu .= 'Voici la dernière newletters::';
    $contenu .= 'Au revoir <br /><br />';

    // envoi du mail HTML
    $from = "From: hello <newsletter@monsite.ext>\nMime-Version:";
    $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n";
    // envoie du mail
    mail($e_mail,$titre,$contenu,$from);

    echo'N° '.$compteur.' - '.$e_mail.' : envoyé avec succès!<br />';
    $compteur++; // ajoute 1 à la variable du compteur
}  // fin du while

require_once '../../views/layout/footer.php';

