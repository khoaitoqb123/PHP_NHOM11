<?php
abstract class SQL{
    private $user;
    private $username;
    private $password;
    private $db_name;
    private $connect;

    function __construct($user="",$username="",$password="",$db_name)
    {
        $this->user = $user;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }
    public function setDBName($db_name){
        $this->db_name = $db_name;
    }
    public function connectDB(){
        return $this->connect = new mysqli($this->user,$this->username,$this->password,$this->db_name);
    }
    public function getConnect(){
        return $this->connect;
    }
    public function isConnect(){
        return $this->connect->connect_errno;
    }
    function queryDB($str_query = ""){
        return mysqli_query($this->connect,$str_query);
    }
    function closeDB(){
        mysqli_close($this->connect);
    }
}

class ql_quanaonam extends SQL{
    public function searchDB($fields='*', $table='',$fieldSearch='', $search_value='')
    {
        $str = "SELECT $fields FROM $table";
        if($search_value == "")
        return $this->queryDB($str);
        return $this->queryDB("$str WHERE $fieldSearch LIKE '%$search_value%'");
    }
    public function searchDB2($fields='*', $fieldSearch='', $search_value='')
    {
        $str = "SELECT $fields FROM `mathang` INNER JOIN `loaihang` ON `mathang`.`MaLH` = `loaihang`.`MaLH` ORDER BY `mathang`.`MaMH`";
        if($search_value == "")
        return $this->queryDB($str);
        return $this->queryDB("$str WHERE $fieldSearch LIKE '%$search_value%'");
    }
    public function insertMatHang($MaMH="",$TenMH="",$MaLH="",$SoLuong="",$GiaBan="",$Anh=""){
        $str_query = "INSERT INTO `mathang`(`MaMH`,`TenMH`,`MaLH`,`SoLuong`,`GiaBan`,`Anh`) VALUES ('$MaMH','$TenMH','$MaLH','$SoLuong','$GiaBan','$Anh')";
        return $this->queryDB($str_query);
    }
    public function updateMatHang($MaMH="",$TenMH="",$MaLH="",$Soluong="",$GiaBan="",$Anh="")
    {
    $str_query = "UPDATE mathang SET `TenMH`='$TenMH', `MaLH`='$MaLH', `Soluong`='$Soluong', `GiaBan`='$GiaBan',`Anh`='$Anh' WHERE `MaMH`='$MaMH'";
    return $this->queryDB($str_query);
    }
    public function deleteMatHang($MaMH=""){
        $str_query = "DELETE FROM `mathang` WHERE `MaMH` = '$MaMH'";
        return $this->queryDB($str_query);
    }
    public function insertLoaiHang($MaLH="",$TenLH=""){
        $str_query = "INSERT INTO `loaihang`(`MaLH`,`TenLH`) VALUES ('$MaLH','$TenLH')";
        return $this->queryDB($str_query);
    }
    public function updateLoaiHang($MaLH="",$TenLH="")
    {
        $str_query = "UPDATE loaihang SET `TenMH`='$TenLH'WHERE `MaLH`='$MaLH'";
        return $this->queryDB($str_query);
    }
    public function deleteLoaiHang($MaLH=""){
        $str_query = "DELETE FROM `loaihang` WHERE `MaLH` = '$MaLH'";
        return $this->queryDB($str_query);
    }

    public function insertNhanVien($MaNV="",$TenNV="",$Gioitinh="",$DiaChi="",$Dienthoai="",$username="",$password=""){
        $str_query = "INSERT INTO `nhanvien`(`MaNV`,`TenNV`,`Gioitinh`,`DiaChi`,`DienThoai`,`username`,`password`) VALUES ('$MaNV','$TenNV','$Gioitinh','$DiaChi','$Dienthoai','$username','$password')";
        return $this->queryDB($str_query);
    }
    public function updateNhanVien($MaNV="",$TenNV="",$Gioitinh="",$DiaChi="",$DienThoai="",$username="",$password="",$PhanQuyen="")
    {
        $str_query = "UPDATE nhanvien SET `TenNV`='$TenNV',`Gioitinh`='$Gioitinh',`DiaChi`='$DiaChi',`Dienthoai`='$DienThoai',`username`='$username',`password`='$password',`PhanQuyen`='$PhanQuyen' WHERE `MaNV`='$MaNV'";
        return $this->queryDB($str_query);
    }
    public function deleteNhanVien($MaNV=""){
        $str_query = "DELETE FROM `nhanvien` WHERE `MaNV` = '$MaNV'";
        return $this->queryDB($str_query);
    }

