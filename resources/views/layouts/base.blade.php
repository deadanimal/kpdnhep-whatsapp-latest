<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!--TODO: changes-->
    <link href="{{ asset('css-sass/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css-sass/app.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/advancedForm.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/brite.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/calendarApp.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/editorsForm.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/email.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/gridDataTable.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/projectApp.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/vectorMap.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/app-dark.css')}}" rel="stylesheet" type="text/css" id="dark-style" />
    <link href="{{ asset('css-sass/dashboardAnalytics.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css-sass/taskApp.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css/vendor/select.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


    <title>Whatsapp KPDNHEP</title>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":true,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="wrapper">
        <!-- sidebar -->
        <div class="leftside-menu">


            <a href="/dashboard" class="logo text-center logo-light">
                <span class="logo-lg">
                    <div class="row mt-3">
                        <div class="col-4 d-flex justify-content-end">
                        <img class="text-end" src="{{ asset('images/kpdnhep-logo.jpg')}}" alt="" height="16">
                        </div>
                        <div class="col-8 d-flex justify-content-start">
                        <h5 class="text-white mt-0 pt-0">KPDNHEP</h5>
                        </div>
                    </div>
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('images/kpdnhep-logo.jpg')}}" alt="" height="16">
                </span>
            </a>


            <a href="/dashboard" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="../images/logo-dark.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="../images/logo_sm_dark.png" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar>


                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>


                    <li class="side-nav-item">
                        <a href="/" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <!-- <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end">4</span>
                            <span> Dashboards </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="dashboard-analytics.html">Analytics</a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html">CRM</a>
                                </li>
                                <li>
                                    <a href="index.html">Ecommerce</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Projects</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->

                    <li class="side-nav-title side-nav-item">Apps</li>

                    <li class="side-nav-item">
                        <a href="/perbualans" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span> Chat </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/tugasans" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Tasks </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/report" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> Reports </span>
                        </a>
                    </li>

                    <!-- <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                    <i class="uil-clipboard-alt"></i>
                                    <span> Tasks </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTasks">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="apps-tasks.html">List</a>
                                        </li>
                                        <li>
                                            <a href="apps-tasks-details.html">Details</a>
                                        </li>
                                        <li>
                                            <a href="apps-kanban.html">Kanban Board</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                </ul>

            </div>


        </div>

        <div class="content-page">
            <div class="content">
                <!-- navbar -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">


                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div style="max-height: 230px;" data-simplebar>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>


                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>


                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="../images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>


                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>


                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="../images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>


                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>


                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-view-apps noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li class="notification-list">
                            <a class="nav-link">
                                <i class="dripicons-gear noti-icon" data-bs-toggle="offcanvas" href="#endbar-offcanvas" role="button" aria-controls="endbar-offcanvas"></i>
                            </a>
                        </li>


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="../images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Dominic Keller</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>


                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>


                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>


                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>


                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>


                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">

                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>


                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>


                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>


                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>


                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="../images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>


                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="../images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content -->
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © KPDNHEP - Pipeline Network
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>




    <script defer="defer" src="{{ asset('js-sass/chatApp.js')}}"></script>
    <script defer="defer" src="{{ asset('js-sass/app.js')}}"></script>
    <script defer="defer" src="{{ asset('js-sass/dashboardEcommerce.js')}}"></script>
    <script defer="defer" src="{{ asset('js-sass/dashboardAnalytics.js')}}"></script>
    <script defer="defer" src="{{ asset('js-sass/dashboardProjects.js')}}"></script>
    <script defer="defer" src="{{ asset('js-sass/taskApp.js')}}"></script>
    <script defer="defer" src="{{ asset('js-sass/fileUploadForm.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    
</body>

</html>