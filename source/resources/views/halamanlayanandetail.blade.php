@extends('templatebody')
@section('konten_utama')
{{-- ===== HERO DETAIL LAYANAN ===== --}}
<div class="hero-layout1 style2" data-bg-src="{{ asset('template_v1/img/hero/hero-bg-2-1.jpg') }}" style="padding:70px 0 40px">
    <div class="container position-relative">
        <div class="row g-5 align-items-center justify-content-center">
            <div class="col-lg-9">
                <div class="hero-content text-center">
                    <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-3">
                        <ol class="breadcrumb mb-0" style="background:rgba(255,255,255,.08);border-radius:30px;padding:8px 22px;backdrop-filter:blur(6px)">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color:#9fd8ff;text-decoration:none">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/#layanan_kami') }}" style="color:#9fd8ff;text-decoration:none">Layanan</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color:#fff">{{ $layanan['badge'] }}</li>
                        </ol>
                    </nav>
                    <div class="title-area text-center">
                        <span class="sec-subtitle">{{ $layanan['badge'] }} &nbsp;•&nbsp; ⭐ {{ $layanan['rating'] }}</span>
                        <h1 class="sec-title h1 mb-20">{!! str_replace($layanan['judul_span'], '<span>'.$layanan['judul_span'].'</span>', e($layanan['judul'])) !!}</h1>
                        <p class="sec-text" style="max-width:720px;margin:0 auto">{{ $layanan['subjudul'] }}</p>
                    </div>
                    <div class="hero-bottom d-flex gap-3 justify-content-center flex-wrap mt-4">
                        <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}" class="vs-btn">🔥 Konsultasi Gratis Sekarang</a>
                        <a href="#paket-{{ $layanan['slug'] }}" class="vs-btn style2">Lihat Paket & Harga</a>
                    </div>
                    <div class="d-flex gap-4 justify-content-center flex-wrap mt-4" style="color:#cfe8ff;font-size:14px">
                        <span><i class="fa-solid fa-shield-check"></i> Garansi Tertulis</span>
                        <span><i class="fa-solid fa-headset"></i> Support Fast Respon</span>
                        <span><i class="fa-solid fa-file-contract"></i> Kontrak & NDA Jelas</span>
                    </div>
                    {{-- STATS --}}
                    <div class="row g-3 mt-4 justify-content-center">
                        @foreach($layanan['stats'] as $st)
                        <div class="col-md-4 col-12">
                            <div style="background:rgba(255,255,255,.09);border:1px solid rgba(255,255,255,.15);border-radius:18px;padding:18px 12px;backdrop-filter:blur(8px)">
                                <h3 class="mb-1" style="color:#fff;font-weight:800;font-size:28px">{{ $st['angka'] }}</h3>
                                <p class="mb-0" style="color:#cfe8ff;font-size:14px">{{ $st['label'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-xl-block" style="bottom:0"><img src="{{ asset('template_v1/img/shep/hero-world-shep.png') }}" alt="shapes"></div>
</div>

{{-- ===== MASALAH (PAIN) ===== --}}
<section class="space" style="padding:70px 0 30px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sec-subtitle">Jujur-Jujuran Dulu 😅</span>
                    <h2 class="sec-title">{{ $layanan['masalah_judul'] }}</h2>
                    <p class="sec-text">Kalau 2 dari 4 ini kamu alami, halaman ini memang buat kamu. Kabar baiknya: semua ada obatnya.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($layanan['masalah'] as $i => $m)
            <div class="col-lg-3 col-md-6">
                <div class="service-style1 h-100" style="background:#fff;border:1px solid #eef2f7;border-radius:20px;padding:28px 22px;position:relative;overflow:hidden;height:100%">
                    <div style="width:44px;height:44px;border-radius:12px;background:#ffe8e8;color:#e11d48;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:18px;margin-bottom:14px">0{{ $i+1 }}</div>
                    <h4 class="h6 mb-2" style="font-weight:700">❌ {{ $m['judul'] }}</h4>
                    <p class="mb-0" style="font-size:14px;color:#5b6b7f">{{ $m['teks'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10">
                <div style="background:linear-gradient(135deg,#0ea5e9,#6366f1);border-radius:20px;padding:30px;color:#fff;position:relative;overflow:hidden">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-8">
                            <h3 class="h4 mb-2" style="color:#fff;font-weight:800">{{ $layanan['solusi_judul'] }}</h3>
                            <p class="mb-0" style="color:#e8f3ff">{{ $layanan['solusi_teks'] }}</p>
                        </div>
                        <div class="col-lg-4 text-lg-end text-center">
                            <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}" class="vs-btn" style="background:#fff;color:#0b3b7a">Saya Mau Beres! →</a>
                            <p class="mb-0 mt-2" style="font-size:12px;color:#dceaff">Tanpa komitmen • Dijawab < 1 jam kerja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== FITUR ===== --}}
<section class="space-bottom" style="padding-bottom:60px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sec-subtitle">Isi Paketnya Daging Semua 🥩</span>
                    <h2 class="sec-title">{{ $layanan['fitur_judul'] }}</h2>
                    <p class="sec-text">{{ $layanan['deskripsi'] }}</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($layanan['fitur'] as $f)
            <div class="col-lg-4 col-md-6">
                <div class="h-100" style="background:#f8fbff;border:1px solid #e6efff;border-radius:20px;padding:28px;transition:.3s" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 18px 40px rgba(14,165,233,.18)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    <div style="width:52px;height:52px;border-radius:14px;background:#0ea5e9;color:#fff;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:14px"><i class="{{ $f['icon'] }}"></i></div>
                    <h4 class="h6 mb-2" style="font-weight:800">{{ $f['judul'] }}</h4>
                    <p class="mb-0" style="font-size:14px;color:#4b5b70">{{ $f['teks'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CARA KERJA ===== --}}
<section class="space-bottom" style="background:#0b1220;padding:60px 0;position:relative;overflow:hidden">
    <div class="container position-relative" style="z-index:2">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sec-subtitle2">Anti PHP (Pemberi Harapan Palsu)</span>
                    <h2 class="sec-title" style="color:#fff">Cara Kerja Kami: Transparan, Rapi, Terpantau</h2>
                    <p style="color:#a8b8cc">Kamu tahu progres tiap minggu. Nggak ada cerita “tiba-tiba hilang 3 bulan”.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($layanan['langkah'] as $i => $l)
            <div class="col-lg-3 col-md-6">
                <div style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);border-radius:20px;padding:24px;height:100%">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span style="background:#0ea5e9;color:#fff;font-weight:800;border-radius:50%;width:38px;height:38px;display:flex;align-items:center;justify-content:center">{{ $i+1 }}</span>
                        <span style="color:#7dd3fc;font-size:13px;font-weight:700">STEP {{ $i+1 }}</span>
                    </div>
                    <h4 class="h6" style="color:#fff;font-weight:800">{{ $l['judul'] }}</h4>
                    <p class="mb-0" style="color:#b9c7da;font-size:14px">{{ $l['teks'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <p style="color:#7dd3fc;font-size:14px">⏱️ Rata-rata klien merasa “loh kok enak?” di minggu ke-2</p>
        </div>
    </div>
    <div id="particles-detail" style="position:absolute;inset:0;opacity:.35"></div>
</section>

{{-- ===== PAKET HARGA ===== --}}
<section id="paket-{{ $layanan['slug'] }}" class="space" style="padding:70px 0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sec-subtitle">Investasi, Bukan Biaya 💰</span>
                    <h2 class="sec-title">Pilih Paket Paling Masuk Akal Buatmu</h2>
                    <p class="sec-text">Harga transparan di depan. Kalau butuh custom, tinggal chat — proposal + timeline kami kirim < 24 jam.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 align-items-stretch">
            @foreach($layanan['paket'] as $p)
            <div class="col-xl-4 col-md-6">
                <div class="package-style1 h-100 {{ $p['unggulan'] ? 'active' : '' }}" style="height:100%">
                    @if($p['unggulan'])
                    <div class="text-center mb-2"><span style="background:#f59e0b;color:#fff;font-size:12px;font-weight:800;padding:6px 16px;border-radius:20px">🔥 PALING LARIS</span></div>
                    @endif
                    <div class="package-top">
                        <h3 class="package-name h4">{{ $p['nama'] }}</h3>
                        <p class="package-text">{{ $p['deskripsi'] }}</p>
                        <p class="package-price">{{ $p['harga'] }}<span class="duration"> {{ $p['durasi'] }}</span></p>
                    </div>
                    <div class="package-body">
                        <div class="list-style1">
                            <ul class="list-unstyled">
                                @foreach($p['fitur'] as $pf)
                                <li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>{{ $pf }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}&paket={{ urlencode($p['nama']) }}" class="vs-btn">{{ $p['harga'] === 'Hubungi Kami' ? 'Minta Penawaran' : 'Ambil Paket Ini' }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-center mt-3" style="font-size:13px;color:#6b7d93">💡 Semua paket termasuk kontrak tertulis + invoice resmi PT. Bisa cicil termin. Butuh NPWP / e-faktur? Bisa.</p>
    </div>
</section>

{{-- ===== KENAPA KAMI + TESTIMONI ===== --}}
<section class="space-bottom">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="title-area text-left">
                    <span class="sec-subtitle2">Kenapa Eraya?</span>
                    <h2 class="sec-title">Vendor Boleh Banyak, Yang Amanah & Nempel Terus Cuma Kami 😎</h2>
                </div>
                <ul class="list-unstyled" style="display:grid;gap:12px">
                    @foreach($layanan['kenapa'] as $k)
                    <li style="background:#f0f9ff;border:1px solid #d9ecff;border-radius:14px;padding:12px 16px;font-size:15px"><i class="fa-solid fa-circle-check" style="color:#0ea5e9"></i> {{ $k }}</li>
                    @endforeach
                </ul>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="{{ route('layanan.hubungi_kami') }}" class="vs-btn">Chat WhatsApp Sekarang</a>
                    <a href="{{ url('/#layanan_kami') }}" class="vs-btn style2">← Lihat Layanan Lain</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background:#0b1220;border-radius:24px;padding:36px;color:#fff;position:relative;overflow:hidden">
                    <div style="font-size:46px;line-height:1">“</div>
                    <p style="font-size:18px;line-height:1.7;color:#e8f3ff">{{ $layanan['testimoni']['teks'] }}</p>
                    <div class="d-flex align-items-center gap-3 mt-3">
                        <img src="https://api.dicebear.com/9.x/initials/png?seed={{ urlencode($layanan['testimoni']['nama']) }}&backgroundColor=0ea5e9" alt="testimoni" style="width:52px;height:52px;border-radius:50%;background:#fff">
                        <div>
                            <strong>{{ $layanan['testimoni']['nama'] }}</strong><br>
                            <small style="color:#93a7be">{{ $layanan['testimoni']['jabatan'] }}</small>
                            <div style="color:#fbbf24;font-size:13px">★★★★★ Terverifikasi</div>
                        </div>
                    </div>
                    <div class="mt-4" style="background:rgba(255,255,255,.08);border-radius:14px;padding:14px 16px;font-size:13px;color:#c6d6e8">
                        📌 <strong>Garansi kami:</strong> kalau di 14 hari pertama kamu merasa tidak cocok (sebelum production), kami kembalikan DP 100%. Tanpa drama.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== FAQ ===== --}}
<section class="faq-layout1 bg-body2 space" style="padding:60px 0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sec-subtitle">FAQS</span>
                    <h2 class="sec-title">Yang Sering Ditanyakan (Biar Nggak Overthinking)</h2>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-60">
            <div class="col-lg-8">
                <div class="accordion accordion-style1" id="faqDetail">
                    @foreach($layanan['faq'] as $i => $f)
                    <div class="accordion-item">
                        <div class="accordion-header" id="hd{{ $i }}">
                            <button class="accordion-button {{ $i !== 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#cl{{ $i }}" aria-expanded="{{ $i===0 ? 'true' : 'false' }}" aria-controls="cl{{ $i }}">{{ $f['q'] }}</button>
                        </div>
                        <div id="cl{{ $i }}" class="accordion-collapse collapse {{ $i===0 ? 'show' : '' }}" aria-labelledby="hd{{ $i }}" data-bs-parent="#faqDetail">
                            <div class="accordion-body"><p>{{ $f['a'] }}</p></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background:#fff;border-radius:20px;padding:28px;border:1px solid #e6efff;text-align:center;position:sticky;top:100px">
                    <img src="{{ asset('template_v1/img/default/faq-img1.png') }}" alt="faq" style="max-width:180px">
                    <h4 class="h5 mt-3">Masih Ragu? Tanya Dulu Aja.</h4>
                    <p style="font-size:14px;color:#5b6b7f">Gratis 30 menit. Nggak closing maksa. Kalau nggak cocok, minimal kamu pulang bawa blueprint.</p>
                    <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}" class="vs-btn w-100">Tanya via WhatsApp</a>
                    <p class="mt-2 mb-0" style="font-size:12px;color:#8496ac">Dibalas < 1 jam di jam kerja</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== CTA FINAL ===== --}}
<section style="padding:0 0 60px">
    <div class="container">
        <div style="background:linear-gradient(135deg,#0b3b7a,#0ea5e9);border-radius:28px;padding:48px 36px;text-align:center;color:#fff;position:relative;overflow:hidden">
            <h2 class="h2 mb-3" style="color:#fff;font-weight:800">{{ $layanan['cta_judul'] }}</h2>
            <p style="max-width:640px;margin:0 auto 24px;color:#e0f2ff">{{ $layanan['cta_teks'] }}</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}" class="vs-btn" style="background:#fff;color:#0b3b7a">🚀 Amankan Slot Gratis Saya</a>
                <a href="{{ url('/#layanan_kami') }}" style="color:#fff;text-decoration:underline;align-self:center">atau jelajahi layanan lain →</a>
            </div>
            <small class="d-block mt-3" style="color:#c9e7ff">⏳ Promo sesi gratis berlaku untuk 10 pendaftar pertama bulan ini</small>
        </div>

        {{-- LAYANAN TERKAIT --}}
        @if(count($terkait))
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sec-subtitle">Lanjut Kepo? 👀</span>
                    <h3 class="sec-title h3">Layanan Lain Yang Bikin Bisnismu Makin Ngeri</h3>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($terkait as $t)
            <div class="col-lg-4 col-md-6">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <img src="{{ asset('template_v1/img/icon/'.$t['icon']) }}" alt="icon" style="height:64px">
                            <h2 class="service-title h6 text-center"><a href="{{ route('layanan.detail', $t['slug']) }}">{{ $t['badge'] }}</a></h2>
                            <p class="service-text text-center">{{ \Illuminate\Support\Str::limit($t['subjudul'], 110) }}</p>
                        </div>
                        <a href="{{ route('layanan.detail', $t['slug']) }}" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z" fill="none"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endsection
@section('css_load')
<link rel="stylesheet" href="{{ asset('template_v1/sass/template/meteor.css') }}">
<style>
.vs-btn{border-radius:20px}
.breadcrumb-item+.breadcrumb-item::before{color:#9fd8ff}
.accordion-button:not(.collapsed){background:#0ea5e9;color:#fff}
html{scroll-behavior:smooth}
</style>
@endsection
