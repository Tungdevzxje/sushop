<style>
    .product-default img:hover {
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
    }

    .pinBox {
        position: sticky;
        top: 20px;
        max-height: 100vh;
        /* overflow-y: auto; */
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
    }
</style>

<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>còi báo cháy giá rẻ quảng
        nam</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>còi phát tín hiệu cháy tại
        quảng nam</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>đèn cảnh báo cháy tại
        quảng nam</a></h2>

<?php
include('phantrang/phantrang_dichvu.php');
?>

<div class="page-title" style="background:#e9ecef; margin-top:36px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                require('db.php');
                $did = $_GET["url"];
                $tv = "select * from loai_ma_sanpham where name_url='" . $_GET['url'] . "' order by id ";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                $tv_2 = mysqli_fetch_array($tv_1);
                $id = $tv_2['id'];
                $ten = "$tv_2[thuocloai]";
                ?>
                <ul class="breadcrumb" style="font-weight: bold;">
                    <li class="breadcrumb-item"><a href="trangchu"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="dong-phuc-hoc-sinh">Đồng phục học sinh</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords($ten); ?></li>
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
                                <option value="" selected="selected">Chọn mẫu đồng phục
                                </option>
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

            <div class="container">
                <div class="row g-4">
                    <?php
                    require('db.php');
                    $limit = 8;
                    $p = new pager;
                    $start = $p->findStart($limit);

                    // Đếm tổng số sản phẩm thuộc loại $id
                    $sp = $link->prepare("SELECT COUNT(*) FROM ma_sanpham WHERE thuocloai = ?");
                    $sp->bind_param('i', $id);
                    $sp->execute();
                    $sp->bind_result($count);
                    $sp->fetch();
                    $sp->close();

                    // Tính số trang cần có
                    $pages = $p->findPages($count, $limit);

                    // Lấy danh sách sản phẩm theo loại, sắp xếp theo id mới nhất và giới hạn số lượng
                    $sp = $link->prepare("SELECT * FROM ma_sanpham WHERE thuocloai = ? ORDER BY id DESC LIMIT ?, ?");
                    $sp->bind_param('iii', $id, $start, $limit);
                    $sp->execute();
                    $result = $sp->get_result();

                    while ($row = $result->fetch_object()) {
                        $tieude = htmlspecialchars($row->tieude, ENT_QUOTES, 'UTF-8');
                        $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row->hinhanh, ENT_QUOTES, 'UTF-8');
                        $url = htmlspecialchars($row->linkurl, ENT_QUOTES, 'UTF-8');
                        $link = strtolower("chitiet/$url");
                        ?>
                        <div class="col-6 col-md-3">
                            <div
                                class="product-default inner-quickview inner-icon border p-3 rounded shadow-sm bg-white h-100">
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
                    <?php }
                    $sp->close();
                    ?>
                    <div class="bgphantranga">
                        <?php
                        function pagelist($current_page, $total_pages, $url, $id)
                        {
                            $output = '';

                            // Generate "Back" button
                            if ($current_page > 1) {
                                $previous_page = $current_page - 1;
                                $output .= "<a href='$url/$previous_page' class='back'><i class='fa fa-arrow-left'></i></a>";
                            }

                            // Generate page numbers
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == $current_page) {
                                    $output .= "<span class='current'>$i</span>";
                                } else {
                                    $output .= "<a href='$url/$i'>$i</a>";
                                }
                            }

                            // Generate "Next" button
                            if ($current_page < $total_pages) {
                                $next_page = $current_page + 1;
                                $output .= "<a href='$url/$next_page' class='next'><i class='fa fa-arrow-right'></i></a>";
                            }

                            return $output;
                        }

                        $id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
                        $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        $total_pages = ceil($count / $limit);
                        $pagelist = pagelist($current_page, $total_pages, $url, $id);
                        echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: center;'> ";
                        echo $pagelist;
                        echo "</div>";
                        ?>
                    </div>




                </div>
            </div>
        </div>
        <!-- End .col-lg-9 -->
        <div class="sidebar-overlay"></div>
        <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar font2">
            <div class="pinBox ">
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