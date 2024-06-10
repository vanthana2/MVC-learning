<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts University - Home</title>
    <link rel="stylesheet" href="view/style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container1 {
            max-width: 1200px;
            margin: 100px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-message {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .sections {
            display: flex;
            justify-content: space-between;
        }

        .section {
            width: 30%;
            background-color: #ff9933;
            padding: 20px;
            border-radius: 8px;
            color: white;
            text-align: center;
        }

        .section a {
            color: white;
            text-decoration: none;
        }

        .section:hover {
            background-color: #e6891e;
        }
        .message {
            letter-spacing: 1px;
            word-spacing: 1px;
        }
    </style>
</head>
<body>
<?php require "partials/navbar.php"; ?>
    <div class="container1">
        <div class="welcome-message">
            Welcome to Hogwarts University!
        </div>
    <div class="message">
    where the ancient art of spellcraft meets cutting-edge magical research, enchanting minds and sparking innovation in every corner of the wizarding world. Nestled in the heart of the Scottish Highlands, our esteemed institution offers an unparalleled blend of tradition and modernity, providing students with the tools to excel in magical theory, potion-making, and transfiguration, while also encouraging groundbreaking work in fields like magical creatures and dark arts defense. Our distinguished faculty, comprised of renowned scholars and accomplished practitioners, is dedicated to nurturing the next generation of wizards and witches, fostering an environment of curiosity, creativity, and critical thinking. Students can immerse themselves in a vibrant campus life, from joining the Quidditch team or participating in the Dueling Club to engaging in thought-provoking seminars and hands-on magical experiments. With access to extensive resources like the vast Hogwarts Library and the cutting-edge research labs, our students are empowered to push the boundaries of magic and discover new realms of possibility. Whether exploring the mysteries of ancient runes, unraveling the complexities of magical law, or developing innovative charms, Hogwarts University equips its graduates with the knowledge and skills to become leaders in the magical community. Our alumni network, which includes some of the most influential figures in wizarding history, offers unparalleled opportunities for mentorship and career advancement. At Hogwarts University, we believe that education is a lifelong journey, and we are committed to supporting our students every step of the way, from their first day on campus to their triumphant emergence as graduates ready to make their mark on the world. Join us at Hogwarts University, where your magical journey awaits, and let your potential shine brighter than a Patronus on a moonlit night.
    </div>
    </div>
</body>
</html>
