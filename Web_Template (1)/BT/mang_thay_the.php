<DOCTYPE>
    <html>
        <head>
            <title>Thay thế</title>
            <style>
                .class0{
                    border: 1px solid black;
                    width:600px;
                    padding: 2px;
                }
                .class1{
                    font-size: 20px;
                    background-color: #880E4F;
                    font-family: Lucida Handwriting;
                    color: white;
                }
                .class2{
                    background-color: #faa2c1;
                }
                .class3{
                    background-color: #FFF59D;
                    border: 1px solid black;
                }
                .class4{
                    background-color:#ffa8a8;
                }
                #mang{
                    width: 400px;
                }
                #button{
                    width: 80px;
                    height: 25px;
                    background-color: #ffe066;
                    border: 1px solid black;
 
                }
                #mang_kq{
                    background-color:#ff8787;
                    width: 400px;
                    color: black;
                }
            </style>
        </head>
        <body>
            <?php
                function thay_the($mang,$cu,$moi)
                {
                    for($i=0;$i<count($mang);$i++)
                    {
                        if($mang[$i]==$cu)
                            $mang[$i]=$moi;
                    }
                    return $mang;
                }
                if(isset($_POST['mang']))
                    $mang = $_POST['mang'];
                else    
                    $mang = "";
                if(isset($_POST['socanthay']))
                    $socanthay = $_POST['socanthay'];
                else   
                    $socanthay = "";
                if(isset($_POST['sothaythe']))
                    $sothaythe = $_POST['sothaythe'];
                else   
                    $sothaythe = "";
                if(isset($_POST['mangcu']))
                    $mangcu = $_POST['mangcu'];
                else   
                    $mangcu = "";
                if(isset($_POST['mangmoi']))
                    $mangmoi= $_POST['mangmoi'];
                else   
                    $mangmoi = "";

                if(isset($_POST['thaythe']))
                {
                    $mang = $_POST['mang'];
                    $arr = explode(",",$mang);
                    $mangcu = implode("  ",$arr);
                    $arr = thay_the($arr,$socanthay,$sothaythe);
                    $mangmoi = implode("  ",$arr);
                }
            ?>
            <form action="mang_thay_the.php" method="post">
                <table border="0" class="class0">
                    <tr>
                        <td colspan="3" align="center" class="class1">THAY THẾ</td>
                    </tr>
                    <tr class="class2">
                        <td>Nhập các phần tử:</td>
                        <td colspan="2">
                            <input type="text" name="mang" id="mang" value="<?php echo $mang;?>">
                        </td>
                    </tr>
                    <tr class="class2">
                        <td>Giá trị cần thay thế:</td>
                        <td colspan="2" >
                            <input type="text" name="socanthay" value="<?php echo $socanthay?>">
                        </td>
                    </tr>
                    <tr class="class2">
                        <td>Giá trị thay thế:</td>
                        <td colspan="2" >
                            <input type="text" name="sothaythe" value="<?php echo $sothaythe?>">
                        </td>
                    </tr>
                    <tr class="class2">
                        <td></td>
                        <td colspan="2"> 
                            <input type="submit" name="thaythe" value="Thay thế" id="button">
                        </td>
                    </tr>
                    <tr>
                        <td>Mảng cũ:</td>
                        <td colspan="2"> 
                            <input type="text" name="mangcu" id="mang_kq" disabled="disabled" value="<?php echo $mangcu;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Mảng sau khi thay thế:</td>
                        <td colspan="2"> 
                            <input type="text" name="mangmoi" id="mang_kq" disabled="disabled" value="<?php echo $mangmoi;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <label>
                                (<span style="color:red"><b>Ghi chú: </b></span>Các phần tử trong mảng sẽ cách nhau bằng dấu ","</span>)
                            </label>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    </html>