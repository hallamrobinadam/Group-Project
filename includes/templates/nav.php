<nav class="navbar navbar-inverse navbar-fixed-top">
    
    <div class="container">

    <a href="home.php" class="navbar-brand">SOBU</a>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="home" href="home.php">Home</a></li>

                <!-- Social Media drop down  -->
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://www.facebook.com/?stype=lo&jlou=Affh4F7-aeLw59CuDOii4wCoTohevk9hEbv95VS3OUAZX3MjDsKzxJa5lRGky-h0ip7w81Ha5Nv_1GRfKsVk0S63&smuh=38647&lh=Ac98vKYxIjnq57Qk"><img                               src="images/facebook.png" class="social-media"/></a></li>
                            <li><a href="https://twitter.com/download?logged_out=1&lang=en"><img src="images/twitter.png" class="social-media"/></a></li>
                            <li><a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?hl%3Den%26gpsrc%3Dgplp0&hl=en"><img src="images/g+.png"                                       class="social-media"/></a></li>
                            <li><a href="https://instagram.com"><img src="images/Instagram.png" class="social-media"/></a></li>
                        </ul>
                </li>
                
                <!-- About page, Account page, Logout and register buttons. Logout and Account button will only appear when logged in. -->

                <li><a href="about.php">About</a></li>
                <?php if(isset($_SESSION["username"])) { ?>
                    <li><a href="account.php" >My Posts</a></li>
                	<li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                	<li><a href="registerpage.php">Register</a></li>
                	<li class="dropdown">
                        
                        <!-- Login button,dropdown and form. Wont show when a user is loggen in. -->

	                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Login <b class="caret"></b></a>
	                    <ul class="dropdown-menu" role="menu">
		                    <li>
		                        <div class="login-box">
								    <form action="login.php" method="post">
								        <p>Username:</p> <input class="login-form" type="text" name="username" value="" placeholder="Username"><br>
								        <p>Password:</p> <input class="login-form" type="password" name="password" value="" placeholder="Password"><br>
								        <input class="login-button" type="submit" name="login" value="Login">
								    </form>
								</div>
		                    </li>
	                    </ul>

	                </li>
	            <?php } ?>


            </ul>

        </div>

</nav>