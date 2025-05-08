<?php
chong_pha_hoai();
?>
<?php
$title = "trang-chu";
switch ($_GET['thamso']) {
	case "lien_he":
		$title = "lien-he";
		$title_meta = "Đồng Phục Học Sinh Đà Nẵng - May Đo Theo Yêu Cầu";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;
	case "gioi_thieu":
		$title = "gioi-thieu";
		$title_meta = "Đồng Phục Học Sinh Đà Nẵng";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;
	case "ma_sanpham":
		$title = "ma-sanpham";
		$title_meta = "Đồng Phục Học Sinh Cấp 1, 2, 3 Đà Nẵng - May Sẵn & May Đo";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;

	case "ma_sanphamct":
		$title = "ma-sanphamct";
		$title_meta = "Đặt May Đồng Phục Học Sinh Đà Nẵng";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;
	case "tin_tintuc":
		$title = "tin-tintuc";
		$title_meta = "Kinh Nghiệm Chọn Đồng Phục Học Sinh Đẹp, Chuẩn Form";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;

	case "tin_tintucct":
		$title = "tin-tintuc";
		$title_meta = "Đồng phục học sinh cấp 1 sơn trà đà nẵng";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;
	case "tin_dichvu":
		$title = "tin-dichvu";
		$title_meta = "Dịch Vụ May Đo Đồng Phục Học Sinh";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;
	case "tin_dichvuu":
		$title = "tin-dichvuu";
		$title_meta = "Đồng Phục Học Sinh Cấp 3 Đà Nẵng";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;
	case "tin_dichvuct":
		$title = "tin-dichvu";
		$title_meta = "Cung cấp đồng phục học sinh cấp 2 Đà Nẵng";
		$dis = "LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ";
		$key = "đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.";
		break;

	case "tim_kiem":
		$title_meta = $_GET['tu_khoa'];
		break;
	// GIOI THIEU
	case "chitiet_gioithieu":
		$id = $_REQUEST['id'];
		$tv = "select * from gioi_thieu where linkurl like '%" . $id . "%' order by id ";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tieude'];
		$title = "gioi-thieu";
		$hinhanh = "/HinhCTSP/" . $tv_2['hinhanh'];
		break;
	// tin tuc
	case "chitiet_tintintuc":
		$title = "tin-tintuc";
		$id = $_GET['url'];
		$tv = "select * from tin_tintuc where linkurl like '%" . $id . "%' order by id ";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude_en'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tukhoa'];
		$hinhanh = "/HinhCTSP/Hinhtintuc/" . $tv_2['hinhanh'];
		break;
	// dich vu
	case "chitiet_tindichvu":
		$title = "tin-dichvu";
		$id = $_GET['url'];
		$tv = "select * from tin_dichvu where linkurl like '%" . $id . "%' order by id ";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude_en'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tukhoa'];
		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;
	//dichvuu
	case "chitiet_tindichvuu":
		$title = "tin-dichvuu";
		$id = $_GET['url'];
		$tv = "select * from tin_dichvuu where linkurl like '%" . $id . "%' order by id ";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude_en'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tukhoa'];
		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;
	// dich vu
	case "chitiet_tinthicong":
		$title = "tin-thicong";
		$id = $_REQUEST['id'];
		$tv = "select * from tin_thicong where id like '$id'";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude_en'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tieude'];
		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;

	// dich vu
	case "chitiet_masanpham":
		$title = "ma-sanpham";
		$id = $_REQUEST['id'];
		$tv = "select * from ma_sanpham where linkurl like '%" . $id . "%' order by id ";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tieude'];
		$hinhanh = "/HinhCTSP/" . $tv_2['hinhanh'];
		break;

	case "xuat_mot_tin":
		$tv = "select * from du_lieu_mot_tin where id='$_GET[id]'";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['ten'];
		break;
	default:
		$tv = "select * from he_thong  order by id  limit 0,1";
		$tv_1 = mysqli_query($link, $tv);
		$a_tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$tieude = "$tv_2[tieude]";
		$dis = "$tv_2[dis]";
		$key = "$tv_2[key]";
		$title_meta = "$tieude";
		$dis = "$dis";
		$key = "$key";
}
$config_url = $_SERVER["SERVER_NAME"];
?>