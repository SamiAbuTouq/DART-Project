<?php
session_start();
include_once 'connectToDB.php';

$error='';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM customers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
          if ($password==$user['password']) {
            $_SESSION['customer_id'] = $user['customer_id'];
            $_SESSION['customer_name'] = $user['customer_name'];
            header("Location: http://localhost/Project/php/MainPage.php");
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "No account found with that email";
    }
    $stmt->close();
}
$conn->close();
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "../CSS/signInOut.css" ?></style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>DART Sign-In</title>
    <link rel="icon" href="../Images/Logos/L1.ico">
    <style>
       .paass:focus-within  {
            border: 1px solid #e4405f;
        }
    </style>
 
</head>
<body>
    <img src="../Images/Logos/L2.png" alt="DART" width="200px" >
    <h1>Digital Access to Remarkable Treasures</h1>
    <form class="form" method="post">
        <div class="flex-column">
          <label for="em">Email </label></div>
          <div class="inputForm">
            <img src="../Images/Form Images/67177.png" alt="pass" width="20px" style="margin-left: 0;">
            <input type="email" class="input" id="em" name="email" placeholder="Enter your Email" required>
          </div>
        
        <div class="flex-column">
          <label for="pass">Password </label></div>

          <div class="inputForm" id="x">
            <img src="../Images/Form Images/password-lock-12.png" alt="pass" width="25px" style="margin-left: 0;">
            <input type="password" class="input" id="pass" name="password"  placeholder="Enter your Password" required oninput="validatePassword()">
          </div>  
        
          <?php if ($error): ?>
            <p style="color:#e4405f;"><?php echo $error; ?></p>
        <?php endif; ?>
        
        <button class="button-submit">Sign In</button>
        <p class="p">Don't have an account? <a href="http://localhost/Project/php/signUp.php" style="color: blue; font-weight: bold;">Sign Up</a></p>
    </form>

    <script>
    function validatePassword() {
        var $passwordInput = $('#pass');
        var $containerDiv = $('#x');

        if ($passwordInput.val().length < 6) {
            $containerDiv.addClass('paass');
        } else {
            $containerDiv.removeClass('paass');
        }
    }

    </script>
</body>
</html>
