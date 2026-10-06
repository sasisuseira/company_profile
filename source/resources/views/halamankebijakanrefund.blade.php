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
                            <li class="breadcrumb-item active" aria-current="page" style="color:#fff">Pengembalian Dana</li>
                        </ol>
                    </nav>
                    <div class="title-area text-center">
                        <span class="sec-subtitle">Legal • Terakhir diperbarui: 6 Oktober 2026 • Mengacu UU No. 8/1999 & PP No. 80/2019</span>
                        <h1 class="sec-title h1 mb-20">Kebijakan <span>Pengembalian Dana</span> (Refund)</h1>
                        <p class="sec-text" style="max-width:720px;margin:0 auto">Aturan garansi, syarat refund, alur pengajuan, dan estimasi waktu pengembalian untuk semua pembayaran ke PT. Eraya Digital Solusindo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="space" style="padding:60px 0">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="row g-3">
                    <div class="col-md-4"><div style="background:#ecfdf5;border:1px solid #000000;border-radius:16px;padding:18px;text-align:center"><strong>Garansi 30 Hari</strong><br><small style="color:#475569">Layanan langganan (email, maintenance)</small></div></div>
                    <div class="col-md-4"><div style="background:#eff6ff;border:1px solid #000000;border-radius:16px;padding:18px;text-align:center"><strong>DP Kembali 100%</strong><br><small style="color:#475569">Batal ≤14 hari sebelum production/kickoff</small></div></div>
                    <div class="col-md-4"><div style="background:#fefce8;border:1px solid #000000;border-radius:16px;padding:18px;text-align:center"><strong>Proses 7–14 Hari Kerja</strong><br><small style="color:#475569">Setelah pengajuan disetujui</small></div></div>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div data-toc style="background:#fff;border:1px solid #e6efff;border-radius:20px;padding:26px;position:sticky;top:100px">
                    <h4 class="h6 mb-3" style="font-weight:800">Daftar Isi</h4>
                    <ol class="mb-3" style="font-size:14px;line-height:2;color:#334155;padding-left:18px">
                        <li><a href="#r1">Prinsip Umum</a></li>
                        <li><a href="#r2">Tabel Kelayakan per Layanan</a></li>
                        <li><a href="#r3">Yang Tidak Dapat Direfund</a></li>
                        <li><a href="#r4">Cara Mengajukan</a></li>
                        <li><a href="#r5">Verifikasi & Timeline</a></li>
                        <li><a href="#r6">Metode & Biaya Pengembalian</a></li>
                        <li><a href="#r7">Sengketa & Kontak</a></li>
                    </ol>
                    <div style="background:#f0f9ff;border-radius:14px;padding:14px;font-size:13px;color:#475569">
                        Terkait: <a href="{{ route('legal.syarat') }}">Syarat & Ketentuan</a> • <a href="{{ route('layanan.hubungi_kami') }}">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <article style="background:#fff;border:1px solid #eef2f7;border-radius:20px;padding:36px;line-height:1.8;font-size:15px;color:#334155">
                    <h2 id="r1" class="h5" style="font-weight:800">1. Prinsip Umum</h2>
                    <ul>
                        <li>Semua pembayaran dalam <strong>Rupiah (IDR)</strong> ke rekening resmi PT / payment gateway tertera di invoice. Simpan nomor invoice sebagai bukti.</li>
                        <li>Refund hanya untuk pembayaran yang <strong>sudah settlement/lunas</strong> dan masih dalam masa garansi.</li>
                        <li>Pengajuan dilakukan tertulis via email (bukan via telepon/chat saja) agar terdokumentasi.</li>
                        <li>Kebijakan ini tunduk pada UU Perlindungan Konsumen dan PP Perdagangan Melalui Sistem Elektronik. Hak konsumen atas produk yang tidak sesuai tidak dikurangi oleh kebijakan ini.</li>
                    </ul>

                    <h2 id="r2" class="h5 mt-4" style="font-weight:800">2. Kelayakan Refund per Jenis Layanan</h2>
                    <div class="table-responsive">
                    <table class="table table-bordered" style="font-size:14px">
                        <thead style="background:#f1f5f9"><tr><th>Layanan</th><th>Masa Garansi</th><th>Ketentuan</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Email Profesional</strong> (Pribadi Rp 30rb / Bisnis Rp 60rb)</td><td>30 hari sejak aktivasi pertama</td><td>Refund 100% bila aktivasi gagal / tidak sesuai paket dan dilaporkan ≤7×24 jam. Setelah email aktif & terpakai &gt;7 hari: pro-rata sisa hari, dipotong biaya domain/lisensi terpakai.</td></tr>
                            <tr><td><strong>DevOps / Maintenance</strong> (Jaga Web Rp 500rb / Jaga Bisnis Rp 1,5jt per bulan)</td><td>30 hari pertama</td><td>Batal sebelum pengerjaan bulan berjalan: 100%. Setelah monitoring/backup berjalan: pro-rata harian bulan berjalan. Layanan <strong>Rescue one-time</strong> (Rp 750rb–2,5jt) yang sudah dikerjakan tidak dapat direfund kecuali gagal total tanpa hasil.</td></tr>
                            <tr><td><strong>ERP & Sistem Terintegrasi</strong> (Starter Rp 15 Jt / Bisnis Rp 35 Jt / Enterprise custom)</td><td>DP 14 hari sebelum kickoff/production per fase</td><td>Pembatalan tertulis ≤14 hari sebelum kickoff fase: DP fase tersebut kembali 100%. Setelah kickoff / progres &gt;30% / data sudah dimigrasi: DP menjadi biaya pengerjaan, sisa yang belum dikerjakan dikembalikan pro-rata dikurangi biaya pihak ketiga. <strong>Bonus gratis landing page/katalog online</strong> mengikuti nasib paket utamanya.</td></tr>
                            <tr><td><strong>AI Agentic / IoT / UMKM Digital</strong></td><td>Coming Soon</td><td>Belum dijual (klik memunculkan pop-up Coming Soon). Tidak ada penagihan sehingga tidak ada refund sampai layanan resmi launching dan tercantum harganya.</td></tr>
                            <tr><td><strong>Enterprise / Custom (Hubungi Kami)</strong></td><td>Sesuai kontrak</td><td>Mengacu termin di kontrak. Umumnya termin yang sudah dibayar untuk milestone yang sudah disetujui tidak dapat direfund.</td></tr>
                            <tr><td><strong>Pembayaran ganda / salah transfer / kelebihan bayar</strong></td><td>30 hari sejak bayar</td><td>Kembali 100% (dipotong biaya transfer/gateway bila ada) setelah verifikasi mutasi.</td></tr>
                        </tbody>
                    </table>
                    </div>

                    <h2 id="r3" class="h5 mt-4" style="font-weight:800">3. Yang Tidak Dapat Direfund</h2>
                    <ul>
                        <li>Domain yang sudah didaftarkan/diaktifkan (.com/.co.id/dll), sertifikat SSL, lisensi software/cloud pihak ketiga yang sudah diterbitkan.</li>
                        <li>Perangkat IoT yang sudah dirakit/dikirim/diinstal, biaya instalasi & survei onsite yang sudah terjadi.</li>
                        <li>Pekerjaan custom yang sudah disetujui di UAT / sudah go-live dan sesuai ruang lingkup.</li>
                        <li>Keterlambatan akibat data/akses yang tidak diberikan Klien, atau pelanggaran Syarat & Ketentuan (spam, judi, malware).</li>
                        <li>Biaya layanan payment gateway / bank (MDR, biaya VA/QRIS) yang sudah dipotong pihak bank.</li>
                    </ul>

                    <h2 id="r4" class="h5 mt-4" style="font-weight:800">4. Cara Mengajukan Refund</h2>
                    <p>Kirim email ke <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a> subjek <strong>"Pengajuan Refund – [No. Invoice]"</strong> dengan isi:</p>
                    <ol>
                        <li>Nama, no. HP/WA, dan nama perusahaan (jika ada);</li>
                        <li>Nomor invoice, tanggal bayar, nominal, dan metode pembayaran;</li>
                        <li>Nama layanan/paket yang dibatalkan dan alasan rinci + bukti (screenshot error / ketidaksesuaian);</li>
                        <li>Nama bank, nomor rekening, dan nama pemilik rekening untuk pengembalian (nama harus sama dengan pembayar, kecuali ada surat kuasa + KTP).</li>
                    </ol>

                    <h2 id="r5" class="h5 mt-4" style="font-weight:800">5. Verifikasi & Estimasi Waktu</h2>
                    <ul>
                        <li>Konfirmasi penerimaan pengajuan: <strong>maks. 2×24 jam kerja</strong>.</li>
                        <li>Verifikasi teknis & keuangan: <strong>maks. 7 hari kerja</strong> (dapat lebih lama bila perlu cek pihak ketiga seperti registrar domain).</li>
                        <li>Dana dikembalikan <strong>7–14 hari kerja</strong> setelah disetujui. Pembayaran kartu kredit dikembalikan via reversal ke kartu yang sama (mengikuti siklus billing bank 14–30 hari).</li>
                        <li>Status akan diinformasikan via email. Klien wajib membantu verifikasi bila diminta.</li>
                    </ul>

                    <h2 id="r6" class="h5 mt-4" style="font-weight:800">6. Metode & Potongan Biaya Pengembalian</h2>
                    <ul>
                        <li>Transfer bank ke rekening Indonesia atas nama pembayar. Untuk VA/QRIS/e-wallet: ke saldo/rekening asal bila memungkinkan, jika tidak via transfer.</li>
                        <li>Dipotong: biaya transfer antarbank / biaya gateway yang sudah terjadi (contoh VA ±Rp 4.000, QRIS MDR ±0,7%) dan biaya pihak ketiga yang sudah terpakai. Tidak ada biaya admin tambahan dari Kami.</li>
                        <li>Pengembalian dalam IDR. Bukti transfer dikirim via email sebagai penutup tiket.</li>
                    </ul>

                    <h2 id="r7" class="h5 mt-4" style="font-weight:800">7. Sengketa, Pengecualian & Kontak</h2>
                    <p>Keadaan kahar (force majeure) mengikuti Syarat & Ketentuan. Bila pengajuan ditolak, Klien dapat meminta peninjauan ulang sekali dengan bukti baru, atau menempuh musyawarah → BPSK/pengadilan sesuai hukum Indonesia.</p>
                    <p><strong>Kontak refund & pengaduan:</strong> <a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a> • Jakarta (+62)819-4511-2427 • Malang (+62)825-5780-8535 • Senin–Jumat 09.00–17.00 WIB.</p>
                    <p class="mb-0"><em>Dengan melakukan pembayaran, Anda menyatakan setuju pada kebijakan ini beserta <a href="{{ route('legal.syarat') }}">Syarat & Ketentuan</a> dan <a href="{{ route('legal.privasi') }}">Kebijakan Privasi</a> kami.</em></p>
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
