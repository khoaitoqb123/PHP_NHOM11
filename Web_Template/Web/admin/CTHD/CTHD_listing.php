<link href="../admin_style.css" rel="stylesheet">
<?php
include_once('../admin_header/admin_header.php');
    include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $totalRecords = $ql_quanaonam->queryDB("SELECT * FROM `chitiethd`");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    $products = $ql_quanaonam->queryDB("SELECT *  FROM `chitiethd` ORDER BY `MaHD` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
    ?>
    <div class="main-content">
        <h1>Danh sách chi tiết hóa đơn</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./CTHD_adding.php">Thêm chi tiết hóa đơn</a>
            </div>
            <form class="form-search" action="" method="GET">
                <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class ="form-control" placeholder="Tìm kiếm chi tiết hóa đơn">
                <button type="submit" class="btn-submit">Search</button>
            </form>
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-name4">Mã hóa đơn</div>
                    <div class="product-prop product-name4">Mã mặt hàng</div>
                    <div class="product-prop product-name4">Số lượng</div>
                    <div class="product-prop product-name4">Đơn giá</div>
                    <div class="product-prop product-name4">Thành tiền</div>
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
                    $products = $ql_quanaonam->searchDB("*","chitiethd","MaHD",$_GET['search']);
                    while($row = mysqli_fetch_array($products)){
                        ?>
                        <li>
                        <div class="product-prop product-name4"><?= $row['MaHD'] ?></div>
                        <div class="product-prop product-name4"><?= $row['MaMH'] ?></div>
                        <div class="product-prop product-name4"><?= $row['SoLuong'] ?></div>
                        <div class="product-prop product-name4"><?= $row['DonGia'] ?></div>
                        <div class="product-prop product-name4"><?= $row['ThanhTien'] ?></div>
                        <div class="product-prop product-button">
                            <a href="./CTHD_deleting.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="product-prop product-button">
                            <a href="./CTHD_editing.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Sửa</button></a>
                        </div>
                        <div class="clear-both"></div>
                        </li>
                        <?php } ?>
                    <?php } ?>
                <?php 
                while ($row = mysqli_fetch_array($products)) {
                    ?>
                    <li>
                        <div class="product-prop product-name4"><?= $row['MaHD'] ?></div>
                        <div class="product-prop product-name4"><?= $row['MaMH'] ?></div>
                        <div class="product-prop product-name4"><?= $row['SoLuong'] ?></div>
                        <div class="product-prop product-name4"><?= $row['DonGia'] ?></div>
                        <div class="product-prop product-name4"><?= $row['ThanhTien'] ?></div>
                        <div class="product-prop product-button">
                            <a href="./CTHD_deleting.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="product-prop product-button">
                            <a href="./CTHD_editing.php?MaHD=<?= $row['MaHD'] ?>"><button class="btn-submit">Sửa</button></a>
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