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
                    <form action="{{ url('/join/addJoin') }}" class="contact-form" id="contact-form" method="post">
                        {{ csrf_field() }}
                        <div class="form-group" id="name-field">
                            <input type="text" class="validate" id="form-name" name="title" placeholder="活动标题" required>
                        </div>
                        <div class="form-group" id="email-field">
                            <input type="text" class="validate" id="form-date" name="start_at" placeholder="活动开始时间" required>
                        </div>
                        <div class="form-group" id="subject-field">
                            <input type="text" class="validate" id="form-subject" name="end_at" placeholder="活动结束时间" required>
                        </div>
                        <div class="form-group" id="address-field">
                            <input type="text" class="validate" id="form-subject" name="address" placeholder="活动地址" required>
                        </div>
                        <div class="form-group">
                            <select class='picker__list-item--selected' name="area_id" id="area_id"  placeholder="活动区域">
                                <option value="1">江北区</option>
                                <option value="2">渝中区</option>
                                <option value="3">渝北区</option>
                                <option value="4">巴南区</option>
                                <option value="5">大渡口</option>
                                <option value="6">九龙坡</option>
                                <option value="7">沙坪坝区</option>
                                <option value="8">南岸区</option>
                            </select>
                        </div>
                        <div class="form-group" id="share-field">
                            <input type="text" class="validate" id="form-subject" name="share_num" placeholder="分享总金额(单位分)" required>
                        </div>

                        <div class="form-group" id="share-field">
                            <input type="text" class="validate" id="form-subject" name="times" placeholder="预计分享次数" required>
                        </div>
                        <div class="form-group" id="share-field">
                            <input type="text" class="validate" id="form-subject" name="img" placeholder="图片地址" required>
                        </div>
                        <div class="form-group" id="message-field">
                            <textarea name="content" id="form-message" cols="30" rows="10" class="materialize-textarea" placeholder="活动内容" required></textarea>
                        </div>

                        <div class="form-group">
                            <button class="button-default" type="submit" id="submit" name="submit">支付费用</button>
                        </div>
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
