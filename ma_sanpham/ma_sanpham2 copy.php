<style>
    .box-shadow-fit {
        display: inline-block;
        width: fit-content;
        padding: 15px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);

    }

    .box-shadow-fit p {
        padding-top: 10px;
    }

    .news-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
        border-radius: 8px;
    }

    .news-itemm {
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #333;
        font-size: 16px;
        font-weight: 600;
        padding: 8px;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s;
    }

    .news-icon {
        font-size: 18px;
        color: #007bff;
        /* Màu xanh */
        transition: color 0.3s;
    }


    .news-itemm:hover {
        background: #007bff;
        color: white;
    }

    .news-itemm:hover .news-icon {
        color: white;
    }

    /* đầu trang */

    .faq_main_container {
        max-width: 800px;
        width: 100%;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        align-items: center;
    }

    .faq_container {
        border: 2px solid #df81ff;
    }

    .faq_question {
        font-size: 1.2rem;
        font-weight: 600;
        padding: 10px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }

    .answercont {
        max-height: 0;
        overflow: hidden;
        transition: 0.3s;
    }

    .answer {
        padding: 0 10px 20px;
        line-height: 1.5rem;
    }

    .fqa_headline_container h2 span {
        font-weight: 700;
    }

    .faq_question-text h3 {
        font-size: 22px;
    }

    .icon.active {
        background: transparent;
        border: 2px solid #fff;
    }

    .icon:hover {
        cursor: pointer;
    }

    .icon-shape {
        position: relative;
        width: 50px;
        height: 50px;
        background-color: #007BFF;
    }

    .icon .icon-shape::before {
        position: absolute;
        content: "";
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 30px;
        height: 4px;
        background: #fff;
        border-radius: 3px;
        transition: all 0.5s ease;
    }

    .icon .icon-shape::after {
        position: absolute;
        content: "";
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 4px;
        height: 30px;
        background: #fff;
        border-radius: 3px;
        transition: all 0.5s ease;
    }

    .icon .icon-shape.active::before {
        transform: translate(-50%, -50%) rotate(180deg);
        transition: all 0.5s ease;
    }

    .icon .icon-shape.active::after {
        transform: translate(-50%, -50%) rotate(90deg);
        transition: all 0.5s ease;
    }





    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        color: white;
    }

    .title-main {
        text-transform: capitalize;
        color: #333;
        font-size: 18px;
        font-weight: 600;
        display: block;
    }

    .title-span {
        text-transform: capitalize;
        color: #333;
        font-size: 18px;
        font-weight: bold;
        padding-top: 5px;
        display: block;
        text-decoration: none;
    }

    .title-trangchu {
        color: #c18847;
        font-weight: bold;
        text-transform: capitalize;
        font-size: 23px;

    }

    .title-haonhien {
        font-family: 'Montserrat', sans-serif;
        text-transform: capitalize;
        color: #121B22;
        font-size: 1.1rem;
        font-weight: 600;
        display: block;
    }

    .title-cauhoi {
        font-family: 'Montserrat', sans-serif;
        text-transform: capitalize;
        color: #121B22;
        font-size: 20px;
        font-weight: 600;
        display: block;
    }



    .title-faq {
        color: #c18847;
        font-weight: bold;
        text-transform: capitalize;
        font-size: 23px;

    }

    .title-trangdienlanh {
        color: #111;
        font-weight: bold;
        text-transform: capitalize;
        font-size: 22px;
        text-align: center;
        padding-bottom: 25px;
        color: #c18847
    }

    .blog-span {
        font-size: 29px;
        font-weight: bolder;
        padding-bottom: 20px;
        line-height: 35px;
        color: #c18847;
    }

    .blog-section {
        padding: 50px 0;
        background-color: #f9f9f9;
    }

    .blog-section .row>.col-xl-6:first-child {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
        align-items: stretch;
    }

    .blog-section .row>.col-xl-6:first-child>div {
        flex: 0 0 calc(50% - 10px);
        background: #fff;
        border-radius: 8px;
        text-align: center;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .blog-section .row>.col-xl-6:first-child>div:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .blog-section .row>.col-xl-6:first-child img {
        margin-bottom: 15px;
    }

    .blog-section .row>.col-xl-6:first-child span {
        font-size: 28px;
        font-weight: bold;
        color: #2c3e50;
        margin: 10px 0;
    }

    .blog-section .row>.col-xl-6:first-child p {
        font-size: 28px;
        font-weight: bold;
        color: rgb(0, 0, 0);
        margin: 0;
    }

    .blog-section .row>.col-xl-6:last-child {
        padding: 40px 30px;
    }

    .blog-section .row>.col-xl-6:last-child h2 {
        font-size: 28px;
        color: rgb(0, 0, 0);
        font-weight: bold;
        margin-bottom: 20px;
    }

    .blog-section .row>.col-xl-6:last-child p {
        font-size: 16px;
        line-height: 1.6;
        color: rgb(0, 0, 0);
    }
</style>
<?php
include('phantrang/phantrang_dichvu.php');
?>


<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <div style="padding:10px;">
                <h1 style="font-weight: bold; color:#c00; padding-top: 100px;">WINGROUP PAINT</h1>
                <div><a href="trangchu">Trang chủ </a> &nbsp;/&nbsp; Sản phẩm</div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION BLOG -->
<section class="blog-section">
    <div class="container">
        <div class="news-wrap">
            <div class="row">
                <?php
                require('db.php');
                include('phantrang/phantrang_sanpham.php');
                // Helper function to escape output
                function escape($value)
                {
                    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
                // Initialize pager and set limit
                $p = new pager;
                $limit = 8;
                $start = $p->findStart($limit);

                // Count total items and calculate total pages
                $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM ma_sanpham");
                $countRow = mysqli_fetch_assoc($countResult);
                $count = $countRow['total'];
                $pages = $p->findPages($count, $limit);

                // Fetch paginated data
                $sql = mysqli_query($link, "SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT $start, $limit");
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
                    $giaban = $row['giaban'];
                    $url = escape($row['linkurl']);
                    $link = str_replace("?", "", strtolower("sanpham/$url"));

                    ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                        <div class="news-item">
                            <a href="<?php echo "$link"; ?>" class="news-img-link">
                                <div class="img-box hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/HinhSanPham/<?php echo $hinhanh; ?>"
                                        alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="<?php echo "$link"; ?>">
                                    <h2 class="title-main"><?php echo $tieude; ?></h2>
                                </a>
                                <ul class="starts text-center" style="padding: 0px;margin-top:0px; margin-bottom:0px;">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div style="text-align: center; font-weight: bold;color: #c00;">
                                    <p style="margin-bottom:18px;">
                                        <font style='color:#000; font-size: 14px;'>GIÁ:</font>
                                        <font style='color:#c00; font-size: 15px;'>
                                            <?php
                                            if (is_numeric($giaban)) {
                                                echo number_format($giaban) . ' vnđ';
                                            }
                                            ?>
                                        </font>
                                    </p>
                                </div>

                                <div style="text-align: center;">
                                    <a class="btn1 btn-sm" href="#"><i class="fa fa-shopping-cart"
                                            style="color:#ff0; padding-right: 9px;"></i>0973 611 973</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>


                <div class="bgphantranga">
                    <?php
                    echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: right;'> &nbsp;&nbsp;&nbsp;&nbsp;Page: ";
                    $pagelist = $p->pageList($_GET['page'], $pages);
                    echo $pagelist;
                    echo "</div>"
                        ?>
                </div>
            </div>
</section>
<!-- END SECTION BLOG -->