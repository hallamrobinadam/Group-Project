<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<?php include("../includes/templates/nav.php"); ?>

<?php include("../includes/templates/banner.php"); ?>

                        <div class = "container">
                            
                            <legend>Your Electronic Deals</legend>
                            
                                <div class="controls">
                                    <p><a class="btn btn-primary btn-md" href="home.php" role="button">Post</a></p>
                                </div>
		                </div>
            
        
                        <div class="container">
                <div class="row">
                    <div class="col-md-10">

                        <?php
                            $query = "SELECT * FROM sobu WHERE user_id ='$_SESSION[user_id]' AND category='Electronics'";
                            $result = mysqli_query($connection, $query);
                            if(!$result) {
                                die("Query Error");
                            }
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                             <div class="list-group">
                                <a class="list-group-item active">
                                    <p><h4>Business:</h4><?php echo ucfirst($row["name_of_business"]); ?></p>
                                </a>
                                <div class="list-group-item"><h4>Category:</h4><p><?php echo ucfirst($row["category"]); ?></div>
                                <div class="list-group-item"><h4>Locations:</h4><p><?php echo ucfirst($row["postcode"]); ?></div>
                                <div class="list-group-item"><h4>Rating:</h4><p><?php echo ucfirst($row["rating"]); ?></div>
                                <div class="list-group-item"><h4>Description:</h4><p><?php echo ucfirst($row["description"]); ?></div>
                                <a class="btn btn-primary1 btn-md" href="delete-post.php?id=<?php echo $row["id"]; ?>">Delete Post</a>
                            </div>

                        <?php } ?>

                    </div>

                    
                    <div class="col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Categories</div>
                            <div class="list-group-item">
                                <a href="all.php">All</a>
                            </div>
                            <div class="list-group-item">
                                <a href="food1.php">Food</a>
                            </div>
                            <div class="list-group-item">
                                <a href="nightclubs1.php">Night Clubs</a>
                            </div>
                            <div class="list-group-item">
                                <a href="clothes1.php">Clothes</a>
                            </div>
                            <div class="list-group-item">
                                <a href="gyms1.php">Gyms</a>
                            </div>
                            <div class="list-group-item">
                                <a href="electronics1.php">Electronics</a>
                            </div>
                            <div class="list-group-item">
                                <a href="other1.php">Other</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

           <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
    </body>

<?php include_once("../includes/templates/footer.php"); ?>