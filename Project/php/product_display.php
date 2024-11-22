<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Display</title>
  <link rel="icon" href="../Images/Logos/L4.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <style><?php include "../CSS/style.css" ?></style>
  <style>
    body {
      background: linear-gradient(to right, #1e344e, #121a2a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .product-card {
      margin-top: 50px;
    }
    .product-image {
      max-width: 100%;
      height: auto;
      margin-top: 3em;
      margin-left: 10px;
      border: 5px solid #3f7db8;
      outline: 5px solid white;
      box-shadow: 9px 12px 20px 5px #3f7db8;
      padding: 10px;
    }
    .product-details {
      text-align: left;
      margin-top: 60pt;
      margin-left: 30px;
      margin-right: 30px;
    }
    .product-price {
      font-size: 2em;
      color: #FFD700;
      margin-top: 10px;
      font-style:italic;
    }
    .product-description {
      margin-top: 20px;
      text-align: justify;
      font-size:20px;
      font-family:sami8;
      letter-spacing:0.9px;
    }
    * {
      color: #FAFFD8;
    }
    h1{
        text-align: center;
        font-family:sami8;
        font-size:70px;
    }
    .img{
        text-align:center;          
    }
    img{
        width: 500px;
    }
    @media screen and (max-width: 600px) {
      .product-image {
        width: 250px;
      }
      h1{
        font-size:50px;
      }
      .product-price {
      font-size: 1.8em;
    }
    .product-description {
      font-size:18px;
    }
}
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center product-card">
      <?php
      include_once "connectToDB.php";

      if (isset($_GET['product_id'])) {
        $product_id = intval($_GET['product_id']);

        $sql = "SELECT product_name, long_description, price, image FROM products WHERE product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $product_name = ($row['product_name']);
          $long_description = ($row['long_description']);
          $price = ($row['price']);
          $image = base64_encode($row['image']);
        } else {
          echo "<p>Product not found.</p>";
          exit();
        }
      } else {
        echo "<p>No product specified.</p>";
        exit();
      }
      ?>
          <h1><?php echo $product_name; ?></h1>
      <div class="img col-md-4 col-sm-6 col-2">
        <img src="data:image/jpeg;base64,<?php echo $image; ?>" class="product-image" alt="Product Image">
      </div>
      <div class="col-md-6 col-sm-6 col-12">
        <div class="product-details">
          <p class="product-price">Price: $<?php echo $price; ?></p>
          <p class="product-description"><?php echo $long_description; ?></p>
        </div>
      </div>
    </div>
  </div>
  <div style="margin-bottom: 90pt;"></div>
</body>
</html>
