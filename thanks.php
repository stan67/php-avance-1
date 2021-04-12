<?php

$userName = $_POST ["user_name"];
$menud = $_POST["Menud"];
$userMail = $_POST ["user_email"];
$phone = $_POST ["phone"];
$userMessage = $_POST ["user_message"];


echo "Merci " .$userName ." de nous avoir contacté à propos d' " .$menud .".<br/>";
echo " Un de nos conseiller vous contactera soit à l’adresse " .$userMail ." ou par téléphone au " .$phone;
echo " dans les plus brefs délais pour traiter votre demande : <br/><br/> " .$userMessage;
?>

