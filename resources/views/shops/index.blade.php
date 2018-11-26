@extends('layout')

@section('content')

    <h1 class="title-small">Shops</h1>

    <div class="main">
      <div class="form-container">
        <img src="/images/coffee_shop.jpg" class="sidebar" alt="Single Latte at Coffee Bar | Photo by Nathan Dumlao on Unsplash">

      <div class="form-box">
        <!-- loop through the shops and display each name and location as a list item -->
        <ul style="list-style-type:none;">
          @foreach ($shops as $shop)
          <li>
            <a href="/shops/{{$shop->id}}">{{ $shop->name_location }}</a>
            <a href="/shops/{{$shop->id}}/edit"><img src="/images/edit_pencil.png" style="height:12px; width:12px;"></a>
            <a href="/shops/{{$shop->id}}/delete"><img src="/images/recycle-bin.png" style="height:12px; width:12px;"></a>

          </li>
          @endforeach
        </ul><br >

        <a class="button is-link" href="/shops/create">Add a Shop</a>

      </div>

    </div>

@endsection
