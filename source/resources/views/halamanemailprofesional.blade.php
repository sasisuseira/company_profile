@extends('templatebody')
@section('konten_utama')
<section class="style2" style="padding-top:2%">
    <div class="container">
        <div class="row g-5 align-items-top justify-content-center">
            <div class="col-lg-8">
                <div class="hero-content text-center">
                    <div class="title-area text-center">
                        <span class="sec-subtitle">Beri Kesan Profesional</span>
                        <h2 class="sec-title h1 mb-20" style="color: #fff;">Solusi <span>Email Profesional</span> untuk Bisnis Anda</h2>
                        <p class="sec-text">Pelaku UMKM wajib punya email bisnis untuk membangun identitas online dan berkomunikasi dengan pelanggan. Buat email sesuai nama bisnis dan jadikan bisnis lebih profesional dan unggul di industrinya.Selain itu, email profesional juga berperan untuk membangun citra yang baik dari bisnis yang kamu miliki. Sebaliknya, asal menggunakan nama email keren bisa membuat bisnis kamu memiliki citra buruk.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container z-index1 wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="monthly-tab-pane" role="tabpanel" aria-labelledby="monthly-tab" tabindex="0">
                <div id="monthly" data-tab-content class="package-list ">
                    <div class="row g-5">
                        <div class="col-xl-4 col-md-6">
                            <div class="package-style1">
                                <div class="package-top">
                                    <div class="package-icon"><img src="{{ asset('template_v1/img/icon/price-icon1.png') }}" alt="icon"></div>
                                    <h3 class="package-name h4">Pribadi</h3>
                                    <p class="package-text">Cocok Untuk Personal Branding Anda</p>
                                    <p class="package-price">Rp 30K<span class="duration">/bulan</span></p>
                                </div>
                                <div class="package-body">
                                    <div class="notice">
                                        <span class="package-notice"><i class="fas fa-sack-dollar"></i>30 Hari Garansi Pemakaian</span>
                                    </div>
                                    <div class="list-style1">
                                        <ul class="list-unstyled">
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Anti-malware & Spam protection</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>1 Domain + Akses Webmail</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Maksimal 2 Pengguna Per Domain</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Kapasitas Email 5GB</li>
                                        </ul>
                                        <div class="shep">
                                            <img src="{{ asset('template_v1/img/shep/price-shape1.png') }}" alt="shep">
                                        </div>
                                    </div>
                                    <div class="price-btn">
                                        <a href="price.html" class="vs-btn">Aku Mau Ini</a>
                                    </div>
                                </div>
                                <div class="shep-btn">
                                    <svg width="150" height="150" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z" fill="none"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="package-style1 active">
                                <div class="package-top">
                                    <div class="package-icon"><img src="{{ asset('template_v1/img/icon/price-icon2.png') }}" alt="icon"></div>
                                    <h3 class="package-name h4">Bisnis Pemula</h3>
                                    <p class="package-text">Cocok untuk yang merintis usaha / UMKM</p>
                                    <p class="package-price">Rp 60K<span class="duration">/bulan</span></p>
                                </div>
                                <div class="package-body">
                                    <div class="notice">
                                        <span class="package-notice"><i class="fas fa-sack-dollar"></i>30 Hari Garansi Pemakaian</span>
                                    </div>
                                    <div class="list-style1">
                                        <ul class="list-unstyled">
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Anti-malware & Spam protection</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>1 Domain + Akses Webmail</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Maksimal 5 Pengguna Per Domain</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Kapasitas Email 10GB</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>100GB Penyimpanan Bersama</li>
                                        </ul>
                                        <div class="shep">
                                            <img src="{{ asset('template_v1/img/shep/price-shape2.png') }}" alt="shep">
                                        </div>
                                    </div>
                                    <div class="price-btn">
                                        <a href="price.html" class="vs-btn">Aku Mau Ini</a>
                                    </div>
                                </div>
                                <div class="shep-btn">
                                    <svg width="150" height="150" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z" fill="none"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="package-style1">
                                <div class="package-top">
                                    <div class="package-icon"><img src="{{asset('template_v1/img/icon/price-icon3.png') }}" alt="icon"></div>
                                    <h3 class="package-name h4">Enterprise</h3>
                                    <p class="package-text">Buat anda yang ingin lebih dari bisnis</p>
                                    <p class="package-price">Hubungi Kami</p>
                                </div>
                                <div class="package-body">
                                    <div class="notice">
                                        <span class="package-notice"><i class="fas fa-sack-dollar"></i>30 Day Money-Back Guarantee</span>
                                    </div>
                                    <div class="list-style1">
                                        <ul class="list-unstyled">
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Anti-malware & Spam protection</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Unlimited Domain</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Unlimited User Per Domain</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Kapasitas Email 15 GB Per Akun</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Management Akun & Domain</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Penyimpanan Terenkripsi Sebesar 1 TB</li>
                                            <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>Branding Domain & Mail Server</li>
                                        </ul>
                                        <div class="shep">
                                            <img src="{{ asset('template_v1/img/shep/price-shape1.png') }}" alt="shep">
                                        </div>
                                    </div>
                                    <div class="price-btn">
                                        <a href="price.html" class="vs-btn">Aku Mau Ini</a>
                                    </div>
                                </div>
                                <div class="shep-btn">
                                    <svg width="150" height="150" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z" fill="none"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-xl-block" style="top: 5%;">
        <div class="star"></div>
    </div>
    <div  id="particles-js8" style="top: 0%; right: 0%; z-index: 0; width:40%; height:570px;"><canvas class="particles-js-canvas-el"></canvas></div>
