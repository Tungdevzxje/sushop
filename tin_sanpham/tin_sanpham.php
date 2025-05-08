  <section class="headings">
      <div class="text-heading text-center">
          <div class="container">
              <div style="padding:20px;">
                  <h2 style="font-weight: bold; color:#c00; padding-top: 100px;">QUAN HỆ CỔ ĐÔNG</h2>
                  <div><a href="trangchu">Trang chủ </a> &nbsp;/&nbsp; Quan hệ cổ đông</div>
              </div>
          </div>
      </div>
  </section>
  <h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>xử lý khí thải công nghiệp đà nẵng</a></h1>

  <!-- END SECTION HEADINGS -->
  <h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a></a></h2>

  <!-- START SECTION BLOG -->
  <section class="blog-section">
      <div class="container">
          <div class="news-wrap">
              <div class="row">
                  <?php
                    require('db.php');
                    include('phantrang/phantrang_tintuc.php');
                    // Helper function to escape output
                    function escape($value)
                    {
                        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                    }
                    // Initialize pager and set limit
                    $p = new pager;
                    $limit = 12;
                    $start = $p->findStart($limit);

                    // Count total items and calculate total pages
                    $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM tin_dichvu");
                    $countRow = mysqli_fetch_assoc($countResult);
                    $count = $countRow['total'];
                    $pages = $p->findPages($count, $limit);

                    // Fetch paginated data
                    $sql = mysqli_query($link, "SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT $start, $limit");
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
                        $url = escape($row['linkurl']);
                        $link = str_replace("?", "", strtolower("dichvu/$url"));

                        ?>
                      <div class="col-lg-3 col-md-12 col-xs-12" style="margin-bottom:0px; padding:10px;">
                          <div class="news-item">
                              <a href="<?php echo "$link"; ?>" class="news-img-link">
                                  <div class="img-box hover-effect">
                                      <img class="img-responsive" src="HinhCTSP/Hinhdichvu/<?php echo $hinhanh; ?>" alt="<?php echo $tieude_en; ?>" style=" padding: 10px;" />
                                  </div>
                              </a>
                              <div class="news-item-text">
                                  <a href="<?php echo "$link"; ?>">
                                      <h3><?php echo $tieude_en; ?></h3>
                                  </a>



                              </div>
                          </div>
                      </div>
                  <?php endwhile; ?>



              </div>
  </section>
  <!-- END SECTION BLOG -->

  <div class="container" style="padding-top:30px">

      <br>
      <div class="second-title">
          <div style="color: #7a16dd;
                font-size: 32px;
                line-height: 40px;
                font-weight: bold; text-align:center">HẠO NHIÊN - GIẢI PHÁP ĐIỆN LẠNH TOÀN DIỆN CHO MỌI NHU CẦU </div>

          <br>
          <div style="color: #7a16dd; text-align: center;
                font-size: 22px;
                line-height: 25px;
                font-weight: 500;">SẢN PHẨM ĐIỆN LẠNH PHONG PHÚ - PHỤC VỤ TẬN TÂM.</div>
          <br>
          <br>

      </div>
  </div>


  <div class="container" style="padding-bottom:40px">
      <div class="row">
          <div data-aos="zoom-in" data-aos-delay="150">
              <img src="hinhmenu/codienlanh-danang.gif" alt="lắp đặt kho đông lạnh quảng nam">
          </div>


      </div>
  </div>

  <!-- STAR SECTION PARTNERS -->
  <div class="partners bg-white rec-pro">
      <div class="container-fluid">
          <div class="owl-carousel style2">
              <?php
                //include_once("phan_trang.php");
                require('db.php');
                $tv = "select * from doi_tac order by id desc limit 0,6";

                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                ?>
              <?php
                while ($row = mysqli_fetch_array($tv_1)) {
                    $link_hinh = "HinhCTSP/$row[hinhanh]";
                    $id = "$row[id]";
                    $tieude_en = "$row[tieude_en]";
                    $tieude = "$row[tieude]";
                    $mota = "$row[mota]";
                    $url = "$row[linkurl]";
                    $link = str_replace("?", "", strtolower("tintuc/$url"));
                    $ngay = "$row[ngay]";
                ?>
                  <div class="owl-item" data-aos="fade-up"><img src="<?php echo "$link_hinh"; ?>" alt="nâng cấp máy đá viên uống bia tại đà nẵng"></div>
              <?php } ?>
          </div>
      </div>
  </div>
  <!-- END SECTION PARTNERS -->