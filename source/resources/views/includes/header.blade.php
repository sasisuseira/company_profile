<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('') }}"><img src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{ url('') }}">Beranda</a>
                </li>
                <li>
                    <a href="https://forum.erayadigital.co.id">Forum</a>
                </li>
                <li>
                    <a href="{{ url('/#layanan_kami') }}">Layanan</a>
                </li>
                <li>
                    <a href="{{ route('layanan.hubungi_kami') }}">Hubungi Kami</a>
                </li>
            </ul>
        </div>
        <button type="button" class="eds-theme-toggle" data-eds-theme-toggle aria-label="Ganti mode gelap / terang" title="Ganti mode gelap / terang">
            <i class="fa-solid fa-moon eds-icon-moon"></i>
            <i class="fa-solid fa-sun eds-icon-sun"></i>
        </button>
    </div>
</div>
<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="vs-widget-about">
                <div class="footer-logo">
                <a href="{{ url('') }}"><img style="width: 88%" src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo"></a>
                </div>
                <p class="footer-text" style="text-align:justify">Didirikan pada tahun 2024, kami adalah software house profesional yang berpengalaman dalam menyediakan solusi Digital, TI, Pemanfaatan AI, dan IoT untuk berbagai organisasi. Kami telah melayani banyak klien di seluruh Indonesia, mulai dari UKM, perusahaan besar, hingga instansi pemerintah. Dengan memadukan semangat, ketajaman intuisi, dan pemanfaatan AI melalui IoT — seperti monitoring cerdas, otomatisasi berbasis data, dan agen AI — kami membantu pertumbuhan bisnis secara optimal dan berkelanjutan.</p>
                <div class="info-social style3">
                    <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="icon-btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="icon-btn" href="#"><i class="fab fa-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="vs-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="header-bg">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-tv"></i>IP KAMU : {{$info_location['ip']}}</li>
                                <li><i class="fas fa-map-marker-alt"></i><a href="mailto:info@example.com">LOKASI KAMU : {{$info_location['location']}}</a></li>
                                <li><i class="fas fa-shield-check"></i>STATUS KAMU : TAMU</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <div class="header-links ps-0">
                                <div class="social-style1">
                                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa-solid fa-user"></i>DAFTAR</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa-solid fa-lock"></i>MASUK</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container">
                <div class="menu-bg">
                    <div class="row position-relative">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('') }}">
                                    <img style="width: 200px;margin-top:-10px" src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="menu-area">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col">
                                        <nav class="main-menu menu-style1 d-none d-lg-block">
                                            <ul>
                                                <li>
                                                    <a href="{{ url('') }}">Beranda</a>
                                                </li>
                                                <li>
                                                    <a href="https://forum.erayadigital.co.id">Forum</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/#layanan_kami') }}">Layanan</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('layanan.hubungi_kami') }}">Hubungi Kami</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-auto d-lg-none">
                                        <button class="vs-menu-toggle d-inline-block">
                                            <i class="fal fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto d-xl-block d-none">
                                        <div class="header-icons">
                                            <button type="button" class="eds-theme-toggle" data-eds-theme-toggle aria-label="Ganti mode gelap / terang" title="Ganti mode gelap / terang">
                                                <i class="fa-solid fa-moon eds-icon-moon"></i>
                                                <i class="fa-solid fa-sun eds-icon-sun"></i>
                                            </button>
                                            <a href="#" class="icon-btn sideMenuToggler"><i
                                                    class="fa-solid fa-bars"></i></a>
                                            <a href="#" class="icon-btn">
                                                <i class="fa-solid fa-globe"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>