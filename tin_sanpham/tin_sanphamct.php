
<div class="service-section-title ">

    <div class="container">

        <div class="row">

            <div class="col">

            <?php

                $sql=mysql_query("select * from loai_tin_sanpham where id=".$_GET['id']." limit 1");

                $pro=mysql_fetch_array($sql);

                $link_hinh="HinhCTSP/$pro[hinhanh]";

                ?>

                <div class="section-title text-center  ">

                    <h1 style="color: red; padding: 40px;"> <?php echo $pro['thuocloai']; ?></h1>

                </div>

            </div>

        </div>

    </div>

</div>

<!--Service section Title end -->

<!-- Breadcrumb Section Start -->

        <!-- Breadcrumb Section End -->

        <!--Product section start-->

        <div class="product-section section pt-lg-80 pt-md-70 pt-sm-60 pt-xs-45  pb-85 pb-lg-65 pb-md-20 pb-sm-60 pb-xs-50">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-12 order-1 pr-30 pr-sm-15 pr-xs-15">

                        <div class="row">

						<?php

	

	//include_once("phan_trang.php");

	require('db.php');





 $sql=mysql_query("select * from loai_ma_sanpham where id=".$_GET['id']." order by id ASC limit 0,1");

 $row=mysql_fetch_array($sql);

 $tv="select * from ma_sanpham where thuocloai=".$row['id']." order by id ASC limit 0,3";

 $tv_1=mysql_query($tv);

 $a_tv_1=mysql_query($tv);

?>

	 <?php

	   while($tv_2=mysql_fetch_array($tv_1))

	 {

		$link_hinh="HinhCTSP/$tv_2[hinhanh]";

		$luotxem="$tv_2[luotxem]"; 

		mysql_query("update ma_sanpham set luotxem=".((int)$luotxem+1)." where id like ".$id."");

		$id="$tv_2[id]";

		$tieude="$tv_2[tieude]";

	    $tieude_en="$tv_2[tieude_en]";

		$tieude_nhat="$tv_2[tieude_nhat]";

		$gia="$tv_2[gia]";

		$mota_han="$tv_2[mota_han]";

		$tieude_han="$tv_2[tieude_han]";

		$tieude_china="$tv_2[tieude_china]";

		$mota_en="$tv_2[mota_en]";

		$sao="$tv_2[star]";

		$url=khongdau($tieude);

		$link="thong-tin-$url-$id";

		 ?>

                            <div class="product col-xl-4 col-lg-6 col-sm-6 col-6 mb-10">

                                <div class="product-inner">

                                    <div class="media">

                                        <a href="product-details.html" class="image"><img src="HinhCTSP/<?php echo $tv_2["hinhanh"];?>" alt="<?php echo "$tieude";?>"></a>

                                        <a href="#" class="btn">Thêm vào giỏ hàng</a>

                                    </div>

                                    <div class="content">

                                        <h4 class="title"><a href="product-details.html"><?php echo "$tieude";?></a></h4>

                                        <h4 class="price"><span class="old">$33.00</span><span class="new">$25.00</span></h4>

                                        <span class="ratting">

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                </span>

                                    </div>

                                </div>

                            </div>

							<?php } ?> 

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--Product section end-->

        <!--Product section start-->

