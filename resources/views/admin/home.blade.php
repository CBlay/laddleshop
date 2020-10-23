@component('components.app-admin')
@slot('title')
Welcome | Shop Admin
@endslot
@if(session('adminLogin'))
<div class="container">
<h1 class="title is-3 has-text-primary">Let's help you set up!</h1><hr>

<form method="post" action="{{ route('started') }}" enctype="multipart/form-data">
<div class="field">
  <label class="label">Shop Name</label>
  <div class="control">
    <input class="input @error('shopname') is-invalid @enderror"  name="shopname" type="text" autocomplete="shopname" autofocus placeholder="Your shop name goes here"
    value="@if(count($infos) > 0) @foreach ($infos as $info){{$info->shopname}} @endforeach @endif">
    @error('shopname')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">About Shop</label>
  <div class="control">
    <textarea class="textarea @error('about') is-invalid @enderror"  name="about" type="text" autocomplete="shopname" autofocus placeholder="Tell your customers something about your shop">@if(count($infos) > 0) @foreach ($infos as $info){{$info->about}} @endforeach @endif</textarea>
    @error('about')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Phone Number</label>
  <div class="control">
    <input class="input" name="phone" type="tel" autocomplete="phone" autofocus placeholder="Enter shop phone number for customers to reach you"
    value="@if(count($infos) > 0) @foreach ($infos as $info){{$info->phone}} @endforeach @endif">
    @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" name="email" type="email" autocomplete="email" autofocus placeholder="Enter shop email address for customers to reach you"
    value="@if(count($infos) > 0) @foreach ($infos as $info){{$info->email}} @endforeach @endif">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Instagram</label>
  <div class="control">
    <input class="input @error('instagram') is-invalid @enderror"  name="instagram" type="text" autocomplete="instagram" autofocus placeholder="Copy link to your instagram page and post here"
    value="@if(count($infos) > 0) @foreach ($infos as $info){{$info->instagram}} @endforeach @endif">
    @error('instagram')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Facebook</label>
  <div class="control">
    <input class="input @error('facebook') is-invalid @enderror"  name="facebook" type="text" autocomplete="instagram" autofocus placeholder="Copy link to your facebook page and post here"
    value="@if(count($infos) > 0) @foreach ($infos as $info){{$info->facebook}} @endforeach @endif">
    @error('facebook')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Twitter</label>
  <div class="control">
    <input class="input @error('twitter') is-invalid @enderror"  name="twitter" type="text" autocomplete="twitter" autofocus placeholder="Copy link to your twitter page and post here"
    value="@if(count($infos) > 0) @foreach ($infos as $info){{$info->twitter}} @endforeach @endif">
    @error('twitter')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Address</label>
  <div class="control">
    <input class="input @error('address') is-invalid @enderror"  name="address" type="text" autocomplete="twitter" autofocus placeholder="The region from which your shop operates. Eg. Accra, Tema"
    value="@if(count($infos) > 0) @foreach ($infos as $info){{$info->address}} @endforeach @endif">
    @error('address')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>


<div class="field">
  <label class="label">Banner Message</label>
  <div class="control">
    <textarea class="textarea @error('message1') is-invalid @enderror" name="message1" type="text" autocomplete="message1" autofocus placeholder="This message appears on the top banner of your shop. Could be an alert for customers etc.">@if(count($infos) > 0) @foreach ($infos as $info){{$info->message}} @endforeach @endif</textarea>
    @error('message1')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>



<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link">Post</button>
  </div>
</div>
</form>
<hr>
@if(session()->get('message3'))
    <div class="notification is-success is-light subtitle is-4">
      <button class="delete"></button>
       {{ session()->get('message3') }}
    </div>
@endif

@if(count($users) > 0)
<section class="hero is-medium">
<div class="hero-body container">
  <h1 class="title is-3 is primary">Registered Users</h1>
  <div class="block">
  @foreach ($users as $u)
    <div class="card block">
      <div class="card-content">
        <div class="media">
          <div class="media-content">
            <h3 class="title is-6 has-text-primary">{{ $u->name }}</h3>
            <p class="subtitle is-6">{{ $u->email }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
{{ $users->links() }}
</div>
</section>
@endif
</div>
@else
<h1>Unauthorized</h1>
@endif
@endcomponent
