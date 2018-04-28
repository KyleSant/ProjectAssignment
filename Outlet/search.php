<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/search.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
   <!-- options -->
   
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
        $name = $_POST['name'];
        $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
        $query = "SELECT * FROM products WHERE Product_Name like '%$name%'";
        $result = mysqli_query($conn, $query);

        if($result->num_rows > 0){
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
          echo "<p class='showResult'>...No results found with that specific entry!</p>";
          echo "<p class='showSecond'>Please try another keyword... </p>";
      }
     ?>
  </div>
  
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>