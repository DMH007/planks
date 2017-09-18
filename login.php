<?php session_start();// Starting Session ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diet</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!--Container-->
<div class="container">
    <div class="row">
                <div class="col-lg-12 text-center">
<!-- Navigation -->
    <?php require_once "nav.php"
    ?>

<!-- Continue HTML -->
<h2>Login</h2>
<form method="post" action="member_only.php">
<label>E-mail
    <input type="email" name="email"  value="" size="33" required><br>
</label>
	<br>
<label>Password
    <input type="password" name="password" value="" size="30" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">
</form>

<?php

if(isset($_POST['submit'])){

	if (empty($_POST['email']) || empty($_POST['password'])) {
		echo "Username or Password is invalid";
	} else {
		$e = $_POST['email'];
		$p = $_POST['password'];

		//mamp users connection
		$cnt = mysqli_connect("localhost", "root", "root", "fssa");
		//xampp users connection
		//$connection = mysqli_connect("localhost", "root", "", "DBNAME");

		$qry = "select * from workout where password='$p' AND email='$e'";

		$login = mysqli_query($cnt, $qry);

		$row = $login->num_rows;

		echo $row;

		echo "<hr>";

		if ($row == 1) {
		
        header('location:member_only.php');
            
		} else {
			echo "try again";
		}
		// Closing Connection
		mysqli_close($cnt);
	}

}
?>

</body>
</html>