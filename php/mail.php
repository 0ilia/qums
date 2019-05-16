<?php
require "bd.php";
$to = "iliamartinkevi4wok@yandex.ru";
$theam = trim(htmlspecialchars($_POST['theamN'], ENT_QUOTES));
$text_mess = trim(htmlspecialchars($_POST['MessN'], ENT_QUOTES));
$date_n = date('H:i d.m.Y');

if (($theam != NULL) && ($text_mess != NULL)) {
    mail($to, $theam, "Message: " . $text_mess . "\n" . "Date: " . $date_n . "\n" . "Ip: " . $_SERVER['REMOTE_ADDR']);
	
    $bd_mail = R::dispense('mail');
	$bd_mail->theam = $theam;
	$bd_mail->text_message = $text_mess;
	$bd_mail->date_n = $date_n; 
	$bd_mail->ip = $_SERVER['REMOTE_ADDR'];
    R::store($bd_mail);
	
	echo "<h6 style='color : green'><i>Сообщение отправлено.</i></h6>";
} else {
    echo "<h6  style='color: red'><i>Ошибка. Попробуйте ещё раз.</i></h6>";
}
