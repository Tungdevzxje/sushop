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
<base href="http://localhost/dongphuc/">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_meta; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="hinhmenu/logo.png" rel="shortcut icon" />
    <link rel="canonical" href="http://localhost:81/nhalapghep/" />
    <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="css/revslider/settings.css">
    <link rel="stylesheet" href="css/style3661.css?v=2.0">
    <meta name="twitter:card" content="http://localhost:81/nhalapghep/<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta name="keywords" content="<?php echo $key; ?>" />
    <meta name="description" content="<?php echo $dis; ?>" />
    <meta property="og:url" content="http://localhost:81/nhalapghep/<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image:alt" content="http://localhost:81/nhalapghep/<?php echo $product['tieude']; ?>" />
    <meta property="og:title" content="http://localhost:81/nhalapghep/<?php echo $product['tieude']; ?>" />
    <meta property="og:description" content="http://localhost:81/nhalapghep/<?php echo $product['mota']; ?>" />
    <meta property="og:image" content="<?php echo $img; ?>" />
    <meta property="og:updated_time" content="1578214368" />
    <meta property="og:image" content="hinhmenu/logo.png" />
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
            "url": "http://localhost:81/nhalapghep/"
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
    <style>
        .search-result-text {
            display: block;
            /* Đảm bảo xuống hàng */
            width: 100%;
            /* Chiếm toàn bộ chiều rộng */
            font-size: 18px;
            margin-bottom: 10px;
            margin-top: 30px;
            /* Tạo khoảng cách với danh sách bài */
            text-align: center;
            /* Căn giữa cho đẹp */
            color: #333;
        }
    </style>
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
    require('db.php');
    include('phantrang/phantrang_dichvu.php');

    function escape($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    // Lấy từ khóa tìm kiếm
    $search = isset($_GET['q']) ? trim(urldecode(mysqli_real_escape_string($link, $_GET['q']))) : '';

    if ($search !== "") {
        $p = new pager;
        $limit = 12;
        $start = $p->findStart($limit);

        // Đếm số kết quả
        $countQuery = "SELECT COUNT(*) AS total FROM ma_sanpham WHERE tieude LIKE '%$search%' OR mota LIKE '%$search%' OR tukhoa1 LIKE '%$search%' OR tukhoa2 LIKE '%$search%'";
        $countResult = mysqli_query($link, $countQuery);
        $countRow = mysqli_fetch_assoc($countResult);
        $count = $countRow['total'];
        $pages = $p->findPages($count, $limit);

        // Lấy dữ liệu sản phẩm
        $sqlQuery = "SELECT * FROM ma_sanpham WHERE tieude LIKE '%$search%' OR mota LIKE '%$search%' OR tukhoa1 LIKE '%$search%' OR tukhoa2 LIKE '%$search%' ORDER BY id DESC LIMIT $start, $limit";
        $sql = mysqli_query($link, $sqlQuery);
        ?>


        <section class="blog-section" style="padding-top: 100px;">
            <div class="container">
                <div class="news-wrap">
                    <div class="row">
                        <?php
                        if ($count > 0) {
                            echo "<div class='search-result-text'>Có <b>$count</b> kết quả cho từ khóa: <b>$search</b></div>";
                            while ($row = mysqli_fetch_assoc($sql)) {
                                $id = $row['id'];
                                $tieude = escape($row['tieude']);
                                $hinhanh = escape($row['hinhanh']);
                                $mota = escape($row['mota']);

                                $url = escape($row['linkurl']);
                                $link = str_replace("?", "", strtolower("chitiet/$url"));
                                ?>
                                <div class="col-lg-3 col-md-6 col-xs-12" style="margin-bottom:20px; padding:10px;">
                                    <div class="news-item"
                                        style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="<?php echo "$link"; ?>" class="news-img-link">
                                            <div class="img-box hover-effect">
                                                <img class="img-responsive" src="HinhCTSP/HinhSanPham/<?php echo $hinhanh; ?>"
                                                    alt="<?php echo $tieude; ?>" style="padding: 10px;" />
                                            </div>
                                        </a>
                                        <div class="news-item-text">
                                            <a href="<?php echo "$link"; ?>">
                                                <h3 style="font-size:16px; line-height:25px"><?php echo $tieude; ?></h3>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<div class='search-result-text'>Không tìm thấy kết quả nào cho từ khóa: <b>$search</b></div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php
    include('jqueryfooter/footertc.php');

    ?>


    <style>
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 35px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 65%;
            padding: 15px;
            font-size: 18px;
            cursor: pointer;
            display: none;
            z-index: 1000;
        }

        #scrollToTopBtn:hover {
            background-color: #007bff;
        }
    </style>
    <button id="scrollToTopBtn" title="Go to top">↑</button>

    <style>
        .arcontactus-widget.right.arcontactus-message {
            right: 20px
        }

        .arcontactus-widget.right.arcontactus-message {
            bottom: 90px
        }

        .arcontactus-widget .arcontactus-message-button .pulsation {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .arcontactus-widget.md .arcontactus-message-button,
        .arcontactus-widget.md.arcontactus-message {
            width: 60px;
            height: 60px
        }

        .arcontactus-widget {
            opacity: 0;
            transition: .2s opacity
        }

        .arcontactus-widget * {
            box-sizing: border-box
        }

        .arcontactus-widget.left.arcontactus-message {
            left: 20px;
            right: auto
        }

        .arcontactus-widget.left .arcontactus-message-button {
            right: auto;
            left: 0
        }

        .arcontactus-widget.left .arcontactus-prompt {
            left: 80px;
            right: auto;
            transform-origin: 0 50%
        }

        .arcontactus-widget.left .arcontactus-prompt:before {
            border-right: 8px solid #FFF;
            border-top: 8px solid transparent;
            border-left: 8px solid transparent;
            border-bottom: 8px solid transparent;
            right: auto;
            left: -15px
        }

        .arcontactus-widget.left .messangers-block {
            right: auto;
            left: 0;
            -webkit-transform-origin: 10% 105%;
            -ms-transform-origin: 10% 105%;
            transform-origin: 10% 105%
        }

        .arcontactus-widget.left .callback-countdown-block {
            left: 0;
            right: auto
        }

        .arcontactus-widget.left .callback-countdown-block::before,
        .arcontactus-widget.left .messangers-block::before {
            left: 25px;
            right: auto
        }

        .arcontactus-widget.md .callback-countdown-block,
        .arcontactus-widget.md .messangers-block {
            bottom: 70px
        }

        .arcontactus-widget.md .arcontactus-prompt {
            bottom: 5px
        }

        .arcontactus-widget.md.left .callback-countdown-block:before,
        .arcontactus-widget.md.left .messangers-block:before {
            left: 21px
        }

        .arcontactus-widget.md.left .arcontactus-prompt {
            left: 70px
        }

        .arcontactus-widget.md.right .callback-countdown-block:before,
        .arcontactus-widget.md.right .messangers-block:before {
            right: 21px
        }

        .arcontactus-widget.md.right .arcontactus-prompt {
            right: 70px
        }

        .arcontactus-widget.md .arcontactus-message-button .pulsation {
            width: 74px;
            height: 74px
        }

        .arcontactus-widget.md .arcontactus-message-button .callback-state,
        .arcontactus-widget.md .arcontactus-message-button .icons {
            width: 40px;
            height: 40px;
            margin-top: -20px;
            margin-left: -20px
        }

        .arcontactus-widget.sm .arcontactus-message-button,
        .arcontactus-widget.sm.arcontactus-message {
            width: 50px;
            height: 50px
        }

        .arcontactus-widget.sm .callback-countdown-block,
        .arcontactus-widget.sm .messangers-block {
            bottom: 60px
        }

        .arcontactus-widget.sm .arcontactus-prompt {
            bottom: 0
        }

        .arcontactus-widget.sm.left .callback-countdown-block:before,
        .arcontactus-widget.sm.left .messangers-block:before {
            left: 16px
        }

        .arcontactus-widget.sm.left .arcontactus-prompt {
            left: 60px
        }

        .arcontactus-widget.sm.right .callback-countdown-block:before,
        .arcontactus-widget.sm.right .messangers-block:before {
            right: 16px
        }

        .arcontactus-widget.sm.right .arcontactus-prompt {
            right: 60px
        }

        .arcontactus-widget.sm .arcontactus-message-button .pulsation {
            width: 64px;
            height: 64px
        }

        .arcontactus-widget.sm .arcontactus-message-button .icons {
            width: 40px;
            height: 40px;
            margin-top: -20px;
            margin-left: -20px
        }

        .arcontactus-widget.sm .arcontactus-message-button .static {
            margin-top: -16px
        }

        .arcontactus-widget.sm .arcontactus-message-button .callback-state {
            width: 40px;
            height: 40px;
            margin-top: -20px;
            margin-left: -20px
        }

        .arcontactus-widget.active {
            opacity: 1
        }

        .arcontactus-widget .icons.hide,
        .arcontactus-widget .static.hide {
            opacity: 0;
            transform: scale(0)
        }

        .arcontactus-widget.arcontactus-message {
            z-index: 10000;
            right: 20px;
            bottom: 20px;
            position: fixed !important;
            height: 70px;
            width: 70px
        }

        .arcontactus-widget .arcontactus-message-button {
            width: 70px;
            position: absolute;
            height: 70px;
            right: 0;
            background-color: red;
            border-radius: 50px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer
        }

        .arcontactus-widget .arcontactus-message-button p {
            font-family: Ubuntu, Arial, sans-serif;
            color: #fff;
            font-weight: 700;
            font-size: 10px;
            line-height: 11px;
            margin: 0
        }

        .arcontactus-widget .arcontactus-message-button .pulsation {
            width: 84px;
            height: 84px;
            background-color: red;
            border-radius: 50px;
            position: absolute;
            left: -7px;
            top: -7px;
            z-index: -1;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-animation: arcontactus-pulse 2s infinite;
            animation: arcontactus-pulse 2s infinite
        }

        .arcontactus-widget .arcontactus-message-button .icons {
            background-color: #fff;
            width: 44px;
            height: 44px;
            border-radius: 50px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            margin-top: -22px;
            margin-left: -22px
        }

        .arcontactus-widget .arcontactus-message-button .static {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -19px;
            margin-left: -26px;
            width: 52px;
            height: 52px;
            text-align: center
        }

        .arcontactus-widget .arcontactus-message-button .static img {
            display: inline
        }

        .arcontactus-widget .arcontactus-message-button .static svg {
            width: 24px;
            height: 24px;
            color: #FFF
        }

        .arcontactus-widget .arcontactus-message-button.no-text .static {
            margin-top: -12px
        }

        .arcontactus-widget .pulsation:nth-of-type(2n) {
            -webkit-animation-delay: .5s;
            animation-delay: .5s
        }

        .arcontactus-widget .pulsation.stop {
            -webkit-animation: none;
            animation: none
        }

        .arcontactus-widget .icons-line {
            top: 10px;
            left: 12px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            -webkit-transition: cubic-bezier(.13, 1.49, .14, -.4);
            -o-transition: cubic-bezier(.13, 1.49, .14, -.4);
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-transform: translateX(30px);
            -ms-transform: translateX(30px);
            transform: translateX(30px);
            height: 24px;
            transition: .2s all
        }

        .arcontactus-widget .icons,
        .arcontactus-widget .static {
            transition: .2s all
        }

        .arcontactus-widget .icons-line.stop {
            -webkit-animation-play-state: paused;
            animation-play-state: paused
        }

        .arcontactus-widget .icons-line span {
            display: inline-block;
            width: 24px;
            height: 24px;
            color: red
        }

        .arcontactus-widget .icons-line span i,
        .arcontactus-widget .icons-line span svg {
            width: 24px;
            height: 24px
        }

        .arcontactus-widget .icons-line span i {
            display: block;
            font-size: 24px;
            line-height: 24px
        }

        .arcontactus-widget .icons-line img,
        .arcontactus-widget .icons-line span {
            margin-right: 40px
        }

        .arcontactus-widget .icons.hide .icons-line {
            transform: scale(0)
        }

        .arcontactus-widget .icons .icon:first-of-type {
            margin-left: 0
        }

        .arcontactus-widget .arcontactus-close {
            color: #FFF
        }

        .arcontactus-widget .arcontactus-close svg {
            -webkit-transform: rotate(180deg) scale(0);
            -ms-transform: rotate(180deg) scale(0);
            transform: rotate(180deg) scale(0);
            -webkit-transition: ease-in .12s all;
            -o-transition: ease-in .12s all;
            transition: ease-in .12s all;
            display: block
        }

        .arcontactus-widget .arcontactus-close.show-messageners-block svg {
            -webkit-transform: rotate(0) scale(1);
            -ms-transform: rotate(0) scale(1);
            transform: rotate(0) scale(1)
        }

        .arcontactus-widget .arcontactus-prompt,
        .arcontactus-widget .messangers-block {
            background: center no-repeat #FFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, .6);
            width: 235px;
            position: absolute;
            bottom: 80px;
            right: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding: 14px 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 7px;
            -webkit-transform-origin: 80% 105%;
            -ms-transform-origin: 80% 105%;
            transform-origin: 80% 105%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: ease-out .12s all;
            -o-transition: ease-out .12s all;
            transition: ease-out .12s all;
            z-index: 10000
        }

        .arcontactus-widget .arcontactus-prompt:before,
        .arcontactus-widget .messangers-block:before {
            position: absolute;
            bottom: -7px;
            right: 25px;
            left: auto;
            display: inline-block !important;
            border-right: 8px solid transparent;
            border-top: 8px solid #FFF;
            border-left: 8px solid transparent;
            content: ''
        }

        .arcontactus-widget .arcontactus-prompt.show-messageners-block,
        .arcontactus-widget .messangers-block.show-messageners-block {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1)
        }

        .arcontactus-widget .arcontactus-prompt {
            color: #787878;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 18px;
            width: auto;
            bottom: 10px;
            right: 80px;
            white-space: nowrap;
            padding: 18px 20px 14px
        }

        .arcontactus-widget .arcontactus-prompt:before {
            border-right: 8px solid transparent;
            border-top: 8px solid transparent;
            border-left: 8px solid #FFF;
            border-bottom: 8px solid transparent;
            bottom: 16px;
            right: -15px
        }

        .arcontactus-widget .arcontactus-prompt.active {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1)
        }

        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-close {
            position: absolute;
            right: 6px;
            top: 6px;
            cursor: pointer;
            z-index: 100;
            height: 14px;
            width: 14px;
            padding: 2px
        }

        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-close svg {
            height: 10px;
            width: 10px;
            display: block
        }

        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing {
            border-radius: 10px;
            display: inline-block;
            left: 3px;
            padding: 0;
            position: relative;
            top: 4px;
            width: 50px
        }

        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div {
            position: relative;
            float: left;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            background: #ccc;
            margin: 0 2px;
            -webkit-animation: arcontactus-updown 2s infinite;
            animation: arcontactus-updown 2s infinite
        }

        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div:nth-child(2) {
            animation-delay: .1s
        }

        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div:nth-child(3) {
            animation-delay: .2s
        }

        .arcontactus-widget .messangers-block.sm .messanger {
            padding-left: 50px;
            min-height: 44px
        }

        .arcontactus-widget .messangers-block.sm .messanger span {
            height: 32px;
            width: 32px;
            margin-top: -16px
        }

        .arcontactus-widget .messangers-block.sm .messanger span svg {
            height: 20px;
            width: 20px;
            margin-top: -10px;
            margin-left: -10px
        }

        .arcontactus-widget .messanger {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0;
            cursor: pointer;
            width: 100%;
            padding: 8px 20px 8px 60px;
            position: relative;
            min-height: 54px;
            text-decoration: none
        }

        .arcontactus-widget .messanger:hover {
            background-color: #EEE
        }

        .arcontactus-widget .messanger:before {
            background-repeat: no-repeat;
            background-position: center
        }

        .arcontactus-widget .messanger.facebook span {
            background: #0084ff
        }

        .arcontactus-widget .messanger.viber span {
            background: #7c529d
        }

        .arcontactus-widget .messanger.telegram span {
            background: #2ca5e0
        }

        .arcontactus-widget .messanger.skype span {
            background: #31c4ed
        }

        .arcontactus-widget .messanger.email span {
            background: #ff8400
        }

        .arcontactus-widget .messanger.contact span {
            background: #7eb105
        }

        .arcontactus-widget .messanger.call-back span {
            background: #54cd81
        }

        .arcontactus-widget .messanger span {
            position: absolute;
            left: 10px;
            top: 50%;
            margin-top: -20px;
            display: block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #0084ff;
            margin-right: 10px;
            color: #FFF;
            text-align: center;
            vertical-align: middle
        }

        .arcontactus-widget .messanger span i,
        .arcontactus-widget .messanger span svg {
            width: 24px;
            height: 24px;
            vertical-align: middle;
            text-align: center;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -12px;
            margin-left: -12px
        }

        .arcontactus-widget .messanger span i {
            font-size: 24px;
            line-height: 24px
        }

        .arcontactus-widget .messanger p {
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: rgba(0, 0, 0, .87)
        }

        @-webkit-keyframes arcontactus-pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 1
            }

            50% {
                opacity: .5
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }

        @media (max-width:468px) {

            .arcontactus-widget.opened.arcontactus-message,
            .arcontactus-widget.opened.left.arcontactus-message {
                width: auto;
                right: 20px;
                left: 20px
            }
        }

        @keyframes arcontactus-updown {

            0%,
            100%,
            43% {
                transform: translate(0, 0)
            }

            25%,
            35% {
                transform: translate(0, -10px)
            }
        }

        @-webkit-keyframes arcontactus-updown {

            0%,
            100%,
            43% {
                transform: translate(0 0)
            }

            25%,
            35% {
                transform: translate(-10px 0)
            }
        }

        @keyframes arcontactus-pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 1
            }

            50% {
                opacity: .5
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }

        @-webkit-keyframes arcontactus-show-stat {

            0%,
            100%,
            20%,
            85% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            21%,
            84% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
        }

        @keyframes arcontactus-show-stat {

            0%,
            100%,
            20%,
            85% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            21%,
            84% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
        }

        @-webkit-keyframes arcontactus-show-icons {

            0%,
            100%,
            20%,
            85% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            21%,
            84% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes arcontactus-show-icons {

            0%,
            100%,
            20%,
            85% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            21%,
            84% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
    </style>

    <div id='arcontactus' class="no-print"></div>



    <script>//<![CDATA[

        function arCuGetCookie(t) { return document.cookie.length > 0 && (c_start = document.cookie.indexOf(t + "="), -1 != c_start) ? (c_start = c_start + t.length + 1, c_end = document.cookie.indexOf(";", c_start), -1 == c_end && (c_end = document.cookie.length), unescape(document.cookie.substring(c_start, c_end))) : 0 } function arCuCreateCookie(t, e, s) { var n; if (s) { var i = new Date; i.setTime(i.getTime() + 24 * s * 60 * 60 * 1e3), n = "; expires=" + i.toGMTString() } else n = ""; document.cookie = t + "=" + e + n + "; path=/" } function arCuShowMessage(t) { if (arCuPromptClosed) return !1; void 0 !== arCuMessages[t] ? (jQuery("#arcontactus").contactUs("showPromptTyping"), _arCuTimeOut = setTimeout(function () { if (arCuPromptClosed) return !1; jQuery("#arcontactus").contactUs("showPrompt", { content: arCuMessages[t] }), t++, _arCuTimeOut = setTimeout(function () { if (arCuPromptClosed) return !1; arCuShowMessage(t) }, arCuMessageTime) }, arCuTypingTime)) : (arCuCloseLastMessage && jQuery("#arcontactus").contactUs("hidePrompt"), arCuLoop && arCuShowMessage(0)) } function arCuShowMessages() { setTimeout(function () { clearTimeout(_arCuTimeOut), arCuShowMessage(0) }, arCuDelayFirst) } !function (t) { function e(s, n) { this._initialized = !1, this.settings = null, this.options = t.extend({}, e.Defaults, n), this.$element = t(s), this.init(), this.x = 0, this.y = 0, this._interval, this._menuOpened = !1, this._callbackOpened = !1, this.countdown = null } e.Defaults = { align: "right", countdown: 0, drag: !1, buttonText: "Liên hệ", buttonSize: "large", menuSize: "normal", items: [], iconsAnimationSpeed: 1200, theme: "#007bff", buttonIcon: '<svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"/></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"/></defs></svg>', closeIcon: '<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use></g></g><defs><path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path></defs></svg>' }, e.prototype.init = function () { this.destroy(), this.settings = t.extend({}, this.options), this.$element.addClass("arcontactus-widget").addClass("arcontactus-message"), "left" === this.settings.align ? this.$element.addClass("left") : this.$element.addClass("right"), this.settings.items.length ? (this._initCallbackBlock(), this._initMessengersBlock(), this._initMessageButton(), this._initPrompt(), this._initEvents(), this.startAnimation(), this.$element.addClass("active")) : console.info("jquery.contactus:no items"), this._initialized = !0, this.$element.trigger("arcontactus.init") }, e.prototype.destroy = function () { if (!this._initialized) return !1; this.$element.html(""), this._initialized = !1, this.$element.trigger("arcontactus.destroy") }, e.prototype._initCallbackBlock = function () { }, e.prototype._initMessengersBlock = function () { var e = t("<div>", { class: "messangers-block" }); "normal" !== this.settings.menuSize && "large" !== this.settings.menuSize || e.addClass("lg"), "small" === this.settings.menuSize && e.addClass("sm"), this._appendMessengerIcons(e), this.$element.append(e) }, e.prototype._appendMessengerIcons = function (e) { t.each(this.settings.items, function (s) { if ("callback" == this.href) var n = t("<div>", { class: "messanger call-back " + (this.class ? this.class : "") }); else if (n = t("<a>", { class: "messanger " + (this.class ? this.class : ""), id: this.id ? this.id : null, href: this.href, target: this.target ? this.target : "_blank" }), this.onClick) { var i = this; n.on("click", function (t) { i.onClick(t) }) } var a = t("<span>", { style: this.color ? "background-color:" + this.color : null }); a.append(this.icon), n.append(a), n.append("<p>" + this.title + "</p>"), e.append(n) }) }, e.prototype._initMessageButton = function () { var e = this, s = t("<div>", { class: "arcontactus-message-button", style: this._backgroundStyle() }); "large" === this.settings.buttonSize && this.$element.addClass("lg"), "medium" === this.settings.buttonSize && this.$element.addClass("md"), "small" === this.settings.buttonSize && this.$element.addClass("sm"); var n = t("<div>", { class: "static" }); n.append(this.settings.buttonIcon), !1 !== this.settings.buttonText ? n.append("<p>" + this.settings.buttonText + "</p>") : s.addClass("no-text"); var i = t("<div>", { class: "callback-state", style: e._colorStyle() }); i.append(this.settings.callbackStateIcon); var a = t("<div>", { class: "icons hide" }), o = t("<div>", { class: "icons-line" }); t.each(this.settings.items, function (s) { var n = t("<span>", { style: e._colorStyle() }); n.append(this.icon), o.append(n) }), a.append(o); var r = t("<div>", { class: "arcontactus-close" }); r.append(this.settings.closeIcon); var c = t("<div>", { class: "pulsation", style: e._backgroundStyle() }), l = t("<div>", { class: "pulsation", style: e._backgroundStyle() }); s.append(n).append(i).append(a).append(r).append(c).append(l), this.$element.append(s) }, e.prototype._initPrompt = function () { var e = t("<div>", { class: "arcontactus-prompt" }), s = t("<div>", { class: "arcontactus-prompt-close", style: this._colorStyle() }); s.append(this.settings.closeIcon); var n = t("<div>", { class: "arcontactus-prompt-inner" }); e.append(s).append(n), this.$element.append(e) }, e.prototype._initEvents = function () { var e = this.$element, s = this; e.find(".arcontactus-message-button").on("mousedown", function (t) { s.x = t.pageX, s.y = t.pageY }).on("mouseup", function (t) { t.pageX === s.x && t.pageY === s.y && (s.toggleMenu(), t.preventDefault()) }), this.settings.drag && (e.draggable(), e.get(0).addEventListener("touchmove", function (t) { var s = t.targetTouches[0]; e.get(0).style.left = s.pageX - 25 + "px", e.get(0).style.top = s.pageY - 25 + "px", t.preventDefault() }, !1)), t(document).on("click", function (t) { s.closeMenu() }), e.on("click", function (t) { t.stopPropagation() }), e.find(".call-back").on("click", function () { s.openCallbackPopup() }), e.find(".callback-countdown-block-close").on("click", function () { null != s.countdown && (clearInterval(s.countdown), s.countdown = null), s.closeCallbackPopup() }), e.find(".arcontactus-prompt-close").on("click", function () { s.hidePrompt() }) }, e.prototype.show = function () { this.$element.addClass("active"), this.$element.trigger("arcontactus.show") }, e.prototype.hide = function () { this.$element.removeClass("active"), this.$element.trigger("arcontactus.hide") }, e.prototype.openMenu = function () { var t = this.$element; t.find(".messangers-block").hasClass("show-messageners-block") || (this.stopAnimation(), t.find(".messangers-block, .arcontactus-close").addClass("show-messageners-block"), t.find(".icons, .static").addClass("hide"), t.find(".pulsation").addClass("stop"), this._menuOpened = !0, this.$element.trigger("arcontactus.openMenu")) }, e.prototype.closeMenu = function () { var t = this.$element; t.find(".messangers-block").hasClass("show-messageners-block") && (t.find(".messangers-block, .arcontactus-close").removeClass("show-messageners-block"), t.find(".icons, .static").removeClass("hide"), t.find(".pulsation").removeClass("stop"), this.startAnimation(), this._menuOpened = !1, this.$element.trigger("arcontactus.closeMenu")) }, e.prototype.toggleMenu = function () { var t = this.$element; if (this.hidePrompt(), t.find(".callback-countdown-block").hasClass("display-flex")) return !1; t.find(".messangers-block").hasClass("show-messageners-block") ? this.closeMenu() : this.openMenu(), this.$element.trigger("arcontactus.toggleMenu") }, e.prototype.openCallbackPopup = function () { var t = this.$element; t.addClass("opened"), this.closeMenu(), this.stopAnimation(), t.find(".icons, .static").addClass("hide"), t.find(".pulsation").addClass("stop"), t.find(".callback-countdown-block").addClass("display-flex"), this._callbackOpened = !0, this.$element.trigger("arcontactus.openCallbackPopup") }, e.prototype.closeCallbackPopup = function () { var t = this.$element; t.removeClass("opened"), t.find(".messangers-block").removeClass("show-messageners-block"), t.find(".arcontactus-close").removeClass("show-messageners-block"), t.find(".icons, .static").removeClass("hide"), this.startAnimation(), this._callbackOpened = !1, this.$element.trigger("arcontactus.closeCallbackPopup") }, e.prototype.startAnimation = function () { var t = this.$element, e = t.find(".icons-line"), s = t.find(".static"), n = t.find(".icons-line>span:first-child").width() + 40; if ("large" === this.settings.buttonSize) var i = 2, a = 0; "medium" === this.settings.buttonSize && (i = 4, a = -2), "small" === this.settings.buttonSize && (i = 4, a = -2); var o = t.find(".icons-line>span").length, r = 0; if (this.stopAnimation(), 0 === this.settings.iconsAnimationSpeed) return !1; this._interval = setInterval(function () { 0 === r && (e.parent().removeClass("hide"), s.addClass("hide")); var t = "translate(" + -(n * r + i) + "px, " + a + "px)"; e.css({ "-webkit-transform": t, "-ms-transform": t, transform: t }), ++r > o && (r > o + 1 && (r = 0), e.parent().addClass("hide"), s.removeClass("hide"), t = "translate(" + -i + "px, " + a + "px)", e.css({ "-webkit-transform": t, "-ms-transform": t, transform: t })) }, this.settings.iconsAnimationSpeed) }, e.prototype.stopAnimation = function () { clearInterval(this._interval); var t = this.$element, e = t.find(".icons-line"), s = t.find(".static"); e.parent().addClass("hide"), s.removeClass("hide"); var n = "translate(-2px, 0px)"; e.css({ "-webkit-transform": n, "-ms-transform": n, transform: n }) }, e.prototype.showPrompt = function (t) { var e = this.$element.find(".arcontactus-prompt"); t && t.content && e.find(".arcontactus-prompt-inner").html(t.content), e.addClass("active"), this.$element.trigger("arcontactus.showPrompt") }, e.prototype.hidePrompt = function () { this.$element.find(".arcontactus-prompt").removeClass("active"), this.$element.trigger("arcontactus.hidePrompt") }, e.prototype.showPromptTyping = function () { this.$element.find(".arcontactus-prompt").find(".arcontactus-prompt-inner").html(""), this._insertPromptTyping(), this.showPrompt({}), this.$element.trigger("arcontactus.showPromptTyping") }, e.prototype._insertPromptTyping = function () { var e = this.$element.find(".arcontactus-prompt-inner"), s = t("<div>", { class: "arcontactus-prompt-typing" }), n = t("<div>"); s.append(n), s.append(n.clone()), s.append(n.clone()), e.append(s) }, e.prototype.hidePromptTyping = function () { this.$element.find(".arcontactus-prompt").removeClass("active"), this.$element.trigger("arcontactus.hidePromptTyping") }, e.prototype._backgroundStyle = function () { return "background-color: " + this.settings.theme }, e.prototype._colorStyle = function () { return "color: " + this.settings.theme }, t.fn.contactUs = function (s) { var n = Array.prototype.slice.call(arguments, 1); return this.each(function () { var i = t(this), a = i.data("ar.contactus"); a || (a = new e(this, "object" == typeof s && s), i.data("ar.contactus", a)), "string" == typeof s && "_" !== s.charAt(0) && a[s].apply(a, n) }) }, t.fn.contactUs.Constructor = e }(jQuery);
        //]]></script>


    <script>//<![CDATA[
        var arCuMessages = ["<b style='color:#c00; padding: 5px;'>Nevato </b> </br> Xin chào"];
        var arCuLoop = false;
        var arCuCloseLastMessage = false;
        var arCuPromptClosed = false;
        var _arCuTimeOut = null;
        var arCuDelayFirst = 2000;
        var arCuTypingTime = 2000;
        var arCuMessageTime = 4000;
        var arCuClosedCookie = 0;
        var arcItems = [];
        window.addEventListener('load', function () {
            arCuClosedCookie = arCuGetCookie('arcu-closed');
            jQuery('#arcontactus').on('arcontactus.init', function () {
                if (arCuClosedCookie) {
                    return false;
                }
                arCuShowMessages();
            });
            jQuery('#arcontactus').on('arcontactus.openMenu', function () {
                clearTimeout(_arCuTimeOut);
                arCuPromptClosed = true;
                jQuery('#contact').contactUs('hidePrompt');
                arCuCreateCookie('arcu-closed', 1, 30);
            });
            jQuery('#arcontactus').on('arcontactus.hidePrompt', function () {
                clearTimeout(_arCuTimeOut);
                arCuPromptClosed = true;
                arCuCreateCookie('arcu-closed', 1, 30);
            });

            var arcItem = {};
            arcItem.id = 'msg-item-1';
            arcItem.class = 'msg-item-phone';
            arcItem.title = 'Số liên hệ: 0258.625.6699';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
            arcItem.href = 'tel:02586256699';
            arcItem.color = '#0084ff';
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = 'msg-item-2';
            arcItem.class = 'msg-item-phone';
            arcItem.title = 'Mr. Quý: 0914029179';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
            arcItem.href = 'tel:0914029179';
            arcItem.color = '#0084ff';
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = 'msg-item-6';
            arcItem.class = 'msg-item-phone';
            arcItem.title = 'Mr. Văn: 0904806371';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
            arcItem.href = 'tel:0904806371';
            arcItem.color = '#0084ff';
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = 'msg-item-7';
            arcItem.class = 'msg-item-phone';
            arcItem.title = 'Ms. Thịnh: 0983828079';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
            arcItem.href = 'tel:0983828079';
            arcItem.color = '#0084ff';
            arcItems.push(arcItem);



            jQuery('#arcontactus').contactUs({
                items: arcItems
            });
        });
        //]]></script>

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
                bullets: {
                    enable: !0,
                    hide_onmobile: !0,
                    hide_under: 1024,
                    style: "hesperiden",
                    hide_onleave: !0,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 20,
                    space: 5,
                    tmp: ""
                }
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