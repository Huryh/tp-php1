<?php
require_once '../views/layout/header.php';

$insert = null;

if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = insertUsers($email, $password);
}
?>

    <h1>Connexion</h1>

<?php if ($insert) { ?>
    <div class="alert alert-success" role="alert">
        Vous êtes connecté ! <a href="/">Retour à la liste</a>
    </div>
<?php } ?>

<?php if ($insert === false) { ?>
    <div class="alert alert-danger" role="alert">
        Une erreur est survenue
    </div>
<?php } ?>


    <form method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email..." />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password..." />
        </div>
        <a target="_blank"> <input type="button" value="Connexion"> </a>
    </form>

<?php require_once '../views/layout/footer.php'; ?><?php