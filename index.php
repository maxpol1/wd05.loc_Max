<?php
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section style="display: flex; justify-content: center" >
    <form action="form/form.php" method="post" enctype="multipart/form-data">
<!--        <br>-->
<!--        <br>-->
<!--        <input type="file" name="file"  multiple>-->
        <br>
        <br>
        <input type="file" name="addFile">
        <br>
        <br>
        <input type="file" name="addFile">
        <br>
        <br><input type="file" name="addFile">
        <br>
        <br>
        <button type="submit">Отправить</button>
    </form>
</section>
</body>
</html>