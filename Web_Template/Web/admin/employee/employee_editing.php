<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Sửa thông tin nhân viên</h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == 'add') {
                if (!empty($_POST['TenNV']) && !empty($_POST['MaNV']) && !empty($_POST['Gioitinh']) && !empty($_POST['DiaChi']) && !empty($_POST['DienThoai']) && !empty($_POST['NgaySinh'])){
                    if (empty($_POST['TenNV'])) {
                        $error = "Bạn chưa nhập tên nhân viên";
                    } elseif (empty($_POST['MaNV'])) {
                        $error = "Bạn chưa nhập mã nhân viên";
                    } elseif (empty($_POST['Gioitinh'])) {
                        $error = "Bạn chưa nhập giới tính";
                    } elseif (empty($_POST['DiaChi'])) {
                        $error = "Bạn chưa nhập địa chỉ";
                    } elseif (empty($_POST['DienThoai'])) {
                        $error = "Bạn chưa nhập số điện thoại";
                    } elseif (empty($_POST['NgaySinh'])) {
                        $error = "Bạn chưa nhập ngày sinh";
                    } elseif (empty($_POST['PhanQuyen'])) {
                        $error = "Bạn chưa nhập phân quyền tài khoản";
                    }
                    if (!isset($error)) {
                        $result = $ql_quanaonam->updateNhanVien($_POST['MaNV'],$_POST['TenNV'],$_POST['Gioitinh'],$_POST['Diachi'],$_POST['Dienthoai'],$_POST['NgaySinh'],$_POST['username'],$_POST['password'],$_POST['PhanQuyen']);
                        if (!$result) {
                            $error = "Có lỗi xảy ra trong quá trình thực hiện.";
                        }
                    }
                } else {
                    $error = "Bạn chưa nhập thông tin nhân viên.";
                }
                ?>
                <div class = "container">
                    <div class = "error"><?= isset($error) ? $error : "Cập nhật thành công" ?></div>
                    <a href = "employee_listing.php">Quay lại danh sách nhân viên</a>
                </div>
            <?php } else { ?>
                <form id="employee-form" method="POST" action="?action=add"  enctype="multipart/form-data">
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Mã nhân viên: </label>
                        <input type="text" name="MaNV" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Tên nhân viên: </label>
                        <input type="text" name="TenNV" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Giới tính: </label>
                        <input type="text" name="Gioitinh" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Địa chỉ: </label>
                        <input type="text" name="DiaChi" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Điện thoại: </label>
                        <input type="text" name="DienThoai" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Ngày sinh: </label>
                        <input type="text" name="NgaySinh" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Username: </label>
                        <input type="text" name="username" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Password: </label>
                        <input type="password" name="password" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Phân quyền: </label>
                        <input type="text" name="PhanQuyen" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <button><input type="submit" size="20" value="LƯU" class="Save"/></button>
                </form>
                <div class="clear-both"></div>
            <?php } ?>
        </div>
    </div>