<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ПолиГраф | Печать на холсте</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="/css/ecommerce.css">
    <link rel="stylesheet" href="/css/order.css">
</head>
<body>

<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text"><a href="/">ПОЛИГРАФ</a></li>
                <!--<li class="has-submenu">-->
                    <!--<a href="#">One</a>-->
                    <!--<ul class="submenu menu vertical" data-submenu>-->
                        <!--<li><a href="#">One</a></li>-->
                        <!--<li><a href="#">Two</a></li>-->
                        <!--<li><a href="#">Three</a></li>-->
                    <!--</ul>-->
                <!--</li>-->
                <li><a href="/holst">Фотохолсты</a></li>
                <li><a href="#">Полиграфия</a></li>
                <li><a href="#">Фотосувениры</a></li>
            </ul>
        </div>
        <!--<div class="top-bar-right">-->
            <!--<ul class="menu">-->
                <!--<li><input type="search" placeholder="Search"></li>-->
                <!--<li>-->
                    <!--<button type="button" class="button">Search</button>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->
    </div>
</div>

<br>

<div class="column row">
    <form class="callout text-center" action="/submit" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Заполните форму и загрузите файлы</h3>
        <div class="floated-label-wrapper">
            <label class="show" for="order">Ваше заказ</label>
            <input type="text" id="order" name="order" value="Холст 20x30 см" readonly="readonly">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="price">Стоимость</label>
            <input type="text" id="price" name="price" value="1000 Руб." readonly="readonly">
        </div>
        <div class="floated-label-wrapper">
            <label for="full-name">Ваше имя</label>
            <input type="text" id="full-name" name="full-name" placeholder="Ваше имя">
        </div>
        <div class="floated-label-wrapper">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="floated-label-wrapper">
            <label for="phone">Номер телефона</label>
            <input type="text" id="phone" name="telephone" placeholder="Номер телефона">
        </div>
        <div class="floated-label-wrapper">
            <label for="address">Адрес для доставки</label>
            <input type="text" id="address" name="address" placeholder="Адрес для доставки">
        </div>
        <div class="floated-label-wrapper">
            <label for="message">Комментарии к заказу</label>
            <textarea name="message" id="message" rows="12" placeholder="Описание заказа"></textarea>
        </div>
        <div class="floated-label-wrapper">
            <span style="float: left;">
                Загрузить файлы
                <input type="file" id="FileUpload" name="FileUpload" style="width:initial;">
            </span>
        </div>
        <input class="button expanded" type="submit" value="Сделать заказ">
    </form>


</div>



<div class="callout large secondary">
    <div class="row">
        <div class="large-4 columns">
            <h5>ПолиГраф | Печать на холсте</h5>
            <p>
            <ol class="menu vertical">
                <li>✓ Услуги дизайна ON-LINE (Разработка макетов)</li>
                <li>✓ Печать полиграфии (Листовки, визитки, буклеты, открытки)</li>
                <li>✓ Печать пакетов с логотипом</li>
                <li>✓ Фото-картины на холсте</li>
                <li>✓ Фотосувениры</li>
                <li>✓ ДОСТАВКА по Севастополю БЕСПЛАТНО</li>
                <li>  + 7 (978) 006-89-56</li>
            </ol>
            </p>
        </div>
        <div class="large-3 large-offset-2 columns">
            <ul class="menu vertical">
                <li><a href="#">О нас</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Заказать</a></li>
            </ul>
        </div>
        <div class="large-3 columns">
            <ul class="menu vertical">
                <li><a href="#">Вконтакте</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <!--<li><a href="#">Four</a></li>-->
            </ul>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
<script src="/js/order.js"></script>
</body>
</html>