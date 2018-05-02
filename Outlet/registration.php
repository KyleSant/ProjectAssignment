<?php
    if (isset($_POST['submit'])){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    

    $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
    $query = "INSERT into clients (First_Name, Last_Name, Password, Email, Phone_Number)
              VALUES ('$firstname','$lastname','$password','$email','$phone')";
    $result = mysqli_query($conn, $query);
        
    if($result) { 
            echo "<script>alert('Registration successful');
                window.location.href='index.php';</script>";
    }
    else{
         echo "<script>alert('Error, try again...');
           window.location.href='register.php';</script>";
    }
 }
?>