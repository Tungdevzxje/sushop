<style>
    .product-default img:hover {
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
    }
</style>


<?php
include('phantrang/phantrang_dichvu.php');
?>

<body>
    <div class="page-wrapper">

        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav" style="padding-top: 50px;">
                    <ol class="breadcrumb">
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
                        <li class="breadcrumb-item"><a href="trangchu">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="nhalapghep">Nhà lắp ghép</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords($ten); ?></li>
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
                                            <option value="" selected="selected">Chọn mẫu nhà lắp ghép</option>
                                            <?php
                                            require('db.php');
                                            $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC";
                                            $tv_11 = mysqli_query($link, $tv1);
                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                $name_url = strtolower($tv_21['name_url']);
                                                $thuocloai = $tv_21['thuocloai'];
                                                ?>
                                                <option value="category/<?php echo $name_url; ?>"><?php echo $thuocloai; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </nav>

                        <div class="container">
                            <!-- Hàng chứa các sản phẩm, g-4 giúp tạo khoảng cách giữa các cột -->
                            <div class="row g-4">
                                <?php
                                require('db.php'); // Kết nối database

                                // Cài đặt số sản phẩm trên mỗi trang
                                $limit = 12; // Hiển thị tối đa 12 sản phẩm mỗi lần load
                                $p = new pager; // Tạo một đối tượng phân trang
                                $start = $p->findStart($limit); // Xác định vị trí bắt đầu dữ liệu

                                // Đếm tổng số sản phẩm thuộc loại $id
                                $stmt = $link->prepare("SELECT COUNT(*) FROM ma_sanpham WHERE thuocloai = ?");
                                $stmt->bind_param('i', $id);
                                $stmt->execute();
                                $stmt->bind_result($count);
                                $stmt->fetch();
                                $stmt->close();

                                // Tính số trang cần có
                                $pages = $p->findPages($count, $limit);

                                // Lấy danh sách sản phẩm theo loại, sắp xếp theo id mới nhất và giới hạn số lượng
                                $stmt = $link->prepare("SELECT * FROM ma_sanpham WHERE thuocloai = ? ORDER BY id DESC LIMIT ?, ?");
                                $stmt->bind_param('iii', $id, $start, $limit);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                // Duyệt từng sản phẩm lấy từ database
                                while ($row = $result->fetch_object()) {
                                    // Lấy thông tin sản phẩm
                                    $tieude = htmlspecialchars($row->tieude, ENT_QUOTES, 'UTF-8'); // Tiêu đề sản phẩm (bảo mật)
                                    $giagoc = number_format($row->giagoc, 2, '.', ','); // Định dạng giá sản phẩm
                                    $giagoc_formatted = 'VNDD' . $giagoc; // Hiển thị giá có ký hiệu đô la
                                    $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row->hinhanh, ENT_QUOTES, 'UTF-8'); // Đường dẫn hình ảnh
                                    $url = htmlspecialchars($row->linkurl, ENT_QUOTES, 'UTF-8'); // Đường dẫn chi tiết sản phẩm
                                    $link = strtolower("chitiet/$url"); // Tạo link dẫn đến chi tiết sản phẩm
                                    ?>
                                    <!-- Mỗi sản phẩm chiếm 6 cột trên màn hình nhỏ (col-6) và 4 cột trên màn hình trung bình trở lên (col-md-4) -->
                                    <div class="col-6 col-md-4">
                                        <!-- Thẻ chứa toàn bộ sản phẩm -->
                                        <div
                                            class="product-default inner-quickview inner-icon border p-3 rounded shadow-sm bg-white h-100">
                                            <figure class="position-relative">
                                                <!-- Hình ảnh sản phẩm -->
                                                <a href="<?php echo $link; ?>">
                                                    <img src="<?php echo $link_hinh; ?>"
                                                        class="img-fluid d-block mx-auto rounded"
                                                        style="width: 100%; height: 220px; object-fit: cover;"
                                                        alt="<?php echo $tieude; ?>">
                                                </a>
                                            </figure>

                                            <!-- Chi tiết sản phẩm -->
                                            <div class="product-details text-center mt-3">
                                                <!-- Tiêu đề sản phẩm -->
                                                <p class="product-title fw-bold">
                                                    <a href="<?php echo $link; ?>" class="text-dark text-decoration-none">
                                                        <?php echo $tieude; ?>
                                                    </a>
                                                </p>
                                                <!-- Giá sản phẩm -->
                                                <div class="price-box">
                                                    <span
                                                        class="product-price text-danger fw-bold"><?php echo $giagoc_formatted; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                $stmt->close(); // Đóng truy vấn SQL
                                ?>
                            </div>
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