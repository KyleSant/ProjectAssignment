<!DOCTYPE html>

<?php
    session_start();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/shop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">	
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <!-- options -->
  
   <div class="options">
        <a href="help.php">
        <img src="images/faq.png" class="option1" height="32">
       </a>
        
        <?php if(isset($_SESSION['username'])): ?>
           <a href="cart.php">
            <img src="images/basket.png" class="option2" height="45">
           </a>
          <?php else: ?>
             <img src="images/basket.png" class="option2" onclick="message()" height="45">
          <?php endif; ?>
          
        <script>
            function message(){
                swal("Notice", "You need to login to access the shopping-cart!", "error");
            }
        </script>
        
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
      <img src="images/logo.png" height="60">

      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <!-- categories -->
    
    <div class="menu-wrap">
        <div class="menu">
        <ul class="clearfix">
        <li><a href="shop.php">All</a></li>
        <li>
        <a href="#">Gaming periphals <span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
            <li><a href="mice.php">Mice</a></li>
            <li><a href="headset.php">Headsets/Mic</a></li>
            <li><a href="keyboard.php">Keyboards</a></li>
            <li><a href="monitor.php">Monitors</a></li>
            </ul>
            </li>
        <li><a href="laptop.php">Laptops</a></li>
        <li><a href="gchair.php">Gaming chairs</a></li>
        </ul>
        </div>
    </div>
  
  
  <!-- products section -->
  <div class="products">
     <form method="post" action="search.php">
      <input type="text" name="name" id="search" placeholder="Search...">
      <img class="searchImage" src="images/search.png">
      <div class="clear"></div>
      </form>
      <div class="filterProducts">
       <h2>Brand: </h2>
        <form method="post" action="filter.php">
            <div class="radio">
              <label><input type="radio" name="brandRadio" value="1" checked>ZOWIE</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio" value="2">RAZER</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio" value="3">CORSAIR</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio" value="4">LOGITECH</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio" value="5">RED</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio" value="6">ROCCAT</label>
            </div>
          <h2>Price: </h2>
            <div class="radio">
              <label><input type="radio" name="priceRadio" value="25">Less than 25</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="priceRadio" value="50">Less than 50</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="priceRadio" value="100" checked>Less than 100</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="priceRadio" value="300">Less than 300</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="priceRadio" value="500">Less than 500</label>
            </div>
            <input type="submit" name="filterProduct" value="Filter" id="filter">
       </form>
      </div>
     
        <?php
      if(isset($_POST['filterProduct'])){
        $brand = $_POST['brandRadio'];
        $price = $_POST['priceRadio'];

        $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
        $query = "SELECT * from products WHERE Brand='$brand' AND Price<'$price'";
        $result = mysqli_query($conn, $query);
        
        if($result){
    
            
        while ($row = mysqli_fetch_row($result)){
            echo "<div class='product'> 
                    <img class='image' src='$row[5]'>
                    <hr>
                    <h1>$row[1]</h1>
                    <p>$row[4]</p>
                    <a class='selectPrice'>Price: €$row[2]</a>
                    <br><br>
                    <a class='selectStock'>$row[3]</a>
                    <br>
                   <button type='button' name='addCart'><a href='http://localhost:80/outlet/addcart.php?id=$row[0]'>Add to Cart</a></button>
                  </div>";
            }
          
        }
          else{
              echo "Error in".mysqli_error($conn);
          }
    }
    ?>
  </div>
   

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
