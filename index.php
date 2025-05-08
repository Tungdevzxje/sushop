<?php
session_start();
ini_set('display_errors', '0');
date_default_timezone_set('Asia/Saigon');
include("db.php");
include("ham/ham.php");
include("ham/catchuoi.php");
include("ngon_ngu/chon.php");
include("title_meta/title_meta.php");
?>
<!DOCTYPE html>
<html lang="en">
<base href="http://localhost:81/su/">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_meta; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="hinhmenu/logo.png" rel="shortcut icon" />
    <link rel="canonical" href="https://dongphuchathu.com.vn/" />
    <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="css/revslider/settings.css">
    <link rel="stylesheet" href="css/style3661.css?v=2.0">
    <meta name="twitter:card" content="http://localhost:81/pccc/<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta name="keywords" content="<?php echo $key; ?>" />
    <meta name="description" content="<?php echo $dis; ?>" />
    <meta property="og:url" content="http://localhost:81/pccc/<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image:alt" content="http://localhost:81/pccc/<?php echo $product['tieude']; ?>" />
    <meta property="og:title" content="http://localhost:81/pccc/<?php echo $product['tieude']; ?>" />
    <meta property="og:description" content="http://localhost:81/pccc/<?php echo $product['mota']; ?>" />
    <meta property="og:image" content="<?php echo $img; ?>" />
    <meta property="og:updated_time" content="1578214368" />
    <meta property="og:image" content="hinhmenu/GIOITHIEU-HATHU.jpg" />
    <meta property="og:description" content="<?php echo $dis; ?>" />

    <!-- Plugins CSS File -->

    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="sitebds/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="sitebds/font/flaticon.css">
    <link rel="stylesheet" href="sitebds/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="sitebds/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="sitebds/css/font-awesome.min.css">
    <link rel="stylesheet" href="sitebds/css/trangchu.css">
    <link rel="stylesheet" href="sitebds/css/menutop.css">


    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="sitebds/css/search.css">
    <link rel="stylesheet" href="sitebds/css/animate.css">
    <link rel="stylesheet" href="sitebds/css/aos.css">
    <link rel="stylesheet" href="sitebds/css/aos2.css">
    <link rel="stylesheet" href="sitebds/css/magnific-popup.css">
    <link rel="stylesheet" href="sitebds/css/lightcase.css">
    <link rel="stylesheet" href="sitebds/css/owl.carousel.min.css">
    <link rel="stylesheet" href="sitebds/css/bootstrap.min.css">
    <link rel="stylesheet" href="sitebds/css/menu.css">
    <link rel="stylesheet" href="sitebds/css/slick.css">
    <link rel="stylesheet" href="sitebds/css/styles.css">
    <link rel="stylesheet" href="sitebds/css/maps.css">
    <link rel="stylesheet" id="color" href="sitebds/css/colors/pink.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "CÔNG TY CỔ PHẦN BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HÒA",
            "url": "http://localhost:81/pccc/"
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106809384-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-106809384-1');
    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>

</head>

