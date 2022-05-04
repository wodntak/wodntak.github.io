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
$username = $_POST['musername'];

$query = "SELECT id, firstName, lastName, username, messages, dates from Msg where username = '$username' order by id desc limit 0,10";
$result = $db -> query($query);


if($_SERVER['HTTP_REFERER'] == "http://localhost:8888/loginform.php"){
    if(mysqli_num_rows($result) >= 1){
    ?>
    <!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css tags-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="ProjectStyle.css">
    <link rel="stylesheet" href="animation.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  

    <title>Jaehyeon</title>
</head>

<body>
<header class="header fixed-top" id="header">
            <div class="collapse" id="navbarToggleExternalContent" >
                <div class="bg-dark p-4 text-right">
                  
            
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark ">
                <div class="container-fluid" >     
                    <div class="text-right" >
                        <button class="btn btn-warning m-2" type="button" onclick="document.location.href='loginform.php'" > Back
                        </button>
                    
                    </div>
                    
                </div>
            </nav>
        </header>
    
    <div class="main">
        <div id="page4">
            <a id="message" class="smooth">
                <h2>Message </h2>
                    <table class="list-table">
                        <thead>
                            <tr>
                                    <th width="70">#</th>
                                    <th width="200">Firstname</th>
                                    <th width="200">Lastname</th>
                                    <th width="150">Username</th>
                                    <th width="500">Messages</th>
                                    <th width="150">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = $result->fetch_assoc()) {
                                    $_SESSION['fname'] = $row['firstName'];
                                    $_SESSION['lname'] = $row['lastName'];
                            ?>
                            <tr>
                            <td width="70"><?php echo $row['id'] ?></td>
                            <td width="200"><?php echo $row['firstName'] ?></td>
                            <td width="200"><?php echo $row['lastName']?></td>
                            <td width="150"><?php echo $row['username']?></td>
                            <td width="500"><?php echo $row['messages'] ?></td>
                            <td width="150"><?php echo $row['dates']?></td>
                            
                            </tr>
                        </tbody>
                    <?php
                        }
                    ?>
                    </table>
            </a>
        </div>
    </div>    
    

    <footer>
        <div class = "bg-dark p-3">
        © 2022 by Jaehyeon Yang
        </div>
    </footer>
<!-- Javascript implementation-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
<script src="Projectjs.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>

<script>
    AOS.init();
</script>

</body>

</html>
<?php
    }
    else{
        ?>
            <script>
                alert("No results or invalid username");
                window.location.href='index.php';
            </script>
            <?php  
    }
}
else{
    header("Location : error.php");
}
?>