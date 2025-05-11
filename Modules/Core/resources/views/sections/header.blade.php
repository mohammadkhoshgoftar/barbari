<header class="adminuiux-header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="btn btn-link btn-square sidebar-toggler" type="button" onclick="initSidebar()"><i
                    class="sidebar-svg" data-feather="menu"></i></button>
            <a class="navbar-brand align-items-center" href="{{ route('dashboard') }}">
{{--                <img data-bs-img="light"--}}
{{--                    src="{{asset('admin/assets/images/mrDorbinLogo.jpg')}}" alt=""> <img--}}
{{--                    data-bs-img="dark" src="a{{asset('admin/assets/images/mrDorbinLogo.jpg')}}" alt="">--}}
                <h5 class="fw-bold mb-0">
                    سیستم مدیریت باربری
                </h5>
            </a>
            <div class="ms-auto"></div>
            <div class="ms-auto">
                {{-- <button class="btn btn-link btn-square btnsunmoon btn-link-header" id="btn-layout-modes-dark-page"><i--}}
                {{-- class="sun mx-auto" data-feather="sun"></i> <i class="moon mx-auto" data-feather="moon"></i>--}}
                {{-- </button>--}}
                {{-- <button class="btn btn-link btn-square btn-icon btn-link-header d-inline-block d-xxl-none" type="button"--}}
                {{-- onclick="openSearch()"><i data-feather="search"></i></button>--}}
                {{-- <div class="dropdown d-none d-sm-inline-block">--}}
                {{-- <button class="btn btn-link btn-square btn-icon btn-link-header dropdown-toggle no-caret"--}}
                {{-- type="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="grid"></i>--}}
                {{-- </button>--}}
                {{-- <div class="dropdown-menu dropdown-menu-end width-300 pt-0 px-0">--}}
                {{-- <div class="bg-theme-1-space rounded py-3 mb-2 dropdown-dontclose text-center"><p class="mb-0">--}}
                {{-- Applications</p>--}}
                {{-- <p class="opacity-50 small">Make your app innovative</p></div>--}}
                {{-- <div class="px-2">--}}
                {{-- <div class="row g-0 text-center mb-2">--}}
                {{-- <div class="col-4"><a class="dropdown-item square-item"--}}
                {{-- href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-finance.html">--}}
                {{-- <div class="avatar avatar-40 rounded mb-2"><i class="bi bi-bank fs-4 mx-0"></i>--}}
                {{-- </div>--}}
                {{-- <p class="mb-0">Finance</p>--}}
                {{-- <p class="fs-12 opacity-50 mb-2">Accounting</p></a></div>--}}
                {{-- <div class="col-4"><a class="dropdown-item square-item"--}}
                {{-- href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-network.html">--}}
                {{-- <div class="avatar avatar-40 rounded mb-2"><i class="bi bi-globe fs-4 mx-0"></i>--}}
                {{-- </div>--}}
                {{-- <p class="mb-0">Network</p>--}}
                {{-- <p class="fs-12 opacity-50 mb-2">Stabilize</p></a></div>--}}
                {{-- <div class="col-4"><a class="dropdown-item square-item"--}}
                {{-- href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-ecommerce.html">--}}
                {{-- <div class="avatar avatar-40 rounded mb-2"><i class="bi bi-box fs-4 mx-0"></i>--}}
                {{-- </div>--}}
                {{-- <p class="mb-0">Inventory</p>--}}
                {{-- <p class="fs-12 opacity-50 mb-2">Assuring</p></a></div>--}}
                {{-- <div class="col-4"><a class="dropdown-item square-item"--}}
                {{-- href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-project.html">--}}
                {{-- <div class="avatar avatar-40 rounded mb-2"><i--}}
                {{-- class="bi bi-folder fs-4 mx-0"></i></div>--}}
                {{-- <p class="mb-0">Project</p>--}}
                {{-- <p class="fs-12 opacity-50 mb-2">Management</p></a></div>--}}
                {{-- <div class="col-4"><a class="dropdown-item square-item"--}}
                {{-- href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-social.html">--}}
                {{-- <div class="avatar avatar-40 rounded mb-2"><i--}}
                {{-- class="bi bi-people fs-4 mx-0"></i></div>--}}
                {{-- <p class="mb-0">Social</p>--}}
                {{-- <p class="fs-12 opacity-50 mb-2">Tracking</p></a></div>--}}
                {{-- <div class="col-4"><a class="dropdown-item square-item"--}}
                {{-- href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-learning.html">--}}
                {{-- <div class="avatar avatar-40 rounded mb-2"><i--}}
                {{-- class="bi bi-journal-bookmark fs-4 mx-0"></i></div>--}}
                {{-- <p class="mb-0">Learning</p>--}}
                {{-- <p class="fs-12 opacity-50 mb-2">Make-easy</p></a></div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- <div class="text-center"><a class="btn btn-link text-center"--}}
                {{-- href="https://www.adminuiux.com/adminuiux/digiclinic-mobile-uiux/app-demo.html">View--}}
                {{-- all <i class="bi bi-arrow-right fs-14"></i></a></div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- <div class="dropdown d-none d-sm-inline-block">--}}
                {{-- <button class="btn btn-link btn-square btn-icon btn-link-header dropdown-toggle no-caret"--}}
                {{-- type="button" data-bs-toggle="dropdown" aria-expanded="false"><i--}}
                {{-- class="bi bi-translate"></i></button>--}}
                {{-- <ul class="dropdown-menu dropdown-menu-end">--}}
                {{-- <li><a class="dropdown-item active" data-value="EN">EN - English</a></li>--}}
                {{-- <li><a class="dropdown-item" data-value="FR">FR - French</a></li>--}}
                {{-- <li><a class="dropdown-item" data-value="CH">CH - Chinese</a></li>--}}
                {{-- <li><a class="dropdown-item" data-value="HI">HI - Hindi</a></li>--}}
                {{-- </ul>--}}
                {{-- </div>--}}
                {{-- <a href="clinic-notifications.html"--}}
                {{-- class="btn btn-link btn-square btn-icon btn-link-header position-relative"><i--}}
                {{-- data-feather="bell"></i> <span--}}
                {{-- class="position-absolute top-0 end-0 badge rounded-pill bg-danger p-1"><small>9+</small> <span--}}
                {{-- class="visually-hidden">unread messages</span></span></a>--}}
                <div class="dropdown d-inline-block">
                    <a class="dropdown-toggle btn btn-link btn-link-header lh-1"
                        id="userprofiledd" data-bs-toggle="dropdown"
                        aria-expanded="false" role="button">
                        <div>
                            <i data-feather="user" class="fa-light fa-user"></i>
                            <span
                                class="mb-0">{{ auth()->user()->name }}</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end w-100 px-0 rounded-4" aria-labelledby="userprofiledd">
                        <div class="px-2">
                            <div class="dropdown-item theme-teal d-flex gap-2 align-items-center">
                                <i class="fal fa-user"></i>
                                پروفایل
                            </div>
                        </div>
                        <hr class="mx-3 my-1">
                        <div class="px-2">
                            <div>
                                <a class="dropdown-item theme-red d-flex gap-2 align-items-center" href="{{route('logout')}}">
                                    <i class="fal fa-power-off"></i>
                                    خروج
                                </a>
                            </div>
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