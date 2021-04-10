<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>PT Karinda Bangun Nusa | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="../img/core-img/logo_favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <p></p>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <p></p>
                       <i class="fa fa-phone fa-lg" style="color: #947054"></i>
                    </div>
                    <div class="number">
                        <a href="tel:+6287878677472">+6287878677472</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="../index.php"><img src="../img/core-img/logo_kbn.png" alt=""></a>

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
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="#">Gallery Property</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Subsidy</a>
                                            <ul class="dropdown">
                                                <li><a href="../gallery_subsidy_kbn.php">KBN</a></li>
                                                <li><a href="../gallery_subsidy_adimix.php">SMP</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Commercial</a>
                                            <ul class="dropdown">
                                                <li><a href="#">KBN</a></li>
                                                <li><a href="#">SMP</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="../blog.php">Blog</a></li>
                                <li><a href="../about-us.php">About Us</a></li>
                                </li>
                                <li><a href="../contact.php">Contact</a></li>
                            </ul>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
           <!-- Single Hero Slide -->
            <div class="breadcumb-area bg-img" style="background-image: url(../picture/subsidy_adimix/Adimix3.jpg);">
                <div class="container h-100">
                    <div class="row h-100   align-items-center">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

<section class="south-contact-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Gallery Property</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ##### Featured Properties Area Start ##### -->
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error()); 
mysql_select_db("kbn_db"); 
$tampil="SELECT * FROM produk where id_produk = 'PR002'"; 
$query=mysql_query($tampil) or die ("gagal".mysql_error());
?>
<?php
while ($row=mysql_fetch_array($query))
 {
   $a=$row['id_produk'];
   $b=$row['nama_produk'];
   $c=$row['harga'];
   $d=$row['gambar'];
?>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error()); 
mysql_select_db("kbn_db"); 
$tampil="SELECT * FROM deskripsi where id_kategori"; 
$query=mysql_query($tampil) or die ("gagal".mysql_error());
?>
<?php
while ($row=mysql_fetch_array($query))
 {
   $aa=$row['id'];
   $bb=$row['Type'];
   $cc=$row['LT'];
   $dd=$row['LB'];
   $ee=$row['Lantai'];
   $ff=$row['Kamar'];
   $gg=$row['id_kategori'];
?>
    
                    <section class="col-lg-12 justify-content-center">
                    <div class="col-lg-12">
<div class="product-slider">
  <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">
      <div class="item active"> <img src="picture/subsidy_adimix/Adimix1.jpg"> </div>
      <div class="item"> <img src="picture/subsidy_adimix/Adimix2.jpg"> </div>
      <div class="item"> <img src="picture/subsidy_adimix/Adimix3.jpg"> </div>
      <div class="item"> <img src="picture/subsidy_adimix/Adimix4.jpg"> </div>
      <div class="item"> <img src="picture/subsidy_adimix/Adimix5.jpg"> </div>
      <div class="item"> <img src="picture/subsidy_adimix/Adimix6.jpg"> </div>
    </div>
  </div>
  <div class="clearfix">
    <div id="thumbcarousel" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        <div class="item active">
          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="picture/subsidy_adimix/Adimix1.jpg"></div>
          <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="picture/subsidy_adimix/Adimix2.jpg"></div>
          <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="picture/subsidy_adimix/Adimix3.jpg"></div>
          <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="picture/subsidy_adimix/Adimix4.jpg"></div>
        </div>
        <div class="item">
          <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="picture/subsidy_adimix/Adimix5.jpg"></div>
          <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="picture/subsidy_adimix/Adimix6.jpg"></div>
        </div>
      </div>
      <!-- /carousel-inner --> 
      <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a> </div>
    <!-- /thumbcarousel --> 
    
  </div>
</div>
<br><br><br><br><br><br>

                        <div class="col-lg-12">
                        <!-- Single Slide -->
                        <div class="table-responsive table-borderless">
                            <table class="table table-hover">
                                <tbody style="cursor: pointer;"> 
                                    <tr >
                                        <tr>
                                        <td>
                                            <b style="font-size: 32px;"><?php echo $b;?></b>
                                        <br><br>
                                        <a style="font-size: 18px;">Harga&nbsp;Rp. <?php echo $c;?></a>
                                        <br><br>
                                        <a style="font-size: 18px;">Tipe&nbsp;<?php echo $bb;?></a>
                                        <br><br>
                                        <a style="font-size: 18px;">LT&nbsp;<?php echo $cc;?></a>
                                        <br><br>
                                        <a style="font-size: 18px;">LB&nbsp;<?php echo $dd;?></a>
                                        <br><br>
                                        <a style="font-size: 18px;">Lantai&nbsp;<?php echo $ee;?></a>
                                        <br><br>
                                        <a style="font-size: 18px;">Kamar&nbsp;<?php echo $ff;?></a>
                                        <br><br>

                                        <br><br>
                                        <a style="font-size: 18px;">
                                        Rincian Biaya&nbsp;:</a>
                                        <br><br>
                                        <a style="font-size: 18px;">Harga Jual&nbsp;:&nbsp;Rp.150.000.000</a>
                                        <br><br>
                                        <a style="font-size: 18px;">
                                        Booking fee&nbsp;:</a>
                                        <a style="font-size: 18px;">Harga Jual&nbsp;:&nbsp;Rp.1.000.000</a>
                                        <br><br>
                                        <a style="font-size: 18px;">
                                        Uang Muka&nbsp;:</a>
                                        <a style="font-size: 18px;">Harga Jual&nbsp;:&nbsp;Rp.0</a>
                                        <br><br>
                                        <a style="font-size: 18px;">
                                        Flapod KPR&nbsp;:</a>
                                        <a style="font-size: 18px;">Harga Jual&nbsp;:&nbsp;Rp 142.500.000</a>
                                        <br><br>


                                        <br><br>
                                        <a style="font-size: 18px;">
                                        Estimasi Angsuran KPR BTN&nbsp;:</a>
                                        <br><br>
                                        <a style="font-size: 18px;">10 TH&nbsp;:&nbsp;Rp.1.551.400</a>
                                        <br><br>
                                        <a style="font-size: 18px;">15 TH&nbsp;:&nbsp;Rp.1.126.880</a>
                                        <br><br>
                                        <a style="font-size: 18px;">20 TH&nbsp;:&nbsp;Rp.940.500</a>
                                        <br><br>
                                        <a style="font-size: 18px;">Suku Bunga&nbsp;:&nbsp;5%</a>
                                        <br><br>
                                        <a style="font-size: 18px;">Keterangan&nbsp;:&nbsp;Flat</a>
                                        <br><br>
                                        <hr style="color: black" width=75% Size="100">
                                        <a><p style="font-size: 14px; color: #947054;">Sukses Mandiri Permana</a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php } ?>
