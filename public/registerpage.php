<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php include_once("../includes/templates/nav.php"); ?>
<?php include("../includes/templates/banner.php"); ?>


<div class="register-box">
    <form action="register.php" method="post">
        <p>Username:</p> <input type="text" name="username" value=""><br>
        <p>Password:</p> <input type="password" name="password1" value=""><br>
        <p>Confirm Password:</p> <input type="password" name="password2" value=""><br>
        <input type="submit" name="register" value="register">
    </form>
</div>


<?php include_once("../includes/templates/footer.php"); ?>