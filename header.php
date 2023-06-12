<header>
        <nav class="container flex">
            <h1>Foodie</h1>
            <ul  class="flex">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="order.php">Order</a></li>
                <!-- <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li> -->
                <?php 
                    if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true){
                        echo"
                          
                          <li><a href='logout.php' class='triggerLogin'>Logout</a></li>
                        ";
                      }
                      else{
                        echo "
                          <li><a href='login.php' class='triggerLogin'>Login</a></li>
                          <li><a href='register.php' class='triggerLogin'>Register</a></li>
                        ";
                      }
                    ?>
            </ul>
        </nav>  
    </header>