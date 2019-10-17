<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('meta')

    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>

</head>
<body>



{{--<div class="top-bar">--}}
    {{--<div class="top-bar-left">--}}
        {{--<ul class="menu">--}}
            {{--<li class="menu-text">ПОЛИГРАФ</li>--}}
            {{--<li><a href="#">Фотохолсты</a></li>--}}
            {{--<li><a href="#">Полиграфия</a></li>--}}
            {{--<li><a href="#">Фотосувениры</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    {{--&lt;!&ndash;<div class="top-bar-right">&ndash;&gt;--}}
        {{--&lt;!&ndash;<ul class="menu">&ndash;&gt;--}}
            {{--&lt;!&ndash;<li><a href="#">Three</a></li>&ndash;&gt;--}}
            {{--&lt;!&ndash;<li><a href="#">Four</a></li>&ndash;&gt;--}}
            {{--&lt;!&ndash;<li><a href="#">Five</a></li>&ndash;&gt;--}}
            {{--&lt;!&ndash;<li><a href="#">Six</a></li>&ndash;&gt;--}}
        {{--&lt;!&ndash;</ul>&ndash;&gt;--}}
    {{--&lt;!&ndash;</div>&ndash;&gt;--}}
{{--</div>--}}

@include('header')

<br>

<div class="row column">
    <div class="callout primary special-weeks">
        <h3>Композиции из нескольких фото-картин на холсте</h3>
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
        <a href="/products/composition2">
            <img class="thumbnail product-img" src="/image/products/composition.jpg">
        </a>
        <h5>Композиции из нескольких фото-картин на холсте</h5>
        <p>3200 руб</p>
        <a href="/products/composition2" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/composition2">
            <img class="thumbnail product-img" src="/image/products/composition.jpg">
        </a>
        <h5>Композиции из нескольких фото-картин на холсте</h5>
        <p>3200 руб</p>
        <a href="/products/composition2" class="button expanded">Выбрать</a>
    </div>

</div>

<hr>

<div class="row small-up-2 large-up-4">
    <div class="column">
        <a href="/composition2">
            <img class="thumbnail product-img" src="/image/products/composition.jpg">
        </a>
        <h5>Композиции из нескольких фото-картин на холсте</h5>
        <p>3200 руб</p>
        <a href="/composition2" class="button expanded">Выбрать</a>
    </div>

</div>

@include('footer')

</body>
</html>
