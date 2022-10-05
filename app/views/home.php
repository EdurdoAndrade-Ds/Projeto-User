<?php 

use app\classes\databaseUser; 

$users = require('../app/helpers/user.php');

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