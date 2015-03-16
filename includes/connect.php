<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "hager");
    define("DB_PASS", "ApJp4PGE4zc=");
    define("DB_NAME", "hager");

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>