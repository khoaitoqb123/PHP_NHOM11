<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table tr td {
            border: 0;
        }
        table tr td.title {
            background-color: #0A66C3;
        }
        table tr.body {
            background-color: #B8EEFF;
        }
        table th{
            border: 0;
        }
        button {
            text-align: center;
            color: red;
            background-color: #6FD6FF;
        }
    </style>
</head>
<body>
    <?php 
        $nam1=0;
        $nam2=0;
        $kq1=[];
        $kq2=[];
        $str_kq1='';
        $str_kq2='';
        function nam_nhuan($nam){
          if($nam % 400 == 0 || $nam % 4 == 0 && $nam % 100 != 0){
            return 1;
          }
          else{
            return 0;
          }
        }
        if(isset($_POST['nam1'])){
          $nam1=$_POST['nam1'];
        }
        if(isset($_POST['nam2'])){
          $nam2=$_POST['nam2'];
        }
        if(isset($_POST['tinh1']) || isset($_POST['tinh2'])){
          foreach(range($nam1,2000) as $i=>$year){
            if(nam_nhuan($year)==1){
              $kq1[$i]=$year;
            }
          }
          $str_kq1=implode(',',$kq1);
          if($str_kq1 == ''){
            $str_kq1 = 'Không có năm nhuận';
          }
          foreach(range(2000,$nam2) as $i=>$year){
            if(nam_nhuan($year)==1){
              $kq2[$i]=$year;
            }
          }
          $str_kq2=implode(',',$kq2);
          if($str_kq2 == ''){
            $str_kq2 = 'Không có năm nhuận';
          }
        }
    ?>
    <form action="" method="post">
        <table border="1" cellspacing="0" cellpadding="10">
              <th style="color: #297BC4"> Năm nhập vào nhỏ hơn năm 2000</th>
                <tr style="text-align: center;">
                    <td class="title"> TÌM NĂM NHUẬN</td>
                </tr>
                <tr class="body">
                    <td>
                        Năm: <input type="number" name="nam1" value="<?php echo $nam1?>">
                    </td>
                </tr>
                <tr class="body">
                    <td>
                        <textarea style="background-color: #FFFFD6;" cols="50" rows="2"><?php echo $str_kq1?></textarea>
                    </td>
                </tr>
                <tr class="body" style="align-items: center; text-align: center;">
                    <td>
                       <button type="submit" name="tinh1">Tìm năm nhuận</button>
                    </td>
                </tr>
                <th style="color: #297BC4"> Năm nhập vào lớn hơn năm 2000</th>
                <tr style="text-align: center;">
                    <td class="title"> TÌM NĂM NHUẬN</td>
                </tr>
                <tr class="body">
                    <td>
                        Năm: <input type="number" name="nam2" value="<?php echo $nam2?>">
                    </td>
                </tr>
                <tr class="body">
                    <td>
                        <textarea style="background-color: #FFFFD6;" cols="50" rows="2"><?php echo $str_kq2?></textarea>
                    </td>
                </tr>
                <tr class="body" style="align-items: center; text-align: center;">
                    <td>
                       <button type="submit" name="tinh2">Tìm năm nhuận</button>
                    </td>
                </tr>
        </table>
    </form>
</body>
</html>