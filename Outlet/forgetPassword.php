<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/forget.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
      <img src="images/logo.png" height="60">

      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <!-- Forget Password -->
  <div class="container">
      <p><strong>Are you sure you want to proceed with the following? If yes, request password and you will recieve an automated response within 3 hours maximum.</strong></p>
      <form method="post" action="forgetPassword.php">
          <label>Email: </label>
          <input type="email" name="email" id="textInput" placeholder="Enter your email">
          <br>
          <label>Password: </label>
          <input type="password" name="password" id="textInputTwo" placeholder="Enter your email password">
          <br>
          
          <?php
            if(isset($_POST['forgotPass'])){
                require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php');
                $conn = mysqli_connect("localhost","root","","outlet","3306");
                $email = $_POST['email'];
                $password = $_POST['password'];
                $query = "SELECT Password from clients where Email='$email'";
                $result = mysqli_query($conn, $query);

                $row = mysqli_fetch_row($result);
                $myresult = $row[0];
        
                if(empty($email) || empty($password)){
                    echo "<div class='alert alert-danger' role='alert'>Missing some fields, fill them in</div>";
                }else{
        
        
                $emailTo = $email;
                $mail = new PHPMailer(); #create a new instance
                $mail->isSMTP(); #using SMTP
                $mail->isHtml(true);
                $mail->Host = 'smtp.office365.com';
                #$mail->SMTPDebug = 2; #include client and server messges
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = $email;
                $mail->Password = $password;
                $mail->Body = "This is an automated message to reset your password, find the credentials below: <br>". "Password: ". $myresult;
                $mail->Subject = 'Request Password';
                $mail->From = $email; #sender
                $mail->AddAddress($email); #recepient
                $mail->smtpConnect(
                    array(
                        "ssl" => array(
                            "verify_peer" => false,
                            "verify_peer_name" => false,
                            "allow_self_signed" => true
                        )
                    )
                );


                if(!$mail->Send()){
                        echo "Message was not sent";
                        echo "Mailer Error: ". $mail->ErrorInfo;
                    }
                    else{
                        echo  "<script>alert('Password mail confirmation sent');
                            window.location.href='forgetPassword.php';</script>";
                    }
                }
        } 
        ?>
          
          <input type="submit" id="btn" name="forgotPass" value="Request Password">
      </form>
  </div>
  
    <!-- Footer -->
 
    <footer id="myFooter">
        <div class="information">
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-2">
                    <h5>Top eSports</h5>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">League of Legends</a></li>
                        <li><a href="#">Dota 2</a></li>
                        <li><a href="#">Counter-Strike:GO</a></li>
                        <li><a href="#">Overwatch</a></li>
                        <li><a href="#">Call of Duty</a></li>
                        <li><a href="#">Super Smash Bros.</a></li>
                        <li><a href="#">Street Fighter</a></li>
                        <li><a href="#">Hereos of the Storm</a></li>
                        <li><a href="#">Rainbow Six Siege</a></li>
                        <li><a href="#">Hearthstone</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Information</h5>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Writers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Live Tournaments</h5>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Riot Games</a></li>
                        <li><a href="#">PGL Rainbow Six</a></li>
                        <li><a href="#">ESL PUBG</a></li>
                        <li><a href="#">Dreamhack CSGO</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2018 Outlet Media Ventures Inc. All Rights Reserved. Certain content reproduced under license.    Privacy Policy  •   Terms of Use  •  AdChoices </p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</body>
</html>