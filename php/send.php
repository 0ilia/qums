<?php
require "bd.php";
$name = trim(htmlentities($_POST['nikN'], ENT_QUOTES));
$text_mess = trim(htmlentities($_POST['textN'], ENT_QUOTES));
$code = trim(htmlentities($_POST['pgiassN'], ENT_QUOTES));
if($name==NULL){
    $name = 'Anonymous';
}
if ((iconv_strlen($code)>4)&&(iconv_strlen($code)<10)&&(iconv_strlen($text_mess)>1)&&(iconv_strlen($text_mess)<255)) {
   $bd_mess = R::dispense('message');
    $bd_mess->name = $name;
    $bd_mess->code = $code;
    $bd_mess->text_message = $text_mess;
    R::store($bd_mess);
  }

$search = R::find('message', 'code = ?', array($code));
if ((iconv_strlen($code)>4)&&(iconv_strlen($code)<10)) {
   foreach ($search as $key => $value) {
        echo $value['name'] . ': ' . $value['text_message'] . "<br>";
          }
}
