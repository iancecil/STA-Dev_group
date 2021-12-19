@extends('layouts.dash')

@section('content')
<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- OG -->
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">
    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/typography.css') }}">
    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/assets/images/favicon.png') }}" />


    <!-- PAGE TITLE HERE ============================================= -->
    <title>SOFTWARE DEV TEAM </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/assets.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/vendors/calendar/fullcalendar.css') }}">


    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/dashboard.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ url('/assets/css/color/color-1.css') }}">

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- Left sidebar menu start -->
    <div class="ttr-sidebar">
        <div class="ttr-sidebar-wrapper content-scroll">
            <!-- side menu logo start -->
            <div class="ttr-sidebar-logo">
                <a href="#"><img alt="" src="{{asset('assets/images/logo.png')}}" width="122" height="27"></a>
                <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
                <div class="ttr-sidebar-toggle-button">
                    <i class="ti-arrow-left"></i>
                </div>
            </div>
            <!-- side menu logo end -->
            <!-- sidebar menu start -->
            <nav class="ttr-sidebar-navi">
                <ul>
                    <li>
                        <a href="student(course).html" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-dashboard"></i></span>
                            <span class="ttr-label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="host(review).html" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-user"></i></span>
                            <span class="ttr-label">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="facalty(review).html" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-files"></i></span>
                            <span class="ttr-label">My Attachment</span>
                        </a>
                    </li>
                    <li>
                        <a href="companies(review).html" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-world"></i></span>
                            <span class="ttr-label">Companies vacancies</span>
                        </a>
                    </li>

                    <li class="ttr-seperate"></li>
                </ul>
                <!-- sidebar menu end -->
            </nav>
            <!-- sidebar menu end -->
        </div>
    </div>
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
            <!-- Card -->
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="widget-card widget-bg1">
                        <div class="wc-item">
                            <h4 class="wc-title">
                                Students enrolled 2021
                            </h4>
                            <span class="wc-des">
								All Students
							</span>
                            <span class="wc-stats">
								$<span class="counter">5</span>k
                            </span>
                            <div class="progress wc-progress">
                                <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
                            <span class="wc-number ml-auto">
									88%
								</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="widget-card widget-bg2">
                        <div class="wc-item">
                            <h4 class="wc-title">
                                New Feedbacks
                            </h4>
                            <span class="wc-des">
								Supervisors Review
							</span>
                            <span class="wc-stats counter">
								12 
							</span>
                            <div class="progress wc-progress">
                                <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
                            <span class="wc-number ml-auto">
									56%
								</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="widget-card widget-bg3">
                        <div class="wc-item">
                            <h4 class="wc-title">
                                New Company Vacancies
                            </h4>
                            <span class="wc-des">
								Nice places 
							</span>
                            <span class="wc-stats counter">
								3
							</span>
                            <div class="progress wc-progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
                            <span class="wc-number ml-auto">
									12%
								</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="widget-card widget-bg4">
                        <div class="wc-item">
                            <h4 class="wc-title">
                                Your Classmates
                            </h4>
                            <span class="wc-des">
								Joined lately
							</span>
                            <span class="wc-stats counter">
								21 
							</span>
                            <div class="progress wc-progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
                            <span class="wc-number ml-auto">
									45%
								</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card END -->
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-8 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>How Long I view My Portal</h4>
                        </div>
                        <div class="widget-inner">
                            <canvas id="chart" width="100" height="45"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
                <div class="col-lg-4 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Notifications</h4>
                        </div>
                        <div class="widget-inner">
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
                    </div>
                </div>
                <div class="col-lg-6 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Your Classmates</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="new-user-list">
                                <ul>
                                    <li>
                                        <span class="new-users-pic">
											<img src="{{asset('assets/images/testimonials/pic1.jpg') }}" alt=""/>
										</span>
                                        <span class="new-users-text">
											<a href="#" class="new-users-name">Anna Strong </a>
											<span class="new-users-info">Visual Designer,Google Inc </span>
                                        </span>
                                        <span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
                                    </li>
                                    <li>
                                        <span class="new-users-pic">
											<img src="{{asset('assets/images/testimonials/pic2.jpg') }}" alt=""/>
										</span>
                                        <span class="new-users-text">
											<a href="#" class="new-users-name"> Milano Esco </a>
											<span class="new-users-info">Product Designer, Apple Inc </span>
                                        </span>
                                        <span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
                                    </li>
                                    <li>
                                        <span class="new-users-pic">
											<img src="{{asset('assets/images/testimonials/pic1.jpg') }}" alt=""/>
										</span>
                                        <span class="new-users-text">
											<a href="#" class="new-users-name">Nick Bold  </a>
											<span class="new-users-info">Web Developer, Facebook Inc </span>
                                        </span>
                                        <span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
                                    </li>
                                    <li>
                                        <span class="new-users-pic">
											<img src="{{asset('assets/images/testimonials/pic2.jpg') }}" alt=""/>
										</span>
                                        <span class="new-users-text">
											<a href="#" class="new-users-name">Wiltor Delton </a>
											<span class="new-users-info">Project Manager, Amazon Inc </span>
                                        </span>
                                        <span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
                                    </li>
                                    <li>
                                        <span class="new-users-pic">
											<img src="{{asset('assets/images/testimonials/pic3.jpg') }}" alt=""/>
										</span>
                                        <span class="new-users-text">
											<a href="#" class="new-users-name">Nick Stone </a>
											<span class="new-users-info">Project Manager, Amazon Inc  </span>
                                        </span>
                                        <span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Attachments</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="orders-list">
                                <ul>
                                    <li>
                                        <span class="orders-title">
											<a href="#" class="orders-title-name">Madaraka Primary School</a>
											<span class="orders-info">SBL #02357 | Date 13/12/2021</span>
                                        </span>
                                        <span class="orders-btn">
											<a href="#" class="btn button-sm red">Approved</a>
										</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Basic Calendar</h4>
                        </div>
                        <div class="widget-inner">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>
    @section('scripts')
    <!-- External JavaScripts -->
    <script src="{{asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{asset('assets/vendors/counter/waypoints-min.js') }}"></script>
    <script src="{{asset('assets/vendors/counter/counterup.min.js') }}"></script>
    <script src="{{asset('assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{asset('assets/vendors/masonry/masonry.js') }}"></script>
    <script src="{{asset('assets/vendors/masonry/filter.js') }}"></script>
    <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{asset('assets/vendors/scroll/scrollbar.min.js') }}"></script>
    <script src="{{asset('assets/js/functions.js') }}"></script>
    <script src="{{asset('assets/vendors/chart/chart.min.js') }}"></script>
    <script src="{{asset('assets/js/admin.js') }}"></script>
    <script src="{{asset('assets/vendors/switcher/switcher.js')}}"></script>
    <script src="{{asset('assets/vendors/calendar/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendors/calendar/fullcalendar.js')}}"></script>
    <script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '2021-12-12',
                navLinks: true, // can click day/week names to navigate views

                weekNumbers: true,
                weekNumbersWithinDays: true,
                weekNumberCalculation: 'ISO',

                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [{
                    title: 'All Day Event',
                    start: '2021-12-01'
                }, {
                    title: 'Long Event',
                    start: '2021-12-07',
                    end: '2021-12-10'
                }, {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2021-12-09T16:00:00'
                }, {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2021-12-16T16:00:00'
                }, {
                    title: 'Conference',
                    start: '2021-12-11',
                    end: '2021-12-13'
                }, {
                    title: 'Meeting',
                    start: '2021-12-12T10:30:00',
                    end: '2021-12-12T12:30:00'
                }, {
                    title: 'Lunch',
                    start: '2021-12-12T12:00:00'
                }, {
                    title: 'Meeting',
                    start: '2021-12-12T14:30:00'
                }, {
                    title: 'Happy Hour',
                    start: '2021-12-12T17:30:00'
                }, {
                    title: 'Dinner',
                    start: '2021-12-12T20:00:00'
                }, {
                    title: 'Birthday Party',
                    start: '2021-12-13T07:00:00'
                }, {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2019-03-28'
                }]
            });

        });
    </script>
    @stop
</body>

@endsection