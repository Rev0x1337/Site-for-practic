<?php
if (!isset($_COOKIE['User'])) {
    header("Location: login.php");
 } 
$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'website');
 
$user_id = $_GET['id'];
 
if (!isset($user_id)) {
   header("Location: /404");
} else {
   $sql = "SELECT * FROM users WHERE id='$user_id'";
   $res = mysqli_query($link, $sql);
   $rows = mysqli_fetch_array($res);
}
?>
 
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> <?php echo $rows['username']; ?> </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-4" align="center">
       <h1><?php echo $rows['username']; ?></h1>
       <p>Сюда можно добавить любую информацию о пользователе, например: <?php echo $rows['email']; ?> </p>
   </div>
</body>
</html>
