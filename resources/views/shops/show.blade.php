@extends('layout')

@section('content')

<h1 class="title-small">Shop Snapshot</h1>

<!-- <div class="main" style="border:3px solid lime;"> -->
  <div class="form-container">
    <img src="/images/shiny_silver_espresso_machine.jpg" class="sidebar" alt="Machine Pouring Espresso Shot | Photo by Tyler Nix on Unsplash">
        <div class="form-box">
          {{ csrf_field() }}

          <!-- get each shop by id and display its profile -->
          <ul class="none;">
            <li class="none;"><strong>{{ $shop->name_location }}</strong></li><br >
            <strong>Location:</strong> <li class="none;">{{ $shop->address1 }}</li><br >
            <strong>Hours:</strong> <li class="none;">{{ $shop->hours1 }}</li><br >
            <strong>Phone:</strong> <li class="none;">{{ $shop->phone1 }}</li><br ><br >
            <strong>Second Location:</strong> <li class="none;">{{ $shop->address2 }}</li><br >
            <strong>Second Location Hours:</strong> <li class="none;">{{ $shop->hours2 }}</li><br >
            <strong>Second Location Phone:</strong> <li class="none;">{{ $shop->phone2 }}</li><br ><br >
            <strong>Website:</strong> <li class="none;"><a href="{{ $shop->website }}">{{ $shop->website }}</a></li><br >
            <strong>Favorite Drink:</strong> <li class="none;">{{ $shop->favorite_drink }}</li>
          </ul><br >

        <form method="POST" action="/shops">
          @method('GET')
          @csrf
            <div class="field">

              <div>

                <button type="submit" class="button is-link is-outlined is-focused">Return to Shops Gallery</button>

              </div>

            </div>

        </form>
      </div>
  </div>
<!-- </div> -->

@endsection
