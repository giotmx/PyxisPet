<?php
    $to = 'giovannaterni@yahoo.com.br';
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $adress = $_POST["adress"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $text= $_POST["message"];


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$lastname.'</td>
        </tr>
        <tr><td>Endereço: '.$adress.'/ '.$city.' / '.$state.' </td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (mail($to,'assunto', $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
