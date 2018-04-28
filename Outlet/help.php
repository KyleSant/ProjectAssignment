<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Outlet</title>
    <link href="css/help.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
   <!-- options -->
   
    <div class="options">
        <img src="images/faq.png" class="option1" height="32">
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
                            <form action="register.html">
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
  
  <!--  faq -->
  <h2>Frequently Asked Questions:</h2>
  <div class="container">
        <button class="accordion"><strong>Account relations</strong></button>
		<div class="panel">
		<p>If you have any problem registering or logging to your account click on contact us and customer support is at your disposal.</p>
		</div>
		
        <button class="accordion"><strong>Delievery</strong></button>
		<div class="panel">
		<p>Delievery is due to a 1 week period maximum, if you don't recieve your requested page make sure to send a support ticket.</p>
		</div>    
		
		<button class="accordion"><strong>Payment Methods</strong></button>
		<div class="panel">
		<p>All payment methods are accepted; Paypal, VISA, MasterCard, etc...</p>
		</div>  
		
        <button class="accordion"><strong>Invoice-email problems</strong></button>
		<div class="panel">
		<p>Usually takes around 5 mins to recieve the receipt, if it doesn't appear in your inbox click recieve receipt again.</p>
		</div>   
   </div>
       <script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
		} 
		}
	}
	</script>
    
    
        
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</body>
</html>