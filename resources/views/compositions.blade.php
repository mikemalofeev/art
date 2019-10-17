@php
    $name = "Композиции из нескольких фото-картин на холсте";
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
        <a href="/products/composition1">
            <img class="thumbnail product-img" src="/image/composition/1.jpg">
        </a>
        <h5>Композиция из 4х фото-картин на холсте</h5>
        <p>4250 руб</p>
        <a href="/products/composition1" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/composition2">
            <img class="thumbnail product-img" src="/image/composition/2.jpg">
        </a>
        <h5>Композиция из 5 фото-картин на холсте</h5>
        <p>6738 руб</p>
        <a href="/products/composition2" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/composition3">
            <img class="thumbnail product-img" src="/image/composition/3.jpg">
        </a>
        <h5>Набор из 4х фото-картин <br>&nbsp;</h5>
        <p>3200 руб</p>
        <a href="/products/composition3" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/composition4">
            <img class="thumbnail product-img" src="/image/composition/4.jpg">
        </a>
        <h5>Композиция из 3х фото-картин на холсте</h5>
        <p>8750 руб</p>
        <a href="/products/composition4" class="button expanded">Выбрать</a>
    </div>

</div>

<hr>

<div class="row small-up-2 large-up-4">
    <div class="column">
        <a href="/products/composition5">
            <img class="thumbnail product-img" src="/image/composition/5.jpg">
        </a>
        <h5>Панно из 4х фото-картин на холсте</h5>
        <p>5713 руб</p>
        <a href="/products/composition5" class="button expanded">Выбрать</a>
    </div>

</div>

@include('footer')

</body>
</html>
