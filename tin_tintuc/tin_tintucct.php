<?php
include('phantrang/phantrang_dichvu.php');
?>


<!-- rts breadcrumba area start -->
    <div class="eblog-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                       <?php
                        require('db.php');
                        $did = $_GET["url"];
                        $tv = "select * from loai_tin_tintuc where name_url='" . $_GET['url'] . "' order by id ";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        $tv_2 = mysqli_fetch_array($tv_1);
                        $id = $tv_2['id'];
                        $ten = "$tv_2[thuocloai]";
                        ?>
                        <div class="meta">
                            <a href="home" class="prev">Home</a>
                            <img src="sitetintuc/assets/images/icon/chevron-right.svg" alt="<?php echo "$tieude_en"; ?>"/>
                            <a href="#" class="next">News</a>
                            <img src="sitetintuc/assets/images/icon/chevron-right.svg" alt="<?php echo "$tieude_en"; ?>"/>
                            <a href="#" class="last"><?php echo ucwords($ten); ?></a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- End Breadcrumb Area -->

    <!-- Start Feature Post Area -->
    <section class="eblog-featured-post-area area-2 tp-section-gap">
        <div class="container">
        
        <h1> <a href="#" class="last"><?php echo ucwords($ten); ?></a></h1>
            <div class="section-inner">
                <div class="row g-5 sticky-coloum-wrap">
                    <div class="col-xl-9">
                        <div class="left-side-post-area">
                            <div class="featured-post area-2">
                                <div class="post-section-inner">
                                    <div class="row g-5">
                                      <?php
                            require('db.php');

                            // Pagination settings
                            $limit = 12;
                            $p = new pager;
                            $start = $p->findStart($limit);

                            // Prepare SQL queries
                            $stmt = $link->prepare("SELECT COUNT(*) FROM tin_tintuc WHERE thuocloai = ?");
                            $stmt->bind_param('i', $id);
                            $stmt->execute();
                            $stmt->bind_result($count);
                            $stmt->fetch();
                            $stmt->close();

                            $pages = $p->findPages($count, $limit);

                            $stmt = $link->prepare("SELECT * FROM tin_tintuc WHERE thuocloai = ? ORDER BY id DESC LIMIT ?, ?");
                            $stmt->bind_param('iii', $id, $start, $limit);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Initialize the counter for row management
                            $stt = 0;
                            while ($row = $result->fetch_object()) {
                                $product_id = htmlspecialchars($row->id, ENT_QUOTES, 'UTF-8');
                                $tieude = htmlspecialchars($row->tieude, ENT_QUOTES, 'UTF-8');
                                $tieude_en = htmlspecialchars($row->tieude_en, ENT_QUOTES, 'UTF-8');
                                $mota = htmlspecialchars($row->mota, ENT_QUOTES, 'UTF-8');
                                $giagoc = number_format($row->giagoc, 2, '.', ',');
                                $giagoc_formatted = '$' . $giagoc;
                                $link_hinh = "HinhCTSP/Hinhtintuc/" . htmlspecialchars($row->hinhanh, ENT_QUOTES, 'UTF-8');
                                $url = htmlspecialchars($row->linkurl, ENT_QUOTES, 'UTF-8');
                                $link = strtolower("post/$url");

                                // Start a new row every 4 items
                                if ($stt % 4 == 0 && $stt != 0) {
                                    echo "</div><div class='row'>";
                                }
                            ?>
                                        <div class="col-lg-6">
                                            <div class="eblog-featured-news style-two big">
                                                <div class="image-area">
                                                    <a href="<?php echo "$link"; ?>"><img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>"/></a>
                                                   <!-- <p class="tag">Freedom</p> -->
                                                </div>
                                                <div class="blog-content">
                                               
                                                    <h2 class="heading-title" style="height:60px; text-align: left;"><a class="title-animation text-center" href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a></h2>
                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <?php } ?>
                                        
                                        <div class="col-lg-12">
                                            <div class="button-area">
                                                <a href="news/" class="tp-btn btn-secondary m-auto">Load More</a>
                                            </div>
                                        </div>
                                        
                                            <div class="bgphantranga">
                            <?php
                            echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: right;'> &nbsp;&nbsp;&nbsp;&nbsp;Page: ";
                            $pagelist = $p->pageList($_GET['page'], $pages);
                            echo $pagelist;
                            echo "</div>"
                            ?>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-xl-3 tp-sticky-column-item">
                        <div class="eblog-right-sidebar">
                     
                               <?php
                    include('menu_trai/lefttintuc.php');
                    ?>
                      
                </div>
            </div>
            
            
        </div>
    </section>
    <!-- End Feature Post Area -->

   