


<style>
    body{
        margin: 0;
        background-image: url(auto.jpg);
        background-size: 100% auto;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
    </style>
<?php
class UserServices
{
    public function findAll(): array
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=tp-php1",
                "tp-php1",
                "UXieUP2Pu6VH1s6E"
            );
        } catch (PDOException $ex) {
            exit("Echec !");
        }

        $query = "SELECT * FROM voiture";
        $stmt = $pdo->query($query);
        $voiture = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $voiture;
    }
}
$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['nb_km'],$_POST['annee_sortie'],$_POST['nom'])){//l'utilisateur à cliqué sur "Enregistrement", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['nom'])){//le champ nom est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ nom est vide.";
    } elseif(!preg_match("#^[a-z0-9]+$#",$_POST['nom'])){//le champ nb_km est renseigné mais ne convient pas au format qu'on souhaite qu'il soit
        echo "Le nom doit être renseigné avec des lettres, sans caractères spéciaux.";
    } elseif(strlen($_POST['nom'])>25){//le nom est trop long, il dépasse 25 caractères
        echo "Le nom est trop long, il dépasse 25 caractères.";
    } elseif(empty($_POST['annee_sortie'])) {//le champ année-sortie est vide
        echo "Le champ année-sortie est vide.";
    } elseif(empty($_POST['nb_km'])){//le champ nom est vide, on arrête l'exécution du script et on affiche un message d'erreur
            echo "Le champ nb_km est vide.";
        } elseif(strlen($_POST['nb_km'])>10){//le nb_km est trop long, il dépasse 10 caractères
            echo "Le nb_km est trop long, il dépasse 10 caractères.";
    } else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        if(!mysqli_query($mysqli,"INSERT INTO membres SET nb_km=".$_POST['nb_km'])){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        } else {
            echo "Enregistrer avec succès!";
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
    ?>
    <!--
    Les balises <form> sert à dire que c'est un formulaire
    on lui demande de faire fonctionner la page new.php une fois le bouton "Enregistrement" cliqué
    on lui dit également que c'est un formulaire de type "POST"

    Les balises <input> sont les champs de formulaire
    type="text" sera du texte
    type="annee" sera du texte
    type="submit" sera un bouton pour valider le formulaire
     -->

    <form method="post" action="new.php">
        nb_km : <input type="text" name="nb_km">
        nom : <imput type="text" name="nom">
        Annee : <input type="annee" name="annee_sortie">

        <input type="submit" value="Enregistrement">
    </form>
    <?php
}
?>