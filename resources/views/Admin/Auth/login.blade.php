<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Dashboard</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="/frontend/my-img/favicon.png" />
    <link id="themeColors" rel="stylesheet" href="/backend/dist/css/style.min.css" />

    <!-- ✅ Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ✅ Font Awesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #09c557;
            --bs-btn-border-color: #09c557;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #07a94b;
            --bs-btn-hover-border-color: #069544;
            --bs-btn-focus-shadow-rgb: 9, 197, 87;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #069544;
            --bs-btn-active-border-color: #05833c;
            --bs-btn-disabled-bg: #09c557;
            transition: all 0.3s ease;
        }

        /* Eye icon inside password field */
        .password-toggle {
            position: absolute;
            top: 70%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: #09c557;
        }

        input.form-control {
            padding-right: 40px; /* space for the icon */
        }

        .invalid-feedback {
            font-size: 0.9rem;
            color: #dc3545;
        }

        .alert-danger {
            background-color: #ffe6e6;
            border-color: #ffcccc;
            color: #cc0000;
        }
    </style>
</head>
<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="./index.html" class="text-nowrap logo-img d-block px-14 py-9 w-100">
                            <!-- <img src="/frontend/my-img/logo.png" width="180" alt=""> -->
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="/frontend/my-img/dashbord-theme.jpg" alt="dashboard"
                                class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <div class="text-center">
                                    <img src="/frontend/my-img/logo.png" width="180" alt="logo"/>
                                    <br /><br />
                                    <h2 class="mb-3 fs-7 fw-bolder">Welcome to </br> <span style="color:#09c557;">Bookify Dashboard</span> </h2>
                                    <p class="mb-9">Your Admin Dashboard</p>
                                </div>

                                <!-- ✅ Laravel Login Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="emailField" class="form-label">E-Mail</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailField" name="email" value="{{ old('email') }}" required />
                                        @error('email')
                                            <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-4 position-relative">
                                        <label for="passwordField" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="passwordField" name="password" required />
                                        <span class="password-toggle" onclick="togglePassword()">
                                            <i class="fa-solid fa-eye" id="toggleIcon"></i>
                                        </span>
                                        @error('password')
                                            <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- ✅ Wrong Credentials Error -->
                                    @if(session('error'))
                                        <div class="alert alert-danger py-2 mb-3" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                                </form>
                                <!-- ✅ End Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="/backend/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="/backend/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="/backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/dist/js/app.min.js"></script>
    <script src="/backend/dist/js/app.init.js"></script>
    <script src="/backend/dist/js/app-style-switcher.js"></script>
    <script src="/backend/dist/js/sidebarmenu.js"></script>
    <script src="/backend/dist/js/custom.js"></script>

    <!-- Password Show/Hide Script -->
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('passwordField');
            const toggleIcon = document.getElementById('toggleIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
                toggleIcon.style.color = '#09c557';
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
                toggleIcon.style.color = '#777';
            }
        }
    </script>

</body>
</html>