</section>
<section class="faq-layout1 bg-body2 space" style="z-index: 99;">
    <div class="container wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle">FAQS</span>
                    <h2 class="sec-title">Frequently Asked Any Questions Us </h2>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-60">
            <div class="col-lg-8">
                <div class="accordion accordion-style1" id="faqVersion1">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Apakah Mail Server Memerlukan Domain ?</button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Iya, anda perlu memerlukan domain, tapi jangan khawatir jikalau anda komitmen berlangganan dalam 1 tahun, kami akan memberikan domain gratis untuk anda, Jikalau anda sudah memiliki domain maka anda tinggal menghubungkan dengan server kami. Ingin bantuan untuk menghubungkan jangan khawatir kami akan membantu anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana mengakses mail server anda ?
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Jika anda mengambil paket yang PRIBADI dan BISNIS PEMULA anda dapat mengakses melalui <a href="http://mail.erayadigital.co.id">mail.erayadigital.co.id</a> kemudian anda masukan kredensial yang kami berikan untuk mengakses email anda. Anda dapat juga menghubukan email anda ke smartphone anda dengan mengikuti tutorial setelah login. Jika ingin menggunakan domain anda maka anda dapat mengambil paket ENTERPRISE</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apakah bedanya KAPASITAS EMAIL dan PENYIMPANAN BERSAMA ?
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>KAPASITAS EMAIL : Penyimpanan khusus email anda<br>
                                KAPASITAS BERSAMA : Selain email seperti berkas dokumen, foto, dan berkas lainnya, anda juga dapat menyimpan berkas lainnya ke dalam 1 folder yang disebutkan secara spesifik oleh anda.<br>
                                Jadi anda tidak perlu khawatir penyimpanan tersebut berbeda sehingga anda dapat memanajemen berkas anda secara efektif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Apakah Bisa Dihubungkan ke HP atau Perangkat Lainnya ?
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Tentu saja anda bisa melakukannya. Ada tutorial untuk menghubungkan ke HP atau perangkat lainnya setelah anda login ke webmail. Jikalau ada mengalami kesulitan silahkan hubungi Customer Service kami, maka kami dengan senang hati membantu anda</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Apakah Bisa Menambah Kapasitas Penyimpanan Bersama ?
                            </button>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Mohon maaf, kami tidak menyediakan paket tersebut. Paket terbesar yang kami sediakan adalah 1TB untuk paket ENTERPRISE diatas itu silahkan berlangganan Eraya Drive untuk memperluas kapasitas penyimpanan anda tanpa batas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="faq-img">
                    <img src="{{asset('template_v1/img/default/faq-img1.png')}}" alt="faq">
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-xl-block" style="top: 5%;">
        <div class="star"></div>
    </div>
    <div class="shape-mockup d-xl-block" style="bottom: 0%;right: 0%;"><img style="z-index: -1;" src="{{ asset('template_v1/img/shep/hero-world-shep.png') }}" alt="shapes"></div>
</section>
@endsection
@section('css_load')
<link rel="stylesheet" href="{{ asset('template_v1/sass/template/meteor.css') }}">
<style>
.vs-btn{
    border-radius: 20px;
}
.brand-item-oke {
    background-color: white !important;
    padding: 35px 40px;
    border-radius: 20px;
    height: auto;
    max-width: 240px;
    width: 100%;
    text-align: center;
    cursor: pointer;
    margin: auto;
}
.brand-item-oke img {
    transition: all 0.5s ease;
}
</style>
@endsection
@section('js_load')
<script>
$(document).ready(function () {
    $(".price-layout2 .package-style1 .shep-btn svg path").removeAttr("fill");
    $(".package-style1 .shep-btn svg path").attr("fill", "var(--body-bg) !important");
});
</script>
@endsection