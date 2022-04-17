<?php
session_start();

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

$username = $_POST['username'];
$pass = $_POST['pass'];

$query = "SELECT * from user where username = '$username'";
$result = $db -> query($query);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    echo $name;

    if($row['pass'] == $pass){
        $_SESSION['username'] = $username;
        if(isset($_SESSION['username'])){
            echo "Login Success! <br>";
            echo "Welcome  ".$row["firstName"], $row["lastName"];
        }
        else{
            echo "login failed";
        }
    }
    else{
        echo "Wrong login information";
    }
}
else{
    echo "Wrong login information";

}

mysqli_close($db);


?>