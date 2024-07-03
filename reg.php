<?php
session_start();

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    // Получаем данные из формы
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Дополнительно можно добавить проверки данных, например, на длину пароля и другие параметры

    // Добавляем нового пользователя в базу данных (в данном примере будет использоваться массив)
    $users = []; // В реальном проекте замените это на базу данных
    $users[$username] = password_hash($password, PASSWORD_DEFAULT); // Хэшируем пароль

    // Сохраняем данные пользователя в сессии (в реальном проекте замените это на сохранение в базу данных)
    $_SESSION["users"] = $users;

    // Редиректим пользователя на страницу после регистрации
    header("Location: login.php");
    exit();
}
?>
<?php include ("header.php");?>
<main>
<head>
  <meta charset="UTF-8">
  <title>Registration Form 2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="container">
    <h2 class="texting">Зарегистрироваться</h2>
    <form action="vendor/signup.php" method="post">
      <div class="input-field">
        <i class="fa fa-user"></i>
        <input id="name" type="text" name="name" placeholder="Имя" />
      </div>
      <div class="input-field">
        <i class="fa fa-user"></i>
        <input id="famil" type="text" name="famil" placeholder="Фамилия" required />
      </div>
      <div class="input-field">
        <i class="fa fa-envelope"></i>
        <input id="email" type="email" name="email" placeholder="Email" required />
      </div>
      <div class="input-field">
        <i class="fa fa-lock"></i>
        <input id="password" type="password" name="password" placeholder="пароль" required />
      </div>
      <div class="input-field">
        <i class="fa fa-lock"></i>
        <input id="password2" type="password" name="password2" placeholder="повторите пароль" required />
      </div>
      <input class="button" type="submit" value="Регистрация">
    </form>
  </div>
</body>
    </div>
</main>
<?php include ('footer1.php');?>