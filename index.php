<?php
    require "db.php";
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Доверие</title>
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="css/Images/homeico.ico">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
    <!--reload page-->
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>

</head>
<body>

<!--Если пользователь авторизован-->
<?php if ( isset($_SESSION['logged_user'])) : ?>
<nav class="top-menu">
        <div class="menuToggle">☰ Меню</div>
    <ul class="menu-main">
        <div class="logotype">Доверие</div>
        <li><a href="index.php" class="current">Главная</a></li>
        <li><a href="request.php">Заявка</a></li>
        <li><a href="request_admin.php">Просмотр заявок</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="faq.php">О компании</a></li>
        <li><a href="logout.php">Выйти</a></li>
    </ul>
</nav>
<div class="parallaxfake-line0">
    <div class="parallax-box">
        <h1>Агентство недвижимости <hit id="aspekt">Доверие</hit></h1>
        <p>Мы обслуживаем клиентов по всему Челябинску и абсолютно уверены, что подберём вам самое лучшее жилье, основываясь на ваших предпочтениях.<br><br>Мы предлагаем:<br><offer>
        <i class="far fa-dot-circle"></i> Новостройки без комиссии. <br>
        <i class="far fa-dot-circle"></i> Ипотека с экономией до 3% <br>
        <i class="far fa-dot-circle"></i> Уникальные скидки до 100 000 руб. <br>
        <i class="far fa-dot-circle"></i> Консультация у специалистов. <br>
        <i class="far fa-dot-circle"></i> Круглосуточная 24/7 поддержка. <br>
        <i class="far fa-dot-circle"></i> Гарантии банков.<br><br></offer>
        Вы можете ввести свой телефон и мы перезвоним вам, чтобы уточнить детали<br><br>
        <form action="mail.php" method="POST" class="form-phone">
            <input id="check_bot" name="second_name" type="text" value="" />
            <input name="inp_phone1" id="form-phone1" maxlength="12" type="text" required placeholder="+7XXXXXXXXX 11-цифр"><button class="button-to-input" type="submit">Отправить</button><br><br>
            <input name="accept-phone" type="checkbox"><br>Нажимая на кнопку «Отправить», я даю согласие на обработку персональных данных
        </form>
        <p id="margin-text">либо оставьте заявку на сайте</p><br>
        <a href="request.php"><button class="btn1">Оставить заявку</button></a>
        </p>
    </div>
</div>
<div class="container-light">    
    <img src="css/Images/logoDoverie_Blue.svg" alt="" width="300px">
    <h1>Рекомендации к покупке квартиры</h1>
    <p>Прежде чем начать искать квартиру, лучше определиться, нужен вам новый дом или уже отстоявший пару тройку лет. Еще перед тем как выбирать квартиру, трезво оцените свой бюджет и выберите предпочтительную и комфортную для вас форму оплаты. Купить жилье можно по 100% оплате, в рассрочку на несколько лет с начислением процента и без, с помощью ипотечного кредитования. Достаточно просто оставить заявку. Мы поможем с выбором, сделаем предварительный подбор до встречи с вами. Поможем заполнить заявку на ипотеку и направим её сразу в несколько банков. После чего организуем показ выбранных вами квартир, проведем безопасную сделку. Каждому покупателю мы предоставляем большой выбор предложений, специальные условия покупки квартир, профессиональный подход и внимательное отношение.</p>
</div>
<div class="parallaxfake-line1">
    <div class="parallax-box">
        <h1>Вы можете посмотреть фото в галерее <hit id="aspekt">"Клиенты, которые выбрали нас"</hit> и исполнили свою мечту</h1>
        <div class='sliderA'>
        <input type="radio" name="slider1" id="slider1_1" checked="checked">
        <label for="slider1_1"></label>
        <div>
            <img src="css/Images/photoslider1.jpeg" alt="">
        </div>
        <label for="slider1_2"></label>

        <input type="radio" name="slider1" id="slider1_2">
        <label for="slider1_2"></label>
        <div>
            <img src="css/Images/photoslider2.jpeg" alt="">
        </div>
        <label for="slider1_3"></label>

        <input type="radio" name="slider1" id="slider1_3">
        <label for="slider1_3"></label>
        <div>
            <img src="css/Images/photoslider3.jpeg" alt="">
        </div>
        <label for="slider1_4"></label>

        <input type="radio" name="slider1" id="slider1_4">
        <label for="slider1_4"></label>
        <div>
            <img src="css/Images/photoslider4.jpeg" alt="">
        </div>
        <label for="slider1_1"></label>
        </div><a href="#">
        <span class="btn2-alignments">
            <button class="btn2">Галерея</button></a>
        </span>
    </div>
