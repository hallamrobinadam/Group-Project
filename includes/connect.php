<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "username"); //username
    define("DB_PASS", "password=");//password
    define("DB_NAME", "datebasename"); // database name (same as username for dakar)

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>