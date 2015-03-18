<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<?php include("../includes/templates/nav.php"); ?>

<?php include("../includes/templates/banner.php"); ?>


            <div class="container">
                <div class="row">
                    <div class="col-md-10">

                        <?php
                            $query = "SELECT * FROM sobu ORDER BY id DESC";
                            $result = mysqli_query($connection, $query);
                            if(!$result) {
                                die("Query Error");
                            }
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                             <div class="list-group">
                                <a href="#" class="list-group-item active">
                                    <p><?php echo ucfirst($row["name_of_business"]); ?></p>
                                </a>
                                <div class="list-group-item"><p><?php echo ucfirst($row["category"]); ?></div>
                                <div class="list-group-item"><p><?php echo ucfirst($row["postcode"]); ?></div>
                                <div class="list-group-item"><p><?php echo ucfirst($row["rating"]); ?></div>
                                <div class="list-group-item"><p><?php echo ucfirst($row["description"]); ?></div>
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



<?php include_once("../includes/templates/footer.php"); ?>