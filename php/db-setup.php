<?php
    $servername = "database-1.ckzbc34xcfvb.ap-southeast-2.rds.amazonaws.com";
    $username = "admin";
    $password = "Raisingkids123!";
    $db = "kidsdatabase";
// Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
    }
?>
