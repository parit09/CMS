<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        <img src="../images/10.jpg/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"/>
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2>This is a Shift Courier Management Service</h2>
        <h4>The fastest courier service of India</h4><br><br>
        <h3>DBMS MINI PROJECT</h3>
        <h6>By Group of Parit Rajput, Ujjwal Kumar, Gautam Das and Raja Siddhart</h6>
    </div>
</body>
</html>