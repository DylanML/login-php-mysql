<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.

    $con = mysqli_connect("10.92.0.11:3306","grupo","123456789","loginsystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>