<?php
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail('bortstas@bk.ru','test','Тестовое сообщение', $headers);
mail('info@global-id.ru','test','Тестовое сообщение', $headers);