</div>
<div class="container-dark">    
    <img src="css/Images/logoDoverie_Orange.svg" alt="" width="300px">
    <h1>Выгодная продажа квартиры</h1>
    <p>Многие считают, что при покупке квартиры или дома агент по недвижимости необходим из соображений безопасности. А вот при продаже недвижимости - его присутствие вовсе необязательно. Но практика показывает, что именно самостоятельные попытки продать свою недвижимость обычно приводят к печальному результату! Поскольку только профессионал может выявить мошенника,который делает деньги и умело пользуются лазейками в российском законодательстве. Профессиональный специалист всегда контролирует ситуацию. Может спрогнозировать ее развитие, а при необходимости принять меры.</p>
</div>
<div class="parallaxfake-line2">
    <div class="parallax-box">
        <h1>Обращаясь к нам,<hit id="aspekt"> вы выбираете:</hit></h1>
        <p><offer><i class="far fa-dot-circle"></i> Бесплатные консультации, профессиональный сервис; <br>
            <i class="far fa-dot-circle"></i> Бесплатный пакет предпродажных услуг: оценка, профессиональное фотографирование, портфолио объекта; <br>
            <i class="far fa-dot-circle"></i> Профессиональную рекламную стратегию по продаже вашего объекта; <br>
            <i class="far fa-dot-circle"></i> Продажу по рыночной цене; <br>
            <i class="far fa-dot-circle"></i> Эффективный поиск покупателей,  организацию показов; <br>
            <i class="far fa-dot-circle"></i> Защиту от мошенников и официальные гарантии безопасности сделки; <br>
            <i class="far fa-dot-circle"></i> Полное юридическое сопровождение; <br>
            <i class="far fa-dot-circle"></i> Прозрачность, законность и конфиденциальность сделки.</offer></p>
    </div>
</div>
<div class="container-dark">
    <h1>Социальные сети АН "Доверие"</h1>
    <ul>
        <a href="https://www.facebook.com/Агентство-недвижимости-Доверие-686308468468939/"><li class="facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></li></a>
        <a href="https://twitter.com/HvxRX876TuNx14A"><li class="twitter"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></li></a>
        <a href="https://www.instagram.com/mi_ma_max/"><li class="instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li></a>
        <a href="https://www.youtube.com/channel/UCvrdgmPl2_ZJuevE_pIHcuQ?view_as=subscriber"><li class="google"><i class="fa fa-google fa-2x" aria-hidden="true"></i></li></a>
        <a href="https://chat.whatsapp.com/F9OZwmcpj58GmIRURDniCR"><li class="whatsapp"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li></a>
    </ul>
</div>
<div class="parallaxfake-line3">
    <div class="parallax-box-cards">
        <h1>О наших <hit id="aspekt">сотрудниках</hit></h1>
        <p>Профессионалы своего дела</p>
        <div class="cards-container">
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker1.jpg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Лариса</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовил автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker2.jpeg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Айгуль</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовила автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker3.jpg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Алена</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовил автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker4.jpeg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Татьяна</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовил автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>            
        </div>              
    </div>    
</div>
<!--
<div class='sliderA'>
    <input type="radio" name="slider1" id="slider1_1" checked="checked">
    <label for="slider1_1"></label>
    <div>
    	<p>Мы предоставим вам большой выбор недвижимости</p>
    	<img src="css/Images/photoslider1.jpg" alt="">
    </div>
    <label for="slider1_2"></label>

    <input type="radio" name="slider1" id="slider1_2">
    <label for="slider1_2"></label>
    <div>
    	<p>От домов и коттеджей</p>
    	<img src="css/Images/photoslider2.jpg" alt="">
    </div>
    <label for="slider1_3"></label>

    <input type="radio" name="slider1" id="slider1_3">
    <label for="slider1_3"></label>
    <div>
    	<p>До удалённого от цивилизации гнёздышка</p>
    	<img src="css/Images/photoslider3.jpg" alt="">
    </div>
    <label for="slider1_4"></label>

    <input type="radio" name="slider1" id="slider1_4">
    <label for="slider1_4"></label>
    <div>
    	<p>Уют в каждый дом</p>
    	<img src="css/Images/photoslider4.png" alt="">
    </div>
    <label for="slider1_1"></label>
