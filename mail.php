<?php
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

    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//    $emailTo = 'info@global-id.ru';
    $emailTo = 'tulupov.m@gmail.com';
    mail($emailTo,$title,$txt, $headers);

    $_SESSION['send'] = 1;
    $referer = $_SERVER["HTTP_REFERER"];
    header('Location: '.$referer);
    exit;

}