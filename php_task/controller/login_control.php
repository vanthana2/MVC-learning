<?Php
require "model/dbconnection.php";

session_start();


$email = $_POST['email'];
$password = $_POST['password'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $password = md5($password);

        $query = "SELECT id FROM register WHERE Email = '$email' and Password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['email'] = $email;
                header("location:dashboard");
            }
        } else {
            $error = 'Invalid username or password';
        }
    }
    $conn->close(); 
    
    ?>