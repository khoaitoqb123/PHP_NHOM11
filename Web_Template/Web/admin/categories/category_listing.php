<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $totalRecords = $ql_quanaonam->queryDB("SELECT * FROM loaihang");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    $categories = $ql_quanaonam->queryDB("SELECT *  FROM loaihang ORDER BY 'MaLH' DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
?>
    <div class="main-content">
        <h1>Danh sách sản phẩm</h1>
        <div class="categories">
            <div class="buttons">
                <a href="categories_adding.php">Thêm loại hàng</a>
            </div>
            <ul>
                <li class="categories-heading">
                    <div class="categories-prop categories-name">Mã loại hàng</div>
                    <div class="categories-prop categories-name2">Tên loại hàng</div>
                    <div class="categories-prop categories-button"></div>
                    <div class="categories-prop categories-button"></div>
                    <div class="clear-both"></div>
                </li>
                <?php 
                while ($row = mysqli_fetch_array($categories)) {
                    ?>
                    <li>
                        <div class="categories-prop categories-name"><?= $row['MaLH'] ?></div>
                        <div class="categories-prop categories-name2"><?= $row['TenLH'] ?></div>
                        <div class="categories-prop categories-button">
                            <a href="./categories_deleting.php?MaLH=<?= $row['MaLH'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="categories-prop categories-button">
                            <a href="./categories_editing.php?MaLH=<?= $row['MaLH'] ?>"><button class="btn-submit">Sửa</button></a>
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