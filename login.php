<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<?php
    include "middleware.php";
    if ($authenticated) {
        header("location: index.php");
    }
    $login_error_message = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "select * from user where email = '$email' and password = '$password'";
        $result = getQuery($conn, $sql);
        $dataLen = count($result);
        if ($dataLen == 1) {
            $result = $result[0];
            $_SESSION["authenticated"] = true;
            $_SESSION["id"] = $result["id"];
            header("location: index.php");
        } else {
            $_SESSION["authenticated"] = false;
            $login_error_message = "Please correct email and password";
        }
    }

    dbClose($conn);
    ?>
    <?php
    include "header.php"
    ?>

    <section class="login">
        <div class="container">
            <h1>Sign in</h1>
                <form method="POST" action="login.php">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <label for="password"><?php echo $login_error_message ?></label>
                    <button class="btn">Login</button>
                </form>
        </div>
    </section>
</body>
</html>