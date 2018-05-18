<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php');
        $conn = mysqli_connect('localhost','root','','outlet','3306')
        
    
        $username = 'kyle.sant.a100883@mcast.edu.mt';
        $pwd = 'mcast24798';
        $emailTo = 'kyle.sant.a100883@mcast.edu.mt';
        $mail = new PHPMailer(); #create a new instance
        $mail->isSMTP(); #using SMTP
        $mail->isHtml(true);
        $mail->Host = 'smtp.office365.com';
        #$mail->SMTPDebug = 2; #include client and server messges
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = $username;
        $mail->Password = $pwd;
        $mail->Body = "This is an automated message and to alert the user a purchase has been made at Outlet store // www.outlet.com!!!<br/> ---------------------------------------------------------------------------------------------------------------";
        $mail->Subject = 'Confirm purchase via Paypal';
        $mail->From = $username; #sender
        $mail->AddAddress($emailTo); #recepient
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
                echo    "<script>alert('Confirmation purchase mail sent');
                        window.location.href='cart.php';</script>";
            }
    ?>
    
</body>
</html>