<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>thiết bị báo cháy tại tam
        kỳ</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>thiết bị phòng cháy chữa
        cháy tại tam kỳ</a>
</h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>thiết bị pccc quảng
        nam</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>bình chữa cháy giá tốt tại
        quảng nam</a>
</h3>
<style>
    .size-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .size-table th,
    .size-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .size-table th {
        background-color: #f4f4f4;
        color: #333;
        font-weight: bold;
    }

    .size-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .size-table tr:hover {
        background-color: #f1f1f1;
    }
</style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<div class="page-title" style="background:#e9ecef; margin-top:60px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $id = $_GET['url'];
                $tv = "select * from ma_sanpham where linkurl like '%" . $id . "%' order by id ";
                $tv_1 = mysqli_query($link, $tv);
                $tv_2 = mysqli_fetch_array($tv_1);
                $thuocloai = "$tv_2[thuocloai]";
                $phanloai = mysqli_fetch_array(mysqli_query($link, "select * from  loai_ma_sanpham where id=" . $thuocloai . " limit 1"));
                $mota = "$tv_2[mota]";
                $hinhanh = "$tv_2[hinhanh]";
                $hinhanh1 = "$tv_2[hinhanh1]";
                $hinhanh2 = "$tv_2[hinhanh2]";
                $hinhanh3 = "$tv_2[hinhanh3]";
                $mysql = mysqli_query($link, "select * from loai_ma_sanpham where id=$thuocloai limit 1");
                $row = mysqli_fetch_array($mysql);
                $ten = "$tv_2[tieude]";
                ?>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="trangchu"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="dong-phuc-hoc-sinh">Đồng phục học sinh</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords($ten); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page title end -->
<!-- END SECTION HEADINGS -->

