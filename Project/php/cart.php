<!DOCTYPE html>
<html lang="en">
<?php
include 'connectToDB.php';
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DART | shopping-cart</title>
    <link rel="icon" href="../Images/Logos/L2.png">
    <link rel="stylesheet" href="../CSS/style.css">


<style>
     @font-face {
            font-family: sami1;
            src: url(../Fonts/Merienda-VariableFont_wght.ttf);
        }
    body {
        background-image: linear-gradient(161deg, rgba(121, 121, 121, 0.02) 0%, rgba(121, 121, 121, 0.02) 16.667%,rgba(193, 193, 193, 0.02) 16.667%, rgba(193, 193, 193, 0.02) 33.334%,rgba(177, 177, 177, 0.02) 33.334%, rgba(177, 177, 177, 0.02) 50.001000000000005%,rgba(5, 5, 5, 0.02) 50.001%, rgba(5, 5, 5, 0.02) 66.668%,rgba(229, 229, 229, 0.02) 66.668%, rgba(229, 229, 229, 0.02) 83.33500000000001%,rgba(211, 211, 211, 0.02) 83.335%, rgba(211, 211, 211, 0.02) 100.002%),linear-gradient(45deg, rgba(223, 223, 223, 0.02) 0%, rgba(223, 223, 223, 0.02) 14.286%,rgba(70, 70, 70, 0.02) 14.286%, rgba(70, 70, 70, 0.02) 28.572%,rgba(109, 109, 109, 0.02) 28.572%, rgba(109, 109, 109, 0.02) 42.858%,rgba(19, 19, 19, 0.02) 42.858%, rgba(19, 19, 19, 0.02) 57.144%,rgba(180, 180, 180, 0.02) 57.144%, rgba(180, 180, 180, 0.02) 71.42999999999999%,rgba(63, 63, 63, 0.02) 71.43%, rgba(63, 63, 63, 0.02) 85.71600000000001%,rgba(87, 87, 87, 0.02) 85.716%, rgba(87, 87, 87, 0.02) 100.002%),linear-gradient(337deg, rgba(142, 142, 142, 0.02) 0%, rgba(142, 142, 142, 0.02) 20%,rgba(164, 164, 164, 0.02) 20%, rgba(164, 164, 164, 0.02) 40%,rgba(203, 203, 203, 0.02) 40%, rgba(203, 203, 203, 0.02) 60%,rgba(228, 228, 228, 0.02) 60%, rgba(228, 228, 228, 0.02) 80%,rgba(54, 54, 54, 0.02) 80%, rgba(54, 54, 54, 0.02) 100%),linear-gradient(314deg, rgba(187, 187, 187, 0.02) 0%, rgba(187, 187, 187, 0.02) 12.5%,rgba(170, 170, 170, 0.02) 12.5%, rgba(170, 170, 170, 0.02) 25%,rgba(214, 214, 214, 0.02) 25%, rgba(214, 214, 214, 0.02) 37.5%,rgba(187, 187, 187, 0.02) 37.5%, rgba(187, 187, 187, 0.02) 50%,rgba(190, 190, 190, 0.02) 50%, rgba(190, 190, 190, 0.02) 62.5%,rgba(6, 6, 6, 0.02) 62.5%, rgba(6, 6, 6, 0.02) 75%,rgba(206, 206, 206, 0.02) 75%, rgba(206, 206, 206, 0.02) 87.5%,rgba(171, 171, 171, 0.02) 87.5%, rgba(171, 171, 171, 0.02) 100%),linear-gradient(300deg, rgba(243, 243, 243, 0.01) 0%, rgba(243, 243, 243, 0.01) 12.5%,rgba(209, 209, 209, 0.01) 12.5%, rgba(209, 209, 209, 0.01) 25%,rgba(179, 179, 179, 0.01) 25%, rgba(179, 179, 179, 0.01) 37.5%,rgba(3, 3, 3, 0.01) 37.5%, rgba(3, 3, 3, 0.01) 50%,rgba(211, 211, 211, 0.01) 50%, rgba(211, 211, 211, 0.01) 62.5%,rgba(151, 151, 151, 0.01) 62.5%, rgba(151, 151, 151, 0.01) 75%,rgba(16, 16, 16, 0.01) 75%, rgba(16, 16, 16, 0.01) 87.5%,rgba(242, 242, 242, 0.01) 87.5%, rgba(242, 242, 242, 0.01) 100%),linear-gradient(6deg, rgba(31, 31, 31, 0.02) 0%, rgba(31, 31, 31, 0.02) 20%,rgba(193, 193, 193, 0.02) 20%, rgba(193, 193, 193, 0.02) 40%,rgba(139, 139, 139, 0.02) 40%, rgba(139, 139, 139, 0.02) 60%,rgba(14, 14, 14, 0.02) 60%, rgba(14, 14, 14, 0.02) 80%,rgba(122, 122, 122, 0.02) 80%, rgba(122, 122, 122, 0.02) 100%),linear-gradient(279deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(160, 160, 160, 0.02) 14.286%, rgba(160, 160, 160, 0.02) 28.572%,rgba(23, 23, 23, 0.02) 28.572%, rgba(23, 23, 23, 0.02) 42.858%,rgba(60, 60, 60, 0.02) 42.858%, rgba(60, 60, 60, 0.02) 57.144%,rgba(149, 149, 149, 0.02) 57.144%, rgba(149, 149, 149, 0.02) 71.42999999999999%,rgba(4, 4, 4, 0.02) 71.43%, rgba(4, 4, 4, 0.02) 85.71600000000001%,rgba(50, 50, 50, 0.02) 85.716%, rgba(50, 50, 50, 0.02) 100.002%),linear-gradient(109deg, rgba(124, 124, 124, 0.03) 0%, rgba(124, 124, 124, 0.03) 12.5%,rgba(61, 61, 61, 0.03) 12.5%, rgba(61, 61, 61, 0.03) 25%,rgba(187, 187, 187, 0.03) 25%, rgba(187, 187, 187, 0.03) 37.5%,rgba(207, 207, 207, 0.03) 37.5%, rgba(207, 207, 207, 0.03) 50%,rgba(206, 206, 206, 0.03) 50%, rgba(206, 206, 206, 0.03) 62.5%,rgba(118, 118, 118, 0.03) 62.5%, rgba(118, 118, 118, 0.03) 75%,rgba(89, 89, 89, 0.03) 75%, rgba(89, 89, 89, 0.03) 87.5%,rgba(96, 96, 96, 0.03) 87.5%, rgba(96, 96, 96, 0.03) 100%),linear-gradient(329deg, rgba(35, 35, 35, 0.02) 0%, rgba(35, 35, 35, 0.02) 20%,rgba(246, 246, 246, 0.02) 20%, rgba(246, 246, 246, 0.02) 40%,rgba(118, 118, 118, 0.02) 40%, rgba(118, 118, 118, 0.02) 60%,rgba(245, 245, 245, 0.02) 60%, rgba(245, 245, 245, 0.02) 80%,rgba(140, 140, 140, 0.02) 80%, rgba(140, 140, 140, 0.02) 100%),linear-gradient(90deg, hsl(314,0%,31%),hsl(314,0%,31%));        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
       
    }
    header {
        background-color: #333;
        color: #EE005F;
        padding: 1px;
        text-align: center;
    }
    h1{
        font-size: 55px;
        font-family: sami1;
        margin: 0px;

    }
    .cart-container {
        padding: 2rem;
        margin: 2rem auto;
        width: 90%;
        max-width: 800px;
        background-color: #fff;
        border-radius: 5px;
    }
    
    #cart-table {
        width: 100%;
        border-collapse: collapse;
    }
    th,h2{
        color: #EE005F;
    }
    
    th, td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    .cart-summary {
        padding: 2rem;
        margin: 2rem auto;
        width: 90%;
        max-width: 800px;
        background-color: #fff;
        border-radius: 5px;
    }
    
    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
    }
    
    #checkout-button {
        background-color: #4CAF50;
        color: #fff;
        padding: 1rem 2rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }
    
    /* Responsive Styling */
    @media (max-width: 768px) {
        .cart-container, .cart-summary {
            width: 100%;
        }
    
        #cart-table th, #cart-table td {
            font-size: 14px;
        }
    }
    .quan{
        text-align:center;
        padding-right:50px;
    }
    .pr,.sub{
            font-family: sami7;
            color:#EE005F   ;
    }
    #total ,#subtotal,#Taxes{
        color:#EE005F   ;
        font-family: sami8;
    }
    span:first-child{
        font-family: sami7;
    }
    button{
        border:2px solid #EE005F;
        border-radius:5px;
        background-color: aliceblue;

    }
    </style>
