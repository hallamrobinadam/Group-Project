<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<head>
    <title> SOBU-Register</title>
    <link rel="stylsheet" href="css/bootstrap.css">
    <link rel="stylsheet" href="css/styles.css">
</head>

<div class="register-box">
    <form action="register.php" method="post">
        <p>Username:</p> <input type="text" name="username" value=""><br>
        <p>Password:</p> <input type="password" name="password1" value=""><br>
        <p>Confirm Password:</p> <input type="password" name="password2" value=""><br>
        <input type="submit" name="register" value="register">
    </form>
</div>

<?php if(!isset($_SESSION["username"])) { ?>


<?php } ?>

<?php if(isset($_SESSION["username"])) { ?>
    <a href="logout.php">Logout</a>
<?php } ?>

<?php include_once("../includes/templates/footer.php"); ?>