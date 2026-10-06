@extends('templatebody')
@section('konten_utama')
<!--==============================
Hero Area
============================== -->
<div class="hero-layout1 style2" data-bg-src="{{ asset('template_v1/img/hero/hero-bg-2-1.jpg') }}">
    <div class="container position-relative">
        <div class="vs-carousel z-index1" data-slide-show="1" data-autoplay="true" data-fade="true"
            data-arraw="true">
            <div class="hero-slide">
                <div class="container">
                    <div class="row g-5 align-items-top justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content text-center">
                                <div class="title-area text-center">
                                    <span class="sec-subtitle">Pengembangan Aplikasi</span>
                                    <h2 class="sec-title h1 mb-20">Bisnis Digital Anda adalah <span>Keahlian</span> Kami</h2>
                                    <p class="sec-text">Kami berfokus pada solusi digital untuk membantu bisnis Anda tumbuh dan bersaing di era modern. Terkhusunya untuk memecahkan masalah anda dengan bantuan teknologi. Jadi jangan khawatir serta jangan malu jikalau anda ingin berkonsultasi dengan kami</p>
                                </div>
                                <div class="hero-bottom">
                                    <a href="javascript:void(0)" class="vs-btn">Lihat Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="row g-5 align-items-top justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content text-center">
                                <div class="title-area text-center">
                                    <span class="sec-subtitle">Pemanfaatan AI & AI Agentic</span>
                                    <h2 class="sec-title h1 mb-20">Kerja Cerdas dengan <span>AI Agentic</span> dan Otomatisasi</h2>
                                    <p class="sec-text">Kami membangun agen AI, asisten cerdas, dan alur otomatisasi yang membantu bisnis Anda bekerja lebih cepat — mulai dari customer service otomatis, analisis data, hingga integrasi AI ke aplikasi dan operasional harian Anda.</p>
                                </div>
                                <div class="hero-bottom">
                                    <a href="javascript:void(0)" class="vs-btn">Konsultasi Yuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="row g-5 align-items-top justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content text-center">
                                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                                    <span class="sec-subtitle">Konsultasi Perangkat Keras dan Lunak</span>
                                    <h2 class="sec-title h1 mb-20">Butuh Konsultasi <span>Perangkat</span> Untuk Infrastruktur Anda
                                    </h2>
                                    <p class="sec-text">Kami menyediakan solusi keamanan perangkat keras dan lunak yang andal untuk melindungi data dan aktivitas online Anda seperti DevOps, Security, dan Network. Dengan pengalaman dan keahlian kami, kami membantu Anda merasa aman di dunia digital.</p>
                                </div>
                                <div class="hero-bottom">
                                    <a href="javascript:void(0)" class="vs-btn">Minta Katalog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-xl-block" style="bottom: 0%;"><img src="{{ asset('template_v1/img/shep/hero-world-shep.png') }}" alt="shapes"></div>
    <div class="shape-mockup moving d-none d-xl-block" style="top: 5%;">
        <div class="star"></div>
        <div class="meteor-1"></div>
        <div class="meteor-2"></div>
        <div class="meteor-3"></div>
        <div class="meteor-4"></div>
        <div class="meteor-5"></div>
        <div class="meteor-6"></div>
        <div class="meteor-7"></div>
        <div class="meteor-8"></div>
        <div class="meteor-9"></div>
        <div class="meteor-10"></div>
        <div class="meteor-11"></div>
        <div class="meteor-12"></div>
        <div class="meteor-13"></div>
        <div class="meteor-14"></div>
        <div class="meteor-15"></div>
    </div>
