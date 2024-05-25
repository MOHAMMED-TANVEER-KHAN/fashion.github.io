<?php

if(isset($_POST["submit"]))
{
 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

echo "<h2> MSG Sent <h2>";

$from="Mail From website";
$mailbcc="ayazuddin7868@gmail.com"; // Receiver Email ID, Replace with your email ID
$mailcc="";
$subject='Testing';

$msg .="First Name : ";
$msg .= $firstname;     

$msg .="<br /> Last Name: ";
$msg .= $lastname;    

$msg .="<br />Email ID : ";
$msg .= $email;  

$msg .="<br />Mobile No. : ";
$msg .= $phone; 

$msg .="<br />Message : ";
$msg .= $message; 

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$from."\n";
$headers.= 'Cc:'.$mailcc."\n";
$headers.= 'Bcc:'.$mailbcc."\n";
$to=$email;
mail($to,$subject,$msg,$headers);
   
} else{
    echo "<h2> Sorry, Something Wrong! <h2>";
}
?>