<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<?php include("../includes/templates/nav.php"); ?>

<?php include("../includes/templates/banner.php"); ?>

                        <div class = "container">
                            
                            <legend>Electronic Deals and Offers</legend>
                            
                                <div class="controls">
                                    <p><a class="btn btn-primary btn-md" href="home.php" role="button">Post</a></p>
                                </div>
		                </div>
            
        
            <div class="container">
                <legend>Live Feed</legend>
                <div class="row">
                    <div class="col-md-10">
                        

                        <?php
                            $query = "SELECT * FROM sobu WHERE category='Electronics'";
                            $result = mysqli_query($connection, $query);
                            if(!$result) {
                                die("Query Error");
                            }
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                             <div class="list-group">
                                <a class="list-group-item active">
                                    <p><h4>User :</h4><?php echo ucfirst($row["username"]); ?></p>
                                </a>
                                <div class="list-group-item"><h4>Business:</h4><?php echo ucfirst($row["name_of_business"]); ?></div>
                                <div class="list-group-item"><h4>Category:</h4><p><?php echo ucfirst($row["category"]); ?></div>
                                <div class="list-group-item"><h4>Locations:</h4><p><?php echo ucfirst($row["postcode"]); ?></div>
                                <div class="list-group-item"><h4>Rating:</h4><p><?php echo ucfirst($row["rating"]); ?></div>
                                <div class="list-group-item"><h4>Description:</h4><p><?php echo ucfirst($row["description"]); ?></div>
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
                                <a href="food.php">Food</a>
                            </div>
                            <div class="list-group-item">
                                <a href="nightclubs.php">Night Clubs</a>
                            </div>
                            <div class="list-group-item">
                                <a href="clothes.php">Clothes</a>
                            </div>
                            <div class="list-group-item">
                                <a href="gyms.php">Gyms</a>
                            </div>
                            <div class="list-group-item">
                                <a href="electronics.php">Electronics</a>
                            </div>
                            <div class="list-group-item">
                                <a href="other.php">Other</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
 
    </body>

<?php include_once("../includes/templates/footer.php"); ?>