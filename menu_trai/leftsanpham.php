<?php
$currentCategory = basename($_SERVER['REQUEST_URI']); // Lấy phần cuối của URL hiện tại
?>

<div class="recent-post pt-5 px-3 bg-light rounded shadow-sm">
    <div class="font-weight-bold text-uppercase text-primary">DANH MỤC SẢN PHẨM</div>
    <div class="category-divider"></div>

    <ul class="list-unstyled mt-3">
        <?php
        require('db.php');

        $sp = $link->prepare("SELECT id, thuocloai, name_url FROM loai_ma_sanpham ORDER BY id ASC ");
        $sp->execute();
        $result = $sp->get_result();

        while ($row = $result->fetch_assoc()) {
            $categoryUrl = strtolower($row['name_url']);
            $categoryName = $row['thuocloai'];
            $link = str_replace(",", "", strtolower("danh-muc/$categoryUrl"));
            $isActive = ($currentCategory === $categoryUrl) ? 'active' : '';
            ?>
            <li class="category-item <?php echo $isActive; ?>">
                <a href="<?php echo $link; ?>" class="category-link">
                    <i class="fas fa-chevron-right"></i> <?php echo $categoryName; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<!-- CSS -->
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