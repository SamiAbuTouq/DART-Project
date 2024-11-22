<?php
include 'connectToDB.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cart_item_id"])) {
    $cartItemId = $_POST["cart_item_id"];

    $query = "DELETE FROM cart_items WHERE cart_item_id = $cartItemId";
    $result = $conn->query($query);

    if ($result) {
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
