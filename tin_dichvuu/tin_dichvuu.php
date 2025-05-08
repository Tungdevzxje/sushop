<style>
    h2 {
        color: #d32f2f;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #d32f2f;
        color: white;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #fce4ec;
    }

    tr:hover {
        background-color: #ffebee;
        transition: 0.3s;
    }
</style>


<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>quần áo học sinh cấp 1 đà
        nẵng</a></h1>
<div class="container" style="margin-top: 90px;">
    <div
        style="font-size:2rem ;font-weight: bold; color:#ff0000; padding-top: 30px; text-align:center; margin-bottom:40px">
        BẢNG SIZE THAM KHẢO</div>
    <table>
        <tr>
            <th>Size</th>
            <th>Chiều cao (cm)</th>
            <th>Cân nặng (kg)</th>
        </tr>
        <tr>
            <td>S</td>
            <td>120 - 135</td>
            <td>25 - 35</td>
        </tr>
        <tr>
            <td>M</td>
            <td>135 - 145</td>
            <td>35 - 45</td>
        </tr>
        <tr>
            <td>L</td>
            <td>145 - 155</td>
            <td>45 - 55</td>
        </tr>
        <tr>
            <td>XL</td>
            <td>155 - 165</td>
            <td>55 - 70</td>
        </tr>
        <tr>
            <td>XXL</td>
            <td>165 - 175</td>
            <td>70 - 90</td>
        </tr>
    </table>
</div>

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

<!-- đối tác .start -->
<div class="partners bg-white rec-pro">
    <div class="container-fluid">
        <div class="owl-carousel style2">
            <?php
            //include_once("phan_trang.php");
            require('db.php');
            $tv = "select * from doi_tac order by id desc limit 0,7";

            $tv_1 = mysqli_query($link, $tv);
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
                <div class="owl-item" data-aos="fade-up"><img src="<?php echo "$link_hinh"; ?>" alt="nhà gấp gọn quảng nam">
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- đối tác .end -->