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
     $_SESSION['fname'] = $row['firstName'];
     $_SESSION['lname'] = $row['lastName'];

    if($row['pass'] == $pass){
        $_SESSION['username'] = $username;
        if(isset($_SESSION['username'])){
            $_SESSION['login'] = "OK";
            header("Location: loginform.php"); 
            exit();
        }
        else{
            ?>
            <script>
            alert("Login failed");
            window.location.href='index.php';
        </script>
        <?php
        }
    }
    else{
        ?>
            <script>
            alert("Wrong login information");
            window.location.href='index.php';
        </script>
        <?php

    }
}
else{
    ?>
    <script>
    alert("Wrong login information");
    window.location.href='index.php';
</script>
<?php

}


?>