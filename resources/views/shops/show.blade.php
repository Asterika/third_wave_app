@extends('layout')

@section('content')

    <h1 class="title">Shop Profile</h1>
    <!-- get each shop by id and display its profile -->
    <ul style="list-style-type:none;">
      <li>{{ $shop->name_location }}</li>
      <li>Location: {{ $shop->address1 }}</li>
      <li>Hours: {{ $shop->hours1 }}</li>
      <li>Phone: {{ $shop->phone1 }}</li><br ><br >
      <li>Second Location: {{ $shop->address2 }}</li>
      <li>Second Location Hours: {{ $shop->hours2 }}</li>
      <li>Second Location Phone: {{ $shop->phone2 }}</li><br ><br >
      <li>Website: {{ $shop->website }}</li><br ><br >
      <li>Favorite Drink: {{ $shop->favorite_drink }}</li>
    </ul>

    <form method="POST" action="/shops">
      @method('GET')
      @csrf
        <div class="field">

          <div class="control">

            <button type="submit" class="button">Return to Shops Gallery</button>

          </div>

        </div>

    </form>

@endsection
