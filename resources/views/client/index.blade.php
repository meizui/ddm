<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>订猫</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="{{ asset('wechat/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/icons/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/icons/css/line-awesome-font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/fakeLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/wechat/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('/wechat/img/favicon.png') }}">
</head>
<body>

<!-- loader -->
<div id="fakeLoader"></div>
<!-- end loader -->

<!-- navbar top -->
<div class="navbar-top">
    <!-- site brand	 -->
    <div class="site-brand">
        <a href="/"><h1><span>订</span>猫</h1></a>
    </div>
</div>
<!-- end navbar top -->

<!-- side nav right-->

<!-- end side nav right-->

<!-- navbar bottom -->
<div class="navbar-bottom">
    <div class="row">
        <div class="col s2">
            <a href="/"><i class="fa fa-home icon-th-large"></i></a>
        </div>
        <div class="col s3">
            <a href="{{ url("/shop/index") }}"><i class="fa fa-dot-circle-o"></i></a>
        </div>
        <div class="col s2">
            <a href="{{ url("/join/index") }}" id="nav-menu"><i class="fa fa-plus"></i></a>
        </div>
        <div class="col s2">
            <a href="{{ url("/good/index") }}"><i class="fa fa-comment-o"></i></a>
        </div>
        <div class="col s3">
            <a href="{{ url("/user/index") }}"><i class="fa fa-user"></i></a>
        </div>/

    </div>
</div>
<!-- end navbar bottom -->



<!-- slider -->
<div class="slider">

    <ul class="slides">
        @foreach( $banner as $b)
            <li>
                <img src="{{$b->img}}" alt="">
                <div class="caption slider-content">
                    <h2>{{ $b->title }}</h2>
                    <h4>{{ $b->title }}</h4>
                    <a class="button-default" href="http://{{ $b->route_url }}">了解更多</a>
                </div>
            </li>
        @endforeach
    </ul>

</div>
<!-- end slider -->


<!-- testimonial -->
<div class="section testimonial bg-second">
    <div class="container">
        <div id="owl-testimonial">
            @foreach( $article as $a)
            <div class="item">
                <i class="fa fa-quote-left"></i>
                <p><a href="{{url('/article/info/id/')}}{{$a->id}}">{{$a->title}}</a></p>
                <h6>{{$a->from}}</h6>

            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end testimonial -->



<!-- features -->
<div class="section features bg-second">

    <div class="container"><h7><span>分享</span>有礼</h7></div>
    <div class="container">
        <div class="row">
            @foreach($activity as $av)
                <div class="col s6">
                    <div class="content">
                        <a href="{{ $av->img }}" data-effect="mfp-newspaper" class="image-popup"><img class="responsive-img" src="{{ $av->img }}" alt="sample image"></a>
                        <div class="col s6"></div>
                        <h5>{{ $av->title }}</h5>
                        <p>123123</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end features -->



<!-- features -->
<div class="section features bg-second">
    <div class="container"><h7><span>强烈</span>推荐</h7></div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="content">
                    <img src="img/gallery1.jpg"  class="responsive-img">
                    <p align="left">这里是简介...</p>
                    <h6 align="left"><a href="">臭豆腐</a></h6>
                    <div class="price " align="left">价格:<span>$28</span><span>浏览:</span><span>12人</span></div>
                    <button class="btn button-default">购买</button>
                </div>
            </div>
            <div class="col s12">
                <div class="content">
                    <img src="img/gallery1.jpg"  class="responsive-img">
                    <p align="left">这里是简介...</p>
                    <h6 align="left"><a href="">臭豆腐</a></h6>
                    <div class="price " align="left">价格:<span>$28</span><span>浏览:</span><span>12人</span></div>
                    <button class="btn button-default">购买</button>
                </div>
            </div>
            <div class="col s12">
                <div class="content">
                    <img src="img/gallery1.jpg"  class="responsive-img">
                    <p align="left">这里是简介...</p>
                    <h6 align="left"><a href="">臭豆腐</a></h6>
                    <div class="price " align="left">价格:<span>$28</span><span>浏览:</span><span>12人</span></div>
                    <button class="btn button-default">购买</button>
                </div>
            </div>
            <div class="col s12">
                <div class="content">
                    <img src="img/gallery1.jpg"  class="responsive-img">
                    <p align="left">这里是简介...</p>
                    <h6 align="left"><a href="">臭豆腐</a></h6>
                    <div class="price " align="left">价格:<span>$28</span><span>浏览:</span><span>12人</span></div>
                    <button class="btn button-default">购买</button>
                </div>
            </div>
            <div class="col s12">
                <div class="content">
                    <img src="img/gallery1.jpg"  class="responsive-img">
                    <p align="left">这里是简介...</p>
                    <h6 align="left"><a href="">臭豆腐</a></h6>
                    <div class="price " align="left">价格:<span>$28</span><span>浏览:</span><span>12人</span></div>
                    <button class="btn button-default">购买</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="about-us-foot">
            <h2><span>兄</span>弟</h2>
            <p>拉到底了!</p>
        </div>
    </div>
</div>
<!-- end footer -->

</head>
<!-- scripts -->
<script src=""></script>
<script src="{{ asset('/wechat/js/jquery.min.js') }}"></script>
<script src="{{ asset('/wechat/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/wechat/js/fakeLoader.min.js') }}"></script>
<script src="{{ asset('/wechat/js/animatedModal.min.js') }}"></script>
<script src="{{ asset('/wechat/js/jquery.filterizr.min.js') }}"></script>
<script src="{{ asset('/wechat/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('/wechat/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/wechat/js/portfolio.js') }}"></script>
<script src="{{ asset('/wechat/js/main.j') }}s"></script>


</body>
</html>
