@extends('layouts.app')

@section('title')
@foreach ($name as $uu)
Contact Us | {{ $uu->shopname }}
@endforeach
@endsection

@section('content')


<section class="hero is-medium">
  <div class="hero-body">
  <div class="container">
    <h2 class="title has-text-primary">Contact the @foreach ($name as $uu){{ $uu->shopname }}@endforeach team</h2><hr>
    <div class="columns">
      <div class="column is-6">
        <h4 class="title is-spaced is-4">Let's talk!</h4>
        <p class="subtitle">We're here to answer your questions and discuss the future of our collaboration!</p>
        <div>
          <div class="media">
            <div class="media-left">
              <i class="fa fa-map has-text-primary is-2"></i>
            </div>
            <div class="media-content">
              <div class="content">
                <p>@foreach ($name as $uu){{ $uu->address }}@endforeach</p>
              </div>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <i class="fa fa-phone has-text-primary is-2"></i>
            </div>
            <div class="media-content">
              <div class="content">
                <p>@foreach ($name as $uu){{ $uu->phone }}@endforeach</p>
              </div>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <i class="fa fa-envelope has-text-primary is-2"></i>
            </div>
            <div class="media-content">
              <div class="content">
                <p>@foreach ($name as $uu){{ $uu->email }}@endforeach</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-5 is-offset-1">
        @if(session()->get('message1'))
            <div class="notification is-success is-light subtitle is-4">
              <button class="delete"></button>
               {{ session()->get('message1') }}
            </div>
        @endif

        <h3 class="subtitle is-3 has-text-primary has-text-centered">Send us a Message!</h1>

        <form method="post" action="{{ route('contact') }}" enctype="multipart/form-data">
        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">From</label>
          </div>
          <div class="field-body">
            <div class="field">
              <p class="control is-expanded has-icons-left">
                <input class="input" type="text" name="fromname" placeholder="Name">
                <span class="icon is-small is-left">
                  <i class="fa fa-user"></i>
                </span>
              </p>
            </div>
            <div class="field">
              <p class="control is-expanded has-icons-left has-icons-right">
                <input class="input is-success" name="email" type="email" placeholder="example@gmail.com">
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fa fa-check"></i>
                </span>
              </p>
            </div>
          </div>
        </div>


        <div class="field is-horizontal">
      <div class="field-label"></div>
      <div class="field-body">
        <div class="field is-expanded">
          <div class="field has-addons">
            <p class="control">
              <a class="button is-static">
                +
              </a>
            </p>
            <p class="control is-expanded">
              <input class="input" type="tel" name="tel" placeholder="Your phone number">
            </p>
          </div>
          <p class="help">Do not enter the first zero</p>
        </div>
      </div>
    </div>



        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Subject</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input class="input is-danger" name="subject" type="text" placeholder="e.g. Product 1">
              </div>
              <p class="help is-danger">
                This field is required
              </p>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Message</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <textarea class="textarea" name="message" placeholder="Explain how we can help you"></textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label">
            <!-- Left empty for spacing -->
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <button type="submit" class="button is-primary">
                  Send message
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
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

@endsection
