<link href="../admin_style.css" rel="stylesheet">
<?php
include_once('../admin_header/admin_header.php');
    include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $totalRecords = $ql_quanaonam->queryDB("SELECT * FROM `hdban`");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    $products = $ql_quanaonam->queryDB("SELECT *  FROM `hdban` ORDER BY `MaHD` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
    ?>
    <div class="main-content">
        <h1>Danh sách hóa đơn</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./hoadon_adding.php">Thêm hóa đơn</a>
            </div>
            <form class="form-search" action="" method="GET">
                <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class ="form-control" placeholder="Tìm kiếm hóa đơn">
                <button type="submit" class="btn-submit">Search</button>
            </form>
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-name3">Mã hóa đơn</div>
                    <div class="product-prop product-name3">Mã nhân viên</div>
                    <div class="product-prop product-name3">Ngày bán</div>
                    <div class="product-prop product-name3">Mã khách hàng</div>
                    <div class="product-prop product-button">
                        Xóa
                    </div>
                    <div class="product-prop product-button">
                        Sửa
                    </div>
                    <div class="clear-both"></div>
                </li>
                <?php
                if(isset($_GET['search'])){
                    $products = $ql_quanaonam->searchDB("*","hdban","MaHD",$_GET['search']);
                    while($row = mysqli_fetch_array($products)){
                        ?>
                        <li>
                        <div class="product-prop product-name3">Mã hóa đơn</div>
                        <div class="product-prop product-name3">Mã nhân viên</div>
                        <div class="product-prop product-name3">Ngày bán</div>
                        <div class="product-prop product-name3">Mã khách hàng</div>
                        <div class="product-prop product-button">
                            <a href="./hoadon_deleting.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="product-prop product-button">
                            <a href="./hoadon_editing.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Sửa</button></a>
                        </div>
                        <div class="clear-both"></div>
                        </li>
                        <?php } ?>
                    <?php } ?>
                <?php 
                while ($row = mysqli_fetch_array($products)) {
                    ?>
                    <li>
                        <div class="product-prop product-name3"><?= $row['MaHD'] ?></div>
                        <div class="product-prop product-name3"><?= $row['MaNV'] ?></div>
                        <div class="product-prop product-name3"><?= $row['NgayBan'] ?></div>
                        <div class="product-prop product-name3"><?= $row['MaKH'] ?></div>
                        <div class="product-prop product-button">
                            <a href="./hoadon_deleting.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="product-prop product-button">
                            <a href="./hoadon_editing.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Sửa</button></a>
                        </div>
                        <div class="clear-both"></div>
                    </li>
                <?php } ?>
            </ul>
            <?php
            include '../pagination.php';
            ?>
            <div class="clear-both"></div>
        </div>
    </div>