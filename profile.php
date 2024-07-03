<?php include ("header2.php");?>

<main>
    <div class="ava">
        <h3 align="center">Личный кабинет</h1>
        <hr><br>
        <div class="grid-div">
            <div class="center">
                <h2 > Имя пользователя:  <?= $_SESSION['user']['name'] ?></h2><br>
                <h2> Фамилия:  <?= $_SESSION['user']['famil'] ?></h2><br>
                <h2> Электронная почта: <?= $_SESSION['user']['email'] ?></h2><br>
            </div>
            <div class="center" id="block-js">
                <h2>Название курса:</h2>
                <h2 id="idd">Срок обучения:  </h2>
            </div>
            <div>
                <form action="vendor/logout.php">
                    <input class="button" type="submit" value="Выйти из аккаунта">
                </form>
            </div>
        </div>
    </div>
</main>
<?php include ('footer1.php');?>
<script src="js/main.js">
    var p = document.getElementById('pp');
var btn = document.getElementById("codim");
var idd = document.getElementById('idd');
btn.addEventListener("click", function hz(){
   
    idd=p;
    
    
})
</script>