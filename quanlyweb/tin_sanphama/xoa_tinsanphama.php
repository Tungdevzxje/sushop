<?php
	$result=mysql_query("SELECT * FROM tin_sanphama WHERE id = '$_GET[id]' ");
   $row_dulieu_sua		=	mysql_fetch_array($result);
    $hinhanh	=	$row_dulieu_sua['hinhanh'];
	$taptin="../HinhCTSP/Hinhdichvu/$hinhanh";
	unlink($taptin);

    $hinhqcab	=	$row_dulieu_sua['hinhqcab'];
	$taptinhinhqcab="../HinhCTSP/Hinhdichvu/$hinhqcab";
	unlink($taptinhinhqcab);
    
    $hinhqcabc	=	$row_dulieu_sua['hinhqcabc'];
	$taptinhinhqcabc="../HinhCTSP/Hinhdichvu/$hinhqcabc";
	unlink($taptinhinhqcabc);
    
    $hinhndab	=	$row_dulieu_sua['hinhndab'];
	$taptinhinhndab="../HinhCTSP/Hinhdichvu/$hinhndab";
	unlink($taptinhinhndab);
    
    $hinhndabc	=	$row_dulieu_sua['hinhndabc'];
	$taptinhinhndabc="../HinhCTSP/Hinhdichvu/$hinhndabc";
	unlink($taptinhinhndabc);
    
    $hinhndabcd	=	$row_dulieu_sua['hinhndabcd'];
	$taptinhinhndabcd="../HinhCTSP/Hinhdichvu/$hinhndabcd";
	unlink($taptinhinhndabcd);
	
	$chuoi="DELETE FROM tin_sanphama WHERE id = '$_GET[id]' ";
	mysql_query($chuoi);
		 echo "<form name='frm_dangnhap'>
			        <input type'hidden' name='chuyentrang' value='quan_tri.php?p=ds_tin_sanphama'>
					</form>";
?>
<script type="text/javascript">
if(document.frm_dangnhap)
 {
   var trangcanchuyen = document.frm_dangnhap.chuyentrang.value;
   window.location = trangcanchuyen;
 }
</script>