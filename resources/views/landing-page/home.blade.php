@extends('layouts.landing')

@section('title')
Home
@endsection

@section('content')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset("startbootstrap/assets/img/intro-donat.jpg") }}" alt="..." />
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Donat Susu</span>
                    <span class="section-heading-lower">Mojosongo</span>
                </h2>
                <p class="mb-3">Kami adalah destinasi pilihan untuk pencinta donat yang menginginkan pengalaman berbeda dan nikmat. Donat Susu Mojosongo menyajikan inovasi luar biasa dengan memadukan rasa lezat donat klasik dengan kelezatan susu segar, menciptakan paduan sempurna yang memanjakan lidah Anda!</p>
            </div>
        </div>
    </div>
</section>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Our Promise</span>
                        <span class="section-heading-lower">To You</span>
                    </h2>
                    <p class="mb-0">Kepuasan pelanggan adalah prioritas utama kami. Kami berkomitmen untuk memberikan pelayanan terbaik dan memastikan setiap donat yang Anda nikmati memenuhi harapan Anda. Kami juga senantiasa mendengar umpan balik dari Anda, karena itu adalah kunci keberhasilan dan perbaikan terus-menerus.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