    public function insertKhachHang($MaKH="",$TenKH="",$DiaChi="",$DienThoai="",$username="",$password="",$PhanQuyen=""){
        $str_query = "INSERT INTO `khachhang`(`MaKH`,`TenKH`,`DiaChi`,`DienThoai`,`username`,`password`,`PhanQuyen`) VALUES ('$MaKH','$TenKH','$DiaChi','$DienThoai','$username','$password','$PhanQuyen')";
        return $this->queryDB($str_query);
    }
    public function updateKhachHang($MaKH="",$TenKH="",$Gioitinh="",$DiaChi="",$DienThoai="",$username="",$password="",$PhanQuyen="")
    {
        $str_query = "UPDATE khachhang SET `TenKH`='$TenKH',`Gioitinh`=`$Gioitinh`,`DiaChi`='$DiaChi',`DienThoai`='$DienThoai',`username`='$username',`password`='$password',`PhanQuyen` = '$PhanQuyen' WHERE `MaKH`='$MaKH'";
        return $this->queryDB($str_query);
    }
    public function deleteKhachHang($MaKH=""){
        $str_query = "DELETE FROM `khachhang` WHERE `MaKH` = '$MaKH'";
        return $this->queryDB($str_query);
    }
    public function insertHoaDon($MaHD="",$MaNV="",$NgayBan="",$MaKH=""){
        $str_query = "INSERT INTO `hdban`(`MaHD`,`MaNV`,`NgayBan`,`MaKH`) VALUES ('$MaHD','$MaNV','$NgayBan','$$MaKH')";
        return $this->queryDB($str_query);
    }
    public function updateHoaDon($MaHD="",$MaNV="",$NgayBan="",$MaKH="")
    {
    $str_query = "UPDATE hdban SET `MaNV`='$MaNV', `NgayBan`='$NgayBan', `MaKH`='$MaKH' WHERE `MaHD`='$MaHD'";
    return $this->queryDB($str_query);
    }
    public function deleteHoaDon($MaHD=""){
        $str_query = "DELETE FROM `hdban` WHERE `MaHD` = '$MaHD'";
        return $this->queryDB($str_query);
    }
    public function insertCTHoaDon($MaHD="",$MaMH="",$SoLuong="",$DonGia="",$ThanhTien=""){
        $str_query = "INSERT INTO `chitiethd`(`MaHD`,`MaMH`,`SoLuong`,`DonGia`,`ThanhTien`) VALUES ('$MaHD','$MaMH','$SoLuong','$$DonGia','$ThanhTien')";
        return $this->queryDB($str_query);
    }
    public function updateCTHoaDon($MaHD="",$MaMH="",$SoLuong="",$DonGia="",$ThanhTien)
    {
    $str_query = "UPDATE chitiethd SET `SoLuong`='$SoLuong', `DonGia`='$DonGia', `ThanhTien`='$ThanhTien' WHERE `MaHD`='$MaHD' AND `MaMH` = '$MaMH'";
    return $this->queryDB($str_query);
    }
    public function deleteCTHoaDon($MaHD="",$MaMH=""){
        $str_query = "DELETE FROM `chitiethd` WHERE `MaHD` = '$MaHD' AND `MaMH`='$MaMH'";
        return $this->queryDB($str_query);
    }
    public function layMaKhachHang()
    {
        $lastRow = $this->queryDB("SELECT MaKH FROM khachhang ORDER BY MaKH DESC LIMIT 1");
        $last =  implode(mysqli_fetch_array($lastRow));
        $maMax = substr($last, 2, 3);
        $MaKH = (int)$maMax + 1;
        return "KH0" . $MaKH;
    }
    public function dangkyKhachHang($TenKH="",$DiaChi="",$DienThoai="",$username="",$password="",$xacnhanpassword="",$PhanQuyen="")
  {
    if (!$username || !$password || !$TenKH || !$DiaChi || !$DienThoai || !$xacnhanpassword) {
      return "Please enter full information.";
    }
  
    if (mysqli_num_rows($this->queryDB("SELECT username FROM khachhang WHERE username='$username'")) > 0) {
      return "Sign In name already exist. Please enter another Sign In name.";
    }
  
    if (!preg_match("/^\\+?[0-9][0-9]{7,12}$/", $DienThoai)) {
      return "Phone number incorrect. Please enter another phone number.";
    }
    
    if ($password != $xacnhanpassword) {
      return "Re-type password incorrect.";
    }
  
    $MaKH = $this->layMaKhachHang();
    @$addKH = $this->insertKhachHang($MaKH, $TenKH, $DiaChi, $DienThoai, $username, $password, $PhanQuyen);
  
    if ($addKH) {
      return "Success";
    } else {
      return "Don't have an account?";
    }
  }
}
$ql_quanaonam = new ql_quanaonam("localhost","root","","ql_quanaonam");
?>