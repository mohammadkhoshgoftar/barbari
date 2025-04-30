<!doctype html>
<html lang="en">
<!-- Mirrored from adminuiux.com/adminuiux/digiclinic-mobile-uiux/clinic-schedule-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 08:03:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DigiClinic AdminUIUX - Bootstrap HTML Admin template - adminuiux.com</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;400;500;600&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&amp;display=swap"
          rel="stylesheet">
    <style>:root {
            --adminuiux-content-font: 'Roboto';
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Fira Sans Condensed";
            --adminuiux-title-font-weight: 500
        }</style>
    <script defer="defer" src="assets/js/app8032.js?6b53ec3d433ab1dff13c"></script>
    <link href="assets/css/app8032.css?6b53ec3d433ab1dff13c" rel="stylesheet">
</head>
<body class="main-bg main-bg-opac main-bg-blur overflow-hidden">
<div class="pageloader">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
            <div class="col-12 mb-auto pt-4"></div>
            <div class="col-auto"><img src="assets/img/logo.svg" alt="" class="height-60 mb-3">
                <p class="h6 mb-0">AdminUIUX</p>
                <p class="h3 mb-4">Digi Clinic</p>
                <div class="loaderplus mb-2"></div>
            </div>
            <div class="col-12 mt-auto pb-4"><p class="text-secondary">Please wait we are preparing awesome things to
                    preview...</p></div>
        </div>
    </div>
