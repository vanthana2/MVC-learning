<?php
require "model/dbconnection.php";
session_start();

if ($_SESSION['email']!="vigneshcdckap@gmail.com") {
    header("Location: home");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
  body {
    margin: 0;
    font-family: "Montserrat", sans-serif;
}
table {
    margin-top: 10px;
    text-align: center;
    width: 99%;
    margin-left: 8px;
}
th, td {
  border: 1px solid black;
  padding: 15px;
}
tr:nth-child(odd) {
    background-color: #dbdbdb;
}
    </style>
</head>
<body>

   <table>
   <tr id="heading_table">
        <th>ID</th> 
        <th>Name</th> 
        <th>DOB</th>
        <th>Email</th>
        <th>Password</th>
        <th>Course</th>
        <th>Mobile Number</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php

    $table = "SELECT * FROM register";

    $res = $conn->query($table);
    if($res->num_rows>0){



      while($row = $res->fetch_assoc()){

?>

<tr style='text-align:center'>
<?php  echo '<td>'.$row['id'].'</td>';?>
      <?php  echo '<td>'.$row['Name'].'</td>';?>
      <?php    echo '<td>'.$row['DOB'].'</td>'; ?>
      <?php   echo '<td>'.$row['Email'].'</td>'; ?>
    <?php   echo '<td>'.$row['Password'].'</td>';?>
    <?php   echo '<td>'.$row['Course'].'</td>';?>
    <?php   echo '<td>'.$row['Mobile'].'</td>';?>
    <?php echo "<td><a href='view/edit_view.php?id=".$row["id"]."'><Button>Edit</Button></a></td>"; ?>
    <?php echo "<td><a href='view/delete_view.php?id=".$row["id"]."'><Button>Delete</Button></a></td>"; ?>   

</tr>
      <?php } }?>
      </table>
</body>
</html>