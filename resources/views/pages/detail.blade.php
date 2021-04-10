@extends('layouts.default')
@section('title', 'Detail')

@section('content')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <!-- Single Hero Slide -->
        <div class="breadcumb-area bg-img" style="background-image: url({{ 'frontend/picture/subsidy_kbn/BSI12.jpg' }});">
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<section class="south-contact-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-heading">
                    <h2>Detail</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- thumbnail image -->
<img src ="{{ 'frontend/picture/subsidy_kbn/BSI2.jpg' }}" data-ngsrc ="big_image_1.jpg" data-nanogallery2-lightbox = '{ "viewerToolbar": { "display": false } }'>
<img src="{{ 'frontend/picture/subsidy_kbn/BSI3.jpg' }}" data-ngsrc="big_image_2.jpg" data-nanogallery2-lightbox>
<img src="{{ 'frontend/picture/subsidy_kbn/BSI4.jpg' }}" data-ngsrc="big_image_3.jpg" data-nanogallery2-lightbox>

<section class="col-lg-12">
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="{{ 'frontend/picture/subsidy_kbn/BSI2.jpg' }}" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="{{ 'frontend/picture/subsidy_kbn/BSI3.jpg' }}" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="{{ 'frontend/picture/subsidy_kbn/BSI4.jpg' }}" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</section>
<br><br><br><br><br><br>


            <div class="container">
                <section class="col-lg-12">
                    <!-- Single Slide -->
                
                    <div class="table-responsive table-borderless">
                        <table class="table table-hover">
                            <tbody> 
                                <tr >
                                    <tr>
                                    <td>
                                        <b style="font-size: 32px;"></b>
                                    <br><br>
                                    <a style="font-size: 18px;">Harga&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">Tipe&nbsp;</a>
                                    <br><br>
                                    <a style="font-size: 18px;">LT&nbsp;</a>
                                    <br><br>
                                    <a style="font-size: 18px;">LB&nbsp;</a>
                                    <br><br>
                                    <a style="font-size: 18px;">Lantai&nbsp;</a>
                                    <br><br>
                                    <a style="font-size: 18px;">Kamar&nbsp;</a>
                                    <br><br>

                                    <br><br>
                                    <a style="font-size: 18px;">
                                    Rincian Biaya&nbsp;</a>
                                    <br><br>
                                    <a style="font-size: 18px;">Harga Jual&nbsp;:&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">
                                    Booking fee&nbsp;:</a>
                                    <a style="font-size: 18px;">&nbsp;&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">
                                    Uang Muka&nbsp;:</a>
                                    <a style="font-size: 18px;">&nbsp;:&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">
                                    Flapod KPR&nbsp;:</a>
                                    <a style="font-size: 18px;">&nbsp;:&nbsp;Rp.</a>
                                    <br><br>


                                    <br><br>
                                    <a style="font-size: 18px;">
                                    Estimasi Angsuran KPR BTN&nbsp;</a>
                                    <br><br>
                                    <a style="font-size: 18px;">10 TH&nbsp;:&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">15 TH&nbsp;:&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">20 TH&nbsp;:&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">Suku Bunga&nbsp;:&nbsp;Rp.</a>
                                    <br><br>
                                    <a style="font-size: 18px;">Keterangan&nbsp;:&nbsp;Rp.</a>
                                    <br><br>
                                    <hr style="color: black" width=75% Size="100">
                                    <a><p style="font-size: 14px; color: #947054;">Karinda Bangun Nusa</a></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Embed Google Maps -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1983819970433!2d107.41083371431166!3d-6.368367664068247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69731af4453d21%3A0x91d14073ed4d2849!2sPERUM%20BUMI%20SUKASARI%20INDAH!5e0!3m2!1sid!2sid!4v1596437456357!5m2!1sid!2sid" width="1350" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<!-- Embed Google Maps End -->
</section>
<br><br><br><br><br><br><br>
@endsection

@push('after-script')
    <script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>
@endpush