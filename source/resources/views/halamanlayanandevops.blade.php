@extends('templatebody')
@section('konten_utama')
{{-- ===== HERO NOC: status operasional, beda konsep dari ERP ===== --}}
<div style="background:radial-gradient(1200px 500px at 50% -10%,#12325e 0%,#0b1220 60%);padding:70px 0 50px;position:relative;overflow:hidden">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-3">
            <ol class="breadcrumb mb-0" style="background:rgba(255,255,255,.08);border-radius:30px;padding:8px 22px">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color:#9fd8ff;text-decoration:none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/#layanan_kami') }}" style="color:#9fd8ff;text-decoration:none">Layanan</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color:#fff">{{ $layanan['badge'] }}</li>
            </ol>
        </nav>
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(62,201,100,.14);border:1px solid rgba(62,201,100,.5);color:#7CFC9A;font-weight:700;font-size:12px;letter-spacing:.1em;padding:7px 14px;border-radius:30px"><span style="width:9px;height:9px;border-radius:50%;background:#3EC964;box-shadow:0 0 0 4px rgba(62,201,100,.2);display:inline-block"></span> NOC • SEMUA SISTEM OPERASIONAL</span>
                <h1 class="mt-3" style="color:#fff;font-weight:800;letter-spacing:-.03em;line-height:1.15">{!! str_replace($layanan['judul_span'], '<span style="color:#3EC964">'.$layanan['judul_span'].'</span>', e($layanan['judul'])) !!}</h1>
                <p class="mt-3" style="color:#C4D3E8;max-width:560px">{{ $layanan['subjudul'] }}</p>
                <p class="mt-1" style="color:#8FA3BD;font-size:14px">⭐ {{ $layanan['rating'] }} • {{ $layanan['deskripsi'] }}</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}" class="vs-btn">🩺 Minta Health Check Gratis</a>
                    <a href="#paket-devops" class="vs-btn style2">Lihat Paket Jaga</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div style="background:#0e1a30;border:1px solid #1e3a63;border-radius:20px;overflow:hidden">
                    <div class="d-flex justify-content-between align-items-center" style="padding:14px 18px;border-bottom:1px solid #1e3a63">
                        <strong style="color:#fff;font-size:14px">● ● ● &nbsp; live-status.erayadigital.co.id</strong>
                        <span style="font-size:12px;color:#7CFC9A">● LIVE</span>
                    </div>
                    <div style="padding:8px 0">
                        @foreach([['Web / Company Profile','99,98% • 12ms'],['Server & VPS','99,95% • aman'],['Database','Backup OK • 02.00'],['Jaringan & WiFi','Stabil • 100+ user']] as $s)
                        <div class="d-flex justify-content-between align-items-center" style="padding:12px 18px;border-bottom:1px solid #15294a">
                            <span style="color:#DCE7F7;font-size:14px"><span style="width:8px;height:8px;border-radius:50%;background:#3EC964;display:inline-block;margin-right:8px"></span>{{ $s[0] }}</span>
                            <span style="color:#7CFC9A;font-size:13px;font-family:monospace">{{ $s[1] }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="row g-2" style="padding:16px 18px">
                        @foreach($layanan['stats'] as $st)
                        <div class="col-4 text-center" style="background:#13263f;border-radius:12px;padding:12px 6px">
                            <div style="color:#fff;font-weight:800;font-size:17px">{{ $st['angka'] }}</div>
                            <div style="color:#8FA3BD;font-size:11px">{{ $st['label'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== LOG INSIDEN: beda dari kartu pain ERP ===== --}}
<section style="padding:60px 0 10px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="sec-subtitle">Log Insiden Nyata</span>
                <h2 class="sec-title">{{ $layanan['masalah_judul'] }}</h2>
                <p style="color:#C4D3E8">Ini yang kami cegah tiap hari. Setiap baris di bawah = kejadian yang tidak perlu Anda alami.</p>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-10">
                <div style="background:#0b1526;border:1px solid #1e3a63;border-radius:18px;overflow:hidden;font-family:monospace;font-size:13.5px">
                    <div style="padding:12px 18px;border-bottom:1px solid #1e3a63;color:#8FA3BD">$ tail -f /var/log/noc-insiden.log</div>
                    <div style="padding:18px">
                        @foreach($layanan['masalah'] as $i => $m)
                        <div class="mb-3" style="line-height:1.7">
                            <span style="color:#5b6b7f">[02:1{{ $i }}:0{{ $i }}]</span>
                            <span style="color:#ff7b7b">ALERT</span>
                            <span style="color:#DCE7F7">{{ $m['judul'] }} — {{ $m['teks'] }}</span><br>
                            <span style="color:#5b6b7f">└─&gt;</span>
                            <span style="color:#7CFC9A">AUTO-MITIGASI: {{ $loop->index===0 ? 'failover + notif WA < 5 mnt' : ($loop->index===1 ? 'restore backup harian terverifikasi' : ($loop->index===2 ? 'engineer on-call ambil alih' : 'isolasi + bersih malware + hardening')) }}</span>
                        </div>
                        @endforeach
                        <div style="color:#FFA41C">✓ {{ $layanan['solusi_judul'] }} — <span style="color:#C4D3E8">{{ $layanan['solusi_teks'] }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== COVERAGE 24/7: panel NOC, bukan grid fitur ERP ===== --}}
<section style="padding:50px 0 10px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="sec-subtitle">Coverage 24/7</span>
                <h2 class="sec-title">{{ $layanan['fitur_judul'] }}</h2>
            </div>
        </div>
        <div class="row g-3 mt-2">
            @foreach($layanan['fitur'] as $f)
            <div class="col-lg-4 col-md-6">
                <div class="h-100" style="background:#0e1a30;border:1px solid #1e3a63;border-left:4px solid #3EC964;border-radius:14px;padding:22px">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="{{ $f['icon'] }}" style="color:#3EC964;font-size:20px"></i>
                        <h4 class="h6 mb-0" style="color:#fff;font-weight:700">{{ $f['judul'] }}</h4>
                    </div>
                    <p class="mb-0" style="color:#A9BCD4;font-size:14px">{{ $f['teks'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== SLA + ALUR PIPELINE ===== --}}
<section style="padding:50px 0">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-5">
                <div style="background:linear-gradient(135deg,#0b3b7a,#0ea5e9);border-radius:20px;padding:30px;color:#fff;height:100%">
                    <h3 class="h5" style="color:#fff;font-weight:800">SLA Kami, Tertulis</h3>
                    <div class="mt-3" style="display:grid;gap:10px;font-size:14px">
                        <div style="background:rgba(255,255,255,.12);border-radius:12px;padding:12px 16px">⏱️ Respon insiden kritis <strong>&lt; 1 jam</strong></div>
                        <div style="background:rgba(255,255,255,.12);border-radius:12px;padding:12px 16px">🛠️ Target pulih kritis <strong>&lt; 4 jam</strong></div>
                        <div style="background:rgba(255,255,255,.12);border-radius:12px;padding:12px 16px">📈 Uptime terjaga <strong>99,9%</strong> + laporan bulanan</div>
                        <div style="background:rgba(255,255,255,.12);border-radius:12px;padding:12px 16px">💾 Backup harian dicek + restore diuji bulanan</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h3 class="h5 mb-3" style="color:#fff;font-weight:800">Alur Kerja: Dari Berantakan ke Aman dalam 7 Hari</h3>
                <div style="display:grid;gap:10px">
                    @foreach($layanan['langkah'] as $i => $l)
                    <div class="d-flex gap-3 align-items-start" style="background:#0e1a30;border:1px solid #1e3a63;border-radius:14px;padding:16px 18px">
                        <span style="flex:0 0 36px;width:36px;height:36px;border-radius:50%;background:#0ea5e9;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center">{{ $i+1 }}</span>
                        <div>
                            <strong style="color:#fff">{{ $l['judul'] }}</strong>
                            <p class="mb-0" style="color:#A9BCD4;font-size:14px">{{ $l['teks'] }}</p>
                        </div>
                        @if(!$loop->last)<span class="d-none">→</span>@endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== PAKET ===== --}}