<div class="product-section section pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-50 pb-lg-30 pb-md-20 pb-sm-10 pb-xs-0">

            <div class="container">

                <div class="row">

                            <div class="col-12">

                                <div class="row">



                                    <div class="col-12">

                                        <div class="section-title no-icon mb-30">

                                            <h3 style="color: red;">Sản phẩm bán chạy</h3>

                                        </div>

                                    </div>



                                    <div class="product-slider-4 section">

                                    <?php

                                    //include_once("phan_trang.php");

                                    require('db.php');

                                    $tv="select * from tin_sanpham order by id asc limit 0,6";

                                    $tv_1=mysql_query($tv);

                                    $a_tv_1=mysql_query($tv);

                                ?>

                                        <?php

                                        while($tv_2=mysql_fetch_array($tv_1))

                                        {

                                            $link_hinh="HinhCTSP/Hinhdichvu/$tv_2[hinhanh]";

                                            $xem="$tv_2[xem]"; 

                                        mysql_query("update tin_tintuc set xem=".((int)$xem+1)." where id like ".$id."");

                                            $id="$tv_2[id]";

                                            $tieude="$tv_2[tieude]";

                                            $mota="$tv_2[mota]";

                                            $sao=$tv_2['star'];

                                            $url=khongdau($tieude);

                                            $link="dich-vu-$url-$id";

                                            ?>

                                            <div class="product col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 col-6 mb-40">

                                            <div class="product-inner">

                                                <div class="media">

                                                    <a href="trang-chu" class="image"><img src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"];?>" alt="<?php echo "$tieude";?>"></a>

                                                    <a href="lien-he" class="btn">Mua ngay</a>

                                                </div>

                                                <div class="content">

                                                    <h4 class="title"><a href="trang-chu"><?php echo "$tieude";?></a></h4>

                                                    <h4 class="price"><span class="old">$43.00</span><span class="new">$37.00</span></h4>

                                                    <span class="ratting">

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                            </span>

                                                </div>

                                            </div>

                                        </div>

                                        <?php } ?> 

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--Product section end-->

        <!-- About Section Start -->

        <div class="about-section section pt-lg-20">

            <div class="container">

                <div class="row about-qute-area">

                    <div class="col-12">

                        <div class="about-qute">

                            <h2 style="color: blue;">"Thức tỉnh sức sống, hòa mình vào tự nhiên - Nâng cao sức khỏe, thăng hoa cuộc sống!"</h2>

                            Chìm đắm trong thế giới của chúng tôi, nơi tự nhiên và sức khỏe hòa quyện. Những sản phẩm độc đáo của chúng tôi không chỉ là lựa chọn, mà là một câu chuyện về sự sống động và sức khỏe. Hãy cùng chúng tôi khám phá, nâng cao sức khỏe và đắm chìm trong hạnh phúc của cuộc sống mỗi ngày!

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="about-content mb-sm-30 mb-xs-30">

                            <h2 style="color: red;">Đồng Hành Cùng Chúng Tôi</h2>

                            <p>Chúng tôi không chỉ cung cấp sản phẩm, mà còn là đối tác của bạn trên hành trình hướng tới một lối sống khỏe mạnh. Đồng hành cùng chúng tôi để trải nghiệm sự kết hợp hoàn hảo giữa thiên nhiên và sức khỏe!</p>

                            <p>Hãy đặt hàng ngay hôm nay và khám phá thế giới mới của sức khỏe tự nhiên tại trang web của chúng tôi!</p>

                        </div>

                    </div>

                    <div class="col-lg-6">

                    <div class="about-page-image">

                        <video controls style="width: 100%; height: 275px;">

                            <source src="hinhmenu/video-toi-den-da-nang.mp4" type="video/mp4">

                            Your browser does not support the video tag.

                        </video>

                    </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- About Section End -->

<!-- Team Section Start -->

