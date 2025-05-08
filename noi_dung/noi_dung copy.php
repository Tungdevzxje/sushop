<style>
    .box-shadow-fit {
        display: inline-block;
        width: fit-content;
        padding: 15px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);

    }

    .box-shadow-fit p {
        padding-top: 10px;
    }

    .news-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
        border-radius: 8px;
    }

    .news-itemm {
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #333;
        font-size: 16px;
        font-weight: 600;
        padding: 8px;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s;
    }

    .news-icon {
        font-size: 18px;
        color: #007bff;
        /* Màu xanh */
        transition: color 0.3s;
    }


    .news-itemm:hover {
        background: #007bff;
        color: white;
    }

    .news-itemm:hover .news-icon {
        color: white;
    }

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

    .blog-section .row>.col-xl-6:last-child {
        padding: 40px 30px;
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


<div class="container tren">
    <div class="row">
        <!-- Phần tin chính + danh sách tin -->
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <!-- Tin chính -->
                <div class="col-lg-7 col-md-12 mb-3">
                    <?php
                    require('db.php');
                    $a = "select * from tin_tintuc order by id desc limit 0,1";
                    $tv = mysqli_query($link, $a);
                    ?>
                    <?php while ($row = mysqli_fetch_array($tv)) { ?>
                        <a href="tintuc/<?php echo strtolower(str_replace("?", "", urlencode($row['linkurl']))); ?>"></a>
                            <img src="HinhCTSP/Hinhtintuc/<?php echo $row['hinhanh']; ?>"
                                alt="<?php echo $row['tieude_en']; ?>">
                            <div>
                                <span class="title-span"><?php echo $row['tieude_en']; ?></span>
                            </div>
                        </a>
                        <p><?php echo $row['mota']; ?></p>
                    <?php } ?>
                </div>

                <!-- Danh sách tin liên quan -->
                <div class="col-lg-5 col-md-12">
                    <div class="news-list">
                        <?php
                        $a = "SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 6";
                        $tv = mysqli_query($link, $a);
                        ?>
                        <?php while ($row = mysqli_fetch_array($tv)) { ?>
                            <a href="tintuc/<?php echo strtolower(str_replace("?", "", $row['linkurl'])); ?>"
                                class="news-itemm">
                                <i class="fa fa-arrow-right news-icon" aria-hidden="true"></i>
                                <span class="news-title"><?php echo $row['tieude_en']; ?></span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Phần giới thiệu -->

        <div class="col-lg-4 col-md-12 d-flex justify-content-center">
            <div class="box-shadow-fit">
                <img class="img-fluid rounded" src="hinhmenu/kai-dienluc.jpg" alt="ỐNG BÊ TÔNG LY TÂM KHÁNH HÒA">
                <p style="color: #333;"> Chúng tôi - <b>CÔNG TY CP BÊ TÔNG ĐIỆN LỰC KHÁNH HOÀ</b> ( gọi tắt
                    là “ KPCECO”) xin được giới thiệu đến Quý khách hàng về các sản phẩm và dịch vụ chuyên nghành của
                    Công ty chúng tôi và trân trọng cảm ơn Quý vị đã dành cho Công ty chúng tôi cơ hội được gửi đến Quý
                    vị HỒ SƠ NĂNG LỰC với tư cách là một đơn vị chuyên cung cấp các sản phẩm bê tông công nghiệp đặc
                    thù, uy tín. </p>
            </div>
        </div>

    </div>
</div>








<section class="blog blog-section blog-pots">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-1 order-2" data-aos="fade-up"
                data-aos-delay="150">
                <img src="hinhmenu/main-trai.png" alt="bê tông ty tâm điện lực khánh hoà">
            </div>




            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 order-xl-2 order-lg-2 order-md-2 order-1">
                <span class="blog-span">CÔNG TY CỔ PHẦN BÊ TÔNG LY TÂM</span> <br>
                <span class="blog-span">ĐIỆN LỰC KHÁNH HÒA</span> <br>
                <br><br>
                <p style="color: #444444d1;"> Chúng tôi - <b>Công ty CP Bê tông ly tâm Điện lực Khánh Hòa</b> ( gọi tắt
                    là “ KPCECO”) xin được giới thiệu đến Quý khách hàng về các sản phẩm và dịch vụ chuyên nghành của
                    Công ty chúng tôi và trân trọng cảm ơn Quý vị đã dành cho Công ty chúng tôi cơ hội được gửi đến Quý
                    vị HỒ SƠ NĂNG LỰC với tư cách là một đơn vị chuyên cung cấp các sản phẩm bê tông công nghiệp đặc
                    thù, uy tín. </p>
                <p style="color: #444444d1;"> Là một Công ty chuyên cung cấp các sản phẩm bê tông công nghiệp đặc thù
                    như trụ điện , ống cống, gối cống, cọc cừ,… cho các Điện lực, cho các công trình xây lắp điện, các
                    công trình xây dựng, công trình cấp thoát nước, công trình cao tốc… Thương hiệu Công ty CP Bê tông
                    ly tâm Điện lực Khánh Hòa gắn liền với nhiều công trình tầm cỡ khu vực. Sự ghi nhận về chất lượng và
                    mỹ thuật của các nhà đầu tư luôn giúp Công ty được mời dự thầu đầu tiên cho các công trình lớn. </p>
            </div>
        </div>
    </div>
</section>

<!-- END SECTION SHOP -->

<!-- START SECTION FEATURED PROPERTIES -->
<section class="recently portfolio bg-white-1 rec-pro2 hmp ho-17">
    <div class="container-fluid">
        <div class="sec-title">
            <div class="title-trangchu" style="padding-bottom: 40px;">DỊCH VỤ <span>CHÚNG TÔI MANG ĐẾN</span></div>
        </div>
        <div class="row portfolio-items">
            <?php
            require('db.php');
            include('phantrang/phantrang_dichvu.php');
            // Helper function to escape output
            function escape($value)
            {
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }
            // Initialize pager and set limit
            $p = new pager;
            $limit = 12;
            $start = $p->findStart($limit);

            // Count total items and calculate total pages
            $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM tin_tintuc
            ");
            $countRow = mysqli_fetch_assoc($countResult);
            $count = $countRow['total'];
            $pages = $p->findPages($count, $limit);

            // Fetch paginated data
            $limit = 6;
            $sql = mysqli_query($link, "SELECT * FROM tin_tintuc ORDER BY id ASC LIMIT $start, $limit");
            ?>
            <?php while ($row = mysqli_fetch_assoc($sql)): ?>
                <?php
                $id = $row['id'];
                $ten = escape($row['ten']);
                $hinhanh = escape($row['hinhanh']);
                $tieude = escape($row['tieude']);
                $tieude_en = escape($row['tieude_en']);
                $mota = escape($row['mota']);
                $ngay = escape($row['ngay']);
                $url = escape($row['linkurl']);
                $link = str_replace("?", "", strtolower("tintuc/$url"));

                ?>
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale" data-aos="zoom-in" data-aos-delay="150">
                    <div class="landscapes listing-item compact thehp-1">
                        <a href="<?php echo "$link"; ?>" class="recent-16 hmp" data-aos="fade-up">
                            <div class="recent-img16 img-fluid img-center"
                                style="background-image: url(HinhCTSP/Hinhtintuc/<?php echo $hinhanh; ?>);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <h3 style="color: #fff;" class="recent-title"><?php echo "$tieude_en" ?></h3>
                            </div>
                            <div class="view-proper">Xem chi tiết</div>
                        </a>
                    </div>

                </div>

            <?php endwhile; ?>
        </div>
        <!-- <div class="bg-all">
            <a href="codienlanh-danang" class="btn btn-outline-light">Tìm hiểu thêm</a>
        </div> -->
    </div>
</section>
<!-- END SECTION FEATURED PROPERTIES -->

<!-- START SECTION INFO -->
<section _ngcontent-bgi-c3="" class="featured-boxes-area bg-white-1">
    <div class="title-trangdienlanh" style="padding-bottom:40px">CÔNG TY BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HOÀ – TIÊN PHONG
        TRONG CÔNG NGHỆ XÂY DỰNG</div>

    <div _ngcontent-bgi-c3="" class="container">
        <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
            <div _ngcontent-bgi-c3="" class="row m-0">
                <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6 p-0" data-aos="fade-up"
                    data-aos-delay="150">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="hinhmenu/quymo.png" width="50"
                                alt="Công ty bê tông ly tâm"></div>
                        <div class="mt-0" _ngcontent-bgi-c3="" style="font-size:18px"><b>Quy Mô Sản Xuất Lớn</b></div>
                        <p _ngcontent-bgi-c3="">Sở hữu nhà máy hiện đại với công suất cao, chuyên sản xuất bê tông ly
                            tâm phục vụ các công trình điện lực, hạ tầng và xây dựng.</p><a _ngcontent-bgi-c3=""
                            class="read-more-btn"></a>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6  p-0" data-aos="fade-up"
                    data-aos-delay="250">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="hinhmenu/doingu.png" width="50"
                                alt="Cột bê tông ly tâm bền vững"></div>
                        <div class="mt-0" _ngcontent-bgi-c3="" style="font-size:18px"><b>Đội Ngũ Chuyên Nghiệp</b></div>
                        <p _ngcontent-bgi-c3="">Hơn 1000 kỹ sư, công nhân lành nghề, đảm bảo quy trình sản xuất và kiểm
                            soát chất lượng nghiêm ngặt.</p><a _ngcontent-bgi-c3="" class="read-more-btn"></a>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6  p-0" data-aos="fade-up"
                    data-aos-delay="350">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="hinhmenu/hethong-phanphoi.png"
                                width="50" alt="Cột bê tông ly tâm giá rẻ"></div>
                        <div class="mt-0" _ngcontent-bgi-c3="" style="font-size:18px"><b>Hệ Thống Phân Phối Rộng</b>
                        </div>
                        <p _ngcontent-bgi-c3="">Cung cấp sản phẩm bê tông ly tâm cho nhiều tỉnh thành, phục vụ đa dạng
                            dự án từ dân dụng đến công nghiệp.</p><a _ngcontent-bgi-c3="" class="read-more-btn"></a>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6  p-0" data-aos="fade-up"
                    data-aos-delay="450">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon"><img src="hinhmenu/cong-nghe.png" width="65"
                                alt="công nghệ sản xuất bê tông tiên tiến"></div>
                        <div class="mt-0" _ngcontent-bgi-c3="" style="font-size:18px"><b>Công Nghệ Tiên Tiến</b></div>
                        <p _ngcontent-bgi-c3="">Áp dụng dây chuyền sản xuất hiện đại, đạt tiêu chuẩn chất lượng cao, đáp
                            ứng yêu cầu kỹ thuật khắt khe của ngành xây dựng và điện lực.</p><a _ngcontent-bgi-c3=""
                            class="read-more-btn"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INFO -->

<!-- START SECTION BLOG -->
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="section-title col-md-5">
                <span class="title-trangchu">BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HOÀ</span>
                <span class="title-main ">Giải Pháp Kết Cấu Vững Chắc Cho Công Trình Lớn</span>
            </div>
        </div>
        <div class="news-wrap">
            <div class="row">
                <?php
                require('db.php');
                //$tv = "select * from tin_ads order by id desc limit 0,4";
                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham  ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 4";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                ?>
                <?php
                while ($row = mysqli_fetch_array($tv_1)) {
                    $id = $row['id'];
                    $ten = escape($row['ten']);
                    $hinhanh = escape($row['hinhanh']);
                    $tieude = escape($row['tieude']);
                    $mota = escape($row['mota']);
                    $ngay = escape($row['ngay']);
                    $giaban = $row['giaban'];
                    $url = escape($row['linkurl']);
                    $link = str_replace("?", "", strtolower("sanpham/$url"));
                    ?>
                    <div class="col-xl-3 col-md-6 col-xs-12 d-flex">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                            <a href="<?php echo "$link"; ?>" class="news-img-link">
                                <div class="news-item-img hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/HinhSanPham/<?php echo $hinhanh; ?>"
                                        alt="<?php echo "$tieude"; ?>">
                                </div>
                            </a>
                            <div class="news-item-text" style="position: relative; z-index: 1;">
                                <a href="<?php echo "$link"; ?>">
                                    <h3><?php echo "$tieude"; ?></h3>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.facebook.com/watch/?v=1104099027862534" width="500" height="280"
                    style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"></iframe>

            </div>
        </div>

        <div class="col-lg-6">
            <div style="color: #ff0000;
                font-size: 32px;
                line-height: 40px;
                font-weight: bold;padding-top: 15px; padding-bottom:40px"> Tin Tức Mới Nhất
            </div>
            <div class="list-group">
                <?php
                require('db.php');
                $tv = "SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 3";
                $a_tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($a_tv)) {
                    $id = $row['id'];
                    $tieude = $row['tieude'];
                    $tieude_en = $row['tieude_en'];
                    $mota = $row['mota'];
                    $hinhanh = $row['hinhanh'];
                    $ngay = $row['ngay'];
                    $url = $row['linkurl'];
                    $link = str_replace("?", "", strtolower("tintuc/$url"));
                    ?>
                    <a href="<?php echo $link; ?>">
                        <div style="display: flex; align-items: center;">
                            <img style="width:100px; margin-right: 10px;"
                                src="HinhCTSP/Hinhtintuc/<?php echo "$hinhanh"; ?>" alt="sơn wingroup">
                            <div>
                                <h3 class="mb-1"><?php echo $tieude_en; ?></h3>
                            </div>
                        </div>
                    </a>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

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