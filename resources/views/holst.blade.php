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
            <li><a href="#">Фотохолсты</a></li>
            <!--<li class="disabled">Gene Splicing</li>-->
            <!--<li>-->
                <!--<span class="show-for-sr">Current: </span> Cloning-->
            <!--</li>-->
        </ul>
    </nav>
</div>

<div class="row">
    <form action="/order" method="post">
        @csrf
    <div class="medium-6 columns">
        <div class="main-product-image">
            <img id="main-product-image" class="thumbnail" src="/image/holst/1.jpg" >
        </div>
        <!--<img id="main-product-image" class="thumbnail" src="https://placehold.it/650x350">-->
        <div class="row small-up-4">
            <div class="column product-thumbs">
                <img class="thumbnail sim-thumb mini-product-img" src="/image/holst/1.jpg" data-image="/image/holst/1.jpg">
            </div>
            <div class="column product-thumbs">
                <img class="thumbnail sim-thumb mini-product-img" src="/image/holst/2.jpg" data-image="/image/holst/2.jpg">
            </div>
            <div class="column product-thumbs">
                <img class="thumbnail sim-thumb mini-product-img" src="/image/holst/3.jpg" data-image="/image/holst/3.jpg">
            </div>
            <div class="column product-thumbs">
                <img class="thumbnail sim-thumb mini-product-img" src="/image/holst/4.jpg" data-image="/image/holst/4.jpg">
            </div>
            <!--<div class="column">-->
                <!--<img class="thumbnail sim-thumb" src="https://placehold.it/250x200">-->
            <!--</div>-->
        </div>
    </div>

    <div class="medium-6 large-5 columns">
        <h3>Печать фото на холсте</h3>
        <!--<p>Что входит в цену:</p>-->
        <p>
            <ol class="menu vertical">
                <li>- печать на холсте из хлопка</li>
                <li>- покрытие изделия защитно-декоративным лаком</li>
                <li>- изготовление деревянного подрамника из сосны</li>
                <li>- галерейная натяжка холста на подрамник</li>
            </ol>
        </p>
        <label>Выберите размер
            <select id="size" name="size">
                <option value="30x40 см" data-price="1000">30x40 см</option>
                <option value="40x50 см" data-price="1200">40x50 см</option>
                <option value="50x60 см" data-price="1500">50x60 см</option>
                <option value="50x70 см" data-price="2000">50x70 см</option>
            </select>
        </label>

        <input type="hidden" id="description" name="description" value="Печать фото на холсте">
        <input type="hidden" id="price" name="price" value="1000">

        <ul class="pricing-table">
            <!--<li class="title">Цена</li>-->
            <li class="price">1000 Руб.</li>
            <!--<li class="description">Размер</li>-->
            <!--<li>30x40 см</li>-->
            <!--<li>7GB of Power</li>-->
            <!--<li><a href="#" class="button large expanded">Заказать</a></li>-->
        </ul>



        <button type="submit" href="#" class="button large expanded">Заказать</button>
        <!--<div class="small secondary expanded button-group">-->
            <!--<a class="button">Facebook</a>-->
            <!--<a class="button">Twitter</a>-->
            <!--<a class="button">Yo</a>-->
        <!--</div>-->
    </div>

    </form>
</div>


<!--<div class="column row">-->
    <!--<hr>-->
    <!--<ul class="tabs" data-tabs id="example-tabs">-->
        <!--<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Reviews</a></li>-->
        <!--<li class="tabs-title"><a href="#panel2">Similar Products</a></li>-->
    <!--</ul>-->
    <!--<div class="tabs-content" data-tabs-content="example-tabs">-->
        <!--<div class="tabs-panel is-active" id="panel1">-->
            <!--<h4>Reviews</h4>-->
            <!--<div class="media-object stack-for-small">-->
                <!--<div class="media-object-section">-->
                    <!--<img class="thumbnail" src="https://placehold.it/200x200">-->
                <!--</div>-->
                <!--<div class="media-object-section">-->
                    <!--<h5>Mike Stevenson</h5>-->
                    <!--<p>I'm going to improvise. Listen, there's something you should know about me... about inception. An-->
                        <!--idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It-->
                        <!--can grow to define or destroy you.</p>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="media-object stack-for-small">-->
                <!--<div class="media-object-section">-->
                    <!--<img class="thumbnail" src="https://placehold.it/200x200">-->
                <!--</div>-->
                <!--<div class="media-object-section">-->
                    <!--<h5>Mike Stevenson</h5>-->
                    <!--<p>I'm going to improvise. Listen, there's something you should know about me... about inception. An-->
                        <!--idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It-->
                        <!--can grow to define or destroy you</p>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="media-object stack-for-small">-->
                <!--<div class="media-object-section">-->
                    <!--<img class="thumbnail" src="https://placehold.it/200x200">-->
                <!--</div>-->
                <!--<div class="media-object-section">-->
                    <!--<h5>Mike Stevenson</h5>-->
                    <!--<p>I'm going to improvise. Listen, there's something you should know about me... about inception. An-->
                        <!--idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It-->
                        <!--can grow to define or destroy you</p>-->
                <!--</div>-->
            <!--</div>-->
            <!--<label>-->
                <!--My Review-->
                <!--<textarea placeholder="None"></textarea>-->
            <!--</label>-->
            <!--<button class="button">Submit Review</button>-->
        <!--</div>-->
        <!--<div class="tabs-panel" id="panel2">-->
            <!--<div class="row medium-up-3 large-up-5">-->
                <!--<div class="column">-->
                    <!--<img class="thumbnail" src="https://placehold.it/350x200">-->
                    <!--<h5>Other Product-->
                        <!--<small>$22</small>-->
                    <!--</h5>-->
                    <!--<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac-->
                        <!--euismod semper, magna diam.</p>-->
                    <!--<a href="#" class="button hollow tiny expanded">Buy Now</a>-->
                <!--</div>-->
                <!--<div class="column">-->
                    <!--<img class="thumbnail" src="https://placehold.it/350x200">-->
                    <!--<h5>Other Product-->
                        <!--<small>$22</small>-->
                    <!--</h5>-->
                    <!--<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac-->
                        <!--euismod semper, magna diam.</p>-->
                    <!--<a href="#" class="button hollow tiny expanded">Buy Now</a>-->
                <!--</div>-->
                <!--<div class="column">-->
                    <!--<img class="thumbnail" src="https://placehold.it/350x200">-->
                    <!--<h5>Other Product-->
                        <!--<small>$22</small>-->
                    <!--</h5>-->
                    <!--<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac-->
                        <!--euismod semper, magna diam.</p>-->
                    <!--<a href="#" class="button hollow tiny expanded">Buy Now</a>-->
                <!--</div>-->
                <!--<div class="column">-->
                    <!--<img class="thumbnail" src="https://placehold.it/350x200">-->
                    <!--<h5>Other Product-->
                        <!--<small>$22</small>-->
                    <!--</h5>-->
                    <!--<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac-->
                        <!--euismod semper, magna diam.</p>-->
                    <!--<a href="#" class="button hollow tiny expanded">Buy Now</a>-->
                <!--</div>-->
                <!--<div class="column">-->
                    <!--<img class="thumbnail" src="https://placehold.it/350x200">-->
                    <!--<h5>Other Product-->
                        <!--<small>$22</small>-->
                    <!--</h5>-->
                    <!--<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac-->
                        <!--euismod semper, magna diam.</p>-->
                    <!--<a href="#" class="button hollow tiny expanded">Buy Now</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->


@include('footer')

<script src="/js/product.js"></script>
<script src="/js/options.js"></script>

</body>
</html>