<style>
    .product-default img:hover {
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
    }

    .pinBox {
        position: sticky;
        top: 20px;
        max-height: 100vh;

    }

    .bgphantranga {
        padding: 10px;
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

    @media (max-width: 991px) {
        .pinBox {
            display: none !important;
        }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh sơn trà
        đà nẵng</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh tiểu
        học sơn trà</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục học sinh trung
        học đà nẵng</a></h2>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đồng phục thể dục học sinh
        đà nẵng</a></h3>

<?php
include('phantrang/phantrang_dichvu.php');
?>
<div class="page-title" style="background:#e9ecef; margin-top:57px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
                $id = $_GET['url'];
                $tv = "select * from tin_tintuc where linkurl like '%" . $id . "%' order by id ";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                $tv_2 = mysqli_fetch_array($tv_1);
                $thuocloai = "$tv_2[thuocloai]";
                $mysql = mysqli_query($link, "select * from loai_tin_tintuc where id=$thuocloai limit 1");
                $row = mysqli_fetch_array($mysql);
                $ten = "$tv_2[tieude_en]";
                ?>
                <ul class="breadcrumb" style="font-weight: bold;">
                    <li><a href="trangchu"><i class="fa fa-home"></i> Trang chủ &nbsp;/&nbsp;</a></li>
                    <li><a href="dong-phuc-hoc-sinh">Đồng phục học sinh &nbsp;&nbsp;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-9 main-content" style="padding-top: 45px;">
            <nav class="toolbox sticky-header d-block d-md-none p-3 rounded" data-sticky-options="{'mobile': true}">
                <div class="toolbox-left">
                    <div class="toolbox-item toolbox-sort">
                        <label>Tìm kiếm:</label>
                        <div class="select-custom">
                            <select name="orderby" class="form-control"
                                onchange="if (this.value) window.location.href=this.value">
                                <option value="" selected="selected">Chọn mẫu đồng phục</option>
                                <?php
                                require('db.php');
                                $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC";
                                $tv_11 = mysqli_query($link, $tv1);
                                while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                    $name_url = strtolower($tv_21['name_url']);
                                    $thuocloai = $tv_21['thuocloai'];
                                    ?>
                                    <option value="danh-muc/<?php echo $name_url; ?>"><?php echo $thuocloai; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                </div>
            </nav>

            <div class="row g-4">
                <?php
                require('db.php');
                $p = new pager;
                $limit = 16;
                $start = $p->findStart($limit);

                // Count total items and calculate total pages
                $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM ma_sanpham");
                $countRow = mysqli_fetch_assoc($countResult);
                $count = $countRow['total'];
                $pages = $p->findPages($count, $limit);

                $sp = $link->prepare("SELECT * FROM ma_sanpham ORDER BY id ASC LIMIT ?, ?");
                $sp->bind_param('ii', $start, $limit);
                $sp->execute();
                $result = $sp->get_result();

                while ($row = $result->fetch_assoc()) {
                    $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row['hinhanh'], ENT_QUOTES, 'UTF-8');
                    $id = htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8');
                    $tieude = htmlspecialchars($row['tieude'], ENT_QUOTES, 'UTF-8');
                    $url = htmlspecialchars($row['linkurl'], ENT_QUOTES, 'UTF-8');
                    $link = htmlspecialchars(strtolower("chitiet/$url"), ENT_QUOTES, 'UTF-8');
                    ?>
                    <div class="col-6 col-md-3">
                        <div class="product-default inner-quickview inner-icon border p-3 rounded shadow-sm bg-white h-100">
                            <figure class="position-relative">
                                <a href="<?php echo $link; ?>">
                                    <img src="<?php echo $link_hinh; ?>" class="img-fluid d-block mx-auto rounded"
                                        style="width: 100%; object-fit: contain;" alt="<?php echo $tieude; ?>">
                                </a>
                            </figure>
                            <div class="product-details text-center mt-3">
                                <p class="product-title fw-bold">
                                    <a href="<?php echo $link; ?>" class="text-dark text-decoration-none">
                                        <h3 style="font-size: 16px;"><?php echo $tieude; ?></h3>
                                    </a>

                                </p>
                                <div class="price-box">
                                    <span class="product-price text-danger fw-bold">LIÊN HỆ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                $sp->close();
                ?>
                <div class="bgphantranga">
                    <?php
                    function pagelist($current_page, $total_pages, $id)
                    {
                        $output = '';

                        // Generate "Back" button
                        if ($current_page > 1) {
                            $previous_page = $current_page - 1;
                            $output .= "<a href='dong-phuc-hoc-sinh/$previous_page' class='back'><i class='fa fa-arrow-left'></i></a>";
                        }

                        // Generate page numbers
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $current_page) {
                                $output .= "<span class='current'>$i</span>";
                            } else {
                                $output .= "<a href='dong-phuc-hoc-sinh/$i'>$i</a>";
                            }
                        }

                        // Generate "Next" button
                        if ($current_page < $total_pages) {
                            $next_page = $current_page + 1;
                            $output .= "<a href='dong-phuc-hoc-sinh/$next_page' class='next'><i class='fa fa-arrow-right'></i></a>";
                        }

                        return $output;
                    }

                    $id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
                    $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                    $total_pages = ceil($count / $limit);
                    $pagelist = pagelist($current_page, $total_pages, $id);
                    echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: center;'> ";
                    echo $pagelist;
                    echo "</div>";
                    ?>
                </div>
            </div>
        </div>
        <!-- End .col-lg-9 -->
        <div class="sidebar-overlay"></div>
        <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar font2">
            <div class="pinBox">
                <?php
                include('menu_trai/leftsanpham.php');
                ?>
            </div>
        </aside>
    </div>
</div>


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