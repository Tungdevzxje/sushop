<?php
require('db.php');
// Lấy biến GET filter
$where = [];
$params = [];
$types = '';

if (!empty($_GET['id'])) {
    $where[] = "id = ?";
    $params[] = (int) $_GET['id'];
    $types .= 'i';
}

if (!empty($_GET['hoten'])) {
    $where[] = "hoten LIKE ?";
    $params[] = "%" . $_GET['hoten'] . "%";
    $types .= 's';
}

if (!empty($_GET['sdt'])) {
    $where[] = "sdt LIKE ?";
    $params[] = "%" . $_GET['sdt'] . "%";
    $types .= 's';
}

if (!empty($_GET['from'])) {
    $where[] = "DATE(ngaydat) >= ?";
    $params[] = $_GET['from'];
    $types .= 's';
}
if (!empty($_GET['to'])) {
    $where[] = "DATE(ngaydat) <= ?";
    $params[] = $_GET['to'];
    $types .= 's';
}

if (!empty($_GET['trang_thai'])) {
    $where[] = "trang_thai = ?";
    $params[] = $_GET['trang_thai'];
    $types .= 's';
}

$where_sql = '';
if (!empty($where)) {
    $where_sql = "WHERE " . implode(" AND ", $where);
}

$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$per_page = 20;
$offset = ($page - 1) * $per_page;

$count_sql = "SELECT COUNT(*) FROM donhang $where_sql";
$count_stmt = $link->prepare($count_sql);
if ($types) {
    $count_stmt->bind_param($types, ...$params);
}
$count_stmt->execute();
$count_stmt->bind_result($total_rows);
$count_stmt->fetch();
$count_stmt->close();

$total_pages = ceil($total_rows / $per_page);

$sql = "SELECT * FROM donhang $where_sql ORDER BY id DESC LIMIT ?, ?";
$stmt = $link->prepare($sql);
$types_with_limit = $types . 'ii';
$params_with_limit = [...$params, $offset, $per_page];

if (!empty($params)) {
    $stmt->bind_param($types_with_limit, ...$params_with_limit);
} else {
    $stmt->bind_param('ii', $offset, $per_page);
}

$stmt->execute();
$result = $stmt->get_result();

// // Số đơn hàng mỗi trang
// $limit = 20;

// // Trang hiện tại
// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// if ($page < 1) $page = 1;

// // Vị trí bắt đầu lấy dữ liệu
// $offset = ($page - 1) * $limit;

// // Tổng số đơn hàng để tính tổng số trang
// $total_sql = "SELECT COUNT(*) as total FROM donhang";
// $total_result = $link->query($total_sql);
// $total_row = $total_result->fetch_assoc();
// $total_orders = $total_row['total'];
// $total_pages = ceil($total_orders / $limit);

// // Lấy danh sách đơn hàng theo phân trang
// $sql = "SELECT * FROM donhang ORDER BY id DESC LIMIT $limit OFFSET $offset";
// $result = $link->query($sql);

// Cập nhật trạng thái đơn hàng
if (isset($_POST['update_status'])) {
    $id = (int) $_POST['id'];
    $trang_thai = $_POST['trang_thai'];

    $stmt = $link->prepare("UPDATE donhang SET trang_thai = ? WHERE id = ?");
    $stmt->bind_param("si", $trang_thai, $id);
    $stmt->execute();
    $stmt->close();

    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

    echo '<script>window.location.href = "quan_tri.php?p=danhsach_donhang&page=' . $page . '";</script>';
    exit;
}

// Ngày hôm nay
$today = date('Y-m-d');
$month = date('m');
$year = date('Y');

// Đếm đơn hoàn thành trong ngày
$sql_ngay = "SELECT COUNT(*) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND DATE(ngaydat) = ?";
$stmt1 = $link->prepare($sql_ngay);
$stmt1->bind_param("s", $today);
$stmt1->execute();
$result1 = $stmt1->get_result()->fetch_assoc();
$don_ngay = $result1['total'];

// Đếm đơn hoàn thành trong tháng
$sql_thang = "SELECT COUNT(*) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND MONTH(ngaydat) = ? AND YEAR(ngaydat) = ?";
$stmt2 = $link->prepare($sql_thang);
$stmt2->bind_param("ii", $month, $year);
$stmt2->execute();
$result2 = $stmt2->get_result()->fetch_assoc();
$don_thang = $result2['total'];

