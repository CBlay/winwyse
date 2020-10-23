@extends('layouts.app')

@section('title')
Ta da - Numbers predicted
@endsection

@section('content')

<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">

  <div class="modal is-active">
    <div class="modal-background"></div>
  <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Here are your predicted numbers </p>
      </header>
      <section class="modal-card-body">

        <div class="field is-grouped is-grouped-multiline">
          @foreach ($numbers as $describe)
          <small class="number has-background-primary animate__animated animate__bounce animate__repeat-3">{{$describe}}</small>
          @endforeach
        </div>

<hr>
@if($numberstwo > 0)

        <div class="field is-grouped is-grouped-multiline">
          @foreach ($numberstwo as $describetwo)
          <small class="number has-background-primary animate__animated animate__bounce animate__repeat-3">{{$describetwo}}</small>
          @endforeach
        </div>

        @endif
        <br>
      </section>
      <section class="modal-card-footer">
        <p class="has-text-white is-bold">Page redirects after 2 minutes. The predicted numbers will disappear.</p>
        <p class="has-text-primary is-bold"> <a href="/">Get another prediction</a> </p>
      </section>
    </div>
  </div>


    </div>
  </div>
</section>

<script>
        setTimeout(function(){
           window.location.href = 'http://www.winwyse.com/';
        }, 120000);
     </script>
@endsection
