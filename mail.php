<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

require 'vendor/PHPMailer/PHPMailerAutoload.php';

session_start();

if (isset($_POST['name']) && isset($_POST['phone'])){

    $phone = htmlspecialchars($_POST['phone']);
    $name = htmlspecialchars($_POST['name']);
    $text = htmlspecialchars($_POST['text']);
    $site = '74.globalid.ru';
    $title = 'Пользователь просит связаться с ним';
    if ($text){
        $txt = 'Здравствуйте. С сайта '.$site.' пользователь задал вопрос: <br /><br />
        <br />
        <p>'.$text.'</p>
        Имя: '.$name.'<br />
        Телефон: '.$phone.'<br />';
    }else{
        $txt = 'Здравствуйте. С сайта '.$site.' пользователь просит перезвонить ему <br />
        Имя: '.$name.'<br />
        Телефон: '.$phone.'<br />';
    }

    $mail = new PHPMailer;
//    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = 'mail.global-id.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'GID\74global';
    $mail->Password = '502C9F6E50053BAA23E49C3772D444EE';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 65125;

    $mail->setFrom('info@global-id.ru');
//    $mail->addAddress('tulupov.m@gmail.com');
//    $mail->addAddress('bhd.m@ya.ru');
    $mail->addAddress('info@global-id.ru');
    $mail->isHTML(true);

    $mail->Subject = 'Заявка с сайта';
    $mail->Body    = $txt;
    $mail->AltBody = strip_tags($txt);

    if(!$mail->send()) {
//        echo 'Message could not be sent.';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//        echo '1';
    } else {
//        echo 'Message has been sent';
//        echo '2';
    }
//    exit;


    $_SESSION['send'] = 1;
    $referer = $_SERVER["HTTP_REFERER"];
    header('Location: '.$referer);
    exit;

}