<section id="paket-devops" style="padding:10px 0 60px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="sec-subtitle">Flat Bulanan, Tanpa Biaya Siluman</span>
                <h2 class="sec-title">Pilih Level Penjagaan</h2>
            </div>
        </div>
        <div class="row g-4 align-items-stretch mt-1">
            @foreach($layanan['paket'] as $p)
            <div class="col-xl-4 col-md-6">
                <div class="package-style1 h-100 {{ $p['unggulan'] ? 'active' : '' }}" style="height:100%">
                    @if($p['unggulan'])<div class="text-center mb-2"><span style="background:#f59e0b;color:#fff;font-size:12px;font-weight:800;padding:6px 16px;border-radius:20px">🛡️ PALING DIPAKAI</span></div>@endif
                    <div class="package-top">
                        <h3 class="package-name h4">{{ $p['nama'] }}</h3>
                        <p class="package-text">{{ $p['deskripsi'] }}</p>
                        <p class="package-price">{{ $p['harga'] }}<span class="duration"> {{ $p['durasi'] }}</span></p>
                    </div>
                    <div class="package-body">
                        <div class="list-style1"><ul class="list-unstyled">@foreach($p['fitur'] as $pf)<li><span class="icon"><i class="fa-solid fa-shield-check"></i></span>{{ $pf }}</li>@endforeach</ul></div>
                        <div class="price-btn"><a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}&paket={{ urlencode($p['nama']) }}" class="vs-btn">{{ $p['harga'] === 'Hubungi Kami' ? 'Minta Penawaran' : 'Ambil Paket Ini' }}</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-center mt-3" style="font-size:13px;color:#8FA3BD">💡 Kontrak bulanan, tanpa ikatan. Tahunan gratis 2 bulan + prioritas rescue. Invoice PT + NDA standar.</p>
    </div>
