<strong>@extends('layout')

@section('content')

<h1 class="title-small">Shop Snapshot</h1>

<div class="main">
  <div class="form-container">
    <img src="/images/shiny_silver_espresso_machine.jpg" class="sidebar" alt="Machine Pouring Espresso Shot | Photo by Tyler Nix on Unsplash">
        <div class="form-box" style="margin-bottom: 1em; padding-top: 5%;">
          {{ csrf_field() }}

          <!-- get each shop by id and display its profile -->
          <ul style="list-style-type:none;">
            <li>{{ $shop->name_location }}</li><br >
            <strong>Location:</strong> <li>{{ $shop->address1 }}</li><br >
            <strong>Hours:</strong> <li>{{ $shop->hours1 }}</li><br >
            <strong>Phone:</strong> <li>{{ $shop->phone1 }}</li><br ><br >
            <strong>Second Location:</strong> <li>{{ $shop->address2 }}</li><br >
            <strong>Second Location Hours:</strong> <li>{{ $shop->hours2 }}</li><br >
            <strong>Second Location Phone:</strong> <li>{{ $shop->phone2 }}</li><br ><br >
            <strong>Website:</strong> <li><a href="{{ $shop->website }}">{{ $shop->website }}</a></li><br >
            <strong>Favorite Drink:</strong> <li>{{ $shop->favorite_drink }}</li>
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
</div>

@endsection
