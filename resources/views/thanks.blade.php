@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Thanks for shopping with us | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')
<section class="hero is-fullheight">
<div class="hero-body">
  <div class="container">

      <div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-content">
    <div class="title has-text-white">
    Thank you for shopping with us. Please do come back.
    </div>

    <div class="buttons control">
    <a class="button is-primary is-medium" target="_blank" href="https://tawk.to/chat/5eb6f778967ae56c52184c26/default?$_tawk_sk=5f4c19ec7509fd1e0ad9dee9&$_tawk_tk=84340738b9313d10087841604b9bc4cb&v=692">
      <strong>Talk to us</strong>
    </a>
    <a class="button is-success is-medium" href="/">
      Keep Shopping
    </a>
  </div><hr>
  <p class="has-text-white is-bold">This page redirects after 2 minutes.</p>
    </div>
    </div>
    <script>
            setTimeout(function(){
               window.location.href = 'https://www.flowersghana.com/';
            }, 120000);
    </script>
</div>
</div>

  </section>
@endsection
