<?php
require_once '../../functions/utils.php';
// Vérification de la connexion avant même toute sortie de code (require, doctype, etc...)
session_start();
if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
  echo "Vous êtes connecté";
} else {
  redirect('/admin/login.php');
}

require_once '../../views/layout/header.php';

$active = $_GET['active'] && "all";
$users = getUsers($active);
?>

<h1>Administration - Liste des Utilisateurs</h1>

<form>
  <div class="form-group">
    <label for="visible">Filtrer</label>
    <select class="form-control" id="visible" name="visible">
      <option value="all" <?php if ($active == "all") { ?>selected="selected" <?php } ?>>
        Tous les utilisateurs
      </option>
      <option value="active" <?php if ($active == "active") { ?>selected="selected" <?php } ?>>
        Utilisateurs visibles
      </option>
      <option value="not_active" <?php if ($active == "not_active") { ?>selected="selected" <?php } ?>>
        Utilisateurs non visibles
      </option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Appliquer</button>
</form>

<table class="table table-striped">
  <thead>
    <tr>
      <th></th>
      <th scope="col">ID</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $active) { ?>
      <tr>
        <td><a href="/admin/edit.php?id=<?php echo $active['ID']; ?>" class="btn btn-warning">Editer</a></td>
        <td><?php echo $users['ID']; ?></td>
        <td><?php echo $users['login']; ?></td>
        <td><?php echo $users['password']; ?></td>
        <td><?php echo $users['email']; ?></td>
        <td>
          <?php if ($users['active'] == 1) { ?>
            <span class="badge badge-success">OUI</span>
          <?php } else { ?>
            <span class="badge badge-danger">NON</span>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php require_once '../../views/layout/footer.php';
