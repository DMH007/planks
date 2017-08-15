<?PHP

$name=$_POST['fname']." ".$_POST['lname'];
$email=$_POST['email'];
$userid=$_POST['userid'];
$psw=$_POST['psw'];
    
//print "<p>fname: $fname</br> lname: $lname</br> Email: $email<br> userid: $userid<br> password: $psw<br></p>";
//print "Thank you for taking the time to register with us.  You are now part of the Abolish Family and would receive an exciting monthly newsletter.  This would have some great meal preparation, videos and a variety of 5min plank workouts just for you.</br>$fname</br><p/>";


		$cnt = mysqli_connect("localhost", "root", "root", "fssa");
//$cnt = mysqli_connect("localhost", "fssa", "Webdevfun1!", "fssa");


$qry = "INSERT INTO WORKOUT (name, email, user,password) VALUES ('$name', '$email', '$userid', '$psw');"; 

		mysqli_query($cnt, $qry);

		mysqli_close($cnt); 
header('location:member_only.php');
?>

