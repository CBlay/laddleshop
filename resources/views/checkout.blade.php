@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Checkout | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')
<section class="hero is-fullheight">
<div class="hero-body">
  <div class="container">

    @guest
    @if (Route::has('register'))
      <div class="modal is-active" id="#modal">
    <div class="modal-background"></div>
    <div class="modal-content">
    <div class="title has-text-white">
    Sign in to continue shopping...
    </div>

    <div class="buttons control">
    <a class="button is-primary is-medium" href="{{ route('register') }}">
      <strong>Sign up</strong>
    </a>
    <a class="button is-success is-medium" href="{{ route('login') }}">
      Log in
    </a> <br> <hr>
    <a onclick="remove();" class="button has-background-white is-large">
      Continue as Guest
    </a>
    </div>
    <button class="modal-close is-large" onclick="remove();" aria-label="close"></button>
    </div>
    </div>
    @endif
    @endif

    @if(session()->get('bagData'))
  <h1 class="title is-3 has-text-primary">Let's complete your order!</h1><hr>

  <form method="post" action="{{ route('checkout') }}" enctype="multipart/form-data">
      <input type="text" name="email" value="{{ $email }}" hidden>

  <div class="control">
  <label class="label">Pick Delivery Date</label>
  <input class="input @error('dte') is-invalid @enderror" type="date" name="dte" value="">
  <small class="has-text-danger">Order before 9am for same day deliveries.</small>
  @error('dte')
  <span class="invalid-feedback" role="alert">
      <strong class="has-text-danger">{{ $message }}</strong>
  </span>
  @enderror
  </div><br>
  <div class="control">
  <label class="label">Name of Recipient</label>
  <input class="input @error('recipient') is-invalid @enderror" name="recipient" type="text"  autocomplete="recipient" autofocus placeholder="Recipient">
  @error('recipient')
    <span class="invalid-feedback" role="alert">
        <strong class="has-text-danger">{{ $message }}</strong>
    </span>
  @enderror
  </div><br>
  <div class="control">
  <label class="label">Phone Number of Recipient</label>
  <input class="input @error('phone') is-invalid @enderror" name="phone" type="tel"  autocomplete="phone" autofocus placeholder="Phone">
  @error('phone')
  <span class="invalid-feedback" role="alert">
      <strong class="has-text-danger">{{ $message }}</strong>
  </span>
  @enderror
  </div><br>
  <div class="control">
  <label class="label">Delivery Address (include all key details)</label>
  <input class="input @error('addr') is-invalid @enderror" name="addr" type="text"  autocomplete="addr" autofocus placeholder="Address of Recipient">
  @error('addr')
  <span class="invalid-feedback" role="alert">
    <strong class="has-text-danger">{{ $message }}</strong>
  </span>
  @enderror
  </div><br>
  <div class="control">
  <label class="label">Card Message (type "none" if not applicable)</label>
  <textarea class="textarea @error('message') is-invalid @enderror" name="message" type="text"  autocomplete="message" placeholder="Write a message for your recipent (Eg. Flowers for my special person.)">
  </textarea>
  @error('message')
  <span class="invalid-feedback" role="alert">
  <strong class="has-text-danger">{{ $message }}</strong>
  </span>
  @enderror
  </div><br>
  <div class="control">
  <label class="label">Special Instructions (type "none" if not applicable)</label>
  <textarea class="textarea @error('instructions') is-invalid @enderror" name="instructions" type="text"  autocomplete="instructions" autofocus placeholder="(Eg. Leave bouquet with sister if not around.)">
  </textarea>
  @error('instructions')
  <span class="invalid-feedback" role="alert">
  <strong class="has-text-danger">{{ $message }}</strong>
  </span>
  @enderror
  </div><br>
  <div class="control">
  <label class="label">Your Phone Number</label>
  <input class="input @error('yphone') is-invalid @enderror" name="yphone" type="tel"  autocomplete="yphone" autofocus placeholder="Your Phone Number">
  @error('phone')
  <span class="invalid-feedback" role="alert">
  <strong class="has-text-danger">{{ $message }}</strong>
  </span>
  @enderror
</div><hr>
  <div class="columns">
  <button type="submit" class="button is-primary is-medium" name="button">Proceed to Payment</button>
  </div>
  </form>

</div>
@else
<div class="notification is-success is-light subtitle is-5">
You shopping bag is empty! </br>
<a href="featured-products" class="is-text button">Start Shopping</a>
</div>
@endguest
</div>
</section>


@endsection
