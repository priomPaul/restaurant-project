<?php
session_start();
require_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/about.css">
    <title>About</title>
</head>
<body>
<?php
    include "header.php"
    ?>

    <section class="about">
        <div class="container flex">
            <div class="about-img">
                <img src="image/person1.png" alt="person image" height="350" width="350">
            </div>
            <div class="about-text">
                <h2>About Us</h2>
                <p>Your satisfaction is our main concentration. We try to offer you the best we can. We treat you as our guest not our customer.</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </div>
    </section>
</body>
</html>