</div>
-->
<footer>
    <h2>Наши партнёры:</h2>
    <div class="teammates">
            <div class="teammates-part1"><p><a href="https://www.sberbank.ru">Сбербанк</a><br><a href="https://www.vtb.ru/">ВТБ</a><br><a href="https://snbank.ru/">Снежинский</a><br><a href="https://www.akbars.ru/">АК БАРС</a><br><a href="http://novosel99.ru/">ГК "Новосел"</a><br><a href="http://leodom.ru/">Сеть магазинов "ЛЕО"</a><br><a href="http://www.sktemp.spb.ru/">СК "Темп"</a><br><a href="download/app-debug.apk" download="" title="Мобильное приложение 'Помощник риэлтора'">Скачать Мобильное приложение</a></div><div class="teammates-part2"><a href="http://lsv74.ru/">ООО "Строй Сервис"</a><br><a href="https://www.imp-style.com/">ООО "Империя стиля"</a><br><a href="https://xn----8sbeid4beobrf9a.xn--p1ai/">ГК "ЕВРОДОМ-УРАЛ»</a><br><a href="http://esk-yuss.ru/">АО ЭСК «Южуралстройсервис»</a><br><a href="https://www.zhbi74.ru/">Завод ЖБИ</a><br><a href="https://pr-flat.ru/">Проект-Флэт</a><br><a href="http://3d-zlat.ru/">"ИСОВИТ" 3D-ПАНЕЛИ</a><br><a href="http://brigadir74.com/">Бригадир 74</a></div>         
    </div>
    <div class="footer-right"><h2>© 2019 Агентство недвижимости «Доверие»</h2><br><h2>Сайт разработал: </h2><p><a href="https://vk.com/mima_max">Мингаев Максим</a></p>
    </div>    
</footer>




















<!--Если пользователь не авторизован-->
<?php else : ?>

    <nav class="top-menu">
        <div class="menuToggle">☰ Меню</div>
    <ul class="menu-main">
        <div class="logotype">Доверие</div>
        <li><a href="index.php" class="current">Главная</a></li>
        <li><a href="request.php">Заявка</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="faq.php">О компании</a></li>
        <li><a href="login.php">Авторизация</a></li>
    </ul>
</nav>
<div class="parallaxfake-line0">
    <div class="parallax-box">
        <h1>Агентство недвижимости <hit id="aspekt">Доверие</hit></h1>
        <p>Мы обслуживаем клиентов по всему Челябинску и абсолютно уверены, что подберём вам самое лучшее жилье, основываясь на ваших предпочтениях.<br><br>Мы предлагаем:<br><offer>
        <i class="far fa-dot-circle"></i> Новостройки без комиссии. <br>
        <i class="far fa-dot-circle"></i> Ипотека с экономией до 3% <br>
        <i class="far fa-dot-circle"></i> Уникальные скидки до 100 000 руб. <br>
        <i class="far fa-dot-circle"></i> Консультация у специалистов. <br>
        <i class="far fa-dot-circle"></i> Круглосуточная 24/7 поддержка. <br>
        <i class="far fa-dot-circle"></i> Гарантии банков.<br><br></offer>
        Вы можете ввести свой телефон и мы перезвоним вам, чтобы уточнить детали<br><br>
        <form action="mail.php" method="POST" class="form-phone">
            <input id="check_bot" name="second_name" type="text" value="" />
            <input name="inp_phone1" id="form-phone1" maxlength="12" type="text" required placeholder="+7XXXXXXXXX 11-цифр"><button class="button-to-input" type="submit">Отправить</button><br><br>
            <input name="accept-phone" type="checkbox">Нажимая на кнопку «Отправить», я даю согласие на обработку персональных данных<br>
        </form>
        <p id="margin-text">либо оставьте заявку на сайте</p><br>
        <a href="request.php"><button class="btn1">Оставить заявку</button></a>
        </p>
    </div>
