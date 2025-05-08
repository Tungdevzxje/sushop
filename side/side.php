<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    @media screen and (max-width: 576px) {
        .swiper {
            margin-top: -4px;
        }
    }

    .swiper {
        width: 100%;
        height: 100%;
        top: 67px;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper.swiper-cube {
        overflow: hidden !important;
    }
</style>

<!-- Swiper Slider -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        require('db.php');
        $tv = "select * from thuong_mai order by id DESC limit 0,3";
        $tv_1 = mysqli_query($link, $tv);
        ?>
        <?php
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
            $id = "$tv_2[id]";
            $tieude = "$tv_2[tieude]";
            $mota = "$tv_2[mota]";
            $ngay = "$tv_2[ngay]";
            ?>

            <div class="swiper-slide">
                <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>" />
            </div>
        <?php } ?>
    </div>

    <!-- Nút điều hướng -->
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->

    <!-- Chấm chỉ số -->
    <!-- <div class="swiper-pagination"></div> -->
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        effect: "coverflow",
        speed: 1500,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>