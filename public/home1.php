<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<?php include("../includes/templates/nav.php"); ?>
<?php include("../includes/templates/banner.php"); ?>

<div class="register-box">
    <form action="post.php" method="post">
        <p>Business:</p> <input type="text" name="name_of_business" value=""><br>
        <p>Rating:</p> <input type="text" name="rating" value=""><br>
        <p>Category:</p> <input type="text" name="category" value=""><br>
        <p>Description:</p> <input type="text" name="description" value=""><br>
        <input type="submit" name="post" value="Post">
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Item
                </a>
                <a href="#" class="list-group-item">Category</a>
                <a href="#" class="list-group-item">Description</a>
            </div>

            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Item
                </a>
                <a href="#" class="list-group-item">Category</a>
                <a href="#" class="list-group-item">Description</a>
            </div>

            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Item
                </a>
                <a href="#" class="list-group-item">Category</a>
                <a href="#" class="list-group-item">Description</a>
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>
                <div class="list-group-item">
                    <a href="food1.html">Food</a>
                </div>
                <div class="list-group-item">
                    <a href="nightclubs1.html">Night Clubs</a>
                </div>
                <div class="list-group-item">
                    <a href="clothes1.html">Clothes</a>
                </div>
                <div class="list-group-item">
                    <a href="gyms1.html">Gyms</a>
                </div>
                <div class="list-group-item">
                    <a href="electronics1.html">Electronics</a>
                </div>
            </div>
        </div>

    </div>
</div>


<?php include_once("../includes/templates/footer.php"); ?>