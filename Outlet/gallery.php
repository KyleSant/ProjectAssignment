<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outlet</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="jquery.fancybox.min.js"> </script>
	<link  href="jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/stylegallery.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <style>
		html { 
		background: url(images/gallerybg.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
		}
	</style>
    
    <script>
	
	$(document).ready(function (){
		$('[data-fancybox="image"]')
	));	
	</script>
</head>
<body>
   <!-- options -->
   
   <div class="options">
       <a href="help.php">
        <img src="images/faq.png" class="option1" height="32">
       </a>
        <img src="images/basket.png" class="option2" height="45">
        <img src="images/screenshot.png" class="option3" height="32">
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
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
 <!-- gallery area -->
 	<div class="galleryarea">
		<a href="images/gallery1.jpg" data-caption="gallery1" data-fancybox="image">
			<img src="images/gallery1.jpg"/>
			</a>
		<a href="images/gallery2.jpg" data-caption="gallery2" data-fancybox="image">
			<img src="images/gallery2.jpg"/>
			</a>
		<a href="images/gallery3.jpg" data-caption="gallery3" data-fancybox="image">
			<img src="images/gallery3.jpg"/>
			</a>
		<a href="images/gallery4.jpg" data-caption="gallery4" data-fancybox="image">
			<img src="images/gallery4.jpg"/>
			</a>
		<a href="images/gallery5.jpg" data-caption="gallery5" data-fancybox="image">
			<img src="images/gallery5.jpg"/>
			</a>
		<a href="images/gallery6.jpeg" data-caption="gallery6" data-fancybox="image">
			<img src="images/gallery6.jpeg"/>
			</a>
		<a href="images/gallery7.jpg" data-caption="gallery7" data-fancybox="image">
			<img src="images/gallery7.jpg"/>
			</a>
		<a href="images/gallery8.jpg" data-caption="gallery8" data-fancybox="image">
			<img src="images/gallery8.jpg"/>
			</a>
		<a href="images/gallery9.jpg" data-caption="gallery9" data-fancybox="image">
			<img src="images/gallery9.jpg"/>
			</a>
		</div>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</body>
</html>