<?php
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost','root','','outlet','3306') or die("Cannot connect to db");
    $query = "SELECT * from clients where Email = '$username' AND Password = '$password'" or die("Error in query");
    $result = mysqli_query($conn, $query);
   
    
    if(mysqli_num_rows($result) > 0 ){
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php');

        }
      else{
            echo "<script>alert('Wrong username/password combination');
            window.location.href='index.php';</script>";
      }
    
}
    
    
?>