<html>
    <head>
        <style>
            .class0{
                background-color: #e5e9f0;
                width:500px;
                padding: 2px;
            }
            .class1{
                font-size: 20px;
                background-color: #009688;
                font-family: Lucida Handwriting;
                color: white;
            }
            .class2{
                width: 330px;
            }
            #mang{
                width: 300px;
            }
            #so{
                width: 100px;
            }
            #mang_kq{
                background-color: #e3fafc;
                color: black;
            }
            #button{
                width: 200px;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
            <?php
                function hoan_vi(&$a,&$b){
                    $tam = $a;
                    $a = $b;
                    $b = $tam;
                }
                function sap_tang($mang){
                    $n = count($mang);
                    for($i=0;$i<$n-1;$i++)
                        for($j=$i+1;$j<$n;$j++)
                        {
                            if($mang[$i]>$mang[$j])
                                hoan_vi($mang[$i],$mang[$j]);
                        }
                    return $mang;
                }
                function sap_giam($mang){
                    $n = count($mang);
                    for($i=0;$i<$n-1;$i++)
                        for($j=$i+1;$j<$n;$j++)
                        {
                            if($mang[$i]<$mang[$j])
                                hoan_vi($mang[$i],$mang[$j]);
                        }
                    return $mang;
                }

                if(isset($_POST['arr']))
                    $arr = $_POST['arr'];
                else $arr = "";
                if(isset($_POST['tangdan']))
                    $tangdan = $_POST['tangdan'];
                else $tangdan = "";
                if(isset($_POST['giamdan']))
                    $giamdan = $_POST['giamdan'];
                else $giamdan = "";

                if(isset($_POST['sapxep']))
                {
                    $tangdan = array();
                    $giamdan = array();
                    $arr = trim($_POST['arr']);
                    $mang = explode(",",$arr);
                    $mang1 = sap_tang($mang);
                    $tangdan = implode(",",$mang1);

                    $mang2 = sap_giam($mang);
                    $giamdan = implode(",",$mang2);

                    $n = count($mang);
                    $fp = @fopen("dulieu_bai6.txt","a+");
                    if(!$fp)
                    {
                        echo "Mo file khong thanh cong";
                    }
                    else    
                    {
                        for($i=0;$i<count($n);$i++)
                        {
                            $data = $tangdan[$i] . ",";
                            fwrite($fp,$data);
                        }
                        echo "\n";
                        for($i=0;$i<count($n);$i++)
                        {
                            $data = $giamdan[$i] . ",";
                            fwrite($fp,$data);
                        }
                    }
                    fclose($fp);
                }

                
            ?>
        <form action="mang_sap_xep.php" method="post">
            <table border="0" class="class0">
                <tr>
                    <td colspan="3" align="center" class="class1">S???P X???P M???NG</td>
                </tr>
                <tr>
                    <td>Nh???p m???ng:</td>
                    <td colspan="2">
                        <input type="text" name="arr" class="class2" value="<?php echo $arr;?>">
                        <b style="color:red">(*)</b>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"> 
                        <input type="submit" name="sapxep" value="S???p x???p t??ng/gi???m" id="button" >
                    </td>
                </tr>
                <tr>
                    <td style="color:red"><b>Sau khi s???p x???p:</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>T??ng d???n:</td>
                    <td colspan="2"> 
                        <input type="text" name="tangdan" class="class2" id="mang_kq" disabled="disabled" value="<?php echo $tangdan;?>">
                    </td>
                </tr>
                <tr>
                    <td>Gi???m d???n:</td>
                    <td colspan="2"> 
                        <input type="text" name="giamdan" class="class2" id="mang_kq" disabled="disabled" value="<?php echo $giamdan;?>">
                    </td>
                </tr>
                <tr class="class2">
                    <td colspan="3" align="center">
                        <label>
                            <span><b style="color:red">(*)</b> C??c ph???n t??? trong m???ng s??? c??ch nhau b???ng d???u ","</span>
                        </label>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>