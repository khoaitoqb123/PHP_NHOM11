<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh luong</title>
    <style>
        table{
            background-color: aqua;
        }
    </style>
</head>
<body>
    <?php 
        class nguoi{
            protected $ten,$diachi,$gioitinh;
            function getTen(){
                return $this->ten;
            }
            function setTen($ten){
                $this->ten=$ten;
            }
            function getDiaChi(){
                return $this->diachi;
            }
            function setDiaChi($diachi){
                $this->diachi=$diachi;
            }
            function getGioiTinh(){
                return $this->gioitinh;
            }
            function setGioiTinh($gioitinh){
                $this->gioitinh=$gioitinh;
            }
        }
        class sinhvien extends nguoi{
            private $lop,$nganh;
            public function getTen()
            {
                return $this->ten;
            }
            public function getDiaChi()
            {
                return $this->diachi;
            }
            public function getGioiTinh()
            {
                return $this->gioitinh;
            }
            function getLop(){
                return $this->lop;
            }
            function setLop($lop){
                $this->lop=$lop;
            }
            function getNganh(){
                return $this->nganh;
            }
            function setNganh($nganh){
                $this->nganh=$nganh;
            }
            function diemThuong(){
                if($this->nganh=='cntt') return 1;
                elseif($this->nganh=='kttc') return 1.5;
                else return 0;
            }
        }
        class giangvien extends nguoi{
            private $trinhdo, $luongcoban;
            public function getTen()
            {
                return $this->ten;
            }
            public function getDiaChi()
            {
                return $this->diachi;
            }
            public function getGioiTinh()
            {
                return $this->gioitinh;
            }
            function getTrinhDo(){
                return $this->trinhdo;
            }
            function setTrinhDo($trinhdo){
                $this->trinhdo=$trinhdo;
            }
            function getLuongCoBan(){
                return $this->luongcoban;
            }
            function setLuongCoBan($luongcoban){
                $this->luongcoban=$luongcoban;
            }
            function tinhLuong(){
                if($this->trinhdo=='cunhan'){
                    return $this->luongcoban*2.34;
                }
                if($this->trinhdo=='thacsy'){
                    return $this->luongcoban*3.67;
                }
                if($this->trinhdo=='tiensy'){
                    return $this->luongcoban*5.66;
                }
            }
        }
        $kq='';
        $nguoi = new nguoi();
        $sv = new sinhvien();
        $gv = new giangvien();
        $sv->setLop($_POST['lop']);
        $sv->setNganh($_POST['nganh']);
        $gv->setTrinhDo($_POST['trinhdo']);
        $gv->setLuongCoBan($_POST['luongcoban']);
        if(isset($_POST['tinh']) && isset($_POST['trinhdo']) && !empty($_POST['luongcoban'])){
            $kq= "T??n gi???ng vi??n: " .$nguoi->getTen()."\n";
            $kq= "?????a ch???: " .$nguoi->getDiaChi()."\n";
            $kq= "Gi???i t??nh: " .$nguoi->getGioiTinh()."\n";
            $kq= "Tr??nh ?????: " .$gv->getTrinhDo()."\n";
            $kq= "L????ng c?? b???n" .$gv->getLuongCoBan()."\n";
            $kq= "L????ng: " .$gv->tinhLuong();
        }else{
            $kq= "T??n sinh vi??n: " .$nguoi->getTen()."\n";
            $kq= "?????a ch???: " .$nguoi->getDiaChi()."\n";
            $kq= "Gi???i t??nh: " .$nguoi->getGioiTinh()."\n";
            $kq= "Ng??nh: " .$sv->getNganh()."\n";
            $kq= "L???p h???c: " .$sv->getLop()."\n";
            $kq= "??i???m th?????ng" .$sv->diemThuong();
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Quan l?? th??ng tin sinh vi??n, gi??o vi??n</legend>
            <table table border='0'>
                <th>
                    H??? T??n: <input type="text" name="ten" value="<?php echo $nguoi->getTen(); ?>">
                </th>
                <th>
                    ?????ach???: <input type="text" name="diachi" value="<?php echo $nguoi->getDiachi(); ?>">
                </th>
                <tr>
                    <td>
                        Gi???iT??nh: 
                    <input type="radio" name="gioitinh" value="nam" <?php if(isset($_POST['gioitinh'])&&($_POST['gioitinh'])=="nam") echo 'checked="checked"'?>/>Nam
                    <input type="radio" name="gioitinh" value="nu"<?php if(isset($_POST['gioitinh'])&&($_POST['gioitinh'])=="nu") echo 'checked="checked"'?>/>N???
                    </td>
                </tr>
                <tr>
                    <th>
                        <fieldset>
                        <legend>Gi??o Vi??n</legend>
                        <table>
                            <tr>
                                <td>
                                Tr??nh ?????:<select name="trinhdo" id="trinhdo">
                                    <option value="cunhan" <?php if(isset($_POST['trinhdo'])&& $_POST['trinhdo']=='cunhan') echo 'selected';?>>
                                        C??? Nh??n
                                    </option>
                                    <option value="thacsi" <?php if(isset($_POST['trinhdo'])&& $_POST['trinhdo']=='thacsy') echo 'selected';?>>
                                        Th???c S??
                                    </option>
                                    <option value="tiensi" <?php if(isset($_POST['trinhdo'])&& $_POST['trinhdo']=='tiensy') echo 'selected';?>>
                                        Ti???n S??
                                    </option>
                                </select>
                                </td>                            
                            </tr>
                            <tr>
                                <td>
                                    L????ng c?? b???n:<input type="number" name="luongcoban" id="luongcoban" value="<?php echo $gv->getLuongCoBan() ?>">
                                </td>
                            </tr>
                        </table>
                        </fieldset>
                    </th>
                    <th>
                        <fieldset>
                        <legend>Sinh Vi??n</legend>
                        <table>
                            <tr>
                                <td>
                                    L???p h???c<input type="test" name="lop" id="lop" value="<?php echo $sv->getLop() ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ng??nh<select name="nganh" id="nganh">
                                    <option value="cntt" <?php if(isset($_POST['nganh'])&& $_POST['nganh']=='cntt') echo 'selected';?>>
                                        CNTT
                                    </option>
                                    <option value="kt" <?php if(isset($_POST['nganh'])&& $_POST['nganh']=='kttc') echo 'selected';?>>
                                        KT
                                    </option>
                                    <option value="khac" <?php if(isset($_POST['nganh'])&& $_POST['nganh']=='kh??c') echo 'selected';?>>
                                        Kh??c
                                    </option>
                                </select>
                                </td>                            
                            </tr>                          
                        </table>
                        </fieldset>
                    </th>
                </tr>
                <tr style="text-align: center; align-items: center;">
                    <td>
                        <button type="submit" name="tinh">X??? l??</button>
                    </td>
            </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Th??ng tin chi ti???t</legend>
            <textarea name="" id="" cols="70" rows="5"><?php echo $kq; ?></textarea>
        </fieldset>
    </form>
</body>
</html>