<?php
    require "db.php";
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Контакты</title>
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
        <li><a href="index.php">Главная</a></li>
        <li><a href="request.php">Заявка</a></li>
        <li><a href="request_admin.php">Просмотр заявок</a></li>
        <li><a href="contacts.php" class="current">Контакты</a></li>
        <li><a href="faq.php">О компании</a></li>
        <li><a href="logout.php">Выйти</a></li>
    </ul>
</nav>
<div class="container-dark5">
	<h1>Контакты</h1><img src="css/Images/phone.svg" alt="Contacts" width="150px">
	<p>Контактная информация:<br> 
	г. Златоуст, Пр. Гагарина, 1-я линия, 18 ( Навигатор), Офис 8.<br>
	Телефон: 8(3513) 65-90-40, 8(3513) 63-40-20<br>
	Ждем вас пн-пт с 9:00 до 20:00, сб-вс с 10:00 до 15:00<br><br></p>
	<h1>Карта</h1>
	<div class="iframe-align">
	<iframe src="https://yandex.ru/map-widget/v1/-/CCC-zBYM" width="860" height="700" frameborder="1" allowfullscreen="true"></iframe>
	</div>
</div>
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
        <li><a href="index.php">Главная</a></li>
        <li><a href="request.php">Заявка</a></li>
        <li><a href="contacts.php" class="current">Контакты</a></li>
        <li><a href="faq.php">О компании</a></li>
        <li><a href="login.php">Авторизация</a></li>
    </ul>
</nav>
<div class="container-dark5">
	<h1>Контакты</h1><img src="css/Images/phone.svg" alt="Contacts" width="150px">
	<p>Контактная информация:<br> 
	г. Златоуст, Пр. Гагарина, 1-я линия, 18 ( Навигатор), Офис 8.<br>
	Телефон: 8(3513) 65-90-40, 8(3513) 63-40-20<br>
	Ждем вас пн-пт с 9:00 до 20:00, сб-вс с 10:00 до 15:00<br><br></p>
	<h1>Карта</h1>
	<div class="iframe-align">
	<iframe src="https://yandex.ru/map-widget/v1/-/CCC-zBYM" width="860" height="700" frameborder="1" allowfullscreen="true"></iframe>
	</div>
</div>
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