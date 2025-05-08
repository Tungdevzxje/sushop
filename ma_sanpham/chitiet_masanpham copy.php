<style>
    .share-linknd {
        width: 100%;
        margin: 0px 0;
        border-radius: 4px;
        display: inline-block;
        background: #fcf1bd;
    }

    .single-portfolio {
        text-align: center;
        position: relative;
    }

    #main-image {
        width: 100%;
        height: auto;
        max-width: 500px;
        margin-bottom: 15px;
    }

    .related-products {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        overflow: hidden;
    }

    .related-slider {
        display: flex;
        justify-content: center;
        gap: 10px;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding-bottom: 10px;
    }

    .related-product-item {
        flex: 0 0 auto;
        width: 100px;
        text-align: center;
        cursor: pointer;
    }

    .related-product-item img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        transition: transform 0.3s ease;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .related-product-item img:hover {
        transform: scale(1.1);
    }

    .related-product-item p {
        font-size: 14px;
        margin-top: 5px;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let mainImage = document.getElementById("main-image");
        let thumbnails = document.querySelectorAll(".related-thumbnail");

        thumbnails.forEach(function (thumbnail) {
            thumbnail.addEventListener("click", function (e) {
                e.preventDefault();
                mainImage.src = this.src;
            });
        });
    });

</script>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>Sơn bóng nội thất cao cấp
        - Nano</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>Sơn phủ bóng</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>Sơn lót trong nhà cao
        cấp</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>Chất chống thấm ngược</a>
</h3>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="page-title" style="padding-top:100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
                $id = $_GET['url'];
                $tv = "select * from ma_sanpham where linkurl like '%" . $id . "%' order by id ";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                $tv_2 = mysqli_fetch_array($tv_1);
                $thuocloai = "$tv_2[thuocloai]";
                $phanloai = mysqli_fetch_array(mysqli_query($link, "select * from  loai_ma_sanpham where id=" . $thuocloai . " limit 1"));

                $hinhanh = "$tv_2[hinhanh]";
                $mysql = mysqli_query($link, "select * from loai_ma_sanpham where id=$thuocloai limit 1");
                $row = mysqli_fetch_array($mysql);
                $ten = "$tv_2[tieude]";
                ?>
                <ul class="breadcrumb">
                    <li><a href="trangchu"><i class="fa fa-home"></i> Trang chủ &nbsp;/&nbsp;</a></li>
                    <li><a href="son">Sản Phẩm &nbsp;/&nbsp;</a></li>
                    <li><?php echo "$ten" ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page title end -->
<!-- END SECTION HEADINGS -->

<!-- START SECTION BLOG -->
<section class="blog blog-section bg-white">
    <div class="container" id="pinBoxContainer">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row space2 pb-4 thumax-2">
                            <div class="col-md-6">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
                                        <div class="popup-images">
                                            <a class="popup-img">
                                                <img class="img-fluid w100" id="main-image"
                                                    src="HinhCTSP/HinhSanPham/<?php echo $hinhanh; ?>"
                                                    alt="<?php echo $ten; ?>" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="related-products">
                                        <div class="related-slider">
                                            <?php
                                            $tv = "SELECT * FROM ma_sanpham WHERE thuocloai = '$thuocloai' AND id != '$tv_2[id]' LIMIT 4";
                                            $sp_lienquan = mysqli_query($link, $tv);
                                            while ($row = mysqli_fetch_array($sp_lienquan)) {
                                                $hinh_anh = "HinhCTSP/HinhSanPham/" . $row['hinhanh'];
                                                $tieude = $row['tieude'];
                                                $url = "chitiet/" . $related['linkurl'];
                                                ?>
                                                <div class="related-product-item">
                                                    <a href="<?php echo $url; ?>">
                                                        <img class="related-thumbnail" src="<?php echo $hinh_anh; ?>"
                                                            alt="<?php echo $tieude; ?>" />
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 single-p-info shop">
                                <h2 class="mb-3"><?php echo "$ten" ?></h2>
                                <ul class="starts text-left">
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
                                </ul>
                                <p class="mt-1 mb-4"><?php echo "$mota" ?></p>
                                <div style="text-align: left; font-weight: bold;color: #ff0000;">
                                    <p style="margin-bottom:18px;">
                                        <font style='color:#000; font-size: 17px; font-weight:bold'>TÌNH TRẠNG:</font>
                                        <font style='color:#ff0000; font-size: 20px; font-weight:bold'>Còn Hàng </font>
                                    </p>
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
                                        <font style='color:#ff0000; font-size: 20px; font-weight:bold'>0923 093 789
                                        </font>
                                    </p>
                                </div>

                                </br>
                                <div style="text-align: left;">
                                    <a class="btn1 btn-sm" href="tel:0923093789"><i class="fa fa-shopping-cart"
                                            style="color:#ff0; padding-right: 9px;"></i>Liên Hệ Đặt Hàng</a>
                                </div>
                                </br>
                                <div style="    padding: 6px;
    font-size: 15px;
    line-height: 30px;">
                                    <ul>
                                        <li><i class="linearicons-shield-check"></i> <b> Màu sắc:</b> Đa dạng </li>
                                        <li><i class="linearicons-bag-dollar"></i> <b> Giao hàng tận nơi khi có nhu
                                                cầu</b></li>
                                        <li><i class="linearicons-sync"></i><b> Thời gian giao hàng:</b> 1 -3 ngày kể từ
                                            ngày nhận đơn. </li>
                                    </ul>


                                </div>
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
                            <h2 style='font-size: 17px;
    font-weight: bold;
    margin-bottom: 10px;
    line-height: 30px;'> $tieude</h2>

                    		<p style='font-size: 17px;' class='author_name'> $mota</p>


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
                            <span><?php echo "$noidung"; ?></span>

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
                        $limit = 6;
                        $start = $p->findStart($limit);
                        $count_query = mysqli_query($link, "SELECT * FROM ma_sanpham WHERE thuocloai = " . $thuocloai);
                        $count = mysqli_num_rows($count_query);
                        $pages = $p->findPages($count, $limit);
                        $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 1,6");
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
                            $link = str_replace("?", "", strtolower("sanpham/$url"));
                            ?>


                            <div class="col-xl-4 col-lg-6 col-sm-6 col-6">
                                <div class="eblog-featured-news style-two small">
                                    <div class="image-area">
                                        <a href="<?php echo $link; ?>"><img src="<?php echo $link_hinh; ?>"
                                                alt="<?php echo $tieude; ?>" /></a>
                                    </div>
                                    <div class="blog-content text-left">

                                        <h2
                                            style="color: #222; font-size: 15px; font-weight: bold; text-transform: none; padding: 10px;">
                                            <a href="<?php echo $link; ?>" style="line-height:26px;"><?php echo $tieude; ?>
                                            </a>
                                        </h2>

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
                    include('menu_trai/lefttintuc.php');
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