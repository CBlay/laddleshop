@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
{{ $dtitle}} Details | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')

<section class="hero is-fullheight">
<div class="hero-body">
<div class="container">
<h3 class="title is-3 has-text-primary">Product Description For {{ $dtitle}}</h3><hr>

@if(count($descriptions) > 0)
@foreach ($descriptions as $describe)
<section class="section">
  <div class="container">
    <div class="columns is-desktop is-vcentered">
      <div class="column is-6-desktop"><img src="{{ $describe->image }}" alt="{{ $describe->title }}"></div>
      <div class="column is-6-desktop">
        <h2 class="title has-text-primary is-spaced">{{ $describe->title }}</h2>
        <p class="subtitle is-5 has-text-primary"> <strong>Ghs{{ $describe->price }}</strong></p>
        <p class="subtitle">{{ $describe->description }}</p>
        <div class="columns">
          <div class="column is-half nf">

            <form action="{{ route('add.cart') }}" method="post">
            <div class="field is-horizontal">
              <div class="field-body">
                <div class="field">
                  <input name="price" id="price" value="{{ $describe->price }}" type="number" hidden>
                  <input name="title" id="title" type="text" value="{{ $describe->title }}" hidden>
                  <div class="control">
                    <input class="input" id="quantity" name="quantity" type="number" value="1">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <button id="ajaxSubmit" type="submit" class="button is-primary">Add to bag</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
        <hr>
        <div class="level is-mobile">
            <div class="level-left">
              <div class="level-item has-text-primary">Category:  <strong> {{ $describe->category }}</strong></div>
            </div>
          <div class="level-right">
            <div class="level-item" > <button onclick="myFunction()" class="button is-primary is-small" name="button">Copy link to product</button> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@else
<h3 class="notification is-danger title is-3">Product Description For {{ $dtitle}} not found!</h3><hr>

@endif
</div>
</div>
</section>
<section>
  <div class="container">
    <div class="message-body is-primary">
      <p class="is-small">If the exact flowers, plants, or container you have selected is unavailable,
      we will create a beautiful bouquet with the freshest available plants or flowers. Only
    items of equal or higher value will be substituted.<br>
  </p><br>
  </div>
  </div>
</section><br>
@if(session()->get('message'))
<div class="modal is-active" id="#modalg">
<div class="modal-background" onclick="guest();"></div>
<div class="modal-card"><div class="notification is-success is-light subtitle is-5">
        {{ session()->get('message') }}<hr>
        <a onclick="guest();" class="is-text is-success button">Continue Shopping</a><hr>
        <a href="checkout" class="is-text is-primary button">Proceed to checkout</a>
        <hr>
        <a onclick="cart();"><small>View items in shopping bag</a>
        </div>
</div>
</div>
<script>
function guest() {
var element = document.getElementById("#modalg");
element.classList.remove("is-active");
}
</script>
@endif

<script>
function myFunction() {
  var dummy = document.createElement('input'),
      text = window.location.href;

  document.body.appendChild(dummy);
  dummy.value = text;
  dummy.select();
  document.execCommand('copy');
  document.body.removeChild(dummy);
  alert("Copied the text: " + dummy.value);
}
</script>

@endsection
