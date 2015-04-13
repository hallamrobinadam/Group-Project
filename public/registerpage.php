<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php include_once("../includes/templates/nav.php"); ?>
<?php include("../includes/templates/banner.php"); ?>


<!-- The register form where users will register-->
<div class="register-box">
    <legend>Register</legend>
    <form action="register.php" method="post">
        <p>Username / Student ID:</p> <input class="input-box" type="text" name="username" value="" placeholder="Username / Student ID"><br>
        <p>Password:</p> <input class="input-box" type="password" name="password1" value="" placeholder="Password"><br>
        <p>Confirm Password:</p> <input class="input-box" type="password" name="password2" value="" placeholder="Confirm Password"><br>
        <input class="register-button" type="submit" name="register" value="Register">
    </form>
</div>


<?php include_once("../includes/templates/footer.php"); ?>