<html>
    <head>
        <title>Tìm kiếm</title>
        <style>
            .class0{
                background-color: #e5e9f0;
                border: 1px solid black;
                width:500px;
                padding: 2px;
            }
            .class1{
                font-size: 20px;
                background-color: #20c997;
                font-family: Lucida Handwriting;
                color: white;
            }
            .class2{
                background-color: #009688;
            }
            #mang{
                width: 300px;
            }
            #so{
                width: 100px;
            }
            #ketqua{
                background-color: #c3fae8;
                color: red;
                width: 300px;
                font-weight: bold;
            }
            #button{
                width: 100px;
                background-color: #a5d8ff;
                border: 1px outset black;
            }
        </style>
    </head>
    <body>
        <?php
            function tim_kiem($arr,$so){
                for($i=0;$i<count($arr);$i++)
                {
                    if($arr[$i]==$so)
                        return $i+1;
                }
            }

            if(isset($_POST['mang']))
            {
                $mang = $_POST['mang'];
            }
            else   $mang = "";
            if(isset($_POST['so']))
                $so = $_POST['so'];
            else    
                $so = "";
            if(isset($_POST['mang_kq']))
                $mang_kq = $_POST['mang_kq'];
            else    
                $mang_kq = "";
            if(isset($_POST['ketqua']))
                $ketqua = $_POST['ketqua'];
            else    
                $ketqua = "";

            $mang="";
            $mang_kq="";
            $ketqua="";
            if(isset($_POST['so']) && isset($_POST['timkiem'])){
                $mang=$_POST['mang'];
                $arr=explode(",",$mang);
                $mang_kq=implode(",",$arr);
                $vitri=tim_kiem($arr,$so);
                if($vitri!=-1){
                    $ketqua="Tìm thấy ".$so." tại vị trí thứ ". $vitri ." của mảng.";
                }
                else{
                    $ketqua="Không tìm thấy ".$so." trong mảng.";
                }
            }
        ?>
        <form action="mang_tim_kiem.php" method="post">
            <table border="0" class="class0">
                <tr>
                    <td colspan="3" align="center" class="class1">TÌM KIẾM</td>
                </tr>
                <tr>
                    <td>Nhập mảng:</td>
                    <td colspan="2">
                        <input type="text" name="mang" id="mang" value="<?php echo $mang;?>">
                    </td>
                </tr>
                <tr>
                    <td>Nhập số cần tìm:</td>
                    <td colspan="2" >
                        <input type="text" name="so" id="so" value="<?php echo $so?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"> 
                        <input type="submit" name="timkiem" value="Tìm kiếm" id="button" >
                    </td>
                </tr>
                <tr>
                    <td>Mảng:</td>
                    <td colspan="2"> 
                        <input type="text" name="mang_kq" id="mang" disabled="disabled" value="<?php echo $mang_kq;?>">
                    </td>
                </tr>
                <tr>
                    <td>Kết quả tìm kiếm:</td>
                    <td colspan="2"> 
                        <input type="text" name="ketqua" id="ketqua" disabled="disabled" value="<?php echo $ketqua;?>">
                    </td>
                </tr>
                <tr class="class2">
                    <td colspan="3" align="center">
                        <label>
                            (<span>Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</span>
                        </label>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>