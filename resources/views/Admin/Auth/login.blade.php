<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @php
        $host = request()->getHost();
    @endphp

    @if (Str::contains($host, 'technicul.com'))
        <meta name="robots" content="noindex, nofollow">
        <meta name="Googlebot" content="noindex, nofollow">
    @endif --}}
    <title>My Dashbord</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="shortcut icon" type="image/png" href="/backend/dist/images/logos/favicon.ico" /> -->
    <link id="themeColors" rel="stylesheet" href="/backend/dist/css/style.min.css" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="./index.html" class="text-nowrap logo-img d-block px-14 py-9 w-100">
                            <!-- <img src="/logo.svg" width="180" alt="" style="filter: invert(0%) sepia(100%) saturate(0%) hue-rotate(234deg) brightness(96%) contrast(107%);"> -->
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="/backend/dist/images/backgrounds/login-security.svg" alt=""
                                class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <div class="text-center">
                                    <img src="/logo.svg" width="180" alt=""
                                        style="filter: invert(34%) sepia(66%) saturate(5876%) hue-rotate(208deg) brightness(95%) contrast(103%);" />
                                    <br /><br />
                                    <h2 class="mb-3 fs-7 fw-bolder">Welcome to My Dashbord</h2>
                                    <p class=" mb-9">Your Admin Dashboard</p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">E-Mail</label>
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign
                                        In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/backend/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="/backend/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="/backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/dist/js/app.min.js"></script>
    <script src="/backend/dist/js/app.init.js"></script>
    <script src="/backend/dist/js/app-style-switcher.js"></script>
    <script src="/backend/dist/js/sidebarmenu.js"></script>
    <script src="/backend/dist/js/custom.js"></script>
</body>

</html>
