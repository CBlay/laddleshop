@component('components.app-admin')
@slot('title')
Recover
@endslot
@if(session('adminLogin'))
@foreach ($orders as $uu)
  <div class="card block">
    <div class="card-content">
      <div class="media">
        <div class="media-content">
          <h3 class="title is-5 has-text-primary">{{ $uu->title }}</h3>
          <p class="subtitle is-6">Ghs{{ $uu->amount }}</p>
            <p class="subtitle is-6 has-text-primary">Quantity: <strong>{{ $uu->quantity }}</strong></p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @else
  <h1>Unauthorized</h1>
  @endif
@endcomponent
