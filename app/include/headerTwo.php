<?php
session_start();
$id = $_SESSION['id'];
if (empty($_SESSION['id'])) {
    header("Location: $login");
}
require_once '../../../classes/user.php';
$findUser = new User;
$user = $findUser->show($id);
?>

<div class="headerTwo">
    <div class="logo">
        <img src="../../../../public/assets/icones/Logo.svg" alt="">
    </div>
    <div class="profile">
        <a href="" class="profileLink">
            <p class="menuLinkActive"><?php echo $user->firstName; echo " "; echo $user->lastName?></p>
            <div class="profileImg">
                <img src="../../../../public/assets/images/Profile Image.jpg" alt="">
            </div>
        </a>
    </div>
</div>