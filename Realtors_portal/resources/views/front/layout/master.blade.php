<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='vi'>
<head>

    <base href="{{asset('/')}}">

    <meta charset='utf-8'/>
    <meta content='width=device-width,minimum-scale=1,initial-scale=1' name='viewport'/>
    <meta content='index,follow,all' name='robots'/>
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700,800|Roboto:400,900"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css" >
    <link rel="stylesheet" href="front/css/nivo-slider.css" >
    <link type="text/css" rel="stylesheet" href="front/css/lightslider.css"/>
    <link async type='text/css' rel='stylesheet' href="front/css/style.css" />
    <title>@yield('title') | Realtors Portal</title>
    <meta name="description" content="" />
</head>
<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="flex-bw">
                <p class="ifor-top hide767">
                    <span><i class="fas fa-phone clyellow" style="margin-right: 5px;"></i> 0945 518 538</span>
                    <span style="margin: 0 10px;"> | </span>
                    <span><i class="fas fa-envelope clyellow" style="margin-right: 5px;"></i> realtors@portal.com.vn</span>
                </p>
                <p class="social-top">
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </p>
            </div>
        </div>
    </div>
    <div class="header-bottom hide991">
        <div class="container">
            <div class="flex-bw">
                <div class="logo">
                    <a href="index.html" tppabs="http://demo02.123corp.com.vn/thanhhan/index.html"><img src="front/img/logo.png" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/logo.png"></a>
                </div>
                <div class="main-menu">
                    <ul class="ul-main-menu">
                        <li class="{{ (request()->segment(1) == '') ? 'active' : ''}}"><a href="./" tppabs="http://demo02.123corp.com.vn/thanhhan/index.html">TRANG CHỦ</a></li>
                        <li class="{{ (request()->segment(1) == 'gioi-thieu') ? 'active' : ''}}"><a href="./gioithieu" tppabs="http://demo02.123corp.com.vn/thanhhan/gioi-thieu.html">GIỚI THIỆU</a></li>
                        <li class="{{ (request()->segment(1) == '') ? 'du-an' : ''}}"><a href="./duan" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an.html">DỰ ÁN</a></li>
                        <li><a href="tin-tuc.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc.html">TIN TỨC</a></li>
                        <li><a href="tuyen-dung.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tuyen-dung.html">NHÀ ĐẤT CHO THUÊ</a></li>
                        <li><a href="lien-he.html" tppabs="http://demo02.123corp.com.vn/thanhhan/lien-he.html">LIÊN HỆ</a></li>
                        <li><a href="#boxsearch" data-toggle="collapse"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
            <div id="boxsearch" class="collapse">
                <div class="clear20"></div>
                <div class="right-form">
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">
			                	<span class="input-group-addon">
			                        <button type="submit">
			                            <span class="glyphicon glyphicon-search"></span>
			                        </button>
			                    </span>
                            <input type="text" class="form-control"  placeholder="Tìm Kiếm" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile show991">
        <div class="container">
            <div class="flex-bw">
                <a href="index.html" tppabs="http://demo02.123corp.com.vn/thanhhan/index.html"><img src="front/img/logo.png" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/logo.png" alt="logo" class="logo-mb"></a>
                <span style="cursor:pointer;display: inline-block;color: #f9ae41;" class="sp-sn"><i class="fas fa-bars fa-2x" onclick="openNav()"></i></span>
                <span style="cursor:pointer;display: inline-block;color: #f9ae41;" class="sp-cn"><i class="fas fa-times fa-2x" onclick="closeNav()"></i></span>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <ul class="menu-mobile">
                <li><a href="index.html" tppabs="http://demo02.123corp.com.vn/thanhhan/index.html">Home</a></li>
                <li><a href="gioi-thieu.html" tppabs="http://demo02.123corp.com.vn/thanhhan/gioi-thieu.html">Giới Thiệu</a></li>
                <li><a href="du-an.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an.html">Dự Án</a></li>
                <li><a href="tin-tuc.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc.html">tin Tức</a></li>
                <li><a href="tuyen-dung.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tuyen-dung.html">Tuyển Dụng</a></li>
                <li><a href="lien-he.html" tppabs="http://demo02.123corp.com.vn/thanhhan/lien-he.html">Liên Hệ</a></li>
                <li><a href="#" data-toggle="collapse" data-target="#showsearch-mb"><i class="fas fa-search" style="margin-right: 5px;"></i> Tìm Kiếm</a></li>
            </ul>
            <div id="showsearch-mb" class="collapse" aria-expanded="true" style="">
                <div id="imaginary_container_mb">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control" placeholder="Tìm Kiếm">
                        <span class="input-group-addon">
		                        <button type="submit">
		                            <span class="glyphicon glyphicon-search"></span>
		                        </button>
		                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{--body here--}}
@yield('body')

