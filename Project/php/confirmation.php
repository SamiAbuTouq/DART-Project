<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1,#name {
            color: #EE005F;
        }
        p {
            margin-bottom: 10px;
        }
        .email {
            color: #0069d9;
            text-decoration: none;
        }
        .email:hover {
            text-decoration: underline;
        }
        .btn-container {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 40px;
            background-color: #EE005F;
            color: #fff;
            border: none;
            border-radius: 11px;
        }

        .btn:hover {
            background-color: #0069d9;
        }
        td{
            padding:6px;
        }
        strong{
            margin-right:10px;
        }
        i{
            color: #EE005F;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Order Confirmation</h1>
        <?php
session_start(); 


if (!isset($_SESSION['customer_id'])) {
    header("Location: login.php");
    exit(); 
}


if (!empty($_POST)) {
    
    $customer_id = $_SESSION['customer_id'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $city = $_POST['countries']?? 'Not Selected';;
    $state = $_POST['state'];
    $shipping_method = $_POST['shipping-method'];
    $voucher_code = $_POST['Voucher'] ?? 'No Voucher Code';
    $payment_method = $_POST['payment-method'];
    $card_number = $_POST['card-number'] ?? 'Not provided';
    $expiration_month = $_POST['expiration-month'] ?? 'Not provided';
    $expiration_year = $_POST['expiration-year'] ?? 'Not provided';
    $cvv = $_POST['cvv'] ?? 'Not provided';
    $donation = isset($_POST['donation']) ? $_POST['donation'] : 'no'; 
    $donation_amount = isset($_POST['Donate']) ? $_POST['Donate'] : 0; 
    $total_amount = isset($_SESSION['total_amount']) ? $_SESSION['total_amount'] : 0; 

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dart";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
   
    $sql = "INSERT INTO orders (customer_id, first_name, last_name, email, address, phone, city, state, shipping_method, voucher_code, payment_method, card_number, expiration_month, expiration_year, cvv, donation, donation_amount, total_amount)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssssssssssssds", $customer_id, $first_name, $last_name, $email, $address, $phone, $city, $state, $shipping_method, $voucher_code, $payment_method, $card_number, $expiration_month, $expiration_year, $cvv, $donation, $donation_amount, $total_amount);

    if ($stmt->execute()) {
    echo "<p>Thank you <i id=name> $first_name $last_name </i>for your order! <br> Below are your order details:</p>";
    echo "<table>";
    echo "<tr><td><strong>Your Email:</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>Your Address:</strong></td><td>$address</td></tr>";
    echo "<tr><td><strong>Your Phone:</strong></td><td>$phone</td></tr>";
    echo "<tr><td><strong>Your City:</strong></td><td>$city</td></tr>";
    echo "<tr><td><strong>Your State:</strong></td><td>$state</td></tr>";
    echo "<tr><td><strong>Your Shipping Method:</strong></td><td>$shipping_method</td></tr>";
    echo "<tr><td><strong>Your Payment Method:</strong></td><td>$payment_method</td></tr>";
    echo "<tr><td><strong>Expiration Month:</strong></td><td>$expiration_month</td></tr>";
    echo "<tr><td><strong>Expiration Year:</strong></td><td>$expiration_year</td></tr>";
    echo "<tr><td><strong>Your Donation Choice:</strong></td><td>$donation</td></tr>";
    echo "<tr><td><strong>Donation Amount:</strong></td><td><i>$".$donation_amount."</i></td></tr>";
    echo "<tr><td><strong>Total Amount:</strong></td><td><i>$".number_format($total_amount+$donation_amount, 2)."</i></td></tr>";
    echo "</table>";
    echo "<p>We value your privacy and have securely handled sensitive information such as payment details (card number, CVV) and voucher codes, which are not displayed here.</p>";

    $cart_id = $_SESSION['cart'];
    $update_query = "UPDATE products AS p
                         INNER JOIN cart_items AS ci ON p.product_id = ci.product_id
                         SET p.stock = p.stock - ci.quantity
                         WHERE ci.cart_id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("i", $cart_id);

    if ($update_stmt->execute()) {
        $empty_cart_query = "DELETE FROM cart_items WHERE cart_id = ?";
        $empty_cart_stmt = $conn->prepare($empty_cart_query);
        $empty_cart_stmt->bind_param("i", $cart_id);

        if (!$empty_cart_stmt->execute()) {echo "<p>Failed to clear cart items</p>";}
        $empty_cart_stmt->close();
    } 
     else { echo "<p>Failed to update product stock </p>";}

        $update_stmt->close();
   } else { echo "<p>Failed to save order details</p>";}

    $stmt->close();
} 
else {echo "<p>No order details found</p>";}

$conn->close();
?>
        <p>If you have any questions, please contact us at <a href="mailto:DART.11.4@gmail.com" class="email">DART.11.4@gmail.com</a></p>
        <div class="btn-container">
        <a href="http://localhost/Project/php/log_out.php"><button class="btn">Done</button></a>
    </div>

    </div>
</body>
</html>
