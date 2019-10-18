@php
    $name = "Фото-картины на холсте";
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
        <a href="/products/holst">
            <img class="thumbnail product-img" src="/image/products/holst.jpg">
        </a>
        <h5>Фото на холсте <br /> &nbsp;</h5>
        <p>от 870 руб</p>
        <a href="/products/holst" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/kollage">
            <img class="thumbnail product-img" src="/image/products/kollage.jpg">
        </a>
        <h5>Фото-коллаж на холсте <br /> &nbsp;</h5>
        <p>от 1646 руб</p>
        <a href="#" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/popart">
            <img class="thumbnail product-img" src="/image/products/popart.jpg">
        </a>
        <h5>Фото-картина ПОП АРТ на холсте</h5>
        <p>от 2850 руб</p>
        <a href="/products/popart" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/love">
            <img class="thumbnail product-img" src="/image/products/love.jpg">
        </a>
        <h5>Фото-картина "Love is" на холсте</h5>
        <p>от 870 руб</p>
        <a href="/products/love" class="button expanded">Выбрать</a>
    </div>
</div>

<hr>

<div class="row small-up-2 large-up-4">
    <div class="column">
        <a href="/products/tree">
            <img class="thumbnail product-img" src="/image/products/tree.jpg">
        </a>
        <h5>Родословное дерево 50х90 см на холсте</h5>
        <p>6548 руб</p>
        <a href="/products/tree" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/compositions">
            <img class="thumbnail product-img" src="/image/products/composition.jpg">
        </a>
        <h5>Композиции из нескольких фото-картин на холсте</h5>
        <p>от 3200 руб</p>
        <a href="/compositions" class="button expanded">Выбрать</a>
    </div>

</div>

@include('footer')

</body>
</html>