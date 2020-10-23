<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach ($logos as $logo)
    <link rel="icon" href="{{ $logo->logo }}" sizes="192x192" type="image/x-icon">
    @endforeach
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! $title !!}</title>

    {{-- Scripts --}}
    @stack('head-scripts')

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('head-after')
</head>
<body>
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
      <a class="navbar-item" href="/admin/admin-welcome">
        Get Started
      </a>

      <a class="navbar-item" href="/admin/orders">
         Orders
      </a>

      <a class="navbar-item" href="/admin/messages">
        Messages
      </a>

      <a class="navbar-item" href="/admin/products">
        Products
      </a>

      <a class="navbar-item" href="/admin/logo">
        Logo
      </a>

      <a class="navbar-item" href="/admin/delete">
        Delete
      </a>

      <a class="navbar-item" href="/admin/deletereviews">
        Remove Review
      </a>


    </div>

    <div class="navbar-end">
      <a class="navbar-item" target="_blank" href="https://tawk.to/chat/5eb5c6068ee2956d739f6301/default">
        <i class="fa fa-comment has-text-primary is-2"> Support</i>
      </a>
    </div>

  </div>
</nav>
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
<div id="app">

    @yield('content')

</div>
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

<section class="hero is-medium is-bold has-background-white">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2 has-text-white">
              @if(session()->get('message1'))
                  <div class="notification is-success is-light subtitle is-4">
                    <button class="delete"></button>
                     {{ session()->get('message1') }}
                  </div>
              @endif
                    {!! $slot !!}
            </h1>
        </div>
    </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="level">
      <div class="column has-text-centered has-text-right-tablet">
        <a href="https://www.laddle.io/shop" class="subtitle has-text-primary is-6">© <script>document.write(new Date().getFullYear())</script> Laddle Shop. All right reserved.</a>
      </div>
  </div>
</footer>

@stack('bottom')

</body>
</html>
