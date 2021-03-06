@extends('layouts.default')
@section('title', 'Hubungi')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url({{ 'frontend/picture/subsidy_kbn/BSI12.jpg' }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<section class="south-contact-area mt-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp">
                    <h2>Hubungi</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="content-sidebar">
                    <!-- Address -->
                    <div class="address mt-30">
                        <h6><img src="{{ url('frontend/img/icons/phone-call.png') }}" alt=""> +6287878677472</h6>
                        <h6><img src="{{ url('frontend/img/icons/envelope.png') }}" alt=""> karindabangunnusa0@gmail.com</h6>
                        <h6><img src="{{ url('frontend/img/icons/location.png') }}" alt=""> Jl. Syech Quro, Perkantoran Johar Indah Ruko No. A10<br>Karawang Timur, 41314</h6>
                    </div>
                </div>
            </div>

            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8">
                <div class="contact-form">
                    <form action="{{ route('contact-create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="name" class="form-control" name="name" id="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="telp" id="telp" placeholder="No. Handphone / Whatsapp">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" required="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="pesan" id="message" cols="30" rows="10" required="" placeholder="Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn south-btn" value="Send Message">Send Message</button>
                        <br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection