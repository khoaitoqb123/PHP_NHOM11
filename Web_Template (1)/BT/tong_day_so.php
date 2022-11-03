<DOCTYPE>
    <html>
        <head>
            <style>
                .class0{
                    background-color:#ced4da;
                    width:400px;
                }
                .class1{
                    font-size: 20px;
                    background-color: #20c997;
                    font-family: Lucida Handwriting;
                    color: white;
                }
                .class2{
                    background-color: #FFF59D;
                    border: 1px solid black;
                }
                .class3{
                    color: red;
                    background-color:#CCFF90;
                }
            </style>
        </head>
        <body>
            <?php 
                function tinh_tong($arr)
                {
                   return ($arr[0]+$arr[count($arr)-1])*count($arr)/2;
                }
                $str="";
                $str_kq="";
                $ketqua="";
                if(isset($_POST['tinh']))
                {
                    $str = $_POST['dayso'];
                    $arr=explode(",",$str);
                    $str_kq=implode(",",$arr);
                    $ketqua=tinh_tong($arr);

                    $fp = @fopen('dulieu_bai4.txt',"a+");
                    if(!$fp)
                    {
                        echo "Mo file khong thanh cong";
                    }
                    else    
                    {
                        for($i=0;$i<count($arr);$i++)
                        {
                            $data = $arr[$i] . ",";
                            fwrite($fp,$data);
                        }
                        echo "\n";
                    }
                    fclose($fp);
                }
            ?>
            <form action="tong_day_so.php" method="post">
                <table border="0" class="class0">
                    <tr>
                        <td colspan="3" align="center" class="class1">NHẬP VÀ TÍNH TRÊN DÃY SỐ</td>
                    </tr>
                    <tr>
                        <td>Nhập dãy số:</td>
                        <td colspan="2">
                            <input type="text" name="dayso" value="<?php echo $str;?>"><span style="color:red"><b>(*) </b></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" >
                            <input type="submit" name="tinh" class="class2" value="Tổng dãy số">
                        </td>
                    </tr>
                    <tr>
                        <td>Tổng dãy số:</td>
                        <td colspan="2"> 
                            <input type="text" name="tong" class="class3" disabled="disabled" value="<?php echo $ketqua;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <label>
                                <span style="color:red"><b>(*) </b></span>
                                Các số được nhập cách nhau bởi dấu ","
                            </label>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    </html>