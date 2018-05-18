<?php
    session_start();
?>
  
<?php
  if(isset($_SESSION['userId'])){
    $clientId = $_SESSION['userId'];
    $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
    $id = $_GET['id'];
        
    $query = "INSERT INTO shopping_carts(Product, Client)
              VALUES ('$id','$clientId')";
    
    
        if(mysqli_query($conn, $query)) {
            echo "<script>alert('Item added!');
                window.location.href='shop.php';</script>";
            }
            else{
                echo "<script>alert('Cannot add the same product!');
                window.location.href='shop.php';</script>";
            }

    }else{
         echo "<script>alert('You need to login to purchase products!');
            window.location.href='shop.php';</script>";
    }
?>