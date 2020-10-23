@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Find {{ $stitle }} | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')

<section class="hero is-medium">
<div class="hero-body">
<div class="container has-text-centered">
  <div class="columns">
  <div class="column"></div>
  <div class="column">

  <form method="get" action="{{ route('result') }}" enctype="multipart/form-data">

  <div class="field">
    <label class="label">Filter Search By</label>
    <div class="control">
      <select class="input select" name="filter" type="text" autocomplete="page" autofocus placeholder="Select page to display product">
        <option value="category">Category</option>
        <option value="title">Name</option>
        <option value="price">Price less than</option>
      </select>
    </div>
  </div>

  <div class="field has-addons">
    <div class="control">
      <input class="input" type="text" name="name" placeholder="Search">
    </div>
    <div class="control">
      <button class="button is-primary" type="submit">
        Search
      </button>
    </div>
  </div>

</form>
</div>

<div class="column"></div>

</div>
</div>
</div>
</section>
<section class="section">
  <div class="columns">
  <div class="column"></div>
  <div class="column">
  <p class="is-subtitle notification is-light is-success is-4 has-text-centered">
    <button class="delete"></button>
Showing {{ count($results) }} results for your query.</p>
</div>
<div class="column"></div>
</div>
</section>
<section>
@if(count($results) > 0)
<div class="columns">
  <div class="column"></div>
@foreach ($results as $result)

  <div class="column"><a href="description?title={{ $result->title }}"><img src="{{ $result->image }}" height="600px" width="480px" alt="">
    <div class="level-item"> <p class="has-text-black">{{ $result->title }} - <strong class="has-text-primary">Ghs{{ $result->price }}</strong> </p></a> </div>
  </div>

@endforeach
<div class="column"></div>
</div><br>
<div class="container">
{{ $results->links() }}<hr>
</div>
@else
<div class="columns">
<div class="column"></div>
<div class="column">
<div class="notification is-danger">
No results found.
</div>
</div>
<div class="column"></div>
</div><br>
@endif
</section>
@endsection
