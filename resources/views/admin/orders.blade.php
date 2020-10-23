@component('components.app-admin')
@slot('title')
Orders
@endslot
@if(session('adminLogin'))
<div class="container">
  @if(count($orders) > 0)
  <h2 class="title has-text-primary">Customer Orders</h2><hr>
  <div class="block">
  @foreach ($orders as $uu)
    <div class="card block">
      <div class="card-content">
        <div class="media">
          <div class="media-content">
            <h3 class="title is-5 has-text-primary">ORDER#{{ $uu->identifier }}</h3>
            <p class="subtitle has-text-primary is-5">Status: <strong>{{ $uu->status }}</strong></p>
            <p class="subtitle is-6">Card Message: <strong>{{ $uu->message }}</strong></p>
            <p class="subtitle is-6">Instructions: <strong>{{ $uu->instructions }}</strong></p>
            <p class="subtitle is-6">Purchaser Phone: <strong>{{ $uu->yphone }}</strong></p>
              <p class="subtitle is-6 has-text-primary">To: <strong>{{ $uu->recipent }}</strong> | Date : <strong>{{ $uu->dte }}</strong> | Phone: <strong>{{ $uu->phone }}</strong> | Delivery Address: <strong>{{ $uu->addr }}</strong></p>
              <form action="{{ route('orders') }}" method="get">
                <input type="text" name="idd" value="{{ $uu->identifier }}" hidden>
              <button type="submit" class="button is-primary">View</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    {{ $orders->links() }}
    @else
    <div class="card block">
      <div class="card-content">
            <h3 class="title is-5 has-text-primary">Orders will appear here when customers purchase items.</h3>
      </div>
    </div>
    @endif
</div>
</div>
@else
<h1>Unauthorized</h1>
@endif
@endcomponent