// Đếm đơn hoàn thành trong năm
$sql_nam = "SELECT COUNT(*) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND YEAR(ngaydat) = ?";
$stmt3 = $link->prepare($sql_nam);
$stmt3->bind_param("i", $year);
$stmt3->execute();
$result3 = $stmt3->get_result()->fetch_assoc();
$don_nam = $result3['total'];

// Doanh thu ngày
$sql_doanhthu_ngay = "SELECT SUM(tongtien) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND DATE(ngaydat) = ?";
$stmt4 = $link->prepare($sql_doanhthu_ngay);
$stmt4->bind_param("s", $today);
$stmt4->execute();
$result4 = $stmt4->get_result()->fetch_assoc();
$doanhthu_ngay = $result4['total'] ?? 0;

// Doanh thu tháng
$sql_doanhthu_thang = "SELECT SUM(tongtien) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND MONTH(ngaydat) = ? AND YEAR(ngaydat) = ?";
$stmt5 = $link->prepare($sql_doanhthu_thang);
$stmt5->bind_param("ii", $month, $year);
$stmt5->execute();
$result5 = $stmt5->get_result()->fetch_assoc();
$doanhthu_thang = $result5['total'] ?? 0;

// Doanh thu năm
$sql_doanhthu_nam = "SELECT SUM(tongtien) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND YEAR(ngaydat) = ?";
$stmt6 = $link->prepare($sql_doanhthu_nam);
$stmt6->bind_param("i", $year);
$stmt6->execute();
$result6 = $stmt6->get_result()->fetch_assoc();
$doanhthu_nam = $result6['total'] ?? 0;

