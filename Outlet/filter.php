
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
                        <a href="#">Forgot Password?</a>
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
        <li><a href="#">All</a></li>
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
              <label><input type="radio" name="brandRadio">ZOWIE</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio">RAZER</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio">CORSAIR</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio">LOGITECH</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio">RED</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="brandRadio">ROCCAT</label>
            </div>
          <h2>Price: </h2>
            <div class="radio">
              <label><input type="radio" name="priceRadio">25</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="priceRadio">100</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="priceRadio">150</label>
            </div>
            <input type="submit" name="filterProduct" value="Filter" id="filter">
       </form>
      </div>
     
        <?php
      if(isset($_POST['filterProduct'])){
        $brand = $_POST['brandRadio'];
        $price = $_POST['priceRadio'];
        
        $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
        $query = "SELECT * from products where Brand='$brand' AND Price='$price'";
        $result = mysqli_query($conn, $query);
    

        while ($row = mysqli_fetch_assoc($result)){
            echo "<div class='product'> 
                    <img class='image' src='$row[Image]'>
                    <hr>
                    <h1>$row[Product_Name]</h1>
                    <p>$row[Description]</p>
                    <a class='selectPrice'>Price: €$row[Price]</a>
                    <br><br>
                    <a class='selectStock'>$row[Stock]</a>
                    <br>
                    <button>Add to Cart</button>
                  </div>";
        }
    }
      else{
          echo "Invalid submission";
      }
      ?>
  </div>
   

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
