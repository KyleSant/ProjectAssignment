<?php
    $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to DB");
    $id = $_GET['id'];
    $query = "Delete from products where Product_Id = '$id'";
    $result =  mysqli_query($conn, $query) or die('Error in query');
?>