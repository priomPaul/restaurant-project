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
    <link rel="stylesheet" href="css/order.css">
    <title>Order</title>
</head>
<body>
<?php
    include "header.php"
    ?>

    <section class="order">
        <section class="items">
            <div class="container">
                <div class="items-text">
                    <h2>Choose your food!</h2>
                    <p>We have so many recipes. We also customize recipes as your need. Eat more, <span>Enjoy more!</span></p>
                </div>
                
                <div class="recipes flex">
                    <div class="recipe">
                        <img src="image/vegitables.png" alt="vegitables image">
                        <h4>Fresh Vegetables</h4>
                        <p class="price">Price: 200tk</p>
                        <p>Customizable as your need.</p>
            
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                    <div class="recipe">
                        <img src="image/sandwich.png" alt="sandwich image">
                        <h4>Sandwiches</h4>
                        <p class="price">Price: 220tk</p>
                        <p>Includes 4types of protiens and salad.</p>
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                    <div class="recipe">
                        <img src="image/mixed-items.png" alt="mixed-items image">
                        <h4>Mixed-Items</h4>
                        <p class="price">Price: 250tk</p>
                        <p>Includes salad, protiens, carbohydrates.</p>
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                    <div class="recipe">
                        <img src="image/burger.jpeg" alt=" image">
                        <h4>Burger</h4>
                        <p class="price">Price: 250tk</p>
                        <p>Customizable as your need.</p>
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                    <div class="recipe">
                        <img src="image/ramen.jpg" alt="mixed-items image">
                        <h4>Ramen</h4>
                        <p class="price">Price: 350tk</p>
                        <p>Includes salad, protiens, carbohydrates.</p>
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                    <div class="recipe">
                        <img src="image/kacchi.png" alt="vegitables image">
                        <h4>Kacchi Biriyani</h4>
                        <p class="price">Price:400tk</p>
                        <p>Customizable as your need.</p>
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                    <div class="recipe">
                        <img src="image/pasta.jpg" alt="sandwich image">
                        <h4>Oven baked Pasta</h4>
                        <p class="price">Price: 240tk</p>
                        <p>Includes 4types of protiens and salad.</p>
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                    <div class="recipe">
                        <img src="image/shake.jpg" alt="mixed-items image">
                        <h4>Chocolate Shake</h4>
                        <p class="price">Price: 200tk</p>
                        <p>Includes salad, protiens, carbohydrates.</p>
                        <button class="btn"> <a href="order2.php"> Order Now</a> </button>
                    </div>
                </div>
            </div>
        </section>
    
    <section class="payment">
        <h1>PAYMENT OPTIONS</h1>
        <div class="container flex">
            <div>
                <img src="image/bbb.svg" alt="img">
            </div>
            
            <div>
                <img src="image/credit2.webp" alt="img">
            </div>
            <div>
                <img src="image/debit.png" alt="img">
            </div>
            <div>
                <img src="image/naagad.png" alt="img">
        
            </div>
            <div>
                <img src="image/rocket.png" alt="img">
        
            </div>  
            <div>
                <img src="image/cash.jfif" alt="img">
        
            </div>
        </div>
    </section>

</body>
</html>