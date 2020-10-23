@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
{{ $ttitle}} | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')
<section class="hero is-medium">
<div class="hero-body">
<div class="container">

<h3 class="title is-3 has-text-primary">Browse Through {{ $ttitle}}</h3><hr>
</div>
</div>
</section>

<section class="section">
<div class="container">
<div class="columns">
  @if(count($list) > 0)
  @foreach ($list as $feature)
  <div class="column">
    <div class="is-grouped-multiline">
    <a href="description?title={{ $feature->title }}"><img src="{{ $feature->image }}" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">{{ $feature->title }} - <strong class="has-text-primary">Ghs{{ $feature->price }}</strong> </p></a> </div>
    </div>
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
{{ $list->links() }}

</div>
</section>

@endsection
