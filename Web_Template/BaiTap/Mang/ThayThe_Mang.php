<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mang tim kiem va thay the</title>
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
function thay_the($arr,$so,$moi){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==$so){
            $arr[$i]=$moi;
        }
    }
    return $arr;
}
$str="";
$str_kq="";
$ketqua="";
if(isset($_POST['so'])){
    $so=$_POST['so'];
}
if(isset($_POST['moi'])){
    $moi=$_POST['moi'];
}
if(isset($_POST['so']) && isset($_POST['tinh']) && isset($_POST['moi'])){
    $str=$_POST['mang'];
    $arr=explode(",",$str);
    $str_kq=implode(",",$arr);
    $change=thay_the($arr,$so,$moi);
    $ketqua=implode(",",$change);
}
?>
<form action="" method="post">
<table border="0" cellpadding="0">
    <th colspan="2"><h2>THAY THẾ</h2></th>
    <tr>
        <td>Nhập mảng:</td>
        <td><input type="text" name="mang" size= "70" value="<?php echo $str;?> "/></td>
    </tr>
    <tr>
        <td>Giá trị cần thay thế</td>
        <td><input type="text" name="so" size="20" value="<?php if(isset($_POST['so'])) echo $_POST['so'];?> "/></td>
    </tr>
    <tr>
        <td>Giá trị thay thế</td>
        <td><input type="text" name="moi" size="20" value="<?php if(isset($_POST['moi'])) echo $_POST['moi'];?> "/></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="tinh"  size="20" value="  Thay thế  "/></td>
    </tr>
    <tr>
        <td>Mảng cũ:</td>
        <td><input type="text" name="mang_kq" size= "70" disabled="disabled" value="<?php echo $str_kq;?> "/></td>
    </tr>
        <td>Mảng mới:</td>
        <td><input type="text" name="kq" size= "70" disabled="disabled" value="<?php echo $ketqua;?> "/></td>
    </tr>
    <tr >
        <td colspan="2" align="center"><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>  
    </tr>
</table>
</form>
</body>
</html>

