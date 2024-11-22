<!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DART | Checkout</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="icon" href="../Images/Logos/L2.png">


        <style>
            @font-face {
            font-family: sami1;
            src: url(../Fonts/Merienda-VariableFont_wght.ttf);
        }
        body{
            background-image: linear-gradient(135deg, rgba(159, 159, 159, 0.46) 0%, rgba(159, 159, 159, 0.46) 14.286%,rgba(165, 165, 165, 0.46) 14.286%, rgba(165, 165, 165, 0.46) 28.572%,rgba(171, 171, 171, 0.46) 28.572%, rgba(171, 171, 171, 0.46) 42.858%,rgba(178, 178, 178, 0.46) 42.858%, rgba(178, 178, 178, 0.46) 57.144%,rgba(184, 184, 184, 0.46) 57.144%, rgba(184, 184, 184, 0.46) 71.43%,rgba(190, 190, 190, 0.46) 71.43%, rgba(190, 190, 190, 0.46) 85.716%,rgba(196, 196, 196, 0.46) 85.716%, rgba(196, 196, 196, 0.46) 100.002%),linear-gradient(45deg, rgb(252, 252, 252) 0%, rgb(252, 252, 252) 14.286%,rgb(246, 246, 246) 14.286%, rgb(246, 246, 246) 28.572%,rgb(241, 241, 241) 28.572%, rgb(241, 241, 241) 42.858%,rgb(235, 235, 235) 42.858%, rgb(235, 235, 235) 57.144%,rgb(229, 229, 229) 57.144%, rgb(229, 229, 229) 71.43%,rgb(224, 224, 224) 71.43%, rgb(224, 224, 224) 85.716%,rgb(218, 218, 218) 85.716%, rgb(218, 218, 218) 100.002%);        }
        a{
            color: #EE005F;
            text-decoration: none;

        }
        a:focus{
            color: blue;
        }
          
            body {
                font-family: sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
                
            }
            h2{
                font-size: 40px;
                color: #EE005F;
                font-family: sami1;
            }
           

            .container {
                max-width: 1100px;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 30px;
            }

            .checkout-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }

            .checkout-header h2 {
                margin: 0;
            }

            .checkout-steps {
                display: flex;
                justify-content:space-around;
                align-items: center;
                margin-bottom: 20px;
            }

            .step {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .step-icon {
                font-size: 20px;
                color: #666;
            }

            .step-text {
                font-size: 16px;
                color: #333;
            }

            .checkout-form {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .form-group {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .form-group label {
                font-weight: bold;
            }

            .form-control {
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .form-control:focus {
                outline: none;
                border-color: #007bff;
            }

            .checkout-buttons {
                display: flex;
                gap: 10px;
                justify-content: flex-end;
            }

            .btn {
                padding: 10px 20px;
                background-color: #EE005F;
                color: #fff;
                border: none;
                border-radius: 50px;
            }

            .btn:hover {
                background-color: #0069d9;
            }

            .order-summary {
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 4px;
            }

            .order-summary h3 {
                margin-top: 0;
            }

            .order-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
            }

            .order-item-name {
                font-weight: bold;
            }

            .order-item-price {
                font-weight: bold;
            }

            .total-price {
                font-size: 18px;
                font-weight: bold;
                margin-top: 20px;
            }

            /* Responsive Styles */
            @media (max-width: 768px) {
                .container {
                    padding: 10px;
                    margin:50px
                }

                .checkout-header {
                    flex-direction: column;
                }

                .checkout-steps {
                    flex-direction: column;
                    gap: 10px;
                }

                .checkout-form {
                    flex-direction: column;
                }

                .checkout-buttons {
                    flex-direction: column;
                    gap: 5px;
                }

                .order-summary {
                    margin-top: 20px;
                }
                 
            }
            
        
        </style>
    </head>
    <body>
        <div class="container">
            <div class="checkout-header">
                <h2>Checkout</h2>
            </div>
            <div class="checkout-steps">
            <span class="step-text"><a href="http://localhost/Project/php/cart.php">Shopping Cart</a></span>
                    <span class="step-text"><a href="#payment-method">Payment</a></span>
                    <span class="step-text"><a href="#order">Order Summary</a></span>
            </div> 
        <form method="post" action="confirmation.php">
            <div class="checkout-form">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone"   class="form-control" placeholder="Enter your phone number" required>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <select name="countries" name="countries" id="countries" class="form-control" required>
                        <option value="city" disabled selected>city</option>
                        <option value="iraq">iraq</option>
                        <option value="argentina">Argentina</option>
                        <option value="australia">Australia</option>
                        <option value="brazil">Brazil</option>
                        <option value="canada">Canada</option>
                        <option value="china">China</option>
                        <option value="egypt">Egypt</option>
                        <option value="france">France</option>
                        <option value="germany">Germany</option>
                        <option value="india">India</option>
                        <option value="jordan">jordan</option>
                        <option value="iran">Iran</option>
                        <option value="italy">Italy</option>
                        <option value="japan">Japan</option>
                        <option value="kenya">Kenya</option>
                        <option value="mexico">Mexico</option>
                        <option value="netherlands">Netherlands</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="russia">Russia</option>
                        <option value="saudi-arabia">Saudi Arabia</option>
                        <option value="south-africa">South Africa</option>
                        <option value="south-korea">South Korea</option>
                        <option value="spain">Spain</option>
                        <option value="united-states">United States</option>
                        <option value="sweden">Sweden</option>
                        <option value="switzerland">Switzerland</option>
                        <option value="thailand">Thailand</option>
                        <option value="turkey">Turkey</option>
                        <option value="united-kingdom">United Kingdom</option>
                        <option value="vietnam">Vietnam</option>
                    </select>         
                </div>
                
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" name="state" id="state" class="form-control" placeholder="Enter your state" required>
                </div>
                
                <div class="form-group">
                    <label for="shipping-method">Shipping Method:</label>
                    <select id="shipping-method" class="form-control" name="shipping-method" required>
                      <option value="" selected disabled >Select a shipping method</option>
                      <option value="standard (5-7 business days)">Standard (5-7 business days)</option>
                      <option value="express (2-3 business days)">Express (2-3 business days)</option>
                      <option value="overnight (1 business day)">Overnight (1 business day)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Voucher"> Voucher Code</label>
                    <input type="text" name="Voucher" id="Voucher" class="form-control" placeholder="Enter your voucher code">
                </div>
                <div class="form-group">
                    <label for="payment-method"> Payment Method</label>
                    <select name="payment-method" id="payment-method" class="form-control">
                        <option value="def" selected disabled>Select a Payment Method</option>
                        <option value="credit-card">Credit Card</option>
                        <option value="debit-card">Debit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank-transfer">Bank Transfer</option>
                        <option value="apple-pay">Apple Pay</option>
                        <option value="google-pay">Google Pay</option>
                        <option value="cash-on-delivery">Cash on Delivery</option>
                    </select>
                </div>
                <div class="payment-info" >
                    <h2>Payment Information</h2>
                      <label for="card-number">Card Number:</label>
                      <input type="text" id="card-number" name="card-number" required  class="form-control">
              
                      <label for="expiration-date"style="margin-left: 40px;">Expiration Date:</label>
                        <select id="expiration-month" name="expiration-month" class="form-control" required>
                            <option value="" disabled selected>Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select id="expiration-year" name="expiration-year" class="form-control" required>
                            <option value="" disabled selected>Year</option>
                            <?php 
                                $current_year = date("Y");
                                for ($i = $current_year; $i <= $current_year + 8; $i++) {
                                    echo "<option value=$i>$i</option>";
                                }
                            ?>
                        </select>
                      <label for="cvv" style="margin-left: 40px;">CVV:</label>
                      <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="_ _ _" required class="form-control" style="width: 30px;">
                  </div>


                <div style="width: 500px;">
                   <span style="color: #EE005F;" id="don"> Do you want to donate for the children of Gaza ?</span> <br>
                    <input type="radio" class="form-control" id="yes" name="donation" value="yes">
                    <label for="yes">Yes </label>
                    <input type="radio" class="form-control" id="no" name="donation" value="no">
                    <label for="no">No</label>
                </div>


                <div class="form-group" style="width: 330px;">
                    <label for="Donate"> Donate for the children of Gaza <span style="color: #666;">(in Dollar $) </span></label>
                    <input type="number" name="Donate" id="Donate" class="form-control" placeholder="Enter your Donation value" min="5"  >
                </div>
                
            
                <div class="checkout-buttons">
                    <input type="submit" class="btn" value="Checkout">
                </div> 
            </div>
        </form>
     </div>
</body>
    <script>
   $(document).ready(function(){
    $('#Donate').prop('disabled', true);    
    $('input[name="donation"]').change(function(){
        if($(this).val() === 'yes') {
            $('#Donate').prop('disabled', false);
        } else {
            $('#Donate').prop('disabled', true);
        }
    });

    $('.payment-info').hide();

    $('#payment-method').change(function(){
        var selected = $(this).val();
        if(selected !== 'cash-on-delivery' && selected !== 'bank-transfer' && selected !== 'def') {
            $('.payment-info').show();
            $('#card-number, #expiration-month, #expiration-year, #cvv').prop('required', true);
        } else {
            $('.payment-info').hide();
            $('#card-number, #expiration-month, #expiration-year, #cvv').prop('required', false);
        }
    });

});

    </script>
    </html>