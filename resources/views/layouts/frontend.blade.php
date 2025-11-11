<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
  <title>@yield('title')</title>
  @if(View::hasSection('meta'))
  @yield('meta')
  @elseif(View::hasSection('meta_description'))
  <meta name="description" content="@yield('meta_description')">
  @endif
  @yield('structured_data')
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap" rel="stylesheet">
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="/frontend/css/slicknav.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
	<link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
	<link href="/frontend/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<link rel="stylesheet" href="/frontend/css/mousecursor.css">
	<link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href=" /frontend/css/my.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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


<div class="pro-popup-overlay" id="proPopup">
  <div class="pro-popup">
    <button class="pro-popup-close" onclick="closeProPopup()">×</button>
    <div class="popup-image">
      <a class="navbar-brand" href="/">
        <img src="/frontend/my-img/logo.png" alt="Logo" style="width:167px; height:39px; object-fit:contain;">
      </a>
    </div>
    <h2>Discover Our Professional Services</h2>
    <p>From bookkeeping and payroll to tax management Bookify has everything you need to simplify your business finances. Explore our tailored solutions today!</p>
    <div class="popup-btns" style="text-align:center;">
  <div style="display: flex; justify-content: center; gap: 5px; flex-wrap: wrap;">
    <a href="/what-we-offer" class="btn-default btn-highlighted" style="padding: 12px 15px;"><i class="fa-solid fa-compass"></i> Explore Services</a>
    <a href="/what-we-offer" class="btn-default btn-highlighted" style="padding: 12px 15px;"><i class="fa-solid fa-message"></i> Contact Us</a>
  </div>
  </div>
  </div>
</div>

    <!-- Header Start -->
	 <header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand" href="/">
              <img src="/frontend/my-img/logo.png" alt="Logo" style="width:167px; height:39px; object-fit:contain;">
          </a>
					<div class="collapse navbar-collapse main-menu">
            <div class="nav-menu-wrapper">
                <ul class="navbar-nav mr-auto" id="menu">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item submenu"><a class="nav-link" href="/what-we-offer">What we offer</a>
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="/what-we-offer/bookkeeping-services">Bookkeeping Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="/what-we-offer/payroll-services">Payroll Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="/what-we-offer/tax-and-accounting">Tax & Accounting</a></li>
                            <li class="nav-item"><a class="nav-link" href="/what-we-offer/cfo-advisory">CFO Advisory</a></li>
                            <li class="nav-item"><a class="nav-link" href="/what-we-offer/incorporation">Incorporation</a></li>
                            <li class="nav-item"><a class="nav-link" href="/what-we-offer/sales-tax-consulting">Sales Tax Consulting</a></li>
                        </ul>
                    </li>                                 
                    <li class="nav-item submenu"><a class="nav-link" href="#0">Industries we Serve</a>
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="/accounting-services-for-small-business">Accounting Services For Small Business</a></li>
                            <li class="nav-item"><a class="nav-link" href="/healthcare">Healthcare</a></li>
                            <li class="nav-item"><a class="nav-link" href="/private-industries">Private Industries</a></li>
                            <li class="nav-item"><a class="nav-link" href="/real-estate">Real Estate</a></li>
                            <li class="nav-item"><a class="nav-link" href="/lodging-facilities">Lodging Facilities</a></li>
                            <li class="nav-item"><a class="nav-link" href="/ecommerce">E-Commerce</a></li>
                            <li class="nav-item"><a class="nav-link" href="/colleges-and-universities">colleges & Universities</a></li>
                            <li class="nav-item"><a class="nav-link" href="/accounting-services-for-startup">Accounting Services for Startup</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blogs">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>                           
                </ul>
            </div>
            <div class="header-btn d-inline-flex">
              <a href="tel:551-348-1040" class="btn-default btn-highlighted">
                Speak with Us
              </a>
            </div>
					</div>
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
            <img src="/frontend/my-img/footer-logo.png" alt="Logo" style="width:167px; height:39px; object-fit:contain;">
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
            <li><a href="/" style="color:#fff; text-decoration:none;">Home</a></li>
            <li><a href="/about" style="color:#fff; text-decoration:none;">About Us</a></li>
            <li><a href="/pricing" style="color:#fff; text-decoration:none;">Pricing</a></li>
            <li><a href="/blogs" style="color:#fff; text-decoration:none;">Blog</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="footer-links">
          <h3 style="font-size:18px; margin-bottom:15px;">Can We Help</h3>
          <ul style="list-style:none; padding:0; margin:0;">
            <li><a href="/contact" style="color:#fff; text-decoration:none;">Contact</a></li>
            <li><a href="/privacy-policy" style="color:#fff; text-decoration:none;">Privacy Policy</a></li>
            <li><a href="/terms-conditions" style="color:#fff; text-decoration:none;">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="footer-links">
          <h3 style="font-size:18px; margin-bottom:15px;">What We Offer</h3>
          <ul style="list-style:none; padding:0; margin:0;">
            <li><a href="/what-we-offer/bookkeeping-services" style="color:#fff; text-decoration:none;">Bookkeeping Services</a></li>
            <li><a href="/what-we-offer/payroll-services" style="color:#fff; text-decoration:none;">Payroll Services</a></li>
            <li><a href="/what-we-offer/tax-and-accounting" style="color:#fff; text-decoration:none;">Tax and Accounting</a></li>
            <li><a href="/what-we-offer/cfo-advisory" style="color:#fff; text-decoration:none;">CFO Advisory</a></li>
            <li><a href="/what-we-offer/incorporation" style="color:#fff; text-decoration:none;">Incorporation</a></li>
            <li><a href="/what-we-offer/sales-tax-consulting" style="color:#fff; text-decoration:none;">Sales Tax Consulting</a></li>
          </ul>
        </div>
      </div>
    </div>

