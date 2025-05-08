<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>chế tạo lò hơi đà nẵng</a></h1>

<!-- START SECTION ABOUT -->
<section class="about-us fh" style="padding-top: 65px;">
    <div class="container">
        <div class="row">

            <?php
            //include_once("phan_trang.php");
            require('db.php');
            $tv = "select * from gioi_thieu order by id=17 desc limit 0,1";
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
                        <h2 class="text-left mb-4">CÔNG TY CỔ PHẦN BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HÒA</h2>
                    </div>
                    <div class="pftext">
                        <p style="font-size:18px"> <b>CÔNG TY CỔ PHẦN BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HÒA</b> xin được giới thiệu đến Quý khách hàng về các sản phẩm và dịch vụ chuyên nghành của Công ty chúng tôi và trân trọng cảm ơn Quý vị đã dành cho Công ty chúng tôi cơ hội được gửi đến Quý vị HỒ SƠ NĂNG LỰC với tư cách là một đơn vị chuyên cung cấp các sản phẩm bê tông công nghiệp đặc thù, uy tín.
                        </p>

                    </div>
                    <div class="box bg-2">
                        <a href="<?php echo "$link"; ?>" class="text-center button button--moema button--text-thick button--text-upper button--size-s">Xem Thêm </a>
                    </div>
                </div>
            <?php } ?>


            <?php
            //include_once("phan_trang.php");
            require('db.php');
            $tv = "select * from gioi_thieu order by id=17 desc limit 0,1";
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
        <div style="color: #7a16dd;
                font-size: 32px;
                line-height: 40px;
                font-weight: bold; text-align:center">CÔNG TY BÊ TÔNG LY TÂM ĐIỆN LỰC KHÁNH HOÀ – TIÊN PHONG TRONG CÔNG NGHỆ XÂY DỰNG </div>

        <br>
        <div style="color: #7a16dd; text-align: center;
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
            <img src="hinhmenu/codienlanh-danang.gif" alt="bê tông ly tâm cho lưới điện">
        </div>


    </div>
</div>

<!-- START SECTION WHY CHOOSE US -->
<section class="how-it-works bg-white-2">
    <div class="container">
        <div class="sec-title">
            <div><span style="font-weight: bold; font-size: 20px;">Tại sao chọn chúng tôi </span></div>
            <p>Chúng tôi cung cấp dịch vụ đầy đủ ở mọi bước.</p>
        </div>
        <div class="row service-1" style="padding-bottom: 65px;">
            <?php
            //include_once("phan_trang.php");
            require('db.php');
            // $tv = "select * from tin_ads where thuocloai=1 order by id desc limit 0,1";
            $tv = "SELECT * FROM (SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3";
            $tv_1 = mysqli_query($link, $tv);
            $a_tv_1 = mysqli_query($link, $tv);
            ?>
            <?php
            while ($row = mysqli_fetch_array($tv_1)) {
                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                $id = "$row[id]";
                $tieude_en = "$row[tieude_en]";
                $tieude = "$row[tieude]";
                //$mota = "$row[mota]";
                //$ngay = "$row[ngay]";
                $url = $row['linkurl'];
                $link = str_replace("?", "", strtolower("dichvu/$url"));
            ?>
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <a href="<?php echo "$link"; ?>"> <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>" /> </a>
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
        <a href="codienlanh-danang" class="btn btn-outline-light">Xem thêm</a>
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
                <div class="owl-item" data-aos="fade-up"><img src="<?php echo "$link_hinh"; ?>" alt="bê tông ly tâm công trình dân dụng"></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->