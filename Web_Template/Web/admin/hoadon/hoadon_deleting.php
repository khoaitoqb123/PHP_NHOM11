<link href="../admin_style.css" rel="stylesheet">
<?php
    include_once('../admin_header/admin_header.php');
    include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Xóa sản phẩm</h1>
        <div id="content-box">
            <?php
            $error = false;
            if (isset($_GET['MaHD']) && !empty($_GET['MaHD'])) {
                $result = $ql_quanaonam->deleteHoaDon($_GET['MaHD']);
                if (!$result) {
                    $error = "Không thể xóa sản phẩm.";
                }
                $ql_quanaonam->closeDB($result);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="hoadon_listing.php">Danh sách hóa đơn</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa sản phẩm thành công</h2>
                        <a href="hoadon_listing.php">Danh sách hóa đơn</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
?>