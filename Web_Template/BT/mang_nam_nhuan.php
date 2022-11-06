<DOCTYPE>
    <html>
        <head>
            <title>Tìm năm nhuận</title>
            <style>
                .class0{
                    background-color:#98f5ff;
                }
                .class1{
                    font-size: 20px;
                    background-color: #009acd;
                    color: white;
                }
                .class2{
                    background-color:#fff68f;
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
                function nam_nhuan($nam){
                    if($nam%400==0 || ($nam%4==0 && $nam%100!=0))
                        return 1;
                    else
                        return 0;
                }
                if(isset($_POST['nam']))
                    $nam = $_POST['nam'];
                else
                    $nam = "";
                   
                $kq="";
                if(isset($_POST['nam']))
                {
                    $nam = $_POST['nam'];
                    
                    foreach(range(2000,$nam) as $year)
                    {
                        if(nam_nhuan($year))
                            $kq = $kq. $year." ";
                    }
                    if($kq != "")
                        $kq = $kq . " là năm nhuận";
                    else   
                        $kq = "không có năm nhuận";
                }
                    
            ?>
            <form action="mang_nam_nhuan.php" method="post">
                <table width="300" border="0" class="class0" align="center">
                    <tr class="class1">
                        <td colspan="3" align="center">TÌM NĂM NHUẬN</td>
                    </tr>
                    <tr>
                        <td colspan="1" align="center">Năm:</td>
                        <td colspan="2" align="center">
                            <label></label>
                            <input type="text" name="nam" value="<?php echo $nam;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center" class="class2">
                            <label><?php echo $kq;?></label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center" >
                            <input type="submit" name="xuly" class="class3" value="Tìm năm nhuận">
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    </html>