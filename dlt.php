<?php

include_once "connect.php";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM cars WHERE ID = $id") or die($mysqli->error());
}

header("Location: db.php")
?>