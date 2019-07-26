<?php 
 
 $headline = 'Appointment Scheduler';
 $breadcrumb = array(array("name"=>"Home","link"=>"/justcall/index.php"),array("name"=>"Features","link"=>"/justcall/features.php"),array("name"=>$headline, "link"=>""));
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://justcall.io/favicon.png" type="image/x-icon">
    <title><?php echo $headline ?></title>
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

  <!--   <section class="breadcrumb_area">
        <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Appointment Scheduler</h1>
                <p class="f_300 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
            </div>
        </div>
    </section> -->
    
    <section class="process_area bg_color sec_pad">
        <div class="container">
            <div class="features_info">
               
                <div class="row agency_featured_item flex-row-reverse">
                    <div class="col-md-6">
                        <div class="agency_featured_img text-right">
                          <img src="https://justcall.io/ckassets/images/appointment-calendar.png" style="width:100%" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="agency_featured_content pr_70 pl_70">
                            
                            <h3>Appointment Scheduler</h3>
                            <p>Never ask "what time works for you?" again. Get a beautiful appointment scheduler and share it with your prospects or website visitors to schedule a call or appointment with you. And, every team member gets own appointment scheduler for no extra fees.</p>
                            <p>Set your availability rules by selecting days, time range and appointment slot size. Save & you are ready with a beautiful and easy to use appointment scheduler.</p>
                            <a href="https://justcall.io/calendar/techsupport" class="btn_hover agency_banner_btn mt_30">See Demo</a>
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