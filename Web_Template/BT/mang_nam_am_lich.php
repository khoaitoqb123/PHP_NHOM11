<DOCTYPE>
    <html>
        <head>
            <style>
                .class0{
                    background-color:#98f5ff;
                }
                .class1{
                    font-size: 20px;
                    background-color: #009acd;
                    color: white;
                }
                .class3{
                    color: red;
                    background-color:#00bfff;
                    border-color: white;
                }
            </style>
        </head>
        <body>
            <?php
                $mang_can = array("Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
                $mang_chi = array("Hợi","Tý","Sửu","Dần","Mẹo","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
                $mang_hinh = array("hoi.jpg","chuot.jpg","suu.jpg","dan.jpg","meo.jpg","thin.jpg","ty.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");

                if(isset($_POST['nam']))
                    $nam = $_POST['nam'];
                else
                    $nam = "";
                if(isset($_POST['hinh_anh']))
                    $hinh_anh = $_POST['hinh_anh'];
                else
                    $hinh_anh = "";

                $nam_al = "";
                if(isset($_POST['nam']))
                {
                    $nam = $_POST['nam'];
                    if(is_numeric($nam))
                    {
                        $nam = $nam -3;
                        $can = $nam % 10;
                        $chi = $nam % 12;
                        $nam_al = $mang_can[$can];
                        $nam_al = $nam_al . " " . $mang_chi[$chi];
                        $hinh = $mang_hinh[$chi];
                        $hinh_anh = "<img src='images/$hinh'>";
                        $nam = $nam + 3;
                    }
                    
                }
            ?>
            <form action="mang_nam_am_lich.php" method="post">
                <table class="class0" align="center">
                    <tr class="class1">
                        <td colspan="3" align="center">TÍNH NĂM ÂM LỊCH</td>
                    </tr>
                    <tr>
                        <td align="center">Năm dương lịch</td>
                        <td align="center"></td>
                        <td align="center">Năm âm lịch</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="nam" value="<?php echo $nam;?>">
                        </td>
                        <td>
                            <input type="submit" name="transfer" class="class3" value="=>">
                        </td>
                        <td>
                            <input type="text" name="amlich" disabled="disabled" value="<?php echo $nam_al;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <label>
                                <?php echo $hinh_anh;?>
                            </label>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    </html>