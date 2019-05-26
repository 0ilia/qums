<?php
require "bd.php";

$saltForMD5 = "KLdj1KQ33~QPT7@Rj#";
function Getmd5($code,$saltForMD5 ="KLdj1KQ33~QPT7@Rj#"){

    $strUtf32 = mb_convert_encoding( $saltForMD5.$code, "UTF-32LE");
    return md5($strUtf32);
}
$name = trim(htmlentities($_POST['nikN'], ENT_QUOTES));
$text_mess = trim(htmlentities($_POST['textN'], ENT_QUOTES));
$code = trim(htmlentities($_POST['passN'], ENT_QUOTES));
if($name==NULL){
    $name = 'Аноним';
}
if ((strlen($code)>4)&&(strlen($code)<20)&&(strlen($text_mess)>1)&&(strlen($text_mess)<255)) {
   $bd_mess = R::dispense('message');
    $bd_mess->name = $name;
    $bd_mess->code = Getmd5($code);
    $bd_mess->text_message = $text_mess;
    R::store($bd_mess);
  }

$search = R::find('message', 'code = ?', array(Getmd5($code)));
if ((strlen($code)>4)&&(strlen($code)<20)) {
   foreach ($search as $key => $value) {
        echo $value['name'] . ': ' . $value['text_message'] . "<br>";
          }
}
