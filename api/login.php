<?php include_once "base.php";

$acc = $_POST['uname'];
$pw = $_POST['psw'];
$user = $Users->find(['acc' => $acc, 'pw' => $pw]);
if ($acc == $user['acc'] && $pw == $user['pw']) {
    $_SESSION['user'] = 'admin';
    to("../admin.php");
    exit();
}

to("../index.php");
