@extends('layouts.landing')

@section('title')
About
@endsection

@section('content')
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0 w-100" src="{{ asset('startbootstrap/assets/img/about.jpg') }}" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Kreativitas, Kualitas, Kepuasan Pelanggan</span>
                            <span class="section-heading-lower">Tentang Kami</span>
                        </h2>
                        <p>Donat Susu Mojosongo tidak hanya tentang produk, tetapi juga tentang cerita di baliknya. Berawal dari hasrat kami untuk menciptakan sesuatu yang istimewa, kami memadukan keahlian dalam meracik donat yang lezat dengan keunikan menggunakan susu segar berkualitas tinggi. Setiap donat yang kami produksi merupakan hasil dari dedikasi kami untuk memberikan pengalaman yang tak terlupakan kepada pelanggan kami.</p>
                        <p class="mb-0">
                            Kami bangga dengan standar kualitas tinggi yang kami terapkan dalam setiap tahap produksi. Mulai dari pemilihan bahan baku terbaik hingga proses pembuatan yang teliti, kami memastikan bahwa setiap donat yang keluar dari dapur kami adalah karya terbaik kami. Kami meyakini bahwa kualitas adalah kunci kepuasan pelanggan, dan itulah yang selalu kami pertahankan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
