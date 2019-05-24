<?php
require "bd.php";
$to = "iliamartinkevi4wok@yandex.ru";
$theam = trim(htmlspecialchars($_POST['theamN'], ENT_QUOTES));
$text_mess = trim(htmlspecialchars($_POST['MessN'], ENT_QUOTES));
$email_from = trim(htmlspecialchars($_POST['EmailN'], ENT_QUOTES));
$date_n = date('H:i d.m.Y');

$errors =array();
if ((strlen($theam) < 26) && (strlen($theam) > 3) && (strlen($text_mess) > 6)&& (strlen($text_mess) < 201) && ($email_from != NULL)) {
    mail($to, $theam, "Message: " . $text_mess . "\n" . "Date: " . $date_n . "\n" . "Ip: " . $_SERVER['REMOTE_ADDR'] . "\n" . "From: " . $email_from);
    if (filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
        $bd_mail = R::dispense('mail');
        $bd_mail->theam = $theam;
        $bd_mail->text_message = $text_mess;
        $bd_mail->date_n = $date_n;
        $bd_mail->ip = $_SERVER['REMOTE_ADDR'];
        $bd_mail->email_from = $email_from;
        R::store($bd_mail);
    } else {
        $errors[] = "Ввести корректный email";
    }
    if (empty($errors)) {
        echo "<h6 style='color : green'><i>Сообщение отправлено.</i></h6>";
    }
}
if (!empty($errors)) {

    //echo "<h6  style='color: red'><i>Ошибка.Попробуйте ещё раз.</i></h6>";
    $error = array_shift($errors);
    echo "<h6  style='color: red'><i>$error</i></h6>";
}
