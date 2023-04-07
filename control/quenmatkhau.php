<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once ('../classes/config.php');
if(isset($_POST)){
    
    $email = $_POST["email"];
    $check = $db->query("SELECT * FROM `users` WHERE `email` = '$email'");
    
    if($check->rowCount() > 0){
        $user = $check->fetch(); 
        $user_id = $user['id']; //lay id nguoi dung

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 10; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
        $db->exec("UPDATE `users` SET `password` = '$randomString' WHERE `id` = '$user_id'" ); //cap nhat mat khau moi
        
        //Gui mail thong bao
        function sendmail($randomString){
            $to =  $_POST['email'];// mail of reciever
            $newpass = $randomString;
            $from = "startsourcingEzsupply@gmail.com";  // you mail
            $password = "jwwyujfymapywkin";  // your mail password
            // Ignore from here
    
            require_once "../PHPMailer/PHPMailer.php";
            require_once "../PHPMailer/SMTP.php";
            require_once "../PHPMailer/Exception.php";
            $mail = new PHPMailer();
    
            // To Here
    
            //SMTP Settings
            $mail->isSMTP();
            // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
            $mail->Host = "smtp.gmail.com"; // smtp address of your email
            $mail->SMTPAuth = true;
            $mail->Username = $from;
            $mail->Password = $password;
            $mail->Port = 25;  // port
            $mail->SMTPSecure = "tls";  // tls or ssl
            $mail->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                ]
            ]);
    
            //Email Settings
            $mail->isHTML(true);
            $mail->setFrom($from,'TLU survey');
            $mail->addAddress($to); // enter email address whom you want to send
            $mail->Subject = ("Cap lai mat khau");
            $mail->Body = 
            'Mat khau moi cua ban la: "' .$newpass. '"<br> Vui long cap nhat lai mat khau moi. ' ;
            if ($mail->send()) {
                $statusMsg = 'Mật khẩu đã được cập nhật. Vui lòng kiểm tra email';
                echo '<script>window.location="../forgetPassword.php?status='.$statusMsg .'"</script>';
            } else {
                $statusMsg = 'Đã có lỗi xảy ra. Vui lòng thử lại sau ít phút.';
                echo '<script>window.location="../forgetPassword.php?status='.$statusMsg .'"</script>';
            }
        }

            sendmail($randomString);

    }else{
        $statusMsg = 'Tài khoản email không tồn tại. Vui lòng nhập lại';
                echo '<script>window.location="../forgetPassword.php?status='.$statusMsg .'"</script>';
    }
}