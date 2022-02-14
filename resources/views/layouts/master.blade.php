<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <meta name="keywords" content="Houzez HTML5 Template">
    <meta name="description" content="Houzez HTML5 Template">
    <meta name="author" content="Favethemes">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('assets/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('assets/images/favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{url('assets/images/favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{ url('assets/images/favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{ url('assets/images/favicons/safari-pinned-tab.svg') }}" >
    <meta name="theme-color" content="#ffffff">

    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<!--Heaaaaaaaaaaaaaaaaaader-->
<header id="header-section" class="header-section-4 header-main  nav-left hidden-sm hidden-xs" data-sticky="1">
    <div class="container">
        <div class="header-left">
            <div class="logo">
                <a href="index.html">
                    <img src="{{url('assets/images/houzez-logo-color.png')}}" alt="logo">
                </a>
            </div>
            <nav class="navi main-nav">
                <ul>
                    <li><a href="#">Home</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Map</a>
                                <ul class="sub-menu">
                                    <li><a href="home-map.html">Map Standard</a></li>
                                    <li><a href="home-map-fullscreen.html">Map Fullscreen</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Parallax</a>
                                <ul class="sub-menu">
                                    <li><a href="home-parallax.html">Parallax Standard</a></li>
                                    <li><a href="home-parallax-fullscreen.html">Parallax Fullscreen</a></li>
                                    <li><a href="home-parallax-autofix.html">Parallax Auto Fix</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Video</a>
                                <ul class="sub-menu">
                                    <li><a href="home-video.html">Video Standard</a></li>
                                    <li><a href="home-video-fullscreen.html">Video Fullscreen</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Sliders</a>
                                <ul class="sub-menu">
                                    <li><a href="home-property-slider.html">Property Slider</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Splash</a>
                                <ul class="sub-menu">
                                    <li><a href="splash-video.html">Video Fullscreen</a></li>
                                    <li><a href="splash-slider.html">Slider Fullscreen</a></li>
                                    <li><a href="splash-image.html">Image Fullscreen</a></li>
                                    <li><a href="home-splash.html">Home With Splash</a></li>
                                    <li><a href="splash-half.html">Half</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Listing</a>
                        <ul class="sub-menu">
                            <li><a href="properties-list.html">List View</a>
                                <ul class="sub-menu">
                                    <li><a href="properties-list.html">List View Standard</a></li>
                                    <li><a href="properties-list-fullwidth.html">List View Fullwidth</a></li>
                                    <li><a href="properties-list-compare.html">List View Compare Panel</a></li>
                                    <li><a href="properties-list-save-search.html">List View Save Search</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="properties-list-style-2.html">List View Style 2</a>
                                <ul class="sub-menu">
                                    <li><a href="properties-list-style-2.html">List View Standard Style 2</a></li>
                                    <li><a href="properties-list-style-2-fullwidth.html">List View Fullwidth Style 2</a></li>
                                </ul>
                            </li>
                            <li><a href="properties-grid.html">Grid View</a>
                                <ul class="sub-menu">
                                    <li><a href="properties-grid.html">Grid View Standard</a></li>
                                    <li><a href="properties-grid-fullwidth.html">Grid View Fullwidth</a></li>
                                </ul>
                            </li>
                            <li><a href="properties-grid-style-2.html">Grid View Style 2</a>
                                <ul class="sub-menu">
                                    <li><a href="properties-grid-style-2.html">Grid View Standard Style 2</a></li>
                                    <li><a href="properties-grid-style-2-fullwidth.html">Grid View Fullwidth Style 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Map</a>
                                <ul class="sub-menu">
                                    <li><a href="map-listing.html">Half Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Property</a>
                        <ul class="sub-menu">
                            <li><a href="property-detail.html">Single Property v1</a></li>
                            <li><a href="property-detail-v2.html">Single Property v2</a></li>
                            <li><a href="property-detail-v3.html">Single Property v3</a></li>
                            <li><a href="property-detail-landing-page.html">Property Landing Page</a></li>
                            <li><a href="property-detail-full-width-gallery.html">Property Full Width Gallery</a></li>
                            <li><a href="property-detail-tabs.html">Single Property Tabs v1</a></li>
                            <li><a href="property-detail-tabs-vertical.html">Single Property Tabs v2</a></li>
                            <li><a href="property-detail-multi-properties.html">Multi Units / Sub listing</a></li>
                            <li><a href="property-nav-on-scroll.html">Property Nav On Scroll</a></li>
                        </ul>
                    </li>
                    <li class="houzez-megamenu"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Column 1</a>
                                <ul class="sub-menu">
                                    <li><a href="agent-list.html">All Agents</a></li>
                                    <li><a href="agent-detail.html">Agent Profile</a></li>
                                    <li><a href="agency-list.html">All Agencies</a></li>
                                    <li><a href="company-profile.html">Company Profile</a></li>
                                    <li><a href="compare-properties.html">Compare Properties</a></li>
                                    <li><a href="landing-page.html">Landing Page</a></li>
                                    <li><a href="map-full-search.html">Map Full Screen</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column 2</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Houzez</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="register.html">Register Page</a></li>
                                    <li><a href="forget-password.html">Forget Password Page</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column 3</a>
                                <ul class="sub-menu">
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="simple-page.html">Simple Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="headers.html">Houzez Headers</a></li>
                                    <li><a href="footer.html">Houzez Footers</a></li>
                                    <li><a href="widgets.html">Houzez Widgets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column 4</a>
                                <ul class="sub-menu">
                                    <li><a href="search-bars.html">Houzez Search Bars</a></li>
                                    <li><a href="add-new-property.html">Create Listing Page</a></li>
                                    <li><a href="listing-select-package.html">Select Packages Page</a></li>
                                    <li><a href="listing-payment.html">Payment Page</a></li>
                                    <li><a href="listing-done.html">Listing Done Page</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column 5</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-detail.html">Blog detail</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="my-properties.html">My Properties</a></li>
                                    <li><a href="my-favourite-properties.html">My Favourite Properties</a></li>
                                    <li><a href="my-saved-search.html">My Saved Searches</a></li>
                                    <li><a href="my-invoices.html">My Invoices</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="houzez-megamenu"><a href="#">Modules</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"> Column 1 </a>
                                <ul class="sub-menu">
                                    <li><a href="module-advanced-search.html">Advanced Search</a></li>
                                    <li><a href="module-property-grids.html">Property Grids</a></li>
                                    <li><a href="module-property-carousel-v1.html">Property Carousel v1</a></li>
                                    <li><a href="module-property-carousel-v2.html">Property Carousel v2</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Column 2 </a>
                                <ul class="sub-menu">
                                    <li><a href="module-property-cards.html">Property Cards Module</a></li>
                                    <li><a href="module-property-by-id.html">Property by ID</a></li>
                                    <li><a href="module-taxonomy-grids.html">Taxonomy Grids</a></li>
                                    <li><a href="module-taxonomy-tabs.html">Taxonomy Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> Column 3 </a>
                                <ul class="sub-menu">
                                    <li><a href="module-testimonials.html">Testimonials</a></li>
                                    <li><a href="module-membership-packages.html">Membership Packages</a></li>
                                    <li><a href="module-agents.html">Agents</a></li>
                                    <li><a href="module-team.html">Team</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> Column 4 </a>
                                <ul class="sub-menu">
                                    <li><a href="module-partners.html">Partners</a></li>
                                    <li><a href="module-text-with-icons.html">Text with icons</a></li>
                                    <li><a href="module-blog-post-carousels.html">Blog Post Carousels</a></li>
                                    <li><a href="module-blog-post-grids.html">Blog Post Grids</a></li>
                                    <li><a href="blog-masonry.html">Blog Post Masonry</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <div class="user">
                <a href="/login">Sign In / Register</a>
                <a href="add-new-property.html" class="btn btn-default">Create Listing</a>
            </div>
        </div>
    </div>
</header>
<!--End Heaaaaaaaaaaaaaaaaaader-->

<div class="header-mobile visible-sm visible-xs">
    <div class="container">
        <!--start mobile nav-->
        <div class="mobile-nav">
            <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
            <div class="nav-dropdown main-nav-dropdown"></div>
        </div>
        <!--end mobile nav-->
        <div class="header-logo">
            <a href="index.html"><img src="{{url('assets/images/logo-houzez-white.png')}}" alt="logo"></a>
        </div>
        <div class="header-user">
            <ul class="account-action">
                <li>
                    <span class="user-icon"><i class="fa fa-user"></i></span>
                    <div class="account-dropdown">
                        <ul>
                            <li> <a href="add-new-property.html"> <i class="fa fa-plus-circle"></i>Creat Listing</a></li>
                            <li> <a href="#" data-toggle="modal" data-target="#pop-login"> <i class="fa fa-user"></i> Log in / Register </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--end header section header v1-->


@yield('content')

<!--Fooooooter-->
<footer class="footer-v2">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-widget widget-about">
                            <div class="widget-top">
                                <h3 class="widget-title">About Site</h3>
                            </div>
                            <div class="widget-body">
                                <p>Houzez is a premium WordPress theme for real estate where modern aesthetics are combined with tasteful simplicity.</p>
                                <p class="read"><a href="about-us.html">Read more <i class="fa fa-caret-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-widget widget-contact">
                            <div class="widget-top">
                                <h3 class="widget-title">Contact Us</h3>
                            </div>
                            <div class="widget-body">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-location-arrow"></i> 121 King Street, Melbourne VIC 3000</li>
                                    <li><i class="fa fa-phone"></i> +1 (877) 987 3487</li>
                                    <li><i class="fa fa-envelope-o"></i> <a href="#">info@housez.com</a></li>
                                </ul>
                                <p class="read"><a href="contact-us.html">Contact us <i class="fa fa-caret-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-widget widget-newsletter">
                            <div class="widget-top">
                                <h3 class="widget-title">Newsletter Subscribe</h3>
                            </div>
                            <div class="widget-body">
                                <form>
                                    <div class="table-list">
                                        <div class="form-group table-cell">
                                            <div class="input-email input-icon">
                                                <input class="form-control" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="table-cell">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <p>Houzez is a premium WordPress theme for real estate agents.<br>Don’t forget to fullow us on:</p>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="footer-col">
                            <p>Houzez - All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-col">
                            <div class="navi">
                                <ul id="footer-menu" class="">
                                    <li><a href="privacy.html">Privacy</a></li>
                                    <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="footer-col foot-social">
                            <p>
                                Follow us
                                <a target="_blank" class="btn-facebook" href="https://facebook.com/Favethemes"><i class="fa fa-facebook-square"></i></a>

                                <a target="_blank" class="btn-twitter" href="https://twitter.com/favethemes"><i class="fa fa-twitter-square"></i></a>

                                <a target="_blank" class="btn-linkedin" href="http://linkedin.com/"><i class="fa fa-linkedin-square"></i></a>

                                <a target="_blank" class="btn-google-plus" href="http://google.com/"><i class="fa fa-google-plus-square"></i></a>

                                <a target="_blank" class="btn-instagram" href="http://instagram.com/"><i class="fa fa-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!--End Foooooooooooooooooooooter-->

    <!--Start Scripts-->
    <script type="text/javascript" src="{{ url('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.matchHeight-min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.nicescroll.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/custom.js') }}"></script>
</body>
</html>