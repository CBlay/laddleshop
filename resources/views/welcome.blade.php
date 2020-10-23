@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Send flowers to Ghana - Florist, Free Delivery | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')
@if(count($banners) > 0)
@foreach ($banners as $banner)
<section class="hero is-primary is-fullheight" style="background-image: url('{{ $banner->image }}')">
<div class="hero-body">
<div class="container has-text-centered">

<h3><a href="description?title={{ $banner->title }}" class="is-large has-text-white">Shop what you see </a> <i class="fa fa-arrow-right"></i> </h3>
</div>
</div>
</section>
@endforeach
@else
<section class="hero is-primary is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">

<h3><a href="featured-products" class="is-large has-text-white">See our featured products </a> <i class="fa fa-arrow-right"></i> </h3>
</div>
</div>
</section>
@endif


<section class="section">
<div class="container">
<h2 class="title has-text-centered has-text-primary">Shop our featured products</h2> <br>
<div class="columns">
  @if(count($featured) > 0)
  @foreach ($featured as $feature)
  <div class="column"><a href="description?title={{ $feature->title }}"><img src="{{ $feature->image }}" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">{{ $feature->title }} - <strong class="has-text-primary">Ghs{{ $feature->price }}</strong> </p></a> </div>
  </div>
    @endforeach
    @else
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/480x600.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/480x600.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/480x600.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  @endif
</div>
</div>
</section>

<section class="section">
  @if(count($banner2) > 0)
  @foreach ($banner2 as $feature)
  <div class="container has-text-centered">
    <a href="description?title={{ $feature->title }}"><img src="{{ $feature->image }}" alt="">
    <p class="has-text-black">{{ $feature->title }} - <strong class="has-text-primary">Ghs{{ $feature->price }}</strong> </a>
  </div>
  @endforeach
  @else
  <div class="container has-text-centered">
    <a href=""><img src="https://bulma.io/images/placeholders/800x480.png" alt="">
    <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </a>
  </div>
  @endif
</section>

<section class="section">
<div class="container">
<h2 class="title has-text-centered has-text-primary">Popular here</h2> <br>
<div class="columns">
  @if(count($popular) > 0)
  @foreach ($popular as $feature)
  <div class="column"><a href="description?title={{ $feature->title }}"><img src="{{ $feature->image }}" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">{{ $feature->title }} - <strong class="has-text-primary">Ghs{{ $feature->price }}</strong> </p></a> </div>
  </div>
  @endforeach
  @else
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/480x600.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/480x600.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/480x600.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  @endif
</div>
</div>
</section>

<section class="section">
<div class="container">
<h2 class="title has-text-centered has-text-primary">More...</h2> <br>
<div class="columns">
  @if(count($more) > 0)
  @foreach ($more as $feature)
  <div class="column"><a href="description?title={{ $feature->title }}"><img src="{{ $feature->image }}" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">{{ $feature->title }} - <strong class="has-text-primary">Ghs{{ $feature->price }}</strong> </p></a> </div>
  </div>
  @endforeach
  @else
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/800x480.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/800x480.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  <div class="column"><a href="#"><img src="https://bulma.io/images/placeholders/800x480.png" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">Item name - <strong class="has-text-primary">Ghs150</strong> </p></a> </div>
  </div>
  @endif
</div>
</div>
</section>

<section class="section">
  <div class="container has-text-centered">
    @if(count($addrev) > 0)
    <h2 class="title has-text-primary">What's so great about @foreach ($name as $uu){{ $uu->shopname }}@endforeach ?</h2> <br>
    <div class="columns">
      @foreach ($addrev as $rev)
      <div class="column">
        <p class="block has-text-primary">{{ $rev->review }}</p>

        <h5 class="title is-5">{{ $rev->name }}</h5>
      </div>
      @endforeach


    </div>
    <a href="/reviews" class="is-pulled-right has-background-primary has-text-white button">See all reviews</a>
    @endif
  </div>
</section>
@endsection
