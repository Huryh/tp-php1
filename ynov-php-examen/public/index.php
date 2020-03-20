<?php
require_once '../views/layout/header.php';

// if (isset($_GET['search'])) {
//   $search = $_GET['search'];
// } else {
//   $search = null;
// }
// Equivalent à :
$search = $_GET['search'] ?? null;

//$users = getUser("active", $search);
//$ID = getID("active", $search);
?>

<!-- CONTENU -->
<h1>Bienvenue</h1>
    <a href="http://localhost/new.php"  target="_blank"> <input type="button" value="Connectez-vous"> </a>

<!-- /CONTENU -->

<?php require_once'../views/layout/footer.php'; ?>