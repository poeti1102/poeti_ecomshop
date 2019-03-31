<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Mall Of The Myanmar</title>

        <!-- Icon css link -->
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="/vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="/vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Top Header Area =================-->
        @include('shop.layouts.header')
        <!--================End Top Header Area =================-->
        
        <!--================Menu Area =================-->
        @include('shop.layouts.menu')
        <!--================End Menu Area =================-->
        
        {{-- Content Area --}}
        @yield('main')
        {{-- End Content Area --}}
        
        <!--================Footer Area =================-->
        @include('shop.layouts.footer')
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="/vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="/vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="/js/smoothscroll.js"></script>
        <script src="/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="/vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="/vendors/jquery-ui/jquery-ui.js"></script>
        
        <script src="/js/theme.js"></script>
    </body>
</html>