<!-- Expert Services Section -->
<!-- @if (!Request::routeIs('home'))
<hr style="border-top:1px solid #00cc61; margin:40px 0;">
<div class="container">
  <h2 style="color:#fff; font-size:26px; margin-bottom:30px; text-align:center;">Expert Services Near You</h2>
  <div class="row justify-content-center">
    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled" style="line-height:35px;">
        <li><a href="/bookkeeping-in-chicago" style="color:#fff; text-decoration:none;">Bookkeeping in Chicago</a></li>
        <li><a href="/bookkeeping-in-austin" style="color:#fff; text-decoration:none;">Bookkeeping in Austin</a></li>
        <li><a href="/bookkeeping-in-brooklyn" style="color:#fff; text-decoration:none;">Bookkeeping in Brooklyn</a></li>
        <li><a href="/bookkeeping-in-honolulu" style="color:#fff; text-decoration:none;">Bookkeeping in Honolulu</a></li>
      </ul>
    </div>

    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled" style="line-height:35px;">
        <li><a href="/bookkeeping-in-houston" style="color:#fff; text-decoration:none;">Bookkeeping in Houston</a></li>
        <li><a href="/bookkeeping-in-indianapolis" style="color:#fff; text-decoration:none;">Bookkeeping in Indianapolis</a></li>
        <li><a href="/bookkeeping-in-los-angeles" style="color:#fff; text-decoration:none;">Bookkeeping in Los Angeles</a></li>
        <li><a href="/bookkeeping-in-portland" style="color:#fff; text-decoration:none;">Bookkeeping in Portland</a></li>
      </ul>
    </div>

    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled" style="line-height:35px;">
        <li><a href="/bookkeeping-in-santa-rosa" style="color:#fff; text-decoration:none;">Bookkeeping in Santa Rosa</a></li>
        <li><a href="/bookkeeping-in-california" style="color:#fff; text-decoration:none;">Bookkeeping in California</a></li>
        <li><a href="/bookkeeping-in-miami" style="color:#fff; text-decoration:none;">Bookkeeping in Miami</a></li>
        <li><a href="/bookkeeping-in-manchester" style="color:#fff; text-decoration:none;">Bookkeeping in Manchester</a></li>
      </ul>
    </div>

    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled" style="line-height:35px;">
        <li><a href="/bookkeeping-in-denver" style="color:#fff; text-decoration:none;">Bookkeeping in Denver</a></li>
        <li><a href="/bookkeeping-in-dallas" style="color:#fff; text-decoration:none;">Bookkeeping in Dallas</a></li>
        <li><a href="/bookkeeping-in-san-diego" style="color:#fff; text-decoration:none;">Bookkeeping in San Diego</a></li>
        <li><a href="/bookkeeping-in-san-francisco" style="color:#fff; text-decoration:none;">Bookkeeping in San Francisco</a></li>
      </ul>
    </div>
  </div>
</div>
@endif -->

    <!-- Footer Copyright -->
    <div class="footer-copyright" style="border-top:1px solid #00cc61; margin-top:40px; padding-top:20px;">
      <div class="row align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <p style="margin:0;">
            Copyright © 2025
            <a href="/" style="color:#00cc61; text-decoration:none; font-weight:600;">TheBookify</a>
            | Powered by
            <a href="/" style="color:#00cc61; text-decoration:none; font-weight:600;">TheBookify</a>
          </p>
        </div>

        <div class="col-lg-7 text-lg-end text-center mt-3 mt-md-0">
          <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
            <ul class="list-inline m-0">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/TBOOKIFY"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/the-bookify/"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/the.bookify/"><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://x.com/TBookify"><i class="fa-brands fa-x-twitter"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<button id="scrollToTopBtn" title="Go to top">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Call Now Button -->
