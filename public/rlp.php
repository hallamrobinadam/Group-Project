<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<div class="register-box">
    <form action="register.php" method="post">
        <p>Username:</p> <input type="text" name="username" value=""><br>
        <p>Password:</p> <input type="password" name="password1" value=""><br>
        <p>Confirm Password:</p> <input type="password" name="password2" value=""><br>
        <input type="submit" name="register" value="register">
    </form>
</div>

<?php if(!isset($_SESSION["username"])) { ?> 

<div class="login-box">
    <form action="login.php" method="post">
        <p>Username:</p> <input type="text" name="username" value=""><br>
        <p>Password:</p> <input type="password" name="password" value=""><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>

<div class="register-box">
    <form action="register.php" method="post">
        <p>Item:</p> <input type="text" name="username" value=""><br>
        <p>Description:</p> <input type="password" name="password1" value=""><br>
        <p>Category:</p> <input type="password" name="password2" value=""><br>
        <input type="submit" name="post" value="Post">
    </form>
</div>


<?php } ?>

<?php if(isset($_SESSION["username"])) { ?>
    <a href="logout.php">Logout</a>
<?php } ?>

<?php include_once("../includes/templates/footer.php"); ?>