<footer>
    <div class="footer-top">
        <div class="clear40"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h4 class="nomargin clwhite text-uppercase bold">REALTORS PORTAL</h4>
                    <div class="clear20"></div>
                    <p class="clwhite">Với tôn chỉ hoạt động: Trọn chữ TÍN, vẹn niềm TIN, chúng tôi đã nỗ lực trở thành kênh tư vấn tin cậy, mang đến cho khách hàng những dự án, sản phẩm đầu tư chất lượng và tiềm năng sinh lời cao nhất.</p>
                    <div class="clear20"></div>
                    <p class="social-ft">
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </p>
                    <div class="clear20 show991"></div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <h4 class="nomargin clwhite text-uppercase bold">LIÊN HỆ</h4>
                    <div class="clear20"></div>
                    <p class="clwhite add-info"><i class="fas fa-map-marker-alt"></i> Tầng 2 (lầu 1) 670 – 672 Đường 3/2, phường 14, Quận 10,</p>
                    <p class="clwhite add-info"><i class="fas fa-phone"></i> <span class="bold">0938 333 768</span></p>
                    <p class="clwhite add-info"><i class="fas fa-envelope"></i> realtors@portal.com.vn</p>
                    <p class="clwhite add-info"><i class="fas fa-globe-americas"></i> www.realtorsportal.com.vn</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="center ncenmb">
                        <h4 class="nomargin clwhite text-uppercase bold">DANH MỤC</h4>
                        <div class="clear20"></div>
                        <p class="ft-link"><a href="gioi-thieu.html" tppabs="http://demo02.123corp.com.vn/thanhhan/gioi-thieu.html" class="clwhite">Giới thiệu</a></p>
                        <p class="ft-link"><a href="du-an.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an.html" class="clwhite">Dự án</a></p>
                        <p class="ft-link"><a href="tin-tuc.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc.html" class="clwhite">Tin tức</a></p>
                        <p class="ft-link"><a href="lien-he.html" tppabs="http://demo02.123corp.com.vn/thanhhan/lien-he.html" class="clwhite">Liên hệ</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear40"></div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="right copyright">Bản quyền website thuộc về Realtors Portal. Thiết kế web bởi HHNA</p>
        </div>
    </div>
</footer>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left" data-original-title="" title="" style="display: inline;"><span class="glyphicon glyphicon-chevron-up"></span></a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js" ></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" ></script>
<script src="front/js/jquery.counterup.min.js" ></script>
<script src="front/js/jquery.nivo.slider.pack.js" ></script>
<script src="front/js/lightslider.js" ></script>
<script src="front/js/main.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".counter").counterUp({
            delay: 10,
            time: 5000,
        });
        /*----------------------------------*/
        var stickyNavTop = $('.main-about-us').offset().top;
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();
            if (scrollTop > stickyNavTop - 1500) {
                $('.main-about-us .tit-pub').addClass('fadein');
                $('.main-about-us .ani-scale').addClass('fadein');
            } else {
                $('.main-about-us .tit-pub').removeClass('fadein');
                $('.main-about-us .ani-scale').removeClass('fadein');
            }
        };
        stickyNav();
        $(window).scroll(function() {
            stickyNav();
        });
        /*----------------------------------*/
        var stickyNavTop2 = $('.main-duannoibat').offset().top;
        var stickyNav2 = function(){
            var scrollTop2 = $(window).scrollTop();
            if (scrollTop2 > stickyNavTop2 - 500) {
                $('.main-duannoibat .tit-pub').addClass('fadein');
                $('.main-duannoibat .ani-scale').addClass('fadein');
            } else {
                $('.main-duannoibat .tit-pub').removeClass('fadein');
                $('.main-duannoibat .ani-scale').removeClass('fadein');
            }
        };
        stickyNav2();
        $(window).scroll(function() {
            stickyNav2();
        });
        /*----------------------------------*/
        var stickyNavTop3 = $('.main-doitac').offset().top;
        var stickyNav3 = function(){
            var scrollTop3 = $(window).scrollTop();
            if (scrollTop3 > stickyNavTop3 - 500) {
                $('.main-doitac .tit-pub').addClass('fadein');
            } else {
                $('.main-doitac .tit-pub').removeClass('fadein');
            }
        };
        stickyNav3();
        $(window).scroll(function() {
            stickyNav3();
        });
        /*----------------------------------*/
        var stickyNavTop4 = $('.main-tintuc').offset().top;
        var stickyNav4 = function(){
            var scrollTop4 = $(window).scrollTop();
            if (scrollTop4 > stickyNavTop4 - 500) {
                $('.main-tintuc .tit-pub').addClass('fadein');
            } else {
                $('.main-tintuc .tit-pub').removeClass('fadein');
            }
        };
        stickyNav4();
        $(window).scroll(function() {
            stickyNav4();
        });
        /*----------------------------------*/
        var stickyNavTop5 = $('.main-connect').offset().top;
        var stickyNav5 = function(){
            var scrollTop5 = $(window).scrollTop();
            if (scrollTop5 > stickyNavTop5 - 700) {
                $('.main-connect').addClass('fadein');
            } else {
                $('.main-connect').removeClass('fadein');
            }
        };
        stickyNav5();
        $(window).scroll(function() {
            stickyNav5();
        });
    });
</script>
</body>
</html>

