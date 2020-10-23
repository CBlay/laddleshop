@component('components.app-admin')
@slot('title')
Upload Logo
@endslot
@if(session('adminLogin'))
<div class="container">
<h1 class="title is-3 has-text-primary">Show your customers your unique logo!</h1><hr>

@if(session()->get('message3'))
    <div class="notification is-success is-light subtitle is-4">
      <button class="delete"></button>
       {{ session()->get('message3') }}
    </div>
@endif
<form method="post" action="{{ route('logo') }}" enctype="multipart/form-data">
  <div class="field">
    <label class="label">Store Logo</label>
    <div class="control">
      <input class="input" accept="image/jpeg, image/x-png, .png, .jpg, .svg" name="image" type="file" autocomplete="image" autofocus placeholder="upload product image">
      @error('image')
          <span class="invalid-feedback" role="alert">
              <strong class="has-text-danger">{{ $message }}</strong>
          </span>
      @enderror
    </div>
  </div>

  <hr>

    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-medium is-link">Update Logo</button>
      </div>
    </div>
</form>
</div>
@else
<h1>Unauthorized</h1>
@endif
@endcomponent
