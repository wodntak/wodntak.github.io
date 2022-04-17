<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email =  $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['pass'];

$dbLocation = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'webbook';

$db = mysqli_connect($dbLocation,
                     $dbUsername,
                     $dbPassword,
                     $dbName);
if (mysqli_connect_errno() || ($db == null))
{
    printf("Database connection failed: %s<br>
           Connection script now terminating.",
           mysqli_connect_error());
    exit(0);
}

$register = "INSERT INTO user (id, firstName, lastName, email, username, pass) values (NULL,'$firstname','$lastname','$email','$username','$pass')";

if($db->query($register)){
    echo "Registration success!!";
    echo "<a href=index.php>Login</a>";
}

else{
    echo "failed to register";
}

mysqli_close($db);

?>