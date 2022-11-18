<?php
    ob_start();
    session_start();
    include_once('function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    
    <!--header area start-->
    <header class="header_area header_three">
        <!--header top start-->
        <div class="header_top">
            <div class="container-fluid">   
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu"> 
                                <nav>  
                                    <ul>
                                        <li class="active"><a href="index_web.php">Home</a></li>
                                        <li><a href="shop_category.php">Shop</a></li>
                                    </ul>   
                                </nav> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->
 
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index_web.php">home</a></li>
                            <li>/</li>
                            <li>sign</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form action="login.php" method="POST">
                            <p>   
                                <label>Username<span>*</span></label>
                                <input name="Username" type="text">
                             </p>
                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input name="Password" type="password">
                             </p>   
                            <div class="login_submit">
                                <button name="Login" type="submit">login</button>
                            </div>

                        </form>
                     </div>    
                </div>
                <!--login area start-->

                <?php
                    if(isset($_POST['Login'])){
                        $username = ($_POST['Username']);
                        $password = ($_POST['Password']);

                        if(!$username || !$password){
                            echo '<script type = "text/javascript">';
                            echo 'alert("Invalid Username or Password");';
                            echo 'window.location.href = "login.php"';
                            echo '</script>';
                        }
                        else{
                        $result = $ql_quanaonam->searchDB("*","nhanvien","username","$username");
                        $row = mysqli_fetch_array($result);
                        $result1 = $ql_quanaonam->searchDB("*","khachhang","username","$username");
                        $row1 = mysqli_fetch_array($result1);
                        if(is_array($row)){
                            if($password == $row['password']){
                                $_SESSION["Username"] = $row['username'];
                                $_SESSION["PhanQuyen"] = $row['PhanQuyen'];
                                header("Location:index_web.php");
                            }
                            else{
                                echo '<script type = "text/javascript">';
                                echo 'alert("Invalid Password");';
                                echo 'window.location.href = "login.php"';
                                echo '</script>';
                            }
                        }
                        elseif(is_array($row1)){
                            if($password == $row1['password']){
                                $_SESSION["Username"] = $row1['username'];
                                $_SESSION["PhanQuyen"] = $row1['PhanQuyen'];
                                header("Location:index_web.php");
                            }
                            else{
                                echo '<script type = "text/javascript">';
                                echo 'alert("Invalid Password");';
                                echo 'window.location.href = "login.php"';
                                echo '</script>';
                            }
                        }
                        else{
                            echo '<script type = "text/javascript">';
                            echo 'alert("Invalid Username or Password");';
                            echo 'window.location.href = "login.php"';
                            echo '</script>';
                        }
                        }
                    }
                ?>

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="login.php" method="POST">
                            <p>   
                                <label>Username<span>*</span></label>
                                <input name="Username" type="text">
                            </p>
                            <p>   
                                <label>Passwords <span>*</span></label>
                                <input name="Password" type="password">
                            </p>
                            <p>   
                                <label>Confirm Passwords <span>*</span></label>
                                <input name="xacnhanpassword" type="password">
                            </p>
                            <p>   
                                <label>Name<span>*</span></label>
                                <input name="Name" type="text">
                            </p>
                            <p>   
                                <label>Address<span>*</span></label>
                                <input name="Address" type="text">
                            </p>
                            <p>   
                                <label>Phone<span>*</span></label>
                                <input name="Phone" type="text">
                            </p>
                            <div class="login_submit">
                                <button name="register" type="submit">Register</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->

                <?php
                    if (isset($_POST['register'])) {
                        if (!isset($_POST['Name'])) {
                          die('');
                        }
                      
                        $username = ($_POST['Username']);
                        $password = ($_POST['Password']);
                        $xacnhanpassword = ($_POST['xacnhanpassword']);
                        $name = ($_POST['Name']);
                        $diaChi = ($_POST['Address']);
                        $Phone = ($_POST['Phone']);
                        $phanquyen = 0;
                      
                        $result = $ql_quanaonam->dangkyKhachHang($name, $diaChi, $Phone, $username, $password, $xacnhanpassword, $phanquyen);
                        if ($result == "Success") {
                          $_SESSION['Username'] = $username;
                          $_SESSION['PhanQuyen'] = $phanquyen;
                          header("Location:index_web.php");
                        } else {
                            echo '<script type = "text/javascript">';
                            echo 'alert("'.$result.'");';
                            echo 'window.location.href = "login.php"';
                            echo '</script>';
                        }
                      }
                ?>

            </div>
        </div>    
    </div>
    <!-- customer login end -->
    
    <!--footer area start-->
    <footer class="footer_widgets other_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="footer_top_inner">   
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container">
                                <h3>Extras</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="contact.html">Site Map</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container contact_us">
                                <h3>Contact Us</h3>
                                <div class="footer_contact">
                                    <p>Address: 6688 Princess Road, London, Greater London BAS 23JK, UK</p>
                                    <p>Phone: <a href="tel:+(+012)800456789-987">(+012) 800 456 789 - 987</a> </p>
                                    <p>Email: demo@example.com</p>
                                    <ul>
                                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p> &copy; 2022 <strong> </strong> Designed by <strong>VO GIA HUY</strong> & <strong>HOANG QUOC NAM</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

<!-- JS
============================================ -->


<!--map js code here-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script  src="https://www.google.com/jsapi"></script>
<script src="assets/js/map.js"></script>


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

</html>