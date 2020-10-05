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
        .text_color {
            color: #808080;
        }

        .alert-danger {
            color: #721c24;
            background-color: #fff !important;
            border-color: #fff !important;
        }

        #alert_id_Otp {
            display: none;
        }

        .preloader,
        .preloader_mobile {
            display: none;
        }

        .faq_heading {
            font-size: 3rem;
            font-weight: 500;
        }

        .list-unstyled {
            color: #2487eb;

        }

        .list-unstyled a:hover {
            text-decoration: none;
        }
        
        .medium{
            font-size: 2rem;
            color: #000;
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
                                            <a class="nav-link" style="cursor:pointer;">Tools<i
                                                    class='fa fa-angle-down'></i></a>
                                            <ul>
                                                <li><a href="exceltovcf" style="color:#f1f1f1;">Excel to VCF</a></li>
                                                <li><a href="vcftoxls" style="color:#f1f1f1;">VCF to CSV</a></li>
                                                <!-- <li><a href="#" style="color:#f1f1f1;">VCF Splitter</a></li> -->
                                            </ul>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link " href="policy">Policy</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link " href="contact">Contact</a>
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
                                <h3><span>FAQ</span></h3>
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
                            <div class="col">
                                <div class="wrap-col">
                                    <div class="col-sm-12 col-md-8" style="font-size: 2.1rem; font-weight: 300;">
                                        <p>Have a query? Click on the question below to see our answer.</p>

                                        <p>If you can't find a solution to your query here then please fill in our <a
                                                href="contact.php" style="color: #067aee;">contact form</a> and we'll
                                            do our best to help.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-8 faq-toc">
                                <div class="card px-12 py-8">
                                    <div class="mb-20">
                                        <h3 class="book mb-5 faq_heading">File Conversions</h3>
                                        <ul class="list-unstyled">
                                            <li class="mb-6"><a href="#Q1">What different file formats do you
                                                    support?</a></li>
                                            <li class="mb-6"><a href="#Q2">I converted a file and didn't download it - What happened?</a></li>
                                            <li class="mb-6"><a href="#Q3">Can I convert the same file twice?</a></li>                                            
                                            <li class="mb-6"><a href="#Q4">I'm having problems opening my converted file
                                                after downloading - Can you help?</a></li>
                                            <li class="mb-6"><a href="#Q5">How many files can I convert at one time?</a></li>
                                            <li class="mb-6"><a href="#Q6">How can I convert Excel/CSV to VCF files?</a></li>
                                            <li class="mb-6"><a href="#Q7">How can I convert VCF to CSV files?</a></li>                                            
                                        </ul>
                                    </div>
                                    <div class="mb-20">
                                        <h3 class="book mb-5 faq_heading">Upload / Downloads</h3>
                                        <ul class="list-unstyled">
                                            <li class="mb-6"><a href="#Q8">What's the maximum size of files that I can
                                                upload?</a></li>
                                            <li class="mb-6"><a href="#Q9">How many times can I download my converted
                                                file?</a></li>
                                            <li class="mb-6"><a href="#Q10">How long should it take to upload or
                                                download my file?</a></li>
                                            <li class="mb-6"><a href="#Q11">I can't find my downloaded file - Where did
                                                it download to?</a></li>                                            
                                        </ul>
                                    </div>                                 
                                    <div class="mb-20">
                                        <h3 class="book mb-5 faq_heading">Account Management</h3>
                                        <ul class="list-unstyled">
                                            <li class="mb-6"><a href="#Q12">How can I sign up for an account?</a></li>
                                            <li class="mb-6"><a href="#Q13">How do I login?</a></li>
                                            <li class="mb-6"><a href="#Q14">How can I pay?</a></li>
                                            <li class="mb-6"><a href="#Q15">I haven't received my verification email?</a></li>                                            
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 pt-5">
                            <div class="col-sm-12 col-md-8 faq-content">
                                <div class="card px-12 py-10">
                                    <div class="mb-20">
                                        <h3 class="pull-left faq_heading mb-5">File Conversions</h3>
                                        <div class="clearfix"></div>
                                        <ul class="list-unstyled">
                                            <li class="mb-16">
                                                <h4 id="Q1" class="medium">What different file formats do you support?
                                                </h4>
                                                <p>You can use CSVTOVCF to convert Excel/CSV to VCF and VCF to CSV file formats </p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q2" class="medium">I converted a file and didn't download it - What happened?</h4>
                                                <p>In step 2 you must have fill start row and end row to convert your file.</p>
                                            </li>                                            
                                            <li class="mb-16">
                                                <h4 id="Q3" class="medium">Can I convert the same file twice?</h4>
                                                <p>You can convert the same file as many times as you want.</p>
                                            </li>                                       
                                            
                                            <li class="mb-16">
                                                <h4 id="Q4" class="medium">I'm having problems opening my converted file
                                                    after downloading - Can you help?</h4>
                                                <p>If you find after your conversion that the file will not open, please
                                                    ensure you have the correct software in order to open your file. If
                                                    you have the correct software, and the file still does not open then
                                                    please report the issue to our support team <a
                                                        href="mailto:support@csvtovcf.com"
                                                        title="Email us about any support" style="color: #2487eb;">support@csvtovcf.com</a>
                                                    attaching the affected file.</p>
                                            </li>                                            
                                            <li class="mb-16">
                                                <h4 id="Q5" class="medium">How many files can I convert at one time?
                                                </h4>
                                                <p>With our free service you can convert up to 5 files. However if you want to convert your all file you can choose our paid plan.</p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q6" class="medium">How can I convert Excel/CSV to VCF files?</h4>
                                                <p>You can convert files from your computer on CSVTOVCF on our <a href="/"
                                                        title="Go to the main conversion page">main conversion page</a>
                                                    by clicking the "Excel/CSV to VCF" image or Goto header and click on Tools and select ExceltoVCf,Now you on Step-1 click on "choose file" to browsing your file, selecting
                                                    the relevant file click on  the "SUBMIT" button.
                                                    Now you on Step-2 here you can fill your sheet number start column,end column and you must have fill start row and end row,than click on submit.
                                                    Now you on Step-3 here you have to tell about your data in each column.than click on next button.If you are already login than click on download or first login than download your files.
                                                    </p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q7" class="medium">How can I convert VCF to CSV files?</h4>
                                                <p>You can convert files from your computer on CSVTOVCF on our <a href="/"
                                                        title="Go to the main conversion page">main conversion page</a>
                                                    by clicking the "VCFtoCSV" image or Goto header and click on Tools and select VCFtoCSV,Now you  click on "choose file" to browsing your file, selecting
                                                    the relevant file click on  the "SUBMIT" button.
                                                    If you are already login than click on download or first login than download your files.
                                                    </p>
                                            </li>                                            
                                        </ul>
                                    </div>
                                    <hr class="mb-12">
                                    <div class="mb-20">
                                        <h3 class="pull-left faq_heading mb-5">Upload / Downloads</h3>
                                        <div class="clearfix"></div>
                                        <ul class="list-unstyled">                                            
                                            <li class="mb-16">
                                                <h4 id="Q8" class="medium">What's the maximum size of files that I can
                                                    upload?</h4>
                                                <p>Currently on the CSVTOVCF service you can upload a maximum of 2 MB of file </p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q9" class="medium">How many times can I download my converted
                                                    file?</h4>
                                                <p>You can download your converted file as many times as you like without refreshing/close your page.If you refresh or close your page you can't to download file again.</p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q10" class="medium">How long should it take to upload or
                                                    download my file?</h4>
                                                <p>This is dependent on the type of internet connection you have. If you
                                                    are experiencing slow upload speeds remember that many broadband and
                                                    ADSL providers allow for fast download speeds but limit users on
                                                    upload speeds. Check with your provider for more detailed
                                                    information.</p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q11" class="medium">I can't find my downloaded file - Where did
                                                    it download to?</h4>
                                                <p>You specify where you want to download your file to on your computer,we have no default directory to download converted files.</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <hr class="mb-12">                                   
                                    
                                    <div class="mb-20">
                                        <h3 class="pull-left faq_heading mb-5">Account Management</h3>
                                        <div class="clearfix"></div>
                                        <ul class="list-unstyled">                                            
                                            <li class="mb-16">
                                                <h4 id="Q12" class="medium">How can I sign up for an account?</h4>
                                                <p>Just click on signup button and fill your details and hit the signup button we send an otp on your given email id fill your otp and verify your email now your account create successfully.</p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q13" class="medium">How do I login?</h4>
                                                <p>If you already have an account with us just click on login button and enter your email address and
                                                    password before clicking the login button. If you have forgotten
                                                    your password just click on forgot password to reset it.</p>
                                            </li>
                                            <li class="mb-16">
                                                <h4 id="Q14" class="medium">How can I pay?</h4>
                                                <p>You can use Visa or Mastercard - we accept both credit and debit cards.</p>
                                            </li>                        
                                            <li class="mb-16">
                                                <h4 id="Q15" class="medium">I haven't received my verification email?
                                                </h4>
                                                <p>If you have signed up but not yet received your verification email then
                                                    please check your bulk or spam folders, as on occasion CSVTOVCF emails
                                                    are placed here. Should you still not be able to find your email,
                                                    then please attempt to log in with your signup email and password.
                                                    If this still does not work as expected then please contact us.
                                                </p>
                                            </li>                                         
                                        </ul>
                                    </div>                              
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---------------------------- policy content end ---------------------------  -->
            <!-- ------------------------ desktop footer start ------------------------- -->
            <div class="row footer pt-5 mt-5">
                <div class="col">
                    <div class="container">
                        <div class="row pt-5">
                            <div class="col-6 footer_text">
                                <img src="images/zamzar-logo2.png" alt="footer logo" style="width:40%">
                                <div class="col-10 mt-3"><p style="color:#f1f1f1;font-size:1.4rem">#1 Website to convert Excel to VCF and VCF to CSV - 100% Secure</P></div>
                            </div>
                            <div class="col-2 footer_text">
                                <h3 class="text-left pb-2">Get in Touch</h3>
                                <ul>
                                    <li><a href="pricing" title="Pricing">Pricing</a></li>
                                    <li><a href="Faq" title="FAQ">FAQ</a></li>
                                    <li><a href="policy" title="Privacy">Privacy Policy</a></li>
                                </ul>                                
                            </div>
                            <div class="col-4 footer_text">                                
                                <h5 class="text-white  Subscribe mb-3" id="desktop_newsletter_head">Subscribe to our newsletter</h5>
                                <h5 class="text-white  Subscribe mb-3" id="desktop_newsletter_success"></h5>
                                        <form class="form-inline">
                                            <div class="form-group">

                                                <input id="footer-subscribe-email_desktop" class="form-control p-3 mt-2"
                                                    name="EMAIL" placeholder="Your email" type="email"
                                                    style="font-size:1.4rem !important;">
                                            </div>

                                            <div  class="btn btn-success ml-2 mt-2"
                                                style="font-size: 1.4rem;" id="desktop_newsletter"><div class="d-flex justify-content-center"><img src="images/ajaxloader.gif" alt="preloadergif" class="mr-2 subscribe_preloader">Subscribe</div></div>
                                        </form>
                            </div>                             
                        </div>
                        <div class="row d-flex justify-content-center pt-5">
                            <div class="col-9 copyright_text pb-2">
                                <hr class="hrtag">
                                <h3 class="text-center mt-3">Copyright © 2019 - 2020 CSVTOVCF Converter Ltd - All Rights Reserved
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
        aria-hidden="true" style="overflow: hidden;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!--Content-->
            <div class="modal-content form-elegant" id="sign_in_page">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">
                        <strong>Sign
                            In</strong>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size:3rem;">&times;</span>
                    </button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size:3rem;">&times;</span>
                    </button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size:3rem;">&times;</span>
                    </button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size:3rem;">&times;</span>
                    </button>
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
                    <a class="nav-link" style="cursor:pointer;" id="flip">Tools<i class='fa fa-angle-down ml-3'></i></a>
                    <div id="panel">
                        <a href="exceltovcf" style="color:#f1f1f1;" id="mobile_tools_button">Excel to VCF</a>
                        <a href="vcftoxls" style="color:#f1f1f1;" id="mobile_tools_button">VCF to CSV</a>
                        <!-- <a href="#" style="color:#f1f1f1;" id="mobile_tools_button">VCF Splitter</a> -->
                    </div>
                    <!-- <a href="policy" id="mobile_policy_button">Policy</a> -->
                    <a href="contact" id="mobile_contact_button">Contact</a>
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
                                <h3><span>FAQ</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------- FAQ start here ---------------------- -->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="wrap-col">
                        <div class="col-sm-12 col-md-8" style="font-size: 1.8rem; font-weight: 300;">
                            <p>Have a query? Click on the question below to see our answer.</p>

                            <p>If you can't find a solution to your query here then please fill in our <a
                                    href="contact.php" style="color: #067aee;">contact form</a> and we'll
                                do our best to help.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-8 faq-toc">
                    <div class="card px-12 py-8">
                        <div class="mb-20">
                            <h3 class="book mb-5 faq_heading">File Conversions</h3>
                            <ul class="list-unstyled">
                                <li class="mb-6"><a href="#Q1_mobile">What different file formats do you
                                        support?</a></li>
                                <li class="mb-6"><a href="#Q2_mobile">I converted a file and didn't download it - What happened?</a></li>
                                <li class="mb-6"><a href="#Q3_mobile">Can I convert the same file twice?</a></li>                                            
                                <li class="mb-6"><a href="#Q4_mobile">I'm having problems opening my converted file
                                    after downloading - Can you help?</a></li>
                                <li class="mb-6"><a href="#Q5_mobile">How many files can I convert at one time?</a></li>
                                <li class="mb-6"><a href="#Q6_mobile">How can I convert Excel/CSV to VCF files?</a></li>
                                <li class="mb-6"><a href="#Q7_mobile">How can I convert VCF to CSV files?</a></li>                                            
                            </ul>
                        </div>
                        <div class="mb-20">
                            <h3 class="book mb-5 faq_heading">Upload / Downloads</h3>
                            <ul class="list-unstyled">
                                <li class="mb-6"><a href="#Q8_mobile">What's the maximum size of files that I can
                                    upload?</a></li>
                                <li class="mb-6"><a href="#Q9_mobile">How many times can I download my converted
                                    file?</a></li>
                                <li class="mb-6"><a href="#Q10_mobile">How long should it take to upload or
                                    download my file?</a></li>
                                <li class="mb-6"><a href="#Q11_mobile">I can't find my downloaded file - Where did
                                    it download to?</a></li>                                            
                            </ul>
                        </div>                                 
                        <div class="mb-20">
                            <h3 class="book mb-5 faq_heading">Account Management</h3>
                            <ul class="list-unstyled">
                                <li class="mb-6"><a href="#Q12_mobile">How can I sign up for an account?</a></li>
                                <li class="mb-6"><a href="#Q13_mobile">How do I login?</a></li>
                                <li class="mb-6"><a href="#Q14_mobile">How can I pay?</a></li>
                                <li class="mb-6"><a href="#Q15_mobile">I haven't received my verification email?</a></li>                                            
                            </ul>
                        </div>                                    
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5 mb-5 pb-5">
                <div class="col-sm-12 col-md-8 faq-content">
                    <div class="card px-12 py-10">
                        <div class="mb-20">
                            <h3 class="pull-left faq_heading mb-5">File Conversions</h3>
                            <div class="clearfix"></div>
                            <ul class="list-unstyled">
                                <li class="mb-16">
                                    <h4 id="Q1_mobile" class="medium">What different file formats do you support?
                                    </h4>
                                    <p>You can use CSVTOVCF to convert Excel/CSV to VCF and VCF to CSV file formats </p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q2_mobile" class="medium">I converted a file and didn't download it - What happened?</h4>
                                    <p>In step 2 you must have fill start row and end row to convert your file.</p>
                                </li>                                            
                                <li class="mb-16">
                                    <h4 id="Q3_mobile" class="medium">Can I convert the same file twice?</h4>
                                    <p>You can convert the same file as many times as you want.</p>
                                </li>                                       
                                
                                <li class="mb-16">
                                    <h4 id="Q4_mobile" class="medium">I'm having problems opening my converted file
                                        after downloading - Can you help?</h4>
                                    <p>If you find after your conversion that the file will not open, please
                                        ensure you have the correct software in order to open your file. If
                                        you have the correct software, and the file still does not open then
                                        please report the issue to our support team <a
                                            href="mailto:support@csvtovcf.com"
                                            title="Email us about any support" style="color: #2487eb;">support@csvtovcf.com</a>
                                        attaching the affected file.</p>
                                </li>                                            
                                <li class="mb-16">
                                    <h4 id="Q5_mobile" class="medium">How many files can I convert at one time?
                                    </h4>
                                    <p>With our free service you can convert up to 5 files. However if you want to convert your all file you can choose our paid plan.</p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q6_mobile" class="medium">How can I convert Excel/CSV to VCF files?</h4>
                                    <p>You can convert files from your computer on CSVTOVCF on our <a href="/"
                                            title="Go to the main conversion page">main conversion page</a>
                                        by clicking the "Excel/CSV to VCF" image or Goto header and click on Tools and select ExceltoVCf,Now you on Step-1 click on "choose file" to browsing your file, selecting
                                        the relevant file click on  the "SUBMIT" button.
                                        Now you on Step-2 here you can fill your sheet number start column,end column and you must have fill start row and end row,than click on submit.
                                        Now you on Step-3 here you have to tell about your data in each column.than click on next button.If you are already login than click on download or first login than download your files.
                                        </p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q7_mobile" class="medium">How can I convert VCF to CSV files?</h4>
                                    <p>You can convert files from your computer on CSVTOVCF on our <a href="/"
                                            title="Go to the main conversion page">main conversion page</a>
                                        by clicking the "VCFtoCSV" image or Goto header and click on Tools and select VCFtoCSV,Now you  click on "choose file" to browsing your file, selecting
                                        the relevant file click on  the "SUBMIT" button.
                                        If you are already login than click on download or first login than download your files.
                                        </p>
                                </li>                                            
                            </ul>
                        </div>
                        <hr class="mb-12">
                        <div class="mb-20">
                            <h3 class="pull-left faq_heading mb-5">Upload / Downloads</h3>
                            <div class="clearfix"></div>
                            <ul class="list-unstyled">                                            
                                <li class="mb-16">
                                    <h4 id="Q8_mobile" class="medium">What's the maximum size of files that I can
                                        upload?</h4>
                                    <p>Currently on the CSVTOVCF service you can upload a maximum of 2 MB of file </p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q9_mobile" class="medium">How many times can I download my converted
                                        file?</h4>
                                    <p>You can download your converted file as many times as you like without refreshing/close your page.If you refresh or close your page you can't to download file again.</p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q10_mobile" class="medium">How long should it take to upload or
                                        download my file?</h4>
                                    <p>This is dependent on the type of internet connection you have. If you
                                        are experiencing slow upload speeds remember that many broadband and
                                        ADSL providers allow for fast download speeds but limit users on
                                        upload speeds. Check with your provider for more detailed
                                        information.</p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q11_mobile" class="medium">I can't find my downloaded file - Where did
                                        it download to?</h4>
                                    <p>You specify where you want to download your file to on your computer,we have no default directory to download converted files.</p>
                                </li>
                            </ul>
                        </div>

                        <hr class="mb-12">                                   
                        
                        <div class="mb-20">
                            <h3 class="pull-left faq_heading mb-5">Account Management</h3>
                            <div class="clearfix"></div>
                            <ul class="list-unstyled">                                            
                                <li class="mb-16">
                                    <h4 id="Q12_mobile" class="medium">How can I sign up for an account?</h4>
                                    <p>Just click on signup button and fill your details and hit the signup button we send an otp on your given email id fill your otp and verify your email now your account create successfully.</p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q13_mobile" class="medium">How do I login?</h4>
                                    <p>If you already have an account with us just click on login button and enter your email address and
                                        password before clicking the login button. If you have forgotten
                                        your password just click on forgot password to reset it.</p>
                                </li>
                                <li class="mb-16">
                                    <h4 id="Q14_mobile" class="medium">How can I pay?</h4>
                                    <p>You can use Visa or Mastercard - we accept both credit and debit cards.</p>
                                </li>                        
                                <li class="mb-16">
                                    <h4 id="Q15_mobile" class="medium">I haven't received my verification email?
                                    </h4>
                                    <p>If you have signed up but not yet received your verification email then
                                        please check your bulk or spam folders, as on occasion CSVTOVCF emails
                                        are placed here. Should you still not be able to find your email,
                                        then please attempt to log in with your signup email and password.
                                        If this still does not work as expected then please contact us.
                                    </p>
                                </li>                                         
                            </ul>
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
                        <div class="row pt-5">
                            <div class="col footer_text">
                                <div class="justify-content-center d-flex"> <img src="images/zamzar-logo2.png"
                                        alt="footer logo" style="width:60%"></div>
                                <div class="row justify-content-center d-flex">
                                    <div class="col-10 mt-3">
                                        <p style="color:#f1f1f1;font-size:1.4rem;">#1 Website to convert Excel to VCF and VCF to CSV - 100% Secure</P>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row pt-5">
                            <div class="col footer_text">
                                <h3 class="text-center pb-3">Get In Touch</h3>
                                <ul class="text-center">
                                    <li><a href="pricing" title="Pricing">Pricing</a></li>
                                    <li><a href="Faq" title="FAQ">FAQ</a></li>
                                    <li><a href="policy" title="Privacy">Privacy Policy</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="row mt-3 mb-5">
                            <div class="col">
                                <h5 class="text-center Subscribe" id="mobile_newsletter_head">Subscribe to our newsletter</h5>
                                <h5 class="text-center Subscribe" id="mobile_newsletter_success">Subscribe to our newsletter</h5>
                                <form class="form-inline d-flex justify-content-center" action="" method="post"
                                    target="_blank">
                                    <div class="form-group">

                                        <input id="footer-subscribe-email_mobile" class="form-control p-3 mt-3"
                                            name="EMAIL" placeholder="Your email" type="email"
                                            style="font-size:1.2rem;width: 20rem;">
                                    </div>                                    
                                        <div class="btn btn-success ml-2 mt-2" style="font-size: 1.2rem;"
                                        id="mobile_newsletter"><div class="d-flex justify-content-center"><img src="images/ajaxloader.gif" alt="preloadergif" class="mr-2 subscribe_preloader">Subscribe</div></div>
                                </form>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-9 copyright_text pb-2">
                                <hr class="hrtag">
                                <h3 class="text-center">Copyright © 2019 - 2020 CSVTOVCF Converter Ltd - All Rights
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
                    $('#forgot_password_page').css('display', 'none');
                });
                $('.pop_up_signup_header').click(function () {
                    $('#pop_up_desktop').modal('show');
                    $('#sign_in_page').css('display', 'none');
                    $('#sign_up_page').css('display', 'block');
                    $('#forgot_password_page').css('display', 'none');
                });
                $('#signin_link').click(function () {
                    $('#sign_in_page').css('display', 'block');
                    $('#sign_up_page').css('display', 'none');
                    $('#forgot_password_page').css('display', 'none');
                    // alert("My name is sign in");
                });
                $('#signup_link').click(function () {

                    $('#sign_up_page').css('display', 'block');
                    $('#sign_in_page').css('display', 'none');
                    $('#forgot_password_page').css('display', 'none');
                    // alert("My name is sign up");
                });
                $('#forgot_password_link').click(function () {

                    $('#forgot_password_page').css('display', 'block');
                    $('#sign_in_page').css('display', 'none');
                    $('#sign_up_page').css('display', 'none');
                    // alert("My name is sign up");
                });
                $('#signin_link_forgot').click(function () {
                    $('#forgot_password_page').css('display', 'none');
                    $('#sign_in_page').css('display', 'block');
                    $('#sign_up_page').css('display', 'none');
                });
            }
            model_sign_up_sign_in();
            // ---------------- header pop up login and signup button mobile---------------- //
            $('.pop_up_login_mobile').click(function () {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'block');
                $('#sign_up_page').css('display', 'none');
                $('#forgot_password_page').css('display', 'none');
            });
            $('.pop_up_signup_mobile').click(function () {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'none');
                $('#sign_up_page').css('display', 'block');
                $('#forgot_password_page').css('display', 'none');
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
            /* --------------------- news letter functionality start -------------------- */
            $('#desktop_newsletter').click(function () {

                var email = $("#footer-subscribe-email_desktop").val();
                var error = "";
                function validateEmail(email) {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(String(email).toLowerCase());
                }
                if (!validateEmail(email)) {
                    $("#footer-subscribe-email_desktop").css('border-color', 'red');
                    $("#footer-subscribe-email_desktop").css('border-width', '2px');
                    error = error + 'email';
                } else {
                    $("#footer-subscribe-email_desktop").css('border-color', '#C0BBBB');
                    $("#footer-subscribe-email_desktop").css('border-width', '1px');
                }
                if (error == "") {
                    $('.subscribe_preloader').css('display','block');
                    $.ajax({
                        type: 'POST',
                        url: 'php/newsletter.php',
                        dataType: "json",
                        data: {
                            'email': email
                        },
                        success: function (data) {
                            console.log(data);
                            if (data.status == 201) {
                                $('#desktop_newsletter_head').css('display', 'none');
                                $('#desktop_newsletter_success').css('display', 'block');
                                $('#desktop_newsletter_success').html(data.error);
                            } else if (data.status == 601) {
                                console.log(data.error);
                                $('#desktop_newsletter_head').css('display', 'none');
                                $('#desktop_newsletter_success').css('display', 'block');
                                $('#desktop_newsletter_success').html(data.error);
                            } else if (data.status == 301) {
                                $('#desktop_newsletter_head').css('display', 'none');
                                $('#desktop_newsletter_success').css('display', 'block');
                                $('#desktop_newsletter_success').html(data.error);
                            } else {
                                //console.log(data.error)
                            }
                            $('.subscribe_preloader').css('display','none');
                        }
                    });
                } else {

                }
            });
            /* --------------------- news letter functionality end -------------------- */

            /* ------------------------- mobile newsletter start ------------------------ */

            $('#mobile_newsletter').click(function () {

                var email = $("#footer-subscribe-email_mobile").val();
                var error = "";
                function validateEmail(email) {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(String(email).toLowerCase());
                }
                if (!validateEmail(email)) {
                    $("#footer-subscribe-email_mobile").css('border-color', 'red');
                    $("#footer-subscribe-email_mobile").css('border-width', '2px');
                    error = error + 'email';
                } else {
                    $("#footer-subscribe-email_mobile").css('border-color', '#C0BBBB');
                    $("#footer-subscribe-email_mobile").css('border-width', '1px');
                }
                if (error == "") {
                    $('.subscribe_preloader').css('display','block');
                    $.ajax({
                        type: 'POST',
                        url: 'php/newsletter.php',
                        dataType: "json",
                        data: {
                            'email': email
                        },
                        success: function (data) {
                            console.log(data);
                            if (data.status == 201) {
                                $('#mobile_newsletter_head').css('display', 'none');
                                $('#mobile_newsletter_success').css('display', 'block');
                                $('#mobile_newsletter_success').html(data.error);
                            } else if (data.status == 601) {
                                console.log(data.error);
                                $('#mobile_newsletter_head').css('display', 'none');
                                $('#mobile_newsletter_success').css('display', 'block');
                                $('#mobile_newsletter_success').html(data.error);
                            } else if (data.status == 301) {
                                $('#mobile_newsletter_head').css('display', 'none');
                                $('#mobile_newsletter_success').css('display', 'block');
                                $('#mobile_newsletter_success').html(data.error);
                            } else {
                                //console.log(data.error)
                            }
                            $('.subscribe_preloader').css('display','none');
                        }
                    });
                } else {

                }
            });
            /* ------------------------- mobile newsletter end ------------------------ */
            window.addEventListener("hashchange", function () {
    window.scrollTo(window.scrollX, window.scrollY - 120);
});
        });
    </script>
</body>

</html>