<style>
    /* đầu trang */

    .faq_main_container {
        max-width: 800px;
        width: 100%;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        align-items: center;
    }

    .faq_container {
        border: 2px solid #df81ff;
    }

    .faq_question {
        font-size: 1.2rem;
        font-weight: 600;
        padding: 10px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }

    .answercont {
        max-height: 0;
        overflow: hidden;
        transition: 0.3s;
    }

    .answer {
        padding: 0 10px 20px;
        line-height: 1.5rem;
    }

    .fqa_headline_container h2 span {
        font-weight: 700;
    }

    .faq_question-text h3 {
        font-size: 22px;
    }

    .icon.active {
        background: transparent;
        border: 2px solid #fff;
    }

    .icon:hover {
        cursor: pointer;
    }

    .icon-shape {
        position: relative;
        width: 50px;
        height: 50px;
        background-color: #007BFF;
    }

    .icon .icon-shape::before {
        position: absolute;
        content: "";
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 30px;
        height: 4px;
        background: #fff;
        border-radius: 3px;
        transition: all 0.5s ease;
    }

    .icon .icon-shape::after {
        position: absolute;
        content: "";
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 4px;
        height: 30px;
        background: #fff;
        border-radius: 3px;
        transition: all 0.5s ease;
    }

    .icon .icon-shape.active::before {
        transform: translate(-50%, -50%) rotate(180deg);
        transition: all 0.5s ease;
    }

    .icon .icon-shape.active::after {
        transform: translate(-50%, -50%) rotate(90deg);
        transition: all 0.5s ease;
    }





    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        color: white;
    }

    .title-main {
        text-transform: capitalize;
        color: #333;
        font-size: 18px;
        font-weight: 600;
        display: block;
    }

    .title-span {
        text-transform: capitalize;
        color: #333;
        font-size: 18px;
        font-weight: bold;
        padding-top: 5px;
        display: block;
        text-decoration: none;
    }

    .title-trangchu {
        color: #c18847;
        font-weight: bold;
        text-transform: capitalize;
        font-size: 23px;

    }

    .title-haonhien {
        font-family: 'Montserrat', sans-serif;
        text-transform: capitalize;
        color: #121B22;
        font-size: 1.1rem;
        font-weight: 600;
        display: block;
    }

    .title-cauhoi {
        font-family: 'Montserrat', sans-serif;
        text-transform: capitalize;
        color: #121B22;
        font-size: 20px;
        font-weight: 600;
        display: block;
    }



    .title-faq {
        color: #c18847;
        font-weight: bold;
        text-transform: capitalize;
        font-size: 23px;

    }

    .title-trangdienlanh {
        color: #111;
        font-weight: bold;
        text-transform: capitalize;
        font-size: 22px;
        text-align: center;
        padding-bottom: 25px;
        color: #c18847
    }

    .blog-span {
        font-size: 29px;
        font-weight: bolder;
        padding-bottom: 20px;
        line-height: 35px;
        color: #c18847;
    }

    .blog-section {
        padding: 50px 0;
        background-color: #f9f9f9;
    }

    .blog-section .row>.col-xl-6:first-child {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
        align-items: stretch;
    }

    .blog-section .row>.col-xl-6:first-child>div {
        flex: 0 0 calc(50% - 10px);
        background: #fff;
        border-radius: 8px;
        text-align: center;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .blog-section .row>.col-xl-6:first-child>div:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .blog-section .row>.col-xl-6:first-child img {
        margin-bottom: 15px;
    }

    .blog-section .row>.col-xl-6:last-child {
        padding: 40px 30px;
    }

    .blog-section .row>.col-xl-6:first-child span {
        font-size: 28px;
        font-weight: bold;
        color: #2c3e50;
        margin: 10px 0;
    }

    .blog-section .row>.col-xl-6:first-child p {
        font-size: 28px;
        font-weight: bold;
        color: rgb(0, 0, 0);
        margin: 0;
    }



    .blog-section .row>.col-xl-6:last-child h2 {
        font-size: 28px;
        color: rgb(0, 0, 0);
        font-weight: bold;
        margin-bottom: 20px;
    }

    .blog-section .row>.col-xl-6:last-child p {
        font-size: 16px;
        line-height: 1.6;
        color: rgb(0, 0, 0);
    }
</style>
<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>bê tông ly tâm khánh
        hoà</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>trụ bê tông dự ứng lực
        khánh hoà</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>cọc bê tông ly tâm khánh
        hoà</a></h2>

<style>
    .headings-2 {
        display: flex;
        align-items: center;
        text-align: center;
        background: #fff;
        padding: 15px;
        border-bottom: 3px solid #ff0000;
        margin-bottom: 20px;
    }

    .listing-title-bar h2 {
        font-size: 22px;
        font-weight: 600;
        color: #ff0000;
        text-transform: uppercase;
        margin: 0;
        letter-spacing: 1px;
    }

    .news-wrap {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px 0;
    }

    .news-item {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .news-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }


    .img-box {
        width: 100%;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        border-radius: 10px 10px 0 0;
    }

    .img-box img {
        max-width: 100%;
        max-height: 100%;
        transition: transform 0.3s ease;
    }

    .news-item:hover .img-box img {
        transform: scale(1.1);
    }

    .title-tintuc {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        text-transform: uppercase;
        margin-top: 10px;
        transition: color 0.3s ease;
    }

    .title-tintuc:hover {
        color: #ff0000;
    }


    .starts {
        display: flex;
        justify-content: center;
        margin-top: 5px;
    }

    .starts i {
        color: #ffc107;
        font-size: 14px;
        margin: 0 2px;
    }


    .news-item-text p {
        font-size: 15px;
        font-weight: bold;
        color: #ff0000;
        margin: 5px 0;
    }

    /* ======= Nút gọi ngay ======= */
    .btn {
        background: #007bff;
        color: white;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        transition: background 0.3s ease;
    }

    .btn:hover {
        background: #0056b3;
    }

    .btn i {
        margin-right: 5px;
    }

    /* ======= Responsive cho mobile ======= */
    @media (max-width: 768px) {
        .news-item {
            width: 48%;
        }
    }

    @media (max-width: 576px) {
        .news-item {
            width: 100%;
        }
    }
</style>


<section class="blog blog-section blog-pots">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-1 order-2" data-aos="fade-up"
                data-aos-delay="150">
                <img src="hinhmenu/main-trai.png" alt="bê tông ty tâm điện lực khánh hoà">
            </div>




            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 order-xl-2 order-lg-2 order-md-2 order-1">
                <span class="blog-span">CỔ TY CỔ PHẦN TẬP ĐOÀN QUỐC TẾ</span> <br>
                <span class="blog-span">WINGROUP</span> <br>
                <br><br>
                <p style="color: #444444d1;"> <b>CÔNG TY CỔ PHẦN TẬP ĐOÀN QUỐC TẾ WINGROUP</b> tự hào là doanh nghiệp
                    nhận được
                    sự chuyển giao công nghệ tiên tiến của Nhật Bản về sản xuất sơn nước và sơn chống thấm. <br>

                    Để đáp ứng đòi hỏi ngày càng cao của Khách hàng, <b>CÔNG TY CỔ PHẦN TẬP ĐOÀN QUỐC TẾ WINGROUP</b>
                    luôn coi
                    chất lượng sản phẩm là tiêu chí hàng đầu cho sự phát triển bền lâu của sản phẩm. <br>
                    Sản phẩm sơn nội,
                    ngoại thất cao cấp được sản xuất trên dây chuyền công nghệ hiện đại của Nhật Bản và hoàn toàn tự
                    động hoá từ khâu nạp liệu khép kín cho tới khâu đóng gói sản phẩm. Sản phẩm sơn thuộc tập đoàn sử
                    dụng nguyên liệu ngoại nhập đạt tiêu chuẩn ISO 9001- 2015 và được nhiều tổ chức trên Thế giới kiểm
                    nghiệm, đánh giá và cấp chứng chỉ an toàn với môi trường. </p>
            </div>
        </div>
    </div>
</section>

<!-- START SECTION SHOP -->
<section class="blog blog-section blog-pots" style="padding: 10px;">
    <div class="container">
        <section class="headings-2 pt-0 hee">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <h2 style="text-transform: uppercase; color:#ff0000;font-weight: bold;">SƠN V-KOLOR</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="news-wrap">
            <div class="row">
                <?php
                //include_once("phan_trang.php");
                require('db.php');
                // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham where thuocloai=22 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 6";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                ?>
                <?php
                while ($row = mysqli_fetch_array($tv_1)) {
                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                    $id = "$row[id]";
                    $tieude = "$row[tieude]";
                    $giaban = $row['giaban'];
                    $url = $row['linkurl'];
                    $link = str_replace("?", "", strtolower("sanpham/$url"));
                    ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                        <div class="news-item"
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <a href="<?php echo "$link"; ?>" class="news-img-link">
                                <div class="img-box hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                        alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                </div>
                            </a>
                            <div class="news-item-text" style="padding: 10px; background: #f9f9f9; border-radius: 8px;">

                                <a href="<?php echo "$link"; ?>">
                                    <div class="title-tintuc"
                                        style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 10px;">
                                        <?php echo $tieude; ?>
                                    </div>
                                </a>
                                <ul class="starts text-center"
                                    style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                </ul>
                                <div style="text-align: center; font-weight: bold; color: #ff0000; margin-bottom: 10px;">
                                    <p style="margin-bottom: 0;">
                                        <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                        <span style='color:#ff0000; font-size: 15px;font-weight: bold;'>LIÊN HỆ</span>
                                    </p>
                                </div>
                                <div style="text-align: center;">
                                    <a class="btn btn-sm" href="#"
                                        style="background: #007bff; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                        <i class="fa fa-shopping-cart" style="color: white; padding-right: 5px;"></i>0923
                                        093 789
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP -->

<!-- START SECTION SHOP -->
<section class="blog blog-section blog-pots" style="padding: 10px;">
    <div class="container">
        <section class="headings-2 pt-0 hee">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <h2 style="text-transform: uppercase; color:#ff0000;font-weight: bold;">SƠN VINSPEX</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="news-wrap">
            <div class="row">
                <?php
                //include_once("phan_trang.php");
                require('db.php');
                // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham where thuocloai=21 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 4";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                ?>
                <?php
                while ($row = mysqli_fetch_array($tv_1)) {
                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                    $id = "$row[id]";
                    $tieude = "$row[tieude]";
                    $mota = "$row[mota]";
                    $giaban = $row['giaban'];
                    $url = $row['linkurl'];
                    $link = str_replace("?", "", strtolower("sanpham/$url"));
                    ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                        <div class="news-item"
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <a href="<?php echo "$link"; ?>" class="news-img-link">
                                <div class="img-box hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                        alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                </div>
                            </a>
                            <div class="news-item-text" style="padding: 10px; border-radius: 8px;">

                                <a href="<?php echo "$link"; ?>">
                                    <div class="title-tintuc"
                                        style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 10px;">
                                        <?php echo $tieude; ?>
                                    </div>
                                </a>
                                <ul class="starts text-center"
                                    style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                </ul>
                                <p><?php echo "$mota"; ?></p>

                                <div style="text-align: center; font-weight: bold; color: #ff0000; margin-bottom: 10px;">
                                    <p style="margin-bottom: 0;">
                                        <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                        <span style='color:#ff0000; font-size: 15px;font-weight: bold;'>LIÊN HỆ</span>
                                    </p>
                                </div>
                                <div style="text-align: center;">
                                    <a class="btn btn-sm" href="#"
                                        style="background: #007bff; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                        <i class="fa fa-shopping-cart" style="color: white; padding-right: 5px;"></i>0923
                                        093 789
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP -->

<!-- START SECTION SHOP -->
<section class="blog blog-section blog-pots" style="padding: 10px;">
    <div class="container">
        <section class="headings-2 pt-0 hee">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <h2 style="text-transform: uppercase; color:#ff0000;font-weight: bold;">SƠN VINSPEC-NANO</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="news-wrap">
            <div class="row">
                <?php
                //include_once("phan_trang.php");
                require('db.php');
                // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham where thuocloai=23 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 6";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                ?>
                <?php
                while ($row = mysqli_fetch_array($tv_1)) {
                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                    $id = "$row[id]";
                    $tieude = "$row[tieude]";
                    $giaban = $row['giaban'];
                    $url = $row['linkurl'];
                    $link = str_replace("?", "", strtolower("sanpham/$url"));
                    ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                        <div class="news-item"
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <a href="<?php echo "$link"; ?>" class="news-img-link">
                                <div class="img-box hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                        alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                </div>
                            </a>
                            <div class="news-item-text" style="padding: 10px; border-radius: 8px;">

                                <a href="<?php echo "$link"; ?>">
                                    <div class="title-tintuc"
                                        style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 10px;">
                                        <?php echo $tieude; ?>
                                    </div>
                                </a>
                                <ul class="starts text-center"
                                    style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                    <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i></li>
                                </ul>
                                <div style="text-align: center; font-weight: bold; color: #ff0000; margin-bottom: 10px;">
                                    <p style="margin-bottom: 0;">
                                        <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                        <span style='color:#ff0000; font-size: 15px;font-weight: bold;'>LIÊN HỆ</span>
                                    </p>
                                </div>
                                <div style="text-align: center;">
                                    <a class="btn btn-sm" href="#"
                                        style="background: #007bff; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                        <i class="fa fa-shopping-cart" style="color: white; padding-right: 5px;"></i>0923
                                        093 789
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP -->

<div class="container" style="padding-top:30px">

    <br>
    <div class="second-title">
        <div style="color: #c18847;
                font-size: 32px;
                line-height: 40px;
                font-weight: bold; text-align:center">CÔNG TY CỔ PHẦN BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HOÀ </div>

        <br>
        <div style="color: #333; text-align: center;
                font-size: 22px;
                line-height: 25px;
                font-weight: 500;">GIẢI PHÁP VỮNG CHẮC CHO CÔNG TRÌNH BỀN VỮNG</div>
        <br>
        <br>

    </div>
</div>


<div class="container" style="padding-bottom:40px">
    <div class="row">
        <div data-aos="zoom-in" data-aos-delay="150">
            <img src="hinhmenu/betongkhoa.jpg" alt="bê tông ly tâm khanh hoa">
        </div>


    </div>
</div>

<div style="color: #c18847;
                font-size: 32px;
                line-height: 40px;
                font-weight: bold; text-align:center">ĐIỆN LỰC KHÁNH HOÀ QUA NHỮNG CON SỐ </div>
<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <img src="hinhmenu/nam.gif" style="width:20%; height: 65px;" alt="cọc bê tông công trình">
                    <div class="count-me">
                        <p class="counter text-left" data-target="20" data-type="plus">0+</p>
                        <span class="title-haonhien">NĂM KINH NGHIỆM</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <img src="hinhmenu/nhanvien.gif" style="width:20%; height: 65px;" alt="cột điện bê tông ly tâm">
                    <div class="count-me">
                        <p class="counter text-left" data-target="1000" data-type="plus">0+</p>
                        <span class="title-haonhien">ĐỘI NGŨ NHÂN VIÊN</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0">
                    <img src="hinhmenu/khachhang.gif" style="width:20%; height: 65px;"
                        alt="bê tông ly tâm chất lượng cao">
                    <div class="count-me">
                        <p class="counter text-left" data-target="500" data-type="plus">0+</p>
                        <span class="title-haonhien">KHÁCH HÀNG/NĂM</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0 last">
                    <img src="hinhmenu/hailong.gif" style="width:20%; height: 65px;" alt="bê tông ly tâm chịu lực cao">
                    <div class="count-me">
                        <p class="counter text-left" data-target="96" data-type="percent">0%</p>
                        <span class="title-haonhien">TỶ LỆ HÀI LÒNG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const type = counter.getAttribute('data-type');
                    let count = 0;

                    const updateCounter = () => {
                        if (count < target) {
                            count++;
                            counter.innerText = type === 'percent' ? `${count}%` : `${count}+`;
                            setTimeout(updateCounter, 0);
                        } else {
                            counter.innerText = type === 'percent' ? `${target}%` : `${target}+`;
                        }
                    };

                    updateCounter();
                    observer.unobserve(counter);
                }
            });
        };

        const observer = new IntersectionObserver(callback, options);
        counters.forEach(counter => observer.observe(counter));
    });
