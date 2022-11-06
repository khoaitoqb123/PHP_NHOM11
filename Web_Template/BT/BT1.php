<DOCTYPE>
    <html>
        <head>
            <title>Thao tác với n</title>
            <style>
                form{
                    background: #ffcd9e;
                }
                fieldset{
                    border: 2px dashed red;
                }
                legend{
                    background: #AAF0D1;
                    font-size: 24px;
                    color: #133c67;
                }
                td,input{
                    color: #9E1030;
                    font-size: 15px;
                }
                input{
                    width: 400px;
                }
            </style>
        </head>
        <body>
            <?php
                if(isset($_POST['n'])) 
                    $n=$_POST['n'];
                else $n=0;

                $ketqua="";
                $sochan="";
                $nhohon100="";
                $tongam="";
                $sorted_arr="";
                $kecuoi0="";
                if(isset($_POST['tinh'])) 
                {	
                    $arr=array();
                    for($i=0;$i<$n;$i++)
                    {
                        $x=rand(-1000,1000);
                        $arr[$i]=$x;
                    }
                    $ketqua=implode(", ",$arr)."&#13;&#10;";
                    
                    $count1=0;
                    foreach($arr as $v){
                        if($v%2==0 && $v>0 )
                            $count1++;
                    }
                    $sochan=$count1;
                    
                    $count2=0;
                    foreach($arr as $v){
                        if($v<100 )
                            $count2++;
                    }
                    $nhohon100=$count2;

                    $sum=0;
                    foreach($arr as $v)
                    {
                        if($v < 0)
                            $sum += $v;
                    }
                    $tongam=$sum;

                    $arr_i = array();
                    $j=0;
                    for($i=0;$i<$n;$i++)
                    {   
                        if($arr[$i]%10==0)
                        {    
                            $arr_i[$j] = $i+1 . " ";
                            $j++;
                        }
                        else
                            $j++;
                    }
                    
                    $kecuoi0=implode(" ",$arr_i);

                    for($i=0;$i<$n;$i++)
                        for($j=$i+1;$j<$n;$j++)
                        {
                            if($arr[$i]>$arr[$j])
                            {
                                $tam=$arr[$i];
                                $arr[$i]=$arr[$j];
                                $arr[$j]=$tam;
                            }
                        }
                    $sorted_arr=implode(", ",$arr)."&#13;&#10;";
                    // $ketqua .="Các số có chữ số cuối là số lẻ là: ";
                    // $daySo = "";
                    // for($i=0;$i<count($arr);$i++){
                    //     $soCuoi = $arr[$i]%10;
                    //     if($soCuoi %2 !=0)
                    //         $daySo .= "$arr[$i]  ";
                    // }
                    // $ketqua .= $daySo;
                }
            ?>
            <form action="" method="post">
                <fieldset>
                    <legend>Thao tác trên số n</legend>
                    <table>
                        <tr>
                            <td>Nhập số n: </td>
                            <td>
                                <input type="text" name="n" value="<?php echo $n?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Mảng phát sinh có độ dài n:</td>
                            <td>
                                <input type="text" name="ketqua" disabled="disabled" 
                                        value="<?php echo $ketqua?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Số phần tử chẵn: </td>
                            <td>
                                <input type="text" name="sochan" disabled="disabled" 
                                        value="<?php echo $sochan?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Số phần tử nhỏ hơn 100: </td>
                            <td>
                                <input type="text" name="nhohon100" disabled="disabled" 
                                        value="<?php echo $nhohon100?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tổng các giá trị âm trong mảng: </td>
                            <td>
                                <input type="text" name="tongam" disabled="disabled" 
                                        value="<?php echo $tongam?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Vị trí các phần tử có chữ số kề cuối là số 0:</td>
                            <td>
                                <input type="text" name="kecuoi0" disabled="disabled" 
                                        value="<?php echo $kecuoi0?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Mảng sau khi sắp xếp:</td>
                            <td>
                                <input type="text" name="sorted_arr" disabled="disabled" 
                                        value="<?php echo $sorted_arr?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" name='tinh'>Tính</button>
                            </td>
                        </tr>

                    </table>
                </fieldset>
            </form>
        </body>
    </html>