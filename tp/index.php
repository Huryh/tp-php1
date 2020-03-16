<?php

use \Service\UserService;

$userService = new UserService();
$users = $userService->findAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voitures</title>
</head>
<body>
<table>
    <?php foreach ($users as $user){ ?>
        <tr>
            <td><?php echo $user['ID']; ?></td>
            <td><?php echo $user['nb_km']; ?></td>
            <td><?php echo $user['nom']; ?></td>
            <td><?php echo $user['prix']; ?></td>
            <td><?php echo $user['visible']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