<br><br><br><br><br><br><br>
    <!-- ##### Featured Properties Area End ##### -->
    <!-- ##### Editor Area End ##### -->
    
<script type="text/javascript">function add_chatinline(){var hccid=15514799;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>

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

<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(../img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
            <div class="row justify-content-between">

                    
                    <!-- Single Footer Widget -->
                   <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="footer-widget-area mb-80">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <div class="footer-logo my-4">
                                <img src="../img/core-img/logo_kbn.png" alt="">
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
                                <h6><img src="../img/icons/phone-call.png" alt=""> +6287878677472</h6>
                                <h6><img src="../img/icons/envelope.png" alt=""> karindabngunnusa0@gmail.com</h6>
                                <h6><img src="../img/icons/location.png" alt=""> Jl. Syech Quro, Perkantoran Johar Indah Ruko No. A10, Karawang Timur, 41314</h6>
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
                            <a href="https://www.facebook.com/PT-Karinda-Bangun-Nusa-101624098266742" target="_blank" rel="nofollow"><img src="../images/fb.png" width="25" height="25"></i>
                            <i style="color: #7d7d7d; font-size: 13.5px;">&emsp;Facebook</i></a><br><br>
                            <a href="https://youtu.be/UFSnA6nYrXs" target="_blank" rel="nofollow"><img src="../images/yt.png" width="25" height="25"></i>
                            <i style="color: #7d7d7d; font-size: 13.5px;">&emsp;Youtube</i></a><br><br>
                            <a href="#" target="_blank" rel="nofollow"><img src="../images/ig.png" width="25" height="25"></i>
                            <i style="color: #7d7d7d; font-size: 13.5px;">&emsp;Instagram</i></a><br><br>
                            <a href="https://api.whatsapp.com/send?phone=6287878677472" target="_blank" rel="nofollow"><img src="../images/wa.png" width="25" height="25"></i>
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
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../js/plugins.js"></script>
    <script src="../js/classy-nav.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
    <!-- Google Maps -->
    <
    <script src="../js/map-active.js"></script>

</body>

</html>
