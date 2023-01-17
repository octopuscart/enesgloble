<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Den</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">	
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    </head>
    <body>
        <header>
            <div class="layout_padding banner_section_start">
                <!-- header inner -->
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo"><a href="#home"><img src="images/logo.png" style="max-width: 100%;"></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"><a href="#home">Home</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li><a href="#products">products</a></li>
                                                <li><a href="#gallery">gallery</a></li>
                                                <li><a href="#contact">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header inner -->		
                <!-- banner start-->
                <div class="layout_padding banner_section">
                    <div class="container">
                        <div id="main_slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row ">
                                        <div class="col-md-6 taital">
                                            <h1 class="taital">Our Vision<strong class="banner_taital">Product With Test & Quality</strong></h1>
                                            <p class="lorem_text">ENES Globle’s healthy, tasty, and differentiated products while being recognized as a sustainable, friendly, and fastest growing FMCG.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-image"><img src="images/banner-image.png" style="max-width: 100%;"></div>
                                        </div>
                                        <div class="banner_bt">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row ">
                                        <div class="col-md-6 taital">
                                            <h1 class="taital">Our Vision<strong class="banner_taital">Product With Test & Quality</strong></h1>
                                            <p class="lorem_text">ENES Globle’s healthy, tasty, and differentiated products while being recognized as a sustainable, friendly, and fastest growing FMCG.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-image"><img src="images/banner-image.png" style="max-width: 100%;"></div>
                                        </div>
                                        <div class="banner_bt">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- banner end-->
        <!-- about start-->
        <div id="about" class="layout_padding about_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div><img src="images/cupcake-img.png" style="max-width: 100%;"></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="about_text"><strong>About <span class="color">Us</span></strong></h1>
                        <p class="about_taital">
                            We plan to leverage our equity in the domestic and international 
                            market to become a food corporation with not just branded products 
                            under our belt but also restaurants, retail chains and wide portfolio 
                            that includes such diverse products as milk- based foods and noodles.
                        </p>
                        <button class="read_more"><a href="#">Read More</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- product start-->
        <div id="products" class="layout_padding product_section ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="product_text"><strong><span class="den">Our </span>Products</strong></h1>
                    </div>
                </div>
                <div class="product_section_2 images">
                    <div class="row">

                        <?php
                        $productarray = [
                            array("title"=>"Moorukulu", "image"=>"1"),
                            array("title"=>"Bhujiya Sev", "image"=>"2"),
                            array("title"=>"Moong Dal", "image"=>"3"),
                            array("title"=>"Tasty Nuts", "image"=>"4"),
                            array("title"=>"Aloo Lachcha", "image"=>"5"),
                            array("title"=>"Ratlami Sev", "image"=>"6"),
                            array("title"=>"Jeera Namkeen Cookies", "image"=>"7"),
                            array("title"=>"Kaju Katali", "image"=>"8"),
                            array("title"=>"Masala Sticks", "image"=>"9"),
                            
                            
                        ];
                        foreach ($productarray as $key => $value) {
                            ?>
                            <div class="col-sm-4">
                                <div class="images"><img src="images/products/<?php echo $value["image"].".jpg"?>" style="max-width: 100%; width: 100%;"></div>
                                <h2 class="den_text croissants"><a href="#"><?php echo $value["title"];?></a></h2>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- product end-->
        <!-- Gallery start-->
        <div id="gallery" class="layout_padding2 gallery_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gallery_main">
                            <h1 class="gallery_taital"><strong><span class="our_text">Our</span> Gallery</strong></h1>
                        </div>
                    </div>
                    <div class="col-sm-12 gallery_maain">
                        <div class="row">
                            <div class="col-sm-3 padding_0">
                                <div class="gallery_blog">
                                    <img class="img-responive" src="images/gallery-img1.png">
                                    <div class="overlay">
                                        <h2>Snacks</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 padding_0">
                                <div class="gallery_blog">
                                    <img class="img-responive" src="images/gallery-img2.png">
                                    <div class="overlay">
                                        <h2>Sweets</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 padding_0">
                                <div class="gallery_blog">
                                    <img class="img-responive" src="images/gallery-img3.png">
                                    <div class="overlay">
                                        <h2>Mathari</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 padding_0">
                                <div class="gallery_blog">
                                    <img class="img-responive" src="images/gallery-img4.png">
                                    <div class="overlay">
                                        <h2>Bhujiya Sev</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Gallery-->
        <!-- Touch start-->
        <div class="layout_padding gallery_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gallery_main">
                            <h1 class="gallery_taital"><strong><span class="our_text">Get in</span>Touch</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="touch_main">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input_main">
                                <div class="container">
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="YOUR NAME" name="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="EMAIL" name="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="PHONE NUMBER" name="Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="massage-bt" placeholder="MASSAGE" rows="5" id="comment" name="text"></textarea>
                                        </div>
                                    </form> 
                                </div> 
                            </div>
                            <div class="send_btn">
                                <button type="button" class="main_bt"><a href="#">SEND</a></button>                  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="images">
                                <img src="images/bread-img.png" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>	
        <div class="map_section">
            <div class="row">
                <div class="col-sm-12">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.093378044647!2d114.16817461420835!3d22.312307985317336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400c0fca5a983%3A0x2d033f26088165ae!2sYen%20Chun%20Mansion%2C%2018-26%20Portland%20St%2C%20Yau%20Ma%20Tei%2C%20Hong%20Kong!5e0!3m2!1sen!2sin!4v1673973018589!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
        <!-- Touch end-->
        <!-- contact start-->
        <div id="contact" class="contact_section">
            <div class="container">	
                <div class="contact-taital">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="contact_text"><strong>Contact Us</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="row">	
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="adderess_text">&nbsp;</h2>
                        <div class="image-icon"><img src="images/map-icon.png"><span class="email_text"><br/><br/>Flat B, 4th Floor,<br/>
                                Yen Chun Mansion,<br/>
                                Block 18-26 Portland Street,<br/>
                                Yau Ma Tei, Kowloon, Hong Kong </span></div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="adderess_text">&nbsp;</h2>
                        <div class="image-icon"><img src="images/phone-icon.png"><span class="email_text"><br/><br/>(+852) 9274 1833<br/>(+852) 9147 1870</span></div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="adderess_text">&nbsp;</h2>
                        <div class="image-icon"><img src="images/email-icon.png"><span class="email_text"><br/><br/>sales@octopuscart.in<br/>
                                sajid@octopuscart.in</span></div>

                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/google-icon.png"></a></li>
                                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="adderess_text">Instagram</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-img"><img src="images/products/1.jpg" style="width: 100%;"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-img"><img src="images/products/2.jpg" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-img"><img src="images/products/3.jpg" style="width: 100%;"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-img"><img src="images/products/4.jpg" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact end-->
        <!-- copyright start-->
        <div class="copyright_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="copyright_taital"><?php echo date("Y");?> All Rights Reserved. <a href="https://octopuscart.in">From The House Of ENES GLOBAL TRADING LIMITED</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- copyright end-->

        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript --> 
        <script src="js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function () {

                    $(this).addClass('transition');
                }, function () {

                    $(this).removeClass('transition');
                });
            });
        </script> 

       




    </body>
</html>