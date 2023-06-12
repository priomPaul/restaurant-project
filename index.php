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
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <?php
    include "header.php"
    ?>

     <section class="banner">
        <div class="container flex">
           <div class="banner- text">
                <h3>Forget about diet</h3>
                <h3>Let's <span>EAT!</span></h3>
                <p>We offer you not only the fresh food but also the Yummiest food in the town.</p>
                <a href="order.php" class="btn">Order Food</a>
            </div>
            <div class="banner-img">
                <img src="image/malewb.png" alt="banner-img">
            </div>
        </div>
    </section>

    <section class="environment">
        <h1>Visit Us</h1>
        <div class="container flex">
            <div>
                <img src="image/img1.jfif" alt="img">
            </div>
            <div>
                <img src="image/img2.jpg" alt="img">
            </div>
            <div>
                <img src="image/img3.jpg" alt="img">
            </div>
            <div>
                <img src="image/img4.jpg" alt="img">
            </div>
            <div>
                <img src="image/img5.jpg" alt="img">
            </div>
            <div>
                <img src="image/img6.jpg" alt="img">
            </div>
            <div>
                <img src="image/img7.jpg" alt="img">
            </div>
        </div>
    </section>

     <section class="items">
        <div class="container">
            <div class="items-text">
                <h2>Our Recipies</h2>
                <p>We have so many recipes. We also customize recipes as your need. Eat more, <span>Enjoy more!</span></p>
            </div>
            
             <div class="recipes flex">
                <div class="recipe">
                    <img src="image/vegitables.png" alt="vegitables image">
                    <h4>Fresh Vegetables</h4>
                    <p class="price">Price: 120 tk</p>
                    <p>Customizable as your need.</p>
                </div>
                <div class="recipe">
                    <img src="image/sandwich.png" alt="sandwich image">
                    <h4>Sandwiches</h4>
                    <p class="price">Price:150tk</p>
                    <p>Includes 4types of protiens and salad.</p>
                </div>
                <div class="recipe">
                    <img src=".image/mixed-items.png" alt="mixed-items image">
                    <h4>Mixed-Items</h4>
                    <p class="price">Price: 250tk</p>
                    <p>Includes salad, protiens, carbohydrates.</p>
                </div>
                <div class="recipe">
                    <img src="image/burger.jpeg" alt=" image">
                    <h4>Burger</h4>
                    <p class="price">Price: 250tk</p>
                    <p>Customizable as your need.</p>
                </div>
                <div class="recipe">
                    <img src="image/ramen.jpg" alt="mixed-items image">
                    <h4>Ramen</h4>
                    <p class="price">Price: 350tk</p>
                    <p>Includes salad, protiens, carbohydrates.</p>
                </div>
                <div class="recipe">
                    <img src="image/kacchi.png" alt="vegitables image">
                    <h4>Kacchi Biriyani</h4>
                    <p class="price">Price:400tk</p>
                    <p>Customizable as your need.</p>
                </div>
                <div class="recipe">
                    <img src="image/pasta.jpg" alt="sandwich image">
                    <h4>Oven baked Pasta</h4>
                    <p class="price">Price: 240tk</p>
                    <p>Includes 4types of protiens and salad.</p>
                </div>
                <div class="recipe">
                    <img src="image/shake.jpg" alt="mixed-items image">
                    <h4>Chocolate Shake</h4>
                    <p class="price">Price: 200tk</p>
                    <p>Includes salad, protiens, carbohydrates.</p>
                </div>
            </div>
        </div>
    </section> -->

     
    </section> <section class="followers">
        <div class="container flex">
            <div class="follower">
                <h4>812K</h4>
                <p><span>Youtube</span> Subscribers</p>
            </div>
            <div class="follower">
                <h4>2.2M</h4>
                <p><span>Instagram</span> Followers</p>
            </div>
            <div class="follower">
                <h4>516K</h4>
                <p><span>Facebook</span> Likes</p>
            </div>
        </div>
    </section>
</body>
</html>