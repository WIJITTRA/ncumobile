<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:23
 */
class Page {

    function showHead($titleText){
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>'.$titleText.'</title>
            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- Vante5 Custom Style -->
            <link href="css/fantomstyle.css" rel="stylesheet">
            <!-- Animation Style -->
            <link href="css/animate.css" rel="stylesheet">
            <!-- Layer Slider -->
            <link rel=\'stylesheet\' id=\'camera-css\'  href=\'css/camera.css\' type=\'text/css\' media=\'all\'>
            <!-- Font -->
            <link href="iconz/styles.css" rel="stylesheet">
            <link href=\'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Fjalla+One\' rel=\'stylesheet\' type=\'text/css\'>
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
            <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
            </head>
            <body>
            <header class="fantom-header" role="navigation" id="header">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-hover="dropdown" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar primary-color"></span> <span class="icon-bar primary-color"></span> <span class="icon-bar primary-color"></span> </button>
                  <a class="navbar-brand fantom-logo" href="index.html"><img src="images/ncum2015_logo.png" /></a> </div>
                <nav class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">หน้าแรก</a></li>
                    <li><a href="about.php">เกี่ยวกับการแข่งขัน</a></li>
                    <li><a href="schedule.php">กำหนดการ</a></li>
                    <li><a href="register.php">การลงทะเบียน</a></li>
                    <li><a href="venue.php">สถานที่</a></li>
                  </ul>
                </nav>
                <!--/.nav-collapse -->
              </div>
            </header>
            <section class="fantom-body">
        ';
    }

    function showFoot1() {
        echo '
            <div class="fantom-purchase-bottom primary-color">
                <div class="container">

                </div>
            </div>
            </section>
            <footer>
              <div class="fantom-footer">
                <div class="container">
                    <div class="fantom-footerlogo col-md-4">
                        <div class="col-md-12">
                            <a href="#"><img src="images/logoncu_2011.png" alt="NCU Mobile 2015" /></a>
                        </div>
                        <div class="col-md-12" align="right">
                            <div class="col-md-6">
                                <h4 class="fantom-bottom-heading">Follow us</h4>
                            </div>
                            <div class="col-md-6">
                              <ul class="fantom-icon hi-icon-wrap">
                                <li class="fantom-hex-small">
                                  <a href="https://www.facebook.com/science.ncu/" target="_blank"><div class="fantom-hexicon icon-facebook"> </div></a>
                                </li>
                                <li class="fantom-hex-small">
                                  <div class="fantom-hexicon icon-twitter"></div>
                                </li>
                              </ul>
                            </div>
                        </div>
                    </div>
                  <div class="fantom-copyright col-md-8">
                    <p>ดำเนินงานโดย คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยนอร์ท-เชียงใหม่</p>
                    <p>โทร. 053-819849 โทรสาร. 053-819849, email: ncumobile2015@gmail.com</p>
                  </div>
                </div>
              </div>
            </footer>
        ';
    }
    function SliderShow(){
      echo '
      <script src="js/jquery-1.11.0.min.js"></script>
      <script src="js/jquery.nivo.slider.js"></script>
      <link rel="stylesheet" href="../css/default.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="../css/light.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="../css/dark.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
       ';
    }
    function showScripts() {
        echo '
            <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
            <script src="js/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <!--Jquery UI-->
            <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/themefantom_jscustom.js"></script>
            <script src="js/jquery.appear.js"></script>
            <script src="js/jquery.countTo.js"></script>
            <script src="js/jquery.easing.1.3.js"></script>
            <script src="js/jquery.shuffle.js"></script>
            <script src="js/sortable.js"></script>
            <script src="js/jquery.parallax-1.1.3.js"></script>
            <script src="js/modernizr.custom.js"></script>
            <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
            <!-- Camera Slider - Layer Slider -->
            <script src=\'js/jquery.mb.browser.min.js\'></script>
            <script src=\'js/camera.js\'></script>
            <!-- Carousel Plugin -->
            <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
            <!-- Optionally include helper plugins -->
            <script src="js/helper-plugins/jquery.mousewheel.min.js"></script>
            <script src="js/helper-plugins/jquery.touchSwipe.min.js"></script>
            <script src="js/helper-plugins/jquery.transit.min.js"></script>
            <script src="js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
        ';
    }

    function showFoot2() {
        echo '
            </body>
            </html>
        ';
    }

    function showNews() {
        echo '
            <h4>News</h4>
                <ul class="fantom-nav-2">
                    <li><a href="register.php">เปิดให้ส่งใบสมัคร</a></li>
                    <li><a>จัดทำเว็บไซต์</a></li>
                </ul>
        ';
    }

    function showStaff() {
        echo '
            <h4>ดำเนินงานโดย</h4>
            <div align="center">
                <img src="images/logo_sciencetech_ncu.jpg">
                <img src="images/logoncu_2011.png">
            </div>
        ';
    }

    function showAdminMenu() {
        echo '
            <h4>Admin</h4>
                <ul class="fantom-nav-2">
                    <li><a href="admin_index.php">main</a></li>
                    <li><a href="accept_abs.php">Accepted Abstract</a></li>
                    <li><a href="submit_dfp.php">Submited DFP.</a></li>
                    <li><a href="fff.php">Final Full Papers</a></li>
                    <li><a href="bestpapers.php">Best Papers</a></li>
                    <li><a href="reviewer_list.php">Reviewer</a></li>
                    <li><a href="report.php">Report</a></li>
                    <li><a href="mail_author.php">Mail to author</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
        ';
    }
}
