@php
    $name = "Рекламная полиграфия";
@endphp


    <!doctype html>
<html class="no-js" lang="en">
<head>
    @include('meta')

    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>

</head>
<body>

@include('header')

<br>

<div class="row column">
    <div class="callout primary special-weeks">
        <h3>{{$name}}</h3>
    </div>
</div>

<div class="row small-up-2 large-up-4">
    <div class="column">
        <a href="/products/cards">
            <img class="thumbnail product-img" src="/image/products/cards.jpg">
        </a>
        <h5>Визитки <br /> &nbsp;</h5>
        <p>от 650 руб</p>
        <a href="/products/cards" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/stickers">
            <img class="thumbnail product-img" src="/image/products/stickers.jpg">
        </a>
        <h5>Наклейки <br /> &nbsp;</h5>
        <p>от 800 руб</p>
        <a href="/products/stickers" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/cups">
            <img class="thumbnail product-img" src="/image/products/cups.jpg">
        </a>
        <h5>Кружки <br /> &nbsp;</h5>
        <p>от 550 руб</p>
        <a href="/products/cups" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/packets">
            <img class="thumbnail product-img" src="/image/products/packets.jpg">
        </a>
        <h5>Пакеты <br /> &nbsp;</h5>
        <p>от 3000 руб</p>
        <a href="/products/packets" class="button expanded">Выбрать</a>
    </div>
</div>

<hr>

<div class="row small-up-2 large-up-4">
    <div class="column">
        <a href="/products/magnets">
            <img class="thumbnail product-img" src="/image/products/magnets.jpg">
        </a>
        <h5>Фото-магнитики <br /> &nbsp;</h5>
        <p>от 100 руб</p>
        <a href="/products/magnets" class="button expanded">Выбрать</a>
    </div>

</div>

@include('footer')

</body>
</html>
