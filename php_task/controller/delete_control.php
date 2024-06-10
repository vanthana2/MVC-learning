<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("../model/dbconnection.php");

session_start();

$id = $_GET["id"];

$query = "DELETE FROM register WHERE id='$id'";

$result = $conn->query($query);

if ($result == true) {
    echo "<script type='text/javascript'>
            alert('Record deleted successfully');
            window.location.href = '../table.php';
          </script>";
    exit();
} else {
    echo "<script type='text/javascript'>
            alert('Record not deleted successfully');
            window.location.href = '../table.php';
          </script>";
}
?>

