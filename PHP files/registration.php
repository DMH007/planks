<html>
    <head>
    </head>
    
    <style>
        body{
            background-color:blanchedalmond;
}
        h1{
            color: darkblue;
            text-align: center;
        }
    </style>
    
    // nav
    <ul class="nav navbar-nav">
                    <li>
                        <a href="login.html">Login</a>
                        <a href="login.html">Logout</a>
                    </li>
    </ul>
<h1>Form</h1>
<form action="registration_script.php" method="post">
First name: <input type="text" name="fname" size="80"><br><br>
Last name: <input type="text" name="lname" size="80"><br><br>
E-mail: <input type="text" name="email" size="80"><br><br>
UserID: <input type="text" name="userid" required><br><br>
Password <input type="password" name="psw"><br>
<input type="submit">
</form>

</html>
