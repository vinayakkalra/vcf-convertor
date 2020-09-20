<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>VCF Converter| Example with all standards</title>

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
    <style>
        .text_color {
            color: #808080;
        }
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


        <div class="container-fluid navbarshow_desktop position-fixed bg-white">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class=" col-12">
                                <nav class="navbar">
                                    <a class="navbar-brand" href="/" style="width:35%"><img src="images/zamzar-logo.png"
                                            width="50%"></a>

                                    <ul class="nav navbar-right">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="exceltovcf">Excel to VCF</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">Contact</a>
                                        </li>
                                        <!-- test -->
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
        <!-- ---------------------------- policy content start ---------------------------  -->
        <!-- ------------------------ desktop heading start ------------------------ -->
        <div class="container-fluid">
            <div class="row">
                <div class="col exceltovcf_background">
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex justify-content-start mt-5 pt-5 exceltovcf_heading">
                                <h3><span>Policies</span> & <span>More</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------------ desktop heading end ------------------------ -->
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row pt-5 pb-5 mb-5 mt-5">
                            <div class="col-3">
                                <div class="wrap-col">
                                    <ol style="list-style-type: upper-roman;" class="text_color">
                                        <li>Privacy Policy</li>
                                        <li>Disclaimers</li>
                                        <li>Limitations of Liabilities</li>
                                        <li>Intellectual Properties</li>
                                    </ol><br>
                                </div>
                            </div>
                            <div class="col-9">
                                <h2 class="privacy_policy_heading">Privacy Policy</h2>

                                <span class="text_color mt-5 mb-3 d-flex">Users, Kindly take a note of the following
                                    things: </span>
                                <ol style="list-style-type: upper-roman;" class="text_color">
                                    <li>For all tools dealing with VCF format, we do not store your private data,
                                        contacts or any other information.</li>
                                    <li><em>Why do we charge for few services?</em> Because unlike other websites
                                        providing 'free' services, we do not sell our users' data for money! And so to
                                        recover our expenses, we charge a small fee from users.</li>
                                    <li>All your uploaded files and generated files are deleted after 48 hours. Even if
                                        you do not pay for our services. We store only those data, whose consent is
                                        given by the user against free download.</li>
                                    <li>We store only payment transaction information for any refund related issues.
                                    </li>
                                    <li>To clarify on any privacy issue, users can communicate with us using our contact
                                        form.</li>
                                    <li>If you buy any product on our website, your contact information and addresses
                                        will not be shared to any 3rd party except for logistics company.</li>
                                    <li>We use 3rd party payment systems, and thus do not store any credit card/debit
                                        card/banking information.</li>
                                </ol>

                                <h2 id="disclaimers" class="privacy_policy_heading mt-5">Disclaimers</h2>
                                <ol style="list-style-type: upper-roman;" class="text_color mt-4">
                                    <li>If you are using our online services, you must follow instructions written in
                                        order to execute the service properly. Make sure you check demo file properly
                                        before you make payment for full service, if service is paid service. After
                                        making payment, if you are not satisfied with service because of any mistake on
                                        your end, no refund will be initiated.</li>
                                    <li>For paid services, you must check if demo files meets your requirements. Refund
                                        shall not be given if you fail to verify your demo file at your end.</li>
                                    <li>All paid services are on pay-per-use basis. For annual subscription, API or bulk
                                        discounts; you must contact us directly.</li>
                                    <li>For products bought on our website, if the delivery fails due to incomplete
                                        address and returns to our warehouse, user shall pay extra for re-delivery with
                                        new address.</li>
                                    <li>We do not "repair" any of our products sold. Products shall be replaced if under
                                        warranty period. </li>
                                </ol>

                                <h2 id="liabilities" class="privacy_policy_heading mt-5">Limitations of Liabilities</h2>
                                <ol style="list-style-type: upper-roman;" class="text_color mt-4">
                                    <li>For paid services, if our system fails to deliver, you need to contact us within
                                        48 hours after payment in order to investigate in matter. If contacted within 48
                                        hours, we will be able to complete your service. If contacted after 48 hours, no
                                        refund will be initiated as all of the user files are deleted after 48 hours of
                                        service.</li>
                                    <li>For products sold online, returns will be accepted within one month after date
                                        of purchase. Refund amount will be given to buyer after deducting standard
                                        shipping charges.</li>
                                </ol>

                                <h2 id="ip" class="privacy_policy_heading mt-5">Intellectual Properties</h2>
                                <ol style="list-style-type: upper-roman;" class="text_color mt-4">
                                    <li>Name and Logo of <em>The Web Vendor</em>, are registered copyrights of The Web
                                        Vendor firm established in 2015. Copy and use of the name and logo without
                                        permissions, is strictly prohibited and liable to court action.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---------------------------- policy content end ---------------------------  -->
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
                                        <h5 class="text-white text-center Subscribe">Subscribe to our newsletter
                                        </h5>
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
                                <h3 class="text-center">Copyright © 2019 - 2020 VCF Converter Ltd - All Rights
                                    Reserved
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
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">
                        <strong>Sign
                            In</strong>
                    </h3>

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
                                class="blue-text ml-1" id="forgot_password_link">Forgot
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
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">
                        <strong>Sign
                            Up</strong>
                    </h3>

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
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">
                        <strong>Email Verification</strong>
                    </h3>
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
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">
                        <strong>Forgot
                            Password ?</strong>
                    </h3>

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
                    <p class="font-small grey-text d-flex justify-content-end">Go Back to&nbsp;<a
                            id="signin_link_forgot" class="blue-text ml-1" style="cursor: pointer;">
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
                    <a href="#" id="mobile_policy_button">Policy</a>
                    <a href="#" id="mobile_contact_button">Contact</a>
                    <li class="nav-item set_id_one" id="set_id_one_mobile"></li>
                    <li class="nav-item set_id_two" id="set_id_two_mobile"></li>
                </div>
            </div>
        </div>
        <!-- overlay menu items ends -->
        <!--  header show when scroll active start-->
        <div class="container-fluid">
            <div class="row exceltovcf_background_mobile">
                <div class="col p-0">
                    <div class="logo_button">
                        <span class="header_logo">
                            <a href="/"><img src="images/zamzar-logo.png"></a>
                        </span>
                        <span class="toggle_button" onclick="openNav()"
                            style="color: #067aee;width: 100%;text-align: right;">&#9776;</span>
                    </div>

                    <div class="container">
                        <div class="row pb-3">
                            <div class="col exceltovcf_heading_mobile d-flex justify-content-start">
                                <h3><span>Policies</span> & <span>More</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------- policy content start here ---------------------- -->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row  mt-5">
                            <div class="col">
                                <div class="wrap-col">
                                    <ol style="list-style-type: upper-roman;" class="text_color">
                                        <li>Privacy Policy</li>
                                        <li>Disclaimers</li>
                                        <li>Limitations of Liabilities</li>
                                        <li>Intellectual Properties</li>
                                    </ol><br>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 pb-5">
                            <div class="col">
                                <h2 class="privacy_policy_heading">Privacy Policy</h2>

                                <span class="text_color mt-5 mb-3 d-flex">Users, Kindly take a note of the following
                                    things: </span>
                                <ol style="list-style-type: upper-roman;" class="text_color">
                                    <li>For all tools dealing with VCF format, we do not store your private data,
                                        contacts or any other information.</li>
                                    <li><em>Why do we charge for few services?</em> Because unlike other websites
                                        providing 'free' services, we do not sell our users' data for money! And so to
                                        recover our expenses, we charge a small fee from users.</li>
                                    <li>All your uploaded files and generated files are deleted after 48 hours. Even if
                                        you do not pay for our services. We store only those data, whose consent is
                                        given by the user against free download.</li>
                                    <li>We store only payment transaction information for any refund related issues.
                                    </li>
                                    <li>To clarify on any privacy issue, users can communicate with us using our contact
                                        form.</li>
                                    <li>If you buy any product on our website, your contact information and addresses
                                        will not be shared to any 3rd party except for logistics company.</li>
                                    <li>We use 3rd party payment systems, and thus do not store any credit card/debit
                                        card/banking information.</li>
                                </ol>

                                <h2 id="disclaimers" class="privacy_policy_heading mt-5">Disclaimers</h2>
                                <ol style="list-style-type: upper-roman;" class="text_color mt-4">
                                    <li>If you are using our online services, you must follow instructions written in
                                        order to execute the service properly. Make sure you check demo file properly
                                        before you make payment for full service, if service is paid service. After
                                        making payment, if you are not satisfied with service because of any mistake on
                                        your end, no refund will be initiated.</li>
                                    <li>For paid services, you must check if demo files meets your requirements. Refund
                                        shall not be given if you fail to verify your demo file at your end.</li>
                                    <li>All paid services are on pay-per-use basis. For annual subscription, API or bulk
                                        discounts; you must contact us directly.</li>
                                    <li>For products bought on our website, if the delivery fails due to incomplete
                                        address and returns to our warehouse, user shall pay extra for re-delivery with
                                        new address.</li>
                                    <li>We do not "repair" any of our products sold. Products shall be replaced if under
                                        warranty period. </li>
                                </ol>

                                <h2 id="liabilities" class="privacy_policy_heading mt-5">Limitations of Liabilities</h2>
                                <ol style="list-style-type: upper-roman;" class="text_color mt-4">
                                    <li>For paid services, if our system fails to deliver, you need to contact us within
                                        48 hours after payment in order to investigate in matter. If contacted within 48
                                        hours, we will be able to complete your service. If contacted after 48 hours, no
                                        refund will be initiated as all of the user files are deleted after 48 hours of
                                        service.</li>
                                    <li>For products sold online, returns will be accepted within one month after date
                                        of purchase. Refund amount will be given to buyer after deducting standard
                                        shipping charges.</li>
                                </ol>

                                <h2 id="ip" class="privacy_policy_heading mt-5">Intellectual Properties</h2>
                                <ol style="list-style-type: upper-roman;" class="text_color mt-4">
                                    <li>Name and Logo of <em>The Web Vendor</em>, are registered copyrights of The Web
                                        Vendor firm established in 2015. Copy and use of the name and logo without
                                        permissions, is strictly prohibited and liable to court action.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------- policy content end here ---------------------- -->

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
                                <h3 class="text-center">Copyright © 2019 - 2020 VCF Converter Ltd - All Rights
                                    Reserved
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
        $(document).ready(function () {
            // ------------------------- pop up sign up form ------------------------- //
            $('#pop_up_signup').on("click", function () {
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
                        success: function (data) {
                            // console.log(data);
                            if (data.status == 201) {
                                user_id = data.id;
                                user_email = data.email;
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

            $('#pop_up_otp').click(function () {
                var error = "";
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
                        success: function (data) {
                            // console.log(data);
                            if (data.status == 201) {
                                $('#pop_up_desktop').modal('hide');
                                $('.preloader').css('display', 'none');
                                $.ajax({
                                    type: 'POST',
                                    url: 'php/login_show.php',
                                    success: function (response) {
                                        $(".set_id_one").html(response);
                                        model_sign_up_sign_in();
                                        logout_signup_signin();
                                    }
                                });
                                $.ajax({
                                    type: 'POST',
                                    url: 'php/login_show2.php',
                                    success: function (response) {
                                        $(".set_id_two").html(response);
                                        model_sign_up_sign_in();
                                        logout_signup_signin();
                                    }
                                });
                                var file_first_char = (uploaded_user_name.substring(0, 1))
                                    .toUpperCase();
                                $('.show_user_name').attr('data-letters', file_first_char);

                            } else if (data.status == 601) {
                                console.log(data.error);
                                $('#alert_id_Otp').css('display', 'block');
                                $('.preloader').css('display', 'none');
                                $('#alert_id_Otp').html(data.error);
                            } else if (data.status == 301) {
                                $('#alert_id_Otp').css('display', 'block');
                                $('.preloader').css('display', 'none');
                                $('#alert_id_Otp').html(data.error);
                            } else {
                                //     alert("problem with query");
                            }
                        }
                    });
                } else {

                }
            });
            /* ------------------------- otp verification end ------------------------- */
            /* -------------------------- forgot_password functionality start ------------------------- */
            $('#pop_up_forgot').on("click", function () {
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
                        success: function (data) {
                            // console.log(data);
                            if (data.status == 201) {
                                $('#alert_id_forgot2').css('display', 'block');
                                $('#alert_id_forgot').css('display', 'none');
                                $('.preloader').css('display', 'none');
                                $('#alert_id_forgot2').html(data.success);
                            } else if (data.status == 601) {
                                console.log(data.error);
                                //     alert("problem with query");
                            } else if (data.status == 301) {
                                $('#alert_id_forgot').css('display', 'block');
                                $('#alert_id_forgot2').css('display', 'none');
                                $('.preloader').css('display', 'none');
                                $('#alert_id_forgot').html(data.error);
                                // alert(data.error);
                            } else if (data.status == 302) {
                                $('#alert_id_forgot').css('display', 'block');
                                $('#alert_id_forgot2').css('display', 'none');
                                $('.preloader').css('display', 'none');
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
            $('#pop_up_signin').on("click", function () {
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
                        success: function (data) {
                            // console.log(data);
                            if (data.status == 201) {
                                $.ajax({
                                    type: 'POST',
                                    url: 'php/login_show.php',
                                    data: {},
                                    success: function (response) {
                                        $(".set_id_one").html(response);
                                        model_sign_up_sign_in();
                                        logout_signup_signin();
                                    }
                                });
                                $.ajax({
                                    type: 'POST',
                                    url: 'php/login_show2.php',
                                    data: {},
                                    success: function (response) {
                                        $(".set_id_two").html(response);
                                        model_sign_up_sign_in();
                                        logout_signup_signin();
                                    }
                                });
                                $('#pop_up_desktop').modal('hide');
                                $('.preloader').css('display', 'none');
                            } else if (data.status == 601) {
                                console.log(data.error);
                                user_email = data.email;
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
                $('.pop_up_login_header').click(function () {
                    $('#pop_up_desktop').modal('show');
                    $('#sign_in_page').css('display', 'block');
                    $('#sign_up_page').css('display', 'none');
                });
                $('.pop_up_signup_header').click(function () {
                    $('#pop_up_desktop').modal('show');
                    $('#sign_in_page').css('display', 'none');
                    $('#sign_up_page').css('display', 'block');
                });
                $('#signin_link').click(function () {
                    $('#sign_in_page').css('display', 'block');
                    $('#sign_up_page').css('display', 'none');
                    // alert("My name is sign in");
                });
                $('#signup_link').click(function () {

                    $('#sign_up_page').css('display', 'block');
                    $('#sign_in_page').css('display', 'none');
                    // alert("My name is sign up");
                });
                $('#forgot_password_link').click(function () {

                    $('#forgot_password_page').css('display', 'block');
                    $('#sign_in_page').css('display', 'none');
                    // alert("My name is sign up");
                });
                $('#signin_link_forgot').click(function () {
                    $('#forgot_password_page').css('display', 'none');
                    $('#sign_in_page').css('display', 'block');
                });
            }
            model_sign_up_sign_in();
            // ---------------- header pop up login and signup button mobile---------------- //
            $('.pop_up_login_mobile').click(function () {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'block');
                $('#sign_up_page').css('display', 'none');
            });
            $('.pop_up_signup_mobile').click(function () {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'none');
                $('#sign_up_page').css('display', 'block');
            });
            /* ------------------------------- logout call ------------------------------ */
            function logout_signup_signin() {
                $('.pop_up_logout_header').click(function () {
                    var logout_var = 'logout';
                    $.ajax({
                        type: 'POST',
                        url: 'php/logout.php',
                        dataType: "json",
                        data: {
                            'logout_var': logout_var
                        },
                        success: function (data) {
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
                data: {},
                success: function (response) {
                    // console.log(response);
                    $(".set_id_one").html(response);
                    model_sign_up_sign_in();
                    logout_signup_signin();
                }
            });
            $.ajax({
                type: 'POST',
                url: 'php/login_show2.php',
                data: {},
                success: function (response) {
                    $(".set_id_two").html(response);
                    model_sign_up_sign_in();
                    logout_signup_signin();
                }
            });
        });
    </script>
</body>

</html>