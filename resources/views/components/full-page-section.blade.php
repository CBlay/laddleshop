<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

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
  <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/">
        <i class="fa fa-home has-text-white subtitle is-4"> </i>
      </a>
    </div>

    <div class="navbar-end">
        <a class="navbar-item">
          <i class="fa fa-shopping-bag has-text-white subtitle is-4"></i>
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


<section class="section hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-fifths">
                    {!! $slot !!}
                </div>
            </div>
        </div>
    </div>
</section>



</div>
