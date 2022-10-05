<h2>Logount</h2>
<?php


if(isset($_GET['logout'])) {
    unset($_SESSION['login']);
    session_destroy();
    header('Location: index.php');
}
include('home.php');
