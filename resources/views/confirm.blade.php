@extends('layouts.app')

@section('title')
Confirm your query
@endsection

@section('content')

<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">

  <div class="modal is-active">
    <div class="modal-background"></div>
  <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">See Predicted Numbers <strong class="has-text-primary">(Ghs{{$amount}})</strong></p>
      </header>
      <section class="modal-card-body">
  <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8">

        <div class="control field">
          <div class="field-label is-normal">
            <label class="label">Enter Your Email</label>
          </div>
            <input type="email" class="input" name="email" placeholder="example@example.com" required autofocus>
        </div>
    <input hidden name="amount" value="{{$amount}}">
    <input hidden name="quantity" value="100">
    <input hidden name="currency" value="GHS">
    <input hidden name="metadata" value="{{ $banker }}" >
    <input hidden name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
    {{ csrf_field() }}

     <input type="hidden"  name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

     <p class="subtitle is-bold is-6">By clicking 'Pay Now!' button, I understand that I will be charged Ghs{{ $amount }} today for a one-time payment for predicted lottery numbers.
     I have read, understood, and agreed to the <a href="terms">terms</a> associated with transaction. </p>

       <button class="button is-success" type="submit"><i class="fa fa-plus-circle fa-lg"></i>  Pay Now!</button><hr>
  </form>
      </section>
    </div>
  </div>


    </div>
  </div>
</section>
@endsection
