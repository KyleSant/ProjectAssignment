<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php');
        
        $name = $_POST['name'];
        $title = $_POST['title'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
    
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
        $mail->Body = "Name: ". $name. "<br>"."Title: ".$title. "<br>". "Email: "."$email"."<br>"
                       ."Comment: ".$comments;
        $mail->Subject = 'Support Ticket';
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
                echo    "<script>alert('Message sent');
                        window.location.href='contactus.php';</script>";
            }
    ?>
</body>
</html>