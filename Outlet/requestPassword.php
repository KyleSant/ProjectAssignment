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
                echo    "<script>alert('Password sent to email');
                        window.location.href='index.php';</script>";
            }
    
} else{
    echo "Invalid inputs, try again...";
}
?>
