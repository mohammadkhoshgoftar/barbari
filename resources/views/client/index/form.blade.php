<!doctype html>
<html lang="en">
<!-- Mirrored from adminuiux.com/adminuiux/digiclinic-mobile-uiux/component-input-groups.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 08:09:55 GMT -->
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
<body class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed theme-blue roundedui"
      data-theme="theme-blue" data-sidebarfill="adminuiux-sidebar-fill-white" data-bs-spy="scroll"
      data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
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
        <div class="container-fluid"><a class="navbar-brand" href="clinic-dashboard.html"><img data-bs-img="light"
                                                                                               src="assets/img/logo-light.svg"
                                                                                               alt=""> <img
                        data-bs-img="dark" src="assets/img/logo.svg" alt="">
                <div class=""><span class="company-name text-uppercase h4"><b>Digi</b>Clinic</span>
                    <p class="company-tagline">Mobile HTML template</p></div>
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="header-navbar">
                <ul class="navbar-nav mx-lg-3 mb-2 mb-md-0">
                    <li class="nav-item"><a class="nav-link" href="clinic-dashboard.html">DigiClinic Mobile</a></li>
                    <li class="nav-item"><a class="nav-link" href="components.html" aria-current="page">Components</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="documentation.html">Documentation</a></li>
                </ul>
            </div>
            <div class="ms-auto"></div>
            <div class="ms-auto">
                <button class="btn btn-link btn-square btnsunmoon btn-link-header" id="btn-layout-modes-dark-page"><i
                            class="sun mx-auto" data-feather="sun"></i> <i class="moon mx-auto" data-feather="moon"></i>
                </button>
                <a href="https://1.envato.market/Y6GgJ" target="_blank" class="btn btn-theme btn-link-header">Buy
                    Now</a></div>
        </div>
    </nav>
</header>
<div class="adminuiux-wrap">
    <main class="adminuiux-content" onclick="contentClick()">
        <div class="container-fluid mt-3">
            <div class="">
                <div class="row gx-3 align-items-center">
                    <div class="col col-sm mb-2 mb-sm-0"><p class="h5">Input Groups</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item bi"><a href="clinic-dashboard.html">App Demo</a></li>
                                <li class="breadcrumb-item bi"><a href="components.html">Components</a></li>
                                <li class="breadcrumb-item active bi" aria-current="page">Input Groups</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-auto"></div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card adminuiux-card mb-3">
                <div class="card-header">
                    <div class="row gx-3 align-items-center">
                        <div class="col"><p class="h6">Standard Input Group</p></div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-outline-theme btn-square" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false"><i class="bi bi-code-slash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">@</span> <input
                                class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1"></div>
                    <div class="input-group mb-3"><input class="form-control" placeholder="Recipient's username"
                                                         aria-label="Recipient's username"
                                                         aria-describedby="basic-addon2"> <span class="input-group-text"
                                                                                                id="basic-addon2">@adminuiux.com</span>
                    </div>
                    <div class="mb-3"><label for="basic-url" class="form-label">Your vanity URL</label>
                        <div class="input-group"><span class="input-group-text"
                                                       id="basic-addon3">https://adminuiux.com/</span> <input
                                    class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                    </div>
                    <div class="input-group mb-3"><span class="input-group-text">$</span> <input class="form-control"
                                                                                                 aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span></div>
                    <div class="input-group mb-3"><input class="form-control" placeholder="Username"
                                                         aria-label="Username"> <span class="input-group-text">@</span>
                        <input class="form-control" placeholder="Server" aria-label="Server"></div>
                    <div class="input-group"><span class="input-group-text">With textarea</span> <textarea
                                class="form-control" aria-label="With textarea"></textarea></div>
                </div>
                <div class="collapse" id="collapse1">
                    <div class="card-footer border-top">
                        <div class="bg-dark text-white p-2 rounded my-2"><pre class="mb-2"><code
                                        class="code rounded language-html">
&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text" id="basic-addon1"&gt;@&lt;/span&gt;
    &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon12"&gt;
    &lt;span class="input-group-text" id="basic-addon12"&gt;@adminuiux.com&lt;/span&gt;
&lt;/div&gt;

&lt;div class="mb-3"&gt;
    &lt;label for="basic-url" class="form-label"&gt;Your vanity URL&lt;/label&gt;
    &lt;div class="input-group"&gt;
        &lt;span class="input-group-text" id="basic-addon3"&gt;https://adminuiux.com/&lt;/span&gt;
        &lt;input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"&gt;
    &lt;/div&gt;
    &lt;div class="form-text" id="basic-addon4"&gt;Example help text goes outside the input group.&lt;/div&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text"&gt;$&lt;/span&gt;
    &lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"&gt;
    &lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username"&gt;
    &lt;span class="input-group-text"&gt;@&lt;/span&gt;
    &lt;input type="text" class="form-control" placeholder="Server" aria-label="Server"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
    &lt;span class="input-group-text"&gt;With textarea&lt;/span&gt;
    &lt;textarea class="form-control" aria-label="With textarea"&gt;&lt;/textarea&gt;
