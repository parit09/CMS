<?php

    $dbcon = mysqli_connect('localhost', 'root', '', 'courierdb');

    if ($dbcon === false) {
        die("Error: Could not connect to the database. " . mysqli_connect_error());
    }

    mysqli_set_charset($dbcon, "utf8");

    echo "Database connected successfully!";
   
?>