<body class="homepage-9 hp-6 homepage-1 mh homepage-12 hp-6 homepage-9">
    <!-- Wrapper -->

    <div id="wrapper"></div>
    <?php
    include("xu_ly_post_get/xu_ly_post_get.php");
    ?>
    <?php
    include('menutopdidong/menutopdidong.php');
    ?>
    <?php
    include('side/side.php');
    ?>

    <?php
    include('bienluan_phanthan.php');
    ?>
    <?php
    include('jqueryfooter/footertc.php');

    ?>


    <style>
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: rgb(91, 76, 175);
            color: white;
            border: none;
            border-radius: 10%;
            padding: 15px;
            font-size: 18px;
            cursor: pointer;
            display: none;
            z-index: 1000;
        }

        #scrollToTopBtn:hover {
            background-color: #45a049;
        }

        #widget {
            position: fixed;
            right: 6px;
            z-index: 99;
            top: 60%;
            margin-top: -66px;
        }

        .callmeText {
            position: absolute;
            z-index: 0;
            top: 26px;
            padding-left: 50px;
            width: 170px;
            height: 39px;
            line-height: 43px;
            background-color: #fff;
            -webkit-border-radius: 45px;
            -moz-border-radius: 45px;
            border-radius: 45px;
            margin-left: 25px;
        }

        .callmeTextzalo {
            position: absolute;
            z-index: 0;
            top: 86px;
            padding-left: 57px;
            width: 204px;
            height: 50px;
            line-height: 50px;
            background-color: #fff;
            -webkit-border-radius: 45px;
            -moz-border-radius: 45px;
            border-radius: 45px;
            margin-left: 25px;
        }

        .phone_text {
            font-size: 16px;
            font-weight: bold;
            color: #cf0808;
        }

        #widget>a {
            display: block;
            text-align: center;
            border: 1px solid #0ea180;
            padding: 2px;
            border-radius: 50%;
            color: #FFF;
            font-size: 13px;
            background: #FFF;
            -webkit-box-shadow: 0 1px 5px #999;
            -moz-box-shadow: 0 1px 5px #999;
            box-shadow: 0 1px 5px #999;
            margin-bottom: 5px;
            height: 39px;
            width: 39px;
        }

        #widget>a:hover {
            display: block;
            text-align: center;
            border: 1px solid #f00;
            padding: 2px;
            border-radius: 50%;
            color: #FFF;
            font-size: 13px;
            background: #FFF;
            -webkit-box-shadow: 0 1px 5px #999;
            -moz-box-shadow: 0 1px 5px #999;
            box-shadow: 0 1px 5px #999;
            margin-bottom: 5px;
            height: 39px;
            width: 39px;
        }

        #widget>a [class*=fa] {
            background: #0ea180;
            display: block;
            line-height: 32px;
        }

        #widget>a [class*=fa],
        #widget>a img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        .suntory-alo-phone {
            background-color: transparent;
            cursor: pointer;
            height: 120px;
            position: fixed;
            transition: visibility 0.5s ease 0s;
            width: 120px;
            z-index: 200000 !important;
        }

        .suntory-alo-ph-circle {
            animation: 1.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim;
            background-color: transaparent;
            /*	border: 2px solid rgba(30, 30, 30, 0.4); */
            border-radius: 100%;
            height: 100px;
            left: 0px;
            opacity: 0.1;
            position: absolute;
            top: 0px;
            transform-origin: 50% 50% 0;
            transition: all 0.5s ease 0s;
            width: 100px;
        }

        .suntory-alo-ph-circle-fill {
            animation: 2.3s ease-in-out 0s normal none infinite running suntory-alo-circle-fill-anim;
            border: 2px solid transparent;
            border-radius: 100%;
            height: 60px;
            left: 15px;
            position: absolute;
            top: 15px;
            transform-origin: 50% 50% 0;
            transition: all 0.5s ease 0s;
            width: 60px;
        }

        .suntory-alo-ph-img-circle {
            /* animation: 1s ease-in-out 0s normal none infinite running suntory-alo-circle-img-anim; */
            border: 2px solid transparent;
            border-radius: 100%;
            height: 40px;
            left: 25px;
            opacity: 0.7;
            position: absolute;
            top: 25px;
            transform-origin: 50% 50% 0;
            width: 40px;
        }

        .suntory-alo-phone.suntory-alo-hover,
        .suntory-alo-phone:hover {
            opacity: 1;
        }

        .suntory-alo-phone.suntory-alo-active .suntory-alo-ph-circle {
            animation: 1.1s ease-in-out 0s normal none infinite running suntory-alo-circle-anim !important;
        }

        .suntory-alo-phone.suntory-alo-static .suntory-alo-ph-circle {
            animation: 2.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim !important;
        }

        .suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle,
        .suntory-alo-phone:hover .suntory-alo-ph-circle {
            border-color: #00aff2;
            opacity: 0.5;
        }

        .suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle,
        .suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle {
            border-color: #EB278D;
            opacity: 1;
        }

        .suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle {
            border-color: #bfebfc;
            opacity: 1;
        }

        .suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle-fill,
        .suntory-alo-phone:hover .suntory-alo-ph-circle-fill {
            background-color: rgba(0, 175, 242, 0.9);
        }

        .suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle-fill,
        .suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle-fill {
            background-color: #EB278D;
        }

        .suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle-fill {
            background-color: rgba(0, 175, 242, 0.9);
        }

        .suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-img-circle,
        .suntory-alo-phone:hover .suntory-alo-ph-img-circle {
            background-color: #00aff2;
        }

        .suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-img-circle,
        .suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-img-circle {
            background-color: #EB278D;
        }

        .suntory-alo-phone.suntory-alo-green .suntory-alo-ph-img-circle {
            background-color: #00aff2;
        }

        @keyframes suntory-alo-circle-anim {
            0% {
                opacity: 0.1;
                transform: rotate(0deg) scale(0.5) skew(1deg);
            }

            30% {
                opacity: 0.5;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }

            100% {
                opacity: 0.6;
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }

        @keyframes suntory-alo-circle-img-anim {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }

        @keyframes suntory-alo-circle-fill-anim {
            0% {
                opacity: 0.2;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }

            50% {
                opacity: 0.2;
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            100% {
                opacity: 0.2;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }
        }

        .suntory-alo-ph-img-circle i {
            animation: 1s ease-in-out 0s normal none infinite running suntory-alo-circle-img-anim;
            font-size: 25px;
            line-height: 42px;
            padding-left: 4px;
            color: #fff;
        }

        /*=================== End phone ring ===============*/
        @keyframes suntory-alo-ring-ring {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }
    </style>
    <button id="scrollToTopBtn" title="Go to top">↑</button>

    <a href="https://zalo.me/0905108532" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon" style="    left: 1px;
    bottom: 60px;">
        <div class="suntory-alo-ph-circle"></div>
        <div class="suntory-alo-ph-circle-fill"></div>
        <div class="suntory-alo-ph-img-circle"><img src="hinhmenu/icon-zalo.gif" style="width: 100%; height: auto;" />
        </div>
    </a>


    <a href="tel:0905108532" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon"
        style="left: 0px; bottom: 0px;">
        <div class="callmeText">
            <span class="phone_text">0905 108 532</span>
        </div>
        <div class="suntory-alo-ph-circle"></div>
        <div class="suntory-alo-ph-circle-fill"></div>
        <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
    </a>

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
</body>
<!-- All jquery file included here -->
<!-- <script src="sitebds/js/jquery-3.5.1.min.js"></script> -->
<script src="sitebds/js/rangeSlider.js"></script>
<script src="sitebds/js/tether.min.js"></script>
<script src="sitebds/js/moment.js"></script>
<script src="sitebds/js/bootstrap.min.js"></script>
<script src="sitebds/js/mmenu.min.js"></script>
<script src="sitebds/js/mmenu.js"></script>
<script src="sitebds/js/aos.js"></script>
<script src="sitebds/js/aos2.js"></script>

<script src="js/bs.js"></script>
<script src="js/layerslider/greensock.js"></script>
<script src="js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/layerslider/layerslider.transitions.js"></script>
<script src="js/revslider/jquery.themepunch.revolution.min.js"></script>
<script src="js/revslider/jquery.themepunch.tools.min.js"></script>
<script>
    var revapi1050, tpj = jQuery;
    tpj(document).ready(function () {
        null == tpj("#home-slider").revolution ? revslider_showDoubleJqueryError("#home-slider") : revapi1050 = tpj("#home-slider").show().revolution({
            sliderType: "standard",

            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9e3,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "vertical",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                arrows: {
                    enable: !0,
                    style: "gyges"
                },
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 50,
                    swipe_direction: "vertical",
                    drag_block_vertical: !1
                },

            },

            gridwidth: [1320, 1024, 778, 480],
            gridheight: [350, 350, 350, 350],
            gridwidth: [1920, 1024, 778, 480],
            gridheight: [500, 350, 350, 350],
            lazyType: "smart",
            shadow: 0,
            spinner: "spinner2",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0px",
            disableProgressBar: "off",
            hideThumbsOnMobile: "off",
            fullWidth: "on",
            fullScreen: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: !1,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: !1
            }
        })
    })
