
  <div class="wrapper">
    <div class="ec-page-wrapper">
      <div class="ec-content-wrapper">
        <div class="content">
          <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
              <h1>GIỚI THIỆU</h1>
              <p class="breadcrumbs"><span><a href="">Quản lý</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Giới thiệu
              </p>
            </div>
            <div>
              <a href="quan_tri.php?p=danhsach_gioithieu" class="btn btn-primary"> Danh sách giới thiệu
              </a>
            </div>
          </div>
          <div class="row">
            <?php
            if (isset($_POST['luu'])) {
              $today2 = date("D");
              $today = date("d");
              $today1 = date("m");
              $today3 = date("Y");
              $ngay = " $today/$today1/$today3 ";
              require('db.php');
              $file_name = $_FILES['txt_hinhanh']['name'];
              $tentaptin = $_FILES['txt_hinhanh']['name'];
              $tieude = mysqli_real_escape_string($link, $_POST['tieude']);
              $mota = mysqli_real_escape_string($link, $_POST['mota']);
              $noidung = mysqli_real_escape_string($link, $_POST['txt_noidung']);
              $trangchu = $_POST['trangchu'];
              $tukhoa1 = mysqli_real_escape_string($link, $_POST['tukhoa1']);
              $tukhoa2 = mysqli_real_escape_string($link, $_POST['tukhoa2']);
              $thuocloai = mysqli_real_escape_string($link, $_POST['cap_do']);
              $thuocloai = $_POST['cap_do'];
              $danhmuc = '1';
              $linkurl = strtolower(khongdau(str_replace("'", "", $_POST['tieude'])));
              upload($noidung, $tentaptin, $tieude, $mota, $trangchu, $linkurl, $tukhoa1, $tukhoa2);
              $page = isset($_GET["page"]) ? $_GET["page"] : 1;
              echo "<script>window.location='quan_tri.php?p=danhsach_gioithieu&page=" . $page . "'</script>";
              exit;
            }

            function upload($noidung, $tentaptin, $tieude, $mota, $trangchu, $linkurl, $tukhoa1, $tukhoa2)
            {
              require('db.php');

              // Xử lý đặc biệt với ký tự trong câu truy vấn
              $truyvan = "INSERT INTO gioi_thieu (hinhanh,noidung,mota,tieude,trangchu,linkurl,tukhoa1,tukhoa2) VALUES ('" . $tentaptin . "','" . $noidung . "','" . $mota . "','" . $tieude . "', '" . $trangchu . "','" . $linkurl . "','" . $tukhoa1 . "','" . $tukhoa2 . "')";

              $ketqua_truyvan = mysqli_query($link, $truyvan);
              if ($ketqua_truyvan) {
                if ($tentaptin != '') {
                  dichuyen_taptin_vaothumuc($tentaptin);
                } else {
                  echo "Upload thành công.";
                }
              } else {
                echo "Upload không thành công.Bạn thử lại xem";
                mysqli_close($ketnoi_maychu);
              }
            }
            function dichuyen_taptin_vaothumuc($tentaptin)
            {
              $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
              if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/$tentaptin"))
                echo "Chúc mừng bạn Upload thành công";
              else {
                xoataptin($tentaptin);
                echo "Không thể copy tập tin  $tentaptin vào thư mục tài liệu";
              }
            }
            function xoataptin($tentaptin)
            {
              $ketnoi_maychu = ketnoi_MC();
              chon_CSDL($ketnoi_maychu);
              $masotaptin = mysqli_insert_id();
              $truyvan = "DELETE FROM sanpham WHERE id = $masotaptin ";
              $ketqua_truyvan = truyvan($truyvan, $ketnoi_maychu);
            }
            ?>

            <?php
            include('db.php');
            //$noi_dung=str_replace("\d","",$noi_dung);
            //echo $noi_dung;echo"<hr>";
            function hop_option()
            {

              $tv = "select * from loai_gioi_thieu where phanloai like '1' ORDER BY id ASC";

              $tv_1 = mysqli_query($link, $tv);

              echo "<select name=\"cap_do\">";

              echo "<option value=\"\">--- Chọn loại sản phẩm ---</option>";

              while ($tv_2 = mysqli_fetch_array($tv_1)) {

                echo "<option value=\"$tv_2[id]\" >";

                echo $tv_2['thuocloai'];

                echo "</option>";

              }

              echo "</select>";

            }

            ?>
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                  <h2>Thêm giới thiệu</h2>
                </div>
                <div class="card-body">
                  <div class="row ec-vendor-uploads">
                    <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                      <div class="col-lg-4">
                        <div class="ec-vendor-img-upload">
                          <div class="ec-vendor-main-img">
                            <div class="avatar-upload">
                              <div class="avatar-edit">
                                <input name="txt_hinhanh" type='file' id="txt_hinhanh" class="ec-image-upload"
                                  accept=".png, .jpg, .jpeg" />
                                <label for="txt_hinhanh"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                    alt="edit" /></label>
                              </div>
                              <div class="avatar-preview ec-preview">
                                <div class="imagePreview ec-div-preview">
                                  <img class="ec-image-preview" src="assets/img/products/vender-upload-preview.jpg"
                                    alt="edit" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="ec-vendor-upload-detail">
                          <div class="row">
                            <div class="col-md-12 mt-3">
                              <label for="inputEmail4" class="form-label fw-bold">Tiêu đề</label>
                              <input name="tieude" type="text" id="tieude2" class="form-control" size="90"
                                maxlength="150" />
                            </div>
                            <div class="col-md-12 mt-3">
                              <label for="inputEmail4" class="form-label fw-bold">Mô tả</label>
                              <textarea name="mota" id="textarea" cols="70" class="form-control" rows="5"
                                maxlength="250"></textarea>
                            </div>
                            <div class="col-md-6 mt-3">
                              <label for="inputEmail4" class="form-label fw-bold">Từ khoá 1</label>
                              <input name="tukhoa1" type="text" id="tukhoa1" class="form-control" size="90"
                                maxlength="150" />
                            </div>
                            <div class="col-md-6 mt-3">
                              <label for="inputEmail4" class="form-label fw-bold">Từ khoá 2</label>
                              <input name="tukhoa2" type="text" id="tukhoa2" class="form-control" size="90"
                                maxlength="150" />
                            </div>
                            <div class="col-md-12 mt-3">
                              <label class="form-label fw-bold">Nội dung</label>
                              <textarea name="txt_noidung" id="content_vi" class="form-control"></textarea>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <!-- Nút lưu -->
                            <div class="col-md-12 text-center mt-3">
                              <input name="luu" class="btn btn-primary px-4 py-2 fw-bold" type="submit" id="luu"
                                value="Lưu Lại" />
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var editor = CKEDITOR.replace('content_vi', {
      uiColor: '#e7e7e7',
      language: 'en',
      skin: 'moono',
      width: 'auto',
      height: 350,
      filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
      filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
      filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    });
  </script>
