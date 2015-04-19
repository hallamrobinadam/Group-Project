<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<?php include("../includes/templates/nav.php"); ?>

<?php include("../includes/templates/banner.php"); ?>

                        <div class = "container">
                            
                            <legend>Electronic Deals and Offers</legend>
                            
                            <!-- Button to take user back to home page where they can post. The post form can be distracting when just browsing so it is hidden on this page.It will only be visable when logged in -->
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
                        
                        <!-- Box which will display just electronic posts -->
                        <?php
                            $query = "SELECT * FROM sobu WHERE category='Electronics'";
                            $result = mysqli_query($connection, $query);
                            if(!$result) {
                                die("Query Error");
                            }
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                             <div class="media">
                              <div class="media-left media-top">
                                <a href="">
                                  <img class="media-object" src="images/default-avatar.png" alt="...">
                                </a>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading"><?php echo ucfirst($row["username"]); ?></h4>
                                <h4 class="media-heading"><h4></h4><p><?php echo ucfirst($row["description"]); ?></h4>
                                <h5 class="media-heading"><h5>Rating:</h5><?php echo ucfirst($row["rating"]); ?></h5>
                                <h5 class="media-heading"><h5>Locations:</h5><p><?php echo ucfirst($row["postcode"]); ?></h5>
                              </div>
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