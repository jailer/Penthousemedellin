<?
$mail="1800@sympatico.ca";

$name = $_POST["name"];
$e_mail = $_POST["e_mail"];
$your_message = $_POST["your_message"];
 
$thanks= "contactenos.html";

$message= "
name=".$name."
e_mail=".$e_mail."
your_message=".$your_message."
";

if(mail($mail,"new message",$message));

header ("location: $thanks");

?>