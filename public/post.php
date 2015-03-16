<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

    if(isset($_POST["post"])) {
        $name_of_business = $_POST["name_of_business"];
        $rating = $_POST["rating"];
        $category = $_POST["category"];
        $description = $_POST["description"];

        $query = "SELECT * FROM sobu WHERE username='{$username}' LIMIT 1";

        $result = mysqli_query($connection, $query);

        if($user = mysqli_fetch_assoc($result)) {
            $_SESSION["message"] = "sorry username taken";
        } else {
            if(strcasecmp($password1, $password2) == 0) {
	            $query = "INSERT INTO users (username, password) VALUES ('{$username}', '{$password1}')";
                $result = mysqli_query($connection, $query);
                if($result) {
                   $_SESSION["message"] = "Success!";
                } else {
                   $_SESSION["message"] = "Sorry something went wrong!";
                }
            } else {
                $_SESSION["message"] = "Passwords dont match";
            }

        }

    }

    redirectTo("home1.php");

?>