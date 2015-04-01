<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

    if(isset($_GET["id"])) {
        $post_id = $_GET["id"];

        
        //select query
        //test that the posts user_id  matches the session user id
        
        
        $sql = "DELETE FROM sobu WHERE id = '{$post_id}'";

        if (mysqli_query($connection, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

    }

    redirectTo("account.php");

?>