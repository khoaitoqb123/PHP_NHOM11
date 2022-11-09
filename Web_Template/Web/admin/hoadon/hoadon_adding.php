<link href="../admin_style.css" rel="stylesheet">
<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Thêm mặt hàng</h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == 'add') {
                if (isset($_POST['MaHD']) && !empty($_POST['MaNV']) && isset($_POST['NgayBan']) && !empty($_POST['MaKH'])) {
                    if (empty($_POST['MaHD'])) {
                        $error = "Bạn phải nhập mã hóa đơn";
                    } elseif (empty($_POST['MaNV'])) {
                        $error = "Bạn phải nhập mã nhân viên";
                    } elseif (empty($_POST['NgayBan'])) {
                        $error = "Bạn phải nhập ngày bán";
                    } elseif (empty($_POST['MaKH'])) {
                        $error = "Bạn phải nhập mã khách hàng";
                    }
                    if (!isset($error)) {
                        $result = $ql_quanaonam->insertHoaDon($_POST['MaHD'],$_POST['MaNV'],$_POST['NgayBan'],$_POST['MaKH']);
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
                    <a href = "hoadon_listing.php">Quay lại danh sách hóa đơn</a>
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
                        <label>Mã nhân viên: </label>
                        <input type="text" name="MaNV" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field4">
                        <label>Ngày bán: </label>
                        <input type="text" name="NgayBan" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Mã khách hàng </label>
                        <input type="text" name="MaKH" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <button><input type="submit" size="20" value="LƯU" class="Save"/></button>
                </form>
                <div class="clear-both"></div>
            <?php } ?>
        </div>
    </div>