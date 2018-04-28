<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
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
  
  <!-- container content -->
  
  <div class="content">
      <h1 class="title"><strong>Trending</strong></h1>
      <img class="seperationLine" src="images/seperation.png" height="5">
      
      <!-- News Section -->
      
      <div class="index-news">
          <div class="article">
              <h3><strong>Doublelift's brother arrested, booked on charges of murder</strong></h3>
              <img class="news-img" src="images/crime.jpg">
              <p>Team Liquid AD carry Yiliang "Doublelift" Peng's brother Yihong Peng, 30, was arrested by the Orange County Sheriff's Department on Saturday after he allegedly killed his mother and stabbed his father. According to a statement released by the OCSD, neighbors called in regarding a man on the street with a knife.</p>
          </div>
          
          <div class="article" id="spacingArticle">
              <h3><strong>The Story of S1mple CSGO pro player and endeavours</strong></h3>
              <img class="news-img" src="images/s1mple.jpg">
              <p>Oleksandr "s1mple" Kostyliev is one of Counter Strike Global Offensives best young players. A skilled rifler, an assassin with the AWP and a wizard with a pistol, the young Ukranian prodigy can do it all. But S1mple has garnered a reputation for himself among the community as a talented, but brash player who doesn't always get along with him teammates.</p>
          </div>
          
          <div class="article" id="spacingArticle">
              <h3><strong>The Twitch Phenomenon: The Rise of the Celebrity Gamer</strong></h3>
              <img class="news-img" src="images/celebrity.jpg">
              <p>You might be wondering how Ninja, a guy from Lake Villa, Illinois got to where he is by playing video games. You may also be wondering how the hell he was able to get Drake to play video games with him to an audience of 600,000. Well it’s all thanks in part to Twitch.</p>
          </div>
          
           <div class="clear"></div>
          
         <div class="article">
              <h3><strong>TACO leaves SK Gaming and big let down to fans</strong></h3>
              <img class="news-img" src="images/taco.jpeg">
              <p>TACO has been with SK since July 2016, and has played alongside team captain Gabriel "FalleN" Toledo since November 2015, when he joined Luminosity Gaming. It is unclear if TACO was kicked off the team or left of his own volition, but said in a TwitLonger statement that he has been "unhappy" and felt "pressure" from outside the team.</p>
          </div>
          
          <div class="article" id="spacingArticle">
              <h3><strong>The Top 10 Most Memorable CS:GO Grand Finals</strong></h3>
              <img class="news-img" src="images/championship.jpg">
              <p>Since the summer of 2012, we’ve been treated to nearly six years of increible Counter-Strike: Global Offensive competition. But if you haven’t been watching CS:GO for all that time, we got you covered. From the controversial 2017 DreamHack Montreal finals to the back-and-forth heroics of NaVi vs Fnatic at ESL One Cologne, here are our Top 10 most memorable grand finals in competitive CS:GO history.</p>
          </div>
          
          <div class="article" id="spacingArticle">
              <h3><strong>Iconics Esports Moments: Tokido's Legendary EVO Run</strong></h3>
              <img class="news-img" src="images/tokido.jpg">
              <p>Heading into EVO 2017, Hajime “Tokido” Taniguchi – a fighting game legend – was entering year 10 of an EVO first place drought. He had 21 Top 8 finishes, including two titles in Capcom vs. SNK 2 and Super Street Fighter 2 Turbo, but EVO’s headlining Street Fighter crown had always managed to escape his grasp. </p>
          </div>
          
          <div class="clear"></div>
      </div>
      
    <!-- Videos Section -->  
    
    <h1 class="title"><strong>Featured Videos</strong></h1>
    <img class="seperationLine2" src="images/seperation.png" height="5">
    <div class="news-videos">
        <iframe class="video" width="353" height="315" src="https://www.youtube.com/embed/oYqh_jfJU3I?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        <iframe class="video" width="353" height="315" src="https://www.youtube.com/embed/OUheAcaNMm4?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        <iframe class="video" width="353" height="315" src="https://www.youtube.com/embed/WZHl3ftjeUA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        <div class="clear"></div>
        
        <iframe class="video" width="353" height="315" src="https://www.youtube.com/embed/D99DvUWU3wE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        <iframe class="video" width="353" height="315" src="https://www.youtube.com/embed/uwC7T3Xrmu8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        <iframe class="video" width="353" height="315" src="https://www.youtube.com/embed/zZCG6SYQcOQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        <div class="clear"></div>
    </div>
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
       
</body>
</html>