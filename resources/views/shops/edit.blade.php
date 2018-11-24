@extends('layout')

@section('content')
  <h1 class="title">Edit Shop Profile</h1>

  <form method="EDIT">

    <div class="field">

      <label class="label" for="name_location">Shop Name + State</label>

      <div class="control">
        <input type="text" class="input" name="name_location" placeholder="{{ $shop->name_location }}">
      </div>


      <label class="label" for="address1">Address</label>

      <div class="control">
        <input type="text" class="input" name="address1" placeholder="{{ $shop->address1 }}">
      </div>


      <label class="label" for="hours1">Hours</label>

      <div class="control">
        <input type="text" class="input" name="hours1" placeholder="{{ $shop->hours1 }}">
      </div>


      <label class="label" for="phone1">Phone</label>

      <div class="control">
        <input type="text" class="input" name="phone1" placeholder="{{ $shop->phone1 }}">
      </div>


      <label class="label" for="address2">Second Location</label>

      <div class="control">
        <input type="text" class="input" name="address2" placeholder="{{ $shop->address2 }}">
      </div>


      <label class="label" for="hours2">Second Location Hours</label>

      <div class="control">
        <input type="text" class="input" name="hours2" placeholder="{{ $shop->hours2 }}">
      </div>


      <label class="label" for="phone2">Second Location Phone</label>

      <div class="control">
        <input type="text" class="input" name="phone2" placeholder="{{ $shop->phone2 }}">
      </div>


      <label class="label" for="website">Website</label>

      <div class="control">
        <input type="text" class="input" name="website" placeholder="{{ $shop->website }}">
      </div>


      <label class="label" for="favorite_drink">Your Favorite Drink</label>

      <div class="control">
        <input type="text" class="input" name="favorite_drink" placeholder="{{ $shop->favorite_drink }}">
      </div>

    </div>


      <div class="field">

        <div class="control">

          <button type="submit" class="button is-link">Update Shop Profile</button>

        </div>

      </div>

  </form>

@endsection
