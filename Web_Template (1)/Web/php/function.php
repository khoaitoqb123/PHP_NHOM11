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
    public function searchDB($fields='*', $table='', $fieldSearch='', $search_value='')
    {
        $str = "SELECT $fields FROM $table";
        if($search_value == "")
        return $this->queryDB($str);
        return $this->queryDB("$str WHERE $fieldSearch LIKE '%$search_value%'");
    }
    public function insertMatHang($MaMH="",$TenMH="",$MaLH="",$SoLuong="",$GiaBan="",$Anh=""){
        $str_query = "INSERT INTO `mathang`(`MaMH`,`TenMH`,`MaLH`,`SoLuong`,`GiaBan`,`Anh`) VALUES ('$MaMH','$TenMH','$MaLH','$SoLuong','$GiaBan','$Anh')";
        return $this->queryDB($str_query);
    }
    public function insertLoaiHang($MaLH="",$TenLH=""){
        $str_query = "INSERT INTO `loaithang`(`MaLH`,`TenLH`) VALUES ('$MaLH','$TenLH')";
        return $this->queryDB($str_query);
    }
    public function insertNhanVien($MaNV="",$TenNV="",$Gioitinh="",$Diachi="",$Dienthoai="",$username="",$password=""){
        $str_query = "INSERT INTO `nhanvien`(`MaNV`,`TenNV`,`Gioitinh`,`Diachi`,`Dienthoai`,`username`,`password`) VALUES ('$MaNV','$TenNV','$Gioitinh','$Diachi','$Dienthoai','$username','$password')";
        return $this->queryDB($str_query);
    }
    public function insertKhachHang($MaKH="",$TenKH="",$Diachi="",$Dienthoai="",$username="",$password=""){
        $str_query = "INSERT INTO `khachhang`(`MaKH`,`TenKH`,`Diachi`,`Dienthoai`,`username`,`password`) VALUES ('$MaKH','$TenKH','$Diachi','$Dienthoai','$username','$password')";
        return $this->queryDB($str_query);
    }
    public function insertHoaDon($MaHD="",$MaNV="",$NgayBan="",$MaKH="",$TongTien=""){
        $str_query = "INSERT INTO `hdban`(`MaHD`,`MaNV`,`NgayBan`,`MaKH`,`TongTien`) VALUES ('$MaHD','$MaNV','$NgayBan','$$MaKH','$TongTien')";
        return $this->queryDB($str_query);
    }
    public function insertCTHoaDon($MaHD="",$MaMH="",$SoLuong="",$DonGia="",$ThanhTien=""){
        $str_query = "INSERT INTO `chitiethd`(`MaHD`,`MaMH`,`SoLuong`,`DonGia`,`ThanhTien`) VALUES ('$MaHD','$MaMH','$SoLuong','$$DonGia','$ThanhTien')";
        return $this->queryDB($str_query);
    }
    public function layMaNhanVien()
    {
        $lastRow = $this->queryDB("SELECT MaNV FROM nhanvien ORDER BY MaNV DESC LIMIT 1");
        $last =  implode(mysqli_fetch_array($lastRow));
        $maMax = substr($last, 2, 3);
        $maUS = (int)$maMax + 1;
        return "Usser0" . $maUS;
    }
    public function layMaKhachHang()
    {
        $lastRow = $this->queryDB("SELECT MaKH FROM khachhang ORDER BY MaKH DESC LIMIT 1");
        $last =  implode(mysqli_fetch_array($lastRow));
        $maMax = substr($last, 2, 3);
        $maUS = (int)$maMax + 1;
        return "Usser0" . $maUS;
    }
    public function dangNhapNhanVien($username, $password)
    {
        if (!$username || !$password) {
        return "Please enter full sign in name and password.";
        }
    
        $query = $this->queryDB("SELECT username, password FROM nhanvien WHERE username='$username'");
        if (mysqli_num_rows($query) == 0) {
        return "Sign in name not exist. Please check again.";
        }
    
        $row = mysqli_fetch_array($query);
        if ($password != $row['MAT_KHAU']) {
        return "Password incorrect. Please re-enter.";
        }

        return $row;
    }
    public function dangNhapKhachHang($username, $password)
    {
        if (!$username || !$password) {
        return "Please enter full sign in name and password.";
        }
    
        $query = $this->queryDB("SELECT username, password FROM khachhang WHERE username='$username'");
        if (mysqli_num_rows($query) == 0) {
        return "Sign in name not exist. Please check again.";
        }
    
        $row = mysqli_fetch_array($query);
        if ($password != $row['password']) {
        return "Password incorrect. Please re-enter.";
        }

        return $row;
    }
}

$ql_quanaonam = new ql_quanaonam("localhost","root","","ql_quanaonam");
?>