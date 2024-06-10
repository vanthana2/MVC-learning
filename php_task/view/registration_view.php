<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts University Registration</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f8d7da;
        }

        .container {
            max-width: 800px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        .content {
            text-align: center;
        }

        .content h2 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #333333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            margin-top: 10px;
            font-size: 14px;
            color: #333333;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="file"] {
            padding: 3px;
        }

        .gender {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .gender input[type="radio"] {
            margin: 0 5px 0 10px;
        }

        .register-button {
            background-color: #ff9933;
            border: none;
            padding: 10px 20px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            margin-top: 20px;
            align-self: center;
        }

        .register-button:hover {
            background-color: #e6891e;
        }
        p {
            width: 25%;
            margin: 0;
        }
        small {
            font-size: 12px;
            color: #666666;
        }
    </style>
</head>
<body>
<h2>Hogwarts University Student Registration Form</h2>
    
    <div class="container">

        <div class="content">

            <form method="post">
                
                <label for="studentName">Student Name:</label>
                <input type="text" id="name" name="stuname" required>
            
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
       
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="password">course:</label>
                <input type="course" id="course" name="course" required>

                <label for="phone">Telephone:</label>
                <input type="tel" id="phone" name="num" required>
                
                <button type="submit" class="register-button" method="post" name="submit">Submit</button>
            </form>
            <p>Already Registered ?<a href="login"><span>Login</span></a></p>
        </div>
    </div>

    <?php

require("controller/registration_control.php");

?>

</body>
</html>
