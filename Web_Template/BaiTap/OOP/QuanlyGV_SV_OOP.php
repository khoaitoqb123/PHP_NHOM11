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
            $kq= "Tên giảng viên: " .$nguoi->getTen()."\n";
            $kq= "Địa chỉ: " .$nguoi->getDiaChi()."\n";
            $kq= "Giới tính: " .$nguoi->getGioiTinh()."\n";
            $kq= "Trình độ: " .$gv->getTrinhDo()."\n";
            $kq= "Lương cơ bản" .$gv->getLuongCoBan()."\n";
            $kq= "Lương: " .$gv->tinhLuong();
        }else{
            $kq= "Tên sinh viên: " .$nguoi->getTen()."\n";
            $kq= "Địa chỉ: " .$nguoi->getDiaChi()."\n";
            $kq= "Giới tính: " .$nguoi->getGioiTinh()."\n";
            $kq= "Ngành: " .$sv->getNganh()."\n";
            $kq= "Lớp học: " .$sv->getLop()."\n";
            $kq= "Điểm thưởng" .$sv->diemThuong();
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Quan lý thông tin sinh viên, giáo viên</legend>
            <table table border='0'>
                <th>
                    Họ Tên: <input type="text" name="ten" value="<?php echo $nguoi->getTen(); ?>">
                </th>
                <th>
                    Địachỉ: <input type="text" name="diachi" value="<?php echo $nguoi->getDiachi(); ?>">
                </th>
                <tr>
                    <td>
                        GiớiTính: 
                    <input type="radio" name="gioitinh" value="nam" <?php if(isset($_POST['gioitinh'])&&($_POST['gioitinh'])=="nam") echo 'checked="checked"'?>/>Nam
                    <input type="radio" name="gioitinh" value="nu"<?php if(isset($_POST['gioitinh'])&&($_POST['gioitinh'])=="nu") echo 'checked="checked"'?>/>Nữ
                    </td>
                </tr>
                <tr>
                    <th>
                        <fieldset>
                        <legend>Giáo Viên</legend>
                        <table>
                            <tr>
                                <td>
                                Trình độ:<select name="trinhdo" id="trinhdo">
                                    <option value="cunhan" <?php if(isset($_POST['trinhdo'])&& $_POST['trinhdo']=='cunhan') echo 'selected';?>>
                                        Cử Nhân
                                    </option>
                                    <option value="thacsi" <?php if(isset($_POST['trinhdo'])&& $_POST['trinhdo']=='thacsy') echo 'selected';?>>
                                        Thạc Sĩ
                                    </option>
                                    <option value="tiensi" <?php if(isset($_POST['trinhdo'])&& $_POST['trinhdo']=='tiensy') echo 'selected';?>>
                                        Tiến Sĩ
                                    </option>
                                </select>
                                </td>                            
                            </tr>
                            <tr>
                                <td>
                                    Lương cơ bản:<input type="number" name="luongcoban" id="luongcoban" value="<?php echo $gv->getLuongCoBan() ?>">
                                </td>
                            </tr>
                        </table>
                        </fieldset>
                    </th>
                    <th>
                        <fieldset>
                        <legend>Sinh Viên</legend>
                        <table>
                            <tr>
                                <td>
                                    Lớp học<input type="test" name="lop" id="lop" value="<?php echo $sv->getLop() ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ngành<select name="nganh" id="nganh">
                                    <option value="cntt" <?php if(isset($_POST['nganh'])&& $_POST['nganh']=='cntt') echo 'selected';?>>
                                        CNTT
                                    </option>
                                    <option value="kt" <?php if(isset($_POST['nganh'])&& $_POST['nganh']=='kttc') echo 'selected';?>>
                                        KT
                                    </option>
                                    <option value="khac" <?php if(isset($_POST['nganh'])&& $_POST['nganh']=='khác') echo 'selected';?>>
                                        Khác
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
                        <button type="submit" name="tinh">Xử lý</button>
                    </td>
            </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Thông tin chi tiết</legend>
            <textarea name="" id="" cols="70" rows="5"><?php echo $kq; ?></textarea>
        </fieldset>
    </form>
</body>
</html>