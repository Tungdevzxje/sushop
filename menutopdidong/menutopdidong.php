<div id="banner-top" class="container slideDown hide-on-mobile" role="alert"
    style="display: flex; align-items: center; justify-content: space-between; height: 90px; padding: 0 30px; background-color: #fff; border-bottom: 1px solid #ccc; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">

    <!-- Logo -->
    <div style="flex: 1;">
        <a href="index.php">
            <img src="hinhmenu/logo.png" alt="Logo" style="height: 65px;">
        </a>
    </div>

    <!-- Slogan thương hiệu -->
    <div style="flex: 2; text-align: center;">
        <div style="font-weight: bold; font-size: 20px; color: #4CAF50;">MAY ĐO BÁN SẴN ĐỒNG PHỤC HỌC SINH</div>
        <div style="font-size: 16px; color: #666;">CHUẨN FORM • BỀN ĐẸP • GIÁ TỐT</div>
    </div>

    <!-- Tìm kiếm + Người dùng -->
    <div style="flex: 2; display: flex; flex-direction: column; align-items: flex-end; gap: 5px;">

        <!-- Thanh tìm kiếm -->
        <form action="search/" method="GET" style="display: flex; align-items: center;">
            <input type="text" name="q" placeholder="Tìm kiếm..."
                value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>"
                style="padding: 7px 12px; border: 1px solid #ccc; border-radius: 4px 0 0 4px; width: 200px;">
            <button type="submit"
                style="padding: 7px 12px; background-color: #4CAF50; color: white; border: none; border-radius: 0 4px 4px 0;">
                <i class="fa fa-search"></i>
            </button>
        </form>

        <!-- Thông tin người dùng -->
        <div style="font-size: 14px; margin-top: 5px;">
            <?php
            session_start();  // Đảm bảo session được khởi tạo ở đầu file

            // Kiểm tra nếu người dùng đã đăng nhập
            if (isset($_SESSION['user_id'])) {
                echo "<div style='text-align: right;'>
                        <span style='color: #333;'>Xin chào, 
                            <a href='lichsu-dathang' style='color: #4CAF50; font-weight: bold; text-decoration: none;'>"
                            . htmlspecialchars($_SESSION['fullname']) . 
                        "</a>
                        </span> | 
                        <a href='dang-xuat' style='color: red; text-decoration: none;'><b>Đăng xuất</b></a>
                    </div>";
            } else {
                // Nếu người dùng chưa đăng nhập, hiển thị các liên kết Đăng nhập và Đăng ký
                echo "<div>
                        <a href='dang-nhap' style='margin-right: 10px; font-weight:bold; text-decoration: none; color: #333;'>Đăng nhập</a>
                        <a href='dang-ky' style='font-weight:bold; text-decoration: none; color: #333;'>Đăng ký</a>
                    </div>";
            }
            ?>
        </div>
    </div>
</div>


<!-- <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding: 10px;
        }

        .btn-custom {
            padding: 10px 20px;
            border-radius: 25px;
            background-color: #4CAF50;
            border: none;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #45a049;
        }
    </style> -->

<!-- Mobile Navigation -->
<div class="mobile-menu-container">
    <button class="mobile-menu-btn">
        <i class="fa fa-bars"></i>
    </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="trangchu"><img src=" hinhmenu/dongphuc-hathu.png" alt="đồng phục học sinh đà nẵng"
            style="width:70%; margin-bottom:0px;"></a>
</div>

<nav class="mobile-menu">
    <button class="close-menu">&times;</button>
    <ul>
        <li><a href="trangchu">TRANG CHỦ</a></li>
        <li><a href="dongphuc-danang">GIỚI THIỆU</a></li>
        <li><a href="dong-phuc-hoc-sinh">ĐỒNG PHỤC HỌC SINH</a></li>
        <li><a href="dong-phuc-cong-so">ĐỒNG PHỤC CÔNG SỞ</a></li>
        <li><a href="size">HƯỚNG DẪN CHỌN SIZE</a></li>
        <li><a href="xu-huong-dong-phuc">TIN TỨC</a></li>
        <li><a href="lien-he">LIÊN HỆ</a></li>
    </ul>
    <!-- Form tìm kiếm trên mobile -->
<div style="padding: 10px;">
    <form action="search/" method="GET" style="display: flex;">
        <input type="text" name="q" placeholder="Tìm kiếm..." required
            value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>"
            style="flex: 1; padding: 6px 10px; border: 1px solid #ccc; border-radius: 4px 0 0 4px;">
        <button type="submit"
            style="padding: 6px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 0 4px 4px 0;">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>

<!-- Đăng nhập / Đăng ký trên mobile -->
<div style="padding: 10px;">
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        echo "<div style='color: #fff;'>
        Xin chào, <b>" . htmlspecialchars($_SESSION['fullname']) . "</b><br>
        <a href='lichsu-dathang' style='color: #FFD700; text-decoration: none; font-size: 14px;'>→ Xem lịch sử đơn hàng</a>
      </div>";

        echo "<a href='logout.php' style='display: inline-block; margin-top: 5px; color: red; font-weight:bold'>Đăng xuất</a>";
    } else {
        echo "<a href='login.php' style='margin-right: 10px; font-weight:bold; color:#fff;'>Đăng nhập</a>";
        echo "<a href='register.php' style='font-weight:bold; color:#fff;'>Đăng ký</a>";
    }
    ?>
