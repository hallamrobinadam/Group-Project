<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];

        $query = "SELECT * FROM users WHERE username='{$username}' LIMIT 1";

        $result = mysqli_query($connection, $query);

        if($user = mysqli_fetch_assoc($result)) { /* If a user eneters a username that has already bieen used this message will appear */
            $_SESSION["message"] = "sorry username taken";
        } else {
            if(strcasecmp($password1, $password2) == 0) { /* If successfully registered then this information will be inserted into the database */
	            $query = "INSERT INTO users (username, password) VALUES ('{$username}', '{$password1}')";
                $result = mysqli_query($connection, $query);
                if($result) { /* When a user successfully registers this message will appear */
                   $_SESSION["message"] = "You Have Successfully Registered!";
                } else { /* If something goes wrong with a users register process this message will appear */
                   $_SESSION["message"] = "Sorry Something Went Wrong!";
                }
            } else { /* If passwords dont match then this message will appear */
                $_SESSION["message"] = "Passwords Dont Match";
            }

        }

    }

    redirectTo("home.php");

?>
