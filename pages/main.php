<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
<body>
<?php
echo
"<h2>SymLinks</h2>
<form id = \"select\">
<select name=\"q\">
    <option value=\"page1.html\">Старница HTML</option>
    <option value=\"page.php\">Старница PHP</option>
    <option value=\"vudi.jpeg\">Картинка</option>
</select>
<button type=\"submit\" formmethod = \"GET\" form=\"select\">Выбрать</button>
</form>";
