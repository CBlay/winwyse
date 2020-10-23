@extends('layouts.app')

@section('title')
Reviews | Winwyse
@endsection

@section('content')

<section class="hero is-medium is-bold">
  <div class="hero-body">
    <h1 class="title has-text-primary is-3">
      Customer reviews
    </h1><hr>

    <form action="{{ route('reviews') }}" method="post">
      <input type="hidden"  name="_token" value="{{ csrf_token() }}">
      <div class="field">
          <label class="label" for="name">Your Name</label>
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
    <label class="label">Add your review</label>
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
  </form><hr>
    @if(session()->get('message'))
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

<section class="hero">
<div class="hero-body">
<div class="container has-text-centered">

  <div class="columns">
    <div class="column is-1"></div>
    <div class="column">
          <img class="is-centered" src="/illustrations/c.svg" alt="convos">
    </div>
    <div class="column">
      <div class="container">
        <p class="control subtitle is-4">Do you have any questions? Do you need some details clarified for you?  </p>
        <p class="control is-pulled-right field"><a class="button is-primary is-light" href="https://tawk.to/chat/5eb5c6068ee2956d739f6301/default" target="_blank" rel=noreferrer>Chat With Us Now</a></p>
      </div>
    </div>
    <div class="column is-1"></div>
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
