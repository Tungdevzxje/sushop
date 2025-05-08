<style>
    .title-spann {
        text-transform: uppercase;
        color: #ff0000;
        font-weight: bold;
        font-size: 25px;
        text-align: center;
        margin-bottom: 30px;
    }

    .bgphantranga {
        padding: 10px;
        background-color: #f9f9f9;
        /* border: 1px solid #ddd; */
        border-radius: 5px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .phantrang {
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #333;
    }

    .phantrang a {
        text-decoration: none;
        color: #007bff;
        margin: 0 5px;
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    .phantrang a:hover {
        background-color: #007bff;
        color: #fff;
    }

    .phantrang .current {
        font-weight: bold;
        color: #fff;
        background-color: #007bff;
        padding: 5px 10px;
        border-radius: 4px;
        margin: 0 5px;
    }

    .phantrang .back,
    .phantrang .next {
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .phantrang .back i,
    .phantrang .next i {
        font-size: 12px;
        margin: 0 2px;
    }

    .phantrang .back:hover,
    .phantrang .next:hover {
        background-color: #0056b3;
        color: #fff;
        cursor: pointer;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


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

<!-- START SECTION ABOUT -->
<section class="about-us fh" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <?php
            //include_once("phan_trang.php");
            require('db.php');
            $tv = "select * from gioi_thieu order by id=21 desc limit 0,1";
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
                $url = $row['linkurl'];
                $link = str_replace("?", "", strtolower("gioithieu/$url"));

                ?>
                <div class="col-lg-6 col-md-12 who-1">
                    <div>
                        <h2 style="font-size:27px; color:#ff385c" class="text-left mb-4">CÔNG TY TNHH MTV TMDV & KT MẶT TRỜI
                            ĐỎ
                        </h2>
                    </div>
                    <div class="pftext">
                        <p style="font-size:18px"> <b>Đồng Phục Hà Thư </b> là đơn vị hàng đầu chuyên cung cấp giải pháp may
                            đo,
                            thiết kế và sản xuất đồng phục chuyên nghiệp tại Đà Nẵng. Với nhiều năm kinh nghiệm trong
                            ngành, chúng tôi cam kết mang đến những sản phẩm chất lượng cao, mẫu mã đa dạng và dịch vụ
                            tận tâm, đáp ứng mọi nhu cầu của doanh nghiệp, trường học, nhà hàng, khách sạn và tổ chức.
                        </p>
                        <ul style="list-style-type: none; padding: 0; font-size: 18px;">
                            <li style="margin-bottom: 10px;">
                                <i class="fa fa-check-circle" style="color: #ff385c; margin-right: 10px;"></i>
                                Thiết kế & May đo đồng phục theo yêu cầu
                            </li>
                            <li style="margin-bottom: 10px;">
                                <i class="fa fa-check-circle" style="color: #ff385c; margin-right: 10px;"></i>
                                Sản xuất & Cung cấp đồng phục công sở, học sinh,..
                            </li>
                            <li style="margin-bottom: 10px;">
                                <i class="fa fa-check-circle" style="color: #ff385c; margin-right: 10px;"></i>
                                In & Thêu logo, slogan theo yêu cầu
                            </li>
                            <li style="margin-bottom: 10px;">
                                <i class="fa fa-check-circle" style="color: #ff385c; margin-right: 10px;"></i>
                                Tư vấn & Hỗ trợ khách hàng từ khâu chọn chất liệu, kiểu dáng đến hoàn thiện sản phẩm
                            </li>
                        </ul>
                        </li>
                    </div>
                    <div class="box bg-2">
                        <a href="<?php echo "$link"; ?>"
                            class="text-center button button--moema button--text-thick button--text-upper button--size-s">Xem
                            Thêm </a>
                    </div>
                </div>
            <?php } ?>


            <?php
            //include_once("phan_trang.php");
            require('db.php');
            $tv = "select * from gioi_thieu order by id=21 desc limit 0,1";
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
                //$ngay = "$row[ngay]";
                $url = $row['linkurl'];

                ?>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="wprt-image-video w50">
                        <img alt="<?php echo "$tieude"; ?>" src="HinhCTSP/<?php echo $row["hinhanh"]; ?>" />


                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<div class="container" style="padding-top:30px">

    <br>
    <div class="second-title">
        <div style="color: #ff385c;
                font-size: 32px;
                line-height: 40px;
                font-weight: bold; text-align:center">CÔNG TY TNHH MTV TM DV MẶT TRỜI ĐỎ </div>

        <br>
        <div style="color: #ff385c; text-align: center;
                font-size: 22px;
                line-height: 25px;
                font-weight: 500;">GIẢI PHÁP PHÒNG CHÁY CHỮA CHÁY TOÀN DIỆN, BẢO VỆ AN TOÀN CHO MỌI CÔNG TRÌNH!</div>
        <br>
        <br>

    </div>
</div>


<div class="container" style="padding-bottom:40px">
    <div class="row">
        <div data-aos="zoom-in" data-aos-delay="150">
            <img src="HinhCTSP/cung-cap-thiet-bi-pccc-quangnam.png"
                alt="thiết bị phòng cháy chữa cháy chất lượng tam kỳ">
        </div>


    </div>
</div>

<!-- START SECTION WHY CHOOSE US -->
<section class="how-it-works bg-white-2">
    <div class="container">
        <div class="sec-title">
            <div style="color: #ff385c; text-align: center;
                font-size: 20px;
                line-height: 25px;
                font-weight: 500;"><span style="font-weight: bold; font-size: 20px;">Thiết Bị PCCC Mặt Trời Đỏ </span>
            </div>
            <p style="color: #000;"> Cập nhật xu hướng phòng cháy chữa cháy</p>
        </div>
        <div class="row service-1" style="padding-bottom: 65px;">
            <?php
            //include_once("phan_trang.php");
            require('db.php');
            // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
            $tv = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3";
            $tv_1 = mysqli_query($link, $tv);
            $a_tv_1 = mysqli_query($link, $tv);
            ?>
            <?php
            while ($row = mysqli_fetch_array($tv_1)) {
                $link_hinh = "HinhCTSP/Hinhtintuc/$row[hinhanh]";
                $id = "$row[id]";
                $tieude_en = "$row[tieude_en]";
                $tieude = "$row[tieude]";
                //$mota = "$row[mota]";
                //$ngay = "$row[ngay]";
                $url = $row['linkurl'];
                $link = str_replace("?", "", strtolower("tintuc/$url"));
                ?>
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <a href="<?php echo "$link"; ?>"> <img src="<?php echo "$link_hinh"; ?>"
                                    alt="<?php echo "$tieude_en"; ?>" /> </a>
                            <a href="<?php echo "$link"; ?>">
                                <h3><?php echo "$tieude_en"; ?></h3>
                            </a>
                        </div>

                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
    <div class="bg-all">
        <a href="thietbi-pccc-redsun" class="btn btn-outline-light">Xem thêm</a>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->



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
                        alt="cửa chống cháy 180 phút núi thành"></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->