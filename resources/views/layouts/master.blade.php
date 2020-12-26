<!DOCTYPE html>
<html lang="en">
<head>
    <title>Little Closet</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/responsive.css')}}">
</head>
<body>
<!-- Menu -->
<div class="menu">
    <!-- Search -->
    <div class="menu_search">
        <form action="#" id="menu_search_form" class="menu_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required">
            <button class="menu_search_button"><img src="images/search.png" alt=""></button>
        </form>
    </div>
    <!-- Navigation -->
    @include('layouts.nav')
<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="#">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="images/logo_1.png" alt=""></div>
                        <div>Little Closet</div>
                    </div>
                </a>
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    @foreach($categories as $category)
                        <li><a href="#">{{$category->name}}</a></li>
                    @endforeach
                    <li><a href="#">Home Deco</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                <!-- Search -->
                <div class="header_search">
                    <form action="#" id="header_search_form">
                        <input type="text" class="search_input" placeholder="Search Item" required="required">
                        <button class="header_search_button"><img src="images/search.png" alt=""></button>
                    </form>
                </div>
                <!-- User -->
                <div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
                <!-- Cart -->
                <div class="cart"><a href="cart.blade.php"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
                <!-- Phone -->
                <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                    <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                    <div>+1 912-252-7350</div>
                </div>
            </div>
        </div>
    </header>
    <div class="super_container_inner">
    <div class="super_overlay"></div>
        @yield('content')

   @include('layouts.footer')
    <script src="{{url('assets/js/jquery-3.2.1.min.js')}}"></script>
      <script src="{{url('assets/css/bootstrap-4.1.2/popper.js')}}"></script>
      <script src="{{url('assets/css/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
      <script src="{{url('assets/plugins/greensock/TweenMax.min.js')}}"></script>
      <script src="{{url('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
      <script src="{{url('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
      <script src="{{url('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
      <script src="{{url('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
      <script src="{{url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
      <script src="{{url('assets/plugins/easing/easing.js')}}"></script>
      <script src="{{url('assets/plugins/progressbar/progressbar.min.js')}}"></script>
      <script src="{{url('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
      <script src="{{url('assets/js/custom.js')}}"></script>
       @yield('script')
</body>
</html>