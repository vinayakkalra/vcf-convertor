<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>CSVTOVCF | #1 VCF Converter</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- required meta tags essential for seo and link sharing -->

    <!-- Enter a proper description for the page in the meta description tag -->
    <meta name="description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

    <!-- Enter Page title -->
    <meta property="og:title" content="ENTER_PAGE_TITLE" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="ENTER_PAGE_URL" />

    <!-- Enter page description -->
    <meta property="og:description" content="ENTER_PAGE_DESCRIPTION">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <!-- <meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website" /> -->

    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <!-- <link rel="icon" href="ENTER_FAVICON_LOCATION"> -->

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
        <!-- ------------------------------ favicon start ----------------------------- -->

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!-- ------------------------------ favicon end ----------------------------- -->
    <style>
        .alert-danger {
        color: #721c24;
     background-color: #fff !important;
     border-color: #fff !important;
    }
    #alert_id_Otp{
        display:none;
    }
    .preloader,
    .preloader_mobile {
        display: none;
    }
    </style>
</head>

<body>
    <div class="d-none d-lg-block">

        <!-- ---------------------- desktop float navbar start ---------------------- -->

        <div class="container-fluid header_show_desktop position-fixed bg-white">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class=" col-12">
                                <nav class="navbar">
                                    <a class="navbar-brand" href="/" style="width:40%"><img src="images/zamzar-logo.png"
                                            width="50%"></a>

                                    <ul class="nav navbar-right">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="exceltovcf">Excel to VCF</a>
                                        </li>                                       
                                        <li class="nav-item">
                                            <a class="nav-link " href="policy">Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="contact">Contact</a>
                                        </li>
                                        <li class="nav-item set_id_one">
                                        </li>
                                        <li class="nav-item set_id_two">
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Desktop fix navbar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col main_background">
                    <div class="container navshow">
                        <div class="row">
                            <div class="col floatnavbar mt-3">
                                <nav class="navbar" class="header_main_desktop">
                                    <a class="navbar-brand" href="/" style="width:40%"><img src="images/zamzar-logo.png"
                                            width="50%"></a>
                                    <ul class="nav navbar-right">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="exceltovcf">Excel to VCF</a>
                                        </li>                                       
                                        <li class="nav-item">
                                            <a class="nav-link " href="policy">Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="contact">Contact</a>
                                        </li>
                                        <li class="nav-item set_id_one">
                                        </li>
                                        <li class="nav-item set_id_two">
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------ desktop content start ------------------------ -->
                    <div class="container">
                        <div class=" navshowtext">
                            <div class="row mt-5">
                                <div class="col d-flex justify-content-center">
                                    <h1 class="main_heading">Welcome to The <span>VCF Converter!</span></h1>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center">
                                <div class="col-8 d-flex justify-content-center">
                                    <p class="main_heading_paragraph">#1 Website to convert Excel to VCF, VCF to Excel
                                        and
                                        VCF Splitter - 100% Secure</p>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center" style="
                        position: absolute;
                        bottom: 5rem;
                    ">
                            <div class="col-9 d-flex justify-content-center service_type">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="wrap-col">
                                            <div class="item-container">
                                                <a href="exceltovcf">
                                                    <div class="item-caption">
                                                        <div class="item-caption-inner">
                                                            <div class="item-caption-inner1">
                                                                <h3>Excel to VCF</h3>
                                                                <span>VCF Tools</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src="images/exceltovcf.jpg"
                                                        alt="Online Excel/CSV to VCF Converter free"
                                                        title="Excel/CSV to VCF/vCard Converter">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="wrap-col">
                                            <div class="item-container">
                                                <a href="#">
                                                    <div class="item-caption">
                                                        <div class="item-caption-inner">
                                                            <div class="item-caption-inner1">
                                                                <h3>VCF to Excel</h3>
                                                                <span>VCF Tools</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src="images/vcftoexcel.jpg"
                                                        alt="Online Excel/CSV to VCF Converter free"
                                                        title="Excel/CSV to VCF/vCard Converter">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="wrap-col">
                                            <div class="item-container">
                                                <a href="#">
                                                    <div class="item-caption">
                                                        <div class="item-caption-inner">
                                                            <div class="item-caption-inner1">
                                                                <h3>VCF Splitter</h3>
                                                                <span>VCF Tools</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src="images/vcfsplitter.jpg"
                                                        alt="Online Excel/CSV to VCF Converter free"
                                                        title="Excel/CSV to VCF/vCard Converter">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------------------- desktop about us start ------------------------ -->

            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col pt-5">
                                <h1 class="text-center">About Us</h1>
                                <p class="pt-2 paragraph_style">We are essentially developers. More interested in Cloud
                                    development, IT solutions, Payment Gateway integration, SMS services, eCommerce.
                                    Basically, everything that can be developed and deployed online. Reach out to us for
                                    more.</p>

                                <p class="paragraph_style">We have developed and uploaded few file conversion services,
                                    on user demands. Have a look. Use them. And do Share them!</p>
                            </div>
                        </div>

                        <!-- ---------------------- desktop why we use start ----------------------- -->

                        <div class="row">
                            <div class="col pt-5 pb-5">
                                <h1 class="text-center">Why use <span style="color: #2487EC;">VCF Converter</span> ?
                                </h1>

                            </div>
                        </div>
                        <div class="row pb-5">
                            <div class="col-sm-6">
                                <ul class="ticked">
                                    <li><span class="blue">Convenience</span> - No software to download. Just select
                                        your file, pick a format to convert to and away you go.</li>
                                    <li><span class="blue">Speed</span> - We aim to complete all our conversions in
                                        under 10 minutes.</li>
                                    <li><span class="blue">Formats</span> - We support 1200+ file formats, more than any
                                        other converter.</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="ticked">
                                    <li><span class="blue">Experience</span> - We have been successfully converting
                                        files since 2006 with millions of happy customers.</li>
                                    <li><span class="blue">Support</span> - Got a file you can't convert? Just email us
                                        and we'll ask our dedicated engineers to take a look for you.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ------------------------ desktop footer start ------------------------- -->

            <div class="row footer">
                <div class="col">
                    <div class="container">
                        <div class="row pt-5 ">
                            <div class="col-2 footer_text">
                                <h3 class="text-left">INFO</h3>
                                <ul>
                                    <li><a href="#" title="Pricing">Pricing</a></li>
                                    <li><a href="#" title="Formats">Formats</a></li>
                                </ul>
                            </div>
                            <div class="col-2 footer_text">
                                <h3 class="text-left">HELP</h3>
                                <ul>
                                    <li><a href="#" title="FAQ">FAQ</a></li>
                                    <li><a href="#" title="Status" target="_blank">Status</a></li>
                                </ul>
                            </div>
                            <div class="col-2 footer_text">
                                <h3 class="text-left">resources</h3>
                                <ul>
                                    <li><a href="#" title="Developer API" target="_blank">Developer API</a></li>
                                    <li><a href="#" title="Tools">Tools</a></li>
                                    <li><a href="#" title="Blog" target="_blank">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-2 footer_text">
                                <h3 class="text-left">Company</h3>
                                <ul>
                                    <li><a href="#" title="About">About Us</a></li>
                                    <li><a href="#" title="Advertise">Advertise</a></li>
                                    <li><a href="#" title="Sustainability">Sustainability</a></li>
                                    <li><a href="#" title="Terms">Terms of Service</a></li>
                                    <li><a href="#" title="Privacy">Privacy</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-white text-center Subscribe">Subscribe to our newsletter</h5>
                                        <form class="form-inline d-flex justify-content-center" action="" method="post"
                                            target="_blank">
                                            <div class="form-group">

                                                <input id="footer-subscribe-email_desktop" class="form-control p-3 mt-2"
                                                    name="EMAIL" placeholder="Your email" type="email"
                                                    style="font-size:1.2rem">
                                            </div>

                                            <button type="submit" class="btn btn-success ml-2 mt-2"
                                                style="font-size: 1.5rem;">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="social d-flex justify-content-center">
                                            <a href="#" title="Like Zamzar on Facebook" target="_blank"
                                                rel="noopener noreferrer"><img
                                                    src="images/social/social-facebook-icon.png"
                                                    data-lazy-src="images/social-facebook-icon.png" width="32"
                                                    height="34" alt="Facebook icon"></a>

                                            <a href="#" title="Follow Zamzar on Twitter" target="_blank"
                                                rel="noopener noreferrer"><img
                                                    src="images/social/social-twitter-icon.png"
                                                    data-lazy-src="images/social-twitter-icon.png" width="32"
                                                    height="34" alt="Twitter icon"></a>

                                            <a href="#" title="Check out Zamzar on Instagram" target="_blank"
                                                rel="noopener noreferrer"><img
                                                    src="images/social/social-instagram-icon.png"
                                                    data-lazy-src="images/social-instagram-icon.png" width="32"
                                                    height="32" alt="Instagram icon"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-9 copyright_text pb-2">
                                <hr class="hrtag">
                                <h3 class="text-center">Copyright © 2019 - 2020 VCF Converter Ltd - All Rights Reserved
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------- popup desktop start hear --------------------------- -->
    <!-- Modal -->
    <div class="modal fade" id="pop_up_desktop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false" style="overflow: hidden;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!--Content-->
            <div class="modal-content form-elegant" id="sign_in_page">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign
                            In</strong></h3>

                </div>
                <!--Body-->
                <div class="modal-body mx-5">
                    <div class="alert alert-danger" role="alert" id="alert_id_signin">
                    </div>
                    <!--Body-->
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="Form_email_signin" class="form-control validate"
                            placeholder="Your email">
                    </div>
                    <div class="md-form mb-3">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="Form_pass_signin" class="form-control validate"
                            placeholder="Your password">
                        <p class="font-small blue-text d-flex justify-content-end mt-3"><a href="#"
                                class="blue-text ml-1"  id="forgot_password_link">Forgot 
                                Password?</a></p>
                    </div>
                    <div class="preloader">
                            <div class="row d-flex justify-content-center">
                                <div class="loadingio-spinner-rolling-n1r2sb8my0m">
                                    <div class="ldio-538wm7ir56h">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="text-center mb-5 mt-5">
                        <button type="button" class="btn sendButton blue-gradient btn-block btn-rounded z-depth-1a"
                            id="pop_up_signin">Sign
                            in</button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 mt-2 pb-5">
                    <p class="font-small grey-text d-flex justify-content-end">Not a member? <a id="signup_link"
                            class="blue-text ml-1" style="cursor: pointer;">
                            Sign Up</a></p>
                </div>
            </div>

            <div class="modal-content form-elegant" id="sign_up_page">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign
                            Up</strong></h3>

                </div>
                <!--Body-->
                <form data-name="signup_form" name="signup-form">
                    <div class="modal-body mx-5">
                        <div class="alert alert-danger" role="alert" id="alert_id_signup">
                        </div>
                        <!--Body-->
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="Form_email_signup" class="form-control validate"
                                placeholder="Your email">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-phone prefix grey-text"></i>
                            <input type="text" id="Form_phone_signup" class="form-control validate"
                                placeholder="Mobile number">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="Form_pass_signup" class="form-control validate"
                                placeholder="Your password">
                        </div>
                        <div class="md-form mb-3">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="Form_pass2_signup" class="form-control validate"
                                placeholder="Confirm password">

                        </div>
                        <div class="preloader">
                            <div class="row d-flex justify-content-center">
                                <div class="loadingio-spinner-rolling-n1r2sb8my0m">
                                    <div class="ldio-538wm7ir56h">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5 mt-5">
                            <button type="button" class="btn sendButton blue-gradient btn-block btn-rounded z-depth-1a"
                                id="pop_up_signup">Sign
                                Up</button>
                        </div>
                    </div>
                </form>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-5 pb-5">
                    <p class="font-small grey-text d-flex justify-content-end">Already a member? <a id="signin_link"
                            class="blue-text ml-1" style="cursor: pointer;">
                            Sign In</a></p>
                </div>
            </div>
            <!-- ------------------------------- verify otp start------------------------------- -->
            <div class="modal-content form-elegant" id="sign_up_Otp">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Email Verification</strong></h3>                
                </div>
                <p class="d-flex justify-content-center">Please Check Your Email for Verification Code</p>
                <!--Body-->
                <form data-name="otp_form" name="otp-form">
                    <div class="modal-body mx-5">
                        <div class="alert alert-danger" role="alert" id="alert_id_Otp">
                        </div>
                        <!--Body-->                      
                        
                        <div class="md-form mb-3">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="Form_pass_Otp" class="form-control validate"
                                placeholder="Enter OTP Number">
                        </div>
                        <div class="preloader">
                            <div class="row d-flex justify-content-center">
                                <div class="loadingio-spinner-rolling-n1r2sb8my0m">
                                    <div class="ldio-538wm7ir56h">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5 mt-5">
                            <button type="button" class="btn sendButton blue-gradient btn-block btn-rounded z-depth-1a"
                                id="pop_up_otp">Verify OTP</button>
                        </div>
                    </div>
                </form>
                <!--Footer-->                
            </div>
