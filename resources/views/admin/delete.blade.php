@component('components.app-admin')
@slot('title')
Delete
@endslot
@if(session('adminLogin'))
<section class="hero is-medium">
<div class="hero-body">
<div class="container has-text-centered">
  <div class="columns">
  <div class="column"></div>
  <div class="column">

    <h1 class="title is-3 has-text-primary">Delete by product title</h1><hr>

  <form method="get" action="{{ route('delete') }}" enctype="multipart/form-data">

  <div class="field has-addons">
    <div class="control">
      <input class="input" type="text" name="name" placeholder="Search by title">
    </div>
    <div class="control">
      <button class="button is-success" type="submit">
        Delete
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

@if(session()->get('messages1'))
    <div class="notification is-danger is-light subtitle is-4">
      <button class="delete"></button>
       {{ session()->get('messages1') }}
    </div>
@endif
@else
<h1>Unauthorized</h1>
@endif
@endcomponent
