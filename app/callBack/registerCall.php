<?php
include '../classes/user.php';

echo $firstName = $_POST['firstName'];
echo $lastName = $_POST['lastName'];
echo $username = $_POST['username'];
echo $email = $_POST['email'];
echo $password = $_POST['password'];

$user = new User;
$user->create($firstName,$lastName, $username, $email, $password);

header("location: ../views/auth/login.php");