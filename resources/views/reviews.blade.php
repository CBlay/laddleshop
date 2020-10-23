@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Customer Reviews | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')
<section class="hero is-medium is-bold">
  <div class="hero-body">
    <h1 class="title has-text-primary is-3">
      Customer reviews
    </h1>
    <div class="container">
      <button onclick="addReview();" class="button is-primary" name="button">Write a review</button>
    </div>

    <div class="modal" id="#modalr">
  <div class="modal-background" onclick="dismiss();"></div>
  <div class="modal-content">
    <form action="{{ route('reviews') }}" method="post">
      <div class="field">
          <label class="label has-text-white" for="name">Your Name</label>
          <div class="control">
              <input id="name" type="name" class="input @error('name') is-danger @enderror" name="name" required autocomplete="name" autofocus>
          </div>
          @error('name')
              <p class="help is-danger" role="alert">
                  {{ $message }}
              </p>
          @enderror
      </div>
      <div class="field">
      <div class="control">
    <label class="label has-text-white">Add your review</label>
    <textarea class="textarea @error('review') is-invalid @enderror" name="review" type="text"  autocomplete="review" autofocus placeholder="Write your review here">
    </textarea>
    @error('review')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
    </div>
  </div><br>
    <button type="submit" class="button is-primary is-large" name="button">Publish</button>
  </form>
  <button class="modal-close is-large" onclick="dismiss();" aria-label="close"></button>
  </div>
  </div>
    @if(session()->get('message'))
    <hr>
        <div class="notification is-success is-light subtitle is-4">
          <button class="delete"></button>
           {{ session()->get('message') }}
        </div>
    @endif
    <hr>
    @if(count($addrev) > 0)
    @foreach ($addrev as $rev)
    <article class="message">
      <div class="message-body">
        <i class="fa fa-quote-left has-text-primary is-4"></i><strong>    {{ $rev->review }}    </strong><i class="fa fa-quote-right has-text-primary is-4"></i>
        <br>
        <small class="has-text-primary">{{ $rev->name }}</small>
      </div>
    </article>
    @endforeach
    {{ $addrev->links() }}
    @else
    <div class="notification is-info is-light subtitle is-3">
       Be the first to review!
    </div>
    @endif

</section>
<script>
document.addEventListener('DOMContentLoaded', () => {
(document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
  $notification = $delete.parentNode;

  $delete.addEventListener('click', () => {
    $notification.parentNode.removeChild($notification);
  });
});
});
</script>

<script>
  function addReview() {
  var element = document.getElementById("#modalr");
  element.classList.add("is-active");
}
</script>
<script>
function dismiss() {
var element = document.getElementById("#modalr");
element.classList.remove("is-active");
}
</script>
@endsection
