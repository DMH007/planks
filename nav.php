 

    <div class="brand">Abolish</div>
    <div class="address-bar">3481 Melrose Place | Brooklyn, NY 11203 | 929.285-0418</div>
<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Abolish</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="diet.php">Diet</a>
                    </li>
                    <li>
                        <a href="planks.php">Planks</a>
                    </li>
                    <li>
                        <a href="registration.php">Registration</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
    
        <!-- /.container -->
    		<?php
		// Display the following two links only if the session variable ID exists
			if(isset($_SESSION['id'])){
				echo '<li><a href="member_only.php">member_only</a></li>';
				echo '<li><a href="logout.php">LOGOUT</a></li>';
			}
		?>
	</div>
</nav>