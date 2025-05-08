<?php
require('db.php');

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    // Xóa chi tiết (nếu ON DELETE CASCADE thì không cần)
    // $stmt = $link->prepare("DELETE FROM chitiet_donhang WHERE donhang_id = ?");
    // $stmt->bind_param("i", $id);
    // $stmt->execute();
    // $stmt->close();

    // Xóa đơn hàng
    $stmt = $link->prepare("DELETE FROM donhang WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    echo "<script>window.location='quan_tri.php?p=danhsach_donhang'</script>";
    exit;
}
?>