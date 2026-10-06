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
                            <li class="breadcrumb-item active" aria-current="page" style="color:#fff">Syarat & Ketentuan</li>
                        </ol>
                    </nav>
                    <div class="title-area text-center">
                        <span class="sec-subtitle">Legal • Terakhir diperbarui: 6 Oktober 2026</span>
                        <h1 class="sec-title h1 mb-20">Syarat & <span>Ketentuan</span> Layanan</h1>
                        <p class="sec-text" style="max-width:720px;margin:0 auto">Mengatur pemesanan, pembayaran, pelaksanaan proyek, langganan, dan penggunaan website PT. Eraya Digital Solusindo. Dengan melakukan pembayaran, Anda dianggap telah membaca dan menyetujuinya.</p>
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
                        <li><a href="#p1">Identitas & Definisi</a></li>
                        <li><a href="#p2">Ruang Lingkup Layanan</a></li>
                        <li><a href="#p3">Pemesanan & Penawaran</a></li>
                        <li><a href="#p4">Harga, Pembayaran & Pajak</a></li>
                        <li><a href="#p5">Langganan & Perpanjangan</a></li>
                        <li><a href="#p6">Pelaksanaan & Revisi</a></li>
                        <li><a href="#p7">Kewajiban Pengguna</a></li>
                        <li><a href="#p8">HKI & Kerahasiaan</a></li>
                        <li><a href="#p9">Garansi & Batas Tanggung Jawab</a></li>
                        <li><a href="#p10">Force Majeure</a></li>
                        <li><a href="#p11">Hukum & Penyelesaian Sengketa</a></li>
                        <li><a href="#p12">Kontak</a></li>
                    </ol>
                    <div style="background:#f0f9ff;border-radius:14px;padding:14px;font-size:13px;color:#475569">
                        Dokumen terkait:<br>
                        <a href="{{ route('legal.privasi') }}">Kebijakan Privasi</a> •
                        <a href="{{ route('legal.refund') }}">Kebijakan Pengembalian Dana</a> •
                        <a href="{{ route('layanan.hubungi_kami') }}">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <article style="background:#fff;border:1px solid #eef2f7;border-radius:20px;padding:36px;line-height:1.8;font-size:15px;color:#334155">
                    <h2 id="p1" class="h5" style="font-weight:800">1. Identitas Penyelenggara & Definisi</h2>
                    <p><strong>PT. Eraya Digital Solusindo ("Eraya", "Kami")</strong> adalah perseroan terbatas yang berkedudukan di Indonesia, bergerak di pengembangan aplikasi, ERP, mail server, digitalisasi UMKM, DevOps & maintenance, AI & otomatisasi, dan IoT.</p>
                    <ul>
                        <li><strong>Kantor Pusat:</strong> Gedung Graha Krama Yudha Lt. 4 Unit B, Jl. Hj. Tutty Alawiyah No. 43, Kel. Duren Tiga, Kec. Pancoran, Jakarta Selatan 12760.</li>
                        <li><strong>Kantor Cabang:</strong> Jl. Tarupala Gang 2 No. 2, RT 24 RW 04, Kebonagung, Pakisaji, Kab. Malang, Jawa Timur 65165.</li>
                        <li><strong>Email:</strong> <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a></li>
                        <li><strong>"Pengguna/Klien"</strong> adalah individu, UMKM, perusahaan, atau instansi yang memesan layanan. <strong>"Layanan"</strong> adalah jasa/produk digital yang tercantum di website. <strong>"Payment Gateway"</strong> adalah mitra pembayaran berizin Bank Indonesia yang kami gunakan.</li>
                    </ul>
                    <p>Dasar hukum: UU No. 8/1999 tentang Perlindungan Konsumen, UU No. 19/2016 (ITE), PP No. 80/2019 tentang Perdagangan Melalui Sistem Elektronik, dan UU No. 27/2022 tentang Pelindungan Data Pribadi.</p>

                    <h2 id="p2" class="h5 mt-4" style="font-weight:800">2. Ruang Lingkup Layanan</h2>
                    <p>Layanan <strong>aktif</strong> meliputi: (a) Email profesional / mail server (<code>/layanan/email-profesional</code>); (b) ERP & Sistem Terintegrasi — keuangan, inventory multi-gudang, HRD, pengadaan & approval (<code>/layanan/erp</code>, sebelumnya <code>/layanan/pengembangan-aplikasi</code> yang kini dialihkan permanen/301); (c) DevOps & Maintenance server/website/database/jaringan 24/7 beserta layanan Rescue one-time (<code>/layanan/devops-maintenance</code>). Layanan <strong>Coming Soon</strong> (halaman detail belum dipublish, klik memunculkan pop-up): AI Agentic, IoT & Smart Devices, UMKM Digital. Detail fitur mengacu pada halaman masing-masing layanan dan surat penawaran/invoice yang disepakati.</p>

                    <h2 id="p3" class="h5 mt-4" style="font-weight:800">3. Pemesanan & Penawaran</h2>
                    <ul>
                        <li>Pemesanan dilakukan via website, WhatsApp resmi, email, atau pertemuan. Penawaran (quotation) berlaku 14 hari kalender kecuali dinyatakan lain.</li>
                        <li>Pemesanan sah setelah pembayaran uang muka (DP) / pembayaran lunas terverifikasi dan Klien menerima invoice resmi PT.</li>
                        <li>Klien wajib memberikan data yang benar, lengkap, dan legal (nama, kontak, kebutuhan, akses yang diperlukan). Kesalahan data yang menyebabkan keterlambatan menjadi tanggung jawab Klien.</li>
                        <li>Tahapan kerja standar: Konsultasi → Metode & Pengerjaan → Revisi & Penyempurnaan → Publish & Maintain, sesuai timeline di proposal.</li>
                    </ul>

                    <h2 id="p4" class="h5 mt-4" style="font-weight:800">4. Harga, Pembayaran & Pajak</h2>
                    <ul>
                        <li>Seluruh harga tercantum dalam <strong>Rupiah (IDR)</strong> di halaman layanan. Harga aktif saat ini: Email Pribadi Rp 30.000/bulan, Bisnis Pemula Rp 60.000/bulan; ERP Starter Rp 15 Jt, ERP Bisnis Rp 35 Jt, ERP Enterprise Hubungi Kami (plus <strong>bonus gratis landing page/katalog online</strong> tiap implementasi ERP bulan promo); DevOps Jaga Web Rp 500rb/bulan, Jaga Bisnis Rp 1,5 Jt/bulan, Rescue one-time Rp 750rb–2,5jt.</li>
                        <li>Pembayaran via transfer bank, Virtual Account, QRIS, e-wallet, dan kartu kredit melalui payment gateway. Layanan baru diaktivasi setelah dana <strong>lunas dan terverifikasi (settlement)</strong>.</li>
                        <li>Harga untuk badan usaha <strong>belum termasuk PPN 11%</strong> kecuali dinyatakan termasuk. Invoice, kuitansi, dan faktur pajak elektronik (e-faktur) tersedia atas permintaan dengan melampirkan NPWP/NIK.</li>
                        <li>Skema proyek custom umum: 30% DP – 40% setelah demo/UAT – 30% saat go-live, atau termin bulanan per milestone untuk enterprise. Keterlambatan pembayaran melewati jatuh tempo dapat dikenakan penjadwalan ulang dan penangguhan pengerjaan.</li>
                        <li>Biaya pihak ketiga (domain, lisensi, cloud, perangkat IoT, biaya gateway/MDR bank) ditagihkan sesuai pemakaian aktual bila di luar paket.</li>
                    </ul>

                    <h2 id="p5" class="h5 mt-4" style="font-weight:800">5. Langganan, Masa Tenggang & Penghentian Sementara</h2>
                    <ul>
                        <li>Layanan berlangganan (email, maintenance, cloud/AI) ditagih bulanan/tahunan. Invoice perpanjangan dikirim H-7 sebelum berakhir.</li>
                        <li>Masa tenggang 7 hari kalender setelah jatuh tempo. Lewat masa tenggang, layanan dapat disuspensi otomatis. Data dipertahankan 30 hari setelah suspensi, setelah itu dapat dihapus permanen.</li>
                        <li>Reaktivasi setelah suspensi dapat dikenakan biaya reaktivasi maksimal Rp 150.000 per layanan.</li>
                    </ul>

                    <h2 id="p6" class="h5 mt-4" style="font-weight:800">6. Pelaksanaan, Revisi & Serah Terima</h2>
                    <ul>
                        <li>Revisi mengikuti jumlah yang tercantum di paket. Permintaan di luar ruang lingkup (change request) akan diestimasi biaya dan waktu tambahan secara tertulis. Khusus ERP berlaku implementasi bertahap per modul/fase; khusus DevOps berlaku SLA respon &lt;1 jam dan target pulih &lt;4 jam untuk insiden kritis.</li>
                        <li>UAT (uji terima) maksimal 7 hari kalender setelah demo. Tanpa umpan balik tertulis dalam periode tersebut, pekerjaan dianggap disetujui.</li>
                        <li>Garansi bug 90 hari untuk proyek aplikasi dan 30 hari garansi pemakaian untuk layanan langganan, sepanjang tidak ada modifikasi oleh pihak lain.</li>
                        <li>Source code/dokumentasi diserahkan 100% kepada Klien setelah pelunasan, kecuali modul/lisensi milik pihak ketiga.</li>
                    </ul>

                    <h2 id="p7" class="h5 mt-4" style="font-weight:800">7. Kewajiban & Larangan Pengguna</h2>
                    <ul>
                        <li>Tidak menggunakan layanan untuk spam, phishing, malware, judi online, pelanggaran HKI, atau tindakan melanggar hukum Indonesia.</li>
                        <li>Menjamin data, konten, dan perangkat (termasuk perangkat IoT milik Klien) adalah milik sah atau telah berizin.</li>
                        <li>Menjaga kerahasiaan kredensial. Penyalahgunaan oleh pihak yang diberi akses oleh Klien menjadi tanggung jawab Klien.</li>
                        <li>Pelanggaran berat dapat mengakibatkan penghentian layanan tanpa pengembalian dana, setelah peringatan tertulis.</li>
                    </ul>

                    <h2 id="p8" class="h5 mt-4" style="font-weight:800">8. Kekayaan Intelektual & Kerahasiaan</h2>
                    <p>Hak cipta website, desain, dan template tetap milik Eraya kecuali dialihkan tertulis dalam kontrak. Hasil proyek menjadi milik Klien setelah lunas. Kedua belah pihak wajib menjaga kerahasiaan data dan dokumen proyek (NDA mengikat). Kami tidak menjual data Klien kepada pihak ketiga.</p>

                    <h2 id="p9" class="h5 mt-4" style="font-weight:800">9. Garansi & Batas Tanggung Jawab</h2>
                    <p>Kami berkomitmen pada garansi kepuasan sesuai ruang lingkup kontrak. Sejauh diizinkan hukum, tanggung jawab maksimal Kami terbatas pada nilai layanan yang dibayarkan dalam 3 bulan terakhir dan tidak mencakup kerugian tidak langsung (kehilangan keuntungan, data akibat kelalaian Klien, gangguan pihak ketiga). Output AI bersifat bantuan dan wajib verifikasi manusia untuk keputusan kritis. Kinerja IoT bergantung pada jaringan, daya, dan kondisi perangkat di lokasi Klien.</p>

                    <h2 id="p10" class="h5 mt-4" style="font-weight:800">10. Keadaan Kahar (Force Majeure)</h2>
                    <p>Keterlambatan akibat bencana alam, kebakaran, pandemi, perang, gangguan internet nasional, atau kebijakan pemerintah bukan merupakan wanprestasi. Jadwal akan disesuaikan secara musyawarah.</p>

                    <h2 id="p11" class="h5 mt-4" style="font-weight:800">11. Hukum yang Berlaku & Penyelesaian Sengketa</h2>
                    <p>Syarat ini diatur hukum Republik Indonesia. Sengketa diselesaikan musyawarah mufakat dalam 30 hari. Bila gagal, melalui pengadilan negeri yang berwenang atau BPSK/arbitrase sesuai kesepakatan tertulis.</p>
                    <p>Perubahan syarat akan dipublikasikan di halaman ini dengan tanggal pembaruan. Penggunaan layanan berkelanjutan dianggap persetujuan atas perubahan.</p>

                    <h2 id="p12" class="h5 mt-4" style="font-weight:800">12. Kontak Pengaduan</h2>
                    <p>Tim Jakarta: (+62)819-4511-2427 (Agung), (+62)857-9966-3331 (Erfan) • Tim Malang: (+62)825-5780-8535 (Aries), (+62)822-3364-1442 (Ryan) • Email: <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a> • Jam layanan: Senin–Jumat 09.00–17.00 WIB. Pengaduan dijawab maksimal 2×24 jam kerja.</p>
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
