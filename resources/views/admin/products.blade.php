@component('components.app-admin')
@slot('title')
Product Upload
@endslot
@if(session('adminLogin'))
<section class="section">
  <div class="container">
    <h2 class="title has-text-primary">Upload Products</h2><hr>
    @if(session()->get('message2'))
        <div class="notification is-success is-light subtitle is-4">
          <button class="delete"></button>
           {{ session()->get('message2') }}
        </div>
    @endif

    <form method="post" action="{{ route('products') }}" enctype="multipart/form-data">
    <div class="field">
      <label class="label">Title</label>
      <div class="control">
        <input class="input @error('title') is-invalid @enderror"  name="title" type="text" autocomplete="title" autofocus placeholder="Title/Name of product">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong class="has-text-danger">{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>

    <div class="field">
      <label class="label">Description</label>
      <div class="control">
        <textarea class="textarea @error('description') is-invalid @enderror"  name="description" type="text" autocomplete="description" autofocus placeholder="Describe your product to your customers"></textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong class="has-text-danger">{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>

    <div class="field">
      <label class="label">Price in Cedi</label>
      <div class="control">
        <input class="input" name="price" type="number" autocomplete="price" autofocus placeholder="15" min="1">
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong class="has-text-danger">{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>

    <div class="field">
      <label class="label">Category</label>
      <div class="control">
        <input class="input" name="category" type="text" autocomplete="category" autofocus placeholder="Product category. Eg. wearables">
        @error('category')
            <span class="invalid-feedback" role="alert">
                <strong class="has-text-danger">{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>

  <div class="field">
    <label class="label">Page</label>
    <div class="control">
      <select class="input select" name="page" type="text" autocomplete="page" autofocus placeholder="Select page to display product">
        <option value="featured">Featured</option>
        <option value="popular">Popular</option>
        <option value="more">More</option>
        <option value="banner">Banner</option>
      </select>
      @error('page')
          <span class="invalid-feedback" role="alert">
              <strong class="has-text-danger">{{ $message }}</strong>
          </span>
      @enderror
    </div>
  </div>

  <div class="field">
    <label class="label">Product Image</label>
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
        <button type="submit" class="button is-medium is-link">Upload Product</button>
      </div>
    </div>
    </form>

  </div>
</section>
@else
<h1>Unauthorized</h1>
@endif
@endcomponent
