<?php require_once("../includes/session.php"); ?>
<?php  require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>



<?php if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM user WHERE user_username='{$username}' AND user_password='{$password}' LIMIT 1";
    $result = mysqli_query($connection, $query); 
    if($user= $result = mysqli_fetch_assoc($result)) {
        //user is logged in
        $_SESSION["user"] = $user["username"];
    } else {
    
        // wrong log in
        $message = "Wrong username or password";
    }
        
}
?>




    <form action="index2.php" method="post">
        Username: <input type="text" name="username" value="">
        Password: <input type="password" name="password" value="">
        <input type="submit" name="login" value="Login" />
    </form>

    <div class="container" style="width: 30%">
        
        <form class="form-signin">
        <h2 class="form-signin-heading text-center">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        <hr>
        <a href="create.php"><button class="btn btn-lg btn-primary btn-block">Create An Account</button></a>
    </div>
    
    
        


<?php include_once("../includes/templates/footer.php"); ?>