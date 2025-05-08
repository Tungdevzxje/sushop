<style>
    .info-help .project-single {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-help .project-single:hover {
        transform: translateY(-5px);
        box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
    }

    .info-help .homes-img img {
        transition: transform 0.3s ease;
    }

    .info-help .project-single:hover .homes-img img {
        transform: scale(1.05);
    }

    .info-help .title-pccc {
        display: block;
        transition: transform 0.3s ease;
    }

    .info-help .project-single:hover .title-pccc {
        transform: translateY(-3px);
    }


    .img-box {
        position: relative;
        display: inline-block;
    }

    .img-box .hot-icon {
        position: absolute;
        top: 5px;
        left: 5px;
        width: 35px;
        height: auto;
        z-index: 10;
    }

    @keyframes shake {
        0% {
            transform: rotate(-5deg) scale(1);
        }

        100% {
            transform: rotate(5deg) scale(1.05);
        }
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
        color: #ff385c;
        /* Màu xanh */
        transition: color 0.3s;
    }


    .news-itemm:hover {
        background: #ff385c;
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
        background-color: #ff385c;
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

    .title-pccc {
        text-transform: capitalize;
        color: #ffa1a1;
        font-size: 18px;
        font-weight: 600;
        display: block;
        text-align: center;
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
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <div style="padding:10px;">
                <h2 style="font-weight: bold; color:#4CAF50; padding-top: 100px;">ĐỒNG PHỤC CÔNG SỞ</h2>
                <div style="font-weight: bold;"><a href="trangchu">Trang chủ </a> &nbsp;/&nbsp; Dịch vụ </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh cấp 1
        đà nẵng</a>
</h2>
<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh cấp 2
        đà nẵng</a></h1>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh cấp 3
        đà nẵng</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh tiểu
        học đà nẵng</a>
</h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh trung
        học đà nẵng</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục giáo viên đà
        nẵng</a>
</h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>quần tây áo trắng học sinh
        đà nẵng</a></h3>
<!-- START SECTION BLOG -->
<section class="blog-section">
    <div class="container">
        <div class="news-wrap">
            <div class="row">
                <?php
                require('db.php');
                include('phantrang/phantrang_tintuc.php');
                // Helper function to escape output
                function escape($value)
                {
                    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
                // Initialize pager and set limit
                $p = new pager;
                $limit = 24;
                $start = $p->findStart($limit);

                // Count total items and calculate total pages
                $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM tin_dichvu");
                $countRow = mysqli_fetch_assoc($countResult);
                $count = $countRow['total'];
                $pages = $p->findPages($count, $limit);

                // Fetch paginated data
                $sql = mysqli_query($link, "SELECT * FROM tin_dichvu ORDER BY id ASC LIMIT $start, $limit");
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
                    $link = str_replace("?", "", strtolower("san-pham/$url"));

                    ?>
                    <div class="col-lg-3 col-md-6 col-xs-12" style="margin-bottom: 20px; padding: 10px;">
                        <div class="news-item"
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <a href="<?php echo $link; ?>">
                                <div class="news-item-img hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/Hinhdichvu/<?php echo $hinhanh; ?>"
                                        alt="<?php echo "$tieude_en"; ?>">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="<?php echo "$link"; ?>">
                                    <h3 style="font-size:16px; line-height:25px"><?php echo $tieude_en; ?></h3>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
</section>
<!-- END SECTION BLOG -->

<!-- tabs sản phẩm pccc .start -->
<div class="container py-5">
    <h2 style="font-weight: bold; color:#4CAF50; padding-top: 30px; text-align:center; margin-bottom:40px">ĐỒNG PHỤC HỌC
        SINH</h2>
    <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                <i class="bi bi-question-circle fs-3 mb-3"></i><br>
                SẢN PHẨM NỔI BẬT
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="binhchuachay-tab" data-bs-toggle="tab" data-bs-target="#binhchuachay-tab-pane"
                type="button" role="tab" aria-controls="binhchuachay-tab-pane" aria-selected="false">
                <i class="bi bi-question-circle fs-3 mb-3"></i><br>
                ĐỒNG PHỤC CẤP 1
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="phunchuachay-tab" data-bs-toggle="tab" data-bs-target="#phunchuachay-tab-pane"
                type="button" role="tab" aria-controls="phunchuachay-tab-pane" aria-selected="false">
                <i class="bi bi-question-circle fs-3 mb-3"></i><br>
                ĐỒNG PHỤC CẤP 2
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="maybomcc-tab" data-bs-toggle="tab" data-bs-target="#maybomcc-tab-pane"
                type="button" role="tab" aria-controls="maybomcc-tab-pane" aria-selected="false">
                <i class="bi bi-question-circle fs-3 mb-3"></i><br>
                ĐỒNG PHỤC CẤP 3
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tuchuachay-tab" data-bs-toggle="tab" data-bs-target="#tuchuachay-tab-pane"
                type="button" role="tab" aria-controls="tuchuachay-tab-pane" aria-selected="false">
                <i class="bi bi-question-circle fs-3 mb-3"></i><br>
                ĐỒNG PHỤC THỂ DỤC
            </button>
        </li>
    </ul>
    <div class="tab-content accordion" id="myTabContent">
        <div class="tab-pane fade show active accordion-item" id="home-tab-pane" role="tabpanel"
            aria-labelledby="home-tab" tabindex="0">
            <h2 class="accordion-header d-lg-none" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <b>SẢN PHẨM NỔI BẬT</b>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show d-lg-block" aria-labelledby="headingOne"
                data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">
                        <?php
                        //include_once("phan_trang.php");
                        require('db.php');
                        // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                        $tv = "SELECT * FROM ma_sanpham WHERE noibat = 1 ORDER BY id DESC LIMIT 8;";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude = "$row[tieude]";
                            $giaban = $row['giaban'];
                            $mota = "$row[mota]";
                            $url = $row['linkurl'];
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                            ?>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                                <div class="news-item"
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                    <a href="<?php echo "$link"; ?>" class="news-img-link">
                                        <div class="img-box hover-effect" style="position: relative;">
                                            <img class="hot-icon" src="hinhmenu/hot-icon.png" alt="HOT">
                                            <img class="img-responsive"
                                                src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                                alt="<?php echo $tieude; ?>" />
                                        </div>

                                    </a>
                                    <div class="news-item-text" style="padding: 10px; border-radius: 8px;">
                                        <a href="<?php echo "$link"; ?>">
                                            <h3>
                                                <?php echo $tieude; ?>
                                            </h3>
                                        </a>
                                        <ul class="starts text-center"
                                            style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                        </ul>
                                        <div
                                            style="text-align: center; font-weight: bold; color: #4CAF50; margin-bottom: 10px;">
                                            <p style="margin-bottom: 0;">
                                                <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                                <span style='color:#4CAF50; font-size: 15px;font-weight: bold;'>LIÊN
                                                    HỆ</span>
                                            </p>
                                        </div>
                                        <div style="text-align: center;">
                                            <a class="btn btn-sm" href="tel:0905108532"
                                                style="background: #4CAF50; color: white;font-weight:bold; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                                <i class="fa fa-shopping-cart"
                                                    style="color: white; padding-right: 5px;"></i> 0905 108 532
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade accordion-item" id="binhchuachay-tab-pane" role="tabpanel"
            aria-labelledby="binhchuachay-tab" tabindex="0">
            <h2 class="accordion-header d-lg-none" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <b>ĐỒNG PHỤC CẤP 1</b>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree"
                data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">
                        <?php
                        //include_once("phan_trang.php");
                        require('db.php');
                        // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                        $tv = "SELECT * FROM ma_sanpham where thuocloai = 55 order by id desc LIMIT 8";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude = "$row[tieude]";
                            $giaban = $row['giaban'];
                            $mota = "$row[mota]";
                            $url = $row['linkurl'];
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                            ?>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                                <div class="news-item"
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                    <a href="<?php echo "$link"; ?>" class="news-img-link">
                                        <div class="img-box hover-effect">
                                            <img class="img-responsive"
                                                src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                                alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                        </div>
                                    </a>
                                    <div class="news-item-text" style="padding: 10px; border-radius: 8px;">

                                        <a href="<?php echo "$link"; ?>">
                                            <h3>
                                                <?php echo $tieude; ?>
                                            </h3>
                                        </a>
                                        <ul class="starts text-center"
                                            style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                        </ul>
                                        <div
                                            style="text-align: center; font-weight: bold; color: #4CAF50; margin-bottom: 10px;">
                                            <p style="margin-bottom: 0;">
                                                <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                                <span style='color:#4CAF50; font-size: 15px;font-weight: bold;'>LIÊN
                                                    HỆ</span>
                                            </p>
                                        </div>
                                        <div style="text-align: center;">
                                            <a class="btn btn-sm" href="tel:0905108532"
                                                style="background: #4CAF50; color: white;font-weight:bold; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                                <i class="fa fa-shopping-cart"
                                                    style="color: white; padding-right: 5px;"></i> 0905 108 532
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade accordion-item" id="phunchuachay-tab-pane" role="tabpanel"
            aria-labelledby="phunchuachay-tab" tabindex="0">
            <h2 class="accordion-header d-lg-none" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <b>ĐỒNG PHỤC CẤP 2</b>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingFour"
                data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">
                        <?php
                        //include_once("phan_trang.php");
                        require('db.php');
                        // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                        $tv = "SELECT * FROM ma_sanpham where thuocloai = 56 order by id desc LIMIT 8";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude = "$row[tieude]";
                            $giaban = $row['giaban'];
                            $mota = "$row[mota]";
                            $url = $row['linkurl'];
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                            ?>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                                <div class="news-item"
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                    <a href="<?php echo "$link"; ?>" class="news-img-link">
                                        <div class="img-box hover-effect">
                                            <img class="img-responsive"
                                                src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                                alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                        </div>
                                    </a>
                                    <div class="news-item-text" style="padding: 10px; border-radius: 8px;">

                                        <a href="<?php echo "$link"; ?>">
                                            <h3>
                                                <?php echo $tieude; ?>
                                            </h3>
                                        </a>
                                        <ul class="starts text-center"
                                            style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                        </ul>
                                        <div
                                            style="text-align: center; font-weight: bold; color: #4CAF50; margin-bottom: 10px;">
                                            <p style="margin-bottom: 0;">
                                                <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                                <span style='color:#4CAF50; font-size: 15px;font-weight: bold;'>LIÊN
                                                    HỆ</span>
                                            </p>
                                        </div>
                                        <div style="text-align: center;">
                                            <a class="btn btn-sm" href="tel:0905108532"
                                                style="background: #4CAF50; color: white;font-weight:bold; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                                <i class="fa fa-shopping-cart"
                                                    style="color: white; padding-right: 5px;"></i> 0905 108 532
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade accordion-item" id="maybomcc-tab-pane" role="tabpanel" aria-labelledby="maybomcc-tab"
            tabindex="0">
            <h2 class="accordion-header d-lg-none" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <b>ĐỒNG PHỤC CẤP 3</b>
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingFive"
                data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">
                        <?php
                        //include_once("phan_trang.php");
                        require('db.php');
                        // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                        $tv = "SELECT * FROM ma_sanpham where thuocloai = 57 order by id desc LIMIT 8";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude = "$row[tieude]";
                            $giaban = $row['giaban'];
                            $mota = "$row[mota]";
                            $url = $row['linkurl'];
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                            ?>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                                <div class="news-item"
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                    <a href="<?php echo "$link"; ?>" class="news-img-link">
                                        <div class="img-box hover-effect">
                                            <img class="img-responsive"
                                                src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                                alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                        </div>
                                    </a>
                                    <div class="news-item-text" style="padding: 10px; border-radius: 8px;">

                                        <a href="<?php echo "$link"; ?>">
                                            <h3>
                                                <?php echo $tieude; ?>
                                            </h3>
                                        </a>
                                        <ul class="starts text-center"
                                            style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                        </ul>
                                        <div
                                            style="text-align: center; font-weight: bold; color: #4CAF50; margin-bottom: 10px;">
                                            <p style="margin-bottom: 0;">
                                                <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                                <span style='color:#4CAF50; font-size: 15px;font-weight: bold;'>LIÊN
                                                    HỆ</span>
                                            </p>
                                        </div>
                                        <div style="text-align: center;">
                                            <a class="btn btn-sm" href="tel:0905108532"
                                                style="background: #4CAF50; color: white;font-weight:bold; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                                <i class="fa fa-shopping-cart"
                                                    style="color: white; padding-right: 5px;"></i> 0905 108 532
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade accordion-item" id="tuchuachay-tab-pane" role="tabpanel"
            aria-labelledby="tuchuachay-tab" tabindex="0">
            <h2 class="accordion-header d-lg-none" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <b>ĐỒNG PHỤC THỂ DỤC</b>
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingSeven"
                data-bs-parent="#myTabContent">
                <div class="accordion-body">
                    <div class="row">
                        <?php
                        //include_once("phan_trang.php");
                        require('db.php');
                        // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
                        $tv = "SELECT * FROM ma_sanpham where thuocloai = 52 order by id desc LIMIT 8";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude = "$row[tieude]";
                            $giaban = $row['giaban'];
                            $mota = "$row[mota]";
                            $url = $row['linkurl'];
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                            ?>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                                <div class="news-item"
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                    <a href="<?php echo "$link"; ?>" class="news-img-link">
                                        <div class="img-box hover-effect">
                                            <img class="img-responsive"
                                                src="HinhCTSP/HinhSanPham/<?php echo $row["hinhanh"]; ?>"
                                                alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                        </div>
                                    </a>
                                    <div class="news-item-text" style="padding: 10px; border-radius: 8px;">

                                        <a href="<?php echo "$link"; ?>">
                                            <h3>
                                                <?php echo $tieude; ?>
                                            </h3>
                                        </a>
                                        <ul class="starts text-center"
                                            style="padding: 0px; margin-top: 0px; margin-bottom: 10px; list-style: none; display: flex; justify-content: center;">
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                            <li style="margin: 0 2px;"><i class="fa fa-star" style="color: #ffc107;"></i>
                                            </li>
                                        </ul>
                                        <div
                                            style="text-align: center; font-weight: bold; color: #4CAF50; margin-bottom: 10px;">
                                            <p style="margin-bottom: 0;">
                                                <span style='color:#000; font-size: 14px;'>GIÁ:</span>
                                                <span style='color:#4CAF50; font-size: 15px;font-weight: bold;'>LIÊN
                                                    HỆ</span>
                                            </p>
                                        </div>
                                        <div style="text-align: center;">
                                            <a class="btn btn-sm" href="tel:0905108532"
                                                style="background: #4CAF50; color: white;font-weight:bold; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                                <i class="fa fa-shopping-cart"
                                                    style="color: white; padding-right: 5px;"></i> 0905 108 532
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-all">
        <a href="dong-phuc-hoc-sinh" class="btn btn-outline-light">Xem tất cả</a>
    </div>
</div>
<!-- tabs sản phẩm pccc .end -->

<section class="blog-section">
    <div class="container">
        <div class="news-wrap">
            <div class="row">
                <div style="color: #c00;
                font-size: 23px;
                line-height: 40px;
                font-weight: bold; text-align:center; margin-bottom:20px;">TIN TỨC MỚI NHẤT</div>
                <?php
                require('db.php');
                $sql = mysqli_query($link, "SELECT * FROM tin_tintuc ORDER BY id ASC LIMIT 4");
                while ($row = mysqli_fetch_assoc($sql)) {
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
                    <div class="col-lg-3 col-md-6 col-xs-12" style="margin-bottom: 20px; padding: 10px;">
                        <div class="news-item"
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <a href="<?php echo $link; ?>">
                                <div class="news-item-img hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/Hinhtintuc/<?php echo $hinhanh; ?>"
                                        alt="<?php echo "$tieude_en"; ?>">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="<?php echo "$link"; ?>">
                                    <h3 style="font-size:16px; line-height:25px"><?php echo $tieude_en; ?></h3>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
</section>

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
                        alt="Đèn báo cháy tại Tam Kỳ"></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->