<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Castle</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/reality-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootsnav.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/cubeportfolio.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.transitions.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/range-Slider.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
<link rel="stylesheet" href="https://folk.uib.no/jvi041/player/js/mejs-2.16.3/mejs-skins.css"/>

<link rel="icon" href="{{ asset('images/icon.png') }}">
</head>
<body>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader-->



<!--Header-->
<header class="layout_default">
  <div class="topbar grey">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>{{$foo->tagline}}</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
             @guest
            <li><a href="{{ url('/login') }}"><i class="icon-icons179"></i>Login / Register</a></li>
            @else
            <li><a href="favorite_properties.html"><i class="icon-icons43"></i>Favorites</a></li>
            @php
              $user = Auth::user();
            @endphp

            @if ($user->isAdmin() == true)
            <li><a href="submit_property.html"><i class="icon-icons215"></i>Submit Property</a></li>
            <li><a href="my_properties.html"><i class="icon-icons215"></i>My Property</a></li>
            @endif
            <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
            @endguest

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-upper">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo"><a href="{{ url('/') }}"><img title="Homestate" alt="" src="{{asset("$foo->photo_id$foo->logo")}}"></a></div>
        </div>
        <!--Info Box-->
        <div class="col-md-9 col-sm-12 right">
          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul>
              <li><strong>Phone Number</strong></li>
              <li>{{$foo->phone}}</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul>
              <li><strong>Address</strong></li>
              <li>{{$foo->address}}</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul>
              <li><strong>Email Address</strong></li>
              <li><a href="javascript:void(0)">{{$foo->email}}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="attr-nav">
            @php
                $list = $foo->social;
                $social = json_decode($list);
              @endphp
            <ul class="social_share clearfix">
              <li><a href="{{$social[0]->facebook}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{$social[0]->twitter}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a class="instagram" href="{{$social[0]->instagram}}"><i class="icon-instagram"></i></a></li>
              <li><a class="youtube" href="{{$social[0]->youtube}}"><i class="icon-youtube"></i></a></li>
            </ul>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand sticky_logo" href="{{ url('/') }}"><img src="{{asset("$foo->photo_id$foo->logo2")}}" class="logo" alt=""/></a>
          </div> <!-- End Header Navigation -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                      <li>
                        <div class="row">
                          <div class="col-menu col-md-3">
                            <h5 class="title">PROPERTIES LIST</h5>
                            <div class="content">
                              <ul class="menu-col">
                                <li><a href="{{ url('/listing') }}">Properties List</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-menu col-md-9">
                            <h5 class="title bottom20">PROPERTIES LIST</h5>
                            <div class="row">
                              <div id="nav_slider" class="owl-carousel">
                                @foreach($props as $prop)
                                <div class="item">
                                    @php
                                      $photo = $prop->photo->name;
                                      $photo_id = json_decode($photo);
                                    @endphp
                                  <div class="image bottom15">
                                    <img src="{{$prop->photo_id .''. $photo_id[0]->featured}}" alt="Featured Property" height="158px" width="272px">
                                    <span class="nav_tag yellow text-uppercase">For {{ucfirst($prop->status->name)}}</span>
                                  </div>
                                  <h4><a href="{{ url('/property/'.$prop->id ) }}">{{$prop->title}}</a></h4>
                                  <p>{{$prop->address}}</p>
                                </div>
                                @endforeach
                              </div>
                            </div>
                          </div>
                        </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('/') }}">Our Mission</a></li>
                  <li><a href="{{ url('/') }}">Our Vision</a></li>
                  <li><a href="{{ url('/') }}">Happy Customer</a></li>
                  <li><a href="{{ url('/') }}">FAQ</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('/') }}">FAQ</a></li>
                  <li><a href="{{ url('/') }}">Speak TO Us</a></li>
                </ul>
              </li>

              <li><a href="">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->

@yield('header')


@yield('body')


@yield('slide')


@yield ('search')


@yield ('feature')

@yield ('deals')


@yield ('latest')


@yield('client')


@yield('testimony')

@yield('agent')


<!--Footer-->
<footer class="padding_top footer2">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="javascript:void(0)" class="logo bottom30"><img src="{{asset("$foo->photo_id$foo->logo2")}}"" alt="logo"></a>
          <p class="bottom15">{{$foo->footer}}
          </p>

          <ul class="social_share">
            <li><a href="{{$social[0]->twitter}}" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="{{$social[0]->facebook}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{$social[0]->linkedin}}" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="{{$social[0]->youtube}}" class="youtube"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Search by Area</h4>
          <ul class="area_search">
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Bayonne, New Jersey</a></li>
            <li class="active"><a href="javascript:void(0)"><i class="icon-icons74"></i>Greenville, New Jersey</a></li>
            <li><a href="javascript:void(0)"> <i class="icon-icons74"></i>The Heights, New Jersey</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>West Side, New York</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Upper East Side, New York</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Latest News</h4>
          <div class="media">
            <a class="media-object"><img src="{{asset("images/footer-news1.png")}}" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="{{asset("images/footer-news1.png")}}" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="{{asset("images/footer-news1.png")}}" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Get in Touch</h4>
          <ul class="getin_touch">
            <li><i class="icon-telephone114"></i>{{$foo->phone}}</li>
            <li><a href="javascript:void(0)"><i class="icon-icons142"></i>{{$foo->email}}</a></li>
            <li><a href="javascript:void(0)"><i class="icon-browser2"></i>www.realtyhomes.com</a></li>
            <li><i class="icon-icons74"></i>{{$foo->address}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--CopyRight-->
<div class="copyright index2">
  <div class="copyright_inner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <p>Copyright &copy; 2020 <span>Phouse</span>. All rights reserved.</p>
        </div>
        <div class="col-md-5 text-right">
          <p>Developed By <a href="javascript:void(0)">Perfcreg</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootsnav.js') }}"></script>
<script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/jquery-countTo.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('js/range-Slider.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/selectbox-0.2.min.js') }}"></script>
<script src="{{ asset('js/zelect.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="http://mediaelementjs.com/js/mejs-2.11.2/mediaelement-and-player.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#player1').mediaelementplayer();
});
</script>
</body>
</html>
