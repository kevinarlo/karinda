<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>PT Karinda Bangun Nusa | Blog</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/logo_favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo_kbn.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="gallery_subsidy_kbn.php">Subsidy</a></li>
                                <li><a href="landingbsi.php">Bumi Sukasari Indah</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(picture/subsidy_kbn/BSI12.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="south-blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-heading">
                        <h6>Blog</h6>
                    </div>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error()); 
mysql_select_db("kbn_db"); 
$tampil="SELECT * FROM blogger where id"; 
$query=mysql_query($tampil) or die ("gagal".mysql_error());
?>
<?php
while ($row=mysql_fetch_array($query))
 {
   $a=$row['id'];
   $b=$row['namaf'];
   $c=$row['judul'];
   $d=$row['tanggal'];
   $e=$row['isi'];
?>
                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-50">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <div class="table-responsive">
                                <table height="200px" border-less>
                                    <tr>
                                     <td><img src="img/blog-img/<?php echo $b;?>" alt=""></td>
                                 </tr>
                                 <tr>
                                     <td height="50" style="font-size: 14px; color: #947054;"><b><?php echo $d;?></b></td>
                                 </tr>
                                 <tr>
                                     <td height="50" style="font-size: 30px;"><?php echo $c;?></td>
                                 </tr>

                                 <tr>
                                     <td height="50" width="10" style="font-size: 14px; color: #7d7d7d; width: 40%;"><?php echo $e;?></td>
                                 </tr>
                             </table>
                             <br>
                             <br>
                             <br>
                             <br>
                         </div>
                        </div>
                    </div>
                </div>

<?php } ?>

                            <!-- Single Slide -->
                            <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- ##### Blog Area End ##### -->


<script type="text/javascript">function add_chatinline(){var hccid=15514799;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>

<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
            <div class="row justify-content-between">

<script type="text/javascript">
        wpac_init = window.wpac_init || [];
        wpac_init.push({widget: 'GoogleReview', id: 20049, place_id: 'ChIJJXjmuMqOaS4R5WC4jOuHJOs', view_mode: 'badge'});
        (function() {
        if ('WIDGETPACK_LOADED' in window) return;
        WIDGETPACK_LOADED = true;
            var mc = document.createElement('script');
                mc.type = 'text/javascript';
                mc.async = true;
                mc.src = '../embed.widgetpack.com/widget.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script><!-- /WhatsHelp.io widget --><script>
            (function () {
            var options = {
            whatsapp: "+6287878677472", // WhatsApp number
            call_to_action: "", // Call to action
            position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script><script src="../cdn.lightwidget.com/widgets/lightwidget.js"></script>

                    <!-- Single Footer Widget -->
                   <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="footer-widget-area mb-80">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo_kbn.png" alt="">
                            </div>
                            <p>PT. Karinda Bangun Nusa berdiri pada tahun 2008 yang bergerak di bidang property.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="footer-widget-area mb-80">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>More Info</h6>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +6287878677472</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> karindabngunnusa0@gmail.com</h6>
                                <h6><img src="img/icons/location.png" alt=""> Jl. Syech Quro, Perkantoran Johar Indah Ruko No. A10, Karawang Timur, 41314</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="footer-widget-area mb-80">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6></h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="widget-title">
                            <a href="https://www.facebook.com/PT-Karinda-Bangun-Nusa-101624098266742" target="_blank" rel="nofollow"><img src="images/fb.png" width="25" height="25"></i>
                            <i style="color: #7d7d7d; font-size: 13.5px;">&emsp;Facebook</i></a><br><br>
                            <a href="#" target="_blank" rel="nofollow"><img src="images/ig.png" width="25" height="25"></i>
                            <i style="color: #7d7d7d; font-size: 13.5px;">&emsp;Instagram</i></a><br><br>
                            <a href="https://api.whatsapp.com/send?phone=6287878677472" target="_blank" rel="nofollow"><img src="images/wa.png" width="25" height="25"></i>
                            <i style="color: #7d7d7d; font-size: 13.5px;">&emsp;Whatsapp</i></a><br><br>
                        </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. Karinda Bangun Nusa
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>