</div>
<div class="process-layout2">
    <div class="container-style2">
        <div class="process-style2">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-1.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Konsultasi</h2>
                        </div>
                        <p class="process-text">
                            Konsultasikan masalah anda kepada kami secara jelas dan terperinci.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">01</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-2.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Metode dan Pengerjaan</h2>
                        </div>
                        <p class="process-text">
                            Kami merancang dan mengembangkan solusi sesuai dengan kebutuhan.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">02</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-3.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Refisi dan Penyempuran</h2>
                        </div>
                        <p class="process-text">
                            Sesuaikan dan penyempuran solusi yang telah dikembangkan.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">03</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-4.svg') }}" alt="icon"> 
                            </div>
                            <h2 class="process-title h5">Publish dan Maintain</h2>
                        </div>
                        <p class="process-text">
                            Jalankan dan rawat produk/jasa yang telah selesai secara bertahap.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">04</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-layout2 space-bottom">
    <div class="container wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row gx-60 gy-5 align-items-center">
            <div class="col-xl-6">
                <div class="about-img wow fadeInUp">
                    <img src="https://i.pinimg.com/originals/51/ce/d1/51ced1ca835521237877e5380a94c554.gif" alt="Mengenai Kami">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-content">
                    <div class="title-area text-left wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle2">Kami Siapa ?</span>
                        <h2 class="sec-title">Mitra Tepercaya Digitalisasi UMKM dengan AI, IoT & ERP</h2>
                    </div>
                    <div class="about-body">
                        <p class="about-text" style="text-align: justify;margin-top:-30px">
                            PT. Eraya Digital Solusindo adalah mitra terpercaya untuk transformasi digital, digitalisasi UMKM, implementasi ERP, pemanfaatan AI dan AI Agentic, serta solusi IoT di Indonesia. Dengan layanan IT komprehensif — mulai dari pengembangan aplikasi kustom, sistem ERP terintegrasi, integrasi cloud, otomatisasi berbasis AI, hingga monitoring IoT real-time — kami membantu bisnis Anda meningkatkan efisiensi, produktivitas, dan daya saing secara optimal dan berkelanjutan.
                        </p>
                        <div class="counter-style2">
                            <div class="media-style">
                                <div class="media-inner">
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title counter-number" data-count="1">1</h2>
                                        </div>
                                        <p class="media-text">Negara Yang Tersedia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media-style">
                                <div class="media-inner">
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title counter-number" data-count="15">15</h2>
                                        </div>
                                        <p class="media-text">Server Aktif</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media-style">
                                <div class="media-inner">
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title counter-number" data-count="13">13</h2>
                                        </div>
                                        <p class="media-text">Projeck Selesai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="layanan_kami" class="service-layout1 service-space space-bottom">
    <div class="container wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle">Layanan</span>
                    <h2 class="sec-title">Layanan Kami Yang Mengagumkan</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp wow-animated" data-wow-delay="0.3s" data-slide-show="4"
            data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true"
            data-arrows="true">
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <a href="{{ route('layanan.email') }}">
                            <img src="{{ asset('template_v1/img/icon/mail_server.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center" style="color:white">Mail Server</h2>
                            <p class="service-text text-center">
                                Ingin membuat nema email kamu atau perusahaanmu menjadi profesional  dengan cepat dan aman seperti ini namakamu@namaperusahaan.co.id.
                            </p>
                            </a>
                        </div>
                        <a href="{{ route('layanan.email') }}" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <img src="{{ asset('template_v1/img/icon/developer.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="{{ route('layanan.detail', 'erp') }}">ERP & Sistem Terintegrasi</a></h2>
                            <p class="service-text text-center">
                                Satu sistem untuk keuangan, inventory, HRD, dan operasional — terhubung real-time antar divisi dan cabang.
                            </p>
                        </div>
                        <a href="{{ route('layanan.detail', 'erp') }}" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <img src="{{ asset('template_v1/img/icon/logo_ai.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalComingSoon" data-layanan="AI Agentic">AI Agentic</a></h2>
                            <p class="service-text text-center">
                                Kami membangun chatbot, agen AI, dan otomatisasi alur kerja untuk memangkas pekerjaan manual, mempercepat layanan, dan mengoptimalkan operasional bisnis Anda.
                            </p>
                        </div>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalComingSoon" data-layanan="AI Agentic" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <img src="{{ asset('template_v1/img/icon/logo_iot.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalComingSoon" data-layanan="IoT & Smart Devices">IoT & Smart Devices</a></h2>
                            <p class="service-text text-center">
                                Kami merancang solusi Internet of Things (IoT) — monitoring sensor, smart device, dan integrasi cloud — untuk memantau aset, ruangan, dan operasional secara real-time.
                            </p>
                        </div>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalComingSoon" data-layanan="IoT & Smart Devices" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <img src="{{ asset('template_v1/img/icon/umkm.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalComingSoon" data-layanan="UMKM Digital">UMKM</a></h2>
                            <p class="service-text text-center">
                                Mengembangkan usaha anda dengan bantuan teknologi, ayo konsultasikan masalah anda kepada kami serta akan membantu sepenuh hati
                            </p>
                        </div>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalComingSoon" data-layanan="UMKM Digital" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <img src="{{ asset('template_v1/img/icon/devops.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="{{ route('layanan.detail', 'devops-maintenance') }}">Dev OPS</a></h2>
                            <p class="service-text text-center">
                                Membutuhkan jasa untuk merawat infrastruktur anda seperti server, jaringan lokal , database, dsb. Jangan khawatir kami sudah terbiasa.
                            </p>
                        </div>
                        <a href="{{ route('layanan.detail', 'devops-maintenance') }}" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video-layout1 video-space space-top" data-bg-src="{{ asset('template_v1/img/bg/video-bg2.jpg') }}">
    <div class="container position-relative wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="cta-style1">
            <div class="cta-wrap wow fadeInUp wow-animated" data-wow-delay="0.3s">
                <div class="row justify-content-md-end">
                    <div class="col-xl-7">
                        <div class="cta-content">
                            <div class="title-area text-left">
                                <span class="sec-subtitle2">Stay In Your Cybersecurity</span>
                                <h2 class="sec-title">Jangan khawatir semua informasi baik data tertulis atau digital yang anda konsultasikan kepada kami akan kami jaga 100%</h2>
                            </div>
                            <div class="cta-body">
                                <span class="cta-notice"><i class="fas fa-sack-dollar"></i> 100% Satisfaction Guarantee</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-8">
                        <div class="cta-img">
                            <img src="{{ asset('template_v1/img/cta/cta-img1.png') }}" alt="cta-image">
                        </div>
                    </div>
                </div>
                <div id="particles-js4" style="top: 0%; right: 0%; z-index: -1; width:45%; height:100%;"><canvas
                        class="particles-js-canvas-el"></canvas></div>
            </div>
        </div>
    </div>
</section>
<section class="team-layout2 team-space" style="padding-bottom:100px">
    <div class="container position-relative">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8">
                <div class="title-area text-lg-start text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle2">Keluarga Eraya</span>
                    <h2 class="sec-title">Kenalan Dengan Tim Kami Yang Keren Dan Profesional</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="title-arraw text-end">
                    <button class="icon-btn slick-prev" data-slick-prev=".team-slider"><i
                            class="fa-regular fa-arrow-left"></i></button>
                    <button class="icon-btn slick-next" data-slick-next=".team-slider"><i
                            class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row vs-carousel team-slider wow fadeInUp wow-animated" data-wow-delay="0.3s" data-slide-show="4"
            data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true"
            data-arrows="false">
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Ariza-Agung&size=400&backgroundColor=0ea5e9" alt="Ariza Agung P - Marketing" style="width:200px;height:200px;object-fit:cover;" loading="lazy">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Ariza Agung P</a>
                        </h4>
                        <span class="degi">Marketing Eraya Digital</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Erfan-Huda&size=400&backgroundColor=8b5cf6" alt="Erfan Huda - Marketing" style="width:200px;height:200px;object-fit:cover;" loading="lazy">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Erfan Huda</a>
                        </h4>
                        <span class="degi">Marketing Eraya Digital</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Aries-AI&size=400&backgroundColor=06b6d4" alt="Mochamad Aries S - AI Engineer" style="width:200px;height:200px;object-fit:cover;" loading="lazy">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Mochamad Aries S</a></h4>
                        <span class="degi">AI Engineer</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Ryan-Dony&size=400&backgroundColor=10b981" alt="Ryan Dony Pratama - Senior Programmer" style="width:200px;height:200px;object-fit:cover;" loading="lazy">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Ryan Dony Pratama</a></h4>
                        <span class="degi">Senior Programmer</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Yoppi-Niko&size=400&backgroundColor=f59e0b" alt="Yoppi Niko Ifandika - Senior Programmer" style="width:200px;height:200px;object-fit:cover;" loading="lazy">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Yoppi Niko Ifandika</a>
                        </h4>
                        <span class="degi">Senior Programmer</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Rozikin-DevOps&size=400&backgroundColor=3b82f6" alt="Achmad Rozikin - DevOps Spesialis" style="width:200px;height:200px;object-fit:cover;" loading="lazy">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Achmad Rozikin</a>
                        </h4>
                        <span class="degi">DevOps Spesialis</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="vs-blog-wrapper blog-layout2 bg-title space">
    <div class="container z-index1 wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="title-area text-lg-start text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle2">Rekanan Dan Pekerjaan</span>
                    <h2 class="sec-title">Cek Yuk Rekanan Kami Yang Keren & Hasilnya</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="title-arraw text-end">
                    <button class="icon-btn slick-prev" data-slick-prev=".blog-slider"><i
                            class="fa-regular fa-arrow-left"></i></button>
                    <button class="icon-btn slick-next" data-slick-next=".blog-slider"><i
                            class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!-- <div class="row g-5 space-extra-bottom">
            <div class="col-lg-12">
                <div class="row vs-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2"
                    data-md-slide-show="2" data-autoplay="true" data-arrows="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-1.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">Top 5 Reasons to Use a VPN for Streaming</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">24
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-2.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">Why Online Privacy Matters More Than Ever</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-3.jpg')}}" alt="Blog Image"></a>  
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">How VEEPN Protects You from Cyber Threats</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-4.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">How to Choose the Best VPN Server for Your Needs</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-5.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">How VEEPN Keeps Your Data Safe on Public Wi-Fi</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="container z-index1 wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="brand-style2">
            <div class="row align-items-center justify-content-between vs-carousel" data-slide-show="5"
                data-lg-slide-show="4" data-md-slide-show="3" data-center-mode="true" data-lg-center-mode="true"
                data-md-center-mode="true" data-autoplay="true" data-arrows="false">
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/GayengMasAbadi.png') }}" alt="PT. GAYENG MAS ABADI">
                    </div>
                    <p class="media-info text-center">PT. GAYENG MAS ABADI<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/SMKN1MALANG.png') }}" alt="SMKN 1 Malang">
                    </div>
                    <p class="media-info text-center">SMKN 1 Malang<br>2019 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/PGRI6MALANG.jpg') }}" alt="SMK PGRI 6 Malang">
                    </div>
                    <p class="media-info text-center">SMK PGRI 6 Malang<br>2021 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/KOTAKCANTIKMAGELANG.png') }}" alt="KOTAK CANTIK MAGELANG">
                    </div>
                    <p class="media-info text-center">KOTAK CANTIK MAGELANG<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/YAYASANSINARABADI.png') }}" alt="SMK SINAR ABADI MELAK">
                    </div>
                    <p class="media-info text-center">SMK SINAR ABADI MELAK<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/ARTHAMEDICALCENTRE.png') }}" alt="KLINIK ARTHA MEDICAL CENTRE MELAK">
                    </div>
                    <p class="media-info text-center">KLINIK ARTHA MEDICAL CENTRE MELAK<br>2024 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/PUSKESMASDEMPAR.png') }}" alt="PUSKESMAS DEMPAR">
                    </div>
                    <p class="media-info text-center">PUSKESMAS DEMPAR KUTAI BARAT<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/OLIVIABABYSHOP.png') }}" alt="OLIVIA BABY SHOP MALANG">
                    </div>
                    <p class="media-info text-center">OLIVIA BABY SHOP MALANG<br>2014 - 2024</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/SANJAYAGROUP.png') }}" alt="SANJAYAGROUP">
                    </div>
                    <p class="media-info text-center">SANJAYA GROUP (OLI DAN GROSIR)<br>2022 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/TOKOQQTEMPURSARI.png') }}" alt="SANJAYAGROUP">
                    </div>
                    <p class="media-info text-center">TOKO SEPATU QQ TEMPUR SARI<br>2022 - SEKARANG</p>
                </div>
            </div>
        </div>
    </div>
    <div id="process-particle1" style="top: 0%; left: 0%; width: 30%; height: 70%; z-index: 0;"><canvas
            class="particles-js-canvas-el"></canvas></div>
    <div id="process-particle2" style="bottom: 0%; right: 0%; width: 30%; height: 50%; z-index: 0;"><canvas
            class="particles-js-canvas-el"></canvas></div>
</section>

{{-- ===== MODAL COMING SOON (AI, IoT, UMKM) : detail file tetap ada, tidak dihapus ===== --}}
<div class="modal fade eds-modal eds-comingsoon" id="modalComingSoon" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div>
          <span class="cs-badge"><i class="fa-solid fa-rocket"></i> COMING SOON</span>
          <h5 class="modal-title mt-2"><span id="csLayanan">Layanan</span> lagi disiapkan 🚀</h5>
          <p>Halaman detailnya sudah ada, tapi belum kami publish. Tinggalkan kontak — kami kabari saat launching.</p>
        </div>
        <button type="button" class="eds-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
      </div>
      <div class="modal-body text-center">
        <div class="cs-orb"><i class="fa-solid fa-hourglass-half"></i></div>
        <h6 class="cs-title">Sesuatu yang keren sedang dirakit</h6>
        <p class="cs-text">Tim kami lagi finalisasi paket, harga, dan demo untuk <strong id="csLayanan2">layanan ini</strong>. Butuh sekarang? Konsultasi dulu aja — gratis, fast respon &lt; 1 jam kerja.</p>
        <div class="cs-progress"><span></span></div>
        <p class="cs-hint">Progress launching: 85%</p>
      </div>
      <div class="modal-footer d-flex gap-2 justify-content-center flex-wrap">
        <a href="{{ route('layanan.hubungi_kami') }}" class="vs-btn">💬 Konsultasi Gratis</a>
        <button type="button" class="vs-btn style2" data-bs-dismiss="modal">Lihat Layanan Lain</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('css_load')
<link rel="stylesheet" href="{{ asset('template_v1/sass/template/meteor.css') }}">
<style>
.vs-btn{
    border-radius: 20px;
}
.vs-btn.style2{background:#0b1220;color:#fff;border:1px solid #e2e8f0}
/* ===== Coming Soon modal ===== */
.eds-comingsoon .modal-content{border:0;border-radius:24px;overflow:hidden;background:#fff !important}
.eds-comingsoon .modal-header{border:0;padding:26px 28px;background:linear-gradient(135deg,#0b3b7a 0%,#0ea5e9 55%,#3EC964 100%) !important;align-items:flex-start;gap:16px}
.eds-comingsoon .modal-header .modal-title{font-weight:800;font-size:1.25rem;color:#fff !important}
.eds-comingsoon .modal-header p{margin:6px 0 0;font-size:.88rem;color:rgba(255,255,255,.92) !important}
.cs-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.16);border:1px solid rgba(255,255,255,.4);color:#fff;font-weight:800;font-size:12px;letter-spacing:.12em;padding:7px 14px;border-radius:30px;backdrop-filter:blur(6px)}
.cs-badge i{animation:csfloat 2.2s ease-in-out infinite}
.eds-comingsoon .eds-close{width:38px;height:38px;flex:0 0 38px;border-radius:50%;background:#fff !important;color:#1B2841 !important;font-size:24px;font-weight:700;line-height:1;border:0;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 10px rgba(0,0,0,.25);opacity:1;cursor:pointer}
.eds-comingsoon .modal-body{padding:30px 28px 10px;background:#fff !important}
.cs-orb{width:84px;height:84px;margin:0 auto 14px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:34px;color:#fff;background:linear-gradient(135deg,#025FCA,#3EC964);box-shadow:0 14px 34px rgba(2,95,202,.35);animation:csfloat 2.6s ease-in-out infinite}
.cs-title{color:#1B2841 !important;font-weight:800;margin-bottom:8px}
.cs-text{color:#475569 !important;font-size:.93rem;line-height:1.7}
.cs-text strong{color:#1B2841 !important}
.cs-progress{height:10px;border-radius:20px;background:#e8eef7;overflow:hidden;margin:18px 0 8px}
.cs-progress span{display:block;height:100%;width:85%;border-radius:20px;background:linear-gradient(90deg,#025FCA,#3EC964,#FFA41C);background-size:200% 100%;animation:csload 2.4s linear infinite}
.cs-hint{font-size:12px;color:#8496ac !important;margin-bottom:0}
.eds-comingsoon .modal-footer{border:0;padding:18px 28px 24px;background:#f1f7f3 !important}
@keyframes csfloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
@keyframes csload{0%{background-position:0% 0}100%{background-position:200% 0}}
/* ===== Layanan: gambar rata & rapi ===== */
#layanan_kami .service-style1{
    height: 100%;
    min-height: 360px;
    display: flex;
    flex-direction: column;
    padding: 36px 26px 60px;
}
#layanan_kami .service-style1 .service-body{
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
}
#layanan_kami .service-style1 .service-body a{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    width: 100%;
    flex: 1;
}
#layanan_kami .service-style1 .service-body img{
    width: 256px;
    height: 256px;
    min-width: 256px;
    min-height: 256px;
    object-fit: contain;
    display: block;
    margin: 0 auto 18px;
}
#layanan_kami .service-style1 .service-title{
    min-height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    line-height: 1.4;
    margin-bottom: 10px;
}
#layanan_kami .service-style1 .service-text{
    min-height: 120px;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-align: center;
}
/* samakan tinggi antar slide carousel */
#layanan_kami .vs-carousel .slick-track{
    display: flex;
    align-items: stretch;
}
#layanan_kami .vs-carousel .slick-slide{
    height: inherit;
}
#layanan_kami .vs-carousel .slick-slide > div,
#layanan_kami .service-wrap{
    height: 100%;
}
.brand-item-oke {
    background-color: white !important;
    padding: 20px;
    border-radius: 20px;
    height: 150px;
    min-height: 150px;
    max-width: 240px;
    width: 220px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    cursor: pointer;
    margin: 0 auto;
}
.brand-item-oke img {
    max-width: 170px;
    max-height: 110px;
    width: auto;
    height: auto;
    object-fit: contain;
    transition: all 0.5s ease;
}
.brand-style2 .vs-carousel .slick-track{
    display: flex;
    align-items: stretch;
}
.brand-style2 .vs-carousel .slick-slide{
    display: flex !important;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    height: inherit;
}
.brand-style2 .col-auto{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}
.brand-style2 .media-info{
    min-height: 48px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    margin-top: 12px !important;
    line-height: 1.5;
}
</style>
@endsection
@section('js_load')
<script>
document.addEventListener('DOMContentLoaded',function(){
  var modal=document.getElementById('modalComingSoon');
  if(modal){
    modal.addEventListener('show.bs.modal',function(e){
      var btn=e.relatedTarget;
      var nama=(btn&&btn.getAttribute('data-layanan'))||'Layanan';
      var t1=document.getElementById('csLayanan');
      var t2=document.getElementById('csLayanan2');
      if(t1)t1.textContent=nama;
      if(t2)t2.textContent=nama;
    });
  }
});
</script>
@endsection
