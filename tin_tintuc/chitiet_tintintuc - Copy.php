<body>
    <div class="page-wrapper">
        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <?php
                        require('db.php');

                        // Sanitize and prepare the URL parameter
                        $id = mysqli_real_escape_string($link, $_GET['url']);

                        // Use prepared statements to avoid SQL injection
                        $stmt = $link->prepare("SELECT tieude_en FROM tin_tintuc WHERE linkurl LIKE ? ORDER BY id LIMIT 1");
                        $searchTerm = "%{$id}%";
                        $stmt->bind_param('s', $searchTerm);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $tv_2 = $result->fetch_assoc();
                        $title = htmlspecialchars($tv_2['tieude_en'], ENT_QUOTES, 'UTF-8');
                        ?>
                        <li class="breadcrumb-item"><a href="home"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="news/">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 main-content">
                        <div class="row">
                            <?php
                            include_once("phan_trang.php");

                            $p = new pager;
                            $limit = 1;
                            $start = $p->findStart($limit);

                            // Get the total number of records
                            $stmt = $link->prepare("SELECT COUNT(*) as count FROM tin_tintuc WHERE linkurl LIKE ?");
                            $stmt->bind_param('s', $searchTerm);
                            $stmt->execute();
                            $countResult = $stmt->get_result();
                            $count = $countResult->fetch_assoc()['count'];
                            $pages = $p->findPages($count, $limit);

                            // Fetch paginated results
                            $stmt = $link->prepare("SELECT * FROM tin_tintuc WHERE linkurl LIKE ? ORDER BY id DESC LIMIT ?, ?");
                            $stmt->bind_param('sii', $searchTerm, $start, $limit);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                echo "<table width='100%' border='0' align='left'>";
                                while ($row = $result->fetch_assoc()) {
                                    $title = htmlspecialchars($row['tieude'], ENT_QUOTES, 'UTF-8');
                                    $content = $row['noidung']; // Assuming this may contain HTML
                                    $description = htmlspecialchars($row['mota'], ENT_QUOTES, 'UTF-8');
                                    $title_en = htmlspecialchars($row['tieude_en'], ENT_QUOTES, 'UTF-8');
                                    $keywords1 = htmlspecialchars($row['tukhoa'], ENT_QUOTES, 'UTF-8');
                                    $keywords2 = htmlspecialchars($row['tukhoa2'], ENT_QUOTES, 'UTF-8');
                                    $url = khongdau($row['tieude']);
                                    $link = "info-$url-$id";
                                    $image = "HinhCTSP/HinhTinTuc/" . $row['hinhanh'];
                                    $imageTag = "<img src='$image' alt='$title' title='$title' style='text-align: center;'>";
                                    echo "<tr>";
                                    echo "<td align='left' width='100%'>";
                                    echo "<table align='left' width='100%'>
                                        <tr>
                                            <td>
                                                <h1 class='h1-tukhoa'><a href='$link'>$keywords1</a></h1>
                                                <h2 class='h2-tukhoa-1'>$title_en</h2>
                                                <p class='p-tukhoa'><i>$description</i></p>
                                                <div class='div-tukhoa-1'>
                                                    <a href='$link'>$imageTag</a>
                                                </div>
                                                <div class='div-tukhoa-2'>$content</div>
                                                <h2 class='h2-tukhoa-2'><a href='$link'>$keywords2</a></h2>
                                            </td>
                                        </tr>
                                    </table>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 mobile-sidebar font2">
                        <?php 
                       // include('menu_trai/righttintuc.php'); 
                        ?>
                    </aside>
                </div>
            </div>
        </main>
    </div>
</body>