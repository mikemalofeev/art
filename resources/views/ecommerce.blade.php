<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('meta')

    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>

</head>
<body>



<!--<div class="top-bar">-->
    <!--<div class="top-bar-left">-->
        <!--<ul class="menu">-->
            <!--<li class="menu-text">ПОЛИГРАФ</li>-->
            <!--<li><a href="#">Фотохолсты</a></li>-->
            <!--<li><a href="#">Полиграфия</a></li>-->
            <!--<li><a href="#">Фотосувениры</a></li>-->
        <!--</ul>-->
    <!--</div>-->
    <!--&lt;!&ndash;<div class="top-bar-right">&ndash;&gt;-->
        <!--&lt;!&ndash;<ul class="menu">&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="#">Three</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="#">Four</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="#">Five</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="#">Six</a></li>&ndash;&gt;-->
        <!--&lt;!&ndash;</ul>&ndash;&gt;-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--</div>-->

@include('header')

<!--<br>-->

<div class="orbit" role="region" aria-label="Фото" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous button-grey" aria-label="previous"><span class="show-for-sr">Предыдущий</span>&#9664;</button>
        <button class="orbit-next button-grey" aria-label="next"><span class="show-for-sr">Следующий</span>&#9654;</button>
        <li class="orbit-slide is-active">
            <a href="/holst"><img class="banner-img" src="/image/banner1.jpg"></a>
        </li>
        <li class="orbit-slide">
            <a href="/holst"><img class="banner-img" src="/image/4.jpg"></a>
        </li>
        <li class="orbit-slide">
            <a href="/holst"><img class="banner-img" src="/image/1.jpg"></a>
        </li>
        <li class="orbit-slide">
            <a href="/holst"><img class="banner-img" src="/image/2.jpg"></a>
        </li>
        <li class="orbit-slide">
            <a href="/holst"><img class="banner-img" src="/image/3.jpg"></a>
        </li>
    </ul>
</div>

<!--<div class="row column text-center">-->
    <!--<h2>Наши работы</h2>-->
    <!--<hr>-->
<!--</div>-->

<br>

<div class="row column">
    <div class="callout primary special-weeks">
        <h3>Популярные товары</h3>
    </div>
</div>
<!--<hr>-->

<div class="row small-up-2 large-up-4">
    <div class="column">
        <a href="/holst">
            <img class="thumbnail product-img" src="/image/products/photo.jpg">
        </a>
        <h5>Фото-Холст</h5>
        <p>от 900 руб</p>
        <a href="/holst" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/holst">
            <img class="thumbnail product-img" src="/image/products/kollage.jpg">
        </a>
        <h5>Фото-Коллаж</h5>
        <p>от 1500 руб</p>
        <a href="#" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/holst">
            <img class="thumbnail product-img" src="/image/products/cards.jpg">
        </a>
        <h5>Визитки</h5>
        <p>от 450 руб</p>
        <a href="#" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/holst">
            <img class="thumbnail product-img" src="/image/products/stickers.jpg">
        </a>
        <h5>Наклейки</h5>
        <p>от 800 руб</p>
        <a href="#" class="button expanded">Выбрать</a>
    </div>
</div>

{{--<hr>--}}

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

<!--<hr>-->


<!--<div class="row column">-->
    <!--<div class="callout primary">-->
        <!--<h3>Специальные предложения этой недели.</h3>-->
    <!--</div>-->
<!--</div>-->
<!--<hr>-->
<!--<div class="row column text-center">-->
    <!--<h2>Другие наши работы</h2>-->
    <!--<hr>-->
<!--</div>-->
<!--<div class="row small-up-2 medium-up-3 large-up-6">-->
    <!--<div class="column">-->
        <!--<img class="thumbnail" src="https://placehold.it/300x400">-->
        <!--<h5>Nulla At Nulla Justo, Eget</h5>-->
        <!--<p>$400</p>-->
        <!--<a href="#" class="button small expanded hollow">Заказать</a>-->
    <!--</div>-->
    <!--<div class="column">-->
        <!--<img class="thumbnail" src="https://placehold.it/300x400">-->
        <!--<h5>Nulla At Nulla Justo, Eget</h5>-->
        <!--<p>$400</p>-->
        <!--<a href="#" class="button small expanded hollow">Заказать</a>-->
    <!--</div>-->
    <!--<div class="column">-->
        <!--<img class="thumbnail" src="https://placehold.it/300x400">-->
        <!--<h5>Nulla At Nulla Justo, Eget</h5>-->
        <!--<p>$400</p>-->
        <!--<a href="#" class="button small expanded hollow">Заказать</a>-->
    <!--</div>-->
    <!--<div class="column">-->
        <!--<img class="thumbnail" src="https://placehold.it/300x400">-->
        <!--<h5>Nulla At Nulla Justo, Eget</h5>-->
        <!--<p>$400</p>-->
        <!--<a href="#" class="button small expanded hollow">Заказать</a>-->
    <!--</div>-->
    <!--<div class="column">-->
        <!--<img class="thumbnail" src="https://placehold.it/300x400">-->
        <!--<h5>Nulla At Nulla Justo, Eget</h5>-->
        <!--<p>$400</p>-->
        <!--<a href="#" class="button small expanded hollow">Заказать</a>-->
    <!--</div>-->
    <!--<div class="column">-->
        <!--<img class="thumbnail" src="https://placehold.it/300x400">-->
        <!--<h5>Nulla At Nulla Justo, Eget</h5>-->
        <!--<p>$400</p>-->
        <!--<a href="#" class="button small expanded hollow">Заказать</a>-->
    <!--</div>-->
<!--</div>-->
<!--<hr>-->
<!--<div class="row">-->
    <!--<div class="medium-4 columns">-->
        <!--<h4>Top Products</h4>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="medium-4 columns">-->
        <!--<h4>Top Products</h4>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="medium-4 columns">-->
        <!--<h4>Top Products</h4>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="media-object">-->
            <!--<div class="media-object-section">-->
                <!--<img class="thumbnail" src="https://placehold.it/100x100">-->
            <!--</div>-->
            <!--<div class="media-object-section">-->
                <!--<h5>Nunc Eu Ullamcorper Orci</h5>-->
                <!--<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->



@include('footer')

</body>
</html>