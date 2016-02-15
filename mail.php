<?php
session_start();

if (isset($_POST['name']) && isset($_POST['phone'])){

    $phone = htmlspecialchars($_POST['phone']);
    $name = htmlspecialchars($_POST['name']);
    $text = htmlspecialchars($_POST['text']);
    $site = '77.globalid.ru';
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

    $emailTo = 'bhd.m@ya.ru';
    mail($emailTo,$title,$txt);

    $_SESSION['send'] = 1;
    $referer = $_SERVER["HTTP_REFERER"];
    header('Location: '.$referer);
    exit;

}