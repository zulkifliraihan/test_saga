<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="ZULKIFLIRAIIHAN">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="apple-touch-icon" href="{{ asset('dashboard') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard') }}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/app-assets/css/pages/page-blog.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-detached-right-sidebar navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-right-sidebar">

    <!-- BEGIN: Header-->
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Blog List</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active">List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body">
                    <!-- Blog List -->
                    <div class="blog-list-wrapper">
                        <!-- Blog List Items -->
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" src="{{ asset('dashboard') }}/app-assets/images/slider/02.jpg" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">The Best Features Coming to iOS and Web design</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Ghani Pradita</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-info mr-50">Quote</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary">Fashion</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">76 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" src="{{ asset('dashboard') }}/app-assets/images/slider/06.jpg" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Latest Quirky Opening Sentence or Paragraph</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Jorge Griffin</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50">Gaming</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-warning">Video</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Apple pie caramels lemon drops halvah liquorice carrot cake. Tiramisu brownie lemon drops.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">2.1k Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" src="{{ asset('dashboard') }}/app-assets/images/slider/04.jpg" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Share an Amazing and Shocking Fact or Statistic</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Claudia Neal</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50">Gaming</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-success">Food</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Tiramisu jelly-o chupa chups tootsie roll donut wafer marshmallow cheesecake topping.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">243 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" src="{{ asset('dashboard') }}/app-assets/images/slider/03.jpg" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Withhold a Compelling Piece of Information</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-14.jpg" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Fred Boone</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-warning">Video</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Croissant apple pie lollipop gingerbread. Cookie jujubes chocolate cake icing cheesecake.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">10 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" src="{{ asset('dashboard') }}/app-assets/images/slider/09.jpg" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Unadvertised Bonus Opening: Share a Quote</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-13.jpg" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Billy French</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-info mr-50">Quote</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary">Fashion</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Muffin liquorice candy soufflé bear claw apple pie icing halvah. Pie marshmallow jelly.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">319 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" src="{{ asset('dashboard') }}/app-assets/images/slider/10.jpg" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Ships at a distance have Every Man’s Wish on Board</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('dashboard') }}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Helena Hunt</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary mr-50">Fashion</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-warning">Video</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            A little personality goes a long way, especially on a business blog. So don’t be afraid to let loose.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">1.5k Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Blog List Items -->

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--/ Pagination -->
                    </div>
                    <!--/ Blog List -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="blog-sidebar my-2 my-lg-0">
                        <!-- Search bar -->
                        <div class="blog-search">
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="Search here" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer">
                                        <i data-feather="search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/ Search bar -->

                        <!-- Recent Posts -->
                        <div class="blog-recent-posts mt-3">
                            <h6 class="section-label">Recent Posts</h6>
                            <div class="mt-75">
                                <div class="media mb-2">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" src="{{ asset('dashboard') }}/app-assets/images/banner/banner-22.jpg" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">Why Should Forget Facebook?</a>
                                        </h6>
                                        <div class="text-muted mb-0">Jan 14 2020</div>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" src="{{ asset('dashboard') }}/app-assets/images/banner/banner-27.jpg" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">Publish your passions, your way</a>
                                        </h6>
                                        <div class="text-muted mb-0">Mar 04 2020</div>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" src="{{ asset('dashboard') }}/app-assets/images/banner/banner-39.jpg" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">The Best Ways to Retain More</a>
                                        </h6>
                                        <div class="text-muted mb-0">Feb 18 2020</div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" src="{{ asset('dashboard') }}/app-assets/images/banner/banner-35.jpg" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">Share a Shocking Fact or Statistic</a>
                                        </h6>
                                        <div class="text-muted mb-0">Oct 08 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Recent Posts -->

                        <!-- Categories -->
                        <div class="blog-categories mt-3">
                            <h6 class="section-label">Categories</h6>
                            <div class="mt-1">
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-primary rounded">
                                            <div class="avatar-content">
                                                <i data-feather="watch" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Fashion</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-success rounded">
                                            <div class="avatar-content">
                                                <i data-feather="shopping-cart" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Food</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-danger rounded">
                                            <div class="avatar-content">
                                                <i data-feather="command" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Gaming</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Quote</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-warning rounded">
                                            <div class="avatar-content">
                                                <i data-feather="video" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Video</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/ Categories -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard') }}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('dashboard') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('dashboard') }}/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
