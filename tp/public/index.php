<?php

use App\Service\UserService;

require_once '../vendor/autoload.php';
/* require_once '../Data/Users.php'; */

$userService = new UserService();
$users = $userService->findAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <?php foreach ($users as $user){ ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['pass']; ?></td>
            <td><?php echo $user['is_active']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>