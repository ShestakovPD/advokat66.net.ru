<?php

$email = $_POST['email'];
$text = $_POST['text'];

$email = htmlspecialchars($email);
$text = htmlspecialchars($text);

$email = urldecode($email);
$text = urldecode($text);

$email = trim($email);
$text = trim($text);

/*ini_set('display_errors','On');
error_reporting('E_ALL');*/

$result = mail("advokat66@proton.me", "Заявка с сайта", "email:".$email.". text: ".$text ,"From: box@advokat66.net.ru \r\n");

echo'
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />';

if ($result == 'true')
{
echo "<b>Анонимная консультация заказана!<p>";
echo "<a href=index.html>Нажмите сюда для возврата на главную страницу";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}

echo'</head>';

?>

<!--  header('Location: index.html'); exit( ); -->



