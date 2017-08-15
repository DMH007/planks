<?PHP

$from="abs@abolish.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$header = 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'X-Mailer: PHP/'.phpversion();
mail($email, $subject, $message, $header);
print "Your message has been sent.  Someone would contact you soon:</br>$email</br> $subject</br> $message<p/>";
?>