<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jthemes.org/demo-admin/minton/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jun 2019 17:55:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Mintone">
    <meta name="author" content="Admin Mintone">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/assets/imgs/favicon.png')}}">
    <title>Ecommerce admin panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('backend/plugins/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('backend/plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('backend/plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('backend/plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Dashboard server Page CSS -->
    <link href="{{asset('backend/assets/css/pages/dashboard-server.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/responsive.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Mintone</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Container1140px -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <div Class="container">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header"> <a class="navbar-brand" href="{{route('main')}}">
                        <!-- Logo icon -->
                        <b>
                            <img src="{{asset('backend/assets/imgs/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('backend/assets/imgs/logo-light-icon.png')}}" alt="homepage" class="light-logo" /> </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
          <!-- dark Logo text -->
          <img src="{{asset('backend/assets/imgs/logo-text.png')}}" alt="homepage" class="dark-logo dark-logo2" />
                            <!-- Light Logo text -->
          <img src="{{asset('backend/assets/imgs/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a> </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="top-bar-main">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <div class="float-left">
                        <ul class="navbar-nav">
                            <li class="nav-item "><a class="nav-link navbar-toggler sidebartoggler waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item hidden-xs-down app-search">
                                <input type="text" class="form-control float-left" placeholder="Type for search...">
                            </li>
                        </ul>
                    </div>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <div class="float-right pr-3">
                        <ul class="navbar-nav my-lg-0 float-right">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                                    <ul>
                                        <li>
                                            <div class="drop-title">You have <span class="highlighted">3 new</span> Notifications</div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"> <i class="fas fa-envelope"></i> 2 new messages <span class="float-right text-light">15:07</span> </div>
                                                </a>
                                                <a href="#">
                                                    <div class="mail-content"> <i class="fas fa-comment"></i> 1 new comment <span class="float-right text-light">11.08.2018</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"> <i class="fas fa-calendar-alt"></i> 2 Events Soon <span class="float-right text-light">10.08.2018</span> </div>
                                                </a> </div>
                                        </li>
                                        <li> <a class="nav-link text-center" href="javascript:void(0);">See all notifications </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn" aria-labelledby="2">
                                    <ul>
                                        <li>
                                            <div class="drop-title">You have <span class="highlighted">7 new</span> messages</div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <img src="{{asset('backend/assets/imgs/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Amanda Robertson</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span> </div>
                                                        <span class="float-right text-light text-right">11:18 <span class="clearfix"></span> <span class="label label-rounded label-primary">1</span> </span> </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <img src="{{asset('backend/assets/imgs/users/img2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Danny Donavan</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span></div>
                                                        <div class="float-right text-light text-right">09.07.2018 <span class="clearfix"></span> <span class="label label-rounded label-primary">2</span> </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <img src="{{asset('backend/assets/imgs/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Frank Hendrics</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span></div>
                                                        <div class="float-right text-light text-right">10.08.2018 <span class="clearfix"></span> <span class="label label-rounded label-primary">4</span> </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a> </div>
                                        </li>
                                        <li> <a class="nav-link text-center" href="javascript:void(0);">See all notifications </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown u-pro"> <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('backend/assets/imgs/users/user-50x50.jpg')}}" alt="user" class="" /><span class="circle-status"></span></a>
                                <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                    <ul class="dropdown-user">
                                        <li class="text-center">
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="{{asset('backend/assets/imgs/users/user-50x50.jpg')}}" alt="user"></div>
                                                <div class="clearfix"></div>
                                                <div class="u-text">
                                                    <h4>Mason Vox</h4>
                                                    <p class="text-light"><span class="status-circle bg-success"></span>online <i class="fas fa-chevron-down small"></i></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><span class="status-circle bg-success"></span> online</a></li>
                                        <li><a href="#"><span class="status-circle bg-warning"></span> away</a></li>
                                        <li><a href="#"><span class="status-circle bg-danger"></span> not disturb</a></li>
                                        <li><a href="#"><span class="status-circle bg-light"></span> offline</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fas fa-user mr-1"></i> My Profile</a></li>
                                        <li><a href="#"><i class="fas fa-cog mr-1"></i> Settings</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fas fa-sign-in-alt mr-1"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <aside class="left-sidebar">
            <ul class="nav-bar navbar-inverse hidden-xs-down">
                <li class="nav-item"> <a class="nav-link navbar-toggler sidebartoggler  waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a> </li>
            </ul>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="clearfix"></li>
                        <li class="active"> <a class="has-arrow waves-effect waves-dark" href="{{route('main')}}" aria-expanded="false"><i class="flaticon-desktop-computer-screen-with-rising-graph"></i><span class="hide-menu">Dashboard</span></a>
{{--                            <ul aria-expanded="false" class="collapse in">--}}
{{--                                <li><a href="index-2.html" class="active">Server</a></li>--}}
{{--                                <li><a href="index-projects.html">Project</a></li>--}}
{{--                                <li><a href="index-analytics.html">Analytics</a></li>--}}
{{--                                <li><a href="index-shop.html">Shop</a></li>--}}
{{--                            </ul>--}}
                        </li>
{{--                        <li><a href="calendar.html"><i class="flaticon-calendar"></i><span class="hide-menu">Calendar</span></a></li>--}}
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('product.index')}}">Product List</a></li>
                                <li><a href="{{route('product.add')}}">Product Add</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{route('order_page')}}" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Order</span></a>

                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Category</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('category.index')}}">Category All</a></li>
                                <li><a href="{{route('category.add')}}">Category Add</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="{{route('purchase.index')}}" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Purchases</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('purchase.index')}}">Purchases</a></li>
                                <li><a href="{{route('purchase-details.index')}}">Purchase Details</a></li>
                                <li><a href="{{route('branch-stock.index')}}">Branch Stock</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Sub Category</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('subcategory.index')}}">Category All</a></li>
                                <li><a href="{{route('subcategory.add')}}">Category Add</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Unit Meassure</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('meassure.index')}}">Meassure All</a></li>
                                <li><a href="{{route('meassure.add')}}">Meassure Add</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Gender</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('Gender.add')}}">Gender Add</a></li>
                                <li><a href="{{route('Gender.all')}}">Gender All</a></li>
                            </ul>
                        </li>
{{--                        <li><a href="email.html"><i class="flaticon-mail"></i> <span class="hide-menu">Mail</span></a></li>--}}
{{--                        <li><a href="chats.html"><i class="flaticon-speech"></i><span class="hide-menu">Chat</span></a></li>--}}
{{--                        <li><a href="to-do.html"><i class="flaticon-forms"></i><span class="hide-menu">To Do</span></a></li>--}}
{{--                        <li><a href="change-log.html"><i class="flaticon-file"></i><span class="hide-menu">Change Log</span></a></li>--}}
{{--                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-switch"></i><span class="hide-menu">UI Elements</span></a>--}}
{{--                            <ul aria-expanded="false" class="collapse">--}}
{{--                                <li><a href="ui-profile.html">Profile</a></li>--}}
{{--                                <li><a href="ui-typography.html">Typography</a></li>--}}
{{--                                <li><a href="ui-buttons.html">Buttons</a></li>--}}
{{--                                <li><a href="ui-forms.html">Forms</a></li>--}}
{{--                                <li><a href="ui-icons.html">Icons</a></li>--}}
{{--                                <li><a href="ui-components.html">Components</a></li>--}}
{{--                                <li><a href="ui-cards.html">Cards</a></li>--}}
{{--                                <li><a href="ui-pricing-tables.html">Pricing tables</a></li>--}}
{{--                                <li><a href="ui-timeline.html">Timeline</a></li>--}}
{{--                                <li><a href="ui-charts.html">Charts</a></li>--}}
{{--                                <li><a href="ui-tables.html">Tables</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        {{--Layout start from here............. --}}
                @yield('main')
                @yield('content')
        {{--Layout start from here.............--}}

    </div>
</div>

</div>
</div>



<script src="{{asset('backend/plugins/vendors/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('backend/plugins/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('backend/plugins/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('backend/plugins/vendors/ps/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('backend/assets/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('backend/assets/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('backend/assets/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page {{asset('backend/plugins')}} -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="{{asset('backend/plugins/vendors/d3/d3.min.js')}}"></script>
<script src="{{asset('backend/plugins/vendors/c3-master/c3.min.js')}}"></script>
<!--jquery knob -->
<script src="{{asset('backend/plugins/vendors/knob/jquery.knob.js')}}"></script>
<!--Sparkline JavaScript -->
<script src="{{asset('backend/plugins/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('backend/plugins/vendors/raphael/raphael-min.js')}}"></script>
<script src="{{asset('backend/plugins/vendors/morrisjs/morris.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{asset('backend/plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
<!-- Dashboard JS -->
<script src="{{asset('backend/assets/js/dashboard-server.js')}}"></script>
<script src="{{asset('backend/assets/js/random-class.js')}}"></script>
<script>
    $('#slimtest1, #slimtest2').perfectScrollbar();
</script>

<script>
    $(".dial").knob();

    $({animatedVal: 0}).animate({animatedVal: 80}, {
        duration: 2000,
        easing: "swing",
        step: function() {
            $(".dial").val(Math.ceil(this.animatedVal)).trigger("change");
        }
    });
</script>
<!-- ============================================================== -->
</body>

<!-- Mirrored from jthemes.org/demo-admin/minton/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jun 2019 17:56:36 GMT -->
</html>
