<html>
    <head>
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
            if(isset($_POST['a']))
                $a = $_POST['a'];
            else $a = "";
            if(isset($_POST['b']))
                $b = $_POST['b'];
            else $b = "";
            if(isset($_POST['na']))
                $na = $_POST['na'];
             else $na = "";
            if(isset($_POST['nb']))
                $nb = $_POST['nb'];
            else $nb = "";
            if(isset($_POST['chuoi_c']))
                $chuoi_c = $_POST['chuoi_c'];
            else $chuoi_c = "";
            if(isset($_POST['tang']))
                $tang = $_POST['tang'];
            else $tang = "";
            if(isset($_POST['giam']))
                $giam = $_POST['giam'];
            else $giam = "";
            if(isset($_POST['thuchien']))
            {
                $a = trim($_POST['a']);
                $manga = explode(",",$a);
                $na = count($manga);

                $b = trim($_POST['b']);
                $mangb = explode(",",$b);
                $nb = count($mangb);
            
                $c = array_merge($manga,$mangb);
                $chuoi_c = implode(",",$c);

                sort($c);
                $tang = implode(",",$c);

                rsort($c);
                $giam = implode(",",$c);
            }
        ?>
        <form action="mang_ghep.php" method="post">
            <table border="0" class="class0">
                <tr>
                    <td colspan="3" align="center" class="class1">ĐẾM PHẦN TỬ, GHÉP MẢNG VÀ SẮP XẾP</td>
                </tr>
                <tr class="class2">
                    <td>Mảng A:</td>
                    <td colspan="2">
                        <input type="text" name="a" id="mang" value="<?php echo $a?> ">
                </tr>
                <tr class="class2">
                    <td>Mảng B:</td>
                    <td colspan="2" >
                        <input type="text" name="b" id="mang" value="<?php echo $b?>">
                    </td>
                </tr>
                <tr class="class2">
                    <td></td>
                    <td colspan="2"> 
                        <input type="submit" name="thuchien" value="Thực hiện" id="button">
                    </td>
                </tr>
                <tr>
                    <td>Số phần tử mảng A:</td>
                    <td colspan="2"> 
                        <input type="text" name="na" id="na" disabled="disabled" value="<?php echo $na;?>">
                    </td>
                </tr>
                <tr>
                    <td>Số phần tử mảng B:</td>
                    <td colspan="2"> 
                        <input type="text" name="nb" id="nb" disabled="disabled" value="<?php echo $nb;?>">
                    </td>
                </tr>
                <tr>
                    <td>Mảng C:</td>
                    <td colspan="2"> 
                        <input type="text" name="c" id="c" disabled="disabled" value="<?php echo $chuoi_c;?>">
                    </td>
                </tr>
                <tr>
                    <td>Mảng C tăng dần:</td>
                    <td colspan="2"> 
                        <input type="text" name="tang" id="c" disabled="disabled" value="<?php echo $tang;?>">
                    </td>
                </tr>
                <tr>
                    <td>Mảng C giảm dần:</td>
                    <td colspan="2"> 
                        <input type="text" name="giam" id="c" disabled="disabled" value="<?php echo $giam;?>">
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