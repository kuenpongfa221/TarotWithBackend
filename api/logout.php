<?php include_once "base.php";
if (isset(($_SESSION['user'])) && $_SESSION['user'] == 'admin') {
    unset($_SESSION['user']);
}

to("../index.php");
