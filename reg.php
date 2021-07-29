<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="warning=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/ico.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Футбольный клуб</title>
  </head>
  <body>
<div class="cotainer mt-4 middle">
    <div class="col middle">
      <h2>Регистрации</h2>
      <form method="post" action="chek.php" class="middle">
        <p class="mt-5 mb-3 text-muted text-center">Зарегистрируйте свой аккаунт, чтобы получать рассылку со свежими новосями на вашу почту.</p>
        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
        <input type="text" class="form-control" name="name" id="name" placeholder="Введите Имя"><br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
        <button class="btn btn-success" type="submit">Зарегистрировать</button><br>
        </form>
    </div>
    <br>
  <div class="col middle">
        <h2>Авторизация</h2>
    <form method="post" action="auth.php" class="middle">
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Авторизоваться</button><br>
    </form>
  </div>
  <br>
    <a href="/index.php" class="middle">Главная страница</a>
</div>
</body>
</html>
