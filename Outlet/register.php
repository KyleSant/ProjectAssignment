<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/register.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
   <!-- options -->
   
    <div class="options">
        <img src="images/faq.png" class="option1" height="32">
        <img src="images/basket.png" class="option2" height="45">
        <a href="gallery.php">
            <img src="images/screenshot.png" class="option3" height="32">
        </a>
            <?php if(isset($_SESSION['username'])): ?>
              <a class="link" href="logout.php" style="text-decoration:none"><strong>Logout</strong></a>
            <?php else: ?>
              <img src="images/user.png" class="option4" height="32">
            <?php endif; ?>
     
        
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
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <!-- Registration form -->
  <form method="post" action="registration.php">
      <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="firstname"><b>First_Name: </b></label>
        <input type="text" placeholder="Enter first name" name="firstname" required>

        <label for="lastname"><b>Last_Name: </b></label>
        <input type="text" placeholder="Enter last name" name="lastname" required>
        
        <label for="password"><b>Password: </b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        
        <label for="email"><b>Email: </b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="phone"><b>Phone No:</b></label>
        <input type="text" placeholder="Enter phone number" name="phone" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn" name="submit">Register</button>
      </div>
      <div class="container signin">
        <p>Already have an account? <a href="#myModal" class="nav-link trigger-btn" data-toggle="modal">Sign in</a>.</p>
      </div>
  </form>
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</body>
</html>