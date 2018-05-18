<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/cart.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
   <!-- options -->
   
    <div class="options">
       <a href="help.php">
        <img src="images/faq.png" class="option1" height="32">
        </a>
        <img src="images/basket.png" class="option2" height="45">
        <a href="gallery.php">
            <img src="images/screenshot.png" class="option3" height="32">
        </a>
        <a href="#myModal" class="nav-link trigger-btn" data-toggle="modal">
            <?php if(isset($_SESSION['username'])): ?>
              <a class="link" href="logout.php" style="text-decoration:none"><strong>Logout</strong></a>
            <?php else: ?>
              <img src="images/user.png" class="option4" height="32">
            <?php endif; ?>
        </a>
        
        <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">				
                            <h4 class="modal-title">Member Login</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" name="username" placeholder="Username" id="username" required="required">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password" required="required">					
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-block btn-lg" value="Login">
                            </div>
                            </form>
                            <hr/>
                            <form action="register.php">
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-lg" value="Register">
                            </div>
                        </form>				

                    </div>
                    <div class="modal-footer">
                        <a href="forgetPassword.php">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
   <!-- navigation bar -->
   
    <header>
    <div class="navigation">
      <img src="images/logo.jpg" height="60">

      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <!-- shopping cart content -->
     <div class="container">
      <table id="shopping-cart">
          <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Delete</th>
          </tr>
          <?php
          if (isset($_SESSION['userId'])){
            $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to DB");
            $query = "SELECT products.Product_Id, products.Product_Name, products.Price FROM products INNER JOIN shopping_carts ON products.Product_Id = shopping_carts.Product WHERE shopping_carts.Client='".$_SESSION['userId']."'";
          
            $result = mysqli_query($conn, $query);
            
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>$row[Product_Id]</td>
                        <td>$row[Product_Name]</td>
                        <td>€$row[Price]</td>
                        <td><button type='button' class='cartRemove'><a href='http://localhost:80/outlet/removeitem.php?id=$row[Product_Id]'>Remove</a></button>
                       </tr>";
            }}
          ?>
      </table>
      <div id="paypal-button" style="margin-left:72%; margin-top: 3%;"></div>
      <div id="paypal-success" style="margin-left:73%; color:green;"></div>
      <script>

      paypal.Button.render({

        env: 'sandbox', // Or 'sandbox'
          
          style: {
        color: 'black',
        size: 'small'
      },

        client: {
            sandbox:    'AcWveMWEfBMxRYMW4BazgDPzUXEZf9aP0MgY1ek7JTI-l4cC6SiVNYhLsdmXGlCp9_JyWIo2Eafr94EJ',
            production: 'AcWveMWEfBMxRYMW4BazgDPzUXEZf9aP0MgY1ek7JTI-l4cC6SiVNYhLsdmXGlCp9_JyWIo2Eafr94EJ'
        },

        commit: true, // Show a 'Pay Now' button

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '1.00', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {
               
                document.getElementById('paypal-success').innerHTML="Payment Successful";
                
                window.location.replace("paypalConfirm.php");
                
            });
        }

    }, '#paypal-button');
          
    </script>
      </div>
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</body>
</html>