</div>
<div class="container-light">    
    <img src="css/Images/logoDoverie_Blue.svg" alt="" width="300px">
    <h1>Рекомендации к покупке квартиры</h1>
    <p>Прежде чем начать искать квартиру, лучше определиться, нужен вам новый дом или уже отстоявший пару тройку лет. Еще перед тем как выбирать квартиру, трезво оцените свой бюджет и выберите предпочтительную и комфортную для вас форму оплаты. Купить жилье можно по 100% оплате, в рассрочку на несколько лет с начислением процента и без, с помощью ипотечного кредитования. Достаточно просто оставить заявку. Мы поможем с выбором, сделаем предварительный подбор до встречи с вами. Поможем заполнить заявку на ипотеку и направим её сразу в несколько банков. После чего организуем показ выбранных вами квартир, проведем безопасную сделку. Каждому покупателю мы предоставляем большой выбор предложений, специальные условия покупки квартир, профессиональный подход и внимательное отношение.</p>
</div>
<div class="parallaxfake-line1">
    <div class="parallax-box">
        <h1>Вы можете посмотреть фото в галерее <hit id="aspekt">"Клиенты, которые выбрали нас"</hit> и исполнили свою мечту</h1>
        <div class='sliderA'>
        <input type="radio" name="slider1" id="slider1_1" checked="checked">
        <label for="slider1_1"></label>
        <div>
            <img src="css/Images/photoslider1.jpeg" alt="">
        </div>
        <label for="slider1_2"></label>

        <input type="radio" name="slider1" id="slider1_2">
        <label for="slider1_2"></label>
        <div>
            <img src="css/Images/photoslider2.jpeg" alt="">
        </div>
        <label for="slider1_3"></label>

        <input type="radio" name="slider1" id="slider1_3">
        <label for="slider1_3"></label>
        <div>
            <img src="css/Images/photoslider3.jpeg" alt="">
        </div>
        <label for="slider1_4"></label>

        <input type="radio" name="slider1" id="slider1_4">
        <label for="slider1_4"></label>
        <div>
            <img src="css/Images/photoslider4.jpeg" alt="">
        </div>
        <label for="slider1_1"></label>
        </div><a href="#">
        <button class="btn2">Галерея</button></a>
    </div>
</div>
<div class="container-dark">    
    <img src="css/Images/logoDoverie_Orange.svg" alt="" width="300px">
    <h1>Выгодная продажа квартиры</h1>
    <p>Многие считают, что при покупке квартиры или дома агент по недвижимости необходим из соображений безопасности. А вот при продаже недвижимости - его присутствие вовсе необязательно. Но практика показывает, что именно самостоятельные попытки продать свою недвижимость обычно приводят к печальному результату! Поскольку только профессионал может выявить мошенника,который делает деньги и умело пользуются лазейками в российском законодательстве. Профессиональный специалист всегда контролирует ситуацию. Может спрогнозировать ее развитие, а при необходимости принять меры.</p>
</div>
<div class="parallaxfake-line2">
    <div class="parallax-box">
        <h1>Обращаясь к нам,<hit id="aspekt"> вы выбираете:</hit></h1>
        <p><offer><i class="far fa-dot-circle"></i> Бесплатные консультации, профессиональный сервис; <br>
            <i class="far fa-dot-circle"></i> Бесплатный пакет предпродажных услуг: оценка, профессиональное фотографирование, портфолио объекта; <br>
            <i class="far fa-dot-circle"></i> Профессиональную рекламную стратегию по продаже вашего объекта; <br>
            <i class="far fa-dot-circle"></i> Продажу по рыночной цене; <br>
            <i class="far fa-dot-circle"></i> Эффективный поиск покупателей,  организацию показов; <br>
            <i class="far fa-dot-circle"></i> Защиту от мошенников и официальные гарантии безопасности сделки; <br>
            <i class="far fa-dot-circle"></i> Полное юридическое сопровождение; <br>
            <i class="far fa-dot-circle"></i> Прозрачность, законность и конфиденциальность сделки.</offer></p>
    </div>
