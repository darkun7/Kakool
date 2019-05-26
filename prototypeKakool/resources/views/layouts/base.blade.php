<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/gijgo.min.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/css/style.css">
		@yield('css')
</head>

<body>
  @yield('nav')



  @yield('content')

  @include('includes.footer')
  @yield('js')
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="/js/slick.min.js"></script>
    <script src="/js/gijgo.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="/js/custom.js"></script>
</body>

</html>