<!-- START SECTION BLOG -->
<section class="blog blog-section bg-white" style="padding-top: 50px;">
    <div class="container" id="pinBoxContainer">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row space2 pb-4 thumax-2">
                            <!-- Ảnh chính -->
                            <div class="col-md-6">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
                                        <div class="popup-images">
                                            <a class="popup-img">
                                                <img class="img-fluid w100" id="main-image"
                                                    src="HinhCTSP/HinhSanPham/<?php echo $hinhanh ?: 'default.jpg'; ?>"
                                                    alt="Ảnh chính" />
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Slide ảnh nhỏ bên dưới -->
                                    <div class="swiper-container mt-3">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $hinh_phu = [$hinhanh, $hinhanh1, $hinhanh2, $hinhanh3];
                                            foreach ($hinh_phu as $hinh) {
                                                if (!empty($hinh) && file_exists("HinhCTSP/HinhSanPham/$hinh")) { ?>
                                                    <div class="swiper-slide">
                                                        <img class="img-thumbnail sub-thumbnail"
                                                            src="HinhCTSP/HinhSanPham/<?php echo $hinh; ?>" alt="Ảnh chi tiết"
                                                            onclick="changeMainImage('<?php echo $hinh; ?>', this)" />
                                                    </div>
                                                <?php }
                                            } ?>
                                        </div>
                                        <!-- Nút điều hướng -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6 single-p-info shop">
                                <h2 class="mb-3"><?php echo "$ten" ?></h2>
                                <!-- <ul class="starts text-left">
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                </ul> -->
                                <div style="text-align: left; font-weight: bold;color: #ff0000;">
                                    <!-- <p style="margin-bottom:18px;">
                                        <font style='color:#000; font-size: 17px; font-weight:bold'>TÌNH TRẠNG:</font>
                                        <font style='color:#ff0000; font-size: 20px; font-weight:bold'>Còn Hàng </font>
                                    </p> -->
                                    <p style="margin-bottom:18px;">
                                        <font style='color:#000; font-size: 17px; font-weight:bold'>GIÁ:</font>
                                        <font style='color:#ff0000; font-size: 20px; font-weight:bold'>Liên Hệ </font>
                                    </p>
                                    <p style="margin-bottom:18px;">
                                        <font style='color:#000; font-size: 17px; font-weight:bold'>LOẠI SP:</font>
                                        <font style='color:#ff0000; font-size: 20px; font-weight:bold'>
                                            <?php echo $phanloai['thuocloai']; ?>
                                        </font>
                                    </p>
                                    <p style="margin-bottom:18px;">
                                        <font style='color:#000; font-size: 17px; font-weight:bold'>HOTLINE:</font>
                                        <font style='color:#ff0000; font-size: 20px; font-weight:bold'>0905 108 532

                                        </font>
                                    </p>
                                </div>
                                <p class="mt-1 mb-4" style="color: #000;"><?php echo "$mota" ?></p>
                                <h2 class="mb-3">Bảng Size Tham Khảo</h2>

                                <table class="size-table">
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
                                <!-- <div style="text-align: left;">
                                    <a class="btn1 btn-sm" href="tel:0843268278"><i class="fa fa-shopping-cart"
                                            style="color:#ff0; padding-right: 9px;"></i>Liên Hệ Đặt Hàng</a>
                                </div> -->

                            </div>
                        </div>


                    </div>
                </div>
                <!-- Star Reviews -->

                <?php
                include_once("phan_trang.php");
                require('db.php');
                $p = new pager;
                $limit = 1;
                $start = $p->findStart($limit);
                $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM ma_sanpham"));
                $pages = $p->findPages($count, $limit);
                $id = $_REQUEST["url"];
                $result = mysqli_query($link, "SELECT * FROM ma_sanpham where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
                // hiển thị DL
                if (mysqli_num_rows($result) <> 0) {
                    echo " <table width='100%' border='0' align='left'>";
                    $stt = 0;
                    while ($row = mysqli_fetch_object($result)) {
                        $thuocloai = $row->thuocloai;
                        $phanloai = mysqli_fetch_array(mysqli_query($link, "select * from  loai_ma_sanpham where id=" . $thuocloai . " limit 1"));
                        $ngay = $row->ngay;
                        $thuocloai = $row->thuocloai;
                        $tieude = doikyty($row->tieude);
                        $noidung = doikyty($row->noidung);
                        $mota = doikyty($row->mota);
                        $tieude_en = doikyty($row->tieude_en);
                        $tukhoa2 = doikyty($row->tukhoa2);
                        $facebook = $row->facebook;
                        $tukhoa = $row->tukhoa1;
                        $url = khongdau($row->tieude_en);
                        $link = str_replace("?", "", strtolower("post/$url"));
                        $hinhanh = "HinhCTSP/HinhSanPham/" . $row->hinhanh;
                        $hinhanh = "<img src='$hinhanh'  text-align: center; alt='$tieude' title='$tieude'  >  ";
                        if ($stt % 2 == 0) {
                            echo "<tr>";
                        }
                        echo "<td align='left' width='100%'>";
                        echo "<table align='left' width='100%'>";
                        echo "<div>
                                  <h2 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa</a></h2>


                               <div class='mb-2' style='color: #ff0000;font-weight: bold;width: 98%;text-transform: uppercase;'>Chi Tiết Sản Phẩm: </div>


                               <div style='border-bottom: 1px solid #ccc; width: 100%; color:#ccc;'></div>

                                  </br>
                            <h3 style='font-size: 17px;
    font-weight: bold;
    margin-bottom: 10px;
    line-height: 30px;'> $tieude</h3>



                               <div style='font-size: 18px; font-family:'Arial', sans-serif;' class='author_name'>
                               $noidung
                                   </div>

                                    <h1 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa2</a></h1>
                        </div>";
                        echo " </table>";
                        echo "</td>";
                        $stt = $stt + 1;

                        if ($stt % 1 == 0) {
                            echo "</tr>";
                        }
                    }
                    echo " </table>";
                }
                ?>
                <!-- đường dẫn h2 -->



                <!-- đường dẫn h2 -->
                <div class="author_name">
                    <?php
                    include_once("phan_trang.php");
                    require('db.php');
                    $tv = "select * from gioi_thieu order by id=10 desc limit 0,1";
                    $tv_1 = mysqli_query($link, $tv);
                    $a_tv_1 = mysqli_query($link, $tv);
                    ?>
                    <?php
                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                        $id = "$tv_2[id]";
                        $tieude = "$tv_2[tieude]";
                        $noidung = "$tv_2[noidung]";

                        ?>
                        <div style='margin:0px;' class="author_img">
                            <div style='text-align: center;'>
                                <img src="HinhCTSP/<?php echo $tv_2["hinhanh"]; ?>" alt="<?php echo "$tieude"; ?>" style='    text-align: center;
    padding: 20px;' />
                            </div>
                            <span style="font-size: 18px;"><?php echo "$noidung"; ?></span>

                        </div>
                        <div class="rating_wrap">
                            <span class="rating_num">
                            </span>
                        </div>
                    <?php } ?>
                </div>
                <!-- đường dẫn h2 -->

                <!-- Comments form end -->

                <div class="col-mob-12 col-xs-12 col-sm-12 col-md-12 col-lg-12"
                    style="margin-bottom: 20px;margin-top: 40px;">
                    <div style="border-bottom: 2px solid #000;
    padding: 7px;
    color: #ff0000;
        margin-bottom: 30px;
    font-weight: bold;font-size: 16px;
    padding-left: 5px;"><i class="fa fa-bars" style="padding-right:10px;"></i> SẢN PHẨM LIÊN QUAN </div>

                    <div class="row">

                        <?php
                        include_once("phan_trang.php");
                        require('db.php');
                        // Ensure $thuocloai is defined
                        $thuocloai = isset($thuocloai) ? $thuocloai : 0; // Default to 0 or appropriate value
                        $p = new pager;
                        $limit = 8;
                        $start = $p->findStart($limit);
                        $count_query = mysqli_query($link, "SELECT * FROM ma_sanpham WHERE thuocloai = " . $thuocloai);
                        $count = mysqli_num_rows($count_query);
                        $pages = $p->findPages($count, $limit);
                        $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 1,8");
                        // Error handling
                        if (!$sql) {
                            echo "Error: " . mysqli_error($link);
                        }
                        // Store IDs of related posts
                        $related_ids = [];
                        // Display data
                        while ($tv_2 = mysqli_fetch_array($sql)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/" . $tv_2['hinhanh'];
                            $id = $tv_2['id'];
                            $related_ids[] = $id;
                            $thuocloai = $tv_2['tieude_en'];
                            $tieude_en = $tv_2['tieude_en'];
                            $tieude = $tv_2['tieude'];
                            $mota = $tv_2['mota'];
                            $ngay = $tv_2['ngay'];
                            $url = $tv_2['linkurl'];
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                            ?>


                            <div class="col-xl-3 col-lg-6 col-sm-6 col-6">
                                <div class="eblog-featured-news style-two small">
                                    <div class="image-area">
                                        <a href="<?php echo $link; ?>"><img src="<?php echo $link_hinh; ?>"
                                                alt="<?php echo $tieude; ?>" /></a>
                                    </div>
                                    <div class="blog-content text-left">

                                        <h3
                                            style="color: #222; font-size: 15px; font-weight: bold; text-transform: none; padding: 10px;">
                                            <a href="<?php echo $link; ?>" style="line-height:26px;"><?php echo $tieude; ?>
                                            </a>
                                        </h3>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>



                    </div>
                </div>
                <!-- Comments form end -->


            </div>


            <aside class="col-lg-3 col-md-12">
                <div class="pinBox">
                    <?php
                    include('menu_trai/leftsanpham.php');
                    ?>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
<!-- bạn cần biết -->
<section class="eblog-bottom-post-area tp-section-gap">
    <div class="container">
        <div style="border-bottom: 2px solid #000;
    padding: 7px;
    color: #ff0000;
        margin-bottom: 30px;
    font-weight: bold;font-size: 16px;
    padding-left: 1px;"><i class="fa fa-bars" style="padding-right:10px;"></i> BẠN CẦN BIẾT </div>
        <div class="section-inner">
            <div class="row g-5">


                <?php
                require('db.php');

                // Function to fetch a random post
                function fetchRandomPost($link)
                {
                    $query = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 6";
                    $stmt = $link->prepare($query);
                    if ($stmt === false) {
                        die('Prepare failed: ' . htmlspecialchars($link->error));
                    }
                    $stmt->execute();
                    return $stmt->get_result();
                }

                // Fetch random post
                $posts = fetchRandomPost($link);
                ?>
                <?php if ($posts && $posts->num_rows > 0): ?>
                    <?php while ($row = $posts->fetch_assoc()): ?>
                        <?php
                        $imageSrc = htmlspecialchars("HinhCTSP/Hinhtintuc/{$row['hinhanh']}");
                        $postLink = htmlspecialchars(str_replace("?", "", strtolower("tintuc/" . urlencode($row['linkurl']))));
                        $postTitle = htmlspecialchars($row['tieude_en']);
                        $postDate = htmlspecialchars($row['ngay']);
                        $postDescription = htmlspecialchars($row['mota']);
                        ?>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="eblog-featured-news style-two small">
                                <div class="image-area">
                                    <a href="<?php echo $postLink; ?>"> <img src="<?php echo $imageSrc; ?>"
                                            alt="<?php echo $postTitle; ?>" /></a>
                                </div>
                                <div class="blog-content text-left">

                                    <a href="<?php echo $postLink; ?>">
                                        <div class="heading-title ml--0 mb--10 text-start" style="font-size: 15px;
    line-height: 23px;
    padding: 10px;
    font-weight: bold; padding-bottom:30px"><?php echo $postTitle; ?></div>
                                    </a>

                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No posts available.</p>
                <?php endif; ?>

                <?php
                $link->close();
                ?>


            </div>
        </div>
    </div>
</section>
<!-- End Bạn cần biết -->

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
                        alt="bê tông ly tâm bền vững"></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->
<script src="js/jquery.pinBox.js"></script>
<script src="Scripts/anhchitietthem_sanpham.js"></script>
<script>
    $(document).ready(function () {

        $(".pinBox").pinBox({
            //default 0px
            Top: '30px',
            //default '.container'
            Container: '#pinBoxContainer',
            //default 20
            ZIndex: 20,
            //default '767px' if you disable pinBox in mobile or tablet
            MinWidth: '1170px'
            //events if scrolled or window resized
        });

    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>