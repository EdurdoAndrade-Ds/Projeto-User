<?php 

use app\classes\databaseUser; 

$users = require('../app/helpers/user.php');
// var_dump($user);
// die();

$views = "app\helpers\user.php";

?>

<h2>Lista de users (<?php echo count($users); ?>)</h2>

    <div id="container">
        <ul>
            <?php foreach ($users as $index => $user): ?>

                <li><?php $user['id']; ?>  <?php echo $user['firstName'];?> <?php echo $user['lastName']; ?> <?php $user['id']; ?> | <a href="dados"<?php echo $index; ?>>Ver User</a></li> 

            <?php endforeach; ?>
        </ul>
    </div>

<!-- // site real -->


<!-- <li><?php echo $user->firstName ?> <?php echo $user->lastName ?> | <a href="/user/show/<?php echo $user->id ?>">Ver user</a></li> -->