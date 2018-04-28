<!DOCTYPE html>
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
   <div class="options">
        <img src="images/faq.png" class="option1" height="32">
        <img src="images/basket.png" class="option2" height="45">
        <img src="images/screenshot.png" class="option3" height="32">
        <img src="images/user.png" class="option4" height="32">
    </div>
    
   <!-- navigation bar -->
   
    <header>
    <div class="navigation">
      <img src="images/logo.jpg" height="60">

      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <!-- categories -->
    
    <div class="menu-wrap">
        <div class="menu">
        <ul class="clearfix">
        <li>
        <a href="#">Gaming periphals <span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
            <li><a href="#">Mice</a></li>
            <li><a href="#">Headsets/Mic</a></li>
            <li><a href="#">Keyboards</a></li>
            <li><a href="#">Mouse mats</a></li>
            </ul>
            </li>
        <li><a href="#">Laptops</a></li>
        <li><a href="#">Gaming chairs</a></li>
        </ul>
        </div>
    </div>
  
  
  <!-- products section -->
  <div class="products">
     <form method="post" action="search.php">
      <input type="text" name="name" id="search" placeholder="Search...">
      <img class="searchImage" src="images/search.png">
      <div class="clear"></div>
      <div class="filterProducts">
            
      </div>
     </form>
      <?php
    
        $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
        $query = "SELECT * from products";
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
     ?>
  </div>
   

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>