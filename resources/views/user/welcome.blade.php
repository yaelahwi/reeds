@extends('user.app')
@section('content')

<div class="site-blocks-1" data-aos="fade">
    <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
            <img class="" style="width:500px;height:600px;" src="{{ asset('shopper') }}/images/utas.png" alt="">
            <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                <h1 class="mb-2">Cari Semua Barang Kebutuhan Kamu Di Sini</h1>
                <div class="intro-text text-center text-md-left">
                    <p class="mb-4">Nikmati pengalaman berbelanja online melalui Aplikasi mobile resmi JD.ID
                        JD.id menghadirkan beragam pilihan produk seperti Smartphone, Laptop dan Komputer, Tablet, Smart Device, Peralatan kantor, TV, Audio, Personal Care, Sport & Outdoor, Mom & Baby dan produk pilihan lainnya dengan harga murah.</p>
                    <p>
                        <a href="{{ route('user.produk') }}" class="btn btn-sm btn-primary">Belanja Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ADVANTAGE [S]-->
<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="col-md-12 site-section text-center">
        <h2 class="pt-4" style="text-align:center;">OUR PROMISE'S</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
                <img class="" height="80px" src="{{ asset('shopper') }}/images/delivery2.png" alt="">
                <h4>SHIPPING SAFETY STANDARDS</h4>
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                    <p>Pengiriman Cepat dan Aman</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
                <img class="" height="80px" src="{{ asset('shopper') }}/images/guarantee.png" alt="">
                <h4>PREMIUM AND ORIGINAL</h4>
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                    <p>Kami Pastikan Produk yang Anda Terima 100% Original, Tidak Original Dana Refund 2x Lipat</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
                <img class="" height="80px" src="{{ asset('shopper') }}/images/support.png" alt="">
                <h4>24/7 CUSTOMER SUPPORT</h4>
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                    <p>Fast Response Kewajiban Kami</p>
                </div>
            </div>
        </div>
        <!-- ADVANTAGE [E]-->
    </div>
    <div class="site-section block-3 site-blocks-2 bg-light" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Best Seller</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-3 owl-carousel">
                        @foreach($produks as $produk)
                        <div class="item">
                            <div class="block-4 text-center">
                                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                                    <figure class="block-4-image">
                                        <img src="{{ asset('storage/'.$produk->image) }}" alt="Image placeholder" class="img-fluid" width="100%" style="height:300px">
                                    </figure>
                                </a>
                                <div class="block-4-text p-4">
                                    <h3><a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">{{ $produk->name }}</a></h3>
                                    <p class="mb-0">{{ $produk->price }}</p>
                                    <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}" class="btn btn-primary mt-2">Detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection