<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $totalRecords = $ql_quanaonam->queryDB("SELECT * FROM `khachhang`");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    $customers = $ql_quanaonam->queryDB("SELECT *  FROM `khachhang` ORDER BY `MaKH` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
?>
    <div class="main-content">
        <h1>Danh sách khách hàng</h1>
        <div class="customer">
            <form class="form-search" action="" method="GET">
                <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class ="form-control" placeholder="Tìm kiếm nhân viên">
                <button type="submit" class="btn-submit">Search</button>
            </form>
            <div class="buttons">
                <a href="./customer_adding.php">Thêm khách hàng</a>
            </div>
            <ul>
                <li class="customer-heading">
                    <div class="customer-prop customer-name">Mã khách hàng</div>
                    <div class="customer-prop customer-name2">Tên khách hàng</div>
                    <div class="customer-prop customer-name2">Địa chỉ</div>
                    <div class="customer-prop customer-name">Điện thoại</div>
                    <div class="customer-prop customer-name">Username</div>
                    <div class="customer-prop customer-name">Password</div>
                    <div class="customer-prop customer-name">Phân quyền</div>
                    <div class="customer-prop customer-button">
                        Xóa
                    </div>
                    <div class="customer-prop customer-button">
                        Sửa
                    </div>
                    <div class="clear-both"></div>
                </li>
                <?php
                if(isset($_GET['search'])){
                    $customers = $ql_quanaonam->searchDB("*","khachhang","MaKH",$_GET['search']);
                    while($row = mysqli_fetch_array($customers)){
                        ?>
                        <li>
                        <div class="customer-prop customer-name"><?= $row['MaKH'] ?></div>
                        <div class="customer-prop customer-name2"><?= $row['TenKH'] ?></div>
                        <div class="customer-prop customer-name2"><?= $row['Diachi'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['DienThoai'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['username'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['password'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['PhanQuyen'] ?></div>
                        <div class="customer-prop customer-button">
                            <a href="./customer_deleting.php?MaKH=<?= $row['MaKH'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="customer-prop customer-button">
                            <a href="./customer_editing.php?MaKH=<?= $row['MaKH'] ?>"><button class="btn-submit">Sửa</button></a>
                        </div>
                        <div class="clear-both"></div>
                        </li>
                        <?php } ?>
                    <?php } ?>
                <?php 
                while ($row = mysqli_fetch_array($customers)) {
                    ?>
                    <li>
                        <div class="customer-prop customer-name"><?= $row['MaKH'] ?></div>
                        <div class="customer-prop customer-name2"><?= $row['TenKH'] ?></div>
                        <div class="customer-prop customer-name2"><?= $row['DiaChi'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['DienThoai'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['username'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['password'] ?></div>
                        <div class="customer-prop customer-name"><?= $row['PhanQuyen'] ?></div>
                        <div class="customer-prop customer-button">
                            <a href="./customer_deleting.php?MaKH=<?= $row['MaKH'] ?>">Xóa</a>
                        </div>
                        <div class="customer-prop customer-button">
                            <a href="./customer_editing.php?MaKH=<?= $row['MaKH'] ?>">Sửa</a>
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