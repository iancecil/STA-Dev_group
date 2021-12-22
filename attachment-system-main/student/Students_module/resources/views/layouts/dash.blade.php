<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Strathmore Attachment System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        Strathmore Attachment System
                    </a>
                </div>

                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                        <a class="no-underline hover:underline" href="/dashboard">Dashboard</a> 
                    @endguest
                </nav>
            </div>
        </header>
        

    <header class="ttr-header">
        <div class="ttr-header-wrapper">
            <!--sidebar menu toggler start -->
            <div class="ttr-toggle-sidebar ttr-material-button">
                <i class="ti-close ttr-open-icon"></i>
                <i class="ti-menu ttr-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->
            <!--logo start -->
            <div class="ttr-logo-box">
                <div>
                    <a href="/" class="ttr-logo">
                        <img alt="" class="ttr-logo-mobile" src="{{asset('assets/images/logo-mobile.png')}}" width="30" height="30">
                        <img alt="" class="ttr-logo-desktop" src="{{asset('assets/images/logo-white.png')}}" width="160" height="27">
                    </a>
                </div>
            </div>
            <!--logo end -->
            <div class="ttr-header-menu">
                <!-- header left menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="/" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                    </li>
                    <li>
                        <a href="/blog" class="ttr-material-button ttr-submenu-toggle">BLOG</a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="/">Profile</a></li>
                                <li><a href="#">My Attachments</a></li>
                                <li><a href="#">Company Vacancies</a></li>
                                <li><a href="#">Chats</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- header left menu end -->
            </div>
            <div class="ttr-header-right ttr-with-seperator">
                <!-- header right menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
                        <div class="ttr-header-submenu noti-menu">
                            <div class="ttr-notify-header">
                                <span class="ttr-notify-text-top">3 New</span>
                                <span class="ttr-notify-text">User Notifications</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                    <li>
                                        <span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
                                        <span class="notification-text">
											<span>Aicha Mbongo</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
                                        <span class="notification-text">
											<a href="#">Faculty Supervisor</a> sent you a message.
										</span>
                                        <span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
                                        <span class="notification-text">
											<span>Sir Kidero</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="{{asset('assets/images/testimonials/pic3.jpg') }}" width="32" height="32"></span></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="user-profile.html">My profile</a></li>
                                <li><a href="#">Chat</a></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="ttr-hide-on-mobile">
                        <a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
                        <div class="ttr-header-submenu ttr-extra-menu">
                            <a href="#">
                                <i class="fa fa-music"></i>
                                <span>Musics</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube-play"></i>
                                <span>Videos</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>Emails</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Reports</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-smile-o"></i>
                                <span>Persons</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-picture-o"></i>
                                <span>Pictures</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="ttr-search-bar">
                <form class="ttr-search-form">
                    <div class="ttr-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
                        <button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
                    </div>
                    <span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
                </form>
            </div>
            <!--header search panel end -->
        </div>
    </header>

        <div>
            @yield('content')
        </div>

     <div>
         @paddleJS
     </div>

        <div>
            @include('layouts.live')
        </div>
        <div>
            @include('layouts.footer')
        </div>

    </div>
</body>
</html>
