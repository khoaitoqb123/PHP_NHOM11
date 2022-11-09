<?php
    include_once('../admin_header/admin_header.php');
    include_once('../../function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
    ?>
    <div class="main-content">
        <h1>Xóa nhân viên</h1>
        <div id="content-box">
            <?php
            $error = false;
            if (isset($_GET['MaNV']) && !empty($_GET['MaNV'])) {
                $result = $ql_quanaonam->deleteNhanVien($_GET['MaNV']);
                if (!$result) {
                    $error = "Không thể xóa nhân viên.";
                }
                $ql_quanaonam->closeDB($result);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./employee_listing.php">Danh sách nhân viên</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa nhân viên thành công</h2>
                        <a href="./employee_listing.php">Danh sách nhân viên</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
?>