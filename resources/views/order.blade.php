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
        <input type="hidden" id="data" name="data" data-options="{{ $options }}" data-description="{{ $description }}" data-description="{{ $price }}">
        <h3>Заполните форму и загрузите файлы</h3>
        <div class="floated-label-wrapper">
            <label class="show" for="order">Ваш заказ</label>
            <input type="text" id="order" name="order" value="{{ $description }} {{ $options }}" placeholder="Ваш заказ">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="price">Стоимость, руб.</label>
            <input type="text" id="price" name="price" value="{{ $price }}">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="full-name">Ваше имя</label>
            <input type="text" id="full-name" name="full-name" placeholder="Ваше имя">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="phone">Номер телефона</label>
            <input type="text" id="phone" name="telephone" placeholder="Номер телефона">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="address">Адрес для доставки</label>
            <input type="text" id="address" name="address" placeholder="Адрес для доставки">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="message">Комментарии к заказу</label>
            <textarea name="message" id="message" rows="12" placeholder="Комментарии к заказу"></textarea>
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
