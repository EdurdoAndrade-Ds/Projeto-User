<?php

if(isset($_GET['logout'])) {
    unset($_SESSION['login']);
    session_destroy();
    header('Location: admin.php');
}
include('home.php');