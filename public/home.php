<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<?php include("../includes/templates/nav.php"); ?>

<?php include("../includes/templates/banner.php"); ?>

<?php
    if(isset($_SESSION["username"])) {
        include("../includes/templates/post.php");
    }
?>

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
	                <a href="#" class="list-group-item"><p><?php echo ucfirst($row["postcode"]); ?></p></a>
	                <a href="#" class="list-group-item"><p><?php echo ucfirst($row["rating"]); ?></p></a>
	                <a href="#" class="list-group-item"><p><?php echo ucfirst($row["description"]); ?></p></a>
	            </div>

			<?php } ?>

        </div>

        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>
                <div class="list-group-item">
                    <a href="food.html">Food</a>
                </div>
                <div class="list-group-item">
                    <a href="nightclubs.html">Night Clubs</a>
                </div>
                <div class="list-group-item">
                    <a href="clothes.html">Clothes</a>
                </div>
                <div class="list-group-item">
                    <a href="gyms.html">Gyms</a>
                </div>
                <div class="list-group-item">
                    <a href="electronics.html">Electronics</a>
                </div>
            </div>
        </div>

    </div>
</div>



<?php include_once("../includes/templates/footer.php"); ?>