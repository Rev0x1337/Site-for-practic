<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Для браузера IE, width - ширина области просмотра == ширине экрана,
   initial-scale - масштаб страницы == 100% -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Регистрация</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- В данном случае тег link отвечает за подключение CSS файла Bootstrap. Согласно википедии - bootstrap - это свободный набор инструментов для создания сайтов и веб-приложений. -->
</head>
<body>
   <div class="container mt-4" align="center">
       <h1>Регистрация</h1>
       <form method="POST" action="/registration.php">
           
           <input class="form-control" type="email" name="email" placeholder="Email">
           <input class="form-control" type="text" name="username" placeholder="Username">
           <input class="form-control" type="password" name="password" placeholder="Password">
           <br>
           <button type="submit" class="btn btn-success" name="submit">Продолжить</button>
       </form>
   </div>
</body>
</html>
 
<?php
require_once('db.php');
 
if (isset($_COOKIE['User'])) {
    header("Location: index.php");
 } 

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'website');
 

if (isset($_POST['submit'])) {
   $email = $_POST['email']; 
   $username = $_POST['username'];
   $pass = $_POST['password'];
   if (!$email || !$username || !$pass) die("Please, input all values!");
  
   $sql = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$pass')";
  
   if(!mysqli_query($link, $sql)){
       echo "Can't add user";
   }
}
?>
