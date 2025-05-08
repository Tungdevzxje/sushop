<?php

	class pager
	{
		
		function findStart ($limit)
		{
			if(!isset($_GET['page']) || ($_GET['page']=="1" ))
			{
				$start=0;
				$_GET['page']=1;
			}
			else
			{
				$start=($_GET['page']-1)*$limit;
			}
			return $start;
		}
		function findPages ($count, $limit)
		{
			$page=(($count%$limit)==0)? $count/$limit:floor($count/$limit) +1;
			return $page;
		}
		function pageList ($curpage, $pages)
		{
			$page_list="";
			
			if(($curpage!=1) && ($curpage))
			{
				$page_list.="<a href=\"".$_SERVER['PHP_SELF']."?p=danhsach_tin_sanphama&page=1\" title=\"Trang đầu\" style='margin:4px;'> << </a>";
			}
			if($curpage-1>0)
			{
				$page_list.="<a href=\"".$_SERVER['PHP_SELF']."?p=danhsach_tin_sanphama&page=".($curpage-1)."\" title=\"Về trang trước\" style='margin:4px;'><font color='#00ccff'> < </font></a>";
			}
			for($i=1;$i<=$pages;$i++)
			{
				if($i==$curpage)
				{
					$page_list.="<b>".$i."</b>";
				}
				else
				{
					$page_list.="<a href=\"".$_SERVER['PHP_SELF']."?p=danhsach_tin_sanphama&page=".$i."\" title=\"Trang ".$i."\" style='margin:4px;'><font color='red'>[".$i."]</font></a>";
				}
				$page_list.="";
			}
			if(($curpage+1)<=$pages)
			{
				$page_list.="<a href=\"".$_SERVER['PHP_SELF']."?p=danhsach_tin_sanphama&page=".($curpage+1)."\" title=\"Đến trang sau\" style='margin:4px;' ><font color='#00ccff'> > </font></a>";
			}
			if(($curpage!=$pages) && ($pages!=0))
			{
				$page_list.="<a href=\"".$_SERVER['PHP_SELF']."?p=danhsach_tin_sanphama&page=".$pages."\" title=\"Trang cuối\" > >> </a>";
			}
			$page_list.="</td>\n";
			return $page_list;
		}
		function nextprev($curpage, $page)
		{
			$next_prev="";
			if(($curpage-1)<0 || ($curpage-1)!=1)
			{
				$next_prev.="Back";
			}
			else
			{
			
				$next_prev="<a href=\"?p=danhsach_tin_sanphama&page=".($curpage-1)."\">Back</a>";
			}
			$next_prev.="|";
			if(($curpage+1)>$page)
			{
				$next_prev.="Next";
			}
			else
			{
				$next_prev="<a href=\"?p=danhsach_tin_sanphama&page=".($curpage+1)."\">Next</a>";
			}
			return $next_prev;
		}
		
		
		
}
?>

<?php
	  // kết nối CSDL
	
	  require('db.php');
	  
	//$ketnoi_maychu = ketnoi_MC();
	//chon_CSDL($ketnoi_maychu);
	  $p=new pager;
	  $limit=20;
	  $start=$p->findStart($limit);
	  $count=mysql_num_rows(mysql_query("SELECT*FROM tin_sanphama"));
	  $pages= $p->findPages($count,$limit);
	  
	  $result=mysql_query("SELECT * FROM tin_sanphama ORDER BY id DESC limit $start,$limit");
	  
	  // $result=mysql_query("SELECT * FROM danh_muc_sp ORDER BY masp DESC");
	   if(mysql_num_rows($result)<>0)
	  {
echo "<h2 align='div'>Thông Tin Người Dùng </h2>";
	  echo	" <table border='1' align='center' width='770px'>";
        echo"<tr bgcolor='orange'>";
		  echo "<td >STT</td>";
           echo "<td >Id</td>";
          	
        echo "<td >Tiêu đề</td>";
         echo "<td >Loại</td>";
        //echo "<td >Mô tả</td>";
		 echo "<td >Mã SP</td>";
          echo "<td >Ngày</td>";
		  
	  echo "<td >Hình ảnh</td>";
          echo "<td >Hình NDung1</td>"; 
         echo "<td >Hình NDung 2</td>";
         echo "<td >Hình NDung 3</td>"; 
		  echo "<td >Xóa</td>";
       echo "<td >Sữa</td>";
		
       echo "</tr>";
	   $stt=1;
	   while($row = mysql_fetch_object($result))
		 {
		 
		 $thuocloai=$row->thuocloai;
		 $id=$row->id;
		 $tieude=$row->tieude;
           $did=$row->thuocloai;
	      $sql3=mysql_query("select * from loai_tin_sanphama where id='".$did."'");
		  $loai=mysql_fetch_array($sql3);
		  $loai1=$loai['thuocloai'];
        // $mota=$row->mota;
		 $tieude_en=$row->tieude_en;
         $ngay=$row->ngay;
		 $hinhanh="../HinhCTSP/Hinhdichvu/".$row->hinhanh;
		 $hinhanh="<img src='$hinhanh' width='40' height='20' '>";
            $hinhqcab="../HinhCTSP/Hinhdichvu/".$row->hinhqcab;
 	      $hinhqcab="<img src='$hinhqcab' width='40' height='20' '>";
        
         $hinhqcabc="../HinhCTSP/Hinhdichvu/".$row->hinhqcabc;
		 $hinhqcabc="<img src='$hinhqcabc' width='40' height='20' '>";
          $hinhndab="../HinhCTSP/Hinhdichvu/".$row->hinhndab;
		 $hinhndab="<img src='$hinhndab' width='40' height='20' '>";
        // $hinhndabc="../HinhCTSP/Hinhdichvu/".$row->hinhndabc;
		// $hinhndabc="<img src='$hinhndabc' width='40' height='20' '>";
        // $hinhndabcd="../HinhCTSP/Hinhdichvu/".$row->hinhndabcd;
	   // $hinhndabcd="<img src='$hinhndabcd' width='40' height='20' '>";
		     
		 if($stt%2==0)
		 echo"<tr bgcolor='#00ccff'>";
		 else
        echo"<tr>";
		echo "<td>$stt</td>";
        echo "<td>$id</td>";
        echo  "<td>$tieude</td>";
        echo  "<td>$loai1</td>";
       // echo  "<td>$mota</td>";
		  echo  "<td>$tieude_en</td>";
           echo  "<td>$ngay</td>";
         echo  "<td align='div'>$hinhanh</td>";
         echo  "<td>$hinhqcab</td>";
         echo  "<td>$hinhqcabc</td>";
         echo  "<td>$hinhndab</td>";
        // echo  "<td>$hinhndabc</td>";
         //echo  "<td>$hinhndabcd</td>";
         
	  
       
       
			echo  "<td align='center'><a href=\"quan_tri.php?p=xoa_tin_sanphama&id=".$id."\" ­ onclick=\"return confirm('Bạn có muốn xóa thông tin này ?')\"><img src='images/xoa_record.png' border='0'></a></td>";
		echo  "<td align='center'><a href='quan_tri.php?p=sua_tin_sanphama&id=".$id."'><img src='images/sua_record.png' border='0'></a></td>";
      	echo " </tr>";
		$stt=$stt+1;
	  	}
     echo" </table>";
	 }
	 $pagelist=$p->pageList($_GET['page'], $pages);
	 echo "<p align='center'>Trang :";
	 echo $pagelist;
	 echo"</p>";
	?>