@extends('layout')

@section('content')

  <h1 class="title-small">Edit Shop Profile</h1><br >

  <!-- <div class='container' align='center'> -->

  <div class="main">
    <div class="form-container">
      <img src="/images/coffee_pot_and_beans.jpg" class="sidebar">
          <form method="POST" action="/shops/{{ $shop->id }}" class="form-box" style="margin-bottom: 1em;">
            @method('PATCH')
            @csrf

            <div class="field">

              <label class="label" style="display:inline;" for="name_location">Shop Name + State:&#160;&#160;</label>

              <div style="display:inline;" class="control">
                <input type="text" name="name_location" placeholder="{{ $shop->name_location }}" value="{{ $shop->name_location }}">
              </div><br ><br >


              <label class="label" style="display:inline;" for="address1">Location:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="address1" placeholder="{{ $shop->address1 }}" value="{{ $shop->address1 }}">
              </div><br >

              <label class="label" style="display:inline;" for="hours1">Hours:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="hours1" placeholder="{{ $shop->hours1 }}" value="{{ $shop->hours1 }}">
              </div><br >

              <label class="label" style="display:inline;" for="phone1">Phone:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="phone1" placeholder="{{ $shop->phone1 }}" value="{{ $shop->phone1 }}">
              </div><br ><br >


              <label class="label" style="display:inline;" for="address2">Second Location:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="address2" placeholder="{{ $shop->address2 }}" value="{{ $shop->address2 }}">
              </div><br >

              <label class="label" style="display:inline;" for="hours2">Second Location Hours:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="hours2" placeholder="{{ $shop->hours2 }}" value="{{ $shop->hours2 }}">
              </div><br >

              <label class="label" style="display:inline;" for="phone2">Second Location Phone:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="phone2" placeholder="{{ $shop->phone2 }}" value="{{ $shop->phone2 }}">
              </div><br ><br >


              <label class="label" style="display:inline;" for="website">Website:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="website" placeholder="{{ $shop->website }}" value="{{ $shop->website }}">
              </div><br >


              <label class="label" style="display:inline;" for="favorite_drink">Your Favorite Drink:&#160;&#160;</label>

              <div class="control" style="display:inline;">
                <input type="text" name="favorite_drink" placeholder="{{ $shop->favorite_drink }}" value="{{ $shop->favorite_drink }}">
              </div>

            </div><br >

                <div class="field">

                  <div>

                    <button type="submit" class="button is-link">Update Shop Profile</button>

                  </div>

                </div>

            </form>
        </div>
      </div>
  <!-- </div> -->

  <form method="POST" action="/shops/{{ $shop->id }}">
    @method('DELETE')
    @csrf
    <!-- {{ method_field('DELETE') }}

    {{ csrf_field() }} -->

      <div class="field">

        <div>

          <button type="submit" class="button">Delete Shop Profile</button>

        </div>

      </div>

  </form>

  <form method="POST" action="/shops">
    @method('GET')
    @csrf
      <div class="field">

        <div>

          <button type="submit" class="button">Return to Shops Gallery</button>

        </div>

      </div>

  </form>

@endsection
