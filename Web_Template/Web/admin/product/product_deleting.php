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
            if (isset($_GET['MaMH']) && !empty($_GET['MaMH'])) {
                $result = $ql_quanaonam->deleteMatHang($_GET['MaMH']);
                if (!$result) {
                    $error = "Không thể xóa sản phẩm.";
                }
                $ql_quanaonam->closeDB($result);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./product_listing.php">Danh sách sản phẩm</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa sản phẩm thành công</h2>
                        <a href="./product_listing.php">Danh sách sản phẩm</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
?>