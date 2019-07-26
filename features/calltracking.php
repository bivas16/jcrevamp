<?php 
 
 $headline = 'Call Tracking';
 $breadcrumb = array(array("name"=>"Home","link"=>"/justcall/index.php"),array("name"=>"Features","link"=>"/justcall/features.php"),array("name"=>$headline, "link"=>""));
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://justcall.io/favicon.png" type="image/x-icon">
    <title>Saasland</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--icon font css-->
    <link rel="stylesheet" href="vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style type="text/css">
        
        /*.breadcrumb_area{
            padding: 67px 0px 16px !important;
        }*/
        .header_area{
            background: white;
         }

    </style>
</head>

<body>
    
    <header class="header_area">
        <?php include '../navigation_bar.php'?>
    </header>

    <!-- <section class="breadcrumb_area">
        <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Call Tracking</h1>
                <p class="f_300 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
            </div>
        </div>
    </section> -->
    
    <section class="process_area bg_color sec_pad">
        <div class="container">
            <div class="features_info">
                
                <div class="row agency_featured_item flex-row-reverse" style="margin-top: 50px;">
                    <div class="col-md-6">
                     <div class="agency_featured_img text-right">
                <img src="https://justcall.io/ckassets/images/forward-and-routing.png" style="width: 100%" alt="">
                        </div>
                     </div>
                    <div class="col-md-6">
                        <div class="agency_featured_content pr_70 pl_70">
                            
                            <h3>Call Forwarding and Distribution</h3>
                            <p>Each team member can choose to have calls forwarded to one or more phones, to remain available even when traveling.</p>
                            <p>Distribute calls across a team, in a sequence or all at the same time. And, update your call distribution rules in one click.</p>
                            <a href="https://justcall.io/signup.php" class="btn_hover agency_banner_btn mt_30">Try Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer_area footer_area_four f_bg">
        <?php include '..\footer.php' ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/propper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>