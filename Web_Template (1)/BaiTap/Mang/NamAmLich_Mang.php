<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table{
            color: black;
            background-color: #B8EEFF;     
        }
        table th{
            background-color: blue;
            font-style: vni-times;
            color: yellow;
        }
        table, th {
        border:1px solid black;
        }
    </style>

</head>
<body>
    <?php
        $nam=0;
        $nam_al = '';
        $mang_can = array("Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
        $mang_chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
        $mang_hinh = array("hoi.jpg","chuot.jpg","suu.jpg","dan.jpg","meo.jpg","thin.jpg","ty.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");
        if(isset($_POST['nam']))
            $nam=$_POST['nam'];
        if(isset($_POST['nam']) && isset($_POST['tinh'])){
            $nam_duong = $nam - 3;
            $can = $nam_duong%10;
            $chi = $nam_duong%12;
            $nam_al = $mang_can[$can];
            $nam_al = $nam_al." ".$mang_chi[$chi];
            $hinh = $mang_hinh[$chi];
            $hinh_anh = "<img src='images/$hinh'>";
        }
    ?>
    <form action="" method="post">
        <table>
            <th>Tính năm âm lịch</th>
            <tr>
                <td>Năm dương lịch</td>
                <td><button type="submit" name="tinh">=></button></td>
                <td>Năm âm lịch</td>
            </tr>
            <tr>
                <td><input type="number" name="nam" value="<?php echo $nam; ?>"></td>
                <td> </td>
                <td><input type="text" name="nam_al" disabled="disabled" value="<?php echo $nam_al; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo $hinh_anh; ?></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>