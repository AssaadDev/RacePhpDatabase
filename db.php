<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="dbStyle.css">
    <title>Database</title>
</head>

<body>
        <h1>Database of all vehicles that are going to race</h1>
        <table>
  <tr>
    <th>ID</th>
    <th>Brand</th>
    <th>Model</th>
    <th>Type</th>
    <th>Year</th>
    <th>Engine</th>
    <th>HP</th>
  </tr>
  <tr></tr>
    <?php 
    include_once "connect.php";

    $qvr = "SELECT * FROM cars";
    $qvr_run = mysqli_query($conn, $qvr);

    if($qvr_run){
      foreach($qvr_run as $row){
        ?>
        <tr>
      <td><?php echo $row['ID']; ?></td>
      <td><?php echo $row['Brand']; ?></td>
      <td><?php echo $row['Model']; ?></td>
      <td><?php echo $row['Type_car'];?></td>
      <td><?php echo $row['Year_of_car']; ?></td>
      <td><?php echo $row['Engine']; ?></td>
      <td><?php echo $row['Horse_power']; ?></td>
      <td class="x"><a class="btn" href="dlt.php?delete=<?php echo $row['ID'] ?>"><?php echo 'Remove';?></a></td>
      </tr>
      <?php
      }
    }else{
      echo "No data!";
    }
    
    ?>
</table>


</body>

</html>