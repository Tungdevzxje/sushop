<?php
include('phantrang/phantrang_dichvu.php');
?>

<body>
    <div class="page-wrapper">

        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav" style="padding-top:70px">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="trangchu"><i class="icon-home"></i>Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nhà Lắp Ghép</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 main-content" style="padding-top: 45px;">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <div class="toolbox-item toolbox-sort">
                                    <label>Tìm kiếm:</label>
                                    <div class="select-custom">
                                        <select name="orderby" class="form-control"
                                            onchange="if (this.value) window.location.href=this.value">
                                            <option value="" selected="selected">Nhà lắp ghép</option>
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

                        <div class="row">
                            <?php
                            require('db.php');
                            $p = new pager;
                            $limit = 21;
                            $start = $p->findStart($limit);

                            // Prepare and execute count query
                            $stmt = $link->prepare("SELECT COUNT(*) FROM ma_sanpham");
                            $stmt->execute();
                            $stmt->bind_result($count);
                            $stmt->fetch();
                            $stmt->close();

                            // Calculate pages
                            $pages = $p->findPages($count, $limit);

                            // Prepare and execute main query
                            $stmt = $link->prepare("SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT ?, ?");
                            $stmt->bind_param('ii', $start, $limit);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            while ($row = $result->fetch_assoc()) {
                                $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row['hinhanh'], ENT_QUOTES, 'UTF-8');
                                $id = htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8');
                                $tieude = htmlspecialchars($row['tieude'], ENT_QUOTES, 'UTF-8');
                                $giagoc = number_format($row['giagoc'], 2, '.', ',');
                                $giagoc_formatted = '$' . $giagoc;
                                $url = htmlspecialchars($row['linkurl'], ENT_QUOTES, 'UTF-8');
                                $link = htmlspecialchars(strtolower("chitiet/$url"), ENT_QUOTES, 'UTF-8');
                                ?>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="<?php echo $link; ?>">
                                                <img src="<?php echo $link_hinh; ?>" width="217" height="217" alt="product">
                                            </a>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple">
                                                    <i class="icon-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="danh-muc-wrap">
                                                <div class="danh-muc-list">
                                                    <a href="#" class="product-danh-muc">Hot</a>
                                                </div>
                                                <a href="#" title="Wishlist" class="btn-icon-wish">
                                                    <i class="icon-heart"></i>
                                                </a>
                                            </div>
                                            <p class="product-title" style="color: #000">
                                                <a href="<?php echo $link; ?>"><?php echo $tieude; ?></a>
                                            </p>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price">LIÊN HỆ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            $stmt->close();
                            ?>
                        </div>

                        <div class="bgphantranga">
                            <?php
                            echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: right;'> &nbsp;&nbsp;&nbsp;&nbsp;Trang: ";
                            $pagelist = $p->pageList($_GET['page'], $pages);
                            echo $pagelist;
                            echo "</div>"
                                ?>
                        </div>
                    </div>
                    <!-- End .col-lg-9 -->
                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar font2">
                        <?php
                        include('menu_trai/leftsanpham.php');
                        ?>
                    </aside>
                </div>
            </div>
        </main>
    </div>
</body>