</div>
<div class="container-dark">
    <h1>Социальные сети АН "Доверие"</h1>
    <ul>
        <li class="facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></li>
        <li class="twitter"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></li>
        <li class="instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
        <li class="google"><i class="fa fa-google fa-2x" aria-hidden="true"></i></li>
        <li class="whatsapp"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
    </ul>
</div>
<div class="parallaxfake-line3">
    <div class="parallax-box-cards">
        <h1>О наших <hit id="aspekt">сотрудниках</hit></h1>
        <p>Профессионалы своего дела</p>
        <div class="cards-container">
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker1.jpg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Лариса</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовил автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker2.jpeg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Айгуль</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовил автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker3.jpg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Алена</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовил автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>
            <div class="card-left">
                <div class="front">
                    <img src="css/Images/worker4.jpeg" alt="">
                </div>
                <div class="back">
                    <div class="back-content-left">
                        <h1 class="text-top-cards">Здравствуйте, меня зовут<br><hit id="aspekt">Татьяна</hit></h1>
                        <p>Чтобы вы узнали меня получше я подготовил автобиографию, буду рад рассказать вам побольше о себе<br><br>
                        Мои социальные сети</p>
                        <div class="card-social-networks">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <button class="btn3">Биография</button>
                    </div>
                </div>
            </div>            
        </div>              
    </div>    
</div>
<!--
<div class='sliderA'>
    <input type="radio" name="slider1" id="slider1_1" checked="checked">
    <label for="slider1_1"></label>
    <div>
        <p>Мы предоставим вам большой выбор недвижимости</p>
        <img src="css/Images/photoslider1.jpg" alt="">
    </div>
    <label for="slider1_2"></label>

    <input type="radio" name="slider1" id="slider1_2">
    <label for="slider1_2"></label>
    <div>
        <p>От домов и коттеджей</p>
        <img src="css/Images/photoslider2.jpg" alt="">
    </div>
    <label for="slider1_3"></label>

    <input type="radio" name="slider1" id="slider1_3">
    <label for="slider1_3"></label>
    <div>
        <p>До удалённого от цивилизации гнёздышка</p>
        <img src="css/Images/photoslider3.jpg" alt="">
    </div>
    <label for="slider1_4"></label>

    <input type="radio" name="slider1" id="slider1_4">
    <label for="slider1_4"></label>
    <div>
        <p>Уют в каждый дом</p>
        <img src="css/Images/photoslider4.png" alt="">
    </div>
    <label for="slider1_1"></label>
</div>
-->
<footer>
    <h2>Наши партнёры:</h2>
    <div class="teammates">
            <div class="teammates-part1"><p><a href="https://www.sberbank.ru">Сбербанк</a><br><a href="https://www.vtb.ru/">ВТБ</a><br><a href="https://snbank.ru/">Снежинский</a><br><a href="https://www.akbars.ru/">АК БАРС</a><br><a href="http://novosel99.ru/">ГК "Новосел"</a><br><a href="http://leodom.ru/">Сеть магазинов "ЛЕО"</a><br><a href="http://www.sktemp.spb.ru/">СК "Темп"</a><br><a href="download/app-debug.apk" download="" title="Мобильное приложение 'Помощник риэлтора'">Скачать Мобильное приложение</a></div><div class="teammates-part2"><a href="http://lsv74.ru/">ООО "Строй Сервис"</a><br><a href="https://www.imp-style.com/">ООО "Империя стиля"</a><br><a href="https://xn----8sbeid4beobrf9a.xn--p1ai/">ГК "ЕВРОДОМ-УРАЛ»</a><br><a href="http://esk-yuss.ru/">АО ЭСК «Южуралстройсервис»</a><br><a href="https://www.zhbi74.ru/">Завод ЖБИ</a><br><a href="https://pr-flat.ru/">Проект-Флэт</a><br><a href="http://3d-zlat.ru/">"ИСОВИТ" 3D-ПАНЕЛИ</a><br><a href="http://brigadir74.com/">Бригадир 74</a></div>         
    </div>
    <div class="footer-right"><h2>© 2019 Агентство недвижимости «Доверие»</h2><br><h2>Сайт разработал: </h2><p><a href="https://vk.com/mima_max">Мингаев Максим</a></p>
    </div>    
</footer>

<?php endif; ?>
</body>
</html>