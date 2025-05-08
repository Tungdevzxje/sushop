<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Cách bố trí nhà cửa theo phong thủy</a></h2>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Trang trí nội thất hiện đại</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Kiến thức cơ bản về nội thất</a></h3>
  <!-- Page Title Start -->
  <div class="page-title">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <?php
                    $id=$_GET['url'];
                    $tv = "select * from tin_sanpham where linkurl like '%".$id."%' order by id ";
				    $tv_1 = mysqli_query($link,$tv);
                    $a_tv_1 = mysqli_query($link,$tv);
                    $tv_2 = mysqli_fetch_array($tv_1);
                    $ten = "$tv_2[tieude]";
                    ?>
                  <ul class="breadcrumb">
                      <li><a href="trang-chu">Trang Chủ</a></li>
                      <li><a href="kien-thuc">Kiến Thức</a></li>
                      <li><?php echo "$ten" ?></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- Page title end -->
  <!-- Destination area S t a r t -->
  <section class="utf_block_wrapper">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-12">
                  <?php
                    include_once("phan_trang.php");
                    require('db.php');
                   // $ketnoi_maychu = ketnoi_MC();
                    //chon_CSDL($ketnoi_maychu);
                    $p = new pager;
                    $limit = 1;
                    $start = $p->findStart($limit);
                    $count = mysqli_num_rows(mysqli_query($link,"SELECT*FROM tin_sanpham"));
                    $pages = $p->findPages($count, $limit);
                      $id=$_GET['url'];
                    $result = mysqli_query($link,"SELECT * FROM tin_sanpham where linkurl like '%".$id."%' order by id desc limit $start,$limit");
                    // hiển thị DL
                    if (mysqli_num_rows($result) <> 0) {
                        echo " <table width='100%' border='0' align='left'>";
                        $stt = 0;
                        while ($row = mysqli_fetch_object($result)) {
                            $ngay = $row->ngay;
                            $tieude = doikyty($row->tieude);
                            $noidung = doikyty($row->noidung);
                            $mota = doikyty($row->mota);
                            $tieude_en = doikyty($row->tieude_en);
                            $facebook = $row->facebook;
                            $tukhoa = $row->tukhoa;
                            $url = khongdau($row->tieude);
                            $link = "giai-dap-$url-$id";
                            $hinhanh = "HinhCTSP/Hinhdichvu/" . $row->hinhanh;
                            $hinhanh = "<img src='$hinhanh'  text-align: center; alt='$tieude' title='$tieude'  >  ";
                            if ($stt % 2 == 0) {
                                echo "<tr>";
                            }
                            echo "<td align='left' width='100%'>";
                            echo "<table align='left' width='100%'>";
                            echo "<div >
                            <h2 style='font-size: 28px;
                            font-weight: bold;
                            margin-bottom: 15px;
                            line-height: 27px;'> $tieude_en</h2>
                    		<p style='font-size: 18px; font-family:'Arial', sans-serif;'> $mota</p>
                                <h1 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tieude </a></h1> 	
                                <div style='padding:20px; text-align: center; font-family:'Arial', sans-serif;'>
                            	<a href='$link'> $hinhanh </a></div>
                               <div style='font-size: 18px; font-family:'Arial', sans-serif;'>
                               $noidung
                                   </div>
                        </div>";
                            echo " </table>";
                            echo "</td>";
                            $stt = $stt + 1;

                            if ($stt % 1 == 0) {
                                echo "</tr>";
                            }
                        }
                        echo " </table>";
                    }
                    ?>
                  <?php
				   require('db.php');
                    $tv = "select * from gioi_thieu where id like '1'  order by id DESC limit 0,1";
                    $tv_1 = mysqli_query($link,$tv);
                    $tv_2 = mysqli_fetch_array($tv_1);
                    echo $tv_2['noidung']; ?>
                  <div class="single-post">
                      <div class="utf_post_content-area">


                          <div class="share-items clearfix">
                              <ul class="post-social-icons unstyled">
                                  <li class="facebook"> <a href="#"> <i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a> </li>
                                  <li class="twitter"> <a href="#"> <i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a> </li>
                                  <li class="gplus"> <a href="#"> <i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a> </li>
                                  <li class="pinterest"> <a href="#"> <i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a> </li>
                              </ul>
                          </div>
                          <div class="tags-area clearfix">
                              <div class="post-tags">
                                  <span>Tags:</span>
                                  <!-- chính sách -->
                                  <?php
								   require('db.php');
                                    $tv1 = "select * from tin_thicong where thuocloai=8 order by id asc";
                                    $tv_11 = mysqli_query($link,$tv1);
                                    $a_tv_11 = mysqli_query($link,$tv1);
                                    $stt = 1;
                                    while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                        $id = "$tv_21[id]";
                                        $tieude_en = "$tv_21[tieude_en]";
                                        $thuocloai = "$tv_21[tieude]";
                                    ?>
                                      <a href="<?php echo "$tieude_en"; ?>"><?php echo $thuocloai; ?></a>
                                  <?php } ?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php
                    //include_once("phan_trang.php");
                    require('db.php');
                    $tv = "select * from du_an order by id=1 desc limit 0,1";
                    $tv_1 = mysqli_query($link,$tv);
                    $a_tv_1 = mysqli_query($link,$tv);
                    ?>
                  <?php
                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                        $id = "$tv_2[id]";
                        $tieude = "$tv_2[tieude]";
                        $mota = "$tv_2[mota]";
                        $title = "$tv_2[title]";
                        $ngay = "$tv_2[ngay]";

                    ?>
                      <div class="author-box">
                          <div class="author-img pull-left"> <img src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>" alt="user" alt="user"> </div>
                          <div class="author-info">
                              <p style="font-weight: bold; color: #000;"><?php echo "$tieude"; ?></p>
                              <p><?php echo "$mota"; ?></p>
                          </div>
                      </div>
                  <?php } ?>
                  <div class="related-posts block">
                      <p class="utf_block_title"><span>Tin Tức Liên Quan</span></p>
                      <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
                          <?php
                            require('db.php');
                            $tv = "select * from tin_tintuc order by id desc limit 0,10";
                            $tv_1 = mysqli_query($link,$tv);
                            $a_tv_1 = mysqli_query($link,$tv);
                            ?>
                          <?php
                            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                $link_hinh = "HinhCTSP/Hinhdichvu/$tv_2[hinhanh]";
                                $id = "$tv_2[id]";
                                $tieude = "$tv_2[tieude]";
                                $mota = "$tv_2[mota]";
                                $url = khongdau($tieude);
                                $link = str_replace("?", "", "thong-tin-$url-$id");
                            ?>
                              <div class="item">
                                  <div class="utf_post_block_style clearfix">
                                      <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>" alt="<?php echo "$tieude"; ?>" /></a> </div>
                                      <a class="utf_post_cat" href="#">worlddecoranl</a>
                                      <div class="utf_post_content">
                                          <p class="utf_post_title title-medium"> <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a> </p>
                                          <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i><?php echo "$ngay"; ?></span> </div>
                                      </div>
                                  </div>
                              </div>
                          <?php } ?>
                      </div>
                  </div>

                  <!-- Post comment start -->
                  <div id="comments" class="comments-area block">
                      <p class="utf_block_title"><span>Bình Luận</span></p>
                      <ul class="comments-list">
                          <li>
                              <?php
                                //include_once("phan_trang.php");
                                require('db.php');
                                $tv = "select * from du_an order by id=2 desc limit 0,1";
                                $tv_1 = mysqli_query($link,$tv);
                                $a_tv_1 = mysqli_query($link,$tv);
                                ?>
                              <?php
                                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                    $id = "$tv_2[id]";
                                    $tieude = "$tv_2[tieude]";
                                    $mota = "$tv_2[mota]";
                                    $title = "$tv_2[title]";
                                    $ngay = "$tv_2[ngay]";

                                ?>
                                  <div class="comment"> <img class="comment-avatar pull-left" alt="user" src="hinhmenu/icon/user.jpg">
                                      <div class="comment-body">
                                          <div class="meta-data"> <span class="comment-author"><?php echo "$tieude"; ?></span> </div>
                                          <div class="comment-content">
                                              <p><?php echo "$mota"; ?></p>
                                          </div>
                                          <div class="text-left"> <a class="comment-reply" href="#"><i class="fa fa-share"></i> Trả lời</a> </div>
                                      </div>
                                  </div>
                              <?php } ?>
                              <ul class="comments-reply">
                                  <li>
                                      <?php
                                        //include_once("phan_trang.php");
                                        require('db.php');
                                        $tv = "select * from du_an order by id=3 desc limit 0,1";
                                        $tv_1 = mysqli_query($link,$tv);
                                        $a_tv_1 = mysqli_query($link,$tv);
                                        ?>
                                      <?php
                                        while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                            $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                            $id = "$tv_2[id]";
                                            $tieude = "$tv_2[tieude]";
                                            $mota = "$tv_2[mota]";
                                            $title = "$tv_2[title]";

                                        ?>
                                          <div class="comment"> <img class="comment-avatar pull-left" alt="user" src="hinhmenu/icon/user.jpg">
                                              <div class="comment-body">
                                                  <div class="meta-data"> <span class="comment-author"><?php echo "$tieude"; ?></span> </div>
                                                  <div class="comment-content">
                                                      <p><?php echo "$mota"; ?></p>
                                                  </div>
                                                  <div class="text-left"> <a class="comment-reply" href="#"><i class="fa fa-share"></i> Trả lời</a> </div>
                                              </div>
                                          </div>
                                      <?php } ?>
                                  </li>
                              </ul>
                              <?php
                                //include_once("phan_trang.php");
                                require('db.php');
                                $tv = "select * from du_an order by id=4 desc limit 0,1";
                                $tv_1 = mysqli_query($link,$tv);
                                $a_tv_1 = mysqli_query($link,$tv);
                                ?>
                              <?php
                                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                    $id = "$tv_2[id]";
                                    $tieude = "$tv_2[tieude]";
                                    $mota = "$tv_2[mota]";
                                    $title = "$tv_2[title]";

                                ?>
                                  <div class="comment last"> <img class="comment-avatar pull-left" alt="user" src="hinhmenu/icon/user.jpg">
                                      <div class="comment-body">
                                          <div class="meta-data"> <span class="comment-author"><?php echo "$tieude"; ?></span></div>
                                          <div class="comment-content">
                                              <p><?php echo "$mota"; ?></p>
                                          </div>
                                          <div class="text-left"> <a class="comment-reply" href="#"><i class="fa fa-share"></i> Trả lời</a> </div>
                                      </div>
                                  </div>
                              <?php } ?>
                          </li>
                      </ul>
                  </div>
                  <!-- Post comment end -->

                  <!-- Comments Form Start -->
                  <div class="comments-form">
                      <?php
                        //include('lien_he/lien_he_binh_luan.php');
                        ?>
                  </div>
                  <!-- Comments form end -->
              </div>
              <div class="col-lg-4 col-md-12">
                  <div class="pinBox">
                      <?php
                        include('menu_trai/leftdichvu.php');
                        ?>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Special Offers -->


  </main>
  <script src="js/jquery.pinBox.js"></script>
  <script>
      $(document).ready(function() {

          $(".pinBox").pinBox({
              //default 0px
              Top: '100px',
              //default '.container' 
              Container: '#pinBoxContainer',
              //default 20 
              ZIndex: 20,
              //default '767px' if you disable pinBox in mobile or tablet
              MinWidth: '1170px'
              //events if scrolled or window resized 
          });

      });
  </script>
  <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);

      (function() {
          var ga = document.createElement('script');
          ga.type = 'text/javascript';
          ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(ga, s);
      })();
  </script>