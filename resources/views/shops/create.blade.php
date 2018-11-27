@extends('layout')

@section('content')

    <h1 class="title-small">Add Your Favorite Third Wave Coffee Shop to Our Gallery</h1><br >

    <div class="main">
      <div class="form-container">
        <img src="/images/coffee_brewing_tower.jpg" class="sidebar" alt="Drip Coffee Brewing Tower | Photo by Nathan Dumlao on Unsplash">
            <form method="POST" action="/shops" class="form-box" style="margin-bottom: 1em;">
              {{ csrf_field() }}

              <div>
                <br ><br >
                <input type="text" name="name_location" placeholder="Shop Name and State" value="{{ old('name_location') }}"><br ><br ><br >
                <input type="text" name="address1" placeholder="Address" value="{{ old('address1') }}">
                <input type="text" name="hours1" placeholder="Shop hours" value="{{ old('hours1') }}">
                <input type="text" name="phone1" placeholder="Phone" value="{{ old('phone1') }}"><br ><br ><br >
                <input type="text" name="address2" placeholder="Second location" value="{{ old('address2') }}">
                <input type="text" name="hours2" placeholder="Second location hours" value="{{ old('hours2') }}">
                <input type="text" name="phone2" placeholder="Second location phone" value="{{ old('phone2') }}"><br ><br ><br >
                <input type="text" name="website" placeholder="Website" value="{{ old('website') }}">
                <input type="text" name="favorite_drink" placeholder="Add your favorite drink" value="{{ old('favorite_drink') }}">
              </div><br ><br >

              <div>
                <button type="submit" class="button is-link is-outlined is-focused">Add Shop</button>
              </div><br >
              <div>
                <a href="/shops" class="button is-link is-outlined is-focused">Return to Shops Gallery</a>
              </div>

            @if ($errors->any())

              <div class="notification is-danger">

                <ul>

                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach

                </ul>

              </div>
            @endif

          </form>
        </div>
    </div>

@endsection
