<?php include ("header1.php");?>
<body>
    <!--Начало тела-->
    <main>
        <!--проф банер-->
        <div class="news">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/jpg/20.02.02 Защита в ЧС.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/200201__1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/270207___1.jpg" class="d-block w-100" alt="27.02.07 Управление качеством продукции, процессов и услуг (по отраслям)">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/36.02.01 Ветеринария.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/380201____1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/430215___1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/40.02.01 Право и организация социального обеспечения.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/ecolog4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/jpg/право21.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Следующий</span>
                </button>
            </div>
            <!-- конец проф банер-->
        </div>
        <!-- новостной банер-->
        <div class="foto-news">
            <div class="foto-di">
                <div class="foto-div">
                    <a href="#"><img src="img/jpg/5.jpg" class="foto" width="300px" height="200px" alt="..."></a>
                    <div class="foto-text"><a href="#">Год педагога и наставника 2023</a></div>
                </div>
                <div class="foto-div">
                    <a href="#"><img src="img/jpg/4.jpg" width="300px" height="200px" class="foto" alt="..."></a>
                    <div class="foto-text"><a href="#">Яндекс лицей</a></div>
                </div>
                <div class="foto-div">
                    <a href="#"><img src="img/jpg/3.jpg" width="300px" height="200px" class="foto" alt="..."></a>
                    <div class="foto-text"><a href="#">Современные мастерские</a></div>
                </div>
            </div>
            <div class="foto-di">
                <div class="foto-div">
                    <a href="#"><img src="img/jpg/2.jpg" class="foto" width="450px" height="200px" alt="..."></a>
                    <div class="foto-text">
                        <a href="#">СЦК "Поварское и кондитерское дело"</a>
                    </div>
                </div>
                <div class="foto-div">
                    <a href="#"><img src="img/jpg/1.jpg" class="foto" width="450px" height="200px" alt="..."></a>
                    <div class="foto-text">
                        <a href="#">ЦОПП</a>
                    </div>
                </div>
            </div>
            <!-- конец новостного банера-->
            <!--Форма обратной связи-->
            <form class="obratnuj-zvonok" autocomplete="off" action='email.php' method='post'>
                <div class="form-zvonok">
                    <div>
                        <label>Имя <span>*</span></label>
                        <input type='text' name='username' required></div>
                    <div>
                        <label>Почта <span>*</span></label>
                        <input type='text' name='usernumber' required></div>
                    <div>
                        <label>Сообщение</label>
                        <input type='text' name='question'>
                    </div>
                    <input class="bot-send-mail" type='submit' value='Отправить'>
                </div>
            </form>
    </main>
<?php include ('footer.php');?>