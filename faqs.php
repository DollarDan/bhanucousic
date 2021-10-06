<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo desktop landscape rd-navbar-static-linked" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .gm-control-active>img:nth-child(1) {
            display: block;
        }

        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1) {
            display: none;
        }

        .gm-control-active:hover>img:nth-child(2),
        .gm-control-active:active>img:nth-child(3) {
            display: block;
        }
    </style>
    <style>
        .gm-ui-hover-effect {
            opacity: 0.6;
        }

        .gm-ui-hover-effect:hover {
            opacity: 1;
        }
    </style>
    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px;
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, 0.04);
            border: 1px solid #d2e3fc;
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, 0.12);
            border: 1px solid #d2e3fc;
            outline: 0;
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd;
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043;
        }
        .menu_head {
            cursor: pointer;
            position: relative;
            margin:0;
            font-weight:bold;
            color:#fff;
            font-weight:normal;
            text-transform:uppercase;
            font-size:10px;
            font-weight:bold;
            overflow:hidden;
            font-family: "Open Sans",sans-serif;
            display:block;
            /*width: 490px;*/
            outline:none;
            padding:8px 0 0 30px;
            border-bottom:none !important;
        }
        .menu_head :hover {
            cursor: pointer;
            position: relative;
            margin:0;
            padding:0;
            color:#7b7047;
            overflow:hidden;
            display:block;
        }
        .menu_body {
            display: none;
            overflow: hidden;
            padding: 25px;
            color:#282e01;
            background-color:#8e9b82;
            background-image:  url(images/faq-arrow-bg.gif), url(images/faq-bg-in.jpg);
            background-position: right top, 0 0;
            background-repeat: no-repeat, repeat-x;
        
        }
        p.menu_head:hover
        {
            color: #fff !important; 
            box-shadow:solid 1px #000;
        }

        p.menuOn a.Th
        {
            color: #423111;
        }
        
        p.menu_head {
            border-bottom: 1px solid #dddddd;
            color: #6fb1c0;
            font-size: 15px;
            font-weight: normal;
            line-height: 18px;
            margin: 4px 0 0;
            padding: 12px 25px 13px 19px;
            text-align: left;
            text-transform: none;
            background:#00475b url(images/inactive-bg.png) no-repeat scroll right ;
        
        }
        .menu_body p {
            padding:0;
            margin: 0 0 8px;
        }
        .menuOn {
            background:url(images/active-bg.png) no-repeat right #eacb23 !important;
            color:#fff !important;
            
        }
        .menu_head a
        {
            color: #6fb1c0 ;
            font-weight: 700;
            text-transform: uppercase;
        }

        .menu_head a:hover
        {
            color: #FFF0C3 ;
            font-weight: 700;
        }
            
        .menu_list

        {
            /*width:928px;*/
            clear:both;
            margin-bottom:25px;
            background:url(images/faq-top-img.png) no-repeat;
            padding:217px 0 0;
            margin-top:-80px;
        }
        .capchaBottom
        {
            float:left;
            
            margin:0 15px 0 0;
        }

        .bottmBtn
        {
            margin-bottom:55px;
        }
        .faqContentLeft
        {
            float:left;
            width:10px;
            margin-right:12px
        }
        .faqContentRight
        {
            float:left;
            width: 800px;
        }
        .menu_head {
            cursor: pointer;
            position: relative;
            margin:0;
            font-weight:bold;
            color:#fff;
            font-weight:normal;
            text-transform:uppercase;
            font-size:10px;
            font-weight:bold;
            overflow:hidden;
            font-family: "Open Sans",sans-serif;
            display:block;
            /*width: 490px;*/
            outline:none;
            padding:8px 0 0 30px;
            border-bottom:none !important;
        }
        .menu_head :hover {
            cursor: pointer;
            position: relative;
            margin:0;
            padding:0;
            color:#7b7047;
            overflow:hidden;
            display:block;
        }
        .menu_body {
            display: none;
            overflow: hidden;
            padding: 25px;
            color:#282e01;
            background-color:#8e9b82;
            background-image:  url(images/faq-arrow-bg.gif), url(images/faq-bg-in.jpg);
            background-position: right top, 0 0;
            background-repeat: no-repeat, repeat-x;
        
        }
        p.menu_head:hover
        {
            color: #000;
            box-shadow:solid 1px #000;
        }

        p.menuOn a.Th
        {
            color: #423111;
        }
        
        p.menu_head {
            border-bottom: 1px solid #dddddd;
            color: #6fb1c0;
            font-size: 15px;
            font-weight: normal;
            line-height: 18px;
            margin: 4px 0 0;
            padding: 12px 25px 13px 19px;
            text-align: left;
            text-transform: none;
            background:#00475b url(images/inactive-bg.png) no-repeat scroll right ;
        
        }
        .menu_body p {
            padding:0;
            margin: 0 0 8px;
        }
        .menuOn {
            background:url(images/active-bg.png) no-repeat right #eacb23 !important;
            color:#fff !important;
            
        }
        .menu_head a
        {
            color: #6fb1c0 ;
            font-weight: 700;
            text-transform: uppercase;
        }

        .menu_head a:hover
        {
            color: #FFF0C3 ;
            font-weight: 700;
        }
            
        .menu_list

        {
            /*width:928px;*/
            clear:both;
            margin-bottom:25px;
            background:url(images/faq-top-img.png) no-repeat;
            padding:217px 0 0;
            margin-top:-80px;
        }
        .capchaBottom
        {
            float:left;
            
            margin:0 15px 0 0;
        }

        .bottmBtn
        {
            margin-bottom:55px;
        }
        .faqContentLeft
        {
            float:left;
            width:10px;
            margin-right:12px
        }
        .faqContentRight
        {
            float:left;
            width: 800px;
        }
        

    </style>
    <style>
        @font-face {
            font-family: "new_font";
            src: url("fonts/relation_two_ps_ot-webfont.woff") format('woff');
        }
    </style>
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- Site Title-->
    <title>Cool Sculpting in Banglore | Cool Curve Clinics</title>

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="Visage design multipurpose template">
    <meta name="date" content="Dec 26">
    <script type="text/javascript" async="" src="js/ec.js"></script>
    <script type="text/javascript" async="" src="js/analytics.js"></script>
    <script async="" src="js/gtm.js"></script>
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <script src="js/4o300efCt-CXoq1JEC-sVReFz48.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
    <link rel="manifest" href="images/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style2.css">
    <style>
        .breadcrumb-modern {
            background-image: url("images/backgrounds/FAQs_hero.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <link rel="stylesheet" href="data:text/css;charset=utf-8;base64,Y2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gewogIGRpc3BsYXk6IGJsb2NrOwogIGJhY2tncm91bmQ6ICM0NTQ4NGQ7CiAgY29sb3I6ICNmZmY7CiAgbGluZS1oZWlnaHQ6IDEuNDU7CiAgcG9zaXRpb246IGZpeGVkOwogIHotaW5kZXg6IDkwMDAwMDAwOwogIHRvcDogMDsKICBsZWZ0OiAwOwogIHJpZ2h0OiAwOwogIHBhZGRpbmc6IC41ZW0gMWVtOwogIHRleHQtYWxpZ246IGNlbnRlcjsKICAtd2Via2l0LXVzZXItc2VsZWN0OiBub25lOwogICAgIC1tb3otdXNlci1zZWxlY3Q6IG5vbmU7CiAgICAgIC1tcy11c2VyLXNlbGVjdDogbm9uZTsKICAgICAgICAgIHVzZXItc2VsZWN0OiBub25lOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXVtkYXRhLXZpc2liaWxpdHk9ImhpZGRlbiJdIHsKICBkaXNwbGF5OiBub25lOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXSBjbG91ZGZsYXJlLWFwcC1tZXNzYWdlIHsKICBkaXNwbGF5OiBibG9jazsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gYSB7CiAgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7CiAgY29sb3I6ICNlYmViZjQ7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGE6aG92ZXIsCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGE6YWN0aXZlIHsKICBjb2xvcjogI2RiZGJlYjsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gY2xvdWRmbGFyZS1hcHAtY2xvc2UgewogIGRpc3BsYXk6IGJsb2NrOwogIGN1cnNvcjogcG9pbnRlcjsKICBmb250LXNpemU6IDEuNWVtOwogIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICByaWdodDogLjRlbTsKICB0b3A6IC4zNWVtOwogIGhlaWdodDogMWVtOwogIHdpZHRoOiAxZW07CiAgbGluZS1oZWlnaHQ6IDE7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGNsb3VkZmxhcmUtYXBwLWNsb3NlOmFjdGl2ZSB7CiAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZVkoMXB4KTsKICAgICAgICAgIHRyYW5zZm9ybTogdHJhbnNsYXRlWSgxcHgpOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXSBjbG91ZGZsYXJlLWFwcC1jbG9zZTpob3ZlciB7CiAgb3BhY2l0eTogLjllbTsKICBjb2xvcjogI2ZmZjsKfQo=">
    <script type="text/javascript" charset="UTF-8" src="js/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/geocoder.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/stats.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/controls.js"></script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
</head>


<body class="" data-gr-c-s-loaded="true">
    <?php 
    global $page;
    $page = "faqs";
    include("pages/header.php"); ?>
    
    <div class="page text-center">
        <!-- Page Header-->
        
        <!-- Modern Breadcrumbs-->
        <section class="breadcrumb-modern context-dark text-lg-left">
            <div class="section-xs section-md-top-110 section-md-bottom-41">
                <div class="container">
                    <h2 style="color: black;font-family:new_font; text-transform: none;"><b>Faqs</b></h2>
                    <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                        <li class="list-inline-item"><a href="index.php">Home</a></li>
                        <li class="list-inline-item">FAQs</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Content-->
        <main class="page-content">
            <!-- a few words about us-->
            <section class="section-xl text-left" style="padding: 40px 0;">
                <div class="container">
                    <div class="row row-40 justify-content-center">
                        <div class="col-sm-10 col-lg-8">
                            <h3 style="font-family:new_font; text-transform: none;"><b>Frequently Asked Questions</b></h3>
                            <hr class="text-java divider-custom hr-left-0 hr-sm-left-2">
                            <!-- FROM  -->
                            <div id="firstpane" class="menu_list" STYLE="margin-top:-80px;">
                                <p class="menu_head menuOn"><a  class="Th">AM I A GOOD CANDIDATE?</a></p>
                                <div class="menu_body" style="display:block" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>The Cool Sculpting fat reduction procedure is specially designed for those who have unwanted
                                            fat that resists diet and exercise. Unlike gastric bypass surgery, the Cool Sculpting
                                            procedure is not a weight loss solution for people who are obese. It is, however, a
                                            non-surgical alternative to liposuction. Good candidates have noticeable bulges in certain
                                            areas they would like to get rid of. Request a one-on-one consultation with a Cool Sculpting
                                            physician who will determine if the Cool Sculpting procedure is right for you.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">HOW MUCH DOES THE Cool Sculpting PROCEDURE COST?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>The starting price of CoolSuclpting is INR 20,000. The exact price for Cool Sculpting procedures varies depending on your areas of concern, the
                                            number of sessions needed, and your ultimate goals. During the consultation our doctor will work with you, they understand your goals and create a customized treatment plan for you.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">HOW LONG IS EACH SESSION? HOW MANY SESSIONS WILL I NEED?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>Your Cool Sculpting physician will help you create an individualized treatment plan tailored
                                            to your specific goals. The length of your Cool Sculpting session will vary depending on
                                            the number of areas being treated during one visit. You and your provider may schedule
                                            additional sessions in order to meet your goals. Many people read, check email, or even
                                            take a nap during their sessions.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">WHERE DOES THE FAT GO? ARE THE RESULTS PERMANENT?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>Once the treated fat cells are crystallized (frozen), they die and are naturally processed
                                            and eliminated from the body. Once the treated fat cells are gone, they are gone for good.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">WHAT DOES IT FEEL LIKE?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>As the cooling begins during the first few minutes, you will feel pressure and intense cold.
                                            This soon dissipates. Many people read, watch videos, work on their laptop, or even take a
                                            nap during their treatment.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">IS THE Cool Sculpting PROCEDURE SAFE?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>Cool Sculpting procedure is an FDA cleared and patented worldwide wherever patenting
                                            laws are applicable. With over 8 million procedures worldwide it is proven to be a safe
                                            and effective treatment for non surgical fat reduction. </p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">ARE THERE ANY SIDE EFFECTS?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>During the procedure you may experience deep pulling, tugging, pinching, numbness or
                                            discomfort. Following the procedure, typical side effects include temporary numbness,
                                            redness, swelling, bruising, firmness, tingling, stinging and pain. Rare side effects may
                                            also occur. The Cool Sculpting procedure is not for everyone. You should not have the Cool
                                            Sculpting procedure if you suffer from cryoglobulinemia or paroxysmal cold hemoglobinuria.
                                            As with any medical procedure, ask your physician if the Cool Sculpting procedure is right
                                            for you.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th"> CAN I RETURN TO NORMAL ACTIVITIES AFTER MY TREATMENT?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>Yes, you can. The Cool Sculpting procedure is completely non-surgical, so typically you can
                                            return to normal activities immediately. Some patients experience redness, minor bruising,
                                            tingling, numbness or discomfort in the treated area, but this is temporary and will
                                            resolve completely. Often times, patients return to work after their Cool Sculpting session
                                            is over.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th"> WHEN WILL I SEE RESULTS?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>You may start to see changes as quickly as three weeks after your treatment, and will
                                            experience the most dramatic results after two months. But your body will still flush out
                                            fat cells and continues doing so for up to four to six months after treatment.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">DO I NEED TO TAKE SPECIAL SUPPLEMENTS OR FOLLOW A STRICT DIET &amp; EXERCISE
                                        PROGRAM? </a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>No supplements or pills are required and you do not have to adopt new diet and exercise
                                            habits. Many patients feel more motivated to take care of themselves after their Cool
                                            Sculpting treatment. It is as if they get a second lease on their body and want to start
                                            anew again by taking even better care of themselves.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">WHAT HAPPENS IF I GAIN WEIGHT DOWN THE ROAD?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>Many people, after seeing the results from their Cool Sculpting procedure, take even better
                                            care of themselves. However, if you do gain weight, you may gain it evenly all over your
                                            body, not just in the treated areas.</p>
                                    </div>
                                </div>
                                <p class="menu_head"><a class="Th">What are the areas that can be treated by Cool Sculpting procedure?</a></p>
                                <div class="menu_body" id="navigation2">
                                    <div class="adoptTreeNow">
                                        <p>(a) Abdomen<br>(b) Flanks (Love Handles)<br>(c) Back<br>(d) Inner Thighs<br>(e) Outer Thighs <br>(f) Banana Rolls <br>(g)Bra fat<br>(h) Arms</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-lg-4">
                            
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <hr class="text-java divider-custom" style="max-width: 720px">
        </main>
        <!-- Page Footer-->
        <!-- Default footer-->
        <?php include("pages/footer.php"); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="js/core.min.js"> </script>
    <script src="js/script.js"> </script>
    
</body>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Java script-->
<script src="js/core.min.js"> </script>
<!-- <script src=js/jPushMenu.js> </script>
<script type=text/javascript>$(document).ready(function(){$(".toggle-menu").jPushMenu({closeOnClickLink:false});$(".dropdown-toggle").dropdown()});
    </script>  -->
<!-- 
<script type=text/javascript src=js/jquery.smartmenus.js> </script>
    <script type=text/javascript src=js/jquery.smartmenus.bootstrap.js> </script>  -->
     <script type=text/javascript src=js/sidebar-accordion.js></script>
<script src="js/script.js"> </script>
</body>

</html>