<!-- ------------------------------- verify otp end------------------------------- -->
            <!-- ------------------------------ Forgot password start ------------------------------ -->

            <div class="modal-content form-elegant" id="forgot_password_page">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Forgot
                            Password ?</strong></h3>

                </div>
                <!--Body-->
                <form data-name="forgot_password_form" name="forgot_password_form">
                    <div class="modal-body mx-5">
                        <div class="alert alert-danger" role="alert" id="alert_id_forgot">
                        </div>
                        <div class="alert alert-success" role="alert" id="alert_id_forgot2">
                        </div>
                        <!--Body-->
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="Form_email_forgot" class="form-control validate"
                                placeholder="Your email">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-phone prefix grey-text"></i>
                            <input type="text" id="Form_phone_forgot" class="form-control validate"
                                placeholder="Mobile number">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="Form_pass_forgot" class="form-control validate"
                                placeholder="New password">
                        </div>
                        <div class="md-form mb-3">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="Form_pass2_forgot" class="form-control validate"
                                placeholder="Confirm password">

                        </div>
                        <div class="preloader">
                            <div class="row d-flex justify-content-center">
                                <div class="loadingio-spinner-rolling-n1r2sb8my0m">
                                    <div class="ldio-538wm7ir56h">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5 mt-5">
                            <button type="button" class="btn sendButton blue-gradient btn-block btn-rounded z-depth-1a"
                                id="pop_up_forgot">Change Password</button>
                        </div>
                    </div>
                </form>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-5 pb-5">
                    <p class="font-small grey-text d-flex justify-content-end">Go Back to&nbsp;<a id="signin_link_forgot"
                            class="blue-text ml-1" style="cursor: pointer;">
                            Log In</a>&nbsp;page</p>
                </div>
            </div>
            <!-- ------------------------------ Forgot password end ------------------------------ -->
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->

    <!-- mobile view -->
    <div class="d-lg-none position-relative">
        <!-- Enter Code for Mobile UI here -->
        <!-- overlay menu items start -->
        <div id="myNav" class="overlay" style="position:fixed;z-index:3">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                style="border: none !important;font-weight: 350 !important;">&times;</a>
            <div class="overlay-content">
                <div class="header_inner_logo"><a href="/" style="border: none;padding: 0;margin: 0;"><img
                            src="images/zamzar-logo2.png"></a></div>
                <div class="overlay-content-inner myNavbar_mobile">
                    <a href="/" id="mobile_home_button">Home</a>
                    <a href="exceltovcf" id="mobile_tools_button">Excel to VCF</a>                   
                    <a href="policy" id="mobile_policy_button">Policy</a>
                    <a href="contact" id="mobile_contact_button">Contact</a>
                    <li class="nav-item set_id_one" id="set_id_one_mobile"></li>
                    <li class="nav-item set_id_two" id="set_id_two_mobile"></li>
                </div>
            </div>
        </div>
        <!-- overlay menu items ends -->
        <!--  header show when scroll active start-->
        <div class="container-fluid">
            <div class="row main_background_mobile">
                <div class="col p-0">
                    <div class="header_show" id="navshow">
                        <div class="logo_button">
                            <span class="header_logo">
                                <a href="/"><img src="images/zamzar-logo.png"></a>
                            </span>
                            <span class="toggle_button" onclick="openNav()"
                                style="color: #067aee;width: 100%;text-align: right;">&#9776;</span>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------- content start ---------------------------- -->
                <div class=" d-flex justify-content-center" style="width: 100%;">

                    <div class="container" style="height: 28rem;">
                        <div id="navshowtext">
                            <div class="row ">
                                <div class="col d-flex justify-content-center">
                                    <h1 class="main_heading text-center">Welcome to The <span>VCF Converter!</span>
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="main_heading_paragraph text-center pt-3">#1 Website to convert Excel
                                        to VCF, VCF to Excel and
                                        VCF Splitter - 100% Secure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row pb-5">
                        <div class="col service_type_mobile topset">
                            <div class="row d-flex justify-content-center">
                                <div class="col-8">
                                    <div class="wrap-col">
                                        <div class="item-container">
                                            <a href="exceltovcf">
                                                <div class="item-caption">
                                                    <div class="item-caption-inner">
                                                        <div class="item-caption-inner1">
                                                            <h3>Excel to VCF</h3>
                                                            <span>VCF Tools</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/exceltovcf.jpg"
                                                    alt="Online Excel/CSV to VCF Converter free"
                                                    title="Excel/CSV to VCF/vCard Converter">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-8">
                                    <div class="wrap-col">
                                        <div class="item-container">
                                            <a href="#">
                                                <div class="item-caption">
                                                    <div class="item-caption-inner">
                                                        <div class="item-caption-inner1">
                                                            <h3>VCF to Excel</h3>
                                                            <span>VCF Tools</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/vcftoexcel.jpg"
                                                    alt="Online Excel/CSV to VCF Converter free"
                                                    title="Excel/CSV to VCF/vCard Converter">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-8">
                                    <div class="wrap-col">
                                        <div class="item-container">
                                            <a href="#">
                                                <div class="item-caption">
                                                    <div class="item-caption-inner">
                                                        <div class="item-caption-inner1">
                                                            <h3>VCF Splitter</h3>
                                                            <span>VCF Tools</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/vcfsplitter.jpg"
                                                    alt="Online Excel/CSV to VCF Converter free"
                                                    title="Excel/CSV to VCF/vCard Converter">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- --------------------------- about us start ---------------------------- -->

        <div class="container">
            <div class="row">
                <div class="col pt-5">
                    <h1 class="text-center pb-3">About Us</h1>
                    <p class="pt-2 paragraph_style">We are essentially developers. More interested in Cloud
                        development, IT solutions, Payment Gateway integration, SMS services, eCommerce.
                        Basically, everything that can be developed and deployed online. Reach out to us for
                        more.</p>

                    <p class="paragraph_style">We have developed and uploaded few file conversion services,
                        on user demands. Have a look. Use them. And do Share them!</p>
                </div>
            </div>

            <!-- -------------------------- why we use start --------------------------- -->

            <div class="row">
                <div class="col pt-5 pb-3">
                    <h1 class="text-center">Why use <span style="color: #2487EC;">VCF Converter</span> ?
                    </h1>

                </div>
            </div>
            <div class="row pb-5">
                <div class="col-sm-6">
                    <ul class="ticked">
                        <li><span class="blue">Convenience</span> - No software to download. Just select
                            your file, pick a format to convert to and away you go.</li>
                        <li><span class="blue">Speed</span> - We aim to complete all our conversions in
                            under 10 minutes.</li>
                        <li><span class="blue">Formats</span> - We support 1200+ file formats, more than any
                            other converter.</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="ticked">
                        <li><span class="blue">Experience</span> - We have been successfully converting
                            files since 2006 with millions of happy customers.</li>
                        <li><span class="blue">Support</span> - Got a file you can't convert? Just email us
                            and we'll ask our dedicated engineers to take a look for you.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ---------------------------- footer start ----------------------------- -->

        <div class="container-fluid">
            <div class="row footer">
                <div class="col">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col">
                                <h5 class="text-center Subscribe">Subscribe to our newsletter</h5>
                                <form class="form-inline d-flex justify-content-center" action="" method="post"
                                    target="_blank">
                                    <div class="form-group">

                                        <input id="footer-subscribe-email_mobile" class="form-control p-3 mt-3"
                                            name="EMAIL" placeholder="Your email" type="email"
                                            style="font-size:1.2rem;width: 20rem;">
                                    </div>

                                    <button type="submit" class="btn btn-success ml-2 mt-sm-3"
                                        style="font-size: 1.2rem;">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col footer_text d-flex justify-content-center">
                                <div class="social_mobile social d-flex">
                                    <a href="#" title="Like Zamzar on Facebook" target="_blank"
                                        rel="noopener noreferrer"><img src="images/social/social-facebook-icon.png"
                                            data-lazy-src="images/social-facebook-icon.png" width="32" height="34"
                                            alt="Facebook icon"></a>

                                    <a href="#" title="Follow Zamzar on Twitter" target="_blank"
                                        rel="noopener noreferrer"><img src="images/social/social-twitter-icon.png"
                                            data-lazy-src="images/social-twitter-icon.png" width="32" height="34"
                                            alt="Twitter icon"></a>

                                    <a href="#" title="Check out Zamzar on Instagram" target="_blank"
                                        rel="noopener noreferrer"><img src="images/social/social-instagram-icon.png"
                                            data-lazy-src="images/social-instagram-icon.png" width="32" height="32"
                                            alt="Instagram icon"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-6 footer_text">
                                <h3 class="text-left">INFO</h3>
                                <ul>
                                    <li><a href="#" title="Pricing">Pricing</a></li>
                                    <li><a href="#" title="Formats">Formats</a></li>
                                </ul>
                            </div>
                            <div class="col-6 footer_text">
                                <h3 class="text-left">HELP</h3>
                                <ul>
                                    <li><a href="#" title="FAQ">FAQ</a></li>
                                    <li><a href="#" title="Status" target="_blank">Status</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6 footer_text">
                                <h3 class="text-left">resources</h3>
                                <ul>
                                    <li><a href="#" title="Developer API" target="_blank">Developer API</a></li>
                                    <li><a href="#" title="Tools">Tools</a></li>
                                    <li><a href="#" title="Blog" target="_blank">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-6 footer_text">
                                <h3 class="text-left">Company</h3>
                                <ul>
                                    <li><a href="#" title="About">About Us</a></li>
                                    <li><a href="#" title="Advertise">Advertise</a></li>
                                    <li><a href="#" title="Sustainability">Sustainability</a></li>
                                    <li><a href="#" title="Terms">Terms of Service</a></li>
                                    <li><a href="#" title="Privacy">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-9 copyright_text pb-2">
                                <hr class="hrtag">
                                <h3 class="text-center">Copyright © 2019 - 2020 VCF Converter Ltd - All Rights Reserved
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script>
    $(document).ready(function() {
        // ------------------------- pop up sign up form ------------------------- //
        $('#pop_up_signup').on("click", function() {
            var mobile = $("#Form_phone_signup").val();
            var password = $("#Form_pass_signup").val();
            var con_password = $("#Form_pass2_signup").val();
            var email = $("#Form_email_signup").val();
            var error = "";
            uploaded_user_name = email;

            function validateEmail(email) {
                var re =
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
            if (mobile == "") {
                $("#Form_phone_signup").css('border-color', 'red');
                $("#Form_phone_signup").css('border-width', '2px');
                error = error + 'mobile';
            } else {
                $("#Form_phone_signup").css('border-color', '#C0BBBB');
                $("#Form_phone_signup").css('border-width', '1px');
            }
            if (password == "") {
                $("#Form_pass_signup").css('border-color', 'red');
                $("#Form_pass_signup").css('border-width', '2px');
                error = error + 'password';
            } else {
                $("#Form_pass_signup").css('border-color', '#C0BBBB');
                $("#Form_pass_signup").css('border-width', '1px');
            }
            if (con_password == "") {
                $("#Form_pass2_signup").css('border-color', 'red');
                $("#Form_pass2_signup").css('border-width', '2px');
                error = error + 'Class';
            } else {
                $("#Form_pass2_signup").css('border-color', '#C0BBBB');
                $("#Form_pass2_signup").css('border-width', '1px');
            }
            if (!validateEmail(email)) {
                $("#Form_email_signup").css('border-color', 'red');
                $("#Form_email_signup").css('border-width', '2px');
                error = error + 'email';
            } else {
                $("#Form_email_signup").css('border-color', '#C0BBBB');
                $("#Form_email_signup").css('border-width', '1px');
            }
            if (password != con_password) {
                $("#Form_pass2_signup").css('border-color', 'red');
                $("#Form_pass2_signup").css('border-width', '2px');
                $("#Form_pass_signup").css('border-color', 'red');
                $("#Form_pass_signup").css('border-width', '2px');
                // alert('Password not match !');
                error = error + 'password not matched';
            }
            if (error == "") {
                $('.preloader').css('display', 'block');
                $.ajax({
                    type: 'POST',
                    url: 'php/signup_form.php',
                    dataType: "json",
                    data: {
                        'email': email,
                        'mobile': mobile,
                        'password': password
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data.status == 201) {
                            user_id = data.id;
                            user_email=data.email;
                            $('#sign_up_page').css('display', 'none');
                            $('.preloader').css('display', 'none');
                            $('#sign_up_Otp').css('display', 'block');
                            
                        } else if (data.status == 601) {
                            console.log(data.error);
                            //     alert("problem with query");
                        } else if (data.status == 301) {
                            $('#alert_id_signup').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_signup').html(data.error);
                            // alert(data.error);
                        } else if (data.status == 302) {
                            $('#alert_id_signup').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_signup').html(data.error);
                        } else {
                            //console.log(data.error)
                        }
                    }
                });
            } else {
                // alert('There are error in the form. Please check your submissions');
            }
        });
        /* ------------------------- otp verification start ------------------------- */

        $('#pop_up_otp').click(function(){
            var error="";
            var otp_row = $("#Form_pass_Otp").val();
            if (otp_row == "") {
                $("#Form_pass_Otp").css('border-color', 'red');
                $("#Form_pass_Otp").css('border-width', '2px');
                error = error + 'otp_row';
            } else {
                $("#Form_pass_Otp").css('border-color', '#C0BBBB');
                $("#Form_pass_Otp").css('border-width', '1px');
            }
            if (error == "") {
                $('.preloader').css('display', 'block');
            $.ajax({
                    type: 'POST',
                    url: 'php/email_verify.php',
                    dataType: "json",
                    data: {                                    
                        'email': user_email,
                        otp: otp_row
                    },
                    success: function(data) {
                            // console.log(data);
                            if (data.status == 201) {
                            $('#pop_up_desktop').modal('hide');
                            $.ajax({
                            type: 'POST',
                            url: 'php/login_show.php',
                            success: function(response) {
                                    $(".set_id_one").html(response);
                                    model_sign_up_sign_in();
                                    logout_signup_signin();
                                }
                            });
                            $.ajax({
                                type: 'POST',
                                url: 'php/login_show2.php',
                                success: function(response) {
                                    $(".set_id_two").html(response);
                                    model_sign_up_sign_in();
                                    logout_signup_signin();
                                }
                            });                            
                            var file_first_char = (uploaded_user_name.substring(0, 1))
                        .toUpperCase();
                            $('.show_user_name').attr('data-letters', file_first_char);
                            $('.preloader').css('display', 'none');
                        } else if (data.status == 601) {
                            console.log(data.error);
                            $('#alert_id_Otp').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_Otp').html(data.error); 
                        } else if(data.status==301) {
                            $('#alert_id_Otp').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_Otp').html(data.error); 
                        }else{
                            //     alert("problem with query");
                        }
                    }
                });
            }
            else{

            }
        });
/* ------------------------- otp verification end ------------------------- */
        /* -------------------------- forgot_password functionality start ------------------------- */
        $('#pop_up_forgot').on("click", function() {
            var mobile = $("#Form_phone_forgot").val();
            var password = $("#Form_pass_forgot").val();
            var con_password = $("#Form_pass2_forgot").val();
            var email = $("#Form_email_forgot").val();
            var error = "";

            function validateEmail(email) {
                var re =
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
            if (mobile == "") {
                $("#Form_phone_forgot").css('border-color', 'red');
                $("#Form_phone_forgot").css('border-width', '2px');
                error = error + 'mobile';
            } else {
                $("#Form_phone_forgot").css('border-color', '#C0BBBB');
                $("#Form_phone_forgot").css('border-width', '1px');
            }
            if (password == "") {
                $("#Form_pass_forgot").css('border-color', 'red');
                $("#Form_pass_forgot").css('border-width', '2px');
                error = error + 'password';
            } else {
                $("#Form_pass_forgot").css('border-color', '#C0BBBB');
                $("#Form_pass_forgot").css('border-width', '1px');
            }
            if (con_password == "") {
                $("#Form_pass2_forgot").css('border-color', 'red');
                $("#Form_pass2_forgot").css('border-width', '2px');
                error = error + 'Class';
            } else {
                $("#Form_pass2_forgot").css('border-color', '#C0BBBB');
                $("#Form_pass2_forgot").css('border-width', '1px');
            }
            if (!validateEmail(email)) {
                $("#Form_email_forgot").css('border-color', 'red');
                $("#Form_email_forgot").css('border-width', '2px');
                error = error + 'email';
            } else {
                $("#Form_email_forgot").css('border-color', '#C0BBBB');
                $("#Form_email_forgot").css('border-width', '1px');
            }
            if (password != con_password) {
                $("#Form_pass2_forgot").css('border-color', 'red');
                $("#Form_pass2_forgot").css('border-width', '2px');
                $("#Form_pass_forgot").css('border-color', 'red');
                $("#Form_pass_forgot").css('border-width', '2px');
                // alert('Password not match !');
                error = error + 'password not matched';
            }
            if (error == "") {
                $('.preloader').css('display', 'block');
                $.ajax({
                    type: 'POST',
                    url: 'php/forgot_password.php',
                    dataType: "json",
                    data: {
                        'email': email,
                        'mobile': mobile,
                        'password': password
                        
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data.status == 201) {
                            $('#alert_id_forgot2').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_forgot').css('display', 'none');
                            $('#alert_id_forgot2').html(data.success);
                        } else if (data.status == 601) {
                            console.log(data.error);
                            //     alert("problem with query");
                        } else if (data.status == 301) {
                            $('#alert_id_forgot').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_forgot2').css('display', 'none');
                            $('#alert_id_forgot').html(data.error);
                            // alert(data.error);
                        } else if (data.status == 302) {
                            $('#alert_id_forgot').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_forgot2').css('display', 'none');
                            $('#alert_id_forgot').html(data.error);
                        } else {
                            //console.log(data.error)
                        }
                    }
                });
            } else {
                // alert('There are error in the form. Please check your submissions');
            }
        });
        /* -------------------------- forgot_password functionality end ------------------------- */
        // ---------------------- step signin form  to download file functionality ---------------------- //
        $('#pop_up_signin').on("click", function() {
            var email = $("#Form_email_signin").val();
            var password = $("#Form_pass_signin").val();
            var error = "";
            function validateEmail(email) {
                var re =
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
            if (password == "") {
                $("#Form_pass_signin").css('border-color', 'red');
                $("#Form_pass_signin").css('border-width', '2px');
                error = error + 'password';
            } else {
                $("#Form_pass_signin").css('border-color', '#C0BBBB');
                $("#Form_pass_signin").css('border-width', '1px');
            }
            if (!validateEmail(email)) {
                $("#Form_email_signin").css('border-color', 'red');
                $("#Form_email_signin").css('border-width', '2px');
                error = error + 'email';
            } else {
                $("#Form_email_signin").css('border-color', '#C0BBBB');
                $("#Form_email_signin").css('border-width', '1px');
            }
            if (error == "") {
                $('.preloader').css('display', 'block');
                uploaded_user_name = email;
                $.ajax({
                    type: 'POST',
                    url: 'php/login_form.php',
                    dataType: "json",
                    data: {
                        'email': email,
                        'password': password,
                        
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data.status == 201) {                            
                            $.ajax({
                                type: 'POST',
                                url: 'php/login_show.php',
                                data:{},
                                success: function(response) {
                                    $(".set_id_one").html(response);
                                    model_sign_up_sign_in();
                                    logout_signup_signin();
                                }
                            });
                            $.ajax({
                                type: 'POST',
                                url: 'php/login_show2.php',
                                data:{},
                                success: function(response) {
                                    $(".set_id_two").html(response);
                                    model_sign_up_sign_in();
                                    logout_signup_signin();
                                }
                            });
                            $('#pop_up_desktop').modal('hide'); 
                            $('.preloader').css('display', 'none');                           
                        } else if (data.status == 601) {
                            console.log(data.error);
                            user_email=data.email;
                            $('#sign_in_page').css('display', 'none');
                            $('.preloader').css('display', 'none');
                            $('#sign_up_Otp').css('display', 'block');
                            //     alert("problem with query");
                        } else if (data.status == 301) {
                            $('#alert_id_signin').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_signin').html(data.error);
                            // alert(data.error);
                        } else if (data.status == 302) {
                            $('#alert_id_signin').css('display', 'block');
                            $('.preloader').css('display', 'none');
                            $('#alert_id_signin').html(data.error);
                        } else {
                            //console.log(data.error)
                        }
                    }
                });
            } else {
                // alert('There are error in the form. Please check your submissions');
            }
        });



        // ---------------- header pop up login and signup button ---------------- //
        function model_sign_up_sign_in() {
            $('.pop_up_login_header').click(function() {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'block');
                $('#sign_up_page').css('display', 'none');
            });
            $('.pop_up_signup_header').click(function() {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'none');
                $('#sign_up_page').css('display', 'block');
            });
            $('#signin_link').click(function() {
                $('#sign_in_page').css('display', 'block');
                $('#sign_up_page').css('display', 'none');
                // alert("My name is sign in");
            });
            $('#signup_link').click(function() {

                $('#sign_up_page').css('display', 'block');
                $('#sign_in_page').css('display', 'none');
                // alert("My name is sign up");
            });
            $('#forgot_password_link').click(function() {

                $('#forgot_password_page').css('display', 'block');
                $('#sign_in_page').css('display', 'none');
                // alert("My name is sign up");
            });
            $('#signin_link_forgot').click(function() {
                $('#forgot_password_page').css('display', 'none');
                $('#sign_in_page').css('display', 'block');
            });
        }
        model_sign_up_sign_in();
        // ---------------- header pop up login and signup button mobile---------------- //
        $('.pop_up_login_mobile').click(function() {
            $('#pop_up_desktop').modal('show');
            $('#sign_in_page').css('display', 'block');
            $('#sign_up_page').css('display', 'none');
        });
        $('.pop_up_signup_mobile').click(function() {
            $('#pop_up_desktop').modal('show');
            $('#sign_in_page').css('display', 'none');
            $('#sign_up_page').css('display', 'block');
        });
        /* ------------------------------- logout call ------------------------------ */
        function logout_signup_signin() {
            $('.pop_up_logout_header').click(function() {               
                var logout_var = 'logout';
                $.ajax({
                    type: 'POST',
                    url: 'php/logout.php',
                    dataType: "json",
                    data: {
                        'logout_var': logout_var
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data.status == 201) {
                            window.location.replace('/');   
                        } else {
                            console.log(data.error);
                            //     alert("problem with query");
                        }
                    }
                });
            });
        }
        logout_signup_signin();
        $.ajax({
            type: 'POST',
            url: 'php/login_show.php',
            data:{},
            success: function(response) {
                // console.log(response);
                $(".set_id_one").html(response);
                model_sign_up_sign_in();
                logout_signup_signin();
            }
        });
        $.ajax({
            type: 'POST',
            url: 'php/login_show2.php',
            data:{},
            success: function(response) {
                $(".set_id_two").html(response);
                model_sign_up_sign_in();
                logout_signup_signin();
            }
        });
    });
    </script>
</body>

</html>