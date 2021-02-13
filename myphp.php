<?php 

include_once "connect.php";

$Brand = $_POST['Brand'];
$Model = $_POST['Model'];
$Type = $_POST['Type'];
$Year = $_POST['Year'];
$Engine = $_POST['Engine'];
$HP = $_POST['HP'];


$sql = "INSERT INTO cars(Brand, Model, Type_car, Year_of_car, Engine, Horse_power) VALUES ('$Brand','$Model','$Type','$Year','$Engine','$HP');";

mysqli_query($conn, $sql);

#header("Location: ../index.php?great+job");

?>