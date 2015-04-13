<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<?php include("../includes/templates/nav.php"); ?>

<?php include("../includes/templates/banner.php"); ?>

                        <div class = "container">
                            
                            <legend>Other Deals and Offers</legend>
                            
                            <!-- Button to take user back to home page where they can post. The post form can be distracting when just browsing so it is hidden on this page. It will only be visable when logged in -->
                            <?php if(isset($_SESSION["username"])) { ?>
                                <div class="controls">
                                    <p><a class="btn btn-primary btn-md" href="home.php" role="button">Post</a></p>
                                </div>
                            <?php } else { ?>
                            <?php } ?>
		                </div>
            
        
            <div class="container">
                <legend>Live Feed</legend>
                <div class="row">
                    <div class="col-md-10">
                        
                        <!-- Box which will display just items in the other category -->
                        <?php
                            $query = "SELECT * FROM sobu WHERE category='Other'";
                            $result = mysqli_query($connection, $query);
                            if(!$result) {
                                die("Query Error");
                            }
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                             <div class="list-group">
                                <a href="#" class="list-group-item active">
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

                    <!-- Sidebar where users can see posts by just the category -->
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
                        <!-- Sidebar where users can see posts by just the rating. It will only be visable when logged in -->
                        <?php if(isset($_SESSION["username"])) { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">Item Ratings</div>
                            <div class="list-group-item">
                                <a href="onestar.php">One Star</a>
                            </div>
                            <div class="list-group-item">
                                <a href="twostar.php">Two Stars</a>
                            </div>
                            <div class="list-group-item">
                                <a href="threestar.php">Three Stars</a>
                            </div>
                            <div class="list-group-item">
                                <a href="fourstar.php">Four Stars</a>
                            </div>
                            <div class="list-group-item">
                                <a href="fivestar.php">Five Stars</a>
                            </div>
                            <?php } else { ?>
                            <?php } ?>
                        </div>
                        
                    </div>
                
                </div>
            </div>

    </body>

<?php include_once("../includes/templates/footer.php"); ?>