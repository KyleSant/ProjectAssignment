<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/contactus.css" rel="stylesheet" type="text/css">
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
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
   
   <!-- Top section -->
   
    <div class="announcement">
        <h2 class="headerTitle"><strong>Contact Us</strong></h2>
    </div>
    
    <!-- Container -->
      
       <div class="container">
            <h2>Enter your details to submit a support ticket: </h2>
            <form method="post" action="send.php">
                <div class="form-group row">
                    <label for="name" class="col-sm-2">Name:</label>
                    <input type="text" id="name" name="name" class="form-control col-sm-10"/>
                </div>
                   
                <div class="form-group row">
                    <label for="title" class="col-sm-2">Title:</label>
                    <input type="text" id="title" name="title" class="form-control col-sm-10"/>
                </div> 
                
                <div class="form-group row">
                    <label for="email" class="col-sm-2">Email:</label>
                    <input type="email" id="email" name="email" class="form-control col-sm-10"/>
                </div>
                
                <div class="form-group row">
                    <label for="comments" class="col-sm-2">Description:</label>
                    <textarea type="text" id="comments"  name="comments" class="form-control col-sm-10"></textarea>
                </div>
                
                <!--buttons-->
                
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                    <input type="reset" value="Cancel" class="btn btn-default"/>
                </div>
                
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
            <p>Copyright © 2018 Outlet Media Ventures Inc. All Rights Reserved. Certain content reproduced under license.    Privacy Policy •   Terms of Use  •  AdChoices </p>
        </div>
    </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
   </html>