</script>

<!-- END SECTION COUNTER UP -->

<!-- START SECTION POPULAR PLACES -->
<section class="popular-places">
    <div class="container">
        <div class="section-title">
            <span class="title-trangchu">Một Số Hình Ảnh Dịch Vụ </span>
            <span class="title-main ">CÔNG TY CỔ PHẦN BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HÒA</span>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-right">
                <!-- Image Box -->
                <a href="#" class="img-box hover-effect">
                    <img style="height:381px" src="hinhmenu/dienluc-kh1.jpg" class="img-responsive"
                        alt="điện lực khánh hoà">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">ĐIỆN LỰC</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-left">
                <!-- Image Box -->
                <a href="#" class="img-box hover-effect">
                    <img style="height:381px" src="hinhmenu/dienluc-kh2.jpg" class="img-responsive" alt="cọc bê tông ">
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-left">
                <!-- Image Box -->
                <a href="#" class="img-box hover-effect">
                    <img style="height:381px" src="hinhmenu/dienluc-kh3.jpg" class="img-responsive"
                        alt="trụ bê tông xây dựng">
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-right">
                <!-- Image Box -->
                <a href="#" class="img-box hover-effect no-mb">
                    <img style="height:381px" src="hinhmenu/dienluc-kh4.jpg" class="img-responsive"
                        alt="tiêu chuẩn bê tông ly tâm">
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-right">
                <!-- Image Box -->
                <a href="#" class="img-box hover-effect no-mb">
                    <img style="height:381px" src="hinhmenu/dienluc-kh6.jpg" class="img-responsive"
                        alt="trụ bê tông dự ứng lực">
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-left">
                <!-- Image Box -->
                <a href="#" class="img-box hover-effect no-mb x3">
                    <img style="height:381px" src="hinhmenu/dienluc-kh5.jpg" class="img-responsive"
                        alt="cọc bê tông công trình">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">ĐIỆN LỰC</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->