</div>
<header class="adminuiux-header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="btn btn-link btn-square sidebar-toggler" type="button" onclick="initSidebar()"><i
                        class="sidebar-svg" data-feather="menu"></i></button>
            <a class="navbar-brand" href="clinic-dashboard.html"><img data-bs-img="light"
                                                                      src="assets/img/logo-light.svg" alt=""> <img
                        data-bs-img="dark" src="assets/img/logo.svg" alt="">
                <div class=""><span class="company-name text-uppercase h4"><b>Digi</b>Clinic</span>
                    <p class="company-tagline">Mobile HTML template</p></div>
            </a>
            <div class="ms-auto"></div>
            <div class="ms-auto">
                <button class="btn btn-link btn-square btnsunmoon btn-link-header" id="btn-layout-modes-dark-page"><i
                            class="sun mx-auto" data-feather="sun"></i> <i class="moon mx-auto" data-feather="moon"></i>
                </button>
                <button class="btn btn-link btn-square btn-icon btn-link-header d-inline-block d-xxl-none" type="button"
                        onclick="openSearch()"><i data-feather="search"></i></button>
                <div class="dropdown d-none d-sm-inline-block">
                    <button class="btn btn-link btn-square btn-icon btn-link-header dropdown-toggle no-caret"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end width-300 pt-0 px-0">
                        <div class="bg-theme-1-space rounded py-3 mb-2 dropdown-dontclose text-center"><p class="mb-0">
                                Applications</p>
                            <p class="opacity-50 small">Make your app innovative</p></div>
                        <div class="px-2">
                            <div class="row g-0 text-center mb-2">
                                <div class="col-4"><a class="dropdown-item square-item"
                                                      href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-finance.html">
                                        <div class="avatar avatar-40 rounded mb-2"><i class="bi bi-bank fs-4 mx-0"></i>
                                        </div>
                                        <p class="mb-0">Finance</p>
                                        <p class="fs-12 opacity-50 mb-2">Accounting</p></a></div>
                                <div class="col-4"><a class="dropdown-item square-item"
                                                      href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-network.html">
                                        <div class="avatar avatar-40 rounded mb-2"><i class="bi bi-globe fs-4 mx-0"></i>
                                        </div>
                                        <p class="mb-0">Network</p>
                                        <p class="fs-12 opacity-50 mb-2">Stabilize</p></a></div>
                                <div class="col-4"><a class="dropdown-item square-item"
                                                      href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-ecommerce.html">
                                        <div class="avatar avatar-40 rounded mb-2"><i class="bi bi-box fs-4 mx-0"></i>
                                        </div>
                                        <p class="mb-0">Inventory</p>
                                        <p class="fs-12 opacity-50 mb-2">Assuring</p></a></div>
                                <div class="col-4"><a class="dropdown-item square-item"
                                                      href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-project.html">
                                        <div class="avatar avatar-40 rounded mb-2"><i
                                                    class="bi bi-folder fs-4 mx-0"></i></div>
                                        <p class="mb-0">Project</p>
                                        <p class="fs-12 opacity-50 mb-2">Management</p></a></div>
                                <div class="col-4"><a class="dropdown-item square-item"
                                                      href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-social.html">
                                        <div class="avatar avatar-40 rounded mb-2"><i
                                                    class="bi bi-people fs-4 mx-0"></i></div>
                                        <p class="mb-0">Social</p>
                                        <p class="fs-12 opacity-50 mb-2">Tracking</p></a></div>
                                <div class="col-4"><a class="dropdown-item square-item"
                                                      href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-learning.html">
                                        <div class="avatar avatar-40 rounded mb-2"><i
                                                    class="bi bi-journal-bookmark fs-4 mx-0"></i></div>
                                        <p class="mb-0">Learning</p>
                                        <p class="fs-12 opacity-50 mb-2">Make-easy</p></a></div>
                            </div>
                        </div>
                        <div class="text-center"><a class="btn btn-link text-center"
                                                    href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-demo.html">View
                                all <i class="bi bi-arrow-right fs-14"></i></a></div>
                    </div>
                </div>
                <div class="dropdown d-none d-sm-inline-block">
                    <button class="btn btn-link btn-square btn-icon btn-link-header dropdown-toggle no-caret"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="bi bi-translate"></i></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item active" data-value="EN">EN - English</a></li>
                        <li><a class="dropdown-item" data-value="FR">FR - French</a></li>
                        <li><a class="dropdown-item" data-value="CH">CH - Chinese</a></li>
                        <li><a class="dropdown-item" data-value="HI">HI - Hindi</a></li>
                    </ul>
                </div>
                <a href="clinic-notifications.html"
                   class="btn btn-link btn-square btn-icon btn-link-header position-relative"><i
                            data-feather="bell"></i> <span
                            class="position-absolute top-0 end-0 badge rounded-pill bg-danger p-1"><small>9+</small> <span
                                class="visually-hidden">unread messages</span></span></a>
                <div class="dropdown d-inline-block"><a class="dropdown-toggle btn btn-link btn-link-header style-none"
                                                        id="userprofiledd" data-bs-toggle="dropdown"
                                                        aria-expanded="false" role="button">
                        <div class="row gx-0 d-inline-flex">
                            <div class="col-auto align-self-center">
                                <figure class="avatar avatar-28 rounded-circle coverimg align-middle"><img
                                            src="assets/img/modern-ai-image/user-6.jpg" alt=""
                                            id="userphotoonboarding2"></figure>
                            </div>
                            <div class="col align-self-center d-none d-xl-block px-2"><span
                                        class="mb-0">AdminUIUX</span></div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end width-300 pt-0 px-0" aria-labelledby="userprofiledd">
                        <div class="bg-theme-1-space rounded py-3 mb-3 dropdown-dontclose">
                            <div class="row gx-0">
                                <div class="col-auto px-3">
                                    <figure class="avatar avatar-50 rounded-circle coverimg align-middle"><img
                                                src="assets/img/modern-ai-image/user-6.jpg" alt=""></figure>
                                </div>
                                <div class="col align-self-center"><p class="mb-1"><span>AdminUIUX</span></p>
                                    <p><i class="bi bi-wallet2 me-2"></i> $1100.00 <small
                                                class="opacity-50">Balance</small></p></div>
                            </div>
                        </div>
                        <div class="px-2">
                            <div><a class="dropdown-item" href="clinic-myprofile.html"><i data-feather="user"
                                                                                          class="avatar avatar-18 me-1"></i>
                                    My Profile</a></div>
                            <div><a class="dropdown-item" href="clinic-dashboard.html">
                                    <div class="row g-0">
                                        <div class="col align-self-center"><i data-feather="layout"
                                                                              class="avatar avatar-18 me-1"></i> My
                                            Dashboard
                                        </div>
                                        <div class="col-auto">
                                            <figure class="avatar avatar-20 coverimg rounded-circle"><img
                                                        src="assets/img/modern-ai-image/user-1.jpg" alt=""></figure>
                                            <figure class="avatar avatar-20 coverimg rounded-circle"><img
                                                        src="assets/img/modern-ai-image/user-2.jpg" alt=""></figure>
                                            <figure class="avatar avatar-20 coverimg rounded-circle"><img
                                                        src="assets/img/modern-ai-image/user-4.jpg" alt=""></figure>
                                            <div class="avatar avatar-20 bg-theme-1 rounded-circle text-center align-middle">
                                                <small class="fs-10 align-middle">9+</small></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div><a class="dropdown-item" href="clinic-earning.html"><i data-feather="dollar-sign"
                                                                                        class="avatar avatar-18 me-1"></i>
                                    Earning</a></div>
                            <div><a class="dropdown-item" href="clinic-mysubscription.html">
                                    <div class="row">
                                        <div class="col"><i data-feather="gift" class="avatar avatar-18 me-1"></i>
                                            Subscription
                                        </div>
                                        <div class="col-auto"><p class="small text-success">Upgrade</p></div>
                                        <div class="col-auto"><span class="arrow bi bi-chevron-right"></span></div>
                                    </div>
                                </a></div>
                            <div class="dropdown open-left dropdown-dontclose"><a class="dropdown-item"
                                                                                  data-bs-toggle="dropdown"
                                                                                  aria-expanded="false" role="button">
                                    <div class="row">
                                        <div class="col"><i class="bi bi-translate avatar avatar-18 me-1"></i> Language
                                        </div>
                                        <div class="col-auto"><small class="vm">EN - English</small> <i
                                                    class="bi bi-translate"></i></div>
                                        <div class="col-auto"><span class="arrow bi bi-chevron-right"></span></div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div><a class="dropdown-item active" data-value="EN">EN - English</a></div>
                                    <div><a class="dropdown-item" data-value="FR">FR - French</a></div>
                                    <div><a class="dropdown-item" data-value="CH">CH - Chinese</a></div>
                                    <div><a class="dropdown-item" data-value="HI">HI - Hindi</a></div>
                                </div>
                            </div>
                            <div><a class="dropdown-item" href="clinic-settings.html"><i data-feather="settings"
                                                                                         class="avatar avatar-18 me-1"></i>
                                    Account Setting</a></div>
                            <div><a class="dropdown-item theme-red" href="clinic-login.html"><i data-feather="power"
                                                                                                class="avatar avatar-18 me-1"></i>
                                    Logout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="adminuiux-search-full">
        <div class="row gx-2 align-items-center">
            <div class="col-auto">
                <button class="btn btn-square btn-icon" type="button" onclick="closeSearch()"><i
                            data-feather="arrow-left"></i></button>
            </div>
            <div class="col"><input class="form-control pe-0 border-0" type="search"
                                    placeholder="Type something here..."></div>
            <div class="col-auto">
                <div class="dropdown input-group-text border-0 p-0">
                    <button class="dropdown-toggle btn btn-link no-caret" type="button" id="searchfilter2"
                            data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="sliders"></i></button>
                    <div class="dropdown-menu dropdown-menu-end dropdown-dontclose width-300"
                         aria-labelledby="searchfilter2">
                        <ul class="nav adminuiux-nav" id="searchtab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="searchall-tab2" data-bs-toggle="tab"
                                        data-bs-target="#searchall2" type="button" role="tab" aria-controls="searchall2"
                                        aria-selected="true">All
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="searchorders-tab2" data-bs-toggle="tab"
                                        data-bs-target="#searchorders2" type="button" role="tab"
                                        aria-controls="searchorders2" aria-selected="false" tabindex="-1">Orders
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="searchcontacts-tab2" data-bs-toggle="tab"
                                        data-bs-target="#searchcontacts2" type="button" role="tab"
                                        aria-controls="searchcontacts2" aria-selected="false" tabindex="-1">Contacts
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content py-3" id="searchtabContent2">
                            <div class="tab-pane fade active show" id="searchall2" role="tabpanel"
                                 aria-labelledby="searchall-tab2">
                                <ul class="list-group adminuiux-list-group list-group-flush bg-none show">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Search apps</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch1"> <label
                                                            class="form-check-label" for="searchswitch1"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Include Pages</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch2"
                                                                                           checked=""> <label
                                                            class="form-check-label" for="searchswitch2"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Internet resource</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch3"
                                                                                           checked=""> <label
                                                            class="form-check-label" for="searchswitch3"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">News and Blogs</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch4"> <label
                                                            class="form-check-label" for="searchswitch4"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="searchorders2" role="tabpanel"
                                 aria-labelledby="searchorders-tab2">
                                <ul class="list-group adminuiux-list-group list-group-flush bg-none show">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Show order ID</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch5"> <label
                                                            class="form-check-label" for="searchswitch5"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">International Order</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch6"
                                                                                           checked=""> <label
                                                            class="form-check-label" for="searchswitch6"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Taxable Product</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch7"
                                                                                           checked=""> <label
                                                            class="form-check-label" for="searchswitch7"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Published Product</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch8"> <label
                                                            class="form-check-label" for="searchswitch8"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="searchcontacts2" role="tabpanel"
                                 aria-labelledby="searchcontacts-tab2">
                                <ul class="list-group adminuiux-list-group list-group-flush bg-none show">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Have email ID</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch9"> <label
                                                            class="form-check-label" for="searchswitch9"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Have phone number</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch10"
                                                                                           checked=""> <label
                                                            class="form-check-label" for="searchswitch10"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Photo available</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch11"
                                                                                           checked=""> <label
                                                            class="form-check-label" for="searchswitch11"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Referral</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input"
                                                                                           type="checkbox" role="switch"
                                                                                           id="searchswitch12"> <label
                                                            class="form-check-label" for="searchswitch12"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link">Reset</button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-theme">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="adminuiux-wrap">
    <div class="adminuiux-sidebar">
        <div class="adminuiux-sidebar-inner">
            <div class="px-3 not-iconic mt-3">
                <div class="row">
                    <div class="col align-self-center"><p class="h6">Main Menu</p></div>
                    <div class="col-auto"><a class="btn btn-link btn-square" data-bs-toggle="collapse"
                                             data-bs-target="#usersidebarprofile" aria-expanded="false" role="button"
                                             aria-controls="usersidebarprofile"><i data-feather="user"></i></a></div>
                </div>
                <div class="text-center collapse" id="usersidebarprofile">
                    <figure class="avatar avatar-100 rounded-circle coverimg my-3"><img
                                src="assets/img/modern-ai-image/user-6.jpg" alt=""></figure>
                    <p class="mb-1 h5">Dr. AdminUIUX</p>
                    <p class="small">The Clinical UI Kit</p></div>
            </div>
            <ul class="nav flex-column menu-active-line my-3">
                <li class="nav-item"><a href="clinic-dashboard.html" class="nav-link"><i class="menu-icon"
                                                                                         data-feather="grid"></i> <span
                                class="menu-name">Dashboard</span></a></li>
                <li class="nav-item dropdown"><a href="javascrit:void(0)" class="nav-link dropdown-toggle"
                                                 data-bs-toggle="dropdown"><i class="menu-icon"
                                                                              data-feather="calendar"></i> <span
                                class="menu-name">Schedule</span></a>
                    <div class="dropdown-menu">
                        <div class="nav-item"><a href="clinic-schedule.html" class="nav-link"><i class="menu-icon"
                                                                                                 data-feather="calendar"></i>
                                <span class="menu-name">Schedule Calendar</span></a></div>
                        <div class="nav-item"><a href="clinic-schedule-grid.html" class="nav-link"><i class="menu-icon"
                                                                                                      data-feather="table"></i>
                                <span class="menu-name">Schedule List</span></a></div>
                        <div class="nav-item"><a href="clinic-schedule-cards.html" class="nav-link"><i class="menu-icon"
                                                                                                       data-feather="layers"></i>
                                <span class="menu-name">Schedule Progress</span></a></div>
                        <div class="nav-item"><a href="clinic-schedule-staff.html" class="nav-link"><i class="menu-icon"
                                                                                                       data-feather="user-check"></i>
                                <span class="menu-name">Schedule Staff</span></a></div>
                    </div>
                </li>
                <li class="nav-item"><a href="clinic-patients.html" class="nav-link"><i class="menu-icon"
                                                                                        data-feather="users"></i> <span
                                class="menu-name">Patients</span></a></li>
                <li class="nav-item"><a href="clinic-statistics.html" class="nav-link"><i class="menu-icon"
                                                                                          data-feather="pie-chart"></i>
                        <span class="menu-name">Statistics</span></a></li>
                <li class="nav-item"><a href="clinic-blogs.html" class="nav-link"><i class="menu-icon"
                                                                                     data-feather="file-text"></i> <span
                                class="menu-name">My Publication</span></a></li>
                <li class="nav-item"><a href="clinic-billing.html" class="nav-link"><i
                                class="menu-icon bi bi-cash-stack"></i> <span class="menu-name">Billings</span></a></li>
                <li class="nav-item dropdown"><a href="javascrit:void(0)" class="nav-link dropdown-toggle"
                                                 data-bs-toggle="dropdown" aria-expanded="false"><i class="menu-icon"
                                                                                                    data-feather="folder"></i>
                        <span class="menu-name">Documents</span></a>
                    <div class="dropdown-menu">
                        <div class="nav-item"><a href="clinic-patients-documents.html" class="nav-link"><i
                                        class="menu-icon" data-feather="users"></i> <span class="menu-name">Patient Documents</span></a>
                        </div>
                        <div class="nav-item"><a href="clinic-staff-documents.html" class="nav-link"><i
                                        class="menu-icon" data-feather="briefcase"></i> <span class="menu-name">Staff Documents</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="clinic-pages.html" class="nav-link"><i data-feather="layers"
                                                                                     class="menu-icon"></i> <span
                                class="menu-name">Pages</span> <span class="badge text-bg-primary mx-2">40+</span></a>
                </li>
                <li class="nav-item"><a href="clinic-personalization.html" class="nav-link"><i
                                class="menu-icon bi bi-palette h4"></i> <span
                                class="menu-name">Personalize ❤️</span></a></li>
                <li class="nav-item"><a class="nav-link" href="components.html"><i data-feather="cpu"
                                                                                   class="menu-icon"></i> <span
                                class="menu-name">Components</span></a></li>
            </ul>
            <div class="mt-auto"></div>
            <div class="px-3 mb-3 not-iconic"><p class="mb-3 h6">Quick Links</p>
                <div class="card border-0">
                    <div class="card-body p-2">
                        <div class="row gx-2">
                            <div class="col-12 d-flex justify-content-between"><a href="clinic-myprofile.html"
                                                                                  class="btn btn-square btn-link"><span
                                            class="position-relative"><i data-feather="user"></i> <span
                                                class="position-absolute top-0 start-100 translate-middle p-1 bg-success rounded-circle"><span
                                                    class="visually-hidden">New alerts</span> </span></span></a><a
                                        href="clinic-schedule.html" class="btn btn-square btn-link"><span
                                            class="position-relative"><i data-feather="calendar"></i> <span
                                                class="position-absolute top-0 start-100 translate-middle p-1 bg-warning rounded-circle"><span
                                                    class="visually-hidden">New alerts</span> </span></span></a><a
                                        href="clinic-inbox.html" class="btn btn-square btn-link"><i
                                            data-feather="inbox"></i> </a><a href="clinic-help-center.html"
                                                                             class="btn btn-square btn-link"><i
                                            data-feather="help-circle"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav flex-column menu-active-line">
                <li class="nav-item"><a href="clinic-chat-call.html" class="nav-link"><i class="menu-icon"
                                                                                         data-feather="message-circle"></i>
                        <span class="menu-name">Chat & Calls</span></a></li>
                <li class="nav-item"><a href="clinic-settings.html" class="nav-link"><i class="menu-icon"
                                                                                        data-feather="settings"></i>
                        <span class="menu-name">Settings</span></a></li>
            </ul>
        </div>
    </div>
    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="row gx-3">
                <div class="col py-1">
                    <div class="btn-group" role="group" aria-label="Basic example"><a href="clinic-schedule.html"
                                                                                      class="btn btn-link"><i
                                    data-feather="calendar" class="me-0 me-md-1"></i> <span
                                    class="d-none d-xl-inline-block">Calendar</span> </a><a
                                href="clinic-schedule-grid.html" class="btn btn-link active"><i data-feather="table"
                                                                                                class="me-0 me-md-1"></i>
                            <span class="d-none d-xl-inline-block">Grid</span> </a><a href="clinic-schedule-cards.html"
                                                                                      class="btn btn-link"><i
                                    data-feather="layers" class="me-0 me-md-1"></i> <span
                                    class="d-none d-xl-inline-block">Cards</span> </a><a
                                href="clinic-schedule-staff.html" class="btn btn-link"><i data-feather="user-check"
                                                                                          class="me-0 me-md-1"></i>
                            <span class="d-none d-xl-inline-block">Staff</span></a></div>
                </div>
                <div class="col-auto py-1 ms-auto ms-sm-0">
                    <button class="btn btn-link btn-square btn-icon" data-bs-toggle="collapse"
                            data-bs-target="#filterschedule" aria-expanded="false" aria-controls="filterschedule"><i
                                data-feather="filter"></i></button>
                </div>
            </div>
        </div>
        <div class="container" id="main-content">
            <div class="collapse" id="filterschedule">
                <div class="card adminuiux-card mt-3">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <div class="form-floating"><input class="form-control" placeholder="Search..."> <label>Search...</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <div class="form-floating"><select class="form-select">
                                        <option selected="selected">All</option>
                                        <option value="1">Appointments</option>
                                        <option value="2">Birthday</option>
                                        <option value="3">Meetings</option>
                                    </select> <label>Appointment Type</label></div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <div class="form-floating"><select class="form-select">
                                        <option selected="selected">All</option>
                                        <option value="1">Dr. Ryan Sylia</option>
                                        <option value="2">Dr. Angelina</option>
                                        <option value="3">Dr. Smriti Vandana</option>
                                    </select> <label>Doctor</label></div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <div class="form-floating"><select class="form-select">
                                        <option selected="selected">All</option>
                                        <option value="1">Created</option>
                                        <option value="2">Upcoming</option>
                                        <option value="3">Ongoing</option>
                                        <option value="3">Completed</option>
                                        <option value="3">Deleted</option>
                                    </select> <label>Appointment Status</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card adminuiux-card mt-3 mb-3">
                <div class="card-body pt-0">
                    <table id="clientScheduleGrid" class="table w-100 nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th class="all">Schedule</th>
                            <th data-breakpoints="xs sm">Patient</th>
                            <th data-breakpoints="xs sm md">Disease</th>
                            <th data-breakpoints="xs sm md">Contact info</th>
                            <th data-breakpoints="xs sm">Status</th>
                            <th class="xs sm">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2054ID</td>
                            <td><p class="mb-0 fw-medium">8 June 2024</p>
                                <p class="text-secondary small">9:10 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-7.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">David Warner</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Allergies</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">david@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>105ID</td>
                            <td><p class="mb-0 fw-medium">9 June 2024</p>
                                <p class="text-secondary small">10:30 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-8.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Winnie John</p>
                                        <p class="text-secondary small">Australia</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Colds and flu</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">winnie@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-primary">Waiting</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>058ID</td>
                            <td><p class="mb-0 fw-medium">9 June 2024</p>
                                <p class="text-secondary small">11:30 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Alicia Smith</p>
                                        <p class="text-secondary small">United States</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Diarrhea</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">alicia@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-success">Complete</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>500ID</td>
                            <td><p class="mb-0 fw-medium">10 June 2024</p>
                                <p class="text-secondary small">11:55 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-2.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Jr. Chen Li</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Conjunctivitis</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">cheli@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-danger">Rejected</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2054ID</td>
                            <td><p class="mb-0 fw-medium">11 June 2024</p>
                                <p class="text-secondary small">12:15 PM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-3.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">David Warner</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Headaches</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">david@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>105ID</td>
                            <td><p class="mb-0 fw-medium">11 June 2024</p>
                                <p class="text-secondary small">1:30 PM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-4.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Winnie John</p>
                                        <p class="text-secondary small">Australia</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Mononucleosis</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">winnie@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-theme-accent-1">Waiting</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>058ID</td>
                            <td><p class="mb-0 fw-medium">12 June 2024</p>
                                <p class="text-secondary small">2:20 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-5.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Alicia Smith</p>
                                        <p class="text-secondary small">United States</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Stomach aches</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">alicia@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-info">In-Progress</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>501ID</td>
                            <td><p class="mb-0 fw-medium">12 June 2024</p>
                                <p class="text-secondary small">3:30 PM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-6.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Jr. Chen Li</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Allergies</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">cheli@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-theme-accent-1">Cancelled</span>
                            </td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3052ID</td>
                            <td><p class="mb-0 fw-medium">12 June 2024</p>
                                <p class="text-secondary small">9:10 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-7.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">David Warner</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Colds and flu</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">david@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3105ID</td>
                            <td><p class="mb-0 fw-medium">13 June 2024</p>
                                <p class="text-secondary small">10:30 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-8.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Winnie John</p>
                                        <p class="text-secondary small">Australia</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Conjunctivitis</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">winnie@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-primary">Waiting</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5058ID</td>
                            <td><p class="mb-0 fw-medium">13 June 2024</p>
                                <p class="text-secondary small">11:30 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Alicia Smith</p>
                                        <p class="text-secondary small">United States</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Diarrhea</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">alicia@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-success">Complete</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6500ID</td>
                            <td><p class="mb-0 fw-medium">14 June 2024</p>
                                <p class="text-secondary small">11:55 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-2.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Jr. Chen Li</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Headaches</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">cheli@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-danger">Rejected</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7054ID</td>
                            <td><p class="mb-0 fw-medium">14 June 2024</p>
                                <p class="text-secondary small">12:15 PM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-3.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">David Warner</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Allergies</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">david@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>805ID</td>
                            <td><p class="mb-0 fw-medium">14 June 2024</p>
                                <p class="text-secondary small">1:30 PM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-4.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Winnie John</p>
                                        <p class="text-secondary small">Australia</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Mononucleosis</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">winnie@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-theme-accent-1">Waiting</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9058ID</td>
                            <td><p class="mb-0 fw-medium">15 June 2024</p>
                                <p class="text-secondary small">2:20 AM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-5.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Alicia Smith</p>
                                        <p class="text-secondary small">United States</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Stomach aches</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">alicia@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-info">In-Progress</span></td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1100ID</td>
                            <td><p class="mb-0 fw-medium">15 June 2024</p>
                                <p class="text-secondary small">3:30 PM</p></td>
                            <td>
                                <div class="row align-items-center flex-nowrap">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                                    src="assets/img/modern-ai-image/user-6.jpg" alt=""></figure>
                                    </div>
                                    <div class="col ps-0"><p class="mb-0">Jr. Chen Li</p>
                                        <p class="text-secondary small">United Kingdom</p></div>
                                </div>
                            </td>
                            <td><p class="mb-0">Allergies</p>
                                <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                            <td><p class="mb-0">cheli@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p></td>
                            <td><span class="badge badge-light rounded-pill text-bg-theme-accent-1">Cancelled</span>
                            </td>
                            <td>
                                <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                        data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-4 mt-1"><p class="h4 mb-0">Here for emergency?<br>check doctor's
                        availability</p>
                    <p class="text-secondary small mb-0">Let's give priority and give quick treatment for quick
                        recovery</p></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card adminuiux-card bg-theme-1-space text-white mb-3">
                        <div class="card-body"><p class="h3 mb-1">Maternity Care</p>
                            <p class="h6 fw-medium mb-3">services plan and options</p>
                            <p class="opacity-75">We have large accommodation with supportive and caring staff.</p>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-sm btn-outline-light"><span>More</span> <i
                                                class="bi bi-arrow-right"></i></button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-outline-light"><i data-feather="phone"></i> <span>Call us</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="swiper swiperautononav mb-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide width-250">
                                <div class="card adminuiux-card">
                                    <div class="card-body">
                                        <div class="row gx-3">
                                            <div class="col-3">
                                                <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                            src="assets/img/modern-ai-image/user-8.jpg" alt=""></div>
                                            </div>
                                            <div class="col-9 mb-3"><p class="h6 text-truncated mb-0"><span
                                                            class="position-relative">Dr. Ryan Sylia <span
                                                                class="position-absolute top-50 start-100 translate-middle p-1 bg-success rounded-circle mx-2"><span
                                                                    class="visually-hidden">New alerts</span></span></span>
                                                </p>
                                                <p class="text-secondary text-truncate small">Orthopedic Specialist</p>
                                            </div>
                                        </div>
                                        <div class="row gx-3 mb-3">
                                            <div class="col-auto"><p class="h6 mb-0">1.5 <small class="h6 fw-normal">hours</small>
                                                </p>
                                                <p class="text-secondary small">Available now</p></div>
                                            <div class="col text-end"><p class="h6 mb-0">5 <small class="h6 fw-normal">Visits</small>
                                                </p>
                                                <p class="text-secondary small">Today</p></div>
                                        </div>
                                        <div class="row gx-3">
                                            <div class="col">
                                                <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                            data-feather="phone"></i></button>
                                                <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                            data-feather="message-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide width-250">
                                <div class="card adminuiux-card">
                                    <div class="card-body">
                                        <div class="row gx-3">
                                            <div class="col-3">
                                                <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                            src="assets/img/modern-ai-image/user-2.jpg" alt=""></div>
                                            </div>
                                            <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate"><span
                                                            class="position-relative">Dr. Chin Chou <span
                                                                class="position-absolute top-50 start-100 translate-middle p-1 bg-orange rounded-circle mx-2"><span
                                                                    class="visually-hidden">New alerts</span></span></span>
                                                </p>
                                                <p class="text-secondary small text-truncate">Expert Dentist</p></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-auto"><p class="h6 mb-0 text-orange">2 <small
                                                            class="h6 fw-normal">hours</small></p>
                                                <p class="text-secondary small">available after 2 hrs</p></div>
                                            <div class="col text-end"><p class="h6 mb-0">5 <small class="h6 fw-normal">Visits</small>
                                                </p>
                                                <p class="text-secondary small">Today</p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                            data-feather="phone"></i></button>
                                                <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                            data-feather="message-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide width-250">
                                <div class="card adminuiux-card">
                                    <div class="card-body">
                                        <div class="row gx-3">
                                            <div class="col-3">
                                                <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                            src="assets/img/modern-ai-image/user-4.jpg" alt=""></div>
                                            </div>
                                            <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate">Dr. Sundar
                                                    Vishwas</p>
                                                <p class="text-secondary small text-truncate">General Expert</p></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-auto"><p class="h6 mb-0">0.5 <small class="h6 fw-normal">hours</small>
                                                </p>
                                                <p class="text-secondary small">Available now</p></div>
                                            <div class="col text-end"><p class="h6 mb-0">5 <small class="h6 fw-normal">Visits</small>
                                                </p>
                                                <p class="text-secondary small">Today</p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                            data-feather="phone"></i></button>
                                                <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                            data-feather="message-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide width-250">
                                <div class="card adminuiux-card">
                                    <div class="card-body">
                                        <div class="row gx-3">
                                            <div class="col-3">
                                                <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                            src="assets/img/modern-ai-image/user-6.jpg" alt=""></div>
                                            </div>
                                            <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate">Dr. Smita
                                                    D'Souza</p>
                                                <p class="text-secondary small text-truncate">General Expert</p></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-auto"><p class="h6 mb-0">3.0 <small class="h6 fw-normal">hours</small>
                                                </p>
                                                <p class="text-secondary small">Available now</p></div>
                                            <div class="col text-end"><p class="h6 mb-0">3 <small class="h6 fw-normal">Visits</small>
                                                </p>
                                                <p class="text-secondary small">Today</p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                            data-feather="phone"></i></button>
                                                <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                            data-feather="message-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide width-250">
                                <div class="card adminuiux-card">
                                    <div class="card-body">
                                        <div class="row gx-3">
                                            <div class="col-3">
                                                <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                            src="assets/img/modern-ai-image/user-7.jpg" alt=""></div>
                                            </div>
                                            <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate">Dr. Angelina</p>
                                                <p class="text-secondary small text-truncate">Skincare Specialist</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto"><p class="h6 mb-0">2.0 <small class="h6 fw-normal">hours</small>
                                                </p>
                                                <p class="text-secondary small">Available now</p></div>
                                            <div class="col text-end"><p class="h6 mb-0">3 <small class="h6 fw-normal">Visits</small>
                                                </p>
                                                <p class="text-secondary small">Today</p></div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                            data-feather="phone"></i></button>
                                                <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                            data-feather="message-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade adminuiux-modal" tabindex="-1" id="viewappointmentmodal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-block">
                        <div class="row align-items-center gx-3">
                            <div class="col-12 col-sm"><p class="text-secondary small mb-0">Appointment Schedule</p>
                                <p class="modal-title h5">2:20 AM 9 June 2024</p></div>
                            <div class="col col-sm-auto"><span class="badge badge-light rounded-pill text-bg-success">Paid</span>
                                <span class="badge badge-light rounded-pill text-bg-info">In-Progress</span></div>
                            <div class="col-auto">
                                <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                        data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots-vertical"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                        <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body"><p class="text-secondary small mb-0">Disease Details</p>
                        <p>Stomach aches</p>
                        <p class="text-secondary small mb-0">Consultation</p>
                        <p>Offline Consultation</p>
                        <p class="text-secondary small mb-0">Health issue description</p>
                        <p>Feeling very heavy pain and couldn't able to eat properly.</p>
                        <p class="text-secondary small mb-0">Doctor</p>
                        <p>Dr. Ryan Sylia</p>
                        <div class="row align-items-center mb-3">
                            <div class="col">
                                <hr class="bordered">
                            </div>
                            <div class="col-auto"><p class="h6">Patient Details</p></div>
                            <div class="col">
                                <hr class="bordered">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-auto text-center mb-2 mb-md-0">
                                <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                            src="assets/img/modern-ai-image/user-5.jpg" alt=""></figure>
                            </div>
                            <div class="col-12 col-sm">
                                <div class="row align-items-center mb-2">
                                    <div class="col"><a href="clinic-view-patient.html" class="h6 style-none">Alicia
                                            Smith</a>
                                        <p>
                                            <span class="badge badge-light rounded-pill text-bg-theme-accent-1">Revisit</span>
                                            <span class="badge badge-light rounded-pill text-bg-theme-accent-1">VIP</span>
                                        </p></div>
                                    <div class="col-auto"><a href="clinic-view-patient.html"
                                                             class="btn btn-square btn-link border"
                                                             data-bs-toggle="tooltip" title="View"><i
                                                    data-feather="user"></i> </a>
                                        <button class="btn btn-square btn-outline-success mx-2" data-bs-toggle="tooltip"
                                                title="Call"><i data-feather="phone"></i></button>
                                        <button class="btn btn-square btn-outline-warning" data-bs-toggle="tooltip"
                                                title="Message"><i data-feather="message-circle"></i></button>
                                    </div>
                                </div>
                                <p class="text-secondary">12, Featherstone Street, Ward, London, NG25 5AY<br>United
                                    Kingdom</p></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col">
                            <button class="btn btn-square btn-success" data-bs-toggle="tooltip" title="Paid"><i
                                        class="bi bi-cash"></i> <span class="d-none">Paid</span></button>
                            <button class="btn btn-square btn-accent mx-2" data-bs-toggle="tooltip"
                                    title="Mark as Completed"><i class="bi bi-clipboard-check"></i> <span
                                        class="d-none">Completed</span></button>
                            <button class="btn btn-square btn-outline-warning" data-bs-toggle="tooltip" title="No Show">
                                <i class="bi bi-eye-slash"></i> <span class="d-none">No Show</span></button>
                            <button class="btn btn-square btn-link border mx-2" data-bs-toggle="tooltip" title="Cancel">
                                <i class="bi bi-x-circle"></i> <span class="d-none">Cancel</span></button>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-link theme-red" data-bs-dismiss="modal"
                                    aria-label="Close">Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="adminuiux-mobile-footer style-1">
            <div class="container">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item"><a class="nav-link" href="clinic-dashboard.html"><span><i class="nav-icon"
                                                                                                   data-feather="home"></i> <span
                                        class="nav-text">Home</span></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="clinic-schedule.html"><span><i class="nav-icon"
                                                                                                  data-feather="calendar"></i> <span
                                        class="nav-text">Schedule</span></span></a></li>
                    <li class="nav-item"><a href="clinic-add-appointment.html" class="nav-link center-menu-btn"><span
                                    class="bg-theme-r-gradient rounded-circle text-white"><i
                                        class="nav-icon bi bi-plus-lg text-white"></i></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="clinic-patients.html"><span><i class="nav-icon"
                                                                                                  data-feather="users"></i> <span
                                        class="nav-text">Patient</span></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="clinic-chat-call.html"><span><i class="nav-icon"
                                                                                                   data-feather="message-square"></i> <span
                                        class="nav-text">Chat</span></span></a></li>
                </ul>
            </div>
        </footer>
    </main>
</div>
<footer class="adminuiux-footer has-adminuiux-sidebar text-center mt-auto"><p class="text-secondary small mb-2">&copy;2025,
        Rights reserved by <a href="https://adminuiux.com/" target="_blank" class="style-none">DigiClinicUIUX</a></p>
    <ul class="nav small justify-content-center">
        <li class="nav-item"><a class="nav-link"
                                href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/help-center.html">Help</a>
        </li>
        <li class="nav-item">|</li>
        <li class="nav-item"><a class="nav-link"
                                href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/terms-of-use.html">Terms
                of Use</a></li>
        <li class="nav-item">|</li>
        <li class="nav-item"><a class="nav-link"
                                href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/privacy-policy.html">Privacy</a>
        </li>
    </ul>
</footer>
<script src="assets/js/clinic/clinic-schedule-grid.js"></script>
</body>
<!-- Mirrored from adminuiux.com/adminuiux/digiclinic-mobile-uiux/clinic-schedule-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 08:03:25 GMT -->
</html>











<div class="container" id="main-content">
    <div class="collapse" id="filterschedule">
        <div class="card adminuiux-card mt-3">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="form-floating"><input class="form-control" placeholder="Search..."> <label>Search...</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="form-floating"><select class="form-select">
                                <option selected="selected">All</option>
                                <option value="1">Appointments</option>
                                <option value="2">Birthday</option>
                                <option value="3">Meetings</option>
                            </select> <label>Appointment Type</label></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="form-floating"><select class="form-select">
                                <option selected="selected">All</option>
                                <option value="1">Dr. Ryan Sylia</option>
                                <option value="2">Dr. Angelina</option>
                                <option value="3">Dr. Smriti Vandana</option>
                            </select> <label>Doctor</label></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="form-floating"><select class="form-select">
                                <option selected="selected">All</option>
                                <option value="1">Created</option>
                                <option value="2">Upcoming</option>
                                <option value="3">Ongoing</option>
                                <option value="3">Completed</option>
                                <option value="3">Deleted</option>
                            </select> <label>Appointment Status</label></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card adminuiux-card mt-3 mb-3">
        <div class="card-body pt-0">
            <table id="clientScheduleGrid" class="table w-100 nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th class="all">Schedule</th>
                    <th data-breakpoints="xs sm">Patient</th>
                    <th data-breakpoints="xs sm md">Disease</th>
                    <th data-breakpoints="xs sm md">Contact info</th>
                    <th data-breakpoints="xs sm">Status</th>
                    <th class="xs sm">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2054ID</td>
                    <td><p class="mb-0 fw-medium">8 June 2024</p>
                        <p class="text-secondary small">9:10 AM</p></td>
                    <td>
                        <div class="row align-items-center flex-nowrap">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                            src="assets/img/modern-ai-image/user-7.jpg" alt=""></figure>
                            </div>
                            <div class="col ps-0"><p class="mb-0">David Warner</p>
                                <p class="text-secondary small">United Kingdom</p></div>
                        </div>
                    </td>
                    <td><p class="mb-0">Allergies</p>
                        <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                    <td><p class="mb-0">david@sales..core.com</p>
                        <p class="text-secondary small">+44 8466585****1154</p></td>
                    <td><span class="badge badge-light rounded-pill text-bg-warning">Pending</span></td>
                    <td>
                        <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                        <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>105ID</td>
                    <td><p class="mb-0 fw-medium">9 June 2024</p>
                        <p class="text-secondary small">10:30 AM</p></td>
                    <td>
                        <div class="row align-items-center flex-nowrap">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                            src="assets/img/modern-ai-image/user-8.jpg" alt=""></figure>
                            </div>
                            <div class="col ps-0"><p class="mb-0">Winnie John</p>
                                <p class="text-secondary small">Australia</p></div>
                        </div>
                    </td>
                    <td><p class="mb-0">Colds and flu</p>
                        <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                    <td><p class="mb-0">winnie@sales..core.com</p>
                        <p class="text-secondary small">+44 8466585****1154</p></td>
                    <td><span class="badge badge-light rounded-pill text-bg-primary">Waiting</span></td>
                    <td>
                        <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                        <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>058ID</td>
                    <td><p class="mb-0 fw-medium">9 June 2024</p>
                        <p class="text-secondary small">11:30 AM</p></td>
                    <td>
                        <div class="row align-items-center flex-nowrap">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 mb-0 coverimg rounded-circle"><img
                                            src="assets/img/modern-ai-image/user-1.jpg" alt=""></figure>
                            </div>
                            <div class="col ps-0"><p class="mb-0">Alicia Smith</p>
                                <p class="text-secondary small">United States</p></div>
                        </div>
                    </td>
                    <td><p class="mb-0">Diarrhea</p>
                        <p class="text-secondary small">Dr. Ryan Sylia</p></td>
                    <td><p class="mb-0">alicia@sales..core.com</p>
                        <p class="text-secondary small">+44 8466585****1154</p></td>
                    <td><span class="badge badge-light rounded-pill text-bg-success">Complete</span></td>
                    <td>
                        <button class="btn btn-square btn-link" data-bs-toggle="modal"
                                data-bs-target="#viewappointmentmodal"><i class="bi bi-eye"></i></button>
                        <div class="dropdown d-inline-block"><a class="btn btn-link no-caret"
                                                                data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                <li><a class="dropdown-item theme-red" href="javascript:void(0)">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center mb-4 mt-1"><p class="h4 mb-0">Here for emergency?<br>check doctor's
                availability</p>
            <p class="text-secondary small mb-0">Let's give priority and give quick treatment for quick
                recovery</p></div>
        <div class="col-12 col-md-4 col-lg-3">
            <div class="card adminuiux-card bg-theme-1-space text-white mb-3">
                <div class="card-body"><p class="h3 mb-1">Maternity Care</p>
                    <p class="h6 fw-medium mb-3">services plan and options</p>
                    <p class="opacity-75">We have large accommodation with supportive and caring staff.</p>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-sm btn-outline-light"><span>More</span> <i
                                        class="bi bi-arrow-right"></i></button>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm btn-outline-light"><i data-feather="phone"></i> <span>Call us</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 col-lg-9">
            <div class="swiper swiperautononav mb-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide width-250">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <div class="row gx-3">
                                    <div class="col-3">
                                        <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                    src="assets/img/modern-ai-image/user-8.jpg" alt=""></div>
                                    </div>
                                    <div class="col-9 mb-3"><p class="h6 text-truncated mb-0"><span
                                                    class="position-relative">Dr. Ryan Sylia <span
                                                        class="position-absolute top-50 start-100 translate-middle p-1 bg-success rounded-circle mx-2"><span
                                                            class="visually-hidden">New alerts</span></span></span>
                                        </p>
                                        <p class="text-secondary text-truncate small">Orthopedic Specialist</p>
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-auto"><p class="h6 mb-0">1.5 <small class="h6 fw-normal">hours</small>
                                        </p>
                                        <p class="text-secondary small">Available now</p></div>
                                    <div class="col text-end"><p class="h6 mb-0">5 <small class="h6 fw-normal">Visits</small>
                                        </p>
                                        <p class="text-secondary small">Today</p></div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col">
                                        <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                    data-feather="phone"></i></button>
                                        <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                    data-feather="message-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide width-250">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <div class="row gx-3">
                                    <div class="col-3">
                                        <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                    src="assets/img/modern-ai-image/user-2.jpg" alt=""></div>
                                    </div>
                                    <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate"><span
                                                    class="position-relative">Dr. Chin Chou <span
                                                        class="position-absolute top-50 start-100 translate-middle p-1 bg-orange rounded-circle mx-2"><span
                                                            class="visually-hidden">New alerts</span></span></span>
                                        </p>
                                        <p class="text-secondary small text-truncate">Expert Dentist</p></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto"><p class="h6 mb-0 text-orange">2 <small
                                                    class="h6 fw-normal">hours</small></p>
                                        <p class="text-secondary small">available after 2 hrs</p></div>
                                    <div class="col text-end"><p class="h6 mb-0">5 <small class="h6 fw-normal">Visits</small>
                                        </p>
                                        <p class="text-secondary small">Today</p></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                    data-feather="phone"></i></button>
                                        <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                    data-feather="message-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide width-250">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <div class="row gx-3">
                                    <div class="col-3">
                                        <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                    src="assets/img/modern-ai-image/user-4.jpg" alt=""></div>
                                    </div>
                                    <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate">Dr. Sundar
                                            Vishwas</p>
                                        <p class="text-secondary small text-truncate">General Expert</p></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto"><p class="h6 mb-0">0.5 <small class="h6 fw-normal">hours</small>
                                        </p>
                                        <p class="text-secondary small">Available now</p></div>
                                    <div class="col text-end"><p class="h6 mb-0">5 <small class="h6 fw-normal">Visits</small>
                                        </p>
                                        <p class="text-secondary small">Today</p></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                    data-feather="phone"></i></button>
                                        <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                    data-feather="message-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide width-250">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <div class="row gx-3">
                                    <div class="col-3">
                                        <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                    src="assets/img/modern-ai-image/user-6.jpg" alt=""></div>
                                    </div>
                                    <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate">Dr. Smita
                                            D'Souza</p>
                                        <p class="text-secondary small text-truncate">General Expert</p></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto"><p class="h6 mb-0">3.0 <small class="h6 fw-normal">hours</small>
                                        </p>
                                        <p class="text-secondary small">Available now</p></div>
                                    <div class="col text-end"><p class="h6 mb-0">3 <small class="h6 fw-normal">Visits</small>
                                        </p>
                                        <p class="text-secondary small">Today</p></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                    data-feather="phone"></i></button>
                                        <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                    data-feather="message-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide width-250">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <div class="row gx-3">
                                    <div class="col-3">
                                        <div class="avatar avatar-40 rounded-circle coverimg mb-3"><img
                                                    src="assets/img/modern-ai-image/user-7.jpg" alt=""></div>
                                    </div>
                                    <div class="col-9 mb-3"><p class="h6 mb-0 text-truncate">Dr. Angelina</p>
                                        <p class="text-secondary small text-truncate">Skincare Specialist</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto"><p class="h6 mb-0">2.0 <small class="h6 fw-normal">hours</small>
                                        </p>
                                        <p class="text-secondary small">Available now</p></div>
                                    <div class="col text-end"><p class="h6 mb-0">3 <small class="h6 fw-normal">Visits</small>
                                        </p>
                                        <p class="text-secondary small">Today</p></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-theme"><i class="bi bi-plus"></i> <span>Book</span>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-square btn-outline-success mx-2"><i
                                                    data-feather="phone"></i></button>
                                        <button class="btn btn-sm btn-square btn-outline-warning"><i
                                                    data-feather="message-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
