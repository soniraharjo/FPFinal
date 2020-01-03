
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>MOCO</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/ionicons.css') }}" rel="stylesheet">


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">



</head>
<body>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="oflow-hidden font-9 text-sm-center ptb-sm-5">

                    <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10 list-a-ptb-xs-5">
                        <li><a class="pl-0 pl-sm-10" href="#">Stockholm, Sweden
                                <i class="ion-android-cloud-outline"></i> 15 &#8451;</a></li>
                        <li><a href="#">Thursda, 24 May, 2018</a></li>
                        <li><a href="#">09:00 AM</a></li>
                    </ul>
                    <ul class="float-right float-sm-none font-13 list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5 color-ash">
                        <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="ion-social-google"></i></a></li>
                        <li><a href="#"><i class="ion-social-rss"></i></a></li>
                    </ul>

                </div><!-- top-menu -->
            </div><!-- container -->
        </div><!-- top-header -->

        <div class="middle-header mtb-20 mt-xs-0">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <a class="logo" href="#"><img src="img/logo-moco.jpeg" alt="Logo"></a>
                    </div><!-- col-sm-4 -->

                    <div class="col-sm-8">
                        <!-- Bannner bg -->
                        <div class="banner-area dplay-tbl plr-30 plr-md-10 color-white">
                            <div class="ptb-sm-15 dplay-tbl-cell">
                                <h5>Moco iklan</h5>
                                <h6>Pasng iklan di sini sangat murah meriah</h6>
                            </div><!-- left-area -->

                            <div class="dplay-tbl-cell text-right min-w-100x">
                                <a class="btn-fill-white btn-b-sm plr-10" href="https://www.instagram.com/raharjosoni4/" target="_blank">READ MORE</a>
                            </div><!-- right-area -->
                        </div><!-- banner-area -->
                    </div><!-- col-sm-4 -->

                </div><!-- row -->
            </div><!-- container -->
        </div><!-- top-header -->

        <div class="bottom-menu">
            <div class="container">

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu" id="main-menu">
                    <li class="drop-down"><a href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="drop-down"><a href="{{ url('/bisnis') }}">BUSINESS</a>
                    </li>
                    <li class="drop-down"><a href="{{ url('/sport') }}">SPORT</a>
                    </li>
                    <li class="drop-down"><a href="{{ url('/politik') }}">POLITICS</a>

                    </li>
                    <li class="drop-down"><a href="{{ url('/culture') }}">CULTURE</a>
                    </li>
                    <li class="drop-down"><a href="{{ url('/tech') }}">TECH</i></a>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div><!-- container -->
        </div><!-- bottom-menu -->
    </header>

    @yield('content')

    <footer class="bg-191 pos-relative color-ccc bg-primary pt-50">
        <div class="abs-tblr pt-50 z--1 text-center">
            <div class="h-80 pos-relative"><div class="bg-map abs-tblr opacty-1"></div></div>
        </div>

            <div class="text-center ptb-30">
                <div class="row">
                    <div class="col-sm-3">
                        <a class="mtb-10" href="#"><img src="images/logo-white.png" alt=""></a>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-5">
                        <p class="mtb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat
                            tincidunt mauris semper lorem</p>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-4">
                        <ul class="mtb-10 font-12 list-radial-35 list-li-mlr-3">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="ion-social-google"></i></a></li>
                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                        </ul>
                    </div><!-- col-sm-3 -->
                </div><!-- row -->
            </div><!-- text-center -->
        </div><!-- container -->

    <div class="bg-dark-primary ptb-15 text-left">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <p class="text-md-center font-9 pt-5 mtb-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | web ini dibangun oleh Laravel PWL AMIKOM
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div><!-- col-sm-3 -->

                <div class="col-sm-12 col-md-6">
                    <ul class="mtb-5 font-11 text-md-center text-right list-a-p-5">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Culture</a></li>
                        <li><a href="#">Tech</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </div><!-- col-sm-3 -->
            </div><!-- row -->

        </div><!-- container -->
    </div><!-- container -->
</footer>
<!-- SCIPTS -->

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

<script src="{{ asset('js/tether.min.js') }}"></script>

<script src="{{ asset('js/bootstrap.js') }}"></script>

<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>
