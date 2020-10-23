@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
{{ Auth::user()->name }} | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')

<section class="hero is-fullheight">
<div class="hero-body">
<div class="container">
  @if(count($orders) > 0)
  <h2 class="title has-text-primary">Your Orders</h2><hr>

  <div class="block">
  @foreach ($orders as $uu)
    <div class="card block">
      <div class="card-content">
        <div class="media">
          <div class="media-content">
            <h3 class="title is-5 has-text-primary">ORDER#{{ $uu->identifier }}</h3>
            <p class="subtitle is-6">{{ $uu->message }}</p>
              <p class="subtitle is-6 has-text-primary">To: <strong>{{ $uu->recipent }}</strong> | Date :<strong>{{ $uu->dte }}</strong> | Phone:<strong>{{ $uu->phone }}</strong></p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @else
    <div class="card block">
      <div class="card-content">
            <h3 class="title is-5 has-text-primary">You haven't made an order yet. Orders will appear here when you buy from our shop.</h3>
      </div>
    </div>
    @endif
</div>
</div>
</section>


@endsection
