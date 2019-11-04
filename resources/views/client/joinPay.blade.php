<!DOCTYPE html>
<html lang="zh-cn">
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
<div class="pages section animated zoomIn">
    <div class="container">
        <div class="pages-head">
            <h3>创建独家活动</h3>
        </div>
        <div class="contact-us">
            <div class="row">
                <div class="col s12">
                    <!DOCTYPE html>
                    <html lang="zh-cn">
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

                    <div class="pages section animated zoomIn">
                        <div class="container">
                            <div class="blog-single">
                                <div class="profile">
                                    <img src="{{$activity->img}}" >
                                </div>
                                <h5>{{$activity->publishUser->nickname}}</h5>
                                <div class="content-details">
                                    {{$activity->content}}
                                </div>
                                <ul>
                                    <li>
                                        <div class="date">
                                            <strong>日期</strong> <span><i class="fa fa-calendar"></i>{{$activity->start_at}}</span> 到 <span>{{$activity->end_at}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <strong>联系</strong>
                                        <p>023-63646566</p>
                                    </li>
                                    <li>
                                        <strong>地址</strong>
                                        <p>{{$activity->address}}</p>
                                    </li>
                                    <li>
                                        <strong>分销</strong>
                                        <p>金额:{{$activity->share_num}}分</p>
                                    </li>
                                </ul>

                                <button id="fat-btn" class="btn btn-primary" data-loading-text="去支付"
                                        type="button"> 去支付(支付之后上线)
                                </button>
                                <script>
                                    var btn =  document.getElementById('fat-btn');
                                    btn.onclick = function ()
                                    {
                                        alert('支付尚未对接')
                                    }
                                </script>
                            </div>
                        </div>
                    </div>


                    </head>
                    <!-- scripts -->

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

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</head>
<!-- scripts -->

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
