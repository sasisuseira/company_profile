<!--==============================
    All Js File
============================== -->
<script src="{{ asset('template_v1/js/vendor/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('template_v1/js/bootstrap.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('template_v1/js/slick.min.js') }}"></script>
<!-- WOW.js Animation -->
<script src="{{ asset('template_v1/js/wow.min.js') }}"></script>
<!-- particles.js -->
<script src="{{ asset('template_v1/js/particles.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('template_v1/js/jquery.magnific-popup.min.js') }}"></script>
<!-- imagesloaded -->
<script src="{{ asset('template_v1/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- nice-select -->
<script src="{{ asset('template_v1/js/jquery.nice-select.min.js') }}"></script>
<!-- Main Js File -->
<script src="{{ asset('template_v1/js/main.js') }}"></script>
{{-- EDS global: smooth scroll untuk semua link # + sembunyikan hash dari URL --}}
<script>
document.addEventListener('DOMContentLoaded',function(){
  function cleanUrl(){history.replaceState(null,'',location.pathname+location.search);}
  document.querySelectorAll('a[href*="#"]').forEach(function(a){
    var raw=a.getAttribute('href');
    if(!raw||raw==='javascript:void(0)'||raw==='#')return;
    a.addEventListener('click',function(e){
      var url=new URL(a.href,location.origin);
      var hash=url.hash;
      if(!hash||hash.length<2)return;
      // hanya samakan path (mis. /#layanan_kami atau #paket-erp di halaman sama)
      var samePath=(url.pathname===location.pathname)||(url.pathname==='/'&&location.pathname==='/');
      if(!samePath)return; // beda halaman: biarkan navigasi normal
      var el=document.querySelector(hash);
      if(el){e.preventDefault();el.scrollIntoView({behavior:'smooth',block:'start'});cleanUrl();}
    });
  });
  // kalau landing dengan hash (mis. back dari halaman lain), scroll halus lalu bersihkan
  if(location.hash&&location.hash.length>1){
    var t=document.querySelector(location.hash);
    if(t){setTimeout(function(){t.scrollIntoView({behavior:'smooth',block:'start'});cleanUrl();},150);}
  }
  /* TOC sticky-stack: template punya overflow hidden di body yang mematikan
     position:sticky, jadi kunci pakai fixed saat kolom sudah kelewat header,
     dan pin ke dasar kolom saat artikel habis agar tidak tembus ke footer */
  var tocCards=Array.prototype.slice.call(document.querySelectorAll('[data-toc]'));
  var tocTick=false;
  function tocContentWidth(col){
    var cs=getComputedStyle(col);
    return col.clientWidth-parseFloat(cs.paddingLeft)-parseFloat(cs.paddingRight);
  }
  tocCards.forEach(function(card){
    var col=card.parentElement;
    if(col && getComputedStyle(col).position==='static'){col.style.position='relative';}
  });
  function updateToc(){
    tocTick=false;
    tocCards.forEach(function(card){
      var col=card.parentElement;
      if(!col)return;
      if(window.innerWidth<992){
        card.classList.remove('is-fixed');
        card.style.position='';card.style.top='';card.style.bottom='';
        card.style.left='';card.style.right='';card.style.width='';
        return;
      }
      var r=col.getBoundingClientRect();
      var cardH=card.offsetHeight;
      var top=90;
      if(r.top<=top && r.bottom>cardH+top+20){
        // tengah artikel: kunci ikut layar
        card.classList.add('is-fixed');
        card.style.position='fixed';
        card.style.top=top+'px';
        card.style.bottom='';
        card.style.left=(r.left+parseFloat(getComputedStyle(col).paddingLeft))+'px';
        card.style.right='';
        card.style.width=tocContentWidth(col)+'px';
      }else if(r.top<=top){
        // artikel habis / footer dekat: pin ke dasar kolom, ikut scroll ke atas
        card.classList.remove('is-fixed');
        card.style.position='absolute';
        card.style.top='auto';
        card.style.bottom='0';
        card.style.left=getComputedStyle(col).paddingLeft;
        card.style.right=getComputedStyle(col).paddingRight;
        card.style.width='auto';
      }else{
        // masih di atas: posisi normal
        card.classList.remove('is-fixed');
        card.style.position='';card.style.top='';card.style.bottom='';
        card.style.left='';card.style.right='';card.style.width='';
      }
    });
  }
  function requestToc(){if(!tocTick){tocTick=true;requestAnimationFrame(updateToc);}}
  if(tocCards.length){window.addEventListener('scroll',requestToc,{passive:true});window.addEventListener('resize',requestToc);updateToc();}
});
</script>
<!--Start of Tawk.to Script
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/672a4a714304e3196add9090/1ibuj5jd9';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
End of Tawk.to Script-->