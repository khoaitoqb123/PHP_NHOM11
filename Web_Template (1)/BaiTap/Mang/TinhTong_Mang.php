!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mang tinh tong</title>
<style type="text/css">
    table{
        color: #ffff00;
        background-color: gray;     
    }
    table th{
        background-color: blue;
        font-style: vni-times;
        color: yellow;
    }
</style>
</head>
<body>
    <?php
        function tinh_tong($arr){
            $tong = 0;
            for($i=0;$i<count($arr);$i++){
                $tong += $arr[$i];
            }
            return $tong;
        }
        $str = "";
        $tong = "";
        if(isset($_POST['tinh'])){
            $str = $_POST['mang'];
            $arr = explode(',',$str);
            $tong = tinh_tong($arr);
        }
    ?>
<form action="" method="post">
    <table border="0" cellpadding="0">
        <th colspan="2"><h2>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h2></th>
        <tr>
            <td>Nhập mảng:</td>
            <td><input type="text" name="mang" size= "70" value="<?php echo $str;?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tinh"  size="20" value="  Tổng dãy số  "/></td>
        </tr>
        <tr>
            <td>Tổng:</td>
            <td><input type="text" name="tong" size= "70" disabled="disabled" value="<?php echo $tong;?> "/></td>
        </tr>
    </table>
</form>
</body>
</html>