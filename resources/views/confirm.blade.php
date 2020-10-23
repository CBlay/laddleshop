@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Confirm Order | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')



<section class="hero is-fullheight">
<div class="hero-body">
<div class="container">
  @foreach ($orders as $rr)
  <p class="subtitle has-text-primary">Almost there! Confirm email to get receipt of transaction!</p>
  <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8">

        <div class="control field">
          <div class="field-label is-normal">
            <label class="label">Enter Your Email</label>
          </div>
            <input type="email" class="input" name="email" value="{{ $rr->email}}" required autofocus>
        </div>
    <input hidden name="amount" value="{{$sum}}">
    <input hidden name="quantity" value="100">
    <input hidden name="currency" value="GHS">
    <input hidden name="metadata" value="{{ $rr->identifier}}" >
    <input hidden name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
    {{ csrf_field() }}

     <input type="hidden"  name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
     <p class="subtitle is-bold is-6">By clicking 'Pay Now!' button, I understand that I will be charged Ghs{{ $sum }} today for a one-time payment for my purchase.
     I have read, understood, and agreed to the <a href="terms">terms</a> associated with transaction. </p>
 <button class="button is-success" type="submit"><i class="fa fa-plus-circle fa-lg"></i>  Pay Now!</button><hr>
  </form>

</div>
</div>
</section>
@endforeach
@endsection