<a href="tel:+15513481040" class="call-now-btn" title="Call Now">
  <i class="fa-solid fa-phone"></i>
</a>
<!-- Call Now Button end-->

<div class="modal fade" id="trialFormModal" tabindex="-1" aria-labelledby="trialFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"
         style="border:none; border-radius:20px; box-shadow:0 8px 40px rgba(0,0,0,0.15); overflow:hidden;">
      
      <div style="background:linear-gradient(135deg,#00cc61,#00b556); padding:25px 25px 15px 25px; position:relative; text-align:center;">
        
        <h4 class="text-white mb-1" style="font-weight:700;">Start Your Free Trial</h4>
        <p class="text-white-50 mb-0" style="font-size:14px;">Just enter your details below to get started.</p>

        <!-- Close button -->
        <button type="button" class="btn-close btn-close-white" 
                data-bs-dismiss="modal" aria-label="Close"
                style="position:absolute; top:18px; right:20px; opacity:0.9;"></button>
      </div>


<!-- JS to open popup -->
<script>
document.querySelectorAll('.openPopupBtn').forEach(button => {
  button.addEventListener('click', function (e) {
    e.preventDefault();
    const modal = new bootstrap.Modal(document.getElementById('trialFormModal'));
    modal.show();
  });
});
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function() {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contactForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            form.find('div[id$="-error"]').empty(); 

            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    form.find('#started').attr('disabled', true).hide();
                    form.find('#form_loader').show();
                },
                success: function(data) {
                    if (data.status === 'success') {
                        toastr.success(data.message, '', {
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            timeOut: 1500,
                            closeButton: true,
                        });

                        form[0].reset();

                        setTimeout(function() {
                            window.location.href = '/thankyou';
                        }, 1000);
                    }
                },
                    error: function(xhr) {
                    console.log(xhr);
                    toastr.error(
                        'There are some errors in the form. Please check your inputs.',
                        '', {
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            timeOut: 1500,
                            closeButton: true,
                    });

                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            var errorText = Array.isArray(value) ? value.join(
                                ', ') : value;
                            form.find('#' + key + '-error').html(
                                errorText); 
                        });

                        var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                        $('html, body').animate({
                            scrollTop: form.find('#' + firstErrorKey + '-error')
                                .offset().top - 200
                        }, 500);

                    } else {
                        toastr.error(
                            'An unexpected error occurred. Please try again later.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });
                    }
                },
                complete: function() {
                    form.find('#started').attr('disabled', false).show();
                    form.find('#form_loader').hide();
                }
            });
        });
    });
</script>
<script>
/* Show button when user scrolls down */
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.addEventListener("scroll", () => {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
});

/* Scroll smoothly to top when clicked */
scrollToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
</script>



<script>
  // Hide popup on /what-we-offer route
  document.addEventListener("DOMContentLoaded", function () {
    if (window.location.pathname === "/what-we-offer") {
      const popup = document.getElementById("proPopup");
      if (popup) {
        popup.style.display = "none";
        return; // stop further popup logic
      }
    }

    // Auto open after 3 seconds
    window.addEventListener('load', () => {
      setTimeout(() => {
        const popup = document.getElementById('proPopup');
        if (popup) {
          popup.classList.add('show');
          document.body.classList.add('no-scroll');
        }
      }, 3000);
    });

    // Close popup function
    window.closeProPopup = function () {
      const popup = document.getElementById('proPopup');
      if (popup) {
        popup.classList.remove('show');
        document.body.classList.remove('no-scroll');
      }
    };

    // Close when clicking outside popup
    window.addEventListener('click', (e) => {
      const popup = document.getElementById('proPopup');
      if (e.target === popup) closeProPopup();
    });
  });
</script>


    <!-- Footer Section End -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/validator.min.js"></script>
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="/frontend/js/SmoothScroll.js"></script>
    <script src="/frontend/js/parallaxie.js"></script>
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <script src="/frontend/js/SplitText.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="/frontend/js/wow.min.js"></script>
    <script src="/frontend/js/function.js"></script>
	  <script src="/frontend//demo.awaikenthemes.com/assets/js/theme-panel.js"></script>
</body>

</html>