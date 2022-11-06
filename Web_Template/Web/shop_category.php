<?php
    include_once('function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");

?>
<form action="" method="POST">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop category</title>
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
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>
                               <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="password.php">Change Password</a></li>  
                                        <li><a href="register.php">Register</a></li>
                                        <li><a href="view_users.php">Users</a></li>
                                        <li><a href="login.php">Sign in</a></li> 
                                    </ul>
                                </li> 
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
                                        <li class="active"><a href="index_web.php">Home </a></li>
                                        <li><a href="shop_category.php">shop </a></li>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
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
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index_web.php">home</a></li>
                            <li>/</li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="shop_inner_area">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <!--sidebar widget start-->
                        <div class="sidebar_widget">
                            <div class="widget_list widget_categories">
                                <h2>Product categories</h2>
                                <ul>
                                    <?php
                                $str_categories = "";
                                $result = $ql_quanaonam->searchDB("*", "loaihang", "", "");
                                $countRows = mysqli_num_rows($result);
                                for ($i = 0; $i < $countRows; $i++) {
                                    $j = 1;
                                    
                                    while (true) {
                                        if ($rows = mysqli_fetch_array($result)) {
                                        $str_categories .= "<li><a name='lh_sp' href='#'>$rows[1]</a> </li>";
                                        }
                                        if ($j == 1)
                                        break;
                                        $j++;
                                    }
                                    
                                }
                                echo $str_categories;
                                ?>
                                </ul>
                            </div>

                            

                        </div>
                        <!--sidebar widget end-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <!--shop wrapper start-->
                        <!--shop toolbar start-->
                        <div class="shop_title">
                            <h1>shop</h1>
                        </div>
                         <!--shop toolbar end-->
                        
                         
                            <?php
                                $str_card_sp = "";
                                $result = $ql_quanaonam->searchDB("*", "mathang", "MaLH", "LH001");
                                $countRows = mysqli_num_rows($result);

                                for ($i = 0; $i < $countRows; $i++) {
                                    $j = 1;
                                    $str_card_sp .= "<div class='row shop_wrapper'>";
                                    while (true) {
                                        if ($rows = mysqli_fetch_array($result)) {
                                            $str_card_sp .= "
                                            <div class='col-lg-4 col-md-4 col-12'>
                                            <div class='single_product'>
                                                <div class='product_thumb'>
                                                    <a class='primary_img' href='product-details.php'><img src='$rows[5]' alt=''></a>
                                                    <div class='quick_button'>
                                                        <a href='product-details.php'title='quick_view'>Xem sản phẩm</a>
                                                    </div>
                                                    <div class='double_base'>
                                                        <div class='product_sale'>
                                                            <span>-7%</span>
                                                        </div>
                                                        <div class='label_product'>
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='product_content grid_content'>
                                                    <h3><a href='product-details.php'>$rows[1]</a></h3>
                                                    <span class='current_price'>$rows[4]đ</span>
                                                </div>
                                                
                                                
                                                <div class='product_content list_content'>
                                                    <h3><a href='product-details.php'>Marshall Portable  Bluetooth</a></h3>
                                                    
                                                    <div class='product_price'>
                                                        <span class='current_price'>£60.00</span>
                                                        <span class='old_price'>£86.00</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                            ";
                                        }
                                        if ($j == 3)
                                        break;
                                        $j++;

                                    }
                                    $str_card_sp .= "</div>";
                                }
                                echo $str_card_sp;
                            ?>
                            
                        <!--shop toolbar end-->
                        <!--shop wrapper end-->
                    </div>
                </div>
            </div>   
                
        </div>
    </div>
    <!--shop  area end-->
    
    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
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
                                    <li><a href="contact.php">Site Map</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
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
        <div class="footer_bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p> &copy; 2021 <strong> </strong> Mede with ❤️ by <a href="https://hasthemes.com/" target="_blank"><strong>HasThemes</strong></a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_custom_links">
                            <ul>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.php">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->
    

<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>
</form>