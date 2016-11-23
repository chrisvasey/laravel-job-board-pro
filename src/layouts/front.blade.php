<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from devitems.com/html/jobhelp-preview/jobhelp/login-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2016 05:56:18 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jobboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/images/favicon.ico') }}">

        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- All css files are included here
        ============================================ -->
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/css/bootstrap.min.css') }}">

        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/css/core.css') }}">

        <!-- Theme shortcodes/elements style
        ============================================ -->
        <link rel="stylesheet" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/css/shortcode/shortcodes.css') }}">

		<!-- Color Swithcer CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/css/plugins/color-switcher.css') }}">

        <!--  Theme main style
        ============================================ -->
        <link rel="stylesheet" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/style.css') }}">

		<!-- Color CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/css/plugins/color.css') }}">

        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/css/responsive.css') }}">

        <!-- Modernizr JS -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

          </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header id="sticky-header" class="header-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <div class="logo"><a href="{{ url('/')}}"><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/images/logo/logo.png') }}" alt="JobHelp"></a></div>
                            </div>
                            <div class="col-md-9 hidden-sm hidden-xs">
                                <div class="pull-right">
                                    <nav id="primary-menu">
                                        <ul class="main-menu text-right">
                                            <li><a href="{{ url('/')}}">Home</a></li>
                                            <li><a href="{{ url('/job-board')}}">Job Board</a>
                                            <li><a href="{{ url('/candidates')}}">Candidates</a>
                                            <li><a href="{{ url('/contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                    <div class="login-btn pt-36">


                                          <!-- Authentication Links -->
                                          @if (Auth::guest())

                                              <a class="modal-view button" href="{{ url('/login') }}">Login</a>
                                              <a class="modal-view button" href="{{ url('/register') }}">Register</a>
                                          @else
                                          <a class="modal-view button" href="#">{{ Auth::user()->name }}</a>
                                          <a class="modal-view button" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">Logout</a>
                                                   <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                       {{ csrf_field() }}
                                                   </form>


                                          @endif

                                    {{--   <a class="modal-view button" href="#" data-toggle="modal" data-target="#productModal">Login</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="index.html">HOME</a>
                                                    <ul>
														<li><a href="index.html">Slider Style 1</a></li>
														<li><a href="index-2.html">Slider Style 2</a></li>
														<li><a href="index-3.html">Image Overlay Light</a></li>
														<li><a href="index-4.html">Image Overlay Dark</a></li>
														<li><a href="index-5.html">Background Image</a></li>
														<li><a href="index-6.html">Menu With Image 1</a></li>
														<li><a href="index-7.html">Menu With Image 2</a></li>
														<li><a href="index-8.html">Video Background</a></li>
														<li><a href="index-9.html">Fixed Background</a></li>
                                                    	<li><a href="index-10.html">Box Layout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="job-board.html">Job Board</a>
                                                    <ul class="sub-menu">
														<li><a href="single-job-post.html">Single Job</a></li>
														<li><a href="job-details.html">Job Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Features</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Slider Style</a>
                                                        	<ul class="sub-menu">
																<li><a href="slider-style-1.html">Slider Style 1</a></li>
																<li><a href="slider-style-2.html">Slider Style 2</a></li>
																<li><a href="background-image.html">Image Background</a></li>
																<li><a href="video-background.html">Video Background</a></li>
																<li><a href="fixed-image.html">Fixed Background</a></li>
																<li><a href="text-animation-1.html">Text Animation 1</a></li>
																<li><a href="text-animation-2.html">Text Animation 2</a></li>
																<li><a href="text-animation-3.html">Text Animation 3</a></li>
                                                        	</ul>
                                                        </li>
                                                        <li><a href="#">Menu Style</a>
                                                        	<ul class="sub-menu">
																<li><a href="menu-style-1.html">Default Menu</a></li>
																<li><a href="menu-style-2.html">Menu With Top Bar</a></li>
																<li><a href="menu-style-3.html">Menu Center</a></li>
																<li><a href="menu-style-4.html">Menu Transparent</a></li>
																<li><a href="menu-style-5.html">Menu White</a></li>
																<li><a href="menu-style-6.html">Menu Border</a></li>
                                                        	</ul>
                                                        </li>
                                                        <li><a href="#">Page Title</a>
                                                        	<ul class="sub-menu">
																<li><a href="breadcrumb-center.html">Title Center</a></li>
																<li><a href="breadcrumb-left.html">Title Left</a></li>
																<li><a href="breadcrumb-right.html">Title Right</a></li>
																<li><a href="breadcrumb-dark.html">Title Dark</a></li>
																<li><a href="breadcrumb-fixed.html">Title Fixed</a></li>
                                                        	</ul>
                                                        </li>
                                                        <li><a href="#">Footer Style</a>
                                                        	<ul class="sub-menu">
																<li><a href="footer-style-1.html">Footer Style 1</a></li>
																<li><a href="footer-style-2.html">Footer Style 2</a></li>
																<li><a href="footer-style-3.html">Footer Style 3</a></li>
																<li><a href="footer-style-4.html">Footer Style 4</a></li>
                                                        	</ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            	<li><a href="resume.html" target="_blank">Resume</a></li>
                                                <li><a href="#">Shortcode</a>
                                                    <ul class="sub-menu">
														<li><a href="shortcode-job-posts.html">Job Posts</a></li>
														<li><a href="shortcode-candidates.html">Candidates </a></li>
														<li><a href="shortcode-advertise.html">Advertise</a></li>
                                                        <li><a href="shortcode-blog.html">Blog</a></li>
														<li><a href="shortcode-testimonial.html">Testimonial </a></li>
                                                        <li><a href="shortcode-contact-form.html">Contact Form</a></li>
                                                        <li><a href="shortcode-map.html">Map</a></li>
                                                        <li><a href="shortcode-fun-facts.html">Fun Facts</a></li>
                                                        <li><a href="image-gallery.html">Image Gallery</a></li>
                                                        <li><a href="video-gallery.html">Video Gallery</a></li>
														<li><a href="shortcode-address.html">Address</a></li>
														<li><a href="shortcode-alerts.html">Alerts</a></li>
														<li><a href="shortcode-button.html">Buttons</a></li>
														<li><a href="shortcode-breadcrumbs.html">Breadcrumbs </a></li>
														<li><a href="shortcode-pagination.html">Pagination </a></li>
														<li><a href="shortcode-progressbar.html">Progressbar </a></li>
														<li><a href="text-animation-1.html">Text Animation 1</a></li>
														<li><a href="text-animation-2.html">Text Animation 2</a></li>
														<li><a href="text-animation-3.html">Text Animation 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Page</a>
                                                    <ul class="sub-menu">
														<li><a href="job-board.html">Job Board</a></li>
														<li><a href="single-job-post.html">Single Job</a></li>
														<li><a href="job-details.html">Job Details</a></li>
														<li><a href="candidates.html">Candidates</a></li>
														<li><a href="resume.html">Resume</a></li>
														<li><a href="blog.html">Blog Page</a></li>
														<li><a href="blog-details.html">Blog Details</a></li>
														<li><a href="login.html">Login Page</a></li>
														<li><a href="login-two.html">Login Page Two</a></li>
														<li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->
                </header>
                <!-- End of Header Area -->

                @yield('content')

                <!--Start of Social Link Area-->
                <div class="social-link-area ptb-40 dark-blue-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 fix col-xs-12 col-sm-6">
                                <div class="footer-logo pull-left">
                                    <a href="index.html" class="block"><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/images/logo/footer-logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6 fix col-xs-12 col-sm-6">
                                <div class="social-links pull-right">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Social Link Area-->
                <!--Start of Footer Widget-area-->
                <div class="footer-widget-area black-bg pt-120 pb-110">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-22">About Us</h3>
                                    <p class="text-white pr-10">There are many vations of passages of Lorem Ipsumable, but the majority have suffered altetion in some form, by injected ur, or randomised words which don't look even slightly believable</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-26">GET IN TOUCH</h3>
                                    <span class="text-white mb-9"><i class="fa fa-phone"></i>+88 018 785 4589</span>
                                    <span class="text-white mb-9"><i class="fa fa-envelope"></i>devitems@email.com</span>
                                    <span class="text-white mb-9"><i class="fa fa-globe"></i>www.devitems.com</span>
                                    <span class="text-white mb-9"><i class="fa fa-map-marker"></i>ur address goes here,street.</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-21">Helpful Links</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-21">Trending Jobs</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Designer</a></li>
                                        <li><a href="#">Developer</a></li>
                                        <li><a href="#">iOS Developer</a></li>
                                        <li><a href="#">Designer</a></li>
                                        <li><a href="#">Developer</a></li>
                                        <li><a href="#">iOS Developer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget-area-->
                <!-- Start of Footer area -->
                <footer class="footer-area blue-bg text-center ptb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-text">
                                    <span class="text-white block">Copyright&copy; <span>JOBHELP</span> 2016.All right reserved.Created by <a href="#" class="text-white">Devitems</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer area -->
            </div>
            <!--End of Bg White-->
        </div>
        <!--End of Main Wrapper Area-->

        <!--Start of Login Form-->
        <div id="quickview-login">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                        </div>
                        <div class="modal-body">
              <div class="form-pop-up-content ptb-60 pl-60 pr-60">
                <div class="area-title text-center mb-43">
                  <h2 class="pt-7 pb-7 pl-40 pr-40">Login</h2>
                </div>
                <form method="post" action="#">
                  <div class="form-box">
                    <input type="text" name="username" placeholder="User Name" class="mb-14">
                    <input type="password" name="pass" placeholder="Password">
                  </div>
                  <div class="fix ptb-30">
                    <span class="remember pull-left"><input class="p-0 pull-left" type="checkbox">Remember Me</span>
                    <span class="pull-right"><a href="#">Forget Password?</a></span>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="text-uppercase">SignIn</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
        <!--End of Login Form-->

        <!--Start of Register Form-->
        <div id="quickview-register">
            <!-- Modal -->
            <div class="modal fade" id="register" tabindex="-1" role="dialog">
                <div class="modal-dialog register" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                        </div>
                        <div class="modal-body">
              <div class="form-pop-up-content ptb-60 pl-60 pr-60">
                <div class="area-title text-center mb-43">
                  <h2 class="pt-7 pb-7 pl-40 pr-40">Sign Up</h2>
                </div>
                <form method="post" action="#">
                  <div class="form-box">
                    <input type="text" name="fullname" placeholder="Full Name" class="mb-14">
                    <input type="text" name="username" placeholder="User Name" class="mb-14">
                    <input type="email" name="email" placeholder="Email" class="mb-14">
                    <input type="password" name="pass" placeholder="Password" class="mb-14">
                    <input type="password" name="re_pass" placeholder="Confirm Password">
                  </div>
                  <div class="fix ptb-30">
                    <span class="remember">
                      <input class="p-0 pull-left" type="checkbox">
                      <span class="fix block">There are many variations of passages of Lorem Ipsum available</span>
                    </span>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="text-uppercase">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
        <!--End of Register Form-->




        <!-- jquery latest version
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

        <!-- Bootstrap framework js
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/bootstrap.min.js') }}"></script>

        <!-- Owl Carousel js
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/owl.carousel.min.js') }}"></script>

        <!-- nivo slider js
    ========================================================= -->
    <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/lib/nivo-slider/home.js') }}" type="text/javascript"></script>

        <!-- Js plugins included in this file
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/plugins.js') }}"></script>

    <!-- Video Player JS
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/jquery.mb.YTPlayer.js') }}"></script>

    <!-- AJax Mail JS
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/ajax-mail.js') }}"></script>

    <!-- Mail Chimp JS
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- StyleSwitch JS
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/styleswitch.js') }}"></script>

        <!-- Waypoint Js
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/waypoints.min.js') }}"></script>

        <!-- Main js file contents all jQuery plugins activation
    ========================================================= -->
        <script src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/js/main.js') }}"></script>

    </body>

<!-- Mirrored from devitems.com/html/jobhelp-preview/jobhelp/login-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2016 05:56:18 GMT -->
</html>