</head>
<body>
    <header>
        <h1>Your Cart</h1>
    </header>
    <main>
        <section class="cart-container">
            <table id="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php      
                    $cartId=$_SESSION['cart'];
                    $query = "SELECT ci.*, p.product_name, p.price 
                              FROM cart_items ci 
                              INNER JOIN products p ON ci.product_id = p.product_id
                              WHERE ci.cart_id = $cartId";
                    $result = $conn->query($query);
                    $subTotal=0;
                    $taxes=0;
                    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".($row['product_name'])."</td>";
                            echo "<td class='pr'>$" . number_format($row['price'], 2) . "</td>";
                            echo "<td class='quan'>".($row['quantity'])."</td>";
                            echo "<td class='sub'>$".($row['price']*$row['quantity'])."</td>";
                            $subTotal+=($row['price']*$row['quantity']);
                            $taxes+=($row['price']*$row['quantity']*0.087);
                            // echo "<td><button onclick=\"removeCartItem(".$row['cart_item_id'].")\">Remove</button></td>";
                            echo "<td>
                                    <form method='post' action='remove_cart_item.php'>
                                      <input type='hidden' name='cart_item_id' value='".$row['cart_item_id']."'>
                                      <button type='submit'>Remove</button>
                                    </form>
                                 </td>";

                            echo "</tr>";    
                        }
                    } else {
                        echo "<tr><td colspan='5'>Your cart is still empty</td></tr>";
                    }

                   
                   echo"             </tbody>";
                   echo"         </table>";
                   echo"    </section>";
                   echo"    <section class='cart-summary'>";
                   echo"        <h2>Cart Summary</h2>";
  

 
                   echo "<div class='summary-item'>";
                   echo "<span>Subtotal:</span>";
                   echo "<span id='subtotal'>$$subTotal</span>";
                   echo "</div>";

                   echo "<div class='summary-item'>";
                   echo"<span>Taxes:</span>";
                   echo"<span id='Taxes'>$".number_format($taxes, 2)."</span>";
                   echo "</div>";

                   echo"<div class='summary-item'>";
                   echo"<span>Total:</span>";
                   echo"<span id='total'>$".number_format($subTotal+$taxes, 2)."</span>";
                   echo "</div>";
                   $_SESSION['total_amount']=$subTotal+$taxes;

                
                   

            ?>
            <form action="checkout.php" method="get">
                <input  id="checkout-button" type="submit" value="Checkout">
            </form>
        </section>
    </main>
<script>
    function removeCartItem(cartItemId) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "removeCartItem.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var removedItemRow = document.getElementById("cart-item-" + cartItemId);
                if (removedItemRow) {
                    removedItemRow.remove();
                }
                recalculateCartSummary();
            }
        };
        xhr.send("cart_item_id=" + cartItemId);
    }

    </script>
</body>
</html>