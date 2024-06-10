<?php
require ("model/dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $Name = $_POST['stuname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $course = $_POST['course'];
    $num = $_POST['num'];

    $password = md5($password);

    $sql_insert = "INSERT INTO register (Name, DOB, Email, Password, Course, Mobile)
                VALUES ('$Name', '$dob', '$email', '$password','$course', '$num')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<script>alert('Registration Successfully'); window.location='login';</script>";
    } else {
        echo "Error";
    }

    $conn->close();
}
?>