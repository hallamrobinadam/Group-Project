<?php
    require_once("../includes/session.php");
    require_once("../includes/functions.php");


    session_destroy();
    redirectTo("home.php"); /* Once a user has logged out then they will be redirected back to the home page */




?>