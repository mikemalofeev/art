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

    @if (!$is_submited)
    <form class="callout text-center" action="/submit" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="data" name="data" data-options="{{ $options }}" data-description="{{ $description }}" data-description="{{ $price }}">
        <h3>Заполните форму заказа</h3>
        <div class="floated-label-wrapper">
            <label class="show" for="order">Ваш заказ</label>
            <input type="text" id="order" name="order" value="{{ $description }} {{ $options }}" readonly placeholder="Укажите название, размеры и др.">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="price">Стоимость, руб.</label>
            <input type="text" id="price" name="price" value="{{ $price }}" readonly placeholder="Стоимость, руб.">
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="full-name">Ваше имя</label>
            <input type="text" id="full-name" name="full-name" placeholder="Ваше имя" required>
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="phone">Номер телефона</label>
            <input type="text" id="phone" name="telephone" placeholder="Номер телефона" required>
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="address">Адрес для доставки</label>
            <input type="text" id="address" name="address" placeholder="Адрес для доставки" required>
        </div>
        <div class="floated-label-wrapper">
            <label class="show" for="message">Комментарии к заказу</label>
            <textarea name="message" id="message" rows="3" placeholder="Комментарии к заказу. Здесь можно оставить ссылки на ваши фотографии."></textarea>
        </div>
        {{--<div class="floated-label-wrapper">--}}
            {{--<span style="float: left;">--}}
                {{--Загрузить файлы--}}
                {{--<input type="file" multiple="multiple" id="FileUpload" name="FileUpload[]" style="width:initial;">--}}
            {{--</span>--}}
        {{--</div>--}}
        <input class="button expanded" type="submit" value="Сделать заказ">
    </form>
    @else
        <div style="height: 350px;font-size: 18px;">
            Спасибо, что сделали у нас заказ!<br /><br />
            После обработки заказа с Вами свяжется наш менеджер.<br /><br />
            Для начала выполнения заказа требуется осуществить оплату заказа<br /><br />
            <a href="/payment">Перейти к оплате</a><br /><br />
            {{--<a href="/contacts">Наши контакты</a>--}}
        </div>
    @endif

</div>

@include('footer')

<script src="/js/order.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
<script src="/js/jquery.maskedinput.js"></script>

</body>
</html>
