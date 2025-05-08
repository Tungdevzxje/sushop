<?php
require('db.php');

// Lấy biến GET filter
$where = [];
$params = [];
$types = '';

if (!empty($_GET['id'])) {
    $where[] = "id = ?";
    $params[] = (int)$_GET['id'];
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
    $where[] = "ngaydat >= ?";
    $params[] = $_GET['from'];
    $types .= 's';
}
if (!empty($_GET['to'])) {
    $where[] = "ngaydat <= ?";
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

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
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
?>

<form method="GET" class="mb-4 row g-3" style="margin-top: 50px">
    <input type="hidden" name="p" value="timkiem_danhsachdonhang">
    <div class="col-md-2"><input type="text" name="id" class="form-control" placeholder="Mã đơn" value="<?= $_GET['id'] ?? '' ?>"></div>
    <div class="col-md-2"><input type="text" name="hoten" class="form-control" placeholder="Tên khách" value="<?= $_GET['hoten'] ?? '' ?>"></div>
    <div class="col-md-2"><input type="text" name="sdt" class="form-control" placeholder="SĐT" value="<?= $_GET['sdt'] ?? '' ?>"></div>
    <div class="col-md-2"><input type="date" name="from" class="form-control" value="<?= $_GET['from'] ?? '' ?>"></div>
    <div class="col-md-2"><input type="date" name="to" class="form-control" value="<?= $_GET['to'] ?? '' ?>"></div>
    <div class="col-md-2">
        <select name="trang_thai" class="form-select">
            <option value="">Tất cả</option>
            <option value="chờ" <?= ($_GET['trang_thai'] ?? '') == 'chờ' ? 'selected' : '' ?>>Chờ</option>
            <option value="xác nhận" <?= ($_GET['trang_thai'] ?? '') == 'xác nhận' ? 'selected' : '' ?>>Xác nhận</option>
            <option value="đang giao" <?= ($_GET['trang_thai'] ?? '') == 'đang giao' ? 'selected' : '' ?>>Đang giao</option>
            <option value="hoàn thành" <?= ($_GET['trang_thai'] ?? '') == 'hoàn thành' ? 'selected' : '' ?>>Hoàn thành</option>
            <option value="hủy" <?= ($_GET['trang_thai'] ?? '') == 'hủy' ? 'selected' : '' ?>>Hủy</option>
        </select>
    </div>
    <div class="col-md-2"><button type="submit" class="btn btn-primary w-100 mt-2">Lọc</button></div>
</form>

<table class="table table-bordered table-hover">
<thead><tr>
    <th>ID</th><th>Tên</th><th>SĐT</th><th>Trạng thái</th><th>Ngày</th><th>...</th>
</tr></thead>
<tbody>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['hoten']) ?></td>
    <td><?= htmlspecialchars($row['sdt']) ?></td>
    <td><?= htmlspecialchars($row['trang_thai']) ?></td>
    <td><?= $row['ngaydat'] ?></td>
    <td>...</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>

<nav>
<ul class="pagination">
<?php
$query = $_GET;
for ($i = 1; $i <= $total_pages; $i++):
    $query['page'] = $i;
    $url = 'quan_tri.php?' . http_build_query($query);
?>
    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
        <a class="page-link" href="<?= $url ?>"><?= $i ?></a>
    </li>
<?php endfor; ?>
</ul>
</nav>