<div class="container" style="padding-top:40px">
    <div class="title-faq">CÁC CÂU HỎI THƯỜNG GẶP</div> <br>
    <div class="faq_container">
        <div class="faq_question">
            <div class="faq_question-text">
                <span class="title-cauhoi">Bê tông ly tâm là gì?</span>
            </div>
            <div class="icon">
                <div class="icon-shape"></div>
            </div>
        </div>
        <div class="answercont">
            <div class="answer">
                <p style=" margin: 20px 0; font-size: 16px; line-height: 2; font-weight: 500;">
                    Bê tông ly tâm là loại bê tông được sản xuất bằng cách quay ly tâm trong khuôn với tốc độ cao, giúp
                    hỗn hợp bê tông phân bố đồng đều và tạo ra kết cấu đặc chắc. Nhờ vào công nghệ này, sản phẩm có độ
                    bền cao, khả năng chịu lực tốt và chống thấm hiệu quả hơn so với bê tông đúc thông thường.
                </p>
            </div>
        </div>
    </div>
    <div class="faq_container">
        <div class="faq_question">
            <div class="faq_question-text">
                <span class="title-cauhoi">Làm thế nào để đặt hàng cột bê tông ly tâm?</span>
            </div>
            <div class="icon">
                <div class="icon-shape"></div>
            </div>
        </div>
        <div class="answercont">
            <div class="answer">
                <p style=" margin: 20px 0; font-size: 16px; line-height: 2; font-weight: 500;">
                    Khách hàng có thể liên hệ trực tiếp với chúng tôi qua hotline, email hoặc website để được tư vấn chi
                    tiết về sản phẩm, báo giá và hỗ trợ kỹ thuật. Đội ngũ chuyên viên của chúng tôi luôn sẵn sàng giúp
                    bạn lựa chọn giải pháp tối ưu nhất cho công trình của mình.
                </p>
            </div>
        </div>
    </div>
    <div class="faq_container">
        <div class="faq_question">
            <div class="faq_question-text">
                <span class="title-cauhoi">Cột bê tông ly tâm có ưu điểm gì so với cột bê tông thông thường?</span>
            </div>
            <div class="icon">
                <div class="icon-shape"></div>
            </div>
        </div>
        <div class="answercont">
            <div class="answer">
                <p style=" margin: 20px 0; font-size: 16px; line-height: 2; font-weight: 500;">
                    Cột bê tông ly tâm có khả năng chịu lực vượt trội, chống lại các tác động từ môi trường như mưa,
                    nắng, gió mạnh mà không bị nứt vỡ hay hư hại. Ngoài ra, trọng lượng của cột nhẹ hơn, giúp quá trình
                    vận chuyển và lắp đặt diễn ra nhanh chóng. Với độ bền cao, cột bê tông ly tâm còn giúp giảm thiểu
                    chi phí bảo trì, nâng cao tuổi thọ cho công trình.
                </p>
            </div>
        </div>
    </div>
    <div class="faq_container">
        <div class="faq_question">
            <div class="faq_question-text">
                <span class="title-cauhoi">Bê tông ly tâm được ứng dụng trong những công trình nào?</span>
            </div>
            <div class="icon">
                <div class="icon-shape"></div>
            </div>
        </div>
        <div class="answercont">
            <div class="answer">
                <p style=" margin: 20px 0; font-size: 16px; line-height: 2; font-weight: 500;">
                    Loại bê tông này được ứng dụng rộng rãi trong ngành điện lực để sản xuất cột điện truyền tải và phân
                    phối. Ngoài ra, nó còn được sử dụng trong các hệ thống chiếu sáng đô thị, công trình hàng rào, cầu
                    đường, nhà xưởng và kho bãi. Nhờ vào độ bền cao và khả năng chịu tải tốt, bê tông ly tâm là lựa chọn
                    lý tưởng cho nhiều loại công trình hạ tầng và dân dụng.
                </p>
            </div>
        </div>
    </div>
    <div class="faq_container">
        <div class="faq_question">
            <div class="faq_question-text">
                <span class="title-cauhoi">Cột bê tông ly tâm có đạt tiêu chuẩn chất lượng không?</span>
            </div>
            <div class="icon">
                <div class="icon-shape"></div>
            </div>
        </div>
        <div class="answercont">
            <div class="answer">
                <p style=" margin: 20px 0; font-size: 16px; line-height: 2; font-weight: 500;">
                    Tất cả các sản phẩm bê tông ly tâm đều phải tuân theo các tiêu chuẩn quốc gia về độ bền, khả năng
                    chịu tải và an toàn điện lực. Chúng tôi luôn kiểm tra nghiêm ngặt từng lô sản xuất để đảm bảo đáp
                    ứng đầy đủ yêu cầu kỹ thuật, giúp khách hàng yên tâm khi sử dụng cho các công trình quan trọng.
                </p>
            </div>
        </div>
    </div>
    <div class="faq_container">
        <div class="faq_question">
            <div class="faq_question-text">
                <span class="title-cauhoi">Thời gian thi công lắp đặt cột bê tông ly tâm có nhanh không?</span>
            </div>
            <div class="icon">
                <div class="icon-shape"></div>
            </div>
        </div>
        <div class="answercont">
            <div class="answer">
                <p style=" margin: 20px 0; font-size: 16px; line-height: 2; font-weight: 500;">
                    Cột bê tông ly tâm được sản xuất sẵn theo kích thước tiêu chuẩn, giúp rút ngắn thời gian lắp đặt
                    đáng kể. Quá trình thi công không yêu cầu quá nhiều nhân lực và thiết bị phức tạp, giúp các công
                    trình điện lực và dân dụng được hoàn thành nhanh chóng, đảm bảo tiến độ xây dựng.
                </p>
            </div>
        </div>
    </div>
    <div class="faq_container">
        <div class="faq_question">
            <div class="faq_question-text">
                <span class="title-cauhoi">Có thể đặt sản xuất cột bê tông ly tâm theo yêu cầu riêng không?</span>
            </div>
            <div class="icon">
                <div class="icon-shape"></div>
            </div>
        </div>
        <div class="answercont">
            <div class="answer">
                <p style=" margin: 20px 0; font-size: 16px; line-height: 2; font-weight: 500;">
                    Chúng tôi có thể sản xuất cột bê tông ly tâm theo các yêu cầu kỹ thuật cụ thể của từng công trình.
                    Nếu khách hàng cần sản phẩm có kích thước đặc biệt hoặc yêu cầu chịu lực cao hơn tiêu chuẩn, chúng
                    tôi sẽ tư vấn và thiết kế giải pháp phù hợp để đáp ứng nhu cầu sử dụng.
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    let questions = document.querySelectorAll(".faq_question");

    questions.forEach((question) => {
        let icon = question.querySelector(".icon-shape");

        question.addEventListener("click", (event) => {
            const active = document.querySelector(".faq_question.active");
            const activeIcon = document.querySelector(".icon-shape.active");

            if (active && active !== question) {
                active.classList.toggle("active");
                activeIcon.classList.toggle("active");
                active.nextElementSibling.style.maxHeight = 0;
            }

            question.classList.toggle("active");
            icon.classList.toggle("active");

            const answer = question.nextElementSibling;

            if (question.classList.contains("active")) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = 0;
            }
        });
    });
</script>
<!-- STAR SECTION PARTNERS -->
<div class="partners bg-white rec-pro">
    <div class="container-fluid">
        <div class="owl-carousel style2">
            <?php
            //include_once("phan_trang.php");
            require('db.php');
            $tv = "select * from doi_tac order by id desc limit 0,6";

            $tv_1 = mysqli_query($link, $tv);
            $a_tv_1 = mysqli_query($link, $tv);
            ?>
            <?php
            while ($row = mysqli_fetch_array($tv_1)) {
                $link_hinh = "HinhCTSP/$row[hinhanh]";
                $id = "$row[id]";
                $tieude_en = "$row[tieude_en]";
                $tieude = "$row[tieude]";
                $mota = "$row[mota]";
                $url = "$row[linkurl]";
                $link = str_replace("?", "", strtolower("tintuc/$url"));
                $ngay = "$row[ngay]";
                ?>
                <div class="owl-item" data-aos="fade-up"><img src="<?php echo "$link_hinh"; ?>"
                        alt="Cột bê tông ly tâm điện lực"></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->