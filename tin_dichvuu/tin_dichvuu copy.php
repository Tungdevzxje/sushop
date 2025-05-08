<style>
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
<div class="container" style="padding-top:85px">
    <div class="row">
        <div data-aos="zoom-in" data-aos-delay="150">
            <img src="hinhmenu/top-banner.jpg" alt="tập đoàn wingroup">
        </div>
    </div>
</div>
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <div style="padding:10px;">
                <h2 style="font-weight: bold; color:#ff0000; padding-top: 50px;">THI CÔNG NHÀ LẮP GHÉP</h2>
                <div style="font-weight: bold;"><a href="trangchu">Trang chủ </a> &nbsp;/&nbsp; Thi công nhà lắp ghép
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>nhà lắp ghép bảo hành lâu
        dài</a></h2>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>tư vấn nhà lắp ghép miễn
        phí</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>nhà lắp ghép xanh</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>nhà lắp ghép thân thiện
        môi trường</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>nhà lắp ghép nhỏ gọn</a>
</h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>nhà lắp ghép tiện lợi</a>
</h3>
<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>mua nhà lắp ghép giá
        rẻ</a></h1>
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
                $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM tin_dichvuu");
                $countRow = mysqli_fetch_assoc($countResult);
                $count = $countRow['total'];
                $pages = $p->findPages($count, $limit);

                // Fetch paginated data
                $sql = mysqli_query($link, "SELECT * FROM tin_dichvuu ORDER BY id ASC LIMIT $start, $limit");
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
                    $link = str_replace("?", "", strtolower("du-an-$url"));

                    ?>
                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-bottom: 20px; padding: 10px;">
                        <div class="news-item"
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <a href="HinhCTSP/Hinhdichvu/<?php echo $hinhanh; ?>" data-lightbox="image-set"
                                data-title="<?php echo $tieude_en; ?>">
                                <div class="news-item-img hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/Hinhdichvu/<?php echo $hinhanh; ?>"
                                        alt="<?php echo "$tieude_en"; ?>">
                                </div>
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <div class="bgphantranga">
                    <?php
                    function pagelist($current_page, $total_pages, $id)
                    {
                        $output = '';

                        // Generate "Back" button
                        if ($current_page > 1) {
                            $previous_page = $current_page - 1;
                            $output .= "<a href='duan/$previous_page' class='back'><i class='fa fa-arrow-left'></i></a>";
                        }

                        // Generate page numbers
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $current_page) {
                                $output .= "<span class='current'>$i</span>";
                            } else {
                                $output .= "<a href='duan/$i'>$i</a>";
                            }
                        }

                        // Generate "Next" button
                        if ($current_page < $total_pages) {
                            $next_page = $current_page + 1;
                            $output .= "<a href='duan/$next_page' class='next'><i class='fa fa-arrow-right'></i></a>";
                        }

                        return $output;
                    }

                    $id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
                    $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                    $total_pages = 3;
                    $pagelist = pagelist($current_page, $total_pages, $id);
                    echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: center;'> &nbsp;&nbsp;&nbsp;&nbsp;Trang: ";
                    echo $pagelist;
                    echo "</div>";
                    ?>
                </div>


            </div>
</section>
<!-- END SECTION BLOG -->

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