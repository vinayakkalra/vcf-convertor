<?php 
session_start();
if (!empty($GLOBALS['error_msg'])){
print '<p class="error">'.$GLOBALS['error_msg']."</p>\n";}?>
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
    <meta name="description" content="CSVTOVCF is a simple, 2-step tool where you can convert your contact details in excel / spreadsheet to vCard (3.0) format">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="CSVTOVCF,VCFTOCSV, vcf converter,online converter">

    <!-- Enter Page title -->
    <meta property="og:title" content="CSVTOVCF | #1 VCF Converter" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="http://csvtovcfconversion.com/" />

    <!-- Enter page description -->
    <meta property="og:description" content="You can create Excel to VCF and VCF to excel in few steps.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <meta property="og:image" itemprop="image" content="http://csvtovcfconversion.com/images/android-chrome-192x192.png" />
    <meta property="og:image:secure_url" itemprop="image" content="http://csvtovcfconversion.com/images/android-chrome-192x192.png" />
    <meta property="og:image:width" content="192">
    <meta property="og:image:height" content="192">
    <meta property="og:type" content="website" />

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
        .form-group label {
            font-weight: 500 !important;
        }


        /* #step1,
        #step2,
        #step3 {
            display: none;

        }

        #step4 {
            display: block;
        }  */

        #payment_button_monthly {
            border-radius: 20px;
            padding: .65rem 3rem;

            color: #fff;
        }

        #payment_button_daily {
            border-radius: 20px;
            padding: .65rem 3rem;
            background-color: #4d5cff;
            color: #fff;
        }

        #order-success {
            display: none;
        }

        img {
        display: inline;
        vertical-align: middle;
        }

        /* blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 1rem;
        } */

        .text-base {
            font-size: 1.6rem;
        }

        .leading-6 {
            line-height: 2.79rem;
        }

        .text-indigo-600 {
            --text-opacity: 1;
            color: #2487eb;

        }

        .text-indigo-500 {
            --text-opacity: 1;
            color: #2487eb;

        }

        .bg-indigo-500 {
            --bg-opacity: 1;
            background-color: #2487eb;

        }

        .product_subheading {
            font-size: 2rem;
        }

        .product_heading {
            font-size: 3.8rem;
            font-weight: 900;
        }

        .hover\:bg-indigo-700:hover {
            --bg-opacity: 1;
            background-color: #16a085;
            text-decoration: none;
        }

        .hr_tag_style {
            width: 70%;
        }

        .alert-danger {
            color: #721c24;
            background-color: #fff !important;
            border-color: #fff !important;
        }

        #alert_id_file_not_select,
        #alert_id_Otp {
            display: none;
        }

        .preloader,
        .preloader_mobile {
            display: none;
        }

        .paid_person {
            display: none;
        }
    </style>
</head>
<script>
     function set_form_fields(elem) {
                var format = elem.options[elem.selectedIndex].value;
                var header = elem.form._header;
                var delimiter = elem.form._delimiter;
                var encoding = elem.form._encoding;
                var newlines = elem.form._newlines;
                var dn = elem.form._dn;

                switch (format) {
                    case 'csv':                                      
                        dn.disabled = true;
                        break;
                }

                var rootdnrow = document.getElementById('ldaprootdn');
                rootdnrow.style.display = dn.disabled ? 'none' : (document.all && !window.opera ? 'block' : 'table-row');
            }
</script>
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
                                            <a class="nav-link" style="cursor:pointer;">Tools<i class='fa fa-angle-down'></i></a>
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
        <!-- Desktop fix navbar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col exceltovcf_background">
                    <!-- ------------------------ desktop heading start ------------------------ -->
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex justify-content-start mt-5 pt-5 exceltovcf_heading">
                                <h3><span>Convert</span> VCF <span>to</span> Excel</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------------------- desktop how to convert start ------------------------ -->
            <div class="row" style="background-color: #fff;">
                <div class="col">
                    <div class="container">
                        <div class="row pt-5">
                            <div class="col">
                                <h3 style="font-size: 3rem;line-height: 3.3rem;color: #2487eb;font-weight: 500;">How to
                                    use VCF to excel/csv tool
                                </h3>
                            </div>
                        </div>
                        <div class="row pt-5 pb-5">
                            <div class="col-4">
                                <div class="wrap-col imagewithstar">
                                    <div class="d-flex justify-content-center">
                                        <img src="images/vcftoexcel.png" alt="Online Excel/CSV to VCF Converter"
                                            title="Excel/CSV to VCF/vCard Converter" class="galleryImageBorder">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="images/fullstar.png" width="35px"><img src="images/fullstar.png"
                                                width="35px"><img src="images/fullstar.png" width="35px"><img
                                                src="images/fullstar.png" width="35px"><img src="images/halfstar.png"
                                                width="35px">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            Average rating: 4.24 / 5 <br>Total ratings: 8332
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 exceltovcf_text">
                                <p>
                                    This is the most powerful yet extremely simple tool to convert your contacts in VCF
                                    to CSV file or convert vCard to excel file. vCard version 2.1 and 3.0 are supported.
                                    More number of contacts will, apparently, take more time to convert. To convert
                                    contacts in excel to vCard format, use our , use our VCF to Excel/CSV online
                                    Converter. Now let us see
                                    how to Convert Excel xlsx to Vcard vcf File online:</p>
                                <p>
                                <h4 style="font-weight: 500;">Follow these steps to convert vCard/vcf to excel/csv</h4>
                                <ol style="list-style: decimal;padding-left: 4rem;">
                                    <li>There is a form below. Select VCF or vCard file you wish to convert.</li>
                                    <li>Select output format: Excel (xlsx) or CSV (Excel format is recommended for all
                                        languages</li>
                                    <li>Click on submit </li>
                                </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col">
                    <div class="container">
                        <div class="row d-flex justify-content-center mt-5 mb-5">
                            <div class="col-8 collapseSignup">
                                <!-- ----------------------------- step 1 code ----------------------------- -->
                                <div class="row" id="step1">
                                    <div class="col-7">                                      
                                        <form method="post" enctype="multipart/form-data" id="upload_excel" action="page.php">
                                        <div class="alert alert-danger" role="alert" id="alert_id_file_not_select"></div> 
                                        <div class="form-group">
                                            <label for="vCard-File">vCard-File:</label>
                                            <input type="file" size="30" name="_vcards" id="fileToUpload" class="form-control">
                                            <small id="emailHelp" class="form-text text-muted">max 2 mb only.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="Format">Format:</label>
                                            <select name="_format" onChange="set_form_fields(this)" class="form-control">                                                   
                                                <option value="gmail">CSV (TAB)</option>
                                                <!-- <option value="csv">CSV</option> -->
                                            </select>                                            
                                        </div>
                                                <div id="ldaprootdn" style="display:none" class="form-group">
                                                    <div class="cell form-control">
                                                        <input type="text" name="_dn" id="dnID" style="width:30em;"
                                                            disabled>&nbsp;
                                                        <label for="accessCode"><br>Use as Root DN LDAP identifier, to
                                                            add it at the end of the "dn:" LDIF
                                                            line <br>(for example: dc=Users, dc=nodomain)</label>
                                                        <span class="hint" style="padding-left:1em">(max. 255
                                                            chars)</span>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center"> 
                                                <div class="preloader">
                                                <div class="row">
                                                    <div class="loadingio-spinner-rolling-n1r2sb8my0m">
                                                        <div class="ldio-538wm7ir56h">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                                <div class="form-group d-flex justify-content-center">                                                
                                                <div class="sendButton btn btn-primary" style="font-size: 1.6rem;padding: 1rem 6rem;" id="SubmitBtn">Submit</div>                                           
                                                </div>
                                        </form>
                                    </div>
                                    <div class="col-5 d-flex justify-content-center">
                                        <img src="images/addfile.svg" alt="add images" width="60%">
                                    </div>
                                </div>                      
                                <!-- ---------------------------- step 4 start ----------------------------- -->
                                <div class="row" id="step4">
                                    <div class="col pb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h1 class="display-3 text-center mt-3 mb-3">Congratulation !</h1>
                                                <div class="d-flex justify-content-center">
                                                    <hr class="hr_tag_style">
                                                </div>
                                                <h3 class="vcf_filename" style="font-size: 3rem;font-weight: 500;"></h3>
                                                <p class="basic_download_info">You can download only 5 VCF files in demo version if you want to
                                                    download all
                                                    VCF files you can choose our paid version . <a href="#"
                                                        style="color: #007bff;" id="basic" class="download">Click
                                                        here</a> to
                                                    download your demo VCF file.</p>
                                                <div class="text-center mt-5 paid_person">
                                                    <a href="#" type="button"
                                                        class="btn sendButton bg-primary btn-block btn-rounded z-depth-1a VCF-file download col-5"
                                                        style="color:#fff;">Click Here to download</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row our_subscription">
                                            <div class="col">
                                                <div class="pt-4 pb-4 bg-white">
                                                    <div
                                                        class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8 flex flex-col">

                                                        <div class="text-center">

                                                            <h3 class="text-3xl sm:text-5xl leading-normal font-extrabold tracking-tight text-gray-900"
                                                                style="font-size: 4rem;">
                                                                Our <span class="text-indigo-600">Pricing</span>
                                                            </h3>

                                                        </div>

                                                        <div class="mt-20">
                                                            <ul
                                                                class="sm:grid sm:grid-cols-2 md:grid-cols-3 sm:col-gap-10 sm:row-gap-10">

                                                                <li class="p-5 pb-10 text-center">
                                                                    <div class="flex flex-col items-center">
                                                                        <div class="flex-shrink-0">
                                                                            <div class="flex items-center justify-center w-12 rounded-md text-indigo-500"
                                                                                style="width: 4rem;">
                                                                                <svg class="h-10 w-10" fill="none"
                                                                                    style="height: 100%;width: 100%;"
                                                                                    viewBox="0 0 24 24"
                                                                                    stroke="currentColor">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <p
                                                                            class="mt-2 mb-4 text-base leading-6 text-gray-900 font-semibold product_subheading">
                                                                            Basic
                                                                        </p>
                                                                        <h3
                                                                            class="mt-2 mb-4 text-5xl leading-6 text-gray-900 font-bold product_heading">
                                                                            Free
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li class="my-3 text-base leading-6 text-gray-500">5 Contacts</li>
                                                                            <li class="my-3 text-base leading-6 text-gray-500">One Time Use</li>
                                                                            
                                                                        </ul>
                                                                        <a href="#" id="basic1"
                                                                            class="btn btn-primary text-white font-bold py-2 px-10 rounded-full download">
                                                                            Download
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="p-5 pb-10 text-center bg-gray-100 collapseSignup"
                                                                    style="max-width:100%">
                                                                    <div class="flex flex-col items-center">
                                                                        <div class="flex-shrink-0">
                                                                            <div class="flex items-center justify-center  w-12 rounded-md text-indigo-500"
                                                                                style="width: 4rem;">
                                                                                <svg class="h-10 w-10" fill="none"
                                                                                    style="height: 100%;width: 100%;"
                                                                                    viewBox="0 0 24 24"
                                                                                    stroke="currentColor">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <p
                                                                            class="mt-2 mb-4 text-base leading-6 text-gray-900 font-semibold product_subheading">
                                                                            pro
                                                                        </p>
                                                                        <h3
                                                                            class="mt-2 mb-4 text-5xl leading-6 text-gray-900 font-bold product_heading">
                                                                            <div class="d-flex justify-content-center">
                                                                                <div class="set_price_pro">0</div><span
                                                                                    class="ml-2">INR</span>
                                                                            </div>
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li class="my-3 text-base leading-6 text-gray-500">Unlimtied Contacts</li>
                                                                            <li class="my-3 text-base leading-6 text-gray-500">One Time Use</li>  
                                                                        </ul>
                                                                        <a href="#" id="pro"
                                                                            class="btn btn-primary text-white font-bold py-2 px-10 rounded-full pro">
                                                                            Buy Now
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="p-5 pb-10 text-center">
                                                                    <div class="flex flex-col items-center">
                                                                        <div class="flex-shrink-0">
                                                                            <div class="flex items-center justify-center w-12 rounded-md text-indigo-500"
                                                                                style="width: 4rem;">
                                                                                <svg class="h-10 w-10" fill="none"
                                                                                    style="height: 100%;width: 100%;"
                                                                                    viewBox="0 0 24 24"
                                                                                    stroke="currentColor">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <p
                                                                            class="mt-2 mb-4 text-base leading-6 text-gray-900 font-semibold product_subheading">
                                                                            Enterprise
                                                                        </p>
                                                                        <h3
                                                                            class="mt-2 mb-4 text-5xl leading-6 text-gray-900 font-bold product_heading">
                                                                            <div class="d-flex justify-content-center">
                                                                                <div class="set_price_enterprise">0</div>
                                                                                <span class="ml-2">INR</span>
                                                                            </div>
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li class="my-3 text-base leading-6 text-gray-500">Unlimtied Contacts</li>
                                                                            <li class="my-3 text-base leading-6 text-gray-500">Unlimtied Use Till Subscrption</li>  
                                                                        </ul>
                                                                        <a href="#" id="enterprise"
                                                                            class="btn btn-primary text-white font-bold py-2 px-10 rounded-full enterprise">
                                                                            Buy Now
                                                                        </a>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        aria-hidden="true" data-backdrop="static" data-keyboard="false" style="overflow: hidden;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- --------------------------- sign_in start here --------------------------- -->

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
                    <div class="text-center mb-5 mt-3">
                        <button type="button"
                            class="btn sendButton bg-primary text-white btn-block btn-rounded z-depth-1a"
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
            <!-- --------------------------- sign_in start end --------------------------- -->
            <!-- ------------------------------ Sign_up_start ----------------------------- -->

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
                            <input type="number" id="Form_phone_signup" class="form-control validate"
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
                            <button type="button"
                                class="btn sendButton bg-primary text-white  btn-block btn-rounded z-depth-1a"
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
            <!-- ------------------------------ Sign_up_start end----------------------------- -->
            <!-- ------------------------------- verify otp start------------------------------- -->
            <div class="modal-content form-elegant" id="sign_up_Otp">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Email
                            Verification</strong></h3>
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
                            <button type="button"
                                class="btn sendButton bg-primary text-white  btn-block btn-rounded z-depth-1a"
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
                            <input type="number" id="Form_phone_forgot" class="form-control validate"
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
                            <button type="button"
                                class="btn sendButton bg-primary text-white  btn-block btn-rounded z-depth-1a"
                                id="pop_up_forgot">Change Password</button>
                        </div>
                    </div>
                </form>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-5 pb-5">
                    <p class="font-small grey-text d-flex justify-content-end">Go Back to &nbsp;<a
                            id="signin_link_forgot" class="blue-text ml-1" style="cursor: pointer;">
                            Log In </a> &nbsp;page</p>
                </div>
            </div>
            <!-- ------------------------------ Forgot password end ------------------------------ -->
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->
    <!-- ----------------------- popup desktop end here ------------------------ -->

    <!-- --------------------- model for payment option start --------------------- -->
    <!-- The Modal -->
    <div class="modal fade myModal_payment" id="myModal_payment">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="pro_payment">
                <!-- Modal Header -->
                <div class="modal-header payment_modal_header">
                    <h2 class="modal-title" style="font-weight:700">Product Order Form</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body payment_modal_body">
                    <!-- payment form -->
                    <!-- payment form for both 50 and 100 start-->
                    <div class="container">
                        <div id="checkout-form">
                            <div class="d-flex row payment_info_row">
                                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-2">
                                    <form>
                                        <div class="form-group row pb-4">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name<span
                                                    class="required_star">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row pb-4">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email<span
                                                    class="required_star">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control" id="staticEmail"
                                                    name="payment_email" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row pb-4">
                                            <label for="inputPhone" class="col-sm-2 col-form-label">Phone<span
                                                    class="required_star">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputPhone"
                                                    name="payment_mobile" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row pb-4">
                                            <label for="inputAddress" class="col-sm-2 col-form-label">Address<span
                                                    class="required_star">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="Address">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 Yorder">
                                    <div class="d-flex justify-content-center">
                                        <table class="Order_table" style=" width: 90% !important;">
                                            <tr>
                                                <th colspan="2" style="text-align: center;">Your order</th>
                                            </tr>
                                            <tr>
                                                <td>CSV/EXCEL</td>
                                                <td>&#x20B9;<span class="price">00</span></td>
                                            </tr>
                                            <tr>
                                                <td>Subtotal</td>
                                                <td>&#x20B9;<span class="price">00</span></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>Free shipping</td>
                                            </tr>
                                        </table><br>
                                    </div>
                                    <!-- payment button for 50 INR -->
                                    <div class="text-center mt-5">
                                        <button type="button"
                                            class="btn sendButton bg-primary btn-block btn-rounded z-depth-1a payment_pro"
                                            id="payment_pro" style="color:#fff;">Place Order</button>
                                    </div>
                                    <!-- payment button for 50 INR -->
                                    <!-- payment button for 100 INR -->
                                    <div class="text-center mt-5">
                                        <button type="button"
                                            class="btn sendButton bg-primary btn-block btn-rounded z-depth-1a payment_enterprise"
                                            id="payment_enterprise" style="color:#fff;">Buy</button>
                                    </div>
                                    <!-- payment button for 100 INR -->
                                </div><!-- Yorder -->
                            </div>
                        </div>
                        <div id="order-success">
                            <div class="d-flex row payment_info_row">
                                <div>
                                    <p>Payment Successfully</p>
                                    <div class="text-center mt-5">
                                        <a href="#" type="button"
                                            class="btn sendButton bg-primary btn-block btn-rounded z-depth-1a VCF-file download"
                                            id="VCF-file" style="color:#fff;">Click Here to download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- payment form for both 50 and 100 end-->

                    <!-- payment form end -->
                </div>
                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
    <!-- --------------------- model for payment option end --------------------- -->


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
                                <h3><span>Convert</span> VCF <span>to</span> Excel</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col pt-5 pb-3">
                    <h3 style="font-size: 2.5rem;line-height: 2.8rem;color: #2487eb;font-weight:500">How to use VCF to
                        excel/csv tool</h3>
                </div>
            </div>

            <!-- ------------------------------ how to upload excel to vcf ------------------------------ -->

            <div class="row pt-1 pb-2">
                <div class="col">
                    <div class="wrap-col imagewithstar">
                        <div class="d-flex justify-content-center">
                            <img src="images/vcftoexcel.png" alt="Online Excel/CSV to VCF Converter"
                                title="Excel/CSV to VCF/vCard Converter" class="galleryImageBorder" style="width: 70%;">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="images/fullstar.png" width="35px"><img src="images/fullstar.png"
                                    width="35px"><img src="images/fullstar.png" width="35px"><img
                                    src="images/fullstar.png" width="35px"><img src="images/halfstar.png" width="35px">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div>
                                Average rating: 4.24 / 5 <br>Total ratings: 8332
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col exceltovcf_text">
                    <p>This is the most powerful yet extremely simple tool to convert your contacts in VCF to CSV file
                        or convert vCard to excel file. vCard version 2.1 and 3.0 are supported. More number of contacts
                        will, apparently, take more time to convert. To convert contacts in excel to vCard format, use
                        our , use our VCF to Excel/CSV online Converter. Now let us see how to Convert Excel xlsx to
                        Vcard vcf File online:</p>
                    <p>
                    <h4 style="font-weight:500">Follow these steps to convert vCard/vcf to excel/csv</h4>
                    <ol style="padding-left:4rem;list-style:decimal;">
                        <li>There is a form below. Select VCF or vCard file you wish to convert.</li>
                        <li>Select output format: Excel (xlsx) or CSV (Excel format is recommended for all languages
                        </li>
                        <li>Click on submit </li>
                    </ol>
                    </p>
                </div>
            </div>

            <!-- ---------------------------- select file to convert----------------------------- -->

            <div class="row pb-5">
                <div class="col">
                    <div class="container">
                        <div class="row d-flex justify-content-center mt-2 mb-5">

                            <!-- -------------------------- step 1 for mobile -------------------------- -->

                            <div class="col collapseSignup" id="step1_mobile">
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <img src="images/addfile.svg" alt="add images" width="50%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <form method="post" enctype="multipart/form-data" id="upload_excel_mobile" action="page.php">
                                        <div class="alert alert-danger" role="alert" id="alert_id_file_not_select_mobile"></div> 
                                        <div class="form-group">
                                            <label for="vCard-File">vCard-File:</label>
                                            <input type="file" size="30" name="_vcards" id="fileToUpload_mobile" class="form-control">
                                            <small id="emailHelp" class="form-text text-muted">max 2 mb only.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="Format">Format:</label>
                                            <select name="_format" onChange="set_form_fields(this)" class="form-control">                                                   
                                                <option value="gmail">CSV (TAB)</option>
                                                <!-- <option value="csv">CSV</option> -->
                                            </select>                                            
                                        </div>
                                                <div id="ldaprootdn" style="display:none" class="form-group">
                                                    <div class="cell form-control">
                                                        <input type="text" name="_dn" id="dnID" style="width:30em;"
                                                            disabled>&nbsp;
                                                        <label for="accessCode"><br>Use as Root DN LDAP identifier, to
                                                            add it at the end of the "dn:" LDIF
                                                            line <br>(for example: dc=Users, dc=nodomain)</label>
                                                        <span class="hint" style="padding-left:1em">(max. 255
                                                            chars)</span>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center"> 
                                                <div class="preloader">
                                                <div class="row">
                                                    <div class="loadingio-spinner-rolling-n1r2sb8my0m">
                                                        <div class="ldio-538wm7ir56h">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                                <div class="form-group d-flex justify-content-center">                                                
                                                <div class="sendButton btn btn-primary" style="font-size: 1.6rem;padding: 1rem 6rem;" id="SubmitBtn_mobile">Submit</div>                                           
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- --------------------------- step 4 mobile start -------------------------- -->

                            <div class="col collapseSignup" id="step4_mobile">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <!-- <div class="row" id="step4_mobile">
                                    <div class="col pb-3"> -->
                                        <div class="row">
                                            <div class="col">
                                                <h1 class="display-4 text-center mt-3 mb-3">Congratulation !</h1>
                                                <div class="d-flex justify-content-center">
                                                    <hr class="hr_tag_style">
                                                </div>
                                                <h3 class="vcf_filename" style="font-size: 3rem;font-weight: 500;"></h3>
                                                <p class="basic_download_info">You can download only 5 VCF files in demo
                                                    version if you want to
                                                    download all
                                                    VCF files you can choose our paid version . <a href="#"
                                                        style="color: #007bff;" class="download">Click
                                                        here</a> to
                                                    download your demo VCF file.</p>
                                                <div class="text-center mt-5 paid_person">
                                                    <a href="#" type="button"
                                                        class="btn sendButton bg-primary btn-block btn-rounded z-depth-1a VCF-file download"
                                                        style="color:#fff;">Click Here to download</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row our_subscription">
                                            <div class="col">
                                                <div class="pt-4 pb-4 bg-white">
                                                    <div
                                                        class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8 flex flex-col">

                                                        <div class="text-center">

                                                            <h3 class="text-3xl sm:text-5xl leading-normal font-extrabold tracking-tight text-gray-900"
                                                                style="font-size: 4rem;">
                                                                Our <span class="text-indigo-600">Pricing</span>
                                                            </h3>

                                                        </div>

                                                        <div class="mt-20">
                                                            <ul
                                                                class="sm:grid sm:grid-cols-2 md:grid-cols-3 sm:col-gap-10 sm:row-gap-10">

                                                                <li class="p-5 pb-10 text-center">
                                                                    <div class="flex flex-col items-center">
                                                                        <div class="flex-shrink-0">
                                                                            <div class="flex items-center justify-center w-12 rounded-md text-indigo-500"
                                                                                style="width: 4rem;">
                                                                                <svg class="h-10 w-10" fill="none"
                                                                                    style="height: 100%;width: 100%;"
                                                                                    viewBox="0 0 24 24"
                                                                                    stroke="currentColor">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <p
                                                                            class="mt-2 mb-4 text-base leading-6 text-gray-900 font-semibold product_subheading">
                                                                            Basic
                                                                        </p>
                                                                        <h3
                                                                            class="mt-2 mb-4 text-5xl leading-6 text-gray-900 font-bold product_heading">
                                                                            Free
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                5 Contacts</li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                One Time Use</li>
                                                                        </ul>
                                                                        <a href="#"
                                                                            class="btn btn-primary text-white font-bold py-2 px-10 rounded-full download">
                                                                            Download
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="p-5 pb-10 text-center bg-gray-100 collapseSignup col-12">
                                                                    <div class="flex flex-col items-center">
                                                                        <div class="flex-shrink-0">
                                                                            <div class="flex items-center justify-center  w-12 rounded-md text-indigo-500"
                                                                                style="width: 4rem;">
                                                                                <svg class="h-10 w-10" fill="none"
                                                                                    style="height: 100%;width: 100%;"
                                                                                    viewBox="0 0 24 24"
                                                                                    stroke="currentColor">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <p
                                                                            class="mt-2 mb-4 text-base leading-6 text-gray-900 font-semibold product_subheading">
                                                                            pro
                                                                        </p>
                                                                        <h3
                                                                            class="mt-2 mb-4 text-5xl leading-6 text-gray-900 font-bold product_heading">
                                                                            <div class="d-flex justify-content-center">
                                                                                <div class="set_price_pro">0</div><span
                                                                                    class="ml-2">INR</span>
                                                                            </div>
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimtied Contacts</li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                One Time Use</li>
                                                                        </ul>
                                                                        <a href="#"
                                                                            class="btn btn-primary  text-white font-bold py-2 px-10 rounded-full pro">
                                                                            Buy Now
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="p-5 pb-10 text-center">
                                                                    <div class="flex flex-col items-center">
                                                                        <div class="flex-shrink-0">
                                                                            <div class="flex items-center justify-center w-12 rounded-md text-indigo-500"
                                                                                style="width: 4rem;">
                                                                                <svg class="h-10 w-10" fill="none"
                                                                                    style="height: 100%;width: 100%;"
                                                                                    viewBox="0 0 24 24"
                                                                                    stroke="currentColor">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <p
                                                                            class="mt-2 mb-4 text-base leading-6 text-gray-900 font-semibold product_subheading">
                                                                            Enterprise
                                                                        </p>
                                                                        <h3
                                                                            class="mt-2 mb-4 text-5xl leading-6 text-gray-900 font-bold product_heading">
                                                                            <div class="d-flex justify-content-center">
                                                                                <div class="set_price_enterprise">0
                                                                                </div>
                                                                                <span class="ml-2">INR</span>
                                                                            </div>
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimtied Contacts</li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimtied Use Till Subscrption</li>
                                                                        </ul>
                                                                        <a href="#"
                                                                            class="btn btn-primary  text-white font-bold py-2 px-10 rounded-full enterprise">
                                                                            Buy Now
                                                                        </a>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div>
                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- we can use this perticuler for read xlsx file only start-->
    <!-- <script src="js/jszip.js"></script>
    <script src="js/xlsx.js"></script> -->
    <!-- we can use this perticuler for read xlsx file only end-->
    <!-- <script src="js/xlsx.full.min.js"></script> -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <!-- <script src="js/FileSaver.js"></script> -->
    <script>
        $(document).ready(function () {
            var name_user = '';
            var total_data_come = 0;
            var uploaded_file_name = "";
            var uploaded_user_name = "";
            var user_id = 0;
            var product_name = "";
            var keys_change;
            var json_array;
            var data_key = [];
            var data_value = [];
            var row_start;
            var row_end;
            var all_data = [];
            var total_data_length = 0;
            var result = [];
            var result1 = "";
            var num_start = 0;
            var num_end = 0;
            var num_end1 = 0;
            var num_end2 = 0;
            var user_email = "";
            var user_mobile = "";
            var GetSubscriberId_Basic = "";
            var selected_file_desktop="";
            var selected_file_mobile="";

            // ------------------------ step 1 to 2 functionality ------------------------- //

            // ----------------------------- for desktop ----------------------------- //
            
    $("#SubmitBtn").click(function(){  
        var file_name = $('#fileToUpload').val();
                if (file_name == '') {
                    $('#alert_id_file_not_select').css('display', 'block');
                    $('#alert_id_file_not_select').html("* Please Select vcf file");
                    return false;
                } else {
                    selected_file_desktop=file_name;
                    $('.preloader').css('display', 'block');
                    $.ajax({
                        type: 'POST',
                        url: 'php/auth.php',
                        async: false,
                        dataType: "json",
                        async: false,
                        data: {},
                        success: function (data) {
                            user_email = data.email;
                            user_mobile = data.mobile;   
                            $('.preloader').css('display', 'none');                 
                            if (data.status == 201) {
                                $('#pop_up_desktop').modal('hide');                              
                                $('.our_subscription').css('display', 'none');
                                $('.basic_download_info').css('display', 'none');
                                $('.paid_person').css('display', 'block');  
                                $('.collapseSignup').removeClass('col-8');
                                $('.collapseSignup').addClass('col-10');
                                $('#step1').css('display','none');
                                $('#step4').css('display','block');                
                            } else if (data.status == 301) {                                
                                $('#pop_up_desktop').modal('hide');                               
                                $('#step1').css('display','none');
                                $('#step4').css('display','block');
                                $('.collapseSignup').removeClass('col-8');
                                $('.collapseSignup').addClass('col-10');
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            } else if (data.status == 601) {
                                $('#pop_up_desktop').modal('show');                                
                                $('#step1').css('display','none');
                                $('#step4').css('display','block');
                                $('.collapseSignup').removeClass('col-8');
                                $('.collapseSignup').addClass('col-10');
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            } else if (data.status == 701) {
                                $('#pop_up_desktop').modal('show');                                
                                $('.collapseSignup').removeClass('col-8');
                                $('.collapseSignup').addClass('col-10');
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            } else {
                                $('#pop_up_desktop').modal('show');
                                num_end = 1;
                                $('.collapseSignup').removeClass('col-8');
                                $('.collapseSignup').addClass('col-10');
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            }
                            
                        }
            }); 
        }  
    });
            //  for mobile
            $("#SubmitBtn_mobile").click(function(){  
        var file_name = $('#fileToUpload_mobile').val();
                if (file_name == '') {
                    $('#alert_id_file_not_select_mobile').css('display', 'block');
                    $('#alert_id_file_not_select_mobile').html("* Please Select vcf file");
                    return false;
                } else {
                    selected_file_mobile=file_name;
                    $('.preloader').css('display', 'block');
                    $.ajax({
                        type: 'POST',
                        url: 'php/auth.php',
                        async: false,
                        dataType: "json",
                        async: false,
                        data: {},
                        success: function (data) {
                            $('.preloader').css('display', 'none');
                            user_email = data.email;
                            user_mobile = data.mobile;                    
                            if (data.status == 201) {                               
                                $('#pop_up_desktop').modal('hide');                              
                                $('.our_subscription').css('display', 'none');
                                $('.basic_download_info').css('display', 'none');
                                $('.paid_person').css('display', 'block');                                 
                                $('#step1_mobile').css('display','none');
                                $('#step4_mobile').css('display','block');                
                            } else if (data.status == 301) {                                
                                $('#pop_up_desktop').modal('hide');                                
                                $('#step1_mobile').css('display','none');
                                $('#step4_mobile').css('display','block');                                
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            } else if (data.status == 601) {
                                $('#pop_up_desktop').modal('show');                                
                                $('#step1_mobile').css('display','none');
                                $('#step4_mobile').css('display','block');                               
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            } else if (data.status == 701) {
                                $('#pop_up_desktop').modal('show');                                
                                $('#step1_mobile').css('display','none');
                                $('#step4_mobile').css('display','block');                                
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            } else {
                                $('#pop_up_desktop').modal('show');
                                num_end = 1;
                                $('#step1_mobile').css('display','none');
                                $('#step4_mobile').css('display','block');                                
                                $('.our_subscription').css('display', 'block');
                                $('.basic_download_info').css('display', 'block');
                                $('.paid_person').css('display', 'none');
                            }
                          
                        }
            }); 
        }  
    });           
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
                if(mobile.length!=10){
                    $("#Form_phone_signup").css('border-color', 'red');
                    $("#Form_phone_signup").css('border-width', '2px');
                    error = error + 'mobile';
                }else {
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
                        async: false,
                        data: {
                            'mobile': mobile,
                            'password': password,
                            'email': email
                        },
                        success: function (data) {
                            // console.log(data);
                            if (data.status == 201) {
                                user_id = data.id;
                                user_email = data.email;
                                user_mobile = data.mobile;
                                // console.log(data.email);
                                // console.log(data.mobile);
                                $('#sign_up_page').css('display', 'none');
                                $('.preloader').css('display', 'none');
                                $('#sign_up_Otp').css('display', 'block');

                            } else if (data.status == 601) {
                                // console.log(data.error);
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
                if(mobile.length!=10){
                    $("#Form_phone_forgot").css('border-color', 'red');
                    $("#Form_phone_forgot").css('border-width', '2px');
                    error = error + 'mobile';
                }else {
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
                            'mobile': mobile,
                            'password': password,
                            'email': email
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

            // ---------------------- step signin form  to download file functionality ----------//
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
                    $.ajax({
                        type: 'POST',
                        url: 'php/login_form.php',
                        dataType: "json",
                        async: false,
                        data: {
                            'email': email,
                            'password': password
                        },
                        success: function (data) {
                            // console.log(data);
                            if (data.status == 201) {
                                user_id = data.id;
                                user_email = data.email;
                                user_mobile = data.mobile;
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
                                $.ajax({
                                    type: 'POST',
                                    url: 'php/auth.php',
                                    dataType: "json",
                                    async: false,
                                    data: {},
                                    success: function (data) {
                                        // console.log(data);
                                        if (data.status == 201) {
                                            $('#pop_up_desktop').modal('hide');                                         
                                            $('.our_subscription').css('display', 'none');
                                            $('.basic_download_info').css('display', 'none');
                                            $('.paid_person').css('display', 'block');                                           
                                        } else if (data.status == 301) {
                                            user_email = data.email;
                                            user_mobile = data.mobile;
                                            $('#pop_up_desktop').modal('hide');
                                            if (num_end > 5) {
                                                num_end = data.row_end;
                                            }
                                            // console.log(num_end);
                                            $('.our_subscription').css('display', 'block');
                                            $('.basic_download_info').css('display', 'block');
                                            $('.paid_person').css('display', 'none');
                                            
                                        } else if (data.status == 601) {
                                            $('#pop_up_desktop').modal('show');
                                            if (num_end > 5) {
                                                num_end = data.row_end;
                                            }
                                            // console.log(num_end);
                                            $('.our_subscription').css('display', 'block');
                                            $('.basic_download_info').css('display', 'block');
                                            $('.paid_person').css('display', 'none');
                                        } else if (data.status == 701) {
                                            $('#pop_up_desktop').modal('show');
                                            if (num_end > 5) {
                                                num_end = data.row_end;
                                            }
                                            $('.our_subscription').css('display', 'block');
                                            $('.basic_download_info').css('display', 'block');
                                            $('.paid_person').css('display', 'none');
                                        } else {
                                            $('#pop_up_desktop').modal('show');
                                            num_end = 1;
                                            // console.log(num_end);
                                            $('.our_subscription').css('display', 'block');
                                            $('.basic_download_info').css('display', 'block');
                                            $('.paid_person').css('display', 'none');
                                        }
                                       
                                    }

                                });
                                // window.location = "exceltovcf"; 
                                $('#pop_up_desktop').modal('hide');
                                $('.preloader').css('display', 'none');
                                name_user = data.email;
                                var file_first_char = (name_user.substring(0, 1)).toUpperCase();
                                $('.show_user_name').attr('data-letters', file_first_char);
                            } else if (data.status == 601) {
                                // console.log(data.error);
                                user_id = data.id;
                                user_email = data.email;
                                user_mobile = data.mobile;
                                // console.log(data.email);
                                // console.log(data.mobile);
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
                            'otp': otp_row
                        },
                        success: function (data) {
                            // console.log(data);
                            if (data.status == 201) {
                                $('.preloader').css('display', 'none');
                                $('#pop_up_desktop').modal('hide');
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
                                var file_first_char = (uploaded_user_name.substring(0, 1))
                                    .toUpperCase();
                                $('.show_user_name').attr('data-letters', file_first_char);

                            } else if (data.status == 601) {
                                // console.log(data.error);
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
            // ---------------- header pop up login and signup button ---------------- //
            function model_sign_up_sign_in() {
            $('.pop_up_login_header').click(function() {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'block');
                $('#sign_up_page').css('display', 'none');
                $('#forgot_password_page').css('display', 'none');
                $('#sign_up_Otp').css('display', 'none');
            });
            $('.pop_up_signup_header').click(function() {
                $('#pop_up_desktop').modal('show');
                $('#sign_in_page').css('display', 'none');
                $('#sign_up_page').css('display', 'block');
                $('#forgot_password_page').css('display', 'none');
                $('#sign_up_Otp').css('display', 'none');
            });
            $('#signin_link').click(function() {
                $('#sign_in_page').css('display', 'block');
                $('#sign_up_page').css('display', 'none');
                $('#forgot_password_page').css('display', 'none');
                $('#sign_up_Otp').css('display', 'none');
                // alert("My name is sign in");
            });
            $('#signup_link').click(function() {

                $('#sign_up_page').css('display', 'block');
                $('#sign_in_page').css('display', 'none');
                $('#forgot_password_page').css('display', 'none');
                $('#sign_up_Otp').css('display', 'none');
                // alert("My name is sign up");
            });
            $('#forgot_password_link').click(function() {

                $('#forgot_password_page').css('display', 'block');
                $('#sign_in_page').css('display', 'none');
                $('#sign_up_page').css('display', 'none');
                $('#sign_up_Otp').css('display', 'none');
                // alert("My name is sign up");
            });
            $('#signin_link_forgot').click(function() {
                $('#forgot_password_page').css('display', 'none');
                $('#sign_in_page').css('display', 'block');
                $('#sign_up_page').css('display', 'none');
                $('#sign_up_Otp').css('display', 'none');
            });
        }
        model_sign_up_sign_in();
        // ---------------- header pop up login and signup button mobile---------------- //
        $('.pop_up_login_mobile').click(function() {
            $('#pop_up_desktop').modal('show');
            $('#sign_in_page').css('display', 'block');
            $('#sign_up_page').css('display', 'none');
            $('#forgot_password_page').css('display', 'none');
            $('#sign_up_Otp').css('display', 'none');
        });
        $('.pop_up_signup_mobile').click(function() {
            $('#pop_up_desktop').modal('show');
            $('#sign_in_page').css('display', 'none');
            $('#sign_up_page').css('display', 'block');
            $('#forgot_password_page').css('display', 'none');
            $('#sign_up_Otp').css('display', 'none');
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

            // our price start
            $.ajax({
                type: 'POST',
                url: 'php/price.php',
                async: false,
                dataType: "json",
                data: {},
                success: function (data) {
                    // console.log(data);              
                    if (data.status == 201) {
                        result1 = data;
                        $(".set_price_pro").html(data.price_pro);
                        $(".set_price_enterprise").html(data.price_enterprise);
                    } else {
                        // alert('no price found');
                    }
                }
            });
            //our price end

            /* ---------------------- payment option open and close function start--------------------- */

            $('.pro').click(function () {
                $('.myModal_payment').modal('show');
                $('.payment_pro').css('display', 'block');
                $('.payment_enterprise').css('display', 'none');
                $("#checkout-form").css('display','block');
                $("#order-success").css('display','none');
                $('input[name="payment_email"]').val(user_email);
                $('input[name="payment_mobile"]').val(user_mobile);
                $(".price").html(result1.price_pro);

            });
            $('.enterprise').click(function () {
                $('.myModal_payment').modal('show');
                $('.payment_enterprise').css('display', 'block');
                $('.payment_pro').css('display', 'none');
                $("#checkout-form").css('display','block');
                $("#order-success").css('display','none');
                $('input[name="payment_email"]').val(user_email);
                $('input[name="payment_mobile"]').val(user_mobile);
                $(".price").html(result1.price_enterprise);
            });
            /* ---------------------- payment option open and close function end--------------------- */

            var error = "";

            // razorpay payment 
            $("#payment_pro").on("click", function () {
                if ($("#inputName").val() == "") {
                    $("#inputName").css('border-color', 'red');
                    $("#inputName").css('border-width', '2px');
                    error = error + 'name';
                } else {
                    $("#inputName").css('border-color', '#C0BBBB');
                    $("#inputName").css('border-width', '1px');
                }
                if ($("#inputAddress").val() == "") {
                    $("#inputAddress").css('border-color', 'red');
                    $("#inputAddress").css('border-width', '2px');
                    error = error + 'address';
                } else {
                    $("#inputAddress").css('border-color', '#C0BBBB');
                    $("#inputAddress").css('border-width', '1px');
                }
                if (error == "") {
                    // ajax call
                    $.ajax({
                        type: 'POST',
                        url: 'php/checkout-form.php',
                        dataType: "json",
                        data: {
                            type: "50",
                            name: $("#inputName").val(),
                            email: user_email,
                            phone: user_mobile,
                            address: $("#inputAddress").val(),
                            eventname: "VCF50",
                            amount: result1.price_pro,
                        },
                        success: function (data) {
                            if (data.status == 201) {
                                window.dataLayer = window.dataLayer || [];
                                window.dataLayer.push({
                                    'event': 'payment initiated',
                                    'name': $("#inputName").val(),
                                    'phone': user_mobile,
                                    'email': user_email

                                });
                                // alert("checked out");
                                var order_id = data.id;
                                var options = {
                                    "key": "rzp_test_dePlubEU9z2Fn8",
                                    "amount": parseInt(result1.price_pro *
                                        100), // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.    
                                    "currency": "INR",
                                    "name": "VCF 50",
                                    "description": "Convert your csv/excel file into VCF",
                                    "image": "images/zamzar-logo.png",
                                    //"order_id": "order_9A33XWu170gUtm",//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order). Refer the Checkout form table given below    
                                    "handler": function (response) {
                                        // alert(response.razorpay_payment_id);
                                        var razorpay_payment_id = response.razorpay_payment_id;
                                        // console.log(response);
                                        $.ajax({
                                    type: 'POST',
                                    url: 'php/get-cap.php',
                                    dataType: "json",
                                    data: {
                                        razorpay_idpay: razorpay_payment_id,
                                        amounts: result1.price_pro
                                    },
                                    success: function (response1) {
                                        // console.log(response1);
                                        if (response1.status == 201) {
                                            // alert("GetSubscriberId_Basic");
                                            // alert(response1.total);
                                            // alert(response1.currency_code);
                                            // alert(response1.capture_status);
                                            capture_status = response1.capture_status ;
                                            // alert(capture_status);
                                        $.ajax({
                                                type: 'POST',
                                                url: 'php/checkout-update-form.php',
                                                dataType: "json",
                                                data: {
                                                    id: data.id,
                                                    // productName: "Finstreet",
                                                    razorpay_payment_id: razorpay_payment_id,
                                                    // amount: result.value,
                                                    email: user_email,
                                                    capture_status: capture_status
                                                },
                                                success: function (data) {
                                                    if (data.status == 'ok') {
                                                        //window.location = "thankyou.html";
                                                        // alert("Your payment has been successful");
                                                        num_end = num_end1;
                                                        
                                                        $("#checkout-form").css('display','none');
                                                        $("#order-success").css('display','block');
                                                        // $("#order-id").html('#' + data.id);
                                                        // window.scrollTo(0,0);
                                                        window.dataLayer =
                                                            window.dataLayer ||
                                                            [];
                                                        window.dataLayer.push({
                                                            'event': 'payment success',
                                                            'name': $("#inputName").val(),
                                                            'phone': user_mobile,
                                                            'email': user_email

                                                        });

                                                    } else {
                                                        console.log("error");
                                                    }
                                                }
                                            });
                                        }
                                    }
                                    });
                                        
                                    },
                                    "prefill": {
                                        "name": $("#inputName").val(),
                                        "email": user_email,
                                        "contact": user_mobile
                                    },
                                    "notes": {
                                        // "country": $("#country").val(),
                                        // "address": $("#Address").val(),
                                        // "state": $("#state").val(),
                                        // "postcode": $("#postcode").val(),
                                        // "productName": "Crypto-Nite 2020",

                                    },
                                    "theme": {
                                        "color": "#2487eb"
                                    }
                                };

                                var rzp1 = new Razorpay(options);
                                rzp1.open();


                            } else if (data.status == 601) {
                                console.log(data.error);
                                // alert("problem with query");

                                // }else if (data.status == 701){
                                // $(".order-success").css('display', 'block');
                                // $(".checkout-form").css('display', 'none');
                                // $('#exampleModalCenter').modal('show')

                            } else {

                            }
                        }
                    });
                } else {
                    // return true;
                }
            });
            $.ajax({
                type: 'POST',
                url: 'php/get-sub.php',
                async: false,
                dataType: "json",
                data: {},
                success: function (response) {
                    GetSubscriberId_Basic = response.id;
                }

            });


            $("#payment_pro").on('show.bs.modal', function (e) {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'buy ticket'
                });
            });

            // razorpay Subscrption 
            $("#payment_enterprise").on("click", function () {
                if ($("#inputName").val() == "") {
                    $("#inputName").css('border-color', 'red');
                    $("#inputName").css('border-width', '2px');
                    error = error + 'name';
                } else {
                    $("#inputName").css('border-color', '#C0BBBB');
                    $("#inputName").css('border-width', '1px');
                }
                if ($("#inputAddress").val() == "") {
                    $("#inputAddress").css('border-color', 'red');
                    $("#inputAddress").css('border-width', '2px');
                    error = error + 'address';
                } else {
                    $("#inputAddress").css('border-color', '#C0BBBB');
                    $("#inputAddress").css('border-width', '1px');
                }
                if (error == "") {
                    // ajax call
                    $.ajax({
                        type: 'POST',
                        url: 'php/checkout-form.php',
                        dataType: "json",
                        async: false,
                        data: {
                            type: "100",
                            name: $("#inputName").val(),
                            email: user_email,
                            phone: user_mobile,
                            address: $("#inputAddress").val(),
                            eventname: "VCF100",
                            amount: result1.price_enterprise,
                        },
                        success: function (data) {
                            if (data.status == 201) {
                                window.dataLayer = window.dataLayer || [];
                                window.dataLayer.push({
                                    'event': 'payment initiated',
                                    'name': $("#inputName").val(),
                                    'phone': user_mobile,
                                    'email': user_email

                                });
                                // alert("checked out");
                                var options1 = {
                                    "key": "rzp_test_dePlubEU9z2Fn8",
                                    "subscription_id": GetSubscriberId_Basic,
                                    "name": "VCF 100",
                                    "description": "100RS Subscription for VCF ",
                                    "image": "images/zamzar-logo.png",
                                    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
                                    "handler": function (response) {
                                        var razorpay_payment_id = response.razorpay_payment_id;
                                        // console.log(response.razorpay_payment_id);
                                        $.ajax({
                                    type: 'POST',
                                    url: 'php/get-cap.php',
                                    dataType: "json",
                                    data: {
                                        razorpay_idpay: razorpay_payment_id,
                                        amounts: result1.price_enterprise
                                    },
                                    success: function (response1) {
                                        // console.log(response1);
                                        if (response1.status == 201) {
                                            // alert("GetSubscriberId_Basic");
                                            // alert(response1.total);
                                            // alert(response1.currency_code);
                                            // alert(response1.capture_status);
                                            capture_status = response1.capture_status ;
                                            // alert(capture_status);
                                            $.ajax({
                                            type: 'POST',
                                            url: 'php/checkout-update1-form.php',
                                            dataType: "json",
                                            data: {
                                                id: data.id,
                                                // productName: "Finstreet",
                                                razorpay_payment_id: razorpay_payment_id,
                                                amount: result1.price_enterprise,
                                                email: user_email,
                                                capture_status: capture_status
                                            },
                                            success: function (data) {
                                                if (data.status == 'ok') {
                                                    //window.location = "thankyou.html";
                                                    // alert("Your payment has been successful");
                                                    num_end = num_end1;                                                   
                                                    $("#checkout-form").css('display','none');
                                                    $("#order-success").css('display','block');
                                                    // $("#order-id").html('#' + data.id);
                                                    // window.scrollTo(0,0);
                                                    window.dataLayer = window.dataLayer || [];
                                                    window.dataLayer.push({
                                                        'event': 'payment success',
                                                        'name': $("#inputName").val(),
                                                        'phone': user_mobile,
                                                        'email': user_email

                                                    });

                                                } else {
                                                    console.log("error");
                                                }
                                            }
                                        });
                                            }
                                        }
                                    });
                                    },
                                    "prefill": {
                                        "name": $("#inputName").val(),
                                        "email": user_email,
                                        "contact": user_mobile
                                    },
                                    "notes": {
                                        // "country": $("#country").val(),
                                        // "address": $("#Address").val(),
                                        // "state": $("#state").val(),
                                        // "postcode": $("#postcode").val(),
                                        // "productName": "Crypto-Nite 2020",

                                    },
                                    "theme": {
                                        "color": "#2487eb"
                                    }
                                };

                                var rzp2 = new Razorpay(options1);
                                rzp2.open();


                            } else if (data.status == 601) {
                                console.log(data.error);
                                // alert("problem with query");

                                // }else if (data.status == 701){
                                // $(".order-success").css('display', 'block');
                                // $(".checkout-form").css('display', 'none');
                                // $('#exampleModalCenter').modal('show')

                            } else {

                            }
                        }
                    });
                } else {
                    // return true;
                }
            });

            $("#payment_enterprise").on('show.bs.modal', function (e) {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'buy Subscription'
                });
            });
            /* ---------------------- download functionality start ---------------------- */

            $(".download").click(function () {     
                if(selected_file_desktop!=""){
                    $("#upload_excel").submit(); 
                }else if(selected_file_mobile!=""){
                    $("#upload_excel_mobile").submit(); 
                }        
                // Submit the form
            });
            /* ---------------------- download functionality end ---------------------- */
            /* --------------------- news letter functionality start -------------------- */
$('#desktop_newsletter').click(function(){

var email = $("#footer-subscribe-email_desktop").val();
var error="";
function validateEmail(email) {
    var re =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
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
                    success: function(data) {
                        console.log(data);
                        if (data.status == 201) {                            
                            $('#desktop_newsletter_head').css('display','none');
                            $('#desktop_newsletter_success').css('display','block');
                            $('#desktop_newsletter_success').html(data.error);
                        } else if (data.status == 601) {
                            console.log(data.error);
                            $('#desktop_newsletter_head').css('display','none');
                            $('#desktop_newsletter_success').css('display','block');
                            $('#desktop_newsletter_success').html(data.error);
                        } else if (data.status == 301) {
                            $('#desktop_newsletter_head').css('display','none');
                            $('#desktop_newsletter_success').css('display','block');
                            $('#desktop_newsletter_success').html(data.error);
                        } else {
                            //console.log(data.error)
                        }
                        $('.subscribe_preloader').css('display','none');
                    }
                }); 
            }else{

            }
        });
/* --------------------- news letter functionality end -------------------- */

/* ------------------------- mobile newsletter start ------------------------ */

$('#mobile_newsletter').click(function(){

var email = $("#footer-subscribe-email_mobile").val();
var error="";
function validateEmail(email) {
    var re =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
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
                    success: function(data) {
                        console.log(data);
                        if (data.status == 201) {                            
                            $('#mobile_newsletter_head').css('display','none');
                            $('#mobile_newsletter_success').css('display','block');
                            $('#mobile_newsletter_success').html(data.error);
                        } else if (data.status == 601) {
                            console.log(data.error);
                            $('#mobile_newsletter_head').css('display','none');
                            $('#mobile_newsletter_success').css('display','block');
                            $('#mobile_newsletter_success').html(data.error);
                        } else if (data.status == 301) {
                            $('#mobile_newsletter_head').css('display','none');
                            $('#mobile_newsletter_success').css('display','block');
                            $('#mobile_newsletter_success').html(data.error);
                        } else {
                            //console.log(data.error)
                        }
                        $('.subscribe_preloader').css('display','block');
                    }
                }); 
            }else{

            }
        });
/* ------------------------- mobile newsletter end ------------------------ */
        });
    </script>
</body>

</html>