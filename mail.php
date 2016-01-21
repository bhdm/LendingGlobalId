<?php

if (isset($_POST['name']) && isset($_POST['phone'])){
    $phone = htmlspecialchars($_POST['phone']);
    $name = htmlspecialchars($_POST['name']);
    $site = '77.globalid.ru';
    $title = 'Пользователь просит связаться с ним';
    $txt = 'Здравствуйте. С сайта '.$site.' пользователь просит перезвонить ему <br />
    Имя: '.$name.'<br />
    Телефон: '.$name.'<br />';
    $emailTo = 'bhd.m@ya.ru';
    mail($emailTo,$title,$txt);
}