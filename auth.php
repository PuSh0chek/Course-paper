<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  $pass = md5($pass."gdfgerg332");

  $mysql = new mysqli('localhost','common','common','register-bd');

  $result = $mysql->query("SELECT * FORM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
  /*$user = $result->fetch_assoc();
  if(count($user) == 0){
    echo "Такой пользователь не найден";
    exit();
  }
*/
  setcookie('user', $user['name'], time() + 3600, "/");

  $mysql->close();

  header('Location: /');
?>
