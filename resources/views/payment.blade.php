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

    <br />
    <div style="height: 350px;font-size: 18px;">
        <ul class="" style="list-style-type: none;">
            <li>✓ Ссылка для оплаты через интернет. <a href="https://money.yandex.ru/to/410012566285571">Оплатить &raquo;</a></li>
        </ul>
        {{--Спасибо, что сделали у нас заказ!<br /><br />--}}
        {{--После обработки заказа с Вами свяжется наш менеджер.<br /><br />--}}
        {{--Для начала выполнения заказа необходимо произвести оплату. <a href="/payment">Оплатить &raquo;</a><br /><br />--}}
        {{--<a href="/contacts">Наши контакты</a>--}}
    </div>

    {{--<div style="height: 350px;font-size: 18px;">--}}

        {{--<iframe src="https://money.yandex.ru/quickpay/shop-widget?writer=seller&targets=%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0&targets-hint=&default-sum=&button-text=11&hint=&successURL=&quickpay=shop&account=410012566285571" width="100%" height="224" frameborder="0" allowtransparency="true" scrolling="no"></iframe>--}}
    {{--</div>--}}

</div>

@include('footer')

<script src="/js/order.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
<script src="/js/jquery.maskedinput.js"></script>

</body>
</html>
