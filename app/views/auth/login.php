<?php
$cssLink = "../../../public/scss/login.css";
$cssMain = "../../../public/scss/main.css";
$title = "LogIn";
?>

<?php include_once '../../include/htmlStart.php';?>
<?php include_once '../../include/headerOne.php';?>


<section>
    <div class="image imageLogin">
        <img src="../../../public/assets/images/Asset 1.svg" alt="">
    </div>
    <div class="login">
        <div class="links">
            <a href="login.html" class="menuLinkActive">Login</a>
            <p>|</p>
            <a href="register.php" class="menuLink">Register</a>
        </div>
        <div class="topText">
            <h1 class="bigTitle">Login to your account</h1>
            <p class="smallText">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
        </div>
        <form  action="../../callBack/loginCall.php" method="POST">
            <div class="form-input">
                <label for="" class="text">Username</label>
                <input type="text" name="username" class="inputs">
            </div>
            <div class="form-input">
                <label for="" class="text">Password</label>
                <input type="password" name="password" class="inputs">
            </div>
            <button class="primaryBtn" type="submit">Sing In</button>
        </form>
        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
    </div>
</section>


<?php include_once '../../include/footer.php';?>

<?php include_once '../../include/htmlEnd.php';?>