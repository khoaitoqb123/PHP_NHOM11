<DOCTYPE>
    <html>
        <head>
            <title>Mảng phát sinh và tính toán</title>
            <style>
                .class0{
                    border: 1px solid black;
                    width:600px;
                    padding: 2px;
                }
                .class1{
                    font-size: 20px;
                    background-color: #a61e4d;
                    font-family: Lucida Handwriting;
                    color: white;
                }
                .class2 > td{
                    background-color: #ffe3e3;
                }
                .class3{
                    background-color: #FFF59D;
                    border: 1px solid black;
                }
                .class4{
                    background-color:#ffa8a8;
                }
                #array{
                    width: 400px;
                }
                #numN{
                    width: 280px;
                }
                #button{
                    width: 230px;
                }
            </style>
        </head>
        <body>
            <?php
                function tao_mang($n){
                    for($i=0;$i<$n;$i++)
                    {
                        $mang[$i] = rand(0,20);
                    }
                    return $mang;
                }
                function xuat_mang($mang){
                    $mang_kq = "";
                    for($i=0;$i<count($mang);$i++){
                        $mang_kq = $mang_kq . $mang[$i] . " ";
                    }
                    return $mang_kq;
                }
                function tinh_tong($mang){
                    $sum=0;
                    for($i=0;$i<count($mang);$i++)
                    {
                        $sum += $mang[$i];
                    }
                    return $sum;
                }
                function tim_max($mang){
                    for($i=0;$i<count($mang);$i++)
                    {
                        $max = $mang[0];
                        if($max < $mang[$i])
                        {
                            $max = $mang[$i];
                        }
                    }
                    return $max;
                }
                function tim_min($mang){
                    for($i=0;$i<count($mang);$i++)
                    {
                        $min = $mang[0];
                        if($min > $mang[$i])
                        {
                            $min = $mang[$i];
                        }
                    }
                    return $min;
                }

                if(isset($_POST['n']))
                    $n = $_POST['n'];
                else   
                    $n = "";
                if(isset($_POST['max']))
                    $max = $_POST['max'];
                else   
                    $max = "";
                if(isset($_POST['min']))
                    $min = $_POST['in'];
                else   
                    $min = "";
                if(isset($_POST['mang_kq']))
                    $mang_kq = $_POST['mang_kq'];
                else   
                    $mang_kq = "";
                if(isset($_POST['tong']))
                    $tong= $_POST['tong'];
                else   
                    $tong = "";

                if(isset($_POST['xuly']))
                {
                    if($n == '0')
                    $mang = array();
                    $mang_kq = array();
                    $mang = tao_mang($n);
                    $mang_kq = xuat_mang($mang);
                    $tong = tinh_tong($mang);
                    $max = tim_max($mang);
                    $min = tim_min($mang);
                }
            ?>
            <form action="mang_phat_sinh_tinh_toan.php" method="post">
                <table border="0" class="class0">
                    <tr>
                        <td colspan="3" align="center" class="class1">PHÁT SINH MẢNG VÀ TÍNH TOÁN</td>
                    </tr>
                    <tr class="class2">
                        <td>Nhập số phần tử:</td>
                        <td colspan="2">
                            <input type="text" name="n" id="numN" value="<?php echo $n;?>">
                        </td>
                    </tr>
                    <tr class="class2">
                        <td></td>
                        <td colspan="2" >
                            <input type="submit" name="xuly" id="button" class="class3" value="Phát sinh và tính toán">
                        </td>
                    </tr>
                    <tr>
                        <td>Mảng:</td>
                        <td colspan="2"> 
                            <input type="text" name="mang_kq" id="array" class="class4" disabled="disabled" value="<?php echo $mang_kq;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>GTLN (MAX) trong mảng:</td>
                        <td colspan="2"> 
                            <input type="text" name="max" class="class4" disabled="disabled" value="<?php echo $max;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>GTNN (MIN) trong mảng:</td>
                        <td colspan="2"> 
                            <input type="text" name="min" class="class4" disabled="disabled" value="<?php echo $min;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tổng mảng:</td>
                        <td colspan="2"> 
                            <input type="text" name="tong" class="class4" disabled="disabled" value="<?php echo $tong;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <label>
                                (<span style="color:red"><b>Ghi chú: </b></span>Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
                            </label>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    </html>