</section>

{{-- ===== KENAPA (tanpa testimoni) ===== --}}
<section class="space-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sec-subtitle2">Kenapa Eraya?</span>
                    <h2 class="sec-title">Yang Jagain Orang Beneran, Bukan Sekadar Tools</h2>
                </div>
                <ul class="list-unstyled" style="display:grid;gap:12px">
                    @foreach($layanan['kenapa'] as $k)
                    <li style="background:#f0f9ff;border:1px solid #d9ecff;border-radius:14px;padding:12px 16px;font-size:15px;color:#1B2841 !important"><i class="fa-solid fa-circle-check" style="color:#0ea5e9"></i> {{ $k }}</li>
                    @endforeach
                </ul>
                <div class="d-flex gap-3 flex-wrap mt-4 justify-content-center">
                    <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}" class="vs-btn">Chat WhatsApp Sekarang</a>
                    <a href="{{ url('/#layanan_kami') }}" class="vs-btn style2">← Lihat Layanan Lain</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== FAQ ===== --}}
<section class="faq-layout1 bg-body2 space" style="padding:60px 0">
    <div class="container">
        <div class="row justify-content-center"><div class="col-lg-8"><div class="title-area text-center"><span class="sec-subtitle">FAQS</span><h2 class="sec-title">Ditanyakan Pemberani Sebelum Down</h2></div></div></div>
        <div class="row justify-content-center"><div class="col-lg-8">
            <div class="accordion accordion-style1" id="faqDevops">
                @foreach($layanan['faq'] as $i => $f)
                <div class="accordion-item">
                    <div class="accordion-header" id="dh{{ $i }}"><button class="accordion-button {{ $i!==0?'collapsed':'' }}" type="button" data-bs-toggle="collapse" data-bs-target="#dc{{ $i }}" aria-expanded="{{ $i===0?'true':'false' }}">{{ $f['q'] }}</button></div>
                    <div id="dc{{ $i }}" class="accordion-collapse collapse {{ $i===0?'show':'' }}" data-bs-parent="#faqDevops"><div class="accordion-body"><p>{{ $f['a'] }}</p></div></div>
                </div>
                @endforeach
            </div>
        </div></div>
    </div>
</section>

{{-- ===== CTA ===== --}}
<section style="padding:0 0 60px">
    <div class="container">
        <div style="background:linear-gradient(135deg,#052e16,#15803d);border-radius:28px;padding:48px 36px;text-align:center;color:#fff">
            <span style="display:inline-flex;background:#FFA41C;color:#1B2841;font-weight:800;font-size:13px;padding:8px 18px;border-radius:30px">🩺 FREE HEALTH-CHECK Rp 500rb</span>
            <h2 class="h2 mt-2 mb-3" style="color:#fff;font-weight:800">{{ $layanan['cta_judul'] }}</h2>
            <p style="max-width:640px;margin:0 auto 24px;color:#dcfce7">{{ $layanan['cta_teks'] }}</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('layanan.hubungi_kami') }}?layanan={{ $layanan['slug'] }}" class="vs-btn" style="background:#fff;color:#052e16">Klaim Health Check Saya</a>
                <a href="{{ url('/#layanan_kami') }}" style="color:#fff;text-decoration:underline;align-self:center">atau jelajahi layanan lain →</a>
            </div>
        </div>
        @if(count($terkait))
        <div class="row justify-content-center mt-5"><div class="col-lg-8"><div class="title-area text-center"><span class="sec-subtitle">Lanjut Kepo?</span><h3 class="sec-title h3">Layanan Lain Yang Bikin Tenang</h3></div></div></div>
        <div class="row g-4">
            @foreach($terkait as $t)
            <div class="col-lg-4 col-md-6"><div class="service-wrap"><div class="service-style1"><div class="service-body"><img src="{{ asset('template_v1/img/icon/'.$t['icon']) }}" alt="icon" style="height:64px"><h2 class="service-title h6 text-center"><a href="{{ route('layanan.detail', $t['slug']) }}">{{ $t['badge'] }}</a></h2><p class="service-text text-center">{{ \Illuminate\Support\Str::limit($t['subjudul'], 110) }}</p></div><a href="{{ route('layanan.detail', $t['slug']) }}" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a></div></div></div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endsection
@section('css_load')
<link rel="stylesheet" href="{{ asset('template_v1/sass/template/meteor.css') }}">
<style>.vs-btn{border-radius:20px}.vs-btn.style2{background:#fff;color:#0b3b7a}.breadcrumb-item+.breadcrumb-item::before{color:#9fd8ff}.accordion-button:not(.collapsed){background:#15803d;color:#fff}html{scroll-behavior:smooth}</style>
@endsection
