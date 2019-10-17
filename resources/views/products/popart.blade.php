@php
    $name = "Фото-картина ПОП АРТ на холсте";
    $folder = '/image/popart';
@endphp


<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('meta')
</head>
<body>

@include('header')

<br>

<div class="row columns">
    <nav aria-label="You are here:" role="navigation">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/holsts">Фотохолсты</a></li>
            {{--<li class="disabled">Gene Splicing</li>--}}
            {{--<li>--}}
                {{--<span class="show-for-sr">Current: </span> Cloning--}}
            {{--</li>--}}
        </ul>
    </nav>
</div>

<div class="row">
    <form action="/order" method="post">
        @csrf
    <div class="medium-6 columns">
        <div class="main-product-image">
            <img id="main-product-image" class="thumbnail" src="{{$folder}}/1.jpg" >
        </div>
        {{--<img id="main-product-image" class="thumbnail" src="https://placehold.it/650x350">--}}
        <div class="row small-up-4">
            <div class="column product-thumbs" style="margin-left: 75px;">
                <img class="thumbnail sim-thumb mini-product-img" src="{{$folder}}/1.jpg" data-image="{{$folder}}/1.jpg">
            </div>
            <div class="column product-thumbs">
                <img class="thumbnail sim-thumb mini-product-img" src="{{$folder}}/2.jpg" data-image="{{$folder}}/2.jpg">
            </div>
            <div class="column product-thumbs">
                <img class="thumbnail sim-thumb mini-product-img" src="{{$folder}}/3.jpg" data-image="{{$folder}}/3.jpg">
            </div>
            {{--<div class="column product-thumbs">--}}
                {{--<img class="thumbnail sim-thumb mini-product-img" src="{{$folder}}4.jpg" data-image="{{$folder}}4.jpg">--}}
            {{--</div>--}}
            {{--<div class="column">--}}
                {{--<img class="thumbnail sim-thumb" src="https://placehold.it/250x200">--}}
            {{--</div>--}}
        </div>
    </div>

    <div class="medium-6 large-5 columns">
        <h3>{{$name}}</h3>
        {{--<p>Что входит в цену:</p>--}}
        {{--<p>--}}
            {{--<ol class="menu vertical">--}}
                {{--<li>- отрисовка портрета в стиле поп-арт</li>--}}
                {{--<li>- печать на холсте из хлопка</li>--}}
                {{--<li>- покрытие изделия защитно-декоративным лаком</li>--}}
                {{--<li>- изготовление деревянного подрамника из сосны</li>--}}
                {{--<li>- галерейная натяжка холста на подрамник</li>--}}
            {{--</ol>--}}
        {{--</p>--}}
        {{--<p>--}}
            {{--*При оформлении заказа больше 4000 руб - мы дарим Вам накопительную бонусную карту -5%. Скидка начисляется сразу.--}}
        {{--</p>--}}
        <label>Выберите размер
            <select id="size" name="size">
                <option value="30x40 см" data-price="2850">30x40 см</option>
                <option value="40x40 см" data-price="3550">40x40 см</option>
                <option value="40x60 см" data-price="3850">40x60 см</option>
            </select>
        </label>

        <input type="hidden" id="description" name="description" value="{{$name}}">
        <input type="hidden" id="price" name="price" value="0">

        <ul class="pricing-table">
            {{--<li class="title">Цена</li>--}}
            <li class="price">0 Руб.</li>
            {{--<li class="description">Размер</li>--}}
            {{--<li>30x40 см</li>--}}
            {{--<li>7GB of Power</li>--}}
            {{--<li><a href="#" class="button large expanded">Заказать</a></li>--}}
        </ul>



        <button type="submit" href="#" class="button large expanded">Заказать</button>
        {{--<div class="small secondary expanded button-group">--}}
            {{--<a class="button">Facebook</a>--}}
            {{--<a class="button">Twitter</a>--}}
            {{--<a class="button">Yo</a>--}}
        {{--</div>--}}
    </div>

    </form>
</div>


<div class="column row">
    <hr>
    <ul class="tabs" data-tabs id="example-tabs">
        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Описание</a></li>
        {{--<li class="tabs-title"><a href="#panel2">Similar Products</a></li>--}}
    </ul>

    <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1">
            {{--<h4>Описание</h4>--}}
            <p>
            <ol class="menu vertical">
                <li>- отрисовка портрета в стиле поп-арт</li>
                <li>- печать на холсте из хлопка</li>
                <li>- покрытие изделия защитно-декоративным лаком</li>
                <li>- изготовление деревянного подрамника из сосны</li>
                <li>- галерейная натяжка холста на подрамник</li>
            </ol>
            </p>
            <p>
                *При оформлении заказа больше 4000 руб - мы дарим Вам накопительную бонусную карту -5%. Скидка начисляется сразу.
            </p>
        </div>
    </div>

    <br />
</div>


@include('footer')

<script src="/js/product.js"></script>
<script src="/js/options.js"></script>

</body>
</html>
