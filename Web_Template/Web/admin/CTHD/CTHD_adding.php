<link href="../admin_style.css" rel="stylesheet">
<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Thêm CTHD</h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == 'add') {
                if (isset($_POST['MaHD']) && !empty($_POST['MaMH']) && isset($_POST['SoLuong']) && !empty($_POST['DonGia']) && !empty($_POST['ThanhTien'])) {
                    if (empty($_POST['MaHD'])) {
                        $error = "Bạn phải nhập mã hóa đơn";
                    } elseif (empty($_POST['MaMH'])) {
                        $error = "Bạn phải mã mặt hàng";
                    } elseif (empty($_POST['SoLuong']) && is_numeric(str_replace('.', '', $_POST['Soluong'])) == false) {
                        $error = "Bạn phải nhập số lượng sản phẩm";
                    } elseif (empty($_POST['DonGia']) && is_numeric(str_replace('.', '', $_POST['DonGia'])) == false) {
                        $error = "Bạn phải nhập đơn giá";
                    } elseif (!empty($_POST['ThanhTien']) && is_numeric(str_replace('.', '', $_POST['ThanhTien'])) == false) {
                        $error = "Bạn phải nhập thành tiền";
                    }
                    if (!isset($error)) {
                        $result = $ql_quanaonam->insertCTHoaDon($_POST['MaHD'],$_POST['MaKH'],$_POST['SoLuong'],$_POST['DonGia'],$_POST['ThanhTien']);
                        if (!$result) {
                            $error = "Có lỗi xảy ra trong quá trình thực hiện.";
                        }
                    }
                } else {
                    $error = "Bạn chưa nhập thông tin sản phẩm.";
                }
                ?>
                <div class = "container">
                    <div class = "error"><?= isset($error) ? $error : "Cập nhật thành công" ?></div>
                    <a href = "CTHD_listing.php">Quay lại danh sách CTHD</a>
                </div>
            <?php } else { ?>
                <form id="product-form" method="POST" action="?action=add"  enctype="multipart/form-data">
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Mã hóa đơn: </label>
                        <input type="text" name="MaHD" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Mã mặt hàng: </label>
                        <input type="text" name="MaMH" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field3">
                        <label>Số lượng: </label>
                        <input type="text" name="SoLuong" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Đơn giá: </label>
                        <input type="text" name="DonGia" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Thành tiền: </label>
                        <input type="text" name="ThanhTien" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <button><input type="submit" size="20" value="LƯU" class="Save"/></button>
                </form>
                <div class="clear-both"></div>
            <?php } ?>
        </div>
    </div>