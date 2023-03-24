<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
    <style>
        body{
            background-color: white;
            color: white;
            background: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;

        }
        a{
            font-size: 14px;
            font-weight: 500;
            color: #612F9F;
        }
        img{
            position: absolute;
            bottom: 2rem;
        }
        h2, p{
            color: black;
        }
    </style>
</head>
<body>
<br><br><br><br>
<h2>Dziękujemy!</h2><br>
<p>Skontaktujemy się z Państwem tak szybko, jak to możliwe!</p>
<br><br><br>
<a href="index.html">🡐 Powrót do strony głównej</a><br>
<img src="img/Logo-2.svg" alt="servicefloor">

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];



$to = 'mibado03@gmail.com';
$from = 'Service floor S.C. Mailing bot <michaelbadocha.noreply@gmail.com>';
$replyTo = 'Service floor S.C. <michaelbadocha.inbox@gmail.com>';
$subject = 'Nowa wiadomość ze strony ServiceFloor!';


$message = 
'<h2>Otrzymana wiadomość: </h2> Imię: ' . $name . "<br>\n\n" .
'E-mail: ' . $email . "<br>\n\n" .
'Telefon: ' . $phone . "<br>\n\n" .
'Wiadomość: ' . $msg;

    $headers  = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
    $headers .= 'From: '.$from."\r\n";
    $headers .= 'Reply-To: '.$replyTo."\r\n";

    mail($to, $subject, $message, $headers);
?>


</body>
</html>