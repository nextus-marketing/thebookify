<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
   <title>@yield('title')</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="/frontend/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/frontend/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
    <!-- My Custom Css -->
    <link rel="stylesheet" href=" /frontend/css/my.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <!-- Preloader Start -->
	<!-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div> -->
	<!-- Preloader End -->

    <!-- Header Start -->
	 <header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
                        <img src="/frontend/my-img/logo.png" alt="Logo" style="width:167px; height:39px; object-fit:contain;">
                    </a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item submenu"><a class="nav-link" href="/what_we_offer">What we offer</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="#0">Bookkeeping Services</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Payroll Services</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Tax & Accounting</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">CFO Advisory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Incorporation</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Sales Tax Consulting</a></li>
                                    </ul>
                                </li>                                 
                                <li class="nav-item submenu"><a class="nav-link" href="/what_we_offer">Industries we Serve</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="#0">Accounting Services For Small Business</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Healthcare</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Private Industries</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Real Estate</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Lodging Facilities</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">E-Commerce</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">colleges & Universities</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Accounting Services for Startup</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/pricing">Pricing</a></li>
                                <li class="nav-item"><a class="nav-link" href="#0">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="#0">Contact Us</a></li>                           
                            </ul>
                        </div>
                        <!-- Header Btn Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="#0" class="btn-default btn-highlighted">Get Started</a>
                        </div>
                        <!-- Header Btn End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
     <style>
/* Navbar background color */
.main-header .navbar {
  background-color: #ffffff !important;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

/* Nav link color */
.main-header .navbar-nav .nav-link {
  color: #000000 !important;
  font-weight: 500;
  transition: color 0.3s ease;
}

/* Hover and active link color */
.main-header .navbar-nav .nav-link:hover,
.main-header .navbar-nav .nav-link:focus,
.main-header .navbar-nav .nav-link.active {
  color: #004050 !important; 
}

/* Dropdown (submenu) background and text */
.main-header .navbar-nav .submenu ul {
  background-color: #ffffff;
}

.main-header .navbar-nav .submenu ul li a {
  color: #000000 !important;
}

.main-header .navbar-nav .submenu ul li a:hover {
  color: #004050 !important;
}
</style>


   @yield('content')

    <!-- Footer Section Start -->
<footer class="main-footer" style="color:#fff;">
  <div class="container">
    <div class="row">
      <!-- Left Content -->
      <div class="col-lg-6">
        <div class="footer-newsletter-box">
          <a class="navbar-brand" href="/">
            <img src="/frontend/my-img/logo.png" alt="Logo" style="width:167px; height:39px; object-fit:contain;">
          </a>
          <p style="color:#fff; margin-top:15px; line-height:1.7;">
            The Bookify is a platform that can solve all your financial hustle. <br>
            We provide financial support for your books, taxation, and expenses.
            From bookkeeping and payroll to strategic financial planning, we handle everything with transparency and precision.
          </p>
        </div>
      </div>

      <!-- Footer Columns -->
      <div class="col-lg-2 col-md-4 col-6">
        <div class="footer-links">
          <h3 style="font-size:18px; margin-bottom:15px;">Why TheBookify?</h3>
          <ul style="list-style:none; padding:0; margin:0;">
            <li><a href="#0" style="color:#fff; text-decoration:none;">Home</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">About Us</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Pricing</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Blog</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="footer-links">
          <h3 style="font-size:18px; margin-bottom:15px;">Can We Help</h3>
          <ul style="list-style:none; padding:0; margin:0;">
            <li><a href="#0" style="color:#fff; text-decoration:none;">Pricing</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Contact</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Privacy Policy</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="footer-links">
          <h3 style="font-size:18px; margin-bottom:15px;">What We Offer</h3>
          <ul style="list-style:none; padding:0; margin:0;">
            <li><a href="#0" style="color:#fff; text-decoration:none;">Bookkeeping Services</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Payroll Services</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Tax and Accounting</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Incorporation</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">CFO Advisory</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Sales Tax Consulting</a></li>
          </ul>
        </div>
      </div>
    </div>
<hr>
     <div class="container">
    <h2 style="color:#fff; font-size:26px; margin-bottom:30px; text-align:center;">Expert Services Near You</h2>
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-6">
        <p>Bookkeeping in Chicago</p>
        <p>Bookkeeping in Austin</p>
        <p>Bookkeeping in Brooklyn</p>
        <p>Bookkeeping in Honolulu</p>
      </div>
      <div class="col-md-3 col-sm-6">
        <p>Bookkeeping in Houston</p>
        <p>Bookkeeping in Indianapolis</p>
        <p>Bookkeeping in Los Angeles</p>
        <p>Bookkeeping in Portland</p>
      </div>
      <div class="col-md-3 col-sm-6">
        <p>Bookkeeping in Santa Rosa</p>
        <p>Bookkeeping in California</p>
        <p>Bookkeeping in Miami</p>
        <p>Bookkeeping in Manchester</p>
      </div>
      <div class="col-md-3 col-sm-6">
        <p>Bookkeeping in Denver</p>
        <p>Bookkeeping in Dallas</p>
        <p>Bookkeeping in San Diego</p>
        <p>Bookkeeping in San Francisco</p>
      </div>
    </div>
  </div>

    <!-- Footer Copyright -->
    <div class="footer-copyright" style="border-top:1px solid #00cc61; margin-top:40px; padding-top:20px;">
      <div class="row align-items-center">
        <div class="col-md-5">
          <p style="margin:0;">
            Copyright © 2025 
            <a href="/" style="color:#00cc61; text-decoration:none; font-weight:600;">TheBookify</a> 
            | Powered by 
            <a href="/" style="color:#00cc61; text-decoration:none; font-weight:600;">TheBookify</a>
          </p>
        </div>
        <div class="col-md-7">
          <ul style="list-style:none; margin:0; padding:0; display:flex; gap:15px; justify-content:end;">
            <li><a href="#0" style="color:#fff; text-decoration:none;">LinkedIn</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Facebook</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Instagram</a></li>
            <li><a href="#0" style="color:#fff; text-decoration:none;">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


    <!-- Footer Section End -->

    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>
	<script src="/frontend//demo.awaikenthemes.com/assets/js/theme-panel.js"></script>
</body>

</html>