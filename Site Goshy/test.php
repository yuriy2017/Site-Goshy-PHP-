<?php
$message = "Мой текст здесь";
$to = "<stupakyuriy36@gmail.com>";
$topic = "Hi world";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: My VPS <stupak.yuriy@mail.ru>\r\n";
$mail = mail("$to", "$topic", "$message", $headers);
if ($mail == 1) echo «Почта отправлена»);
else echo «Почта не отправлена»;
?>