// Hàm chuyển tiếng Việt sang không dấu để dùng làm class CSS
function khong_dau($str)
{
    $str = strtolower($str);
    $str = preg_replace('/[áàảãạăắằẳẵặâấầẩẫậ]/u', 'a', $str);
    $str = preg_replace('/[éèẻẽẹêếềểễệ]/u', 'e', $str);
    $str = preg_replace('/[íìỉĩị]/u', 'i', $str);
    $str = preg_replace('/[óòỏõọôốồổỗộơớờởỡợ]/u', 'o', $str);
    $str = preg_replace('/[úùủũụưứừửữự]/u', 'u', $str);
    $str = preg_replace('/[ýỳỷỹỵ]/u', 'y', $str);
    $str = preg_replace('/đ/', 'd', $str);
    $str = preg_replace('/[^a-z0-9]+/', '-', $str);
    return trim($str, '-');
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quản lý đơn hàng</title>
    <style>
        .badge.cho {
            background-color: yellow;
            color: black;
        }

        .badge.xac-nhan {
            background-color: green;
            color: white;
        }

        .badge.dang-giao {
            background-color: blue;
            color: white;
        }

        .badge.hoan-thanh {
            background-color: lightgreen;
            color: black;
        }

        .badge.huy {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Quản lý đơn hàng</h2>
        <form method="GET" class="mb-4 row g-3">
            <input type="hidden" name="p" value="danhsach_donhang">
            <div class="col-md-2">
                <input type="text" name="id" class="form-control" placeholder="Mã đơn" value="<?= $_GET['id'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <input type="text" name="hoten" class="form-control" placeholder="Tên khách"
                    value="<?= $_GET['hoten'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <input type="text" name="sdt" class="form-control" placeholder="SĐT" value="<?= $_GET['sdt'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <input type="date" name="from" class="form-control" value="<?= $_GET['from'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <input type="date" name="to" class="form-control" value="<?= $_GET['to'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <select name="trang_thai" class="form-select">
                    <option value="">Tất cả trạng thái</option>
                    <option value="chờ" <?= ($_GET['trang_thai'] ?? '') == 'chờ' ? 'selected' : '' ?>>Chờ</option>
                    <option value="xác nhận" <?= ($_GET['trang_thai'] ?? '') == 'xác nhận' ? 'selected' : '' ?>>Xác nhận
                    </option>
                    <option value="đang giao" <?= ($_GET['trang_thai'] ?? '') == 'đang giao' ? 'selected' : '' ?>>Đang giao
                    </option>
                    <option value="hoàn thành" <?= ($_GET['trang_thai'] ?? '') == 'hoàn thành' ? 'selected' : '' ?>>Hoàn
                        thành</option>
                    <option value="hủy" <?= ($_GET['trang_thai'] ?? '') == 'hủy' ? 'selected' : '' ?>>Hủy</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Lọc</button>
            </div>
        </form>


        <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>#ID</th>
                    <th>Họ tên</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Thanh toán</th>
                    <th>Tổng tiền</th>
                    <th>Ngày đặt</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['hoten']) ?></td>
                        <td><?= htmlspecialchars($row['sdt']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['diachi']) ?></td>
                        <td><?= htmlspecialchars($row['thanhtoan']) ?></td>
                        <td><?= number_format($row['tongtien']) ?> đ</td>
                        <td><?= $row['ngaydat'] ?></td>
                        <td>
                            <span class="badge <?= khong_dau($row['trang_thai']) ?>">
                                <?= htmlspecialchars($row['trang_thai']) ?>
                            </span>
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <div class="d-flex flex-column gap-1">
                                    <select name="trang_thai" class="form-select form-control">
                                        <option value="chờ" <?= $row['trang_thai'] == 'chờ' ? 'selected' : '' ?>>Chờ</option>
                                        <option value="xác nhận" <?= $row['trang_thai'] == 'xác nhận' ? 'selected' : '' ?>>Xác
                                            nhận</option>
                                        <option value="đang giao" <?= $row['trang_thai'] == 'đang giao' ? 'selected' : '' ?>>
                                            Đang giao</option>
                                        <option value="hoàn thành" <?= $row['trang_thai'] == 'hoàn thành' ? 'selected' : '' ?>>
                                            Hoàn thành</option>
                                        <option value="hủy" <?= $row['trang_thai'] == 'hủy' ? 'selected' : '' ?>>Hủy</option>
                                    </select>
                                    <button type="submit" name="update_status" class="btn btn-sm btn-primary mt-2">Cập
                                        nhật</button>
                                    <a href="quan_tri.php?p=chitiet_donhang&id=<?= $row['id'] ?>"
                                        class="btn btn-sm btn-info mt-2">Chi tiết</a>
                                    <a href="quan_tri.php?p=xoa_donhang&id=<?= $row['id'] ?>"
                                        class="btn btn-sm btn-danger mt-2"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa đơn hàng này?')">Xóa</a>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- PHÂN TRANG -->
        <!-- PHÂN TRANG -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                for ($i = 1; $i <= $total_pages; $i++):
                    $query = $_GET;
                    $query['page'] = $i;
                    $url = 'quan_tri.php?' . http_build_query($query);
                    ?>
                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                        <a class="page-link" href="<?= $url ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>


        <!-- THỐNG KÊ ĐƠN HÀNG HOÀN THÀNH -->

        <div class="mt-4">
            <h4 style="color:blue">Thống kê đơn hoàn thành</h4>
            <ul class="list-group">
                <li class="list-group-item">Trong ngày hôm nay (<?= date('d/m/Y') ?>): <strong><?= $don_ngay ?></strong>
                    đơn</li>
                <li class="list-group-item">Trong tháng <?= date('m/Y') ?>: <strong><?= $don_thang ?></strong> đơn</li>
                <li class="list-group-item">Trong năm <?= date('Y') ?>: <strong><?= $don_nam ?></strong> đơn</li>
            </ul>
        </div>

        <!-- THỐNG KÊ DOANH THU -->

        <div class="mt-4">
            <h4 style="color:blue">Doanh thu</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Trong ngày hôm nay (<?= date('d/m/Y') ?>):</strong>
                    <?= $don_ngay ?> đơn | Doanh thu: <strong><?= number_format($doanhthu_ngay) ?> đ</strong>
                </li>
                <li class="list-group-item">
                    <strong>Trong tháng <?= date('m/Y') ?>:</strong>
                    <?= $don_thang ?> đơn | Doanh thu: <strong><?= number_format($doanhthu_thang) ?> đ</strong>
                </li>
                <li class="list-group-item">
                    <strong>Trong năm <?= date('Y') ?>:</strong>
                    <?= $don_nam ?> đơn | Doanh thu: <strong><?= number_format($doanhthu_nam) ?> đ</strong>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>