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

$firstName = $_POST['mfname'];
$lastName = $_POST['mlname'];
$email = $_POST['memail'];
$text = $_POST['textmessage'];
$date = date("h:i:sa");
$query = "SELECT username from user where email = '$email'";
$result = $db -> query($query);
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
  

$_SESSION['login'] = "OK";

if (!preg_match ("/^[a-zA-z]*$/", $firstName) ) {
    ?>
    <script>
        alert("Only alphabets and whitespace are allowed.");
        window.location.href='index.php';
    </script>
    <?php
}
else if(!preg_match ("/^[a-zA-z]*$/", $lastName)){  
    ?>
    <script>
        alert("Only alphabets and whitespace are allowed.");
        window.location.href='index.php';
    </script>
    <?php
}
else if (!preg_match ($pattern, $email)){
    ?>
    <script>
        alert("Email is not valid");
        window.location.href='index.php';
    </script>
    <?php
}  
else {
    if(mysqli_num_rows($result) == 1){
    
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $message = "INSERT INTO Msg (id, username, messages, firstName, lastName, email, dates) values (NULL,'$username','$text','$firstName','$lastName','$email', '$date')";
    
        if($db->query($message)){
            $_SESSION['fname'] = $firstName;
            $_SESSION['lname'] =  $lastName;
            ?>
            <script>
                alert("Message Successfully sent!");
                window.location.href='loginform.php';
            </script>
            <?php
    
        }
        
        else{
            ?>
            <script>
                alert("Wrong details, please insert valid information. Make sure you enter same details as you registered.");
                window.location.href='index.php';
            </script>
            <?php
    
        }
    }
    
    else{
        ?>
            <script>
                alert("Wrong details, please insert valid information. Make sure you enter same details as you registered.");
                window.location.href='index.php';
            </script>
            <?php
    
    }
}


mysqli_close($db);

?>