</script>

<script src="sitebds/js/animate.js"></script>
<script src="sitebds/js/slick.min.js"></script>
<script src="sitebds/js/fitvids.js"></script>
<script src="sitebds/js/jquery.waypoints.min.js"></script>
<script src="sitebds/js/jquery.counterup.min.js"></script>
<script src="sitebds/js/imagesloaded.pkgd.min.js"></script>
<script src="sitebds/js/isotope.pkgd.min.js"></script>
<script src="sitebds/js/smooth-scroll.min.js"></script>
<script src="sitebds/js/lightcase.js"></script>
<script src="sitebds/js/search.js"></script>
<script src="sitebds/js/owl.carousel.js"></script>
<script src="sitebds/js/jquery.magnific-popup.min.js"></script>
<script src="sitebds/js/ajaxchimp.min.js"></script>
<script src="sitebds/js/newsletter.js"></script>
<script src="sitebds/js/jquery.form.js"></script>
<script src="sitebds/js/jquery.validate.min.js"></script>
<script src="sitebds/js/searched.js"></script>
<script src="sitebds/js/forms-2.js"></script>
<script src="sitebds/js/map-style2.js"></script>
<script src="sitebds/js/range.js"></script>
<script src="sitebds/js/color-switcher.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let mybutton = document.getElementById("scrollToTopBtn");

        if (mybutton) {
            window.addEventListener("scroll", function () {
                if (window.scrollY > 100) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            });

            mybutton.addEventListener("click", function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        }
    });
</script>


<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });
</script>

<script>
    $('.job_clientSlide').owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        autoplay: false,
        nav: true,
        smartSpeed: 1000,
        slideSpeed: 1000,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
            }
        }
    });
</script>

<script>
    $('.style2').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        autoWidth: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 2,
                margin: 20
            },
            400: {
                items: 2,
                margin: 20
            },
            500: {
                items: 3,
                margin: 20
            },
            768: {
                items: 4,
                margin: 20
            },
            992: {
                items: 5,
                margin: 20
            },
            1000: {
                items: 7,
                margin: 20
            }
        }
    });
</script>

<script>
    $(".dropdown-filter").on('click', function () {

        $(".explore__form-checkbox-list").toggleClass("filter-block");

    });
</script>




<!-- MAIN JS -->


</div>
<!-- Wrapper / End -->
</body>



</html>