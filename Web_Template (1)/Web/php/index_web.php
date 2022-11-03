<?php
    include_once('function.php');
    $ql_quanaonam->connectDB();
    $ql_quanaonam->getConnect()->select_db("ql_quanaonam");
?>

<head>
    <title>Fashion eCommerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

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
                                        <li class="active"><a href="index_web.php">Home</a></li>
                                        <li><a href="shop_category.php">Shop</a></li>
                                        <li><a href="about.php">About Us</a></li>
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

    <!--slider area start-->
    <div class="slider_area slider_style home_three_slider owl-carousel">
        <div class="single_slider" data-bgimg="assets/img/slider/slider4.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_one">
                            <img src="assets/img/slider/content3.png" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="shop.php">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>    
        </div>
        <div class="single_slider" data-bgimg="assets/img/slider/slider5.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_two">
                            <img src="assets/img/slider/content4.png" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="shop.php">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider" data-bgimg="assets/img/slider/slider6.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_three">
                            <img src="assets/img/slider/content5.png" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="shop.php">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider area end-->

    <!--banner area start-->
    <div class="banner_section banner_section_three">
        <div class="container-fluid">
            <div class="row ">
               <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.php"><img src="assets/img/bg/banner8.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.php"><img src="assets/img/bg/banner9.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area bottom">
                        <div class="banner_thumb">
                            <a href="shop.php"><img src="assets/img/bg/banner10.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section womens_product">
        <div class="container">
            <div class="row">   
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm của chúng tôi</h2>
                       <p>Các sản phẩm thiết kế hiện đại,mới nhất</p>
                   </div>
                </div> 
            </div>    
            <div class="product_container">
                <div class='row product_column4'>
                             <?php
                                    $str_card_sp = "";
                                    $result = $ql_quanaonam->searchDB("*", "mathang", "", "");
                                    $countRows = mysqli_num_rows($result);
                                    $numCardsInRow = 5;
                                    $numRows = floor($countRows / $numCardsInRow) + 1;

                                    for ($i = 0; $i < $numRows; $i++) {
                                    $j = 1;
                                    $str_card_sp .= "<div class='col-lg-3'>";
                                    while (true) {
                                        if ($rows = mysqli_fetch_array($result)) {
                                        $str_card_sp .= "
                                            
                                                <div class='single_product'>
                                                    <div class='product_thumb'>
                                                        <a class = 'primary_image' href='product_detail.php'><img src='$rows[5]' alt=''></a>
                                                    <div class='quick_button'>
                                                        <a href='#' title='quick_view'>Xem sản phẩm</a>
                                                    </div>
                                                    <div class='product_sale'>
                                                        <span>-7%</span>
                                                    </div>
                                                </div>
                                                <div class='product_content' >
                                                    <p><a href='product-details.php'>  $rows[1]  </a></p>
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
                                    <div style="position: absol;"></div>
                </div>
            </div>
        </div> 
    </section>
    <!--product section area end-->
    
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
<script src="../assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>



</body>
