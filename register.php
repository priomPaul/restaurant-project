<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <title>Register</title>
</head>
<body>
<?php
    include "middleware.php";
    include "validation.php";
    if ($authenticated) {
        header("location: index.php");
    }
    $username = "";
    $email = "";
    $password = "";
    $confirm_password = "";
    $error_message = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        if ($password != $confirm_password) {
            $error_message = "Password not match";
        } else if (isEmailExist($conn, $email)) {
            $error_message = "Email already exist";
        } else {
            $sql = "INSERT INTO user (username, email, password) values ('$username', '$email', '$password')";
            $result = insertQuery($conn, $sql);
            if ($result) {
                $_SESSION["authenticated"] = true;
                $_SESSION["id"] = $result;
                header("location: index.php");
            } else {
                $_SESSION["authenticated"] = false;
            }
        }
    }

    dbClose($conn);
    ?>
    <?php
    include "header.php"
    ?>
<div class="container">
<div class="box form-box">
<header>Sign up</header>
<form action="" method="post">
<div class="field input">
<label for="username">Username</label>
<input type="text" name="username" required>
</div>

<div class="field input">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    </div>

<div class="field input">
    <label for="password">Password</label>
    <input type="password" name="password" id="username"autocomplete="off" required>
    </div>
    <div class="field input">
    <label for="password">Confirm Password</label>
    <input type="password" name="confirm_password" required>
    </div>
    <label for="password"><?php echo $error_message ?></label>

    <div class="field">
        <input type="submit" class="btn" name="submit" value="Submit"  required>
        </div>
        <div class="links">
            Already have an account? <a href="index.html">sign in</a>
        </div>
</form>

</div>



</div>









</body>
</html>