<div class="team-section">

    <div class="container">

        <div class="row border-bottom mb-60 mb-sm-40 mb-xs-30">

            <div class="col-12">

                <div class="team-intro-area">

                    <div class="team-intro-image">

                        <img src="hinhmenu/banner-toi-den.jpg" alt="<?php echo "$tieude";?>">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Service section Title start-->

        <!--Choose Us section Three start-->

        <div class="choose-us-section-three section border-bottom-1 pt-50 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-85 pb-lg-65 pb-md-70 pb-sm-60 pb-xs-50">

            <div class="container">

                <div class="row">

                    <div class="col-lg-5">

                        <!-- Single Feature Four Start -->

                        <div class="single-feature-four mb-15">

                            <div class="feature-icon">

                                <i class="pe-7s-tools"></i>

                            </div>

                            <div class="feature-content">

                                <h4><a href="gioi-thieu">Dịch vụ chuyên nghiệp</a></h4>

                                <p>Cung cấp sản phẩm uy tín, chất lượng hàng đầu miền Trung.</p>

                            </div>

                        </div>

                        <!-- Single Feature Four End -->

                        <!-- Single Feature Four Start -->

                        <div class="single-feature-four mb-15">

                            <div class="feature-icon">

                                <i class="pe-7s-clock"></i>

                            </div>

                            <div class="feature-content">

                                <h4><a href="gioi-thieu">Dịch vụ 24/7</a></h4>

                                <p>Tư vấn, hỗ trợ khách hàng chu đáo, nhiệt tình với đội ngũ nhân viên chuyên nghiệp.</p>

                            </div>

                        </div>

                        <!-- Single Feature Four End -->

                        <!-- Single Feature Four Start -->

                        <div class="single-feature-four mb-15">

                            <div class="feature-icon">

                                <i class="pe-7s-cash"></i>

                            </div>

                            <div class="feature-content">

                                <h4><a href="gioi-thieu">Giá thành</a></h4>

                                <p>Giá rẻ, ưu đãi, đảm bảo chất lượng uy tín, chứng nhận sức khoẻ y tế hàng đầu.</p>

                            </div>

                        </div>

                        <!-- Single Feature Four End -->

                    </div>

                    <div class="col-lg-7">

                        <div class="choose-description color-black mt-xs-10">

                            <span>Lý do</span>

                            <h2>Vì sao chọn chúng tôi?</h2>

                            <p>Chất Lượng Tuyệt Vời: Chúng tôi tận tâm lựa chọn những nguồn nguyên liệu tốt nhất để tạo ra những sản phẩm chất lượng cao. Từ tỏi đen thơm ngon đến yến sào tinh khiết và đông trùng hạ thảo quý hiếm, chúng tôi đặt chất lượng hàng đầu.</p>

                            <p>Nguồn Gốc An Toàn: Chúng tôi tuân thủ mọi quy chuẩn an toàn và kiểm soát chặt chẽ quy trình sản xuất.Sự tinh tế trong việc chọn lựa nguồn gốc giúp chúng tôi mang đến cho bạn những sản phẩm an toàn và đáng tin cậy.</p>

                            <p>Tận Hưởng Sức Khỏe Tự Nhiên: Những sản phẩm của chúng tôi không chỉ là thực phẩm, mà còn là sự kết hợp tuyệt vời giữa hương vị tinh tế và lợi ích sức khỏe.</p>

                        </div>

                        <div class="wrench-list color-black mb-5 mb-xs-25">

                            <ul>

                                <li><i class="fa fa-wrench"></i> <a href="#">Tỏi đen</a></li>

                                <li><i class="fa fa-wrench"></i> <a href="#">Yến sào</a></li>

                                <li><i class="fa fa-wrench"></i> <a href="#">Đông trùng hạ thảo</a></li>

                            </ul>

                        </div>

                        <a class="btn" href="tin-tuc">XEM THÊM</a>

                    </div>

                </div>

            </div>

        </div>

        <!--Choose Us section Three end-->



        <!--CTA section start-->

        <div class="cta-section section bg-gray-two">

            <div class="container">

                <div class="row no-gutters align-items-center">

                    <div class="col-md-1">

                        <div class="pentagon-icon cta-icon">

                            <div class="icon">

                                <i class="fa fa-users"></i>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-8">

                        <div class="cta-content">

                            <h2>Bạn muốn trở thành 1 phần của chúng tôi !</h2>

                            <p>Chúng tôi tạo cung cấp sản phẩm Tỏi Đen - Yến Sào - Đông Trùng Hạ Thảo chất lượng nhất thị trường.</p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="cta-btn text-center">

                            <a href="#" class="btn"> NHẬN BÁO GIÁ NHANH CHÓNG <i class="fa fa-angle-double-right"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--CTA section end-->

        