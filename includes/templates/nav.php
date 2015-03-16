<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">

    <a href="home.php" class="navbar-brand">SOBU</a>

            <ul class="nav navbar-nav navbar-right">

                <li class="active"><a href="home.php">Home</a></li>

                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://www.facebook.com/?stype=lo&jlou=Affh4F7-aeLw59CuDOii4wCoTohevk9hEbv95VS3OUAZX3MjDsKzxJa5lRGky-h0ip7w81Ha5Nv_1GRfKsVk0S63&smuh=38647&lh=Ac98vKYxIjnq57Qk">Facebook</a></li>
                        <li><a href="https://twitter.com/download?logged_out=1&lang=en">Twitter</a></li>
                        <li><a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?hl%3Den%26gpsrc%3Dgplp0&hl=en">Google+</a></li>
                        <li><a href="https://instagram.com">Instagram</a></li>
                    </ul>

                </li>

                <li><a href="about.html">About</a></li>

                <li><a href="rlp.php">Contact</a></li>
				<?php if(isset($_SESSION["username"])) { ?>
                	<li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                	<li><a href="registerpage.php">Register</a></li>
                	<li class="dropdown">

	                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Login <b class="caret"></b></a>
	                    <ul class="dropdown-menu" role="menu">
		                    <li>
		                        <div class="login-box">
								    <form action="login.php" method="post">
								        <p>Username:</p> <input type="text" name="username" value=""><br>
								        <p>Password:</p> <input type="password" name="password" value=""><br>
								        <input type="submit" name="login" value="Login">
								    </form>
								</div>
		                    </li>
	                    </ul>

	                </li>
	            <?php } ?>


            </ul>

        </div>

</nav>