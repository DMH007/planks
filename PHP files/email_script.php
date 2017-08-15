<?PHP

$from="dave_hinds@msn.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail($email, $subject, $message, "From:". $from);
print "Your message has been sent.  Someone would contact you soon:</br>$email</br> $subject</br> $message<p/>";
?>