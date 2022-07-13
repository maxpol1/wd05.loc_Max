<?php
    session_start();
    include_once 'db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // где-то здесь потерялся запрос к БД и остальная логика
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        $res = mysqli_query($connection, $sql);
        $user = mysqli_fetch_assoc($res);
        if ($user){
            $_SESSION['is_admin'] = 1;
        }
    }
//    var_dump($_SESSION);

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
<form action="" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Login</button>
</form>
</body>
</html>


