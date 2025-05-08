<style>
    input:-webkit-autofill {
        background-color: white !important;
        color: black !important;
        box-shadow: 0 0 0px 1000px white inset !important;
    }

    .header-search-menu {
        display: flex;
        align-items: center;
        margin-left: 15px;
    }

    .search-form {
        display: flex;
        align-items: center;
        background: #fff;
        border-radius: 20px;
        padding: 5px 10px;
        border: 1px solid #ddd;
    }

    .search-input {
        border: none;
        outline: none;
        padding: 5px 10px;
        width: 180px;
    }

    .search-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: #FF385C;
        font-size: 16px;
    }

    .slideDown {
        text-align: center;

        animation-name: slideDown;
        -webkit-animation-name: slideDown;
        animation-duration: 2s;
        -webkit-animation-duration: 2s;

        animation-timing-function: ease;
        -webkit-animation-timing-function: ease;

        visibility: visible !important;
    }


    @keyframes slideDown {
        0% {
            transform: translateY(-100%);
        }

        50% {
            transform: translateY(8%);
        }

        65% {
            transform: translateY(-4%);
        }

        80% {
            transform: translateY(4%);
        }

        95% {
            transform: translateY(-2%);
        }

        100% {
            transform: translateY(0%);
        }
    }

    @-webkit-keyframes slideDown {
        0% {
            -webkit-transform: translateY(-100%);
        }

        50% {
            -webkit-transform: translateY(8%);
        }

        65% {
            -webkit-transform: translateY(-4%);
        }

        80% {
            -webkit-transform: translateY(4%);
        }

        95% {
            -webkit-transform: translateY(-2%);
        }

        100% {
            -webkit-transform: translateY(0%);
        }
    }
</style>

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

<!-- Header Container
  ================================================== -->
<div class="container">
    <div id="banner-top" class="container slideDown hide-on-mobile" role="alert"
        style="display: flex; align-items: center; justify-content: space-around; ">
        <img style=" width:10%; height: 20%;" src="hinhmenu/logo.png" alt="thành lập công ty đà nẵng">
        <div style="display: flex; flex-direction: column; align-items: center;">
            <span style="font-weight:bold; font-size: 18px;">TẬP ĐOÀN WINGROUP</span>
            <span style="font-weight:bold; font-size: 18px;">CÔNG TY CỔ PHẦN TẬP ĐOÀN QUỐC TẾ WINGROUP</span>
        </div>
        <div class="header-search-menu user-menu hide-on-mobile">
            <form action="search/" method="GET" class="search-form">
                <input type="text" name="q" placeholder="Tìm kiếm..." class="search-input" required
                    value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div style="text-align: right; display: flex; gap: 10px; margin-top:10px;">
            <a href="tel:0948454348">
                <button class="btn btn-primary"
                    style="margin: 0; padding: 10px 20px; border-radius: 25px; background-color: #007bff; border: none; font-size: 16px;color:#fff;">
                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i> <b>0923 093 789</b>
                </button>
            </a>
        </div>
    </div>

    <header id="header-container" class="header head-tr">
        <!-- Header -->
        <div id="header" class="head-tr bottom">

            <div class="container container-header">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="trangchu"><img src="hinhmenu/wingroup.png" data-sticky-logo="hinhmenu/wingroup.png"
                                alt="WINGROUP"></a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1 head-tr">
                        <ul id="responsive">
                            <li><a href="trangchu" class="<?php if ($title == 'trang-chu')
                                echo 'on'; ?>">TRANG CHỦ</a></li>
                            <li><a href="#" class="<?php if ($title == 'gioi-thieu')
                                echo 'on'; ?>">VỀ WINGROUP</a>
                                <ul>
                                    <li style="width:250px"><a href="bomay-tochuc">CHỨNG NHẬN</a></li>
                                    <?php
                                    $tv1 = "select * from gioi_thieu where id between 21 and 24 order by id ASC";
                                    $tv_11 = mysqli_query($link, $tv1);
                                    $a_tv_11 = mysqli_query($link, $tv1);
                                    $stt = 1;
                                    while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                        $id = "$tv_21[id]";
                                        $tieude = "$tv_21[tieude]";
                                        $linkurl = "$tv_21[linkurl]";
                                        ?>

                                        <li style="width:250px"><a
                                                href="gioithieu/<?php echo $tv_21['linkurl']; ?>"><?php echo $tieude; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="son" class=" <?php if ($title == 'ma-sanpham')
                                echo 'on'; ?>">SẢN PHẨM</a>
                                <ul>
                                    <?php
                                    $tv1 = "select * from loai_ma_sanpham order by id ASC ";
                                    $tv_11 = mysqli_query($link, $tv1);
                                    $stt = 1;
                                    while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                        $id = "$tv_21[id]";
                                        $thuocloai = "$tv_21[thuocloai]";
                                        $name_url = "$tv_21[name_url]";
                                        ?>
                                        <li><a
                                                href="danh-muc/<?php echo strtolower($tv_21['name_url']); ?>"><?php echo $thuocloai; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li><a href="duan" class="<?php if ($title == 'tin-dichvuu')
                                echo 'on'; ?>">CÔNG TRÌNH</a>
                            </li>
                            <li><a href="quanhe-codong" class=" <?php if ($title == 'tin-dichvu')
                                echo 'on'; ?>">PHỐI MÀU</a></li>

                            <li><a href="dienluc-khanhhoa" class=" <?php if ($title == 'tin-tintuc')
                                echo 'on'; ?>">TIN
                                    TỨC</a></li>
                            <li><a href=" lien-he" class=" <?php if ($title == 'lien-he')
                                echo 'on'; ?>">LIÊN HỆ</a></li>


                        </ul>
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->



            </div>
        </div>
        <!-- Header / End -->

    </header>

</div>


<div class="clearfix"></div>
<!-- Header Container / End -->