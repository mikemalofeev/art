@php
    use Illuminate\Support\Facades\Lang;

    $name = "Рекламная полиграфия";

    //$cards = Lang::get('prices.cards');
    $stickers = Lang::get('prices.stickers');
    //$cups = Lang::get('prices.cups');
    //$packets = Lang::get('prices.packets');
    $calendar = Lang::get('prices.calendar');
    $journal = Lang::get('prices.journal');
@endphp


    <!doctype html>
<html class="no-js" lang="en">
<head>
    @include('meta')

    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>

</head>
<body>

@include('header')

<div class="top-bar row a-grey" style="text-align: center;text-transform: uppercase;">
    <h5 style="margin-top: .5rem;">{{$name}}</h5>
</div>
<br>

<div class="row small-up-2 large-up-4">
{{--    <div class="column">--}}
{{--        <a href="/products/cards">--}}
{{--            <img class="thumbnail product-img" src="/image/products/cards.jpg">--}}
{{--        </a>--}}
{{--        <h5>Визитки <br /> &nbsp;</h5>--}}
{{--        <p>от {{ array_shift($cards) }} руб</p>--}}
{{--        <a href="/products/cards" class="button expanded">Выбрать</a>--}}
{{--    </div>--}}

{{--    <div class="column">--}}
{{--        <a href="/products/cups">--}}
{{--            <img class="thumbnail product-img" src="/image/products/cups.jpg">--}}
{{--        </a>--}}
{{--        <h5>Кружки <br /> &nbsp;</h5>--}}
{{--        <p>от {{ array_shift($cups) }} руб</p>--}}
{{--        <a href="/products/cups" class="button expanded">Выбрать</a>--}}
{{--    </div>--}}
{{--    <div class="column">--}}
{{--        <a href="/products/packets">--}}
{{--            <img class="thumbnail product-img" src="/image/products/packets.jpg">--}}
{{--        </a>--}}
{{--        <h5>Пакеты <br /> &nbsp;</h5>--}}
{{--        <p>от {{ array_shift($packets) }} руб</p>--}}
{{--        <a href="/products/packets" class="button expanded">Выбрать</a>--}}
{{--    </div>--}}
    <div class="column">
        <a href="/products/calendar">
            <img class="thumbnail product-img" src="/image/products/calendar.jpg">
        </a>
        <h5>Фотокалендарь <br /> &nbsp;</h5>
        <p>{{ array_shift($calendar) }} руб</p>
        <a href="/products/calendar" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/journal">
            <img class="thumbnail product-img" src="/image/products/journal.jpg">
        </a>
        <h5>Фото-журнал <br /> &nbsp;</h5>
        <p>{{ array_shift($journal) }} руб</p>
        <a href="/products/journal" class="button expanded">Выбрать</a>
    </div>
    <div class="column">
        <a href="/products/stickers">
            <img class="thumbnail product-img" src="/image/products/stickers.jpg">
        </a>
        <h5>Наклейки <br /> &nbsp;</h5>
        <p>от {{ array_shift($stickers) }} руб</p>
        <a href="/products/stickers" class="button expanded">Выбрать</a>
    </div>
</div>

{{--<hr>--}}

{{--<div class="row small-up-2 large-up-4">--}}
{{--    <div class="column">--}}
{{--        <a href="/products/calendar">--}}
{{--            <img class="thumbnail product-img" src="/image/products/calendar.jpg">--}}
{{--        </a>--}}
{{--        <h5>Фотокалендарь <br /> &nbsp;</h5>--}}
{{--        <p>{{ array_shift($calendar) }} руб</p>--}}
{{--        <a href="/products/calendar" class="button expanded">Выбрать</a>--}}
{{--    </div>--}}
{{--    <div class="column">--}}
{{--        <a href="/products/journal">--}}
{{--            <img class="thumbnail product-img" src="/image/products/journal.jpg">--}}
{{--        </a>--}}
{{--        <h5>Фото-журнал <br /> &nbsp;</h5>--}}
{{--        <p>{{ array_shift($journal) }} руб</p>--}}
{{--        <a href="/products/journal" class="button expanded">Выбрать</a>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<hr>--}}

{{--<div class="row small-up-2 large-up-4">--}}
    {{--<div class="column">--}}
        {{--<a href="/products/magnets">--}}
            {{--<img class="thumbnail product-img" src="/image/products/magnets.jpg">--}}
        {{--</a>--}}
        {{--<h5>Фото-магнитики <br /> &nbsp;</h5>--}}
        {{--<p>от 100 руб</p>--}}
        {{--<a href="/products/magnets" class="button expanded">Выбрать</a>--}}
    {{--</div>--}}

{{--</div>--}}

@include('footer')

</body>
</html>
