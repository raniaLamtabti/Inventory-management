<?php
$cssLink = "../../../public/scss/login.css";
$title = "Register";
?>

<?php include_once '../../include/htmlStart.php';?>
<?php include_once '../../include/headerOne.php';?>

<section>
    <div class="image imageRegister">
        <img src="../../../public/assets/images/Asset 2.svg" alt="">
    </div>
    <div class="login">
        <div class="links">
            <a href="login.html" class="menuLink">Login</a>
            <p>|</p>
            <a href="register.html" class="menuLinkActive">Register</a>
        </div>
        <div class="topText">
            <h1 class="bigTitle">Login to your account</h1>
            <p class="smallText">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
        </div>
        <form action="../../callBack/registerCall.php" method="POST" class="form-register">
            <div class="form-input input-register">
                <label for="" class="text">First Name</label>
                <input type="text" class="inputs" name="firstName">
            </div>
            <div class="form-input input-register">
                <label for="" class="text">Last Name</label>
                <input type="text" class="inputs" name="lastName">
            </div>
            <div class="form-input input-register">
                <label for="" class="text">Username</label>
                <input type="text" class="inputs" name="username">
            </div>
            <div class="form-input input-register">
                <label for="" class="text">Email</label>
                <input type="email" class="inputs" name="email">
            </div>
            <div class="form-input input-register">
                <label for="" class="text">Password</label>
                <input type="password" class="inputs" name="password">
            </div>
            <div class="form-input input-register">
                <label for="" class="text">Password Confirmation</label>
                <input type="password" class="inputs">
            </div>
            <button class="primaryBtn" type="submit">Create Account</button>
        </form>
        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
    </div>
</section>


<?php include_once '../../include/footer.php';?>

<?php include_once '../../include/htmlEnd.php';?>