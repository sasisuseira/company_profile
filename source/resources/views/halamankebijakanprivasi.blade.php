@extends('templatebody')
@section('konten_utama')
<div class="hero-layout1 style2" data-bg-src="{{ asset('template_v1/img/hero/hero-bg-2-1.jpg') }}" style="padding:70px 0 40px">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="hero-content text-center">
                    <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-3">
                        <ol class="breadcrumb mb-0" style="background:rgba(255,255,255,.08);border-radius:30px;padding:8px 22px">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color:#9fd8ff;text-decoration:none">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color:#fff">Kebijakan Privasi</li>
                        </ol>
                    </nav>
                    <div class="title-area text-center">
                        <span class="sec-subtitle">Legal • Terakhir diperbarui: 6 Oktober 2026 • Mengacu UU PDP No. 27/2022</span>
                        <h1 class="sec-title h1 mb-20">Kebijakan <span>Privasi</span></h1>
                        <p class="sec-text" style="max-width:720px;margin:0 auto">Bagaimana PT. Eraya Digital Solusindo mengumpulkan, menggunakan, menyimpan, dan melindungi data pribadi Anda di website, aplikasi, layanan AI, IoT, dan ERP.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="space" style="padding:60px 0">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div data-toc style="background:#fff;border:1px solid #e6efff;border-radius:20px;padding:26px;position:sticky;top:100px">
                    <h4 class="h6 mb-3" style="font-weight:800">Daftar Isi</h4>
                    <ol class="mb-3" style="font-size:14px;line-height:2;color:#334155;padding-left:18px">
                        <li><a href="#q1">Pengendali Data</a></li>
                        <li><a href="#q2">Data yang Dikumpulkan</a></li>
                        <li><a href="#q3">Tujuan & Dasar Hukum</a></li>
                        <li><a href="#q4">Data Pembayaran</a></li>
                        <li><a href="#q5">Berbagi Data</a></li>
                        <li><a href="#q6">Penyimpanan & Retensi</a></li>
                        <li><a href="#q7">Keamanan</a></li>
                        <li><a href="#q8">Hak Anda (Subjek Data)</a></li>
                        <li><a href="#q9">Cookies</a></li>
                        <li><a href="#q10">Kontak & Pengaduan</a></li>
                    </ol>
                    <div style="background:#f0f9ff;border-radius:14px;padding:14px;font-size:13px;color:#475569">
                        Dokumen terkait:<br>
                        <a href="{{ route('legal.syarat') }}">Syarat & Ketentuan</a> •
                        <a href="{{ route('legal.refund') }}">Kebijakan Pengembalian Dana</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <article style="background:#fff;border:1px solid #eef2f7;border-radius:20px;padding:36px;line-height:1.8;font-size:15px;color:#334155">
                    <h2 id="q1" class="h5" style="font-weight:800">1. Pengendali Data Pribadi</h2>
                    <p><strong>PT. Eraya Digital Solusindo</strong> bertindak sebagai Pengendali Data Pribadi sesuai UU No. 27 Tahun 2022 tentang Pelindungan Data Pribadi (UU PDP).</p>
                    <p>Kantor Pusat: Gedung Graha Krama Yudha Lt. 4 Unit B, Jl. Hj. Tutty Alawiyah No. 43, Duren Tiga, Pancoran, Jakarta Selatan 12760. Cabang: Jl. Tarupala Gang 2 No. 2, Kebonagung, Pakisaji, Malang 65165. Email perlindungan data: <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a> subjek "Permintaan Data Pribadi".</p>

                    <h2 id="q2" class="h5 mt-4" style="font-weight:800">2. Jenis Data yang Kami Kumpulkan</h2>
                    <ul>
                        <li><strong>Identitas & kontak:</strong> nama, NIK/NPWP (untuk invoice bila diminta), email, nomor HP/WhatsApp, nama perusahaan/instansi, alamat penagihan.</li>
                        <li><strong>Data layanan:</strong> kebutuhan proyek, histori konsultasi, kredensial teknis yang Anda berikan untuk pengerjaan (termasuk akses SSH/VPN untuk DevOps, file Excel untuk migrasi ERP), data sensor IoT / data training AI yang Anda unggah (untuk layanan Coming Soon setelah launching).</li>
                        <li><strong>Data transaksi:</strong> nomor invoice, nominal, metode pembayaran, status settlement (kami <em>tidak menyimpan</em> nomor kartu / PIN / OTP — diproses langsung oleh payment gateway).</li>
                        <li><strong>Data teknis:</strong> alamat IP, lokasi umum, jenis perangkat/browser, log akses untuk keamanan dan analitik.</li>
                        <li><strong>Data newsletter:</strong> email yang Anda daftarkan (dapat berhenti berlangganan kapan saja).</li>
                    </ul>

                    <h2 id="q3" class="h5 mt-4" style="font-weight:800">3. Tujuan & Dasar Hukum Pemrosesan</h2>
                    <p>Data diproses atas dasar <strong>persetujuan Anda, pelaksanaan kontrak, dan kewajiban hukum</strong> untuk: (a) menanggapi konsultasi dan melaksanakan proyek (termasuk bedah proses ERP, health-check DevOps, dan pop-up Coming Soon untuk AI/IoT/UMKM); (b) memproses pembayaran dan menerbitkan invoice/faktur pajak; (c) mengaktifkan dan memelihara langganan; (d) meningkatkan keamanan dan kualitas layanan; (e) mengirim info layanan (dapat opt-out); (f) memenuhi kewajiban perpajakan dan penegakan hukum.</p>

                    <h2 id="q4" class="h5 mt-4" style="font-weight:800">4. Data Pembayaran</h2>
                    <p>Pembayaran kartu/VA/QRIS/e-wallet diproses oleh payment gateway berizin Bank Indonesia melalui koneksi terenkripsi (TLS). Kami hanya menerima token status pembayaran (berhasil/gagal) dan tidak pernah meminta OTP/PIN/CVV. Bukti bayar disimpan sebagai arsip keuangan sesuai ketentuan perpajakan Indonesia (minimal 10 tahun).</p>

                    <h2 id="q5" class="h5 mt-4" style="font-weight:800">5. Dengan Siapa Data Dibagikan</h2>
                    <ul>
                        <li>Tim internal dan mitra tepercaya (penyedia cloud/server, payment gateway, penyedia perangkat IoT) <strong>sejauh diperlukan</strong> untuk menjalankan layanan, dengan perjanjian kerahasiaan.</li>
                        <li>Aparat penegak hukum / otoritas pajak bila diwajibkan peraturan Indonesia.</li>
                        <li>Kami <strong>tidak menjual atau menyewakan</strong> data pribadi Anda. Transfer data ke luar Indonesia (bila ada, mis. infrastruktur cloud) dilakukan dengan perlindungan setara UU PDP.</li>
                    </ul>

                    <h2 id="q6" class="h5 mt-4" style="font-weight:800">6. Penyimpanan & Masa Retensi</h2>
                    <p>Data disimpan di server dengan akses terbatas, berlokasi di Indonesia / cloud dengan standar keamanan setara. Data proyek aktif disimpan selama kontrak + 2 tahun untuk garansi dan audit. Data keuangan disimpan sesuai ketentuan pajak. Setelah masa retensi berakhir atau atas permintaan penghapusan yang disetujui, data dihapus/anonymisasi secara aman.</p>

                    <h2 id="q7" class="h5 mt-4" style="font-weight:800">7. Keamanan</h2>
                    <p>Kami menerapkan kontrol akses berbasis peran, enkripsi saat transit dan tersimpan, pencatatan log, firewall/WAF, backup rutin, dan praktik DevOps Security. Seluruh informasi konsultasi — tertulis maupun digital — kami jaga kerahasiaannya 100%. Jika terjadi kebocoran data, kami akan memberitahu Anda dan otoritas sesuai UU PDP maksimal 3×24 jam setelah terkonfirmasi.</p>

                    <h2 id="q8" class="h5 mt-4" style="font-weight:800">8. Hak Anda sebagai Subjek Data</h2>
                    <p>Sesuai UU PDP, Anda berhak: meminta akses/portabilitas, koreksi, penarikan persetujuan, penghapusan/pemusnahan, dan mengajukan keberatan atas pemrosesan/keputusan otomatis (termasuk output AI). Ajukan via email di atas dengan melampirkan identitas dan nomor invoice/ID layanan. Kami memproses maksimal 14 hari kerja dan dapat menolak bila bertentangan dengan kewajiban hukum (mis. arsip pajak).</p>

                    <h2 id="q9" class="h5 mt-4" style="font-weight:800">9. Cookies & Analitik</h2>
                    <p>Website menggunakan cookies fungsional dan analitik anonim untuk tampilan dan statistik kunjungan. Anda dapat menonaktifkannya via pengaturan browser. Kami tidak menggunakan pelacakan lintas situs untuk iklan tanpa persetujuan.</p>

                    <h2 id="q10" class="h5 mt-4" style="font-weight:800">10. Anak, Perubahan & Pengaduan</h2>
                    <p>Layanan ditujukan untuk pengguna 18+ atau dengan persetujuan orang tua/wali. Perubahan kebijakan dipublikasikan di halaman ini. Keberatan dapat disampaikan ke kontak di atas, atau ke lembaga penyelesaian sengketa konsumen / otoritas PDP Indonesia.</p>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
@section('css_load')
<link rel="stylesheet" href="{{ asset('template_v1/sass/template/meteor.css') }}">
<style>.vs-btn{border-radius:20px}article a{color:#025FCA}article h2{scroll-margin-top:110px}html{scroll-behavior:smooth}article h2[id]{scroll-margin-top:110px}</style>
@endsection
@section('js_load')
<script>
document.addEventListener('DOMContentLoaded',function(){
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click',function(e){
      var hash=a.getAttribute('href');
      if(hash && hash.length>1){
        var el=document.querySelector(hash);
        if(el){e.preventDefault();el.scrollIntoView({behavior:'smooth',block:'start'});history.replaceState(null,'',location.pathname+location.search);}
      }
    });
  });
});
</script>
@endsection
