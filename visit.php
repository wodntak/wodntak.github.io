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
    $sql = "UPDATE visit SET visits = visits+1 WHERE id = 1";
    $db->query($sql);

    $sql = "SELECT visits FROM visit WHERE id = 1";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
            echo $visits;
        }
    } else {
        echo "no results";
    }

    mysqli_close($db);
    ?>