<?php
include '../classes/user.php';

$username = $_POST['username'];
$pwd = $_POST['password'];

$user = new User;
$data = $user->fetch($username, $pwd);

if ($data != 0) {
    session_start();
    $_SESSION['id'] = $data;
    header("location: ../views/dashboard/other/dashboard.php");
} else {
    header("location: ../views/auth/login.php");
}