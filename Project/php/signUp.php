<html lang="en">
<?php

session_start();
 include_once 'connectToDB.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];

    $sql = "SELECT * FROM customers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "User with this email already exists";
    } else {
        $sql = "SELECT * FROM customers WHERE phone_number = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $phoneNumber);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $message = "Phone number already exists";
        } else {
            $sql = "INSERT INTO `customers`(`customer_name`, `email`, `password`, `phone_number`) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $email, $password, $phoneNumber);
            if ($stmt->execute()) {
                $_SESSION['customer_id'] = $stmt->insert_id;
                $_SESSION['customer_name'] = $name;
                header("Location: http://localhost/Project/php/MainPage.php");
                exit();
            } else {
                $message = "Error: " . $stmt->error;
            }
        }
    }

    $stmt->close();
 }
 $conn->close();
 ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DART Sign-Up</title>
    <link rel="icon" href="../Images/Logos/L1.ico">
    <style><?php include "../CSS/signInOut.css" ?></style>
    <script>
        function showMessage(message) {
            alert(message);
        }
        <?php
        if (!empty($message)) {
            echo 'showMessage("' . $message . '");';
        }
        ?>
    </script>
    <style>
          .paass:focus-within  {
            border: 1px solid #e4405f;
        }
    </style>
  
</head>
<body>
    <img src="../Images/Logos/L2.png" alt="DART" width="200px">
    <h1>Digital Access to Remarkable Treasures</h1>
    <form class="form" method="post" action="../php/signUP.php">

        <div class="flex-column">
            <label for="name">Name</label>
        </div>
        <div class="inputForm">
            <img src="../Images/Form Images/icons_91484.svg" alt="pass" width="25px" style="margin-left: 0;">
            <input type="text" class="input" id="name" name="name" placeholder="Enter your Name" required>
        </div>

        <div class="flex-column">
            <label for="em">Email</label>
        </div>
        <div class="inputForm">
            <img src="../Images/Form Images/67177.png" alt="pass" width="20px" style="margin-left: 0;">
            <input type="email" class="input" id="em" name="email" placeholder="Enter your Email" required>
        </div>

        <div class="flex-column">
            <label for="pass">Password</label>
        </div>
        <div class="inputForm" id="x">
            <img src="../Images/Form Images/password-lock-12.png" alt="pass" width="25px" style="margin-left: 0;">
            <input type="password" class="input" id="pass" name="password" pattern="\w{6,}" title="Password must contain at least 6 alphanumeric characters, or underscore" placeholder="Enter your Password" required  oninput="validatePassword()">
        </div>

        <div class="flex-column">
            <label for="phone">Phone Number</label>
        </div>
        <div class="inputForm">
            <img src="../Images/Form Images/phone.png" alt="pass" width="22px" style="margin-left: 0;">
            <input type="text" class="input" id="phone" name="phoneNumber" placeholder="Enter your Phone Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
        </div>
        <button class="button-submit">Sign up</button>
        <p class="p">Already have an account? <a href="http://localhost/Project/php/signIn.php" style="color: blue; font-weight: bold;">SignIn</a></p>
    </form >
    <div id="last" style="margin-top: 2em;">.</div>
    <script>
        function validatePassword() {
            var passwordInput = document.getElementById('pass');
            var containerDiv = document.getElementById('x');
            
            if (passwordInput.value.length < 6) 
                containerDiv.classList.add('paass');
             else 
                containerDiv.classList.remove('paass');
            
        }
    </script>
</body>
</html>
