<?php
include 'connectToDB.php';
session_start();

if (!isset($_SESSION['customer_id'])) {
    header("Location: http://localhost/Project/php/signIn.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerId = $_SESSION['customer_id'];
    $productId = $_POST['product_id'];
    $quantity = 1;

    $query = "SELECT cart_id FROM carts WHERE customer_id = $customerId";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cartId = $row['cart_id'];
        $_SESSION['cart']=$cartId;

    } else {
        $query = "INSERT INTO carts (customer_id) VALUES ($customerId)";
        $conn->query($query);
        $cartId = $conn->insert_id;
        $_SESSION['cart']=$cartId;
    }

    $query = "SELECT * FROM cart_items WHERE cart_id = $cartId AND product_id = $productId";
    $result = $conn->query($query);

    if ($result->num_rows > 0)
        $query = "UPDATE cart_items SET quantity = quantity + $quantity WHERE cart_id = $cartId AND product_id = $productId";
    else
        $query = "INSERT INTO cart_items (cart_id, product_id, quantity) VALUES ($cartId, $productId, $quantity)";

    $conn->query($query);
    echo "success"; 
} 
?>
