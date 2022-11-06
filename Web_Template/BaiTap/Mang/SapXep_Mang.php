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
function hoan_vi(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}           

function tang_dan(&$arr)
{
    for($i=0;$i<count($arr)-1;$i++)
	{
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$i] > $arr[$j]) {
                hoan_vi($arr[$i], $arr[$j]);
            }
        }			
    }
}

function giam_dan(&$arr)
{
    for($i=0;$i<count($arr)-1;$i++)
	{
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$i] < $arr[$j]) {
                hoan_vi($arr[$i], $arr[$j]);
            }
        }			
    }
}
$str="";
$str_kq="";
$ketqua="";
if(isset($_POST['tinh'])){
    $str=$_POST['mang'];
    $arr=explode(",",$str);
    tang_dan($arr);
    $str_kq=implode(",",$arr);
    giam_dan($arr);
    $ketqua=implode(",",$arr);
}
?>
<form action="" method="post">
<table border="0" cellpadding="0">
    <th colspan="2"><h2>SẮP XẾP</h2></th>
    <tr>
        <td>Nhập mảng:</td>
        <td><input type="text" name="mang" size= "70" value="<?php echo $str;?> "/></td><td style="color: red;">(*)</td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="tinh"  size="20" value="  Sắp xếp  "/></td>
    </tr>
    <td style="color: red;">Sau khi sắp xếp:</td>
    <tr>
        <td>Tăng dần:</td>
        <td><input type="text" name="mang_kq" size= "70" disabled="disabled" value="<?php echo $str_kq;?> "/></td>
    </tr>
        <td>Giảm dần:</td>
        <td><input type="text" name="kq" size= "70" disabled="disabled" value="<?php echo $ketqua;?> "/></td>
    </tr>
    <tr >
        <td colspan="2" align="center"><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>  
    </tr>
</table>
</form>
</body>
</html>

