<?php
include 'admin_header.php';
include_once('../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Sửa mặt hàng</h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == 'add') {
                if (!empty($_POST['TenMH']) && !empty($_POST['MaLH']) && !empty($_POST['Soluong']) && !empty($_POST['GiaBan']) && !empty($_POST['Anh'])) {
                    if (empty($_POST['TenMH'])) {
                        $error = "Bạn phải nhập tên mặt hàng";
                    } elseif (empty($_POST['MaLH'])) {
                        $error = "Bạn phải nhập mã loại hàng";
                    } elseif (empty($_POST['Soluong']) && is_numeric(str_replace('.', '', $_POST['Soluong'])) == false) {
                        $error = "Bạn phải số lượng sản phẩm";
                    } elseif (!empty($_POST['GiaBan']) && is_numeric(str_replace('.', '', $_POST['GiaBan'])) == false) {
                        $error = "Giá bán không hợp lệ";
                    } elseif (empty($_POST['Anh'])) {
                        $error = "Chưa nhập link ảnh";
                    }
                    if (!isset($error)) {
                        $result = $ql_quanaonam->updateMatHang($_POST['MaMH'],$_POST['TenMH'],$_POST['MaLH'],$_POST['Soluong'],$_POST['GiaBan'],$_POST['Anh']);
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
                    <a href = "product_listing.php">Quay lại danh sách sản phẩm</a>
                </div>
            <?php } else { ?>
                <form id="product-form" method="POST" action="?action=add"  enctype="multipart/form-data">
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Mã mặt hàng: </label>
                        <input type="text" name="MaMH" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field1">
                        <label>Tên mặt hàng: </label>
                        <input type="text" name="TenMH" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Mã loại hàng: </label>
                        <input type="text" name="MaLH" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field3">
                        <label>Số lượng: </label>
                        <input type="text" name="Soluong" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Giá bán: </label>
                        <input type="text" name="GiaBan" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field5">
                        <label>Link ảnh: </label>
                        <input type="text" name="Anh" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <button><input type="submit" size="20" value="LƯU" class="Save"/></button>
                </form>
                <div class="clear-both"></div>
            <?php } ?>
        </div>
    </div>