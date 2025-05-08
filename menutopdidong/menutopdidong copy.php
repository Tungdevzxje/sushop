<!-- Header Container
  ================================================== -->
<div id="banner-top" class="container slideDown hide-on-mobile" role="alert"
    style="display: flex; align-items: center; justify-content: space-evenly; height: 68px; margin-top:8px;">
    <img style=" width:6%; height: 100%;" src="hinhmenu/logo.png" alt="thành lập công ty đà nẵng">
    <div style="display: flex; flex-direction: column; align-items: center;">
        <span style="font-weight:bold; font-size: 18px;">MAY ĐO BÁN SẴN ĐỒNG PHỤC HỌC SINH</span>
        <span style="font-weight:bold; font-size: 18px;">CHUẨN FORM - BỀN ĐẸP - GIÁ TỐT</span>
    </div>
    <div class="header-search-menu user-menu hide-on-mobile">
        <form action="search/" method="GET" class="search-form">
            <input type="text" name="q" placeholder="Tìm kiếm..." class="search-input" required
                value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div style="text-align: right; display: flex; gap: 10px;">
        <a href="tel:0905108532">
            <button class="btn btn-primary"
                style="margin: 0; padding: 10px 20px; border-radius: 25px; background-color: #f15b5b; border: none; font-size: 16px;color:#fff;">
                <i class="fa fa-volume-control-phone" aria-hidden="true"></i> <b>0905 108 532</b>
            </button>
        </a>
    </div>
    <div style="text-align: right; display: flex; gap: 10px;">
        <a href="tel:0905198160">
            <button class="btn btn-primary"
                style="margin: 0; padding: 10px 20px; border-radius: 25px; background-color: #f15b5b; border: none; font-size: 16px;color:#fff;">
                <i class="fa fa-volume-control-phone" aria-hidden="true"></i> <b>0905 198 160</b>
            </button>
        </a>
    </div>
</div>
<!-- Mobile Navigation -->
<div class="mobile-menu-container">
    <button class="mobile-menu-btn">
        <i class="fa fa-bars"></i>
    </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="trangchu"><img src=" hinhmenu/REDSUNN.png" alt=""></a>
</div>

<nav class="mobile-menu">
    <button class="close-menu">&times;</button>
    <ul>
        <li><a href="trangchu">TRANG CHỦ</a></li>
        <li><a href="redsun-pccc">GIỚI THIỆU</a></li>
        <li><a href="dong-phuc-hoc-sinh">ĐỒNG PHỤC HỌC SINH</a></li>
        <li><a href="REDSUN.pdf">HƯỚNG DẪN CHỌN SIZE</a></li>
        <li><a href="thietbi-pccc-redsun">TIN TỨC</a></li>
        <li><a href="lien-he">LIÊN HỆ</a></li>
    </ul>
</nav>



<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="trangchu"><img src="hinhmenu/REDSUNN.png" data-sticky-logo="hinhmenu/REDSUNN.png"
                            alt="bình chữa cháy pccc tam kỳ"></a>
                </div>


                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="trangchu" class="<?php if ($title == 'trang-chu')
                            echo 'on'; ?>">TRANG
                                CHỦ</a></li>
                        <li><a href="redsun-pccc" class="<?php if ($title == 'gioi-thieu')
                            echo 'on'; ?>"> GIỚI THIỆU</a>
                        </li>
                        <li><a href="dong-phuc-hoc-sinh" class=" <?php if ($title == 'ma-sanpham' || $title == 'ma-sanphamct')
                            echo 'on'; ?>">ĐỒNG PHỤC HỌC SINH</a>
                        </li>
                        <li><a href="size" class="<?php if ($title == 'tin-dichvuu')
                            echo 'on'; ?>"> HƯỚNG DẪN CHỌN SIZE</a>
                        </li>
                        <li><a href="thietbi-pccc-redsun" class=" <?php if ($title == 'tin-tintuc')
                            echo 'on'; ?>">TIN
                                TỨC</a></li>
                        <li><a href="lien-he" class=" <?php if ($title == 'lien-he')
                            echo 'on'; ?>">LIÊN HỆ</a></li>
                    </ul>

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