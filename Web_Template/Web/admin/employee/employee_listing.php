<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $totalRecords = $ql_quanaonam->queryDB("SELECT * FROM `nhanvien`");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    $employees = $ql_quanaonam->queryDB("SELECT *  FROM `nhanvien` ORDER BY `MaNV` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
?>
    <div class="main-content">
        <h1>Danh sách nhân viên</h1>
        <div class="employee">
            <form class="form-search" action="" method="GET">
                <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class ="form-control" placeholder="Tìm kiếm nhân viên">
                <button type="submit" class="btn-submit">Search</button>
            </form>
            <div class="buttons">
                <a href="./employee_adding.php">Thêm nhân viên</a>
            </div>
            <ul>
                <li class="product-item-heading">
                    <div class="employee-prop employee-name">Mã NV</div>
                    <div class="employee-prop employee-name2">Tên nhân viên</div>
                    <div class="employee-prop employee-name">Giới tính</div>
                    <div class="employee-prop employee-name3">Địa chỉ</div>
                    <div class="employee-prop employee-name">SDT</div>
                    <div class="employee-prop employee-name">Ngày sinh</div>
                    <div class="employee-prop employee-name">Username</div>
                    <div class="employee-prop employee-name">Password</div>
                    <div class="employee-prop employee-name">Phân quyền</div>
                    <div class="employee-prop employee-button">
                        Xóa
                    </div>
                    <div class="employee-prop employee-button">
                        Sửa
                    </div>
                    <div class="clear-both"></div>
                </li>
                <?php
                if(isset($_GET['search'])){
                    $employees = $ql_quanaonam->searchDB("*","nhanvien","MaNV",$_GET['search']);
                    while($row = mysqli_fetch_array($employees)){
                        ?>
                        <li>
                        <div class="employee-prop employee-name"><?= $row['MaNV'] ?></div>
                        <div class="employee-prop employee-name2"><?= $row['TenNV'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['Gioitinh'] ?></div>
                        <div class="employee-prop employee-name3"><?= $row['Diachi'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['DienThoai'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['NgaySinh'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['username'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['password'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['PhanQuyen'] ?></div>
                        <div class="employee-prop employee-button">
                            <a href="./employee_deleting.php?MaNV=<?= $row['MaNV'] ?>"><button class="btn-submit">Xóa</button></a>
                        </div>
                        <div class="employee-prop employee-button">
                            <a href="./employee_editing.php?MaNV=<?= $row['MaNV'] ?>"><button class="btn-submit">Sửa</button></a>
                        </div>
                        <div class="clear-both"></div>
                        </li>
                        <?php } ?>
                    <?php } ?>
                <?php 
                while ($row = mysqli_fetch_array($employees)) {
                    ?>
                    <li>
                        <div class="employee-prop employee-name"><?= $row['MaNV'] ?></div>
                        <div class="employee-prop employee-name2"><?= $row['TenNV'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['Gioitinh'] ?></div>
                        <div class="employee-prop employee-name3"><?= $row['DiaChi'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['DienThoai'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['NgaySinh'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['username'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['password'] ?></div>
                        <div class="employee-prop employee-name"><?= $row['PhanQuyen'] ?></div>
                        <div class="employee-prop employee-button">
                            <a href="./employee_deleting.php?MaNV=<?= $row['MaNV'] ?>">Xóa</a>
                        </div>
                        <div class="employee-prop employee-button">
                            <a href="./employee_editing.php?MaNV=<?= $row['MaNV'] ?>">Sửa</a>
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