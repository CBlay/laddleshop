@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Flush | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')
<div class="modal is-active" id="#modal">
<div class="modal-background"></div>
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
      <button class="button is-success">Checkout</button>
      <form id="remove" action="{{ route('clear.cart') }}" method="post">
      <button type="submit" class="button">Clear bag</button>
    </form>
    </footer>
    @else
    <div class="container">
            <div class="notification is-success is-light subtitle is-5">
            You shopping bag is empty! </br>
            <a href="featured-products" class="is-text button">Start Shopping</a>
            </div>
    </div>
    @endif
</div>
</div>
@endsection
