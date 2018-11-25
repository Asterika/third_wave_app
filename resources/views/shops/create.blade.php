@extends('layout')

@section('content')

    <h1 class="title">Add Your Favorite Third Wave Coffee Shop to Our Gallery</h1>

    <form method="POST" action="/shops">
      {{ csrf_field() }}

      <div>
        <input type="text" name="name_location" placeholder="Shop Name and State" value="{{ old('name_location') }}"><br ><br >
        <input type="text" name="address1" placeholder="Address" value="{{ old('address1') }}">
        <input type="text" name="hours1" placeholder="Shop hours" value="{{ old('hours1') }}">
        <input type="text" name="phone1" placeholder="Phone" value="{{ old('phone1') }}"><br ><br >
        <input type="text" name="address2" placeholder="Second location" value="{{ old('address2') }}">
        <input type="text" name="hours2" placeholder="Second location hours" value="{{ old('hours2') }}">
        <input type="text" name="phone2" placeholder="Second location phone" value="{{ old('phone2') }}"><br ><br >
        <input type="text" name="website" placeholder="Website" value="{{ old('website') }}">
        <input type="text" name="favorite_drink" placeholder="Add your favorite drink" value="{{ old('favorite_drink') }}">
      </div><br >

      <div>
        <button type="submit">Add Shop</button>
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

@endsection
