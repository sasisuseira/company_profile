@if(isset($use_footer) && $use_footer)
<footer class="footer-wrapper  footer-layout1" data-bg-src="{{asset('template_v1/img/bg/footer-bg-1-1.jpg')}}">
    <div class="container">
        <div class="footer-top">
            <div class="row g-5 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-4">
                    <div class="footer-logo">
                        <a href="{{ url('') }}"><img style="width: 300px;" src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo"></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="widget widget_newsletter footer-widget">
                        <div class="newsletter1">
                            <div class="newsletter-inner">
                                <span class="newsletter-icon"><img src="{{asset('template_v1/img/icon/envlope1.png')}}"
                                        alt="icon"></span>
                                <h4 class="newsletter_title h5">Subscribe Newsletter</h4>
                            </div>
                            <form class="newsletter-form">
                                <div class="search-btn">
                                    <input class="form-control" type="email" placeholder="Enter your email....">
                                    <button type="submit" class="vs-btn2">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <h3 class="widget_title">Sekilas Mengenai Kami</h3>
                            <p class="footer-text">Didirikan pada tahun 2024, kami adalah software house profesional yang berpengalaman dalam menyediakan solusi Digital, TI, Pemanfaatan AI, dan IoT untuk berbagai organisasi. Kami telah melayani banyak klien di seluruh Indonesia, mulai dari UKM, perusahaan besar, hingga instansi pemerintah. Dengan memadukan semangat, ketajaman intuisi, dan pemanfaatan AI melalui IoT — seperti monitoring cerdas, otomatisasi berbasis data, dan agen AI — kami membantu pertumbuhan bisnis secara optimal dan berkelanjutan.</p>
                            <div class="footer-social">
                                <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon-btn" href="#"><i class="fa-brands fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Office Maps</h3>
                        <div class="footer-map">
                        <iframe  title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0241718589114!2d106.82590461135096!3d-6.2605461937018365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f37d942851e3%3A0xe99ce2e714d0a5!2sPT.SAID%20KRAMA%20YUDHA!5e0!3m2!1sid!2sid!4v1730714088653!5m2!1sid!2sid" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="media-style1">
                                    <div class="media-icon icon-btn"><i class="fa-solid fa-map-location-dot"></i></div>
                                    <div class="media-body">
                                        <h3 class="media-title">[Head Office Address] Gedung Graha Krama Yudha Lt. 4 Unit B Jl. Hj. Tutty Alawiyah no. 43, Kel. Duren Tiga, Kec. Pancoran DKI Jakarta - Jakarta Selatan 12760</h3>
                                    </div>
                                </div>
                                <div class="media-style1">
                                    <div class="media-icon icon-btn"><i class="fa-solid fa-map-location-dot"></i></div>
                                    <div class="media-body">
                                        <h3 class="media-title">[Branch Office Address] Jl. Tarupala Gang 2 No 2 RT 24 RW 04 Kec. Pakisaji, Keluaran Kebonagung, Kabupaten Malang, Jawa Timur 65165</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget footer-widget">
                                    <div class="media-style1">
                                        <div class="media-icon icon-btn"><i class="fa-solid fa-phone"></i></div>
                                        <div class="media-body">
                                            <h3 class="media-title">Jakarta Phone or Chat No:</h3>
                                            <p class="media-info"><a href="tel:+6281945112427">(+62)819-4511-2427 (Agung)</a></p>
                                            <p class="media-info"><a href="tel:+6285799663331">(+62)857-9966-3331 (Erfan)</a></p>
                                            <h3 class="media-title">Malang Phone or Chat No:</h3>
                                            <p class="media-info"><a href="tel:+6282557808535">(+62)825-5780-8535 (Aries)</a></p>
                                            <p class="media-info"><a href="tel:+6282233641442">(+62)822-3364-1442 (Ryan)</a></p>
                                        </div>
                                    </div>
                                    <div class="media-style1">
                                        <div class="media-icon icon-btn"><i class="fa-solid fa-envelope"></i></div>
                                        <div class="media-body">
                                            <h3 class="media-title">Email Address:</h3>
                                            <p class="media-info"><a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a>
                                            </p>
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
    <div class="container">
        <div class="copyright-wrap">
            <div class="row g-2 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-auto">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 - <?php echo date("Y") ?> <a
                            href="{{ url('') }}">PT. Eraya Digital Solusindo</a></p>
                </div>
                <div class="col-auto">
                    <div class="copyright-menu">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('legal.privasi') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('legal.syarat') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('legal.refund') }}">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- Modal Privacy Policy & Terms : 1 tema Eraya --}}
<style>
.eds-modal .modal-content{border:0;border-radius:20px;overflow:hidden;background:#ffffff !important}
.eds-modal .modal-header{border:0;padding:22px 28px;background:linear-gradient(135deg,#025FCA 0%,#3EC964 100%) !important}
.eds-modal .modal-header .modal-title{font-weight:700;font-size:1.15rem;color:#ffffff !important}
.eds-modal .modal-header p{margin:4px 0 0;font-size:.85rem;color:rgba(255,255,255,.92) !important;opacity:1}
.eds-modal .eds-close{width:38px;height:38px;flex:0 0 38px;border-radius:50%;background:#fff !important;color:#1B2841 !important;font-size:24px;font-weight:700;line-height:1;border:0;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 10px rgba(0,0,0,.25);opacity:1;cursor:pointer}
.eds-modal .eds-close:hover{background:#1B2841 !important;color:#fff !important}
.eds-modal .modal-header{align-items:center;gap:16px}
.eds-modal .modal-body{padding:26px 28px;max-height:60vh;overflow-y:auto;font-size:.92rem;line-height:1.7;background:#ffffff !important;color:#334155 !important}
.eds-modal .modal-body p,.eds-modal .modal-body li,.eds-modal .modal-body span{color:#334155 !important}
.eds-modal .modal-body h6{color:#1B2841 !important;font-weight:700;margin:18px 0 6px}
.eds-modal .modal-body h6:first-child{margin-top:0}
.eds-modal .modal-body ul{padding-left:18px;margin:6px 0}
.eds-modal .modal-body a{color:#025FCA !important;text-decoration:underline}
.eds-modal .modal-body strong{color:#1B2841 !important}
.eds-modal .modal-footer{border:0;padding:16px 28px;background:#f1f7f3 !important}
.eds-modal .vs-btn{border-radius:20px}
</style>
<div class="modal fade eds-modal" id="modalPrivacy" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <div>
          <h5 class="modal-title">Privacy Policy — PT. Eraya Digital Solusindo</h5>
          <p>Terakhir diperbarui: Oktober 2026 • Berlaku untuk website, aplikasi, layanan AI, IoT & ERP kami</p>
        </div>
        <button type="button" class="eds-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h6>1. Siapa Kami</h6>
        <p>PT. Eraya Digital Solusindo adalah software house yang berfokus pada transformasi digital, digitalisasi UMKM, implementasi ERP, pemanfaatan AI & AI Agentic, otomatisasi, dan solusi Internet of Things (IoT). Kebijakan ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi data Anda.</p>
        <h6>2. Data yang Kami Kumpulkan</h6>
        <ul>
          <li><strong>Data kontak & identitas:</strong> nama, email, nomor WhatsApp/telepon, perusahaan/instansi, kebutuhan proyek.</li>
          <li><strong>Data layanan:</strong> detail konsultasi aplikasi, ERP, AI, otomatisasi, dan IoT yang Anda minta.</li>
          <li><strong>Data teknis:</strong> alamat IP, lokasi umum, jenis perangkat/browser, log penggunaan website untuk keamanan dan analitik.</li>
          <li><strong>Data newsletter:</strong> email yang Anda daftarkan untuk info layanan dan promo.</li>
        </ul>
        <h6>3. Tujuan Penggunaan Data</h6>
        <ul>
          <li>Menanggapi konsultasi, penawaran, dan pelaksanaan proyek Digital, AI, IoT, dan ERP.</li>
          <li>Meningkatkan kualitas layanan, keamanan sistem, dan pengalaman pengguna.</li>
          <li>Mengirim informasi layanan (Anda dapat berhenti berlangganan kapan saja).</li>
          <li>Memenuhi kewajiban hukum yang berlaku di Indonesia.</li>
        </ul>
        <h6>4. Keamanan & Kerahasiaan</h6>
        <p>Seluruh informasi — baik tertulis maupun digital — yang Anda konsultasikan kepada kami kami jaga 100%. Kami menerapkan kontrol akses, enkripsi, dan praktik DevOps/Security terbaik. Kami tidak menjual atau menyewakan data pribadi Anda kepada pihak ketiga.</p>
        <h6>5. Berbagi Data</h6>
        <p>Data hanya dibagikan kepada tim internal dan mitra tepercaya (misalnya penyedia cloud/server, payment, atau perangkat IoT) sejauh diperlukan untuk menjalankan layanan, dengan perjanjian kerahasiaan.</p>
        <h6>6. Hak Anda</h6>
        <p>Anda berhak meminta akses, koreksi, atau penghapusan data pribadi Anda dengan menghubungi <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a>.</p>
        <h6>7. Cookies</h6>
        <p>Website ini menggunakan cookies dasar untuk fungsi tampilan dan analitik. Anda dapat menonaktifkannya melalui pengaturan browser.</p>
        <h6>8. Kontak</h6>
        <p>Jakarta: (+62)819-4511-2427 • Malang: (+62)825-5780-8535 • Email: <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="vs-btn" data-bs-dismiss="modal">Saya Mengerti</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade eds-modal" id="modalTerms" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <div>
          <h5 class="modal-title">Terms & Conditions — PT. Eraya Digital Solusindo</h5>
          <p>Terakhir diperbarui: Oktober 2026 • Mengatur penggunaan website & layanan kami</p>
        </div>
        <button type="button" class="eds-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h6>1. Layanan Kami</h6>
        <p>Kami menyediakan pengembangan aplikasi kustom, sistem ERP, mail server, digitalisasi UMKM, DevOps & infrastruktur, pemanfaatan AI & AI Agentic (chatbot, agen AI, otomatisasi workflow), serta solusi IoT (monitoring sensor, smart device, integrasi cloud). Ruang lingkup detail mengacu pada penawaran/kontrak proyek masing-masing.</p>
        <h6>2. Konsultasi & Alur Kerja</h6>
        <ul>
          <li>Tahapan: Konsultasi → Metode & Pengerjaan → Revisi & Penyempurnaan → Publish & Maintain.</li>
          <li>Klien wajib memberikan data/informasi yang jelas, lengkap, dan legal untuk keperluan pengerjaan.</li>
          <li>Revisi mengikuti kesepakatan paket; permintaan di luar ruang lingkup dikenakan biaya tambahan.</li>
        </ul>
        <h6>3. Kewajiban Pengguna</h6>
        <ul>
          <li>Tidak menyalahgunakan website/layanan untuk tindakan melanggar hukum, spam, peretasan, atau pelanggaran hak pihak lain.</li>
          <li>Menjamin data, konten, dan perangkat (termasuk perangkat IoT milik klien) yang diberikan adalah milik sah atau telah berizin.</li>
        </ul>
        <h6>4. Kekayaan Intelektual</h6>
        <p>Hak cipta website, desain, kode, dan dokumentasi tetap milik PT. Eraya Digital Solusindo kecuali dialihkan secara tertulis dalam kontrak. Lisensi penggunaan hasil proyek diberikan sesuai paket yang disepakati.</p>
        <h6>5. Layanan AI & IoT</h6>
        <ul>
          <li>Output AI bersifat bantuan dan perlu verifikasi manusia untuk keputusan kritis/bisnis.</li>
          <li>Kinerja IoT bergantung pada jaringan, daya, dan kondisi perangkat di lokasi klien; kami memberikan panduan instalasi & maintenance.</li>
        </ul>
        <h6>6. Garansi & Batas Tanggung Jawab</h6>
        <p>Kami berkomitmen pada garansi kepuasan 100% sesuai ruang lingkup kontrak. Sejauh diizinkan hukum, tanggung jawab kami terbatas pada nilai layanan yang dibayarkan dan tidak mencakup kerugian tidak langsung akibat faktor di luar kendali kami (gangguan pihak ketiga, force majeure).</p>
        <h6>7. Privasi</h6>
        <p>Penggunaan data pribadi tunduk pada Privacy Policy kami yang merupakan satu kesatuan dengan Syarat & Ketentuan ini.</p>
        <h6>8. Hukum & Kontak</h6>
        <p>Syarat ini diatur oleh hukum Republik Indonesia. Sengketa diselesaikan musyawarah, bila gagal melalui jalur hukum yang berwenang. Hubungi: <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a> • Jakarta (+62)819-4511-2427 • Malang (+62)825-5780-8535.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="vs-btn" data-bs-dismiss="modal">Saya Setuju</button>
      </div>
    </div>
  </div>
</div>
@endif