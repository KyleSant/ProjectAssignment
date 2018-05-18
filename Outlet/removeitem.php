<?php
    $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
    $id = $_GET['id'];
    $query = "Delete from shopping_carts where Product = '$id'";

    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Item removed');
            window.location.href='cart.php';</script>";
    }
    else{
         echo "Error: ".mysqli_error($conn);
    }
?>