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
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
<body>
<?php
    include "header.php"
    ?>
                <?php 
                    if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true){
                        echo"
                          
                          <li><a href='logout.php' class='triggerLogin'>Logout</a></li>
                        ";
                      }
                      else{
                        echo "
                          <li><a href='login.php' class='triggerLogin'>Login</a></li>
                          <li><a href='registration.php' class='triggerLogin'>Register</a></li>
                        ";
                      }
                    ?>
            </ul>
        </nav>  
    </header>

    <section class="contact">
        <div class="container flex">
            <div class="card">
                <div>
                    <img src="image/owner.jfif" alt="owner">
                </div>
                <h1>Avro's Kitchen and Home Delivery</h1>
                <p><span>Address: </span>20/A, RK mission road, Gopibag, Dhaka.</p>
                <p><span>Email: </span> priom70@gmail.com</p>
                <p><span>Phone: </span>+880132249564</p>
            </div>
            <div>
                <img src="image/contact.jpg" alt="" height="300px" width="300px">
            </div>
        </div>
    </section>
</body>
</html>