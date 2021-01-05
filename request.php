<?php
    require "db.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Заявка</title>
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
        <li><a href="request.php" class="current">Заявка</a></li>
        <li><a href="request_admin.php">Просмотр заявок</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="faq.php">О компании</a></li>
        <li><a href="logout.php">Выйти</a></li>
    </ul>
</nav>
<div class="container-dark2">    
    <img src="css/Images/logoDoverie_Orange.svg" alt="" width="300px">
    <h1>Заполните заявку</h1>
    <form action="mail-request.php" method="POST" class="form-send" id="form_sending">
                <div class="form-title">Заявка<br></div><p>Заполнив эту заявку, вы быстрее получите привлекательные предложения, которые подойдут именно вам.</p>
                <input id="check_bot" name="second_name" type="text" vvagflue="" />
                <div class="grid">
                    <div class="form-group">
                        <img src="css/Images/smile.svg" alt="" width="75px">
                    </div>
                    <div class="form-group">                      
                        <input name="user_name" maxlength="32" id="form-name" type="text" required>
                        <span class="ph">Имя</span>
                    </div>                
                    <div class="form-group">                    
                        <input name="user_surname" maxlength="32" id="form-surname" type="text" required>
                        <span class="ph">Фамилия</span>
                    </div>
                    <div class="form-group">                    
                        <input name="user_phone" maxlength="12" id="form-phone" type="text" required>
                        <span class="ph">Телефон</span>
                    </div>
                    <div class="form-group">                    
                        <input name="user_email" maxlength="164" id="form-email" type="text"required>
                        <span class="ph">Email</span>
                    </div>
                    <div class="form-group">
                        <img src="css/Images/house.svg" alt="" width="75px">
                    </div>
                    <div class="form-group">                    
                        <select name="type" required>
                            <option disabled selected>Выберите тип</option>
                            <option >Любой</option>
                            <option >Панельный</option>
                            <option >Кирпичный</option>
                            <option >Монолитный</option>
                            <option >Деревянный</option>
                        </select>                         
                    </div>
                    <div class="form-group">                    
                        <select name="room" required>
                            <option disabled selected>Количество комнат</option>
                            <option >Любое</option>
                            <option >1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option >5 и больше</option>
                        </select>
                    </div>
                    <div class="form-group">                    
                        <select name="area" required>
                            <option disabled selected>Район</option>
                            <option >Любой</option>
                            <option >Мет. завод</option>
                            <option >Центр</option>
                            <option >Вокзал</option>
                            <option >Маш. завод</option>
                            <option >Укажу в коментарии</option>
                        </select>
                    </div>
                    <div class="form-group">                    
                        <select name="floor" required>
                            <option disabled selected>Этаж</option>
                            <option >Любой</option>
                            <option >1-3</option>
                            <option >4-6</option>
                            <option >7-10</option>
                            <option >11 и выше</option>
                            <option >Укажу в коментарии</option>
                        </select>
                    </div>
                    <div class="form-group">                    
                        <textarea name="user_text" maxlength="255" id="form-text" type="text" placeholder="Можете написать дополнительную информацию (комментарий)"></textarea>  
                    </div>                   
                </div>
                <button type="submit" class="button" id="button-send" name="btn_sending" onclick="valid(document.getElementById('form_sending'))">Отправить</button>
                <input name="accept" type="checkbox">Нажимая на кнопку «Отправить», я даю согласие на обработку персональных данных<br> 
    </form>
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
        <li><a href="request.php" class="current">Заявка</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="faq.php">О компании</a></li>
        <li><a href="login.php">Авторизация</a></li>
    </ul>
</nav>
<div class="container-dark2">    
    <img src="css/Images/logoDoverie_Orange.svg" alt="" width="300px">
    <h1>Заполните заявку</h1>
    <form action="mail-request.php" method="POST" class="form-send" id="form_sending">
                <div class="form-title">Заявка<br></div><p>Заполнив эту заявку, вы быстрее получите привлекательные предложения, которые подойдут именно вам.</p>
                <input id="check_bot" name="second_name" type="text" vvagflue="" />
                <div class="grid">
                    <div class="form-group">
                        <img src="css/Images/smile.svg" alt="" width="75px">
                    </div>
                    <div class="form-group">                      
                        <input name="user_name" maxlength="32" id="form-name" type="text" required>
                        <span class="ph">Имя</span>
                    </div>                
                    <div class="form-group">                    
                        <input name="user_surname" maxlength="32" id="form-surname" type="text" required>
                        <span class="ph">Фамилия</span>
                    </div>
                    <div class="form-group">                    
                        <input name="user_phone" maxlength="12" id="form-phone" type="text" required>
                        <span class="ph">Телефон</span>
                    </div>
                    <div class="form-group">                    
                        <input name="user_email" maxlength="164" id="form-email" type="text"required>
                        <span class="ph">Email</span>
                    </div>
                    <div class="form-group">
                        <img src="css/Images/house.svg" alt="" width="75px">
                    </div>
                    <div class="form-group">                    
                        <select name="type" required>
                            <option disabled selected>Выберите тип</option>
                            <option >Любой</option>
                            <option >Панельный</option>
                            <option >Кирпичный</option>
                            <option >Монолитный</option>
                            <option >Деревянный</option>
                        </select>                         
                    </div>
                    <div class="form-group">                    
                        <select name="room" required>
                            <option disabled selected>Количество комнат</option>
                            <option >Любое</option>
                            <option >1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option >5 и больше</option>
                        </select>
                    </div>
                    <div class="form-group">                    
                        <select name="area" required>
                            <option disabled selected>Район</option>
                            <option >Любой</option>
                            <option >Мет. завод</option>
                            <option >Центр</option>
                            <option >Вокзал</option>
                            <option >Маш. завод</option>
                            <option >Укажу в коментарии</option>
                        </select>
                    </div>
                    <div class="form-group">                    
                        <select name="floor" required>
                            <option disabled selected>Этаж</option>
                            <option >Любой</option>
                            <option >1-3</option>
                            <option >4-6</option>
                            <option >7-10</option>
                            <option >11 и выше</option>
                            <option >Укажу в коментарии</option>
                        </select>
                    </div>
                    <div class="form-group">                    
                        <textarea name="user_text" maxlength="255" id="form-text" type="text" placeholder="Можете написать дополнительную информацию (комментарий)"></textarea>                  
                    </div>
                </div>
                <button type="submit" class="button" id="button-send" name="btn_sending" onclick="valid(document.getElementById('form_sending'))">Отправить</button>
                <input name="accept" type="checkbox">Нажимая на кнопку «Отправить», я даю согласие на обработку персональных данных<br>
    </form>
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