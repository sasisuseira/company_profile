<!doctype html>
<html lang="id" data-theme="dark">
<head>
    <script>
    /* EDS theme: terapkan pilihan tersimpan sebelum CSS agar tidak flicker. Default: dark */
    (function(){try{var t=localStorage.getItem('eds-theme');if(t!=='light'&&t!=='dark'){t='dark';}document.documentElement.setAttribute('data-theme',t);}catch(e){document.documentElement.setAttribute('data-theme','dark');}})();
    </script>
    @include('includes.assetsheader')
    @yield('css_load')
</head>
<body>
@include('includes.header')
@yield('konten_utama')
@include('includes.footer', ['use_footer' => $use_footer])
@include('includes.assetsfooter')
@yield('js_load')
</body>
</html>