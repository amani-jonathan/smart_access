<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Xacton - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                
                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-plus"></i> Create New
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu">
                            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                Application
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                Software
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                EMS System
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                CRM App
                            </a>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-none d-sm-inline-block ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">
                            
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="" src="assets/images/flags/us.jpg"alt="Header Language" height="16">
                            <span class="d-none d-sm-inline-block ml-1">English</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge badge-danger badge-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-2.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                            <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Download Available !</h6>
                                            <p class="font-size-12 mb-1">Latest version of admin is now available. Please download here.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-3.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                            <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Jamie D.</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Inbox</span>
                                <span>
                                    <span class="badge badge-pill badge-info">3</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Profile</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Settings
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Lock Account</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="index.html" class="logo">
                        <i class="mdi mdi-alpha-x-circle"></i>
                        <span>
                            Xacton
                        </span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.html" class="waves-effect"><i class="feather-airplay"></i><span class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="feather-copy"></i><span>Pages</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-starter.html">Starter Page</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-faqs.html">FAQs</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>

                        <li><a href="calendar.html" class=" waves-effect"><i class="feather-calendar"></i><span>Calendar</span></a></li>

                        <li class="menu-title">Components</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="feather-briefcase"></i><span>UI Elements</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-carousel.html">Carousel</a>
                                <li><a href="ui-embeds.html">Embeds</a>
                                <li><a href="ui-general.html">General</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-media-objects.html">Media Objects</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-tabs.html">Tabs</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="ui-spinners.html">Spinners</a></li>
                                <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="feather-list"></i><span>Tables</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Tables</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="feather-bar-chart-2"></i><span>Charts</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-google.html">Google</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-sparkline.html">Sparkline</a></li>
                                <li><a href="charts-knob.html">Jquery Knob</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="feather-book"></i><span class="badge badge-pill badge-danger float-right">6</span><span>Forms</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="forms-elements.html">Elements</a></li>
                                <li><a href="forms-plugins.html">Plugins</a></li>
                                <li><a href="forms-validation.html">Validation</a></li>
                                <li><a href="forms-mask.html">Masks</a></li>
                                <li><a href="forms-quilljs.html">Quilljs</a></li>
                                <li><a href="forms-uploads.html">File Uploads</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="feather-box"></i><span>Icons</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-feather.html">Feather Icons</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">More</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="feather-map"></i><span>Maps</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-share-variant"></i><span>Multi Level</span></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Buttons</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Buttons</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Basic Examples</h4>
                                    <p class="card-subtitle mb-4">Bootstrap includes several predefined button styles,
                                        each serving its own semantic purpose, with a few extras thrown in for more
                                        control.
                                    </p>

                                    <div class="button-examples">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Secondary</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                                        <button type="button" class="btn btn-light waves-effect">Light</button>
                                        <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                                        <button type="button" class="btn btn-link waves-effect">Link</button>
                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Outline Buttons</h4>
                                    <p class="card-subtitle mb-4">In need of a button, but not the hefty background
                                        colors they bring? Replace the default modifier classes with the
                                        <code>.btn-outline-*</code> ones to remove all background images and colors on
                                        any button.</p>
                                    <div class="button-examples">
                                        <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary waves-effect waves-light">Secondary</button>
                                        <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                                        <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                                        <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                                        <button type="button" class="btn btn-outline-light">Light</button>
                                        <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Button Tags</h4>
                                    <p class="card-subtitle mb-4">The <code>.btn</code> classes are designed to be used
                                        with the <code>&lt;button&gt;</code> element. However, you can also use these
                                        classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements.</p>
                                    
                                    <div class="button-examples">
                                        <a class="btn btn-primary waves-effect waves-light" href="#" role="button">Link</a>
                                        <button class="btn btn-secondary waves-effect waves-light" type="submit">Button</button>
                                        <input class="btn btn-success waves-effect waves-light" type="button" value="Input">
                                        <input class="btn btn-danger waves-effect waves-light" type="submit" value="Submit">
                                        <input class="btn btn-warning waves-effect waves-light" type="reset" value="Reset">
                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sizes</h4>
                                    <p class="card-subtitle mb-4">
                                        Fancy larger or smaller buttons? Add <code>.btn-lg</code> or
                                            <code>.btn-sm</code> for additional sizes.</p>
                                    <div class="button-examples">
                                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Large button</button>
                                        <button type="button" class="btn btn-success btn-lg waves-effect waves-light">Large button</button>
                                        <button type="button" class="btn btn-info btn-sm waves-effect waves-light">Small button</button>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect waves-light">Small button</button>
                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Checkbox and Radio Buttons</h4>
                                    <p class="card-subtitle mb-4">
                                        <code>.button</code> styles can be applied to other elements, such as
                                        <code>&lt;label&gt;</code>s, to provide checkbox or radio style button toggling.
                                        Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing
                                        those modified buttons to enable their toggling behavior via JavaScript and add
                                        <code>.btn-group-toggle</code> to style the <code>&lt;input&gt;</code>s within
                                        your buttons.
                                    </p>

                                    <div class="row">
                                        <div class="col-auto mt-1">
                                            <div class="btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active waves-effect waves-light">
                                                    <input type="checkbox" checked> Checked
                                                </label>
                                            </div>
                                        </div>
                                        <!-- end col-->

                                        <div class="col mt-1">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-primary active waves-effect waves-light">
                                                    <input type="radio" name="options" id="option1"
                                                        checked> Active
                                                </label>
                                                <label class="btn btn-primary waves-effect waves-light">
                                                    <input type="radio" name="options" id="option2">
                                                    Radio
                                                </label>
                                                <label class="btn btn-primary waves-effect waves-light ">
                                                    <input type="radio" name="options" id="option3">
                                                    Radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Block Level Buttons</h4>
                                    <p class="card-subtitle mb-4">Create block level buttons—those that span the full
                                        width of a parent—by adding <code>.btn-block</code></p>
                                    <button type="button" class="btn btn-success btn-sm btn-block waves-effect waves-light">Block level
                                        button</button>
                                    <button type="button" class="btn btn-outline-info btn-lg btn-block waves-effect waves-light">Block level
                                        button</button>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Active State</h4>
                                    <p class="card-subtitle mb-4">Add the <code>active </code> class to
                                        <code>&lt;a&gt;</code> buttons.
                                    </p>

                                    <a href="#" class="btn btn-primary btn-lg active waves-effect" role="button"
                                        aria-pressed="true">Primary link</a>
                                    <a href="#" class="btn btn-secondary btn-lg active waves-effect" role="button"
                                        aria-pressed="true">Link</a>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Disabled State</h4>
                                    <p class="card-subtitle mb-4"> Add the <code>disabled</code> attribute to
                                        <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> buttons.</p>

                                    <button type="button" class="btn btn-lg btn-primary waves-effect waves-light" disabled>Primary
                                        button</button>
                                    <a href="#" class="btn btn-secondary btn-lg disabled waves-effect" tabindex="-1" role="button"
                                        aria-disabled="true">Link</a>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Button toolbar</h4>
                                    <p class="card-subtitle mb-4">Combine sets of button groups into button toolbars for
                                        more complex components. Use utility classes as needed to space out groups,
                                        buttons, and more.
                                    </p>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-success waves-effect waves-light">1</button>
                                            <button type="button" class="btn btn-success waves-effect waves-light">2</button>
                                            <button type="button" class="btn btn-success waves-effect waves-light">3</button>
                                        </div>
                                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                                            <button type="button" class="btn btn-info waves-effect waves-light">5</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light">6</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light">7</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Third group">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">8</button>

                                        </div>
                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Rounded Button</h4>
                                    <p class="card-subtitle mb-4"> Add <code>.btn-rounded</code> to default button to
                                        get rounded corners.</p>

                                    <div class="button-examples">
                                        <button type="button"
                                            class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button>
                                        <button type="button"
                                            class="btn btn-outline-success btn-rounded waves-effect waves-light">Success</button>
                                        <button type="button"
                                            class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
                                        <button type="button"
                                            class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button>
                                        <button type="button"
                                            class="btn btn-outline-danger btn-rounded waves-effect waves-light">Danger</button>
                                        <button type="button"
                                            class="btn btn-dark btn-rounded waves-effect waves-light">Dark</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary btn-rounded waves-effect waves-light">Secondary</button>
                                        <button type="button" class="btn btn-light btn-rounded waves-effect">Light</button>
                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Button Group Sizing</h4>
                                    <p class="card-subtitle mb-4">Instead of applying button sizing classes to every
                                        button in a group, just add <code>.btn-group-*</code> to each
                                        <code>.btn-group</code>, including each one when nesting multiple groups.</p>

                                    <div class="button-examples">
                                        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                                            <button type="button" class="btn btn-light waves-effect">Left</button>
                                            <button type="button" class="btn btn-light waves-effect">Middle</button>
                                            <button type="button" class="btn btn-light waves-effect">Right</button>
                                        </div>

                                        <div class="btn-group" role="group" aria-label="Default button group">
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Left</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Middle</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Right</button>
                                        </div>

                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-dark waves-effect waves-light">Left</button>
                                            <button type="button" class="btn btn-dark waves-effect waves-light">Middle</button>
                                            <button type="button" class="btn btn-dark waves-effect waves-light">Right</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nesting Button Group</h4>
                                    <p class="card-subtitle mb-4">Place a <code>.btn-group</code> within another
                                        <code>.btn-group</code> when you want dropdown menus mixed with a series of
                                        buttons.</p>

                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-outline-secondary waves-effect waves-light">1</button>
                                        <button type="button" class="btn btn-outline-secondary waves-effect waves-light">2</button>

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Dropdown <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Vertical Variation</h4>
                                    <p class="card-subtitle mb-4">Make a set of buttons appear vertically stacked rather
                                        than horizontally. Split button dropdowns are not supported here.
                                    </p>

                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="btn-group-vertical" role="group"
                                                aria-label="Vertical button group">
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="btn-group-vertical" role="group"
                                                aria-label="Vertical button group">
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Button</button>

                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button"
                                                        class="btn btn-secondary dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Dropdown <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <a class="dropdown-item waves-effect waves-light" href="#">Dropdown link</a>
                                                        <a class="dropdown-item waves-effect waves-light" href="#">Dropdown link</a>
                                                    </div>
                                                </div>

                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop2" type="button"
                                                        class="btn btn-secondary dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Dropdown <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop3" type="button"
                                                        class="btn btn-secondary dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Dropdown <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop4" type="button"
                                                        class="btn btn-secondary dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Dropdown <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                        <a class="dropdown-item waves-effect waves-light" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2019 © Xacton.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>