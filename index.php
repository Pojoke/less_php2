<?php
$name="Дмитро";
$page_name="PHP tutorial";
$footer_year = 2024;

$header = <<< EOD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$page_name</title>
     <link rel="stylesheet" href="style.css">
</head>
EOD;

$body = <<< EOD
<body>
<h1>$name</h1>

<p>PHP інтерпретується вебсервером у HTML-код, який передається на сторону клієнта. На відміну від скриптової мови JavaScript, користувач не бачить PHP-коду, тому що браузер отримує готовий html-код. Це є перевагою з точки зору безпеки, але погіршує інтерактивність сторінок. Але ніхто не забороняє використовувати PHP для генерування JavaScript-кодів, які виконуються вже на стороні клієнта</p>

<img   src="./images/1656448814_1-kartinkin-net-p-slon-art-krasivo-1.jpg" alt="" width="300px">
</body>
EOD;



$footer = <<< EOD
<footer> $footer_year</footer>
</html>
EOD;
echo"$header, $body, $footer ";
?>;