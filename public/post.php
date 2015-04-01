<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

    if(isset($_POST["post"])) {
        $name_of_business = $_POST["name_of_business"];
        $postcode = $_POST["postcode"];
        $category = $_POST["category"];
        $rating = $_POST["rating"];
        $description = $_POST["description"];
        
        $query = "SELECT * FROM `sobu` LIMIT 0, 30 ";

	            $query = "INSERT INTO sobu (name_of_business, user_id, username, postcode, category, rating, description) VALUES ('{$name_of_business}', '{$_SESSION["user_id"]}', '{$_SESSION["username"]}', '{$postcode}', '{$category}', '{$rating}', '{$description}')";
                $result = mysqli_query($connection, $query);
                if($result) {
                } else {
                   $_SESSION["message"] = "Sorry something went wrong!";
                }

    }

    redirectTo("home.php");

?>