<?php 

var_dump($_GET);

$nome = $_GET['name'];
$mail = $_GET['mail'];
$number = $_GET['age'];

if (strlen($nome) > 3 && strpos($mail, '@') && strpos($mail, '.')  !== false && ctype_digit($number)){
    echo 'Accesso Consentito';
}else{
    echo 'Accesso Negato';
}

?>