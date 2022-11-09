<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Sửa thông tin khách hàng</h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == 'add') {
                if (isset($_POST['MaKH']) && !empty($_POST['TenKH']) && !empty($_POST['DiaChi']) && !empty($_POST['DienThoai']) && !empty($_POST['NgaySinh']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['PhanQuyen'])){
                    if (empty($_POST['TenKH'])) {
                        $error = "Bạn chưa nhập tên khách hàng";
                    } elseif (empty($_POST['MaKH'])) {
                        $error = "Bạn chưa nhập mã khách hàng";
                    } elseif (empty($_POST['DiaChi'])) {
                        $error = "Bạn chưa nhập địa chỉ";
                    } elseif (empty($_POST['DienThoai'])) {
                        $error = "Bạn chưa nhập số điện thoại";
                    } elseif (empty($_POST['NgaySinh'])) {
                        $error = "Bạn chưa nhập ngày sinh";
                    } elseif (empty($_POST['username'])) {
                        $error = "Bạn chưa nhập tên đăng nhập";
                    } elseif (empty($_POST['password'])) {
                        $error = "Bạn chưa nhập mật khẩu tài khoản";
                    } elseif (empty($_POST['PhanQuyen'])) {
                        $error = "Bạn chưa nhập phân quyền tài khoản";
                    }
                    if (!isset($error)) {
                        $result = $ql_quanaonam->updateKhachhang($_POST['MaKH'],$_POST['TenKH'],$_POST['Gioitinh'],$_POST['DiaChi'],$_POST['DienThoai'],$_POST['NgaySinh'],$_POST['username'],$_POST['password'],$_POST['PhanQuyen']);
                        if (!$result) {
                            $error = "Có lỗi xảy ra trong quá trình thực hiện.";
                        }
                    }
                } else {
                    $error = "Bạn chưa nhập thông tin khách hàng.";
                }
                ?>
                <div class = "container">
                    <div class = "error"><?= isset($error) ? $error : "Cập nhật thành công" ?></div>
                    <a href = "customer_listing.php">Quay lại danh sách khách hàng</a>
                </div>
            <?php } else { ?>
                <form id="customer-form" method="POST" action="?action=add"  enctype="multipart/form-data">
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Mã khách hàng: </label>
                        <input type="text" name="MaKH" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Tên khách hàng: </label>
                        <input type="text" name="TenKH" value="" />
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
                        <input type="text" name="Phân quyền" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <button><input type="submit" size="20" value="LƯU" class="Save"/></button>
                </form>
                <div class="clear-both"></div>
            <?php } ?>
        </div>
    </div>