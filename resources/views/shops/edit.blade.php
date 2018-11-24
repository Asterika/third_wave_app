@extends('layout')

@section('content')
  <h1 class="title">Edit Shop Profile</h1>

  <form method="POST" action="/shops/{{ $shop->id }}" style="margin-bottom: 1em;">
    @method('PATCH')
    @csrf
    <!-- {{ method_field('PATCH') }}
    {{ csrf_field() }} -->

    <div class="field">

      <label class="label" for="name_location">Shop Name + State</label>

      <div class="control">
        <input type="text" class="input" name="name_location" placeholder="{{ $shop->name_location }}" value="{{ $shop->name_location }}">
      </div>


      <label class="label" for="address1">Address</label>

      <div class="control">
        <input type="text" class="input" name="address1" placeholder="{{ $shop->address1 }}" value="{{ $shop->address1 }}">
      </div>


      <label class="label" for="hours1">Hours</label>

      <div class="control">
        <input type="text" class="input" name="hours1" placeholder="{{ $shop->hours1 }}" value="{{ $shop->hours1 }}">
      </div>


      <label class="label" for="phone1">Phone</label>

      <div class="control">
        <input type="text" class="input" name="phone1" placeholder="{{ $shop->phone1 }}" value="{{ $shop->phone1 }}">
      </div>


      <label class="label" for="address2">Second Location</label>

      <div class="control">
        <input type="text" class="input" name="address2" placeholder="{{ $shop->address2 }}" value="{{ $shop->address2 }}">
      </div>


      <label class="label" for="hours2">Second Location Hours</label>

      <div class="control">
        <input type="text" class="input" name="hours2" placeholder="{{ $shop->hours2 }}" value="{{ $shop->hours2 }}">
      </div>


      <label class="label" for="phone2">Second Location Phone</label>

      <div class="control">
        <input type="text" class="input" name="phone2" placeholder="{{ $shop->phone2 }}" value="{{ $shop->phone2 }}">
      </div>


      <label class="label" for="website">Website</label>

      <div class="control">
        <input type="text" class="input" name="website" placeholder="{{ $shop->website }}" value="{{ $shop->website }}">
      </div>


      <label class="label" for="favorite_drink">Your Favorite Drink</label>

      <div class="control">
        <input type="text" class="input" name="favorite_drink" placeholder="{{ $shop->favorite_drink }}" value="{{ $shop->favorite_drink }}">
      </div>

    </div>


      <div class="field">

        <div class="control">

          <button type="submit" class="button is-link">Update Shop Profile</button>

        </div>

      </div>

  </form>

  <form method="POST" action="/shops/{{ $shop->id }}">
    @method('DELETE')
    @csrf
    <!-- {{ method_field('DELETE') }}

    {{ csrf_field() }} -->

      <div class="field">

        <div class="control">

          <button type="submit" class="button">Delete Shop Profile</button>

        </div>

      </div>

  </form>

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
