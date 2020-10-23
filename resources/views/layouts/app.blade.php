<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/illustrations/a.svg" type="image/x-icon">
    <meta name="title" content="@yield('title')">
    <meta name="description" content="Winwyse is a lotto numbers prediction website for Ghanaians looking to make money from lottery.">
    <meta name="keywords" content="lotto, lottory, winwyse, lotto prediction, lottery predictor, lotto numbers">
    <meta name="author" content="Cassidy Blay" />
    <meta name="contact" content="cassidyblay@gmail.com" />
    <meta name="copyright" content="Copyright (c)2020 winwyse.com" />

    <meta property="og:site_name" content="Winwyse">
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="Winwyse is a lotto numbers prediction website for Ghanaians looking to make money from lottery." />
<meta property="og:image" itemprop="image" content="https://www.winwyse.com/illustrations/a.svg">
<meta property="og:type" content="website" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.winwyse.com/">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="Winwyse is a lotto numbers prediction website for Ghanaians looking to make money from lottery."
<meta property="og:image" content="https://www.winwyse.com/illustrations/a.svg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.winwyse.com/">
<meta property="twitter:title" content="@yield('title')">
<meta property="twitter:description" content="Winwyse is a lotto numbers prediction website for Ghanaians looking to make money from lottery.">
<meta property="twitter:image" content="https://www.winwyse.com/illustrations/a.svg">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('head-after')

    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
/>
</head>
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <strong>Winwyse</strong>
    </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">

      <div class="navbar-end">

          <a class="navbar-item" href="/about-us">
            About Us
          </a>
          <a class="navbar-item" href="/reviews">
            Reviews
          </a>

        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a href="" target="_blank" class="bd-tw-button button">
                <span class="icon">
                  <i class="fa fa-instagram"></i>
                </span>
                <span>
                  Follow
                </span>
              </a>
            </p>
            <p class="control">
              <a class="button is-primary" href="https://tawk.to/chat/5f4552e61e7ade5df443df74/default">
                <span class="icon">
                  <i class="fa fa-envelope"></i>
                </span>
                <span>Get In Touch!</span>
              </a>
            </p>
          </div>

    </div>
  </nav>



<div id="app">

    @yield('content')

</div>

@stack('bottom')
<footer class="footer has-background-info">
  <div class="container">
    <div class="level">
      <div class="level-left">
        <div class="level-item"><a class="title is-4 has-text-white" href="/">Winwyse</a></div>
      </div>
      <div class="level-right"><a class="level-item" href="about-us">About</a><a class="level-item" href="https://tawk.to/chat/5f4552e61e7ade5df443df74/default">Contact</a><a class="level-item" href="terms">Terms & Conditions</a>
        <a class="level-item" href="cookies">Cookie Policy</a><a class="level-item" href="/sitemap.xml">Sitemap</a></div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="buttons"><a class="button " target="_blank" rel=noreferrer href="https://api.whatsapp.com/send?phone=233209859591"><i class="fa fa-whatsapp"></i> </a></div>
      </div>
      <div class="column has-text-centered has-text-right-tablet">
        <a href="/" class="subtitle is-6 has-text-white">© <script>document.write(new Date().getFullYear())</script> Winwyse. All right reserved. </a><br><p class="has-text-white">Powered by <a target="_blank" href="https://www.laddle.io">Laddle</a></p>
      </div>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

// Add a click event on each of them
$navbarBurgers.forEach( el => {
el.addEventListener('click', () => {

// Get the target from the "data-target" attribute
const target = el.dataset.target;
const $target = document.getElementById(target);

// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
el.classList.toggle('is-active');
$target.classList.toggle('is-active');

});
});
}

});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
(document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
  $notification = $delete.parentNode;

  $delete.addEventListener('click', () => {
    $notification.parentNode.removeChild($notification);
  });
});
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f4552e61e7ade5df443df74/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
