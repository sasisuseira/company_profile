@php
    // ===== SEO defaults (bisa di-override per halaman via $seo dari controller) =====
    $seo = $seo ?? [];
    $seoTitle = $seo['title'] ?? 'PT. Eraya Digital Solusindo | Solusi Digital, AI Agentic, Otomatisasi & IoT untuk UMKM dan Startup';
    $seoDescription = $seo['description'] ?? 'PT. Eraya Digital Solusindo membantu UMKM, Pemerintah, Individu, dan Startup berkembang dengan Pemanfaatan AI, AI Agentic, Otomatisasi, dan IoT terkini — dari aplikasi, ERP, sampai monitoring real-time.';
    $seoKeywords = $seo['keywords'] ?? 'Solusi digital, IT untuk UMKM, teknologi bisnis, startup, Pemanfaatan AI, AI Agentic, Otomatisasi, IoT, PT Eraya Digital Solusindo, jasa pembuatan website, jasa pembuatan aplikasi, software house malang, software house jakarta, konsultan it malang, konsultan AI malang, konsultan IoT jakarta, konsultan it jakarta';
    $seoCanonical = $seo['canonical'] ?? url()->current();
    $seoRobots = $seo['robots'] ?? 'index, follow, max-image-preview:large, max-snippet:-1';
    $seoType = $seo['type'] ?? 'website';
    $seoSiteName = 'PT. Eraya Digital Solusindo';
    $seoLocale = 'id_ID';
    // Logo persegi hanya_logo = identitas saat link di-copy ke WA/FB/X/Telegram
    $seoImage = $seo['image'] ?? url('template_v1/img/logo/hanya_logo.jpg');
    $seoImageAlt = $seo['image_alt'] ?? 'Logo PT. Eraya Digital Solusindo';
    // JSON-LD dibangun di blok @php agar string '@context' / '@type' tidak dimakan compiler Blade
    $jsonLd = json_encode([
        'context' => 'https://schema.org',
        'graph' => [
            [
                'type' => 'Organization',
                'id' => url('/').'#organization',
                'name' => 'PT. Eraya Digital Solusindo',
                'url' => url('/'),
                'logo' => [
                    'type' => 'ImageObject',
                    'url' => url('template_v1/img/logo/hanya_logo.jpg'),
                ],
                'image' => url('template_v1/img/logo/hanya_logo.jpg'),
                'description' => $seoDescription,
            ],
            [
                'type' => 'WebSite',
                'id' => url('/').'#website',
                'url' => url('/'),
                'name' => 'PT. Eraya Digital Solusindo',
                'publisher' => ['id' => url('/').'#organization'],
                'inLanguage' => 'id-ID',
            ],
            [
                'type' => 'WebPage',
                'id' => $seoCanonical.'#webpage',
                'url' => $seoCanonical,
                'name' => $seoTitle,
                'description' => $seoDescription,
                'isPartOf' => ['id' => url('/').'#website'],
                'inLanguage' => 'id-ID',
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    // kembalikan prefix @ yang wajib ada di schema.org
    $jsonLd = str_replace(
        ['"context"', '"graph"', '"type"', '"id"'],
        ['"@context"', '"@graph"', '"@type"', '"@id"'],
        $jsonLd
    );
@endphp
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="keywords" content="{{ $seoKeywords }}">
<meta name="author" content="PT. Eraya Digital Solusindo">
<meta name="robots" content="{{ $seoRobots }}">
<meta name="googlebot" content="index, follow, max-image-preview:large, max-snippet:-1">
<link rel="canonical" href="{{ $seoCanonical }}">
<meta name="theme-color" content="#0f172a">
<meta name="color-scheme" content="light">
<meta name="format-detection" content="telephone=no">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicons : hanya_logo (tab browser, bookmark, HP) -->
<link rel="icon" href="{{ url('favicon.ico') }}" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="{{ url('template_v1/img/logo/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('template_v1/img/logo/favicon-16x16.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('template_v1/img/logo/apple-touch-icon.png') }}">
<link rel="manifest" href="{{ url('site.webmanifest') }}">
<meta name="msapplication-TileColor" content="#0f172a">
<meta name="msapplication-TileImage" content="{{ url('template_v1/img/logo/android-chrome-192x192.png') }}">

<!-- Open Graph : preview keren + logo saat link di-copy ke WhatsApp / FB / LinkedIn / Telegram -->
<meta property="og:type" content="{{ $seoType }}">
<meta property="og:site_name" content="{{ $seoSiteName }}">
<meta property="og:locale" content="{{ $seoLocale }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $seoCanonical }}">
<meta property="og:image" content="{{ $seoImage }}">
<meta property="og:image:alt" content="{{ $seoImageAlt }}">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1080">
<meta property="og:image:height" content="1080">

<!-- Twitter / X Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoImage }}">
<meta name="twitter:image:alt" content="{{ $seoImageAlt }}">

<!-- Structured data : bantu Google tampilkan logo + nama perusahaan -->
<script type="application/ld+json">
{!! $jsonLd !!}
</script>

<!--==============================
    Google Fonts
============================== -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">


<!--==============================
    All CSS File
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('template_v1/css/bootstrap.min.css') }}">
<!-- Fontawesome Icon -->
<link rel="stylesheet" href="{{ asset('template_v1/css/fontawesome.min.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('template_v1/css/magnific-popup.min.css') }}">
<!-- nice-select -->
<link rel="stylesheet" href="{{ asset('template_v1/css/nice-select.min.css') }}">
<!-- Slick Slider -->
<link rel="stylesheet" href="{{ asset('template_v1/css/slick.min.css') }}">
<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('template_v1/css/style.css') }}">
<!-- EDS fix: font profesional + kontras -->
<link rel="stylesheet" href="{{ asset('template_v1/css/eds-override.css') }}">
