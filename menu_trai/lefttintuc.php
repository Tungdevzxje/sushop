<?php
$currentCategory = basename($_SERVER['REQUEST_URI']); // Lấy phần cuối của URL hiện tại
?>

<div class="recent-post pt-5 px-3 bg-light rounded shadow-sm">
    <div class="font-weight-bold text-uppercase text-primary">DANH MỤC SẢN PHẨM</div>
    <div class="category-divider"></div>

    <ul class="list-unstyled mt-3">
        <?php
        require('db.php');

        $sp = $link->prepare("SELECT id, thuocloai, name_url FROM loai_ma_sanpham ORDER BY id ASC LIMIT 6");
        $sp->execute();
        $result = $sp->get_result();

        while ($row = $result->fetch_assoc()) {
            $categoryUrl = strtolower($row['name_url']);
            $categoryName = $row['thuocloai'];

            // Xác định mục đang được chọn
            $isActive = ($currentCategory === $categoryUrl) ? 'active' : '';
            ?>
            <li class="category-item <?php echo $isActive; ?>">
                <a href="danh-muc/<?php echo $categoryUrl; ?>" class="category-link">
                    <i class="fas fa-chevron-right"></i> <?php echo $categoryName; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<div class="recent-post pt-5 px-3">
    <div class="font-weight-bold">BÀI VIẾT LIÊN QUAN</div>
    <div
        style="display: block; height: 3px; font-weight: bold; background-color: #FF385C; width: 111px; margin-top: .5rem; margin-bottom: 1rem;">
    </div>
    <?php
    require('db.php');
    $tv = "select * from tin_tintuc order by id desc limit 0,6";
    $tv_1 = mysqli_query($link, $tv);
    $a_tv_1 = mysqli_query($link, $tv);
    ?>
    <?php
    while ($row = mysqli_fetch_array($tv_1)) {
        $link_hinh = "HinhCTSP/Hinhtintuc/" . $row['hinhanh'];
        $id = $row['id'];
        $tieude_en = $row['tieude_en'];
        $tieude = $row['tieude'];
        $mota = $row['mota'];
        $ngay = $row['ngay'];
        $url = $row['linkurl'];
        $link = str_replace("?", "", strtolower("tintuc/$url"));
        ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12" style="padding:5px; float: left;">
            <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12" style="border: 0px solid #000; float: left; padding:5px;">
                <div class="recent-img">
                    <a href="<?php echo "$link"; ?>"><img src="<?php echo $link_hinh; ?>"
                            alt="<?php echo "$tieude_en"; ?>" /></a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-xs-12" style="border: 0px solid #f00; float: left; padding:3px;">
                <div class="info-img">

                    <div style="font-size: 14px;line-height: 22px; font-weight:bold"><a
                            href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a></div>

                </div>
            </div>
        </div>
    <?php } ?>

</div>

<style>
    .category-item.active {
        color: #FF385C;
        border-radius: 5px;
    }

    .category-item.active .category-link {
        color: #FF385C;
        font-weight: bold;
    }

    .category-divider {
        height: 3px;
        background-color: #FF385C;
        width: 120px;
        margin-top: .5rem;
        margin-bottom: 1rem;
    }

    .category-item {
        padding: 8px 0;
        border-bottom: 1px solid #ddd;
    }

    .category-item:last-child {
        border-bottom: none;
    }

    .category-link {
        text-decoration: none;
        color: #333;
        font-weight: 500;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .category-link i {
        margin-right: 10px;
        color: #FF385C;
    }

    .category-link:hover {
        color: #FF385C;
        font-weight: bold;
    }
</style>