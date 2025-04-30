<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DigiClinic AdminUIUX - Bootstrap HTML Admin template - adminuiux.com</title>
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/images/mrDorbinLogo.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;400;500;600&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <style>
        :root {
            --adminuiux-content-font: 'Roboto';
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Fira Sans Condensed";
            --adminuiux-title-font-weight: 500
        }
    </style>
    <script defer="defer" src="assets/js/app8032.js?6b53ec3d433ab1dff13c"></script>
    <link href="assets/css/app8032.css?6b53ec3d433ab1dff13c" rel="stylesheet">
</head>

<body class="main-bg main-bg-opac main-bg-blur overflow-hidden">
    <div class="pageloader">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center text-center h-100">
                <div class="col-12 mb-auto pt-4"></div>
                <div class="col-auto"><img src="{{ asset('admin/assets/images/mrDorbinLogo.jpg') }}" alt="" class="height-60 mb-3">
                    <p class="h6 mb-0">AdminUIUX</p>
                    <p class="h3 mb-4">Digi Clinic</p>
                    <div class="loaderplus mb-2"></div>
                </div>
                <div class="col-12 mt-auto pb-4">
                    <p class="text-secondary">Please wait we are preparing awesome things to
                        preview...</p>
                </div>
            </div>
        </div>
    </div>
    <main class="flex-shrink-0 pt-0 h-100">
        <div class="container-fluid">
            <div class="auth-wrapper">
                <div class="d-flex flex-column vh-100 pt-ios">
                    <header class="adminuiux-header">
                        <nav class="navbar"><a class="navbar-brand" href="#">
                                <img data-bs-img="light"
                                    src="{{ asset('admin/assets/images/mrDorbinLogo.jpg') }}" alt=""
                                    class="me-3">
                                <img data-bs-img="dark"
                                    src="{{ asset('admin/assets/images/mrDorbinLogo.jpg') }}"
                                    alt="" class="me-3">
                                <div class="d-block"><span class="company-name text-uppercase h4"><b>Digi</b>Clinic</span>
                                    <p class="company-tagline">Mobile HTML template</p>
                                </div>
                            </a>
                            <div class="ms-auto"></div>
                            <div class="ms-auto"></div>
                        </nav>
                    </header>
                    <div class="row justify-content-center h-100">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="row h-100 align-items-center justify-content-center my-md-3">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12 col-md-10 col-lg-8 col-xxl-6 login-box">
                                        <p
                                            class="h1 fw-bold text-center mb-4">Login</p>
                                        <div class="form-floating mb-3"><input type="email" class="form-control"
                                                id="emailadd"
                                                placeholder="Enter email address"
                                                value="info@adminuiux" autofocus=""> <label
                                                for="emailadd">Email Address</label></div>
                                        <div class="position-relative">
                                            <div class="form-floating mb-3"><input type="password" class="form-control"
                                                    id="passwd"
                                                    placeholder="Enter your password"> <label
                                                    for="passwd">Password</label></div>
                                            <button
                                                class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2">
                                                <i class="bi bi-eye"></i></button>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <div class="form-check"><input class="form-check-input" type="checkbox"
                                                        name="rememberme" id="rememberme"> <label
                                                        class="form-check-label" for="rememberme">Remember me</label></div>
                                            </div>
                                            <div class="col-auto"><a href="clinic-forgot-password.html" class="">Forget
                                                    Password?</a></div>
                                        </div>
                                        <a href="clinic-dashboard.html" class="btn btn-theme w-100 mb-4">Login</a>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    r class="adminuiux-footer mt-auto">
                    <div class="container-fluid text-center"><span class="small">Copyright @2024, Creatively designed by <a
                                href="https://adminuiux.com/"
                                target="_blank">DigiClinic - Adminuiux</a> on Earth ❤️</span></div>
                    </footer>
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.10.0/styles/base16/circus.min.css">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
                    <script>
                        document.querySelectorAll(".code").forEach((e => {
                            hljs.highlightElement(e)
                        }))
                    </script>
                </div>
            </div>
        </div>
    </main>
</body>

</html>