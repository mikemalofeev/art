<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('meta')

    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>

</head>
<body>

@include('header')

{{--<br>--}}

<div class="row">
<div class="orbit" role="region" aria-label="Фото" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous button-grey" aria-label="previous"><span class="show-for-sr">Предыдущий</span>&#9664;</button>
        <button class="orbit-next button-grey" aria-label="next"><span class="show-for-sr">Следующий</span>&#9654;</button>
        <li class="orbit-slide is-active">
            <a href="/holsts"><img class="banner-img" src="/image/1.jpg"></a>
        </li>
        <li class="orbit-slide">
            <a href="#"><img class="banner-img" src="/image/2.jpg"></a>
        </li>
        <li class="orbit-slide">
            <a href="/products/cards"><img class="banner-img" src="/image/3.jpg"></a>
        </li>
        {{--<li class="orbit-slide">--}}
            {{--<a href="/popart"><img class="banner-img" src="/image/4.jpg"></a>--}}
        {{--</li>--}}
    </ul>
</div>
</div>

{{--<div class="row column text-center">--}}
    {{--<h2>Наши работы</h2>--}}
    {{--<hr>--}}
{{--</div>--}}

<br>

<div class="top-bar row a-grey" style="text-align: center;text-transform: uppercase;">
    <h5 style="margin-top: .5rem;">ПОПУЛЯРНЫЕ ТОВАРЫ</h5>
</div>
<br>
{{--<hr>--}}

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
        <a href="/products/kollage" class="button expanded">Выбрать</a>
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
    <div class="column">
        <a href="/products/puzzle">
            <img class="thumbnail product-img" src="/image/products/puzzle.jpg">
        </a>
        <h5>Фото-пазл <br /> &nbsp;</h5>
        <p>от 1200 руб</p>
        <a href="/products/puzzle" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/magnets">
            <img class="thumbnail product-img" src="/image/products/magnets.jpg">
        </a>
        <h5>Фото-магнитики <br /> &nbsp;</h5>
        <p>от 100 руб</p>
        <a href="/products/magnets" class="button expanded">Выбрать</a>
    </div>

</div>

<hr>

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

{{--<div class="row small-up-2 large-up-4">--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail product-img" src="/image/products/photo.jpg">--}}
        {{--<h5>Фото-Холст</h5>--}}
        {{--<p>от 900 руб</p>--}}
        {{--<a href="#" class="button expanded">Выбрать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail product-img" src="/image/products/kollage.jpg">--}}
        {{--<h5>Фото-Коллаж</h5>--}}
        {{--<p>от 1500 руб</p>--}}
        {{--<a href="#" class="button expanded">Выбрать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail product-img" src="/image/products/cards.jpg">--}}
        {{--<h5>Визитки</h5>--}}
        {{--<p>от 450 руб</p>--}}
        {{--<a href="#" class="button expanded">Выбрать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail product-img" src="/image/products/stickers.jpg">--}}
        {{--<h5>Наклейки</h5>--}}
        {{--<p>от 800 руб</p>--}}
        {{--<a href="#" class="button expanded">Выбрать</a>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<hr>--}}


{{--<div class="row column">--}}
    {{--<div class="callout primary">--}}
        {{--<h3>Специальные предложения этой недели.</h3>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<hr>--}}
{{--<div class="row column text-center">--}}
    {{--<h2>Другие наши работы</h2>--}}
    {{--<hr>--}}
{{--</div>--}}
{{--<div class="row small-up-2 medium-up-3 large-up-6">--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail" src="https://placehold.it/300x400">--}}
        {{--<h5>Nulla At Nulla Justo, Eget</h5>--}}
        {{--<p>$400</p>--}}
        {{--<a href="#" class="button small expanded hollow">Заказать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail" src="https://placehold.it/300x400">--}}
        {{--<h5>Nulla At Nulla Justo, Eget</h5>--}}
        {{--<p>$400</p>--}}
        {{--<a href="#" class="button small expanded hollow">Заказать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail" src="https://placehold.it/300x400">--}}
        {{--<h5>Nulla At Nulla Justo, Eget</h5>--}}
        {{--<p>$400</p>--}}
        {{--<a href="#" class="button small expanded hollow">Заказать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail" src="https://placehold.it/300x400">--}}
        {{--<h5>Nulla At Nulla Justo, Eget</h5>--}}
        {{--<p>$400</p>--}}
        {{--<a href="#" class="button small expanded hollow">Заказать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail" src="https://placehold.it/300x400">--}}
        {{--<h5>Nulla At Nulla Justo, Eget</h5>--}}
        {{--<p>$400</p>--}}
        {{--<a href="#" class="button small expanded hollow">Заказать</a>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<img class="thumbnail" src="https://placehold.it/300x400">--}}
        {{--<h5>Nulla At Nulla Justo, Eget</h5>--}}
        {{--<p>$400</p>--}}
        {{--<a href="#" class="button small expanded hollow">Заказать</a>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<hr>--}}
{{--<div class="row">--}}
    {{--<div class="medium-4 columns">--}}
        {{--<h4>Top Products</h4>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="medium-4 columns">--}}
        {{--<h4>Top Products</h4>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="medium-4 columns">--}}
        {{--<h4>Top Products</h4>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="media-object">--}}
            {{--<div class="media-object-section">--}}
                {{--<img class="thumbnail" src="https://placehold.it/100x100">--}}
            {{--</div>--}}
            {{--<div class="media-object-section">--}}
                {{--<h5>Nunc Eu Ullamcorper Orci</h5>--}}
                {{--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}



@include('footer')

</body>
</html>
