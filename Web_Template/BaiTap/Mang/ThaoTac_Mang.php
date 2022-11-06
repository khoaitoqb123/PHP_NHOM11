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
    $arr = array();
    function tao_mang($n){
        for($i=0;$i<$n;$i++){
            $x = rand(-200,200);
            $arr[$i] = $x;
        }
        return $arr;
    }
    function xuat_mang($arr){
        $str = "";
        for($i=0;$i<count($arr);$i++){
            $str .= $arr[$i] ." ";
        }
        return $str;
    }
    function dem_chan($arr){
        $count1 = 0;
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]%2==0){
                $count1++;
            }
        }
        return $count1;
    }
    function dem_nho_hon_100($arr){
        $count2 = 0;
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]<100){
                $count2++;
            }
        }
        return $count2;
    }
    function tinh_tong($arr){
        $tong = 0;
        for($i=0;$i<count($arr);$i++){
            if($arr[$i] < 0){
                $tong += $arr[$i];
            }
        }
        return $tong;
    }
    function hoan_vi(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }           

    function tang_dan($arr)
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
        return $arr;
    }
    if(isset($_POST['n'])){
        $n = $_POST['n'];
    }
    else{
        $n = 0;
    }
    $mang = "";
    $mang_xuat = "";
    $tong = "";
    $count1 = "";
    $count2 = "";
    $tang = "";
    $ketqua = "";
	$daySoKe = "";
    if(isset($_POST['tinh'])){
        $mang = tao_mang($n);
        $mang_xuat = xuat_mang($mang);
        $tong = tinh_tong($mang);
        $count1 = dem_chan($mang);
        $count2 = dem_nho_hon_100($mang);
        $array = tang_dan($mang);
        $tang = implode(' ',$array);
		for($i=0;$i<count($mang);$i++){
			$tam = $mang[$i]/10;
			$soKeCuoi = $tam%10;
			if($soKeCuoi == 0 && ($mang[$i] >= 100 || $mang[$i] <= -100)) {			
				$daySoKe .= "$mang[$i]  ";
			}
		}
		$ketqua .= $daySoKe."&#13;&#10;";
    }
?>
<form action="" method="post">
<table border="0" cellpadding="0">
    <th colspan="2"><h2>THAO TÁC TRÊN MẢNG SỐ NGUYÊN</h2></th>
    <tr>
        <td>Nhập n:</td>
        <td><input type="text" name="n" size= "70" value="<?php echo $n;?>"/></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="tinh"  size="20" value="   Phát sinh và tính toán  "/></td>
    </tr>
    <tr>
        <td>Mảng:</td>
        <td><input type="text" name="mang" size= "70" disabled="disabled" value="<?php echo $mang_xuat;?> "/></td>
    </tr>
    <tr>
        <td>Số lượng giá trị chẵn:</td>
        <td><input type="text" name="dem1" size= "70" disabled="disabled" value="<?php echo $count1;?> "/></td>
    </tr>
    <tr>
        <td>Số lượng giá trị bé hơn 100:</td>
        <td><input type="text" name="dem2" size= "70" disabled="disabled" value="<?php echo $count2;?> "/></td>
    </tr>
    <tr>
        <td>Tổng:</td>
        <td><input type="text" name="tong" size= "70" disabled="disabled" value="<?php echo $tong;?> "/></td>
    </tr>
    <tr>
        <td>Số có giá trị có kề cuối là 0:</td>
        <td><input type="text" name="ke0" size= "70" disabled="disabled" value="<?php echo $ketqua;?> "/></td>
    </tr>
    <tr>
        <td>Mảng tăng dần:</td>
        <td><input type="text" name="tang" size= "70" disabled="disabled" value="<?php echo $tang;?> "/></td>
    </tr>
</table>
</form>
</body>
</html>