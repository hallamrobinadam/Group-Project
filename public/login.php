<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1";

        $result = mysqli_query($connection, $query);

        if($user = mysqli_fetch_assoc($result)) {
            $_SESSION["username"] = $user["username"];
            $_SESSION["user_id"] = $user["id"];

        } else {
            $_SESSION["message"] = "Wrong Username/Password"; /* If the password does nots match with the one they registered with then this message will appear */
        }

    }

    redirectTo("home.php");

?>