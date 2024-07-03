<?php include ("header.php");?>
<main>
<body>
  <div class="container">
    <h2 class="texting">Вход в аккаунт</h2>
    <form action="vendor/signin.php" method="post">
      <div class="input-field">
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required />
      </div>
      <div class="input-field">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="пароль" required />
      </div>
      <input class="button" type="submit" value="Войти">
    </form>
  </div>
</body>
    </div>
</main>
<?php include ('footer1.php');?>