&lt;/div&gt;
                    </code></pre>
                            <button type="button" class="btn btn-outline-light btn-square copycode"><i
                                        class="bi bi-clipboard"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card adminuiux-card mb-3">
                <div class="card-header">
                    <div class="row gx-3 align-items-center">
                        <div class="col"><p class="h6">Input Group Sizes</p></div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-outline-theme btn-square" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false"><i class="bi bi-code-slash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group input-group-sm mb-3"><span class="input-group-text"
                                                                       id="inputGroup-sizing-sm">Small</span> <input
                                class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm"></div>
                    <div class="input-group mb-3"><span class="input-group-text"
                                                        id="inputGroup-sizing-default">Default</span> <input
                                class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default"></div>
                    <div class="input-group input-group-lg"><span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                        <input class="form-control" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-lg"></div>
                </div>
                <div class="collapse" id="collapse2">
                    <div class="card-footer border-top">
                        <div class="bg-dark text-white p-2 rounded my-2"><pre class="mb-2"><code
                                        class="code rounded language-html">
&lt;div class="input-group input-group-sm mb-3"&gt;
    &lt;span class="input-group-text" id="inputGroup-sizing-sm"&gt;Small&lt;/span&gt;
    &lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text" id="inputGroup-sizing-default"&gt;Default&lt;/span&gt;
    &lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"&gt;
&lt;/div&gt;

&lt;div class="input-group input-group-lg"&gt;
    &lt;span class="input-group-text" id="inputGroup-sizing-lg"&gt;Large&lt;/span&gt;
    &lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"&gt;
&lt;/div&gt;
                    </code></pre>
                            <button type="button" class="btn btn-outline-light btn-square copycode"><i
                                        class="bi bi-clipboard"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card adminuiux-card mb-3">
                <div class="card-header">
                    <div class="row gx-3 align-items-center">
                        <div class="col"><p class="h6">Input Group with Buttons and Dropdown</p></div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-outline-theme btn-square" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false"><i class="bi bi-code-slash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                        <input class="form-control" placeholder="" aria-label="Example text with button addon"
                               aria-describedby="button-addon1"></div>
                    <div class="input-group mb-3"><input class="form-control" placeholder="Recipient's username"
                                                         aria-label="Recipient's username"
                                                         aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <input class="form-control" placeholder="" aria-label="Example text with two button addons">
                    </div>
                    <div class="input-group mb-3"><input class="form-control" placeholder="Recipient's username"
                                                         aria-label="Recipient's username with two button addons">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input class="form-control" aria-label="Text input with dropdown button"></div>
                    <div class="input-group mb-3"><input class="form-control"
                                                         aria-label="Text input with dropdown button">
                        <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action before</a></li>
                            <li><a class="dropdown-item" href="#">Another action before</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input class="form-control" aria-label="Text input with 2 dropdown buttons">
                        <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse" id="collapse3">
                    <div class="card-footer border-top">
                        <div class="bg-dark text-white p-2 rounded my-2"><pre class="mb-2"><code
                                        class="code rounded language-html">
&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-outline-secondary" type="button" id="button-addon1"&gt;Button&lt;/button&gt;
    &lt;input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"&gt;
    &lt;button class="btn btn-outline-secondary" type="button" id="button-addon2"&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
    &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
    &lt;input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons"&gt;
    &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
    &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
    &lt;button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
    &lt;button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action before&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action before&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons"&gt;
    &lt;button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
                    </code></pre>
                            <button type="button" class="btn btn-outline-light btn-square copycode"><i
                                        class="bi bi-clipboard"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row gx-3">
                    <div class="col"><a href="component-selects.html" class="btn btn-accent my-2"><i
                                    class="bi bi-arrow-left mr-2"></i> Selects</a></div>
                    <div class="col-auto"><a href="component-floating-label.html" class="btn btn-theme my-2">Floating
                            Labels <i class="bi bi-arrow-right ms-2"></i></a></div>
                </div>
            </div>
        </div>
        <footer class="adminuiux-footer mt-auto">
            <div class="container-fluid text-center"><span class="small">Copyright @2024, Creatively designed by <a
                            href="https://adminuiux.com/" target="_blank">DigiClinic - Adminuiux</a> on Earth ❤️</span>
            </div>
        </footer>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.10.0/styles/base16/circus.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
        <script>document.querySelectorAll(".code").forEach((e => {
                hljs.highlightElement(e)
            }))</script>
    </main>
</div>
</body>
<!-- Mirrored from adminuiux.com/adminuiux/digiclinic-mobile-uiux/component-input-groups.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 08:09:55 GMT -->
</html>