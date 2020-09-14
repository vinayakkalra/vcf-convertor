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

    img {
        display: inline !important;
        vertical-align: middle !important;
    }

    blockquote,
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
    }

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
                                            <a class="nav-link" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tools +</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Services +</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Downloads</a>
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
        <!-- Desktop fix navbar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col exceltovcf_background">
                    <!-- ------------------------ desktop heading start ------------------------ -->
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex justify-content-start mt-5 pt-5 exceltovcf_heading">
                                <h3><span>Convert</span> Excel <span>to</span> VCF</h3>
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
                                    convert Excel/CSV
                                    to VCF Online
                                </h3>
                            </div>
                        </div>
                        <div class="row pt-5 pb-5">
                            <div class="col-4">
                                <div class="wrap-col imagewithstar">
                                    <div class="d-flex justify-content-center">
                                        <img src="images/xlsxtovcf.png" alt="Online Excel/CSV to VCF Converter"
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
                                <p>This is a simple, 3-step tool where you can convert your contact details in excel /
                                    spreadsheet to vCard (3.0) format. Supported formats are: xls, xlsx and csv. This
                                    format is most suitable for importing contacts in mobile devices. Although it is a
                                    general contact format which can be opened in any computer. But you should note that
                                    MS Outlook will display only single contact even if your vcf file has multiple
                                    contacts. Video Tutorial on How we can Convert excel csv to vcf using this online
                                    tool: https://www.youtube.com/watch?v=sn7ROzt9YRA. If you wish to convert contacts
                                    in VCF to excel or CSV, use our VCF to Excel/CSV online Converter. Now let us see
                                    how to Convert Excel xlsx to Vcard vcf File online:</p>
                                <p>
                                <h4 style="font-weight: 500;">Follow these steps to convert Excel (xls/xslx/csv) to
                                    vCard vcf</h4>
                                <ol style="list-style: decimal;padding-left: 4rem;">
                                    <li>Upload Excel/csv file to convert. </li>
                                    <li>Select first row,column and last row,column as per data in you sheet. </li>
                                    <li>Select which column contains what data. Example, which column contains name?
                                        which contains numbers? and so on. And input your email address. Done. </li>
                                    <li>You will receive demo vcf file in your email address, containing your few
                                        contacts. If you are satisfied, you can make very small payment to receive full
                                        vcf file with all contacts. <u>Now updated to work with iOS Apple devices</u>
                                    </li>
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
                                        <form method="post" enctype="multipart/form-data" name="upload_excel"
                                            id="upload_excel" data-name="upload_excel">
                                            <label class="row">
                                                <div class="wrap-col select_file_text"> Step 1: Select file to convert
                                                </div>
                                            </label>
                                            <label class="row">
                                                <div class="wrap-col">Select file:
                                                    <input type="file" name="fileToUpload"
                                                        accept=".csv,application/vnd.ms-excel,.xlt,application/vnd.ms-excel,.xla,application/vnd.ms-excel,.xlsx,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.xltx,application/vnd.openxmlformats-officedocument.spreadsheetml.template,.xlsm,application/vnd.ms-excel.sheet.macroEnabled.12,.xltm,application/vnd.ms-excel.template.macroEnabled.12,.xlam,application/vnd.ms-excel.addin.macroEnabled.12,.xlsb,application/vnd.ms-excel.sheet.binary.macroEnabled.12"
                                                        id="fileToUpload">
                                                </div>
                                            </label>
                                            <label class="row">
                                                <div class="wrap-col" style="color: #808080;margin-top: 0.1rem;">
                                                    (Only .xls .xlsx and .csv formats allowed. Max file size: 2mb)
                                                </div>
                                            </label>
                                            <input class="sendButton btn blue-gradient" type="submit" name="submit"
                                                value="Submit" style="font-size: 1.6rem;padding: 1rem 6rem;">
                                        </form>
                                    </div>
                                    <div class="col-5 d-flex justify-content-center">
                                        <img src="images/addfile.svg" alt="add images" width="60%">
                                    </div>
                                </div>
                                <!-- ----------------------------- step 2 code ----------------------------- -->
                                <div class="row" id="step2">
                                    <div class="col">
                                        <form name="step2" id="step2form">
                                            <div class="form-row">

                                                <div class="wrap-col select_file_text">
                                                    Step 2 : Open your excel sheet, and tell us where the data starts
                                                    from:
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="upload_file" class="col-3">Uploaded file:</label>
                                                <div class="col-9">
                                                    <input type="text" readonly="readonly" value="" class="form-control"
                                                        id="read_file">
                                                </div>
                                            </div>
                                            <input type="hidden" name="file_name" id="file_name" value="">
                                            <div class="form-group row">
                                                <label for="sheet" class="col-3">Sheet Number:</label>
                                                <div class="col-9">
                                                    <input name="sheet" type="number" required="required" id="sheet"
                                                        max="9999" min="1" value="1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="first_column" class="col-3">First Column:</label>
                                                <div class="col-9">
                                                    <select name="first_column" id="first_column" required=""
                                                        class="form-control">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                        <option value="K">K</option>
                                                        <option value="L">L</option>
                                                        <option value="M">M</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="last_column" class="col-3">Last Column:</label>
                                                <div class="col-9">
                                                    <select name="last_column" id="last_column" required=""
                                                        class="form-control">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                        <option value="K">K</option>
                                                        <option value="L">L</option>
                                                        <option value="M">M</option>
                                                        <option value="N">N</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="first_row" class="col-3">First Row
                                                    Number:</label>
                                                <div class="col-9">
                                                    <input type="number" name="first_row" id="first_row" min="1"
                                                        max="9999" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="last_row" class="col-3">Last Row
                                                    Number:</label>
                                                <div class="col-9">
                                                    <input type="number" name="last_row" id="last_row" min="1"
                                                        max="9999" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col d-flex justify-content-center mt-3">
                                                    <input class="sendButton btn blue-gradient" type="button"
                                                        name="submit2_desktop" id="submit2_desktop" value="Submit"
                                                        style="font-size:1.6rem;padding: 1rem 6rem;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- ---------------------------- step 3 start ----------------------------- -->

                                <div class="row" id="step3">
                                    <div class="col">
                                        <form name="step3">
                                            <div class="form-row">

                                                <div class="wrap-col select_file_text pb-3">
                                                    Step 3 : Tell about data in each column
                                                </div>
                                            </div>
                                            <div id="step3_dyanamic_data">

                                            </div>
                                            <div class="d-flex justify-content-center mt-5">
                                                <input class="sendButton btn blue-gradient" type="button"
                                                    name="submit3_desktop" id="submit3_desktop" value="Submit"
                                                    style="font-size:1.6rem;padding: 1rem 6rem;">
                                            </div>
                                        </form>
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
                                                <h3 id="vcf_filename" style="
                                                font-size: 3rem;
                                                font-weight: 500;
                                            "></h3>
                                                <p>You can download only 5 VCF files in demo version if you want to
                                                    download all
                                                    VCF files you can choose our paid version . <a href="download.php"
                                                        style="color: #007bff;" id="basic">Click
                                                        here</a> to
                                                    download your demo VCF file.</p>
                                            </div>
                                        </div>
                                        <div class="row">
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
                                                                                3GB Storage
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                10 Emails
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                2 Sub-domains
                                                                            </li>
                                                                        </ul>
                                                                        <a  id="basic1"
                                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-10 rounded-full">
                                                                            Get Started
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
                                                                            50 INR
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                20GB Storage
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                50 Emails
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                20 Sub-domains
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#" id="pro"
                                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-10 rounded-full">
                                                                            Get Started
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
                                                                            300 INR
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimited Storage
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimited Emails
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimited Sub-domains
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#" id="enterprise"
                                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-10 rounded-full">
                                                                            Get Started
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

                                                <input id="footer-subscribe-email_mobile" class="form-control p-3 mt-2"
                                                    name="EMAIL" placeholder="Your email" type="email"
                                                    style="font-size:1.2rem">
                                            </div>

                                            <button type="submit" class="btn btn-success ml-2 mt-2"
                                                style="font-size: 1.2rem;">Subscribe</button>
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
                    <div class="md-form mb-5">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="Form_pass_signin" class="form-control validate"
                            placeholder="Your password">
                        <p class="font-small blue-text d-flex justify-content-end mt-3">Forgot <a href="#"
                                class="blue-text ml-1">
                                Password?</a></p>
                    </div>
                    <div class="text-center mb-5">
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
                        <div class="md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="Form_pass2_signup" class="form-control validate"
                                placeholder="Confirm password">

                        </div>
                        <div class="text-center mb-5">
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

            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->
    <!-- ----------------------- popup desktop end here ------------------------ -->

    <!-- mobile view -->
    <div class="d-lg-none position-relative">
        <!-- Enter Code for Mobile UI here -->
        <!-- overlay menu items start -->
        <div id="myNav" class="overlay" style="position:fixed;z-index:3">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                style="border: none !important;font-weight: 350 !important;">&times;</a>
            <div class="overlay-content">
                <div class="header_inner_logo"><a href="/" style="border: none;padding: 0;margin: 0;"><img
                            src="images/zamzar-logo.png"></a></div>
                <div class="overlay-content-inner myNavbar_mobile">
                    <a href="#" id="mobile_home_button">Home</a>
                    <a href="#" id="mobile_tools_button">Tools +</a>
                    <a href="#" id="mobile_services_button">Services +</a>
                    <a href="#" id="mobile_downloads_button">Downloads</a>
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
                                <h3><span>Convert</span> Excel <span>to</span> VCF</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col pt-5 pb-3">
                    <h3 style="font-size: 2.5rem;line-height: 2.8rem;color: #2487eb;font-weight:500">How to convert
                        Excel/CSV
                        to VCF Online
                    </h3>
                </div>
            </div>

            <!-- ------------------------------ how to upload excel to vcf ------------------------------ -->

            <div class="row pt-1 pb-2">
                <div class="col">
                    <div class="wrap-col imagewithstar">
                        <div class="d-flex justify-content-center">
                            <img src="images/xlsxtovcf.png" alt="Online Excel/CSV to VCF Converter"
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
                    <p>This is a simple, 3-step tool where you can convert your contact details in excel /
                        spreadsheet to vCard (3.0) format. Supported formats are: xls, xlsx and csv. This
                        format is most suitable for importing contacts in mobile devices. Although it is a
                        general contact format which can be opened in any computer. But you should note that
                        MS Outlook will display only single contact even if your vcf file has multiple
                        contacts. Video Tutorial on How we can Convert excel csv to vcf using this online
                        tool: https://www.youtube.com/watch?v=sn7ROzt9YRA. If you wish to convert contacts
                        in VCF to excel or CSV, use our VCF to Excel/CSV online Converter. Now let us see
                        how to Convert Excel xlsx to Vcard vcf File online:</p>
                    <p>
                    <h4 style="font-weight:500">Follow these steps to convert Excel (xls/xslx/csv) to vCard vcf</h4>
                    <ol style="padding-left:4rem;list-style:decimal;">
                        <li>Upload Excel/csv file to convert. </li>
                        <li>Select first row,column and last row,column as per data in you sheet. </li>
                        <li>Select which column contains what data. Example, which column contains name?
                            which contains numbers? and so on. And input your email address. Done. </li>
                        <li>You will receive demo vcf file in your email address, containing your few
                            contacts. If you are satisfied, you can make very small payment to receive full
                            vcf file with all contacts. <u>Now updated to work with iOS Apple devices</u>
                        </li>
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
                                        <form method="post" enctype="multipart/form-data" name="form2"
                                            id="upload_excel_mobile">
                                            <label class="row">
                                                <div class="wrap-col select_file_text"> Step 1: Select file to convert
                                                </div>
                                            </label>
                                            <label class="row">
                                                <div class="wrap-col">Select file:
                                                    <input type="file" name="fileToUpload_mobile"
                                                        id="fileToUpload_mobile"
                                                        accept=".csv,application/vnd.ms-excel,.xlt,application/vnd.ms-excel,.xla,application/vnd.ms-excel,.xlsx,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.xltx,application/vnd.openxmlformats-officedocument.spreadsheetml.template,.xlsm,application/vnd.ms-excel.sheet.macroEnabled.12,.xltm,application/vnd.ms-excel.template.macroEnabled.12,.xlam,application/vnd.ms-excel.addin.macroEnabled.12,.xlsb,application/vnd.ms-excel.sheet.binary.macroEnabled.12"
                                                        style="width: 100%;">
                                                </div>
                                            </label>
                                            <label class="row">
                                                <div class="wrap-col" style="color: #808080;margin-top: 0.1rem;">
                                                    (Only .xls .xlsx and .csv formats allowed. Max file size: 2mb)
                                                </div>
                                            </label>
                                            <div class="row d-flex justify-content-center">
                                                <input class="sendButton btn blue-gradient" type="submit" name="submit"
                                                    value="submit" style="font-size: 1.6rem;padding: 1rem 5rem;">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- -------------------------- step 2 for mobile -------------------------- -->
                            <div class="col collapseSignup" id="step2_mobile">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <form method="post" name="step2" id="step2form_mobile">
                                            <div class="form-row">

                                                <div class="wrap-col select_file_text">
                                                    Step 2 : Open your excel sheet, and tell us where the data starts
                                                    from:
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="upload_file_mobile" class="col">Uploaded file:</label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input type="text" readonly="readonly" value="" class="form-control"
                                                        id="read_file_mobile">
                                                </div>
                                            </div>
                                            <!-- <input type="hidden" name="filename" id="filename" value="DNdata.xlsx"> -->
                                            <div class="form-group row">
                                                <label for="sheet_mobile" class="col">Sheet Number:</label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input name="sheet_mobile" type="number" required="required"
                                                        id="sheet_mobile" max="9999" min="1" value="1"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="first_column_mobile" class="col">First Column:</label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <select name="first_column_mobile" id="first_column_mobile"
                                                        required="" class="form-control">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                        <option value="K">K</option>
                                                        <option value="L">L</option>
                                                        <option value="M">M</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="last_column_mobile" class="col">Last Column:</label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <select name="last_column_mobile" id="last_column_mobile"
                                                        required="" class="form-control">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                        <option value="K">K</option>
                                                        <option value="L">L</option>
                                                        <option value="M">M</option>
                                                        <option value="N">N</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="first_row_mobile" class="col">First Row
                                                    Number:</label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input type="number" name="first_row_mobile" id="first_row_mobile"
                                                        min="1" max="9999" required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="last_row_mobile" class="col">Last Row
                                                    Number:</label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input type="number" name="last_row_mobile" id="last_row_mobile"
                                                        min="1" max="9999" required="required" autocomplete="off"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col d-flex justify-content-center mt-3">
                                                    <input class="sendButton btn blue-gradient" type="button"
                                                        name="submit2_mobile" id="submit2_mobile" value="Submit"
                                                        style="font-size:1.6rem;padding: 1rem 5rem;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------------- step 3 mobile start ----------------------------- -->
                            <div class="col collapseSignup" id="step3_mobile">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <form name="step3_mobile">
                                            <div class="form-row">
                                                <div class="wrap-col select_file_text pb-3">
                                                    Step 3 : Tell about data in each column
                                                </div>
                                            </div>
                                            <div id="step3_dyanamic_data_mobile">

                                            </div>
                                            <div class="d-flex justify-content-center mt-5">
                                                <input class="sendButton btn blue-gradient" type="button"
                                                    name="submit3_mobile" id="submit3_mobile" value="Submit"
                                                    style="font-size:1.6rem;padding: 1rem 5rem;">
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
                                                <h3 id="vcf_filename" style="
                                                font-size: 3rem;
                                                font-weight: 500;
                                            "></h3>
                                                <p>You can download only 5 VCF files in demo version if you want to
                                                    download all
                                                    VCF files you can choose our paid version . <a href="#"
                                                        style="color: #007bff;">Click
                                                        here</a> to
                                                    download your demo VCF file.</p>
                                            </div>
                                        </div>
                                        <div class="row">
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
                                                                                3GB Storage
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                10 Emails
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                2 Sub-domains
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#"
                                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-10 rounded-full">
                                                                            Get Started
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="p-5 pb-10 text-center bg-gray-100 collapseSignup">
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
                                                                            50 INR
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                20GB Storage
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                50 Emails
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                20 Sub-domains
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#"
                                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-10 rounded-full">
                                                                            Get Started
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
                                                                            300 INR
                                                                        </h3>
                                                                        <ul class="my-10">
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimited Storage
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimited Emails
                                                                            </li>
                                                                            <li
                                                                                class="my-3 text-base leading-6 text-gray-500">
                                                                                Unlimited Sub-domains
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#"
                                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-10 rounded-full">
                                                                            Get Started
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
                        <div class="row mt-5">
                            <div class="col">
                                <h5 class="text-center Subscribe">Subscribe to our newsletter</h5>
                                <form class="form-inline d-flex justify-content-center" action="" method="post"
                                    target="_blank">
                                    <div class="form-group">

                                        <input id="footer-subscribe-email_desktop" class="form-control p-3 mt-3"
                                            name="EMAIL" placeholder="Your email" type="email"
                                            style="font-size:1.2rem;width: 20rem;">
                                    </div>

                                    <button type="submit" class="btn btn-success ml-2 mt-sm-3"
                                        style="font-size: 1.6rem;">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col footer_text d-flex justify-content-center">
                                <div class="social">
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
    <script src="js/jszip.js"></script>
    <script src="js/xlsx.js"></script>
    <script>
    $(document).ready(function() {
        var name_user = '';
        var total_data_come = 0;
        var uploaded_file_name = "";
        var uploaded_user_name = "";
        var user_id = 0;
        var product_name = "";
        var keys_change;
        var json_array;
        var data_key=[];
        var data_value=[];
        var row_start;
        var row_end;  
        var all_data=[];  
          

        // ------------------------ step 1 to 2 functionality ------------------------- //

        // ----------------------------- for desktop ----------------------------- //


        $('#upload_excel').on('submit', function(event) {
            event.preventDefault();
            var file_name = $('#fileToUpload').val();
            if (file_name == '') {
                alert("Please Select excel file");
                return false;
            } else {
                $.ajax({
                    url: "php/insert.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        // alert(data);
                        data = jQuery.parseJSON(data);
                        if (data.status == 201) {
                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                                'event': 'upload_excel'
                            });
                            $("#step2").css('display', 'block');
                            $("#step1").css('display', 'none');
                            $("#read_file").val(data.filename);
                            uploaded_file_name = data.filename;
                        } else if (data.status == 601) {
                            console.log(data.error);
                            //     alert("problem with query");
                        } else {}
                    }
                });
            }
        });
        //  for mobile
        $('#upload_excel_mobile').on('submit', function(event) {
            event.preventDefault();
            var file_name = $('#fileToUpload_mobile').val();
            if (file_name == '') {
                alert("Please Select excel file");
                return false;
            } else {
                $.ajax({
                    url: "php/insert_mobile.php",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        // alert(data);
                        data = jQuery.parseJSON(data);
                        if (data.status == 201) {
                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                                'event': 'upload_excel_mobile'
                            });
                            $("#step2_mobile").css('display', 'block');
                            $("#step1_mobile").css('display', 'none');
                            $("#read_file_mobile").val(data.filename);
                        } else if (data.status == 601) {
                            console.log(data.error);
                            //     alert("problem with query");
                        } else {}
                    }
                });
            }
        });

        // ---------------------- step 2 to 3 functionality ---------------------- //
        // var alpha = "";
        var ExcelToJSON = function() {
            this.parseExcel = function(file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var data = e.target.result;
                    var workbook = XLSX.read(data, {
                        type: 'binary'
                    });
                    var sheets;
                    var items;
                    var json_object_length = workbook.SheetNames.length;
                    sheet = workbook.SheetNames[0];
                    // console.log(sheet);                        
                //     console.log(json_object_length);//check the no. of sheet
                //     workbook.SheetNames.forEach(function (sheetName) {                  
                //     console.log(sheetName);
                // });
                    var sheetName = sheet;
                    var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[
                        sheetName]);
                    var json_object = JSON.stringify(XL_row_object);
                    
                    // console.log(JSON.parse(json_object));

                    //submit step 2 by dekstop
                    $("#submit2_desktop").click(function() {
                        var sheet = $("#sheet").val();
                        var first_column = $("#first_column").val();
                        var last_column = $("#last_column").val();
                        var first_row = $("#first_row").val();
                        var last_row = $("#last_row").val();
                        var show_data = "";
                        var error = "";
                        if (first_row == "") {
                            $("#first_row").css('border-color', 'red');
                            $("#first_row").css('border-width', '2px');
                            error = error + 'first_row';
                        } else {
                            $("#first_row").css('border-color', '#C0BBBB');
                            $("#first_row").css('border-width', '1px');
                        }
                        if (last_row == "") {
                            $("#last_row").css('border-color', 'red');
                            $("#last_row").css('border-width', '2px');
                            error = error + 'last_row';
                        } else {
                            $("#last_row").css('border-color', '#C0BBBB');
                            $("#last_row").css('border-width', '1px');
                        }
                        if (error == "") {
                            row_start=first_row;
                            row_end=last_row;
                            if (json_object_length >= sheet) {
                                sheet = workbook.SheetNames[sheet - 1];
                                var sheetName = sheet;
                                XL_row_object = XLSX.utils.sheet_to_row_object_array(
                                    workbook.Sheets[sheetName]);
                                json_object = JSON.stringify(XL_row_object);                                
                                // console.log(JSON.parse(json_object));
                                //   console.log(XL_row_object);                            
                                keys_change = XL_row_object;
                                $("#step3").css('display', 'block');
                                $("#step2").css('display', 'none');
                                for (var i = first_column.charCodeAt(0); i <= last_column
                                    .charCodeAt(0); i++
                                ) { //alphabetical loop selected according to user
                                    // var j=(i.charCodeAt(0)-97);
                                    total_data_come = (last_column.charCodeAt(0) - 64);

                                    var show_data = Object.keys(JSON.parse(json_object)[0])[
                                        i - 65]; //give alphabet indexing                                        
                                    if (show_data ==
                                        undefined) { //if row not found than show blank
                                        show_data = "";
                                    }
                                    $("#step3_dyanamic_data").html($("#step3_dyanamic_data")
                                        .html() +
                                        '<div class="form-group row"><label for="what_is_last_column" class="col-5"> Column ' +
                                        String.fromCharCode(i) + ' .      What is ' +
                                        show_data +
                                        ' : </label><div class="col-7"><select name="last_column" id="column' +
                                        (i - 64) +
                                        '" required=""class="form-control"><option value=""> -- select an option -- </option> <option value="first_name">First Name</option> <option value="last_name">Last Name</option> <option value="email">Email</option> <option value="mobile">Mobile No.</option> <option value="tel_office">Tel. Office</option> <option value="tel_home">Tel. Home</option> <option value="fax">Fax</option> <option value="city">City</option> <option value="nickname">Nickname</option> <option value="company">Company Name</option> <option value="address">Address</option> <option value="website">Website</option> <option value="birthday">Birthday</option></select></div>'
                                    );
                                    // console.log(String.fromCharCode(i));
                                }
                                
                            } else {
                                alert("Sheet not found in file");
                            }
                        }
                    });

                    //submit step 2 by mobile
                    $("#submit2_mobile").click(function() {
                        var sheet = $("#sheet_mobile").val();
                        var first_column = $("#first_column_mobile").val();
                        var last_column = $("#last_column_mobile").val();
                        var first_row = $("#first_row_mobile").val();
                        var last_row = $("#last_row_mobile").val();
                        var show_data = "";
                        var error = "";
                        if (first_row == "") {
                            $("#first_row_mobile").css('border-color', 'red');
                            $("#first_row_mobile").css('border-width', '2px');
                            error = error + 'first_row';
                        } else {
                            $("#first_row_mobile").css('border-color', '#C0BBBB');
                            $("#first_row_mobile").css('border-width', '1px');
                        }
                        if (last_row == "") {
                            $("#last_row_mobile").css('border-color', 'red');
                            $("#last_row_mobile").css('border-width', '2px');
                            error = error + 'last_row';
                        } else {
                            $("#last_row_mobile").css('border-color', '#C0BBBB');
                            $("#last_row_mobile").css('border-width', '1px');
                        }
                        if (error == "") {
                            if (json_object_length >= sheet) {
                                sheet = workbook.SheetNames[sheet - 1];
                                var sheetName = sheet;
                                XL_row_object = XLSX.utils.sheet_to_row_object_array(
                                    workbook.Sheets[sheetName]);
                                json_object = JSON.stringify(XL_row_object);
                                console.log(JSON.parse(json_object));
                                $("#step3_mobile").css('display', 'block');
                                $("#step2_mobile").css('display', 'none');
                                for (var i = first_column.charCodeAt(0); i <= last_column
                                    .charCodeAt(0); i++) {
                                    // var j=(i.charCodeAt(0)-97);
                                    total_data_come = (last_column.charCodeAt(0) - 64);
                                    var show_data = Object.keys(JSON.parse(json_object)[0])[
                                        i - 65];
                                    if (show_data == undefined) {
                                        show_data = "";
                                    }
                                    $("#step3_dyanamic_data_mobile").html($(
                                            "#step3_dyanamic_data_mobile").html() +
                                        '<div class="form-group row"><label for="what_is_last_column" class="col"> Column ' +
                                        String.fromCharCode(i) + ' .      What is ' +
                                        show_data +
                                        ' : </label></div><div class="form-group row"><div class="col"><select name="last_column" id="column_mobile' +
                                        (i - 64) +
                                        '" required=""class="form-control"><option value=""> -- select an option -- </option> <option value="first_name">First Name</option> <option value="last_name">Last Name</option> <option value="email">Email</option> <option value="mobile">Mobile No.</option> <option value="tel_office">Tel. Office</option> <option value="tel_home">Tel. Home</option> <option value="fax">Fax</option> <option value="city">City</option> <option value="nickname">Nickname</option> <option value="company">Company Name</option> <option value="address">Address</option> <option value="website">Website</option> <option value="birthday">Birthday</option></select></div>'
                                    );
                                    console.log(String.fromCharCode(i));
                                }
                            } else {
                                alert("Sheet not found in file");
                            }
                        }
                    });
                    jQuery('#xlx_json').val(json_object);
                    // })
                };

                reader.onerror = function(ex) {
                    console.log(ex);

                };
                reader.readAsBinaryString(file);
                // console.log(file) ;                  
            };
        };

        function handleFileSelect(evt) {

            var files = evt.target.files; // FileList object
            var xl2json = new ExcelToJSON();
            xl2json.parseExcel(files[0]);
            // console.log(files[0])              
        }
        if (document.getElementById("fileToUpload").value == "") {
            document.getElementById('fileToUpload_mobile').addEventListener('change', handleFileSelect, false);
        }
        document.getElementById('fileToUpload').addEventListener('change', handleFileSelect, false);

        // console.log(document.getElementById("fileToUpload"));

        // ---------------------- step 3 to 4 functionality ---------------------- //

        $('#submit3_desktop').click(function() {
            // console.log(keys_change);
            var column_array = [];
            var column_array2 = [];
            var error = "";
            var take;
            var take2 = [];            
            json_array = keys_change;
            for (var i = 1; i <= total_data_come; i++) {
                column_array[i] = $("#column" + i).val();
                json_array = JSON.parse(JSON.stringify(json_array).split('"' + Object.keys(keys_change[
                    0])[i - 1] + '":').join('"' + column_array[i] + '":'));
                take = json_array[0];
                take2[i - 1] = column_array[i];
                data_key[i]=take2[i - 1];
                data_value[i]=take[data_key[i]];                              
            } 

/* ----------------------------get  data value to make VCF---------------------------- */

            for (var i = 1; i <= total_data_come; i++) {
                // console.log(data_key[i]+":"+data_value[i]+" and "+row_start+" and "+row_end);
            }
            for(var j=row_start;j<=row_end;j++){
                // console.log(json_array[j-1]);
                all_data[(row_end)-(j)]=json_array[j-1];                
            }
            // console.log(all_data); 

/* --------------------- data send for to make vcf files start-------------------- */

            $.ajax({
                    contentType: "application/json; charset=utf-8",
                    type: 'POST',
                    url: 'index2.php',                   
                    data: JSON.stringify(all_data),
                    success: function(data) {                    
                        
                        // window.location.href = 'index.php';                        
                        
                    }
                });
 /* --------------------- data send for to make vcf files end-------------------- */

/* -------------------------- get data value to make VCF end -------------------------- */

            for (var i = 1; i <= total_data_come; i++) {
                if (column_array[i] == "") {
                    $("#column" + i).css('border-color', 'red');
                    $("#column" + i).css('border-width', '2px');
                    error = error + 'column_array[' + i + ']';
                } else {
                    $("#column" + i).css('border-color', '#C0BBBB');
                    $("#column" + i).css('border-width', '1px');
                }
            }
            if (error == "") {
                $('.collapseSignup').removeClass('col-8');
                $('.collapseSignup').addClass('col-10');
                $.ajax({
                    type: 'POST',
                    url: 'php/auth.php',
                    dataType: "json",
                    data: {

                    },
                    success: function(data) {
                        console.log(data);
                        if (data.status == 201) {
                            $('#pop_up_desktop').modal('hide');
                        } else if (data.status == 601) {
                            $('#pop_up_desktop').modal('show');
                        } else {
                            $('#pop_up_desktop').modal('show');
                        }
                    }
                });
                $('#step4').css('display', 'block');
                $('#step3').css('display', 'none');
                var file_start_char = uploaded_file_name.substring(0, 2);
                $('#vcf_filename').html(file_start_char + '****.vcf is ready to download');
            } else {
                $('.collapseSignup').removeClass('col-10');
                $('.collapseSignup').addClass('col-8');
                $('#pop_up_desktop').modal('hide');
                $('#step3').css('display', 'block');
                $('#step4').css('display', 'none');
            }
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

        });       
        // ---------------------- step 3 to 4 functionality for mobile---------------------- //

        $('#submit3_mobile').click(function() {            
            var column_array = [];
            var error = "";            
            for (var i = 1; i <= total_data_come; i++) {
                column_array[i] = $("#column_mobile" + i).val();
            }
            for (var i = 1; i <= total_data_come; i++) {
                if (column_array[i] == "") {
                    $("#column_mobile" + i).css('border-color', 'red');
                    $("#column_mobile" + i).css('border-width', '2px');
                    error = error + 'column_array[' + i + ']';
                } else {
                    $("#column_mobile" + i).css('border-color', '#C0BBBB');
                    $("#column_mobile" + i).css('border-width', '1px');
                }
            }
            if (error == "") {
                $.ajax({
                    type: 'POST',
                    url: 'php/auth.php',
                    dataType: "json",
                    data: {},
                    success: function(data) {
                        console.log(data);
                        if (data.status == 201) {
                            $('#pop_up_desktop').modal('hide');
                        } else if (data.status == 601) {
                            $('#pop_up_desktop').modal('show');
                        } else {
                            $('#pop_up_desktop').modal('show');
                        }
                    }
                });
                $('#step4_mobile').css('display', 'block');
                $('#step3_mobile').css('display', 'none');
                var file_start_char = uploaded_file_name.substring(0, 2);
                $('#vcf_filename').html(file_start_char + '****.vcf is ready to download');
            } else {
                $('#pop_up_desktop').modal('hide');
                $('#step3_mobile').css('display', 'block');
                $('#step4_mobile').css('display', 'none');
            }
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

        });

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
                alert('Password not match !');
                error = error + 'password not matched';
            }
            if (error == "") {
                $.ajax({
                    type: 'POST',
                    url: 'php/signup_form.php',
                    dataType: "json",
                    data: {
                        'mobile': mobile,
                        'password': password,
                        'email': email
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.status == 201) {
                            user_id = data.id;
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
                            $('#pop_up_desktop').modal('hide');
                            var file_first_char = (uploaded_user_name.substring(0, 1))
                                .toUpperCase();
                            $('.show_user_name').attr('data-letters', file_first_char);
                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                                'event': 'signup-form',
                                'mobile': mobile,
                                'password': password,
                                'email': email
                            });
                        } else if (data.status == 601) {
                            console.log(data.error);
                            //     alert("problem with query");
                        } else if (data.status == 301) {
                            $('#alert_id_signup').css('display', 'block');
                            $('#alert_id_signup').html(data.error);
                            alert(data.error);
                        } else if (data.status == 302) {
                            $('#alert_id_signup').css('display', 'block');
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
                $.ajax({
                    type: 'POST',
                    url: 'php/login_form.php',
                    dataType: "json",
                    data: {
                        'password': password,
                        'email': email
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data.status == 201) {
                            user_id = data.id;
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
                            // window.location = "exceltovcf"; 
                            $('#pop_up_desktop').modal('hide');
                            name_user = data.email;
                            var file_first_char = (name_user.substring(0, 1)).toUpperCase();
                            $('.show_user_name').attr('data-letters', file_first_char);
                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                                'event': 'signin-form',
                                'password': password,
                                'email': email
                            });
                        } else if (data.status == 601) {
                            console.log(data.error);
                            //     alert("problem with query");
                        } else if (data.status == 301) {
                            $('#alert_id_signin').css('display', 'block');
                            $('#alert_id_signin').html(data.error);
                            alert(data.error);
                        } else if (data.status == 302) {
                            $('#alert_id_signin').css('display', 'block');
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
                        console.log(data);
                        if (data.status == 201) {
                            window.location.replace(data.url);
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