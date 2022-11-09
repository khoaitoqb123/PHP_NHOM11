<?php
include_once('../admin_header/admin_header.php');
include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Xóa khách hàng</h1>
        <div id="content-box">
            <?php
            $error = false;
            if (isset($_GET['MaKH']) && !empty($_GET['MaKH'])) {
                $result = $ql_quanaonam->deleteKhachHang($_GET['MaKH']);
                if (!$result) {
                    $error = "Không thể xóa khách hàng.";
                }
                $ql_quanaonam->closeDB($result);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./customer_listing.php">Danh sách khách hàng</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa khách hàng thành công</h2>
                        <a href="./customer_listing.php">Danh sách khách hàng</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
?>