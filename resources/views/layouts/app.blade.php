<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @foreach ($logos as $logo)
  <link rel="icon" href="{{ $logo->logo }}" sizes="192x192" type="image/x-icon">
  @endforeach
  <meta name="title" content="@yield('title')">
<meta name="description" content="Florist in Ghana, FlowerGhana delivers hand-crafted bouquets of FRESH flowers and plants in Ghana. SAME-DAY hand-delivery. Quality. Order online. Pay online.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://flowersghana.com/">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="Florist in Ghana, FlowerGhana delivers hand-crafted bouquets of FRESH flowers and plants in Ghana. SAME-DAY hand-delivery. Quality. Order online. Pay online.">
<meta property="og:image" content="https://flowersghana.com/storage/Flower%20Ghana.png">
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://flowersghana.com/">
<meta property="twitter:title" content="@yield('title')">
<meta property="twitter:description" content="Florist in Ghana, FlowerGhana delivers hand-crafted bouquets of FRESH flowers and plants in Ghana. SAME-DAY hand-delivery. Quality. Order online. Pay online.">
<meta property="twitter:image" content="https://flowersghana.com/storage/Flower%20Ghana.png">

  <meta name="keywords" content="flowers, send flowers to Ghana, send flowers in Ghana, flower delivery, buy fresh flowers, rose flowers in Ghana, bouquet, flowers for sale, florist, bouquet of flowers, flowersghaha, flowers ghana, flower ghana, ghana flower, ghana flowers, gift flowers">
  <meta name="author" content="Cassidy Blay" />
  <meta name="contact" content="cassidyblay@gmail.com" />
  <meta name="copyright" content="Copyright (c)2020 FlowersGhana.com" />
  <meta name="google-site-verification" content="sSptwoLmfmCDsOmhdYVomW_kcMKEZu4ckCfUEROyemk" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Scripts --}}
    @stack('head-scripts')

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "Red Bliss",
  "image" : "https://flowersghana.com/storage/306C8CA9-A7AA-467F-89FF-A61D888B9842.jpeg",
  "description" : "Approximately 10&quot; W x 21&quot; H. This is an arrangement of a dozen red roses. Suitable for any romantic occasion",
  "url" : "https://flowersghana.com/description?title=Red%20Bliss",
  "brand" : {
    "@type" : "Brand",
    "name" : "FlowerGhana",
    "logo" : "https://flowersghana.com/storage/Flower%20Ghana.png"
  },
  "offers" : {
    "@type" : "Offer",
    "availability": "https://flowersghana.com/description?title=Red%20Bliss",
    "price" : "520",
    "priceCurrency": "Ghs"
  }
}
</script>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "Black Celestial with Ballons",
  "image" : "https://flowersghana.com/storage/roses_of_delight_black_wrap_bouquet.png",
  "description" : "Approximately 10&quot; W x 21&quot; H. The wrap comes with 3 big balloons inscribed with particular occassion. An elegant gift for modern women",
  "url" : "https://flowersghana.com/description?title=Black%20Celestial%20with%20Ballons",
  "brand" : {
    "@type" : "Brand",
    "name" : "FlowerGhana",
    "logo" : "https://flowersghana.com/storage/Flower%20Ghana.png"
  },
    "offers" : {
    "@type" : "Offer",
    "availability": "https://flowersghana.com/description?title=Red%20Bliss",
    "price" : "700",
    "priceCurrency": "Ghs"
  }
}
</script>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "Bright Up My Day",
  "image" : "https://flowersghana.com/storage/3.jpg",
  "description" : "Imagine the simle on the face of that person you love. The smile as radiant as the sun itself. This is what the arrangement signifies. Surprise that person whose smile melts your heart with the lovely collection. Approximately 10&quot; W x 21&quot; H.",
  "url" : "https://flowersghana.com/description?title=Bright%20Up%20My%20Day",
  "brand" : {
    "@type" : "Brand",
    "name" : "FlowerGhana",
    "logo" : "https://flowersghana.com/storage/Flower%20Ghana.png"
  },
      "offers" : {
    "@type" : "Offer",
    "availability": "https://flowersghana.com/description?title=Red%20Bliss",
    "price" : "500",
    "priceCurrency": "Ghs"
  }
}
</script>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "FlowerGhana",
  "image" : "http://flowersghana.com/storage/Flower%20Ghana.png",
  "telephone" : "0242877874",
  "address" : {
    "@type" : "PostalAddress",
    "addressLocality" : "Accra",
    "addressCountry" : "Ghana"
  },
  "openingHoursSpecification" : {
    "@type" : "OpeningHoursSpecification",
    "dayOfWeek" : {
      "@type" : "DayOfWeek",
      "name" : "Monday-Saturday"
    }
  },
  "url" : "https://flowersghana.com/",
  "priceRange" : "Averagely 500 Ghana cedis"
}
</script>

    @stack('head-after')
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96580657-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96580657-3');
</script>

<body>
@if(count($name) > 0)
  <section class="hero">
  <div class="notification is-light is-primary has-text-centered">
    @foreach ($name as $uu)
      <small>
        {{ $uu->message }}
      </small>
      @endforeach
  </div>
</section>
@endif

  <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      @if(count($logos) > 0)
      @foreach ($logos as $logo)
      <img src="{{ $logo->logo }}" width="112" height="28">
      @endforeach
      @else
      @foreach ($name as $uu)
          <strong class="has-text-primary">{{ $uu->shopname }}</strong>
        @endforeach
      @endif
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="featured-products">
        Featured
      </a>

      <a class="navbar-item" href="popular-products">
        Popular
      </a>

      <a class="navbar-item" href="more-products">
        More
      </a>

      <a class="navbar-item" href="about-us">
        About
      </a>

      <a class="navbar-item" href="contact-us">
        Contact
      </a>

      <a class="navbar-item" href="reviews">
        Reviews
      </a>
    </div>

    <div class="navbar-end">
      @guest
      <a class="navbar-item" href="search">
        Search
      </a>
      @if (Route::has('register'))
        <a class="navbar-item" href="{{ route('login') }}">
          Log in
        </a>
        @endif
        @else
        <a class="navbar-item" href="home">
          {{ Auth::user()->name }}
        </a>
      <a class="button is-light" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
        @endguest
        <a onclick="cart();" class="navbar-item">
          <i class="fa fa-shopping-bag has-text-primary subtitle is-4"></i>
        </a>
    </div>
  </div>
</nav>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
           integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
           crossorigin="anonymous">
</script>
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
<div id="app">

    @yield('content')

</div>
<div class="modal" id="#modal">
<div class="modal-background" onclick="remove();"></div>
<div class="modal-card nff">
  @if(session()->get('bagData'))
  <header class="modal-card-head has-background-primary">
    <p class="modal-card-title">Shopping Bag</p>
    <a class="delete" onclick="remove();" aria-label="close"></a>
  </header>
  <section class="modal-card-body">

    @foreach(session()->get('bagData') as $pp)

    <div class="card block">
      <div class="card-content">
        <div class="media">
          <div class="media-content">
            <h3 class="title is-5 has-text-primary"><strong>{{ $pp[0] }}</strong></h3>
            <p class="subtitle is-6">Quantity: <strong>{{ $pp[1] }}</strong></p>
              <p class="subtitle is-6 has-text-primary">Amount(Ghs): <strong>{{ $pp[2] }}</strong></p>
          </div>
        </div>
      </div>
    </div>
        @endforeach


    </section>
    <footer class="modal-card-foot">
      <a href="checkout" class="button is-success">Checkout</a>
      <form id="remove" action="{{ route('clear.cart') }}" method="post">
      <button type="submit" class="button">Clear bag</button>
    </form>
    </footer>
    @else
            <div class="notification container is-success is-light subtitle is-5">
            You shopping bag is empty! </br>
            <a onclick="remove();" class="is-text button">Start Shopping</a>
            </div>
    @endif
</div>
</div>
@if(session()->get('message7'))
<div class="modal is-active" id="#modal2">
<div class="modal-background" onclick="remove();"></div>
<div class="modal-card"><div class="notification is-success is-light subtitle is-5">
        {{ session()->get('message7') }}<hr>
        <a href="featured-products" class="is-text is-success button">Continue Shopping</a><hr>

        </div></div>
      </div>

@endif
<script>
  function cart() {
  var element = document.getElementById("#modal");
  element.classList.add("is-active");
}
</script>
<script>
function remove() {
var element = document.getElementById("#modal");
element.classList.remove("is-active");
}
</script>
<footer class="footer">
  <div class="container">
    <div class="level">
      <div class="level-left">
        @foreach ($name as $uu)
        <div class="level-item"><a class="title has-text-primary is-4" href="/">{{ $uu->shopname }}</a></div>
        @endforeach
      </div>
      <div class="level-right"><a class="level-item" href="about-us">About</a><a class="level-item" href="contact-us">Contact</a><a class="level-item" href="#">Terms & Conditions</a><a class="level-item" href="#">Cookie Policy</a></div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        @foreach ($name as $uu)
        <div class="buttons"><a class="button" target="_blank" href="{{ $uu->twitter }}"><i class="fa fa-twitter"></i> </a><a class="button" target="_blank" href="{{ $uu->facebook }}"><i class="fa fa-facebook"></i></a><a class="button" target="_blank" href="{{ $uu->instagram }}"><i class="fa fa-instagram"></i></a></div>
        @endforeach
      </div>
      <div class="column has-text-centered has-text-right-tablet">
        <a href="https://laddle.io/shop" class="subtitle has-text-primary is-6">© <script>document.write(new Date().getFullYear())</script> Laddle Shops. All right reserved.</a>
      </div>
    </div>
  </div>
</footer>

@stack('bottom')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb6f778967ae56c52184c26/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
