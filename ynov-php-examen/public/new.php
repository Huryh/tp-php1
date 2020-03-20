<?php
require_once '../views/layout/header.php';

$insert = null;

if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password'])) {
  $email = $_POST['email'];
  $login = $_POST['login'];
  $password = $_POST['password'];

  $insert = insertUsers($email, $login, $password);
}
?>

<h1>Inscription</h1>

<?php if ($insert) { ?>
  <div class="alert alert-success" role="alert">
    L'utilisateur' a bien été enregistrée ! <a href="/">Retour à la liste</a>
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
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login..." />
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password..." />
  </div>
    <a target="_blank"> <input type="button" value="S'inscrire"> </a>
    <a href="http://localhost/connexion.php"  target="_blank"> <input type="button" value="Déjà-Inscrit ?"> </a>
</form>

<?php require_once '../views/layout/footer.php'; ?>