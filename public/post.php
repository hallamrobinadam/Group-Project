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

	            $query = "INSERT INTO sobu (name_of_business, user_id, username, postcode, category, rating, description) VALUES ('{$name_of_business}', '{$_SESSION["user_id"]}', '{$_SESSION["username"]}', '{$postcode}', '{$category}', '{$rating}', '{$description}')"; /* If the post is successful then this information will be inserted into the databaseu6 */
                $result = mysqli_query($connection, $query);
                if($result) {
                } else {
                   $_SESSION["message"] = "Sorry something went wrong!"; /* If something goes wrong with a users post then this message will appear */
                }

    }

    redirectTo("home.php"); /* Once a user has posted then they will be redirected back to the home page */

?>