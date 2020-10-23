@extends('layouts.app')

@section('title')
Real Lottery Prediction - Ghana | Winwyse
@endsection

@section('content')

<section class="hero is-medium" style="background-image: url('/illustrations/ab.jpg');">
<div class="hero-body">
<div class="container has-text-centered">
  <div class="columns">
    <div class="column is-2"></div>
    <div class="column">
      <h1 class="title has-text-white is-bold is-1">Lottory Prediction - Ghana</h1>
      <p class="subtitle has-text-white is-4">Get real live numbers for your lottery in Ghana. Our algorithm
        works flawlessly. Type in your banker below to get your prediction</p>
      <form method="get" action="{{ route('banker') }}">
        <div class="field has-addons">
          <p class="control">
            <span class="select">
              <select name="amount">
                <option value="hot">Hot</option>
                <option value="full">Full</option>
              </select>
            </span>
          </p>
          <p class="control is-expanded">
            <input type="number" class="input @error('banker') is-danger @enderror" name="banker" placeholder="15" min="1" required>
          </p>
          <p class="control">
            <button class="button is-primary" type="submit">
              Get Winning Numbers!
            </button>
          </p>
        </div>
      </form>
      </div>
      <div class="column">
        <img class="is-centered" src="/illustrations/a.svg" alt="black lives matter parade">
      </div>
    <div class="column is-2"></div>
    </div><hr>
      <div class="columns">
        <div class="column is-2"></div>
        <div class="column">
          <div class="field is-grouped is-grouped-multiline">
      <p class="control">
        <a class="button is-primary" href="/about-us" target="_blank" rel=noreferrer>
        <i class="fa fa-result"> </i>  See how it works
        </a>
      </p>
      <p class="control">
        <a class="button" href="https://tawk.to/chat/5f4552e61e7ade5df443df74/default" target="_blank" rel=noreferrer>
        <i class="fa fa-question"></i>  Ask a question
        </a>
      </p>
    </div>
        </div>
        <div class="column"></div>
      </div>
    </div>
  </div>
</section>

<!--Weekly results section-->

<section class="hero is-info">
<div class="hero-body">
  <h1 class="title has-text-centered is-3">
    Weekly Lotto Winning Numbers
  </h1><hr>
  <div class="columns">

    <div class="column">
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">MONDAY SPECIAL</h3>
              <small>October 19, 2020</small><hr>
              <div class="field is-grouped is-grouped-multiline">
                <small class="number has-background-primary">9</small>
                <small class="number has-background-primary">85</small>
                <small class="number has-background-primary">81</small>
                <small class="number has-background-primary">25</small>
                <small class="number has-background-primary">90</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">LUCKY TUESDAY</h3>
              <small>August 20, 2020</small><hr>
              <div class="field is-grouped is-grouped-multiline">
                <small class="number has-background-primary">29</small>
                <small class="number has-background-primary">52</small>
                <small class="number has-background-primary">37</small>
                <small class="number has-background-primary">81</small>
                <small class="number has-background-primary">61</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="column">
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">MIDWEEK LOTTO</h3>
              <small>August 21, 2020</small><hr>
              <div class="field is-grouped is-grouped-multiline">
                <small class="number has-background-primary">78</small>
                <small class="number has-background-primary">12</small>
                <small class="number has-background-primary">25</small>
                <small class="number has-background-primary">64</small>
                <small class="number has-background-primary">67</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--
    <div class="column">
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">FORTUNE THURSDAY</h3>
              <small>August 3, 3333</small><hr>
              <div class="field is-grouped is-grouped-multiline">
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">FRIDAY BONANZA</h3>
              <small>August 3, 3333</small><hr>
              <div class="field is-grouped is-grouped-multiline">
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">NATIONAL WEEKLY LOTTO</h3>
              <small>August 3, 3333</small><hr>
              <div class="field is-grouped is-grouped-multiline">
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
                <small class="number has-background-primary">3</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->

  </div>
</div>
</section>

<!-- Best Banker and two sure section -->

<section class="hero">
<div class="hero-body">
<div class="container has-text-centered">

  <div class="columns">
    <div class="column is-3"></div>
    <div class="column">
      <div class="container">
        <p class="control subtitle is-1">
          <p class="field control is-grouped">
            <strong>Best Banker: <small class="number has-background-primary">35</small> </strong>
          </p>
          <p class="control field">
            <strong>2-Sure #1:
              <small class="number has-background-primary">35, 7</small>
            </strong>

          </p>
          <p class="control field">
            <strong>2-Sure #1:
              <small class="number has-background-primary">25, 36</small>
            </strong>
          </p>
        </p>
      </div>
    </div>
    <div class="column is-half">
          <img class="is-centered" src="/illustrations/b.svg" alt="man on phone lock screen">
    </div>
    <div class="column is-1"></div>
  </div>
    </div>
  </div>
</section>



<section class="hero has-background-info">
<div class="hero-body">
<div class="container has-text-centered">

  <div class="columns">
    <div class="column is-1"></div>
    <div class="column">
          <img class="is-centered" src="/illustrations/c.svg" alt="convos">
    </div>
    <div class="column">
      <div class="container">
        <p class="control subtitle is-4 has-text-white">Do you have any questions? Do you need some details clarified for you?  </p>
        <p class="control is-pulled-right field"><a class="button is-primary is-light" href="https://tawk.to/chat/5f4552e61e7ade5df443df74/default" target="_blank" rel=noreferrer>Chat With Us Now</a></p>
      </div>
    </div>
    <div class="column is-1"></div>
  </div>
    </div>
  </div>
</section>
@endsection
