@extends('layouts.default')
@section('title', 'Komersil')

@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
        <!-- Single Hero Slide -->
        <div class="breadcumb-area bg-img" style="background-image: url({{ 'frontend/picture/subsidy_kbn/BSI12.jpg' }});">
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

<!-- ##### Featured Properties Area Start ##### -->
<section class="south-contact-area mt-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp">
                    <h2>Perumahan Komersil</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="gallery_subsidy_kbn.php">
                            <img src="{{ url('frontend/picture/subsidy_kbn/BSI1.jpg') }}" alt="">
                                <div class="list-price">
                                    <p>IDR 140.000.000</p></a>
                                </div>
                        </a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <a href="gallery_subsidy_kbn.php">
                            <h5>BUMI SUKASARI INDAH</h5>
                            <p class="location"><img src="{{ url('frontend/img/icons/location.png') }}" alt="">Jl. Sukasari, Kec. Purwasari, Kabupaten Karawang, Jawa Barat 41373</p>
                            <p>Tipe :&nbsp;30/60</p>
                            <p>Unit Ready :&nbsp;330</p>
                            <hr style="color: black" width=75% Size="100">
                            <p style="color: #947054;">Karinda Bangun Nusa</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Featured Properties Area End ##### -->
@endsection