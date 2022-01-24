@extends('layouts.master')

@section('content')
            <!-- Start Main Banner Area -->
            <div class="headphone-main-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="hero-content">
                                <div class="col">
                                    <span>#yukMaskerin  #Diskon10%</span>
                                </div>
                                <h1>Nyaman di pakai dan kualitas terbaik</h1>
                                <a href="#shop" class="btn btn-primary">Lihat produk</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="headphone-banner-image">
                                <img src="{{asset('assets/img/masker/masker-bg.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape1"><img src="{{asset('assets/img/shape-image/shield.png') }}" alt="image"></div>
                <div class="shape2"><img src="{{asset('assets/img/shape-image/2.png') }}" alt="image"></div>
                <div class="shape3"><img src="{{asset('assets/img/shape-image/shield-green.png') }}" alt="image"></div>
                <div class="shape4"><img src="{{asset('assets/img/shape-image/4.png') }}" alt="image"></div>
                <div class="shape5"><img src="{{asset('assets/img/shape-image/5.png') }}" alt="image"></div>
                <div class="shape6"><img src="{{asset('assets/img/shape-image/6.png') }}" alt="image"></div>
                <div class="shape7"><img src="{{asset('assets/img/shape-image/7.png') }}" alt="image"></div>
                <div class="shape8"><img src="{{asset('assets/img/shape-image/8.png') }}" class="rotateme" alt="image"></div>
                <div class="dot-shape1"><img src="{{asset('assets/img/shape-image/corona-orange-15px.png') }}" alt="image"></div>
                <div class="dot-shape2"><img src="{{asset('assets/img/shape-image/corona-pink-20px.png') }}" alt="image"></div>
                <div class="dot-shape3"><img src="{{asset('assets/img/shape-image/corona-red.png') }}" alt="image"></div>
                <div class="dot-shape4"><img src="{{asset('assets/img/shape-image/shield-yellow.png') }}" alt="image"></div>
                <div class="dot-shape5"><img src="{{asset('assets/img/shape-image/corona-green-15px.png') }}" alt="image"></div>
                <div class="dot-shape6"><img src="{{asset('assets/img/shape-image/shield.png') }}" alt="image"></div>
            </div>
            <!-- End Main Banner Area -->

            <!-- Start About Area -->
            <section id="about" class="headphone-about-area mt-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="headphone-about-image">
                                <img src="{{asset('assets/img/women.png') }}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="headphone-about-content">
                                <h2>Buana Care</h2>
                                <p>Buana care kami bergerak di bidang penjualan produk masker, dengan berbagai macam motif yang menarik dan nyaman dipakai, produk tersedia berupa produk jadi atau system pre order, kami juga memberikan keunggulan produk diantaranya : </p>
                                <ul>
                                    <li><i class="flaticon-check-square"></i> Nyaman di pakai</li>
                                    <li><i class="flaticon-check-square"></i> Desain trendy </li>
                                    <li><i class="flaticon-check-square"></i> Harga terjangkau</li>
                                    <li><i class="flaticon-check-square"></i> Safe and clean</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Area -->

            {{-- <!-- Start Features Area -->
            <section id="features" class="headphone-features-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-features">
                                <i class="flaticon-vr-glasses"></i>
                                <h3>Clear Sound Performance</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-features">
                                <i class="flaticon-layers"></i>
                                <h3>Fold Control Metal Design</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-features">
                                <i class="flaticon-remote-control"></i>
                                <h3>Easy To Controll Comes Naturally</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-features">
                                <i class="flaticon-tap"></i>
                                <h3>Touch Sensitive Trackpad</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-features">
                                <i class="flaticon-3d-camera"></i>
                                <h3>HD Drivers Deliver Sound</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-features">
                                <i class="flaticon-virtual-reality"></i>
                                <h3>Comfortable To <br>Wear</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features Area --> --}}

            {{-- <!-- Start Headphone Design Area -->
            <section id="design" class="headphone-design-area ptb-120">
                <div class="container">
                    <div class="section-title">
                        <h2>Go On Adventures You've Only Dreamt Of Explore This World And Beyond</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    </div>

                    <div class="headphone-design-image fadeInUp wow" data-wow-delay="0.7s">
                        <img src="{{asset('assets/img/headphone-image/2.png') }}" alt="image">
                    </div>

                    <div class="headphone-design-content">
                        <h3>Authentic, Engaging Sound</h3>

                        <div class="headphone-design-slides owl-carousel owl-theme">
                            <div class="single-headphone-design">
                                <img src="{{asset('assets/img/headphone-design-image/1.jpg') }}" alt="image">

                                <a href="assets/img/headphone-design-image/1.jpg') }}" class="popup-btn"></a>
                            </div>

                            <div class="single-headphone-design">
                                <img src="{{asset('assets/img/headphone-design-image/2.jpg') }}" alt="image">

                                <a href="assets/img/headphone-design-image/2.jpg') }}" class="popup-btn"></a>
                            </div>

                            <div class="single-headphone-design">
                                <img src="{{asset('assets/img/headphone-design-image/3.jpg') }}" alt="image">

                                <a href="assets/img/headphone-design-image/3.jpg') }}" class="popup-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dot-shape1"><img src="{{asset('assets/img/shape-image/dot1.png') }}" alt="image"></div>
                <div class="dot-shape2"><img src="{{asset('assets/img/shape-image/dot2.png') }}" alt="image"></div>
                <div class="dot-shape3"><img src="{{asset('assets/img/shape-image/dot3.png') }}" alt="image"></div>
                <div class="dot-shape4"><img src="{{asset('assets/img/shape-image/dot4.png') }}" alt="image"></div>
                <div class="dot-shape5"><img src="{{asset('assets/img/shape-image/dot5.png') }}" alt="image"></div>
                <div class="dot-shape6"><img src="{{asset('assets/img/shape-image/dot6.png') }}" alt="image"></div>
            </section>
            <!-- End Headphone Design Area --> --}}

            <!-- Start Headphone Specifications Area -->
            <section id="detail" class="headphone-specifications-area ptb-120 jarallax" data-jarallax='{"speed": 0.3}'>
                <div class="container">
                    <div class="section-title">
                        <h2>Detail Produk</h2>
                    </div>

                    <div class="row align-items-center">
                        <div class="headphone-specifications-content">
                            <div class="single-specifications">
                                <h4>Warna</h4>
                                <span>Hitam / Putih</span>
                            </div>

                            <div class="single-specifications">
                                <h4>Jenis Bahan</h4>
                                <span>Kain / Kapas</span>
                            </div>
                        </div>

                        <div class="headphone-specifications-image">
                            <img src="{{asset('assets/img/masker/masker-detail.png') }}" alt="image">
                        </div>

                        <div class="headphone-specifications-content">
                            <div class="single-specifications">
                                <h4>Jenis Masker</h4>
                                <span>Masker medis / Masker kain </span>
                            </div>

                            <div class="single-specifications">
                                <h4>Batas pemakaian</h4>
                                <span>3 sampai 7 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Headphone Specifications Area -->

            <!-- Start Shop Area -->
            <section id="shop" class="shop-area ptb-120">
                <div class="container">
                    <div class="section-title">
                        <h2>Produk Kami</h2>
                        <p>Dapatkan diskon 10% dengan membeli 1 box isi 50pcs setiap pembelianya</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-products" data-tilt>
                                <img src="{{asset('assets/img/shop-image/masker-hitam1.png') }}" alt="image">

                                <h3>Masker Hitam</h3>

                                <a href="https://wa.me/6283180012053" class="btn btn-primary">Pesan sekarang</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-products" data-tilt>
                                <img src="{{asset('assets/img/shop-image/masker-putih1.png') }}" alt="image">

                                <h3>Masker Putih</h3>

                                <a href="https://wa.me/6283180012053" class="btn btn-primary">Pesan sekarang</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-products" data-tilt>
                                <img src="{{asset('assets/img/shop-image/masker-helo.png') }}" alt="image">

                                <h3>Masker Trendy</h3>

                                <a href="https://wa.me/6283180012053" class="btn btn-primary">Pesan sekarang</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-products" data-tilt>
                                <img src="{{asset('assets/img/shop-image/masker-medis.png') }}" alt="image">

                                <h3>Masker Medis</h3>

                                <a href="https://wa.me/6283180012053" class="btn btn-primary">Pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dot-shape1"><img src="{{asset('assets/img/shape-image/dot1.png') }}" alt="image"></div>
                <div class="dot-shape2"><img src="{{asset('assets/img/shape-image/dot2.png') }}" alt="image"></div>
                <div class="dot-shape3"><img src="{{asset('assets/img/shape-image/dot3.png') }}" alt="image"></div>
                <div class="dot-shape4"><img src="{{asset('assets/img/shape-image/dot4.png') }}" alt="image"></div>
                <div class="dot-shape5"><img src="{{asset('assets/img/shape-image/dot5.png') }}" alt="image"></div>
                <div class="dot-shape6"><img src="{{asset('assets/img/shape-image/dot6.png') }}" alt="image"></div>
            </section>
            <!-- End Shop Area -->
@endsection
