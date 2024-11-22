  <!--DART : Digital Access to Remarkable Treasures-->
  <!DOCTYPE html>
  <html>
  <head>
      <title>DART</title>
      <link rel="icon" href="../Images/Logos/L1.ico">
      <link rel="stylesheet" href="../CSS/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <style>        
        
      .site-footer{
        background-image: url("../Images/backgrounds/white\ \(4\).jpg");
      }
      #webName{
        margin-bottom: 20px;
        margin-left: 20px;
      }
      #footer-logo{
        width: 80px;
        float: left;
        position: relative;
        left: 89em;
        bottom: 70px;
      }
      a button span{
        font-family: sami2;
        font-size: 20px;
      }
   
      .st1::before,.st2::before{
        background-color: #ddd;
        border-radius: 2px;
        content: "";
        height: 40%;
        left: 0;
        position: absolute;
        top: 50px;   
        transform: translateY(-50%);
        width: 4px;
        }
       .st2::before{
        top: 180px;          
        }
      .stat span{
        color: #FF8E3F;
        font-size: 40px;
      }
      #ex{
        font-size: 50px;
        color: #FF8E3F;
        padding-left: 0px;
        margin-left: 0px;
        padding-top: 35px;
      }
      .last{
        font-size: 12px;
        margin-left: 21px; 
        margin-right: 21px; 
        color: black;
      }
      @media screen and (max-width:1500px) {
       #logo{
        display:none;
       }      
      } 
      svg {
       width: 20px;
       height: 20px;
      }      
      .productImage {
         width: 400px; 
        height: 400px;
        margin-top:30px;
      	object-fit:contain;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius:6px;
      }
      .card {height: 100%;}
      .navbar {height: 65px;}      
      @media screen and (max-width:1000px){
          #webName{
               font-size: 25px;
               padding-left: 30px;
             }
           .wrapper ,#footer-logo, #global_header{
               display: none;            
           }
           h3,ul,p,li{
             text-align: center;
           }
          .navbar-nav {
          background-image: url("../Images/backgrounds/black\ \(1\).jpg"); 
          }
     }
       @media screen and (max-width:1300px){
      .productImage {
         width: 250px; 
        height: 250px; 
         }
      }
      @media screen and (max-width:600px){
         .productImage {
             width: 150px; 
             height: 150px;
          }
         .card {
             margin: 10px;
         }
         .add {
             font-size: 14px;
             padding: 10px 20px;
         }
      }
                
       .add {
        padding: 15px 25px;
        border: unset;
        border-radius: 15px;
        color: #212121;
        z-index: 0;
        background: #e8e8e8;
        position: relative;
        font-weight: 1000;
        font-size: 17px;
        box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
        transition: all 250ms;
        margin-left:30px;
        margin-right:30px;
        margin-bottom:20px;
       }

        .add::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         height: 100%;
         width: 0;
         border-radius: 15px;
         background-color: #EE005F;
         z-index: -1;
         transition: all 250ms
        }
        .add:hover {
         color: #e8e8e8;
        }
        .add:hover::before {
         width: 100%;
        }
        .card-footer{
          color: #EE005F;
          font-size: 18px;
          font-style:italic;
        }
        #dart{
          color: #EE005F;
          font-size: 35px;
          font-family: fantasy;
          letter-spacing:3px;
          font-style: italic;
        }
        li{margin-left:7px;}
        *{user-select: none;}
        .details{
          text-decoration:none;
        }
        h4{
	      color: #EE005F;
        }
        h4:active {
          color:black;
        }


   </style>        
</head>
<body>


    <div class="container-fluid" id="top">    

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top row">
      <div class="container-fluid">
        <div class="navbar-brand d-flex align-items-center" href="#">
        <a href="http://localhost/project/php/log_out.php"><img class="nav-link" src="../Images/others/log-out-svgrepo-com.svg" alt="log out" width="35px" style="margin: right 10px;px; padding:0px;" ></a>
        <img class="nav-link" src="../Images/others/line-xl-svgrepo-com.svg" alt="line" width="35px" style="margin:0px; padding:0px;" >  
        <span id="dart">DART</span>
        <img class="nav-link" src="../Images/others/line-xl-svgrepo-com.svg" alt="line" width="35px" style="margin:0px; padding:0px;" >  
        <a href="http://localhost/Project/php/cart.php"><img src="../Images/others/bas.webp" alt="Logo Image" width="40px" style="margin-right: 0px;"></a>
      </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="?type=0">All</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=1"> Chairs</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=2">Controllers</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=3">Headsets</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=4">Keyboards</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=5">Laptops</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=6">Video Games </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=7">Fans</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="?type=8">Printers</a>
             </li>
          </ul>
        </div>
      </div>
          </nav>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<div class="row"><div class="col"></div><div class="col" style="margin-top: 2.5em;"></div></div>      

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
<?php
include_once "connectToDB.php";

function display_images($conn, $productType) {
    $sql = "SELECT product_id, stock, product_name, description, price, image FROM products WHERE product_type = $productType";
    $sqlAll= "SELECT product_name, description, price, image FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row["stock"]>0){
   
            echo "
            <div class=\"col \">
                <div class='card text-center'>";  
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="' . ($row["product_name"]) . '" class=productImage >';
            echo " <div class=card-body>";
           
            echo "<a target='_blank' href='product_display.php?product_id=" . ($row["product_id"]) . "' class='details'><h4 class='card-title'>" . $row["product_name"] . "</h4></a>";

            echo " <p class=card-text>" . ($row["description"]) . "</p>
                      </div>";
                      echo "
                          <input type='hidden' name='product_id' value='" . $row["product_id"] . "'>
                          <p><button class='add' onclick='addToCart(" . $row["product_id"] . ")'>Add to cart</button></p>";
                      echo "<div class='card-footer bg-transparent border-success'> $". ($row["price"]) ."</div>
                  </div>
              </div> ";
         }
      }
    } 
    else {
      $resultAll= $conn->query($sqlAll);
        echo "No products found";
    }
}
function display_shuffled_images($conn) {
  $productTypes = range(1, 8);
  shuffle($productTypes);
    $allProducts = array();
  
  foreach ($productTypes as $productType) {
      $sql = "SELECT product_id,stock,product_name, description, price, image FROM products WHERE product_type = $productType";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) 
              $allProducts[] = $row;  
      }
  }
  
  shuffle($allProducts);
  foreach ($allProducts as $product) {
    if ($product["stock"]>0){
      echo "
      <div class=\"col\">
          <div class='card text-center'>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($product['image']) . '" alt="' . ($product["product_name"]) . '" class=productImage >';
      echo " <div class=card-body>";
      echo " <a target='_blank' href='product_display.php?product_id=" . ($product["product_id"]) . "' class='details'><h4 class='card-title'>" . $product["product_name"] . "</h4></a>";
      echo " <p class=card-text>" . ($product["description"]) . "</p>
                </div>";
                echo "
                    <input type='hidden' name='product_id' value='" . $product["product_id"] . "'>
                    <p><button class='add' onclick='addToCart(" . $product["product_id"] . ")'>Add to cart</button></p>";
                    
                echo "<div class='card-footer bg-transparent border-success'> $". ($product["price"]) ."</div>
            </div>
        </div> ";
     }
  }
}

if (isset($_GET['type']) && $_GET['type'] == 0) {
   display_shuffled_images($conn);
} elseif (isset($_GET['type'])) {
     $productType = $_GET['type'];
     display_images($conn, $productType);
  }
 else 
     display_shuffled_images($conn);

?>


</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>



<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
              <div class="row"><div class="col"></div><div class="col" style="margin-top: 14em;"></div></div>      
                <div class="row" id="footer">
                  <footer class="site-footer col-12" >
                    <h1 id="webName" style="font-family: sami1;">Digital Access to Remarkable Treasures</h1>
                    <img src="../Images/Logos/L4.png" alt="logo" id="footer-logo">
                    <div class="footer-content">
                      <div class="footer-section about">
                          <h3>About Us</h3>
                          <p style="color: black;">Discover our story and mission.</p>
                          <ul class="footer-links">
                              <li><a href="../HTML/Story.html">Our Story</a></li>
                              <li><a href="../HTML/Team.html">Meet Our Team</a></li>
                           </ul>
                      </div>
                      <div class="footer-section links">
                          <h3>Quick Links</h3>
                          <ul class="footer-links">
                              <li><a href="#top" id="home-link">Home</a></li>
                              <li><a href="../HTML/FAQs.html">FAQs</a></li>
                          </ul>
                      </div>
                      <div class="footer-section paywith">
                        <h3 style="margin-bottom: 10px;">Pay With</h3>
                        <ul class="footer-links">
                           <img src="../Images/others/Screenshot 2024-05-03 232927.png" alt="Pay With" width="250spx" style="margin-top: 0px;" >
                        </ul>
                    </div>
                      <div class="footer-section contact">
                          <h3>Contact Us</h3>
                          <ul class="contact-info">
                              <li><span class="icon">&#9990;</span><a href="tel:+962 7 4594 2891">+962 7 4594 2891</a> </li>
                              <li><span class="icon">&#x2709;</span><a href="mailto:DART.11.4@gmail.com">DART.11.4@gmail.com</a></li> </li>
                          </ul>
                     </div>
                      <ul class="wrapper">
                        <li class="icon facebook">
                          <span class="tooltip">Facebook</span>
                          <a href="https://www.facebook.com/dart.90817"target="_blank"><img src="../Images/others/06-facebook-512.webp" alt="Facebook" width="40px"> </a>
                        </li>
                        <li class="icon twitter">
                          <span class="tooltip">X</span>
                          <a href="https://twitter.com/DART_11_4?s=08"target="_blank"> <img src="../Images/others/733635d.png" alt="twitter" width="32px"></a>
                        </li>
                        <li class="icon instagram">
                          <span class="tooltip">Instagram</span>
                          <a href="https://www.instagram.com/dart.11.4/" target="_blank"> <img src="../Images/others/1384031.png" alt="Instagram" width="30px"></a>
                        </li>
                      </ul>
                  </div>
                  <div class="footer-bottom" >
                      <p style="margin-bottom: 0px; padding-bottom: 0px;">&copy; 2024 DART All rights reserved.</p>
                      <a href="../HTML/privacyPolicy.html"><span class="last">Privacy policy</span></a>
                      <a href="../HTML/termsOfService.html"><span class="last">Terms of service</span></a>
                  </div>
              </footer>
            </div>
      </div>  
        <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="position: fixed; top: 10px; right: 10px; min-height: 200px;">
          <div class="toast " role="alert" aria-live="assertive" aria-atomic="true" id="productToast">
            <div class="toast-header bg-dark  ">
              <img src="../Images/Logos/L1.ico" class="rounded me-2" alt="DART Logo" width="20">
              <strong class="me-auto ">DART</strong>
              <small>Just now</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-light">
              Product added to cart!
            </div>
          </div>
        </div>

   </body>
   <script>
  function addToCart(productId) {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    cart.push(productId);
    sessionStorage.setItem('cart', JSON.stringify(cart));     

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "add_to_cart.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        if (xhr.responseText === "success") {
          showToast();
        } else {
          alert("Failed to add product to cart!");
        }
      }
    };
    xhr.send("product_id=" + productId);
  }

  function showToast() {
    let toastElement = document.getElementById('productToast');
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
    setTimeout(function() {toast.hide(); }, 1450);
  }




</script>

 </html>