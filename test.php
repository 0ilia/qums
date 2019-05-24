<meta charset="UTF-8">
<?php
$a = "Илья";
echo iconv_strlen($a)."</br>";
$a = "qwee";
echo iconv_strlen($a)."</br>";

$email_a = 'joe@example.com';
echo filter_var($email_a, FILTER_VALIDATE_EMAIL);
