<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/about.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <!-- options -->
  
   <div class="options">
       <a href="help.php">
        <img src="images/faq.png" class="option1" height="32">
       </a>
       
       <?php if(isset($_SESSION['username'])): ?>
           <a href="cart.php">
            <img src="images/basket.png" class="option2" height="45">
           </a>
          <?php else: ?>
             <img src="images/basket.png" class="option2" onclick="message()" height="45">
          <?php endif; ?>
          
        <script>
            function message(){
                swal("Notice", "You need to login to access the shopping-cart!", "error");
            }
        </script>
        
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
          <li><a href="#">About</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
   
   <!-- Top section -->
   
    <div class="announcement">
        <h2 class="headerTitle"><strong>About Us</strong></h2>
        <p> We provide news regarding competitive matches, players and tournaments on daily basis.
			The content is desktop optimized, comprehensive, customizable and seamlessly shareable and
			we make sure to keep you updated with the latest news regarding e-Sports
			Our resources are mostly obtained from all over social media online gaming communities 
            We even have our merchandise and other gaming products you can buy from our shop. </p>
    </div>
    
    <!-- Middle section -->
    <div class="middle">
        <h2><strong>Sponors and Partners</strong></h2>
       <div class="partners">
        <div class="headsponsor">
            <a href="https://www.ea.com/">
             <img class="image" src="images/sponsors/ea.png" width="120" height="115">
            </a>
        </div>
        <div class="sponsor">
            <a href="https://www.activision.com/">
             <img class="image2" src="images/sponsors/activision.png" width="240" height="60">
            </a>
        </div>
        <div class="sponsor">
            <a href="https://www.logitech.com/en-us">
             <img class="image3" src="images/sponsors/logitech.png" width="240" height="75">
            </a>
        </div>
        <div class="sponsor">
            <a href="https://www.origin.com/irl/en-us/store">
             <img class="image" src="images/sponsors/origin.png" width="120" height="115">
            </a>
        </div>
        
        <div class="clear"></div>
        
        <div class="headsponsor">
           <a href="https://www.ibuypower.com/">
            <img class="image4" src="images/sponsors/power.png" width="145" height="115">
           </a>
        </div>
        <div class="sponsor">
           <a href="https://www.twitch.tv/">
            <img class="image5" src="images/sponsors/twitch.png" width="220" height="70">
           </a>
        </div>
        <div class="sponsor">
           <a href="https://www.sony.com/">
            <img class="image6" src="images/sponsors/sony.png" width="240" height="60">
           </a>
        </div>
        <div class="sponsor">
           <a href="https://www.razer.com/">
            <img class="image7" src="images/sponsors/razer.png" width="280" height="80">
           </a>
        </div>
        
        <div class="clear"></div>
      </div>
    </div>
    
   <!-- Last section -->
  <div class="profiles">
   <h2><strong>Leadership & Co-Workers</strong></h2>
   <div class="headprofile">
       <img src="images/profiles/maleprofile.png" width="180">
       <h1>Kyle Sant</h1>
       <div class="profileName"> President & Chief Operating Officer </div>
       <div class="underline"></div>
       <p>Kyle oversees the development and execution of eSport’s business strategy and has been instrumental in shaping its digital media offerings, including the creation and launch of eSports’s mobile apps.</p>
   </div>
   
  <div class="profile">
       <img src="images/profiles/maleprofile.png" width="180">
       <h1>Harvey Specter</h1>
       <div class="profileName"> Vice President, Content </div>
       <div class="underline"></div>
       <p>Mr.Specter is responsible for eSports’s content strategy and execution, and leads editorial across both eSports and in-general the whole industry. If any members in the community have complaints they are directed to him.</p>
   </div>
   
  <div class="profile">
       <img src="images/profiles/maleprofile.png" width="180">
       <h1>Mark Zammit</h1>
       <div class="profileName"> Senior Vice President, Sales </div>
       <div class="underline"></div>
       <p>Mark leads eSports’s sales teams across the US and Canada, bringing more than a decade of experience in developing and executing mobile and other digital campaigns that deliver maximum return for his clients. </p>
   </div>
   
   <div class="profile">
       <img src="images/profiles/womanprofile.jpg" width="180">
       <h1>Mariela Vella</h1>
       <div class="profileName"> Senior Vice President, Human Resources  </div>
       <div class="underline"></div>
       <p>Mariela leads all Human Resources (HR) operations at eSports, including identifying and securing the very best talent to complement the company’s talented in-house product development and content teams.  </p>
   </div>
   
   <div class="clear"></div>
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
                        <a href="https://twitter.com/?lang=en" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/discover" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2018 Outlet Media Ventures Inc. All Rights Reserved. Certain content reproduced under license.    Privacy Policy •   Terms of Use  •  AdChoices </p>
        </div>
    </footer>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
   </html>