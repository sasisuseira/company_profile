<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Landing extends Controller
{
    private function get_info_location()
    {
        $ipAddress = request()->ip();
        try {
            $response = Http::timeout(3)->get("http://ipinfo.io/{$ipAddress}/json");
            $location = $response->json();
        } catch (\Throwable $e) {
            $location = [];
        }
        $city = $location['city'] ?? '-';
        $region = $location['region'] ?? '-';
        $country = $location['country'] ?? '-';
        return [
            'ip' => $ipAddress,
            'location' => $city . ' ' . $region . ' ' . $country
        ];
    }

    public function index()
    {
        $data['info_location'] = $this->get_info_location();
        $data['use_footer'] = true;
        return view('halamandepan', $data);
    }

    public function email_profesional()
    {
        $data['info_location'] = $this->get_info_location();
        $data['use_footer'] = false;
        return view('halamanemailprofesional', $data);
    }

    public function hubungi_kami()
    {
        $data['info_location'] = $this->get_info_location();
        $data['use_footer'] = true;
        return view('hubungikami', $data);
    }

    public function detail($slug)
    {
        $semua = self::data_layanan();

        // email-profesional punya halaman khusus, arahkan ke sana agar konsisten
        if ($slug === 'email-profesional') {
            return $this->email_profesional();
        }

        if (!isset($semua[$slug])) {
            abort(404);
        }

        $data['info_location'] = $this->get_info_location();
        $data['use_footer'] = true;
        $data['layanan'] = $semua[$slug];
        $data['slug'] = $slug;
        // layanan terkait: ambil 3 selain yang aktif
        $terkait = collect($semua)->filter(fn($v, $k) => $k !== $slug && $k !== 'email-profesional')->take(3);
        $data['terkait'] = $terkait;

        return view('halamanlayanandetail', $data);
    }

    public static function data_layanan(): array
    {
        return [
            'pengembangan-aplikasi' => [
                'slug' => 'pengembangan-aplikasi',
                'badge' => 'Pengembangan Aplikasi',
                'judul' => 'Ubah Bisnis Manual Jadi Mesin Cuan Digital',
                'judul_span' => 'Mesin Cuan Digital',
                'subjudul' => 'Stop kerja 12 jam sehari untuk hal yang bisa diklik 12 detik. Kami bangunkan aplikasi web, mobile, & ERP yang bikin operasional autopilot.',
                'deskripsi' => 'Dari kasir berantakan sampai laporan yang selalu telat — kami sulap jadi dashboard rapi yang bisa dipantau dari HP sambil ngopi.',
                'icon' => 'developer.svg',
                'rating' => '4.9/5 dari 40+ klien',
                'stats' => [
                    ['angka' => '13+', 'label' => 'Aplikasi Live & Dipakai Harian'],
                    ['angka' => '98%', 'label' => 'Klien Puas & Repeat Order'],
                    ['angka' => '30 Hari', 'label' => 'Rata-rata MVP Jadi'],
                ],
                'masalah_judul' => 'Kenapa Bisnis Kamu Stuck? Karena Masih...',
                'masalah' => [
                    ['judul' => 'Catat Manual di Buku & Excel', 'teks' => 'Satu nota hilang, stok selisih, uang bocor tanpa ketahuan. Capek rekonsiliasi tiap malam?'],
                    ['judul' => 'Laporan Selalu Telat & Nggak Akurat', 'teks' => 'Owner baru tahu rugi setelah sebulan berjalan. Keputusan bisnis jadi tebak-tebakan.'],
                    ['judul' => 'Tim Kewalahan, Owner Burnout', 'teks' => 'Semua nanya ke kamu. Cuti pun tetap ditelepon. Bisnis jalan kalau kamu ada — libur kalau kamu pergi.'],
                    ['judul' => 'Mau Scale Up Tapi Sistem Nggak Siap', 'teks' => 'Buka cabang baru = chaos baru. SOP beda-beda, data mental-mental di tiap tempat.'],
                ],
                'solusi_judul' => 'Bayangkan Kalau Semua Ini Beres Dalam 30 Hari...',
                'solusi_teks' => 'Order masuk otomatis, stok berkurang sendiri, laporan laba-rugi update real-time, tim kerja tanpa kamu awasi. Itulah yang kami bangun: bukan sekadar aplikasi, tapi asisten digital yang kerja 24/7 tanpa gaji.',
                'fitur_judul' => 'Yang Kamu Dapat (Bukan Aplikasi Kaleng-Kaleng)',
                'fitur' => [
                    ['icon' => 'fa-solid fa-mobile-screen', 'judul' => 'Web + Mobile + Kasir', 'teks' => 'Satu sistem untuk semua: dashboard owner, aplikasi kasir, dan aplikasi pelanggan. Sinkron real-time.'],
                    ['icon' => 'fa-solid fa-chart-line', 'judul' => 'Laporan Real-Time Anti Drama', 'teks' => 'Omzet, laba, produk terlaris, karyawan terajin — semua live. Buka HP langsung kelihatan.'],
                    ['icon' => 'fa-solid fa-cloud', 'judul' => 'Cloud & Aman Terenskripsi', 'teks' => 'Data tersimpan di server aman + backup otomatis harian. HP hilang? Data tetap selamat.'],
                    ['icon' => 'fa-solid fa-plug', 'judul' => 'Integrasi Payment & WA', 'teks' => 'QRIS, transfer bank, nota otomatis terkirim ke WhatsApp pelanggan. Checkout 10 detik.'],
                    ['icon' => 'fa-solid fa-users-gear', 'judul' => 'Multi-Cabang & Multi-User', 'teks' => 'Atur hak akses per karyawan & pantau semua cabang dari satu layar. Anti curang, anti bocor.'],
                    ['icon' => 'fa-solid fa-rocket', 'judul' => 'Siap Scale & ERP-Ready', 'teks' => 'Arsitektur modular. Hari ini kasir, besok tambah gudang, HRD, akuntansi. Nggak perlu bongkar dari nol.'],
                ],
                'langkah' => [
                    ['judul' => 'Bedah Bisnis (Gratis)', 'teks' => 'Kami dengerin masalahmu 60 menit, petakan alur kerja, dan kasih blueprint solusi — gratis, no komitmen.'],
                    ['judul' => 'Prototype 7 Hari', 'teks' => 'Kamu lihat desain klik-able aplikasimu. Revisi sepuasnya sebelum coding dimulai. No surprise.'],
                    ['judul' => 'Build & Testing', 'teks' => 'Coding sprint mingguan + demo tiap Jumat. Kamu pantau progres live via link staging.'],
                    ['judul' => 'Launch & Didampingi', 'teks' => 'Training tim, migrasi data, go-live didampingi. Garansi bug 90 hari + support prioritas.'],
                ],
                'paket' => [
                    ['nama' => 'Landing + Company Profile', 'deskripsi' => 'Buat tampil meyakinkan di Google', 'harga' => 'Rp 3,5 Jt', 'durasi' => 'sekali bayar', 'unggulan' => false, 'fitur' => ['Website 5 halaman SEO-ready', 'Integrasi WA + Maps + Form', 'Copywriting dibantu AI', 'Gratis domain .com 1 thn', 'Training update konten']],
                    ['nama' => 'Bisnis App', 'deskripsi' => 'Paling laris untuk UMKM naik kelas', 'harga' => 'Rp 12 Jt', 'durasi' => 'mulai dari', 'unggulan' => true, 'fitur' => ['Web app + aplikasi kasir', 'Laporan real-time + notif WA', 'Multi-user & multi-cabang', 'Integrasi QRIS & payment', 'Garansi 90 hari + training', 'Gratis maintenance 3 bulan']],
                    ['nama' => 'Custom ERP / Enterprise', 'deskripsi' => 'Untuk yang butuhnya kompleks', 'harga' => 'Hubungi Kami', 'durasi' => 'survei gratis', 'unggulan' => false, 'fitur' => ['Modul custom: gudang, HRD, akuntansi', 'Integrasi API & sistem lama', 'Dedicated PM + dokumentasi', 'SLA & maintenance tahunan', 'Audit keamanan + backup']],
                ],
                'kenapa' => ['Source code milik kamu 100% (no kunci-kuncian)', 'Teknologi modern: Laravel, Flutter, Vue — cepat & aman', 'Demo progres tiap minggu, bukan hilang 3 bulan', 'Tim lokal Malang, fast respon via WA, bisa onsite', 'Sudah dipercaya 10+ brand & sekolah sejak 2019'],
                'testimoni' => ['nama' => 'Sanjaya Group', 'jabatan' => 'Owner Grosir & Oli — Malang', 'teks' => '“Dulu stok opname 3 hari, sekarang 15 menit dari HP. Selisih gudang turun 90%. Gila sih ini.”'],
                'faq' => [
                    ['q' => 'Berapa lama aplikasi jadi?', 'a' => 'Landing 7–14 hari. Aplikasi bisnis (kasir + laporan) 21–30 hari. ERP custom 2–4 bulan tergantung modul. Kamu dapat timeline tertulis di proposal — telat ada kompensasi.'],
                    ['q' => 'Apakah saya dapat source code?', 'a' => 'Ya, 100% milik kamu. Kami serahkan repo + dokumentasi + kredensial server saat serah terima. Kamu bebas lanjutkan dengan siapa pun.'],
                    ['q' => 'Bagaimana kalau tim saya gaptek?', 'a' => 'Justru itu tugas kami. Kami training sampai bisa, sediakan video tutorial + panduan PDF, dan dampingi 30 hari pertama. Rata-rata tim beradaptasi dalam 3 hari.'],
                    ['q' => 'Bisa cicil / bertahap?', 'a' => 'Bisa. Skema umum 30% DP – 40% setelah demo – 30% saat go-live. Untuk enterprise bisa termin bulanan per milestone.'],
                    ['q' => 'Apakah ada garansi?', 'a' => 'Garansi bug 90 hari (gratis fix). Setelah itu ada paket maintenance murah mulai Rp 500rb/bulan: update, backup, monitoring.'],
                ],
                'cta_judul' => 'Masih Mau Capek Catat Manual Tahun Depan?',
                'cta_teks' => 'Slot development kami cuma 4 slot/bulan. Amankan sesi bedah bisnis gratis (senilai Rp 750rb) — kuota minggu ini tersisa 2.',
            ],
            'ai-otomatisasi' => [
                'slug' => 'ai-otomatisasi',
                'badge' => 'AI & Otomatisasi (AI Agentic)',
                'judul' => 'Pekerjakan Karyawan AI yang Nggak Tidur & Nggak Resign',
                'judul_span' => 'Karyawan AI',
                'subjudul' => 'Chatbot yang closing, agen AI yang rekap data, otomatisasi yang motong 80% kerja manual. Hemat 3 gaji karyawan mulai bulan depan.',
                'deskripsi' => 'Dari CS yang jawab 24 jam sampai analis yang bikin laporan otomatis — AI kami dilatih pakai data bisnismu sendiri.',
                'icon' => 'service-icon-2-1.svg',
                'rating' => 'Dipakai 15+ bisnis aktif',
                'stats' => [
                    ['angka' => '80%', 'label' => 'Kerja Manual Terpangkas'],
                    ['angka' => '24/7', 'label' => 'CS AI Siaga Nonstop'],
                    ['angka' => '3x', 'label' => 'Respon Chat Lebih Cepat'],
                ],
                'masalah_judul' => 'Ciri-Ciri Bisnismu Bocor Gara-Gara Manual...',
                'masalah' => [
                    ['judul' => 'Chat Menumpuk, Closing Lepas', 'teks' => '100 chat masuk, yang kebalas 40. Sisanya? Pindah ke kompetitor yang fast respon.'],
                    ['judul' => 'Admin Copy-Paste Sampai Begadang', 'teks' => 'Rekap order, input Excel, bikin invoice — pekerjaan robot yang dikerjakan manusia mahal.'],
                    ['judul' => 'Data Numplek Tapi Nggak Jadi Keputusan', 'teks' => 'Punya ribuan transaksi tapi nggak tahu produk apa yang harus di-stok ulang minggu depan.'],
                    ['judul' => 'Gaji CS Mahal, Turnover Tinggi', 'teks' => 'Training 1 bulan, resign 3 bulan kemudian. Ilmu hilang, biaya training hangus.'],
                ],
                'solusi_judul' => 'Satu AI = 3 Karyawan Terbaikmu, Versi Anti Lelah',
                'solusi_teks' => 'Kami rangkai AI Agentic: AI yang bukan cuma jawab, tapi bertindak — cek stok, buat invoice, follow-up WA, rangkum laporan. Terhubung ke WhatsApp, database, dan aplikasimu yang sekarang.',
                'fitur_judul' => 'Senjata AI Yang Kami Pasang di Bisnismu',
                'fitur' => [
                    ['icon' => 'fa-brands fa-whatsapp', 'judul' => 'CS WhatsApp Auto-Closing', 'teks' => 'Jawab katalog, cek ongkir, follow-up keranjang. Bahasa santai ala admin, bukan robot kaku.'],
                    ['icon' => 'fa-solid fa-robot', 'judul' => 'AI Agent Multitask', 'teks' => 'Bisa browsing SOP-mu, query database, kirim email, buat tiket — sesuai instruksi & batasan yang kamu set.'],
                    ['icon' => 'fa-solid fa-file-lines', 'judul' => 'Rekap & Laporan Otomatis', 'teks' => 'Tiap jam 7 pagi, ringkasan omzet + produk terlaris + chat belum dibalas mendarat di WA-mu.'],
                    ['icon' => 'fa-solid fa-ear-listen', 'judul' => 'Analisa Sentimen & Tren', 'teks' => 'AI baca ribuan chat & review, kasih tahu: pelanggan komplain apa, produk apa yang hype.'],
                    ['icon' => 'fa-solid fa-shield-halved', 'judul' => 'AI Aman & Terkendali', 'teks' => 'Guardrails: AI nggak akan ngarang harga, nggak bocorkan data. Semua aksi penting minta approval.'],
                    ['icon' => 'fa-solid fa-puzzle-piece', 'judul' => 'Nempel ke Sistem Lama', 'teks' => 'Integrasi ke POS, spreadsheet, ERP, Google Drive. Nggak perlu ganti sistem yang sudah jalan.'],
                ],
                'langkah' => [
                    ['judul' => 'Audit Bocor Manual', 'teks' => 'Kami petakan 3 pekerjaan paling makan waktu & hitung potensi hematnya dalam rupiah.'],
                    ['judul' => 'Training AI pakai Datamu', 'teks' => 'Katalog, SOP, FAQ, histori chat kami jadikan otak AI. Makin banyak data, makin pinter.'],
                    ['judul' => 'Uji Coba Terbatas', 'teks' => 'AI jalan 2 minggu didampingi manusia. Akurasi dipantau, jawaban diperbaiki harian.'],
                    ['judul' => 'Autopilot + Monitoring', 'teks' => 'Go-live penuh + dashboard akurasi. AI belajar terus dari koreksimu.'],
                ],
                'paket' => [
                    ['nama' => 'Chatbot Starter', 'deskripsi' => 'Buat yang kewalahan balas chat', 'harga' => 'Rp 4,5 Jt', 'durasi' => 'sekali bayar + Rp 350rb/bln', 'unggulan' => false, 'fitur' => ['Chatbot WA 1 nomor', '5000 pesan AI / bulan', 'Katalog + auto-reply FAQ', 'Handover ke admin manusia', 'Laporan chat mingguan']],
                    ['nama' => 'AI Business Autopilot', 'deskripsi' => 'Terlaris: CS + admin otomatis', 'harga' => 'Rp 15 Jt', 'durasi' => 'mulai dari', 'unggulan' => true, 'fitur' => ['CS WA + IG + Web', 'AI agent: invoice & follow-up', 'Laporan harian otomatis ke WA', 'Integrasi POS / spreadsheet', '20.000 pesan AI / bulan', 'Optimasi akurasi 60 hari']],
                    ['nama' => 'AI Enterprise / Custom Agent', 'deskripsi' => 'AI yang kerja di banyak divisi', 'harga' => 'Hubungi Kami', 'durasi' => 'workshop gratis', 'unggulan' => false, 'fitur' => ['Multi-agent multi-divisi', 'Private LLM / on-premise option', 'Voice AI & analisa dokumen', 'Audit keamanan + SLA', 'Training internal + SOP AI']],
                ],
                'kenapa' => ['AI dilatih pakai data ASLI bisnismu, bukan template umum', 'Bisa bahasa Indonesia santai, formal, bahkan Jawa', 'Human-in-the-loop: hal sensitif tetap lewat approval kamu', 'Transparan: semua jawaban AI bisa dilacak sumbernya', 'Support tuning akurasi — AI makin pinter tiap bulan'],
                'testimoni' => ['nama' => 'Olivia Baby Shop', 'jabatan' => 'Owner Retail — Malang', 'teks' => '“Chat jam 2 pagi pun dibalas. Closing naik 35% tanpa tambah admin. Admin lama sekarang fokus ke packing.”'],
                'faq' => [
                    ['q' => 'Apakah AI bisa ngarang / halusinasi?', 'a' => 'Kami kunci dengan RAG: AI hanya jawab berdasar katalog/SOP yang kamu upload. Kalau tidak tahu, dia lempar ke admin manusia + catat untuk dipelajari. Akurasi rata-rata klien kami 92–97%.'],
                    ['q' => 'Data saya aman?', 'a' => 'Sangat. Data tidak dipakai melatih model publik. Opsi server Indonesia / on-premise tersedia untuk data sensitif. Semua tercantum di NDA & kontrak.'],
                    ['q' => 'Butuh data apa untuk mulai?', 'a' => 'Minimal: katalog + daftar 50 pertanyaan tersering + histori chat (ekspor WA). Makin lengkap makin pintar. Kami bantu bereskan datanya.'],
                    ['q' => 'Biaya bulanannya apa?', 'a' => 'Biaya AI dihitung per pesan (seperti pulsa). Starter mencakup 5000 pesan/bulan, umumnya cukup untuk 1–2rb chat. Kelebihan dikenakan Rp 150/pesan. Kami optimalkan agar hemat.'],
                    ['q' => 'Bisa menggantikan karyawan?', 'a' => 'Filosofi kami: AI untuk naikin kapasitas, bukan PHK. 1 admin + AI bisa handle 5x chat. Karyawanmu naik kelas jadi supervisor AI, bukan tukang copy-paste.'],
                ],
                'cta_judul' => 'Kompetitormu Sudah Pakai AI. Kamu Masih Manual?',
                'cta_teks' => 'Coba demo CS AI pakai katalogmu sendiri — gratis 14 hari. Lihat sendiri berapa chat yang bisa di-closing otomatis.',
            ],
            'iot-smart-devices' => [
                'slug' => 'iot-smart-devices',
                'badge' => 'IoT & Smart Devices',
                'judul' => 'Pantau Aset, Ruangan & Mesin dari HP, Real-Time',
                'judul_span' => 'dari HP, Real-Time',
                'subjudul' => 'Sensor + dashboard + notifikasi WA: suhu gudang naik, mesin overheat, atau kolam lele kekurangan oksigen — kamu tahu duluan sebelum rugi.',
                'deskripsi' => 'Kami desain perangkat IoT + cloud monitoring yang tahan dipakai 24/7 di kondisi Indonesia: panas, lembab, listrik naik-turun.',
                'icon' => 'service-icon-2-2.svg',
                'rating' => 'Monitoring 15+ server & site aktif',
                'stats' => [
                    ['angka' => '24/7', 'label' => 'Monitoring Nonstop'],
                    ['angka' => '< 5 dtk', 'label' => 'Notifikasi Darurat ke WA'],
                    ['angka' => '40%', 'label' => 'Potensi Hemat Energi & Susut'],
                ],
                'masalah_judul' => 'Kerugian Yang Nggak Kelihatan Tapi Nyata...',
                'masalah' => [
                    ['judul' => 'Stok Rusak Gara-Gara Suhu', 'teks' => 'Freezer mati semalam, es krim & vaksin rusak Rp puluhan juta. Ketahuannya pas pagi — telat.'],
                    ['judul' => 'Mesin Jebol Mendadak', 'teks' => 'Nggak ada yang tahu bearing panas sebelum macet. Produksi berhenti, order telat, denda jalan.'],
                    ['judul' => 'Listrik & Air Bocor Diam-Diam', 'teks' => 'Tagihan bengkak 30% tapi nggak tahu alat apa penyebabnya. Hemat cuma bisa kira-kira.'],
                    ['judul' => 'Cek Manual Keliling Capek', 'teks' => 'Satpam / teknisi cek tiap jam, catat kertas. Lengah dikit, kejadian kelewat.'],
                ],
                'solusi_judul' => 'Semua Titik Penting Ada “Matanya” — Kamu Tinggal Pantau',
                'solusi_teks' => 'Sensor suhu, kelembaban, arus, getaran, ketinggian air kami pasang di titik kritis. Data mengalir ke dashboard + WA. Anomali = alarm bunyi sebelum jadi bencana.',
                'fitur_judul' => 'Paket IoT End-to-End (Hardware + Software)',
                'fitur' => [
                    ['icon' => 'fa-solid fa-temperature-half', 'judul' => 'Sensor Suhu & Kelembaban', 'teks' => 'Akurasi industri, tahan -20°C sampai 60°C. Cocok freezer, gudang, server room, greenhouse.'],
                    ['icon' => 'fa-solid fa-bolt', 'judul' => 'Monitoring Listrik & Energi', 'teks' => 'Pantau ampere per alat. Ketahuan mana yang boros, kapan beban puncak, dan ada kebocoran.'],
                    ['icon' => 'fa-solid fa-water', 'judul' => 'Level Air & Kualitas', 'teks' => 'Tandon, kolam, depot: level, pH, kekeruhan dipantau. Pompa bisa auto on/off.'],
                    ['icon' => 'fa-solid fa-bell', 'judul' => 'Alarm WA Kilat', 'teks' => 'Suhu > batas? Getaran aneh? WA + sirine bunyi < 5 detik. Eskalasi ke 3 nomor berjenjang.'],
                    ['icon' => 'fa-solid fa-chart-area', 'judul' => 'Dashboard & Riwayat', 'teks' => 'Grafik per menit, laporan harian PDF, ekspor Excel. Bukti audit & klaim asuransi gampang.'],
                    ['icon' => 'fa-solid fa-microchip', 'judul' => 'Device Tahan Banting', 'teks' => 'ESP32/Industrial grade + backup baterai + dual koneksi (WiFi/GSM). Mati lampu tetap lapor.'],
                ],
                'langkah' => [
                    ['judul' => 'Survei Titik Kritis', 'teks' => 'Kami kunjungan / video call: titik apa yang kalau gagal bikin rugi besar? Di situ sensor dipasang.'],
                    ['judul' => 'Instalasi & Kalibrasi', 'teks' => 'Pemasangan 1–3 hari tanpa hentikan operasi. Sensor dikalibrasi + diuji alarm.'],
                    ['judul' => 'Dashboard & Training', 'teks' => 'Dashboard live + training baca grafik & respon alarm. SOP darurat kami bantu susun.'],
                    ['judul' => 'Monitoring & Maintenance', 'teks' => 'Garansi device 1 tahun + monitoring konektivitas. Device offline? Kami tahu duluan.'],
                ],
                'paket' => [
                    ['nama' => 'Pantau 1 Titik', 'deskripsi' => 'Buat yang paling kritis dulu', 'harga' => 'Rp 5 Jt', 'durasi' => 'mulai dari, alat milikmu', 'unggulan' => false, 'fitur' => ['2 sensor (suhu/kelembaban)', 'Dashboard + alarm WA', 'Riwayat 30 hari', 'Instalasi Jabodetabek/Malang', 'Garansi 1 tahun']],
                    ['nama' => 'Smart Site', 'deskripsi' => '1 lokasi terpantau penuh', 'harga' => 'Rp 18 Jt', 'durasi' => 'mulai dari', 'unggulan' => true, 'fitur' => ['Sampai 10 sensor multi-jenis', 'Dashboard multi-user + laporan PDF', 'Alarm berjenjang 3 nomor', 'Kontrol relay (pompa/kipas otomatis)', 'Riwayat 1 tahun + API', 'Maintenance 1 tahun']],
                    ['nama' => 'Industrial / Multi-Site', 'deskripsi' => 'Pabrik, cold-chain, kampus', 'harga' => 'Hubungi Kami', 'durasi' => 'survei gratis', 'unggulan' => false, 'fitur' => ['Puluhan–ratusan node + gateway', 'On-premise / private cloud', 'Integrasi SCADA / ERP', 'Kalibrasi berkala + SLA', 'Analitik prediktif (AI maintenance)']],
                ],
                'kenapa' => ['Hardware + software satu vendor — rusak tinggal hubungi satu pintu', 'Device dirakit & diuji di Indonesia, sparepart ready', 'Dashboard ringan, bisa dibuka HP kentang sekalipun', 'Notifikasi WA tanpa aplikasi tambahan', 'Berpengalaman di klinik, puskesmas, sekolah & gudang'],
                'testimoni' => ['nama' => 'Klinik Artha Medical', 'jabatan' => 'Melak, Kutai Barat', 'teks' => '“Vaksin selalu butuh 2–8°C. Sekarang kalau kulkas naik 1 derajat, WA bunyi. Tidur jadi tenang.”'],
                'faq' => [
                    ['q' => 'Butuh internet / listrik khusus?', 'a' => 'Cukup WiFi / GSM biasa + colokan. Device hemat daya + ada backup baterai 6–12 jam. Untuk lokasi tanpa internet (kebun, tambak) tersedia opsi LoRa / GSM.'],
                    ['q' => 'Alatnya awet?', 'a' => 'Grade industri, garansi 1 tahun, umur pakai 3–5 tahun. Kalibrasi ulang tersedia. Sparepart sensor ready, ganti tanpa ganti semuanya.'],
                    ['q' => 'Data bisa diintegrasikan ke aplikasi saya?', 'a' => 'Bisa via API / webhook / MQTT. Dashboard juga bisa di-embed (white-label) ke aplikasimu.'],
                    ['q' => 'Area luar kota bisa?', 'a' => 'Bisa. Instalasi kami panduan remote + teknisi lokal terlatih, atau tim kami datang (biaya dinas). Monitoring & support tetap full remote.'],
                    ['q' => 'Berapa biaya bulanan?', 'a' => 'Cloud + notifikasi WA unlimited mulai Rp 150rb/bulan per site setelah tahun pertama gratis. Tanpa biaya tersembunyi.'],
                ],
                'cta_judul' => 'Satu Kejadian Telat Tahu Bisa Rugi Puluhan Juta',
                'cta_teks' => 'Minta simulasi: kalau titik kritismu dipasang sensor, berapa potensi rugi yang bisa dicegah per tahun? Kami hitungkan gratis.',
            ],
            'umkm-digital' => [
                'slug' => 'umkm-digital',
                'badge' => 'UMKM Naik Kelas',
                'judul' => 'UMKM Laris Manis Modal HP: Katalog Online + Order Otomatis',
                'judul_span' => 'Laris Manis Modal HP',
                'subjudul' => 'Nggak perlu jago teknologi. Kami bikinkan toko online + kasir + pembukuan simpel yang jalan dalam 14 hari. Kamu fokus jualan, sistem yang beresin sisanya.',
                'deskripsi' => 'Paket paling ramah di kantong + pendampingan paling sabar. Sudah bantu 10+ UMKM & sekolah go-digital sejak 2019.',
                'icon' => 'umkm.svg',
                'rating' => 'Pendampingan sampai bisa, bukan ditinggal',
                'stats' => [
                    ['angka' => '14 Hari', 'label' => 'Toko Online Tayang'],
                    ['angka' => '2x', 'label' => 'Rata-rata Kenaikan Order Rapih'],
                    ['angka' => '100%', 'label' => 'Didampingi Sampai Bisa'],
                ],
                'masalah_judul' => 'Kenapa Jualan Online Rasanya Malah Makin Ribet?',
                'masalah' => [
                    ['judul' => 'Order Berserakan di 5 Chat', 'teks' => 'WA, IG, TikTok, Shopee — semua nanya stok, semua minta total. Satu kelewat = bintang 1.'],
                    ['judul' => 'Nggak Tahu Untung Beneran Berapa', 'teks' => 'Omzet gede tapi dompet tipis. Modal, ongkir, admin fee kecampur. Akhir bulan tebak-tebakan.'],
                    ['judul' => 'Nggak Sempat Bikin Katalog Bagus', 'teks' => 'Foto seadanya, deskripsi copas, toko kelihatan murah. Padahal produknya bagus banget.'],
                    ['judul' => 'Takut Tertipu Jasa Abal-Abal', 'teks' => 'Bayar mahal, web nggak jadi-jadi, ditinggal kabur. Trauma mau digitalisasi lagi.'],
                ],
                'solusi_judul' => 'Cara Paling Gampang Punya Toko Online Profesional',
                'solusi_teks' => 'Kami datang, fotoin produkmu (area Malang), bikinkan katalog + toko online + QRIS + pembukuan otomatis. Kamu cukup bisa buka WA — sisanya kami ajarin pelan-pelan sampai lancar.',
                'fitur_judul' => 'Satu Paket Beres: Jualan, Bayar, Catat',
                'fitur' => [
                    ['icon' => 'fa-solid fa-store', 'judul' => 'Toko Online Siap Share', 'teks' => 'Link cantik namamu.com. Katalog, keranjang, checkout, ongkir otomatis. Share ke WA/IG langsung laris.'],
                    ['icon' => 'fa-solid fa-qrcode', 'judul' => 'QRIS + Transfer Otomatis', 'teks' => 'Pembeli bayar scan, kamu dapat notif lunas. Nggak perlu cek mutasi satu-satu.'],
                    ['icon' => 'fa-solid fa-cash-register', 'judul' => 'Kasir HP Super Gampang', 'teks' => '3 tombol untuk jualan offline. Stok berkurang otomatis, struk terkirim WA. Nenek pun bisa.'],
                    ['icon' => 'fa-solid fa-book', 'judul' => 'Pembukuan Auto Jadi', 'teks' => 'Tiap transaksi tercatat: omzet, modal, untung bersih. Akhir bulan tinggal screenshot buat arisan.'],
                    ['icon' => 'fa-solid fa-camera', 'judul' => 'Foto & Copywriting Dibantu', 'teks' => 'Produk difotoin + deskripsi persuasif ditulisin. Toko kelihatan mahal, harga bisa naik.'],
                    ['icon' => 'fa-solid fa-graduation-cap', 'judul' => 'Sekolah Digital 1-on-1', 'teks' => 'Training privat + grup WA alumni UMKM. Tanya kapan pun dijawab bahasa manusia, bukan bahasa IT.'],
                ],
                'langkah' => [
                    ['judul' => 'Ngobrol Santai (Gratis)', 'teks' => 'Cerita jualanmu apa adanya. Kami kasih tahu paket paling hemat yang cocok — kalau belum butuh, kami bilang jujur.'],
                    ['judul' => 'Kami Kerjakan 14 Hari', 'teks' => 'Foto produk, bangun toko, setting QRIS & ongkir. Kamu tetap bisa jualan seperti biasa.'],
                    ['judul' => 'Training Sampai Bisa', 'teks' => 'Belajar input produk, proses order, baca laporan. Diulang sampai berani jalan sendiri.'],
                    ['judul' => 'Didampingi 90 Hari', 'teks' => 'Ada masalah tengah malam? WA aja. Kami pantau tokomu 3 bulan pertama gratis.'],
                ],
                'paket' => [
                    ['nama' => 'Laris Starter', 'deskripsi' => 'Buat yang baru mulai online', 'harga' => 'Rp 1,5 Jt', 'durasi' => 'sekali bayar', 'unggulan' => false, 'fitur' => ['Toko online 20 produk', 'Checkout WA + ongkir', 'QRIS (bantu daftar)', 'Training 2 jam privat', 'Gratis domain 1 tahun']],
                    ['nama' => 'Laris Pro', 'deskripsi' => 'Favorit UMKM omzet 10–100jt/bln', 'harga' => 'Rp 4,5 Jt', 'durasi' => 'sekali bayar / cicil 3x', 'unggulan' => true, 'fitur' => ['Semua Starter + 100 produk', 'Kasir HP + pembukuan auto', 'Kupon, flash sale, member poin', 'Foto 20 produk + copywriting', 'Pendampingan 90 hari', 'Laporan untung bersih harian']],
                    ['nama' => 'Laris Sultan / Franchise', 'deskripsi' => 'Punya cabang / reseller banyak', 'harga' => 'Hubungi Kami', 'durasi' => 'survei gratis', 'unggulan' => false, 'fitur' => ['Multi-cabang + komisi reseller', 'Stok pusat terpusat', 'Custom fitur & integrasi MP', 'Training tim + SOP digital', 'Prioritas support 1 tahun']],
                ],
                'kenapa' => ['Bahasa sederhana, nggak ada istilah IT membingungkan', 'Bisa cicil 3x tanpa kartu kredit', 'Garansi 30 hari uang kembali jika toko tidak tayang', 'Komunitas alumni UMKM: sharing supplier & strategi', 'Kami stay di Malang — bisa ketemu & dibantu langsung'],
                'testimoni' => ['nama' => 'Toko QQ Tempursari', 'jabatan' => 'Toko Sepatu — Lumajang', 'teks' => '“Umur 50 baru belajar online. Sekarang order dari TikTok masuk sendiri, laporan beres. Anak saya sampai kaget.”'],
                'faq' => [
                    ['q' => 'Saya gaptek banget, bisa?', 'a' => 'Sangat bisa — 70% klien kami mulai dari nol. Syaratnya cuma bisa buka WA. Training diulang sampai bisa, plus video panduan yang bisa ditonton ulang.'],
                    ['q' => 'Harus punya laptop?', 'a' => 'Tidak. Semua bisa dari HP Android. Laptop hanya memudahkan, bukan kewajiban.'],
                    ['q' => 'Biaya tahunannya berapa?', 'a' => 'Tahun pertama gratis domain + hosting. Tahun kedua dst ~Rp 650rb/tahun (sudah termasuk maintenance ringan). Tanpa potongan komisi penjualan.'],
                    ['q' => 'Bisa bantu daftarin QRIS & marketplace?', 'a' => 'Bisa. Kami dampingi daftar QRIS, Shopee, Tokopedia, TikTok Shop sampai approved + sinkron stoknya.'],
                    ['q' => 'Kalau berhenti, data saya bagaimana?', 'a' => 'Data produk + pelanggan bisa diekspor Excel kapan pun. Toko tetap milikmu. Tidak ada sandera data.'],
                ],
                'cta_judul' => 'Jangan Biarkan Produk Bagus Kalah Sama Toko Yang Kelihatan Bagus',
                'cta_teks' => 'Konsultasi 30 menit gratis + audit gratis akun jualanmu. Kami kasih 3 saran yang bisa langsung dipraktekkan — meski nggak jadi pakai jasa kami.',
            ],
            'devops-maintenance' => [
                'slug' => 'devops-maintenance',
                'badge' => 'DevOps & Maintenance',
                'judul' => 'Server Anti Down, Data Anti Hilang. Tidur Tenang.',
                'judul_span' => 'Tidur Tenang.',
                'subjudul' => 'Kami jagain server, website, database & jaringanmu 24/7: update, backup, keamanan, sampai восстановi saat down. Kamu fokus bisnis.',
                'deskripsi' => 'Spesialis yang dipercaya sekolah, klinik & puskesmas: sistem harus jalan Senin pagi, tanpa drama.',
                'icon' => 'devops.svg',
                'rating' => '15+ server aktif dijaga harian',
                'stats' => [
                    ['angka' => '99,9%', 'label' => 'Uptime Terjaga'],
                    ['angka' => '< 1 Jam', 'label' => 'Respon Insiden Kritis'],
                    ['angka' => 'Harian', 'label' => 'Backup Otomatis Dicek'],
                ],
                'masalah_judul' => 'Mimpi Buruk Setiap Owner Website...',
                'masalah' => [
                    ['judul' => 'Website Down Pas Dibutuhkan', 'teks' => 'PPDB dibuka, web down. Pasien mau daftar, sistem error. Reputasi hancur dalam sejam.'],
                    ['judul' => 'Data Hilang Tanpa Backup', 'teks' => 'Harddisk jebol / kena ransomware. 5 tahun data lenyap. Mau nangis pun data nggak balik.'],
                    ['judul' => 'Nggak Ada IT In-House', 'teks' => 'Gaji IT Rp 8jt/bulan kemahalan. Panggil tukang saat rusak? Mahal + lama + nggak ada yang tanggung jawab.'],
                    ['judul' => 'Diserang Bot & Judi Online', 'teks' => 'Web disusupi slot, email kena spam, server jadi tambang kripto. Nggak sadar sampai diblokir Google.'],
                ],
                'solusi_judul' => 'Punya Tim IT Senior Tanpa Gaji Karyawan',
                'solusi_teks' => 'Mulai Rp 500rb/bulan kamu dapat monitoring 24/7 + backup harian + update keamanan + teknisi siaga. Lebih murah dari sekali lembur tukang servis.',
                'fitur_judul' => 'Yang Kami Jagain Setiap Hari',
                'fitur' => [
                    ['icon' => 'fa-solid fa-heart-pulse', 'judul' => 'Monitoring 24/7 + Alarm', 'teks' => 'Server, web, database dipantau per menit. Down 5 menit? Kami sudah kerja sebelum kamu sadar.'],
                    ['icon' => 'fa-solid fa-database', 'judul' => 'Backup 3-2-1 Anti Hilang', 'teks' => '3 salinan, 2 media beda, 1 offsite. Restore diuji tiap bulan — bukan backup pajangan.'],
                    ['icon' => 'fa-solid fa-shield-halved', 'judul' => 'Hardening & Anti-Hack', 'teks' => 'Firewall, WAF, anti-DDoS, update patch, scan malware. Web judi/slot auto-dibersihkan.'],
                    ['icon' => 'fa-solid fa-gauge-high', 'judul' => 'Optimasi Speed', 'teks' => 'Web lemot kami bikin wusss: caching, CDN, database tuning. Skor PageSpeed naik, pengunjung betah.'],
                    ['icon' => 'fa-solid fa-network-wired', 'judul' => 'Jaringan Lokal & WiFi', 'teks' => 'Setting mikrotik, VLAN, hotspot voucher, CCTV. Kantor/sekolah online stabil 100+ user.'],
                    ['icon' => 'fa-solid fa-file-shield', 'judul' => 'Laporan Bulanan Rapi', 'teks' => 'Uptime, insiden, update, rekomendasi — dikirim PDF tiap awal bulan. Buat laporan ke atasan gampang.'],
                ],
                'langkah' => [
                    ['judul' => 'Health Check Gratis', 'teks' => 'Kami audit server/web/jaringanmu: celah, speed, backup. Dapat rapor + estimasi beresnya.'],
                    ['judul' => 'Amankan & Rapikan', 'teks' => 'Minggu pertama: tutup celah, pasang monitoring, aktifkan backup, dokumentasikan semua akses.'],
                    ['judul' => 'Jaga Harian', 'teks' => 'Update, patroli keamanan, cek backup, optimasi. Kamu terima laporan, bukan begadang.'],
                    ['judul' => 'Siaga Saat Darurat', 'teks' => 'Insiden? Satu WA, teknisi respon < 1 jam. Target pulih < 4 jam untuk kritis.'],
                ],
                'paket' => [
                    ['nama' => 'Jaga Web', 'deskripsi' => 'Buat 1 website / company profile', 'harga' => 'Rp 500 Rb', 'durasi' => '/bulan', 'unggulan' => false, 'fitur' => ['Monitoring uptime 24/7', 'Backup mingguan + SSL', 'Update CMS & plugin', 'Bersih-bersih malware 1x', 'Laporan bulanan']],
                    ['nama' => 'Jaga Bisnis', 'deskripsi' => 'Server + web + database aktif', 'harga' => 'Rp 1,5 Jt', 'durasi' => '/bulan', 'unggulan' => true, 'fitur' => ['Semua Jaga Web + backup harian', 'Hardening + WAF + anti-DDoS', 'Optimasi speed & database', 'Respon insiden < 1 jam', 'Free 2 jam perubahan minor', 'Laporan + konsultasi prioritas']],
                    ['nama' => 'Dedicated DevOps', 'deskripsi' => 'Infrastruktur kompleks / multi-server', 'harga' => 'Hubungi Kami', 'durasi' => 'kontrak tahunan', 'unggulan' => false, 'fitur' => ['Multi-server + load balancer', 'CI/CD + staging pipeline', 'On-call 24/7 + SLA 99,9%', 'Audit keamanan berkala', 'Dedicated engineer + onsite']],
                ],
                'kenapa' => ['Spesialis Linux, Docker, Mikrotik & cloud Indonesia (IDCloud, Biznet, AWS)', 'Dokumentasi lengkap — kamu nggak dikunci satu vendor', 'Berpengalaman di faskes & sekolah yang nggak boleh down', 'Harga flat bulanan, tanpa biaya siluman per klik', 'Bisa onsite Malang Raya & remote seluruh Indonesia'],
                'testimoni' => ['nama' => 'SMK PGRI 6 Malang', 'jabatan' => 'Waka Kurikulum', 'teks' => '“PPDB 2000 pendaftar, web anteng. Tahun lalu down 2 hari. Bedanya cuma pindah maintenance ke Eraya.”'],
                'faq' => [
                    ['q' => 'Server saya di mana? Bisa dijaga?', 'a' => 'Di mana pun: cPanel/shared hosting, VPS, dedicated, cloud (AWS/GCP/IDCloud), bahkan server fisik di kantormu. Kami akses via SSH/VPN aman + NDA.'],
                    ['q' => 'Kalau sudah down sekarang, bisa tolong?', 'a' => 'Bisa — layanan Rescue (one-time) Rp 750rb–2,5jt tergantung kasus. Rata-rata pulih 2–6 jam. Setelah pulih kami sarankan paket jaga agar tidak terulang.'],
                    ['q' => 'Apakah password saya aman?', 'a' => 'Semua kredensial disimpan di vault terenkripsi, akses dibatasi engineer bertugas, tercatat log. Kontrak + NDA standar untuk semua klien.'],
                    ['q' => 'Bisa bantu migrasi / pindah server?', 'a' => 'Sangat bisa dan gratis untuk pelanggan tahunan. Migrasi zero-downtime (pindah tanpa web mati), termasuk pindah domain & email.'],
                    ['q' => 'Kontrak minimal berapa lama?', 'a' => 'Bulanan, tanpa ikatan. Tapi 90% klien ambil tahunan karena gratis 2 bulan + prioritas rescue. Berhenti kapan pun, akses diserahkan rapi.'],
                ],
                'cta_judul' => 'Jangan Tunggu Down Baru Panik',
                'cta_teks' => 'Klaim free health-check server (senilai Rp 500rb): kami kasih rapor 12 titik + 3 aksi prioritas. Tanpa komitmen.',
            ],
        ];
    }
}
