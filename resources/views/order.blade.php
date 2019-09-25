<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('meta')
    <link rel="stylesheet" href="/css/order.css">
</head>
<body>

@include('header')

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

@include('footer')

<script src="/js/order.js"></script>
</body>
</html>