</div>

</nav>



<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="trangchu"><img src="hinhmenu/dongphuc-hathu.png"
                            data-sticky-logo="hinhmenu/dongphuc-hathu.png" alt="đồng phục học sinh sơn trà đà nẵng"></a>
                </div>


                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="trangchu" class="<?php if ($title == 'trang-chu')
                            echo 'on'; ?>">TRANG
                                CHỦ</a></li>
                        <li><a href="dongphuc-danang" class="<?php if ($title == 'gioi-thieu')
                            echo 'on'; ?>"> GIỚI THIỆU</a>
                        </li>
                        <li><a href="dong-phuc-hoc-sinh" class=" <?php if ($title == 'ma-sanpham' || $title == 'ma-sanphamct')
                            echo 'on'; ?>">ĐỒNG PHỤC HỌC SINH</a>
                        </li>
                        <li><a href="dong-phuc-cong-so" class=" <?php if ($title == 'tin-dichvu')
                            echo 'on'; ?>">ĐỒNG PHỤC CÔNG SỞ</a>
                            <ul>
                                <?php
                                $tv1 = "select * from loai_tin_dichvu order by id ASC ";
                                $tv_11 = mysqli_query($link, $tv1);
                                $stt = 1;
                                while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                    $id = "$tv_21[id]";
                                    $thuocloai = "$tv_21[thuocloai]";
                                    $name_url = "$tv_21[name_url]";
                                    ?>
                                    <li><a
                                            href="san-pham/<?php echo strtolower($tv_21['name_url']); ?>"><?php echo $thuocloai; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="size" class="<?php if ($title == 'tin-dichvuu')
                            echo 'on'; ?>"> HƯỚNG DẪN CHỌN SIZE</a>
                        </li>
                        <li><a href="xu-huong-dong-phuc" class=" <?php if ($title == 'tin-tintuc')
                            echo 'on'; ?>">TIN
                                TỨC</a></li>
                        <li><a href="lien-he" class=" <?php if ($title == 'lien-he')
                            echo 'on'; ?>">LIÊN HỆ</a></li>
                    </ul>
                    <?php
                    session_start(); // Bắt đầu session

                    // Hàm tính tổng số lượng sản phẩm trong giỏ hàng
                    function getCartCount()
                    {
                        return isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantity')) : 0;
                    }
                    ?>

                    <!-- Biểu tượng giỏ hàng -->
                    <div style="position: fixed; top: 20px; right: 20px; z-index: 1000;">
                        <a href="viewcart.php"
                            style="position: relative; display: inline-block; text-decoration: none; color: black;">
                            <i class="fa fa-shopping-cart" style="font-size: 24px;"></i>
                            <span id="cart-count"
                                style="position: absolute; top: -5px; right: -10px; background: red; color: white; border-radius: 50%; padding: 3px 7px; font-size: 14px;">
                                <?php echo getCartCount(); ?>
                            </span>
                        </a>
                    </div>

                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->

</header>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuBtn = document.querySelector(".mobile-menu-btn");
        const mobileMenu = document.querySelector(".mobile-menu");
        const closeBtn = document.querySelector(".close-menu");

        if (menuBtn && mobileMenu && closeBtn) {
            menuBtn.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                mobileMenu.classList.toggle("open");
                console.log("Menu toggled:", mobileMenu.classList.contains("open"));
            });

            closeBtn.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                mobileMenu.classList.remove("open");
                console.log("Menu closed");
            });

            //             document.addEventListener("click", function (event) {
            //             if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
            //                 mobileMenu.classList.add("open"); // Mở menu thay vì đóng
            //                 console.log("Clicked outside, menu opened");
            //     }
            // });
            document.addEventListener("click", function (event) {
                if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
                    mobileMenu.classList.remove("open");
                    console.log("Clicked outside, menu closed");
                }
            });
            menuBtn.style.position = "relative";
            menuBtn.style.zIndex = "3000";
        } else {
            console.error("Lỗi: Không tìm thấy phần tử menu.");
        }
    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let input = document.querySelector(".search-input");
        let placeholderText = "Tìm kiếm...";
        let index = 0;
        let isDeleting = false;

        function animatePlaceholder() {
            if (!isDeleting) {
                input.setAttribute("placeholder", placeholderText.substring(0, index));
                index++;
                if (index > placeholderText.length) {
                    isDeleting = true;
                    setTimeout(animatePlaceholder, 300);
                    return;
                }
            } else {
                index--;
                input.setAttribute("placeholder", placeholderText.substring(0, index));
                if (index === 0) {
                    isDeleting = false;
                }
            }
            setTimeout(animatePlaceholder, 70);
        }

        animatePlaceholder();
    });


</script>
<div class="clearfix"></div>
<!-- Header Container / End -->