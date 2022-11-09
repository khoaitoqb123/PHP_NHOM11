<link href="../admin_style.css" rel="stylesheet">
<?php
include_once('../admin_header/admin_header.php');
    include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $totalRecords = $ql_quanaonam->queryDB("SELECT * FROM `mathang`");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    $products = $ql_quanaonam->queryDB("SELECT *  FROM `mathang` ORDER BY `MaMH` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
    ?>
    <div class="main-content">
        <h1>Danh sách sản phẩm</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./product_adding.php">Thêm sản phẩm</a>
            </div>
            <form class="form-search" action="" method="GET">
                <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class ="form-control" placeholder="Tìm kiếm mặt hàng">
                <button type="submit" class="btn-submit">Search</button>
            </form>
            
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-name">Mã sản phẩm</div>
                    <div class="product-prop product-name2">Tên sản phẩm</div>
                    <div class="product-prop product-name">Mã loại hàng</div>
                    <div class="product-prop product-name">Số lượng</div>
                    <div class="product-prop product-name">Giá bán</div>
                    <div class="product-prop product-img">Ảnh</div>
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
                    $products = $ql_quanaonam->searchDB("*","mathang","MaMH",$_GET['search']);
                    while($row = mysqli_fetch_array($products)){
                        ?>
                        <li>
                        <div class="product-prop product-name"><?= $row['MaMH'] ?></div>
                        <div class="product-prop product-name2"><?= $row['TenMH'] ?></div>
                        <div class="product-prop product-name"><?= $row['MaLH'] ?></div>
                        <div class="product-prop product-name"><?= $row['Soluong'] ?></div>
                        <div class="product-prop product-name"><?= $row['GiaBan'] ?></div>
                        <div class="product-prop product-img"><img src="<?= $row['Anh'] ?>" /></div>
                        <div class="product-prop product-button">
                            <a href="./product_deleting.php?MaMH=<?= $row['MaMH'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="product-prop product-button">
                            <a href="./product_editing.php?MaMH=<?= $row['MaMH'] ?>"><button class="btn-submit">Sửa</button></a>
                        </div>
                        <div class="clear-both"></div>
                        </li>
                        <?php } ?>
                    <?php } ?>
                <?php 
                while ($row = mysqli_fetch_array($products)) {
                    ?>
                    <li>
                        <div class="product-prop product-name"><?= $row['MaMH'] ?></div>
                        <div class="product-prop product-name2"><?= $row['TenMH'] ?></div>
                        <div class="product-prop product-name"><?= $row['MaLH'] ?></div>
                        <div class="product-prop product-name"><?= $row['Soluong'] ?></div>
                        <div class="product-prop product-name"><?= $row['GiaBan'] ?></div>
                        <div class="product-prop product-img"><img src="<?= $row['Anh'] ?>" /></div>
                        <div class="product-prop product-button">
                            <a href="./product_deleting.php?MaMH=<?= $row['MaMH'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="product-prop product-button">
                            <a href="./product_editing.php?MaMH=<?= $row['MaMH'] ?>"><button class="btn-submit">Sửa</button></a>
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