<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    
    .containers {
     min-height: 100vh;
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
       display: flex;
       align-items: center;

    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .form-group input {
      width: 200%;
      padding: 8px;
      border-radius: 3px;
      border: 1px solid #ccc;
      
    }
    
    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php
include "middleware.php";
$username = "";
$phone = "";
$location = "";
$quantity = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["name"];
  $phone = $_POST["phone"];
  $location= $_POST["location"];

  $quantity = $_POST["quantity"];
}
else {
  $sql = "INSERT INTO ordertype (username,Phone number ,Location, Quantity) values ('$username', '$phone', '$location',$quantity)";
      $result = insertQuery($conn, $sql);
}

?>



<?php
    include "header.php"
    ?>







  <div class="containers">
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="phone">Location</label>
        <input type="tel" id="phone" name="location" required>
      </div>
      <div class="form-group">
        <label for="phone">Quantity</label>
        <input type="tel" id="phone" name="quantity" required>
      </div>
      <!-- <div class="form-group">
        <label for="phone">Payment Method</label>
        <input type="tel" id="phone" name="phone" required>
      </div> -->
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
