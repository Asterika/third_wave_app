@extends('layout')

@section('content')

    <h1 class="title-small">Shops</h1>

    <div class="main">
      <div class="form-container">
        <img src="/images/coffee_shop.jpg" class="sidebar" alt="Single Latte at Coffee Bar | Photo by Nathan Dumlao on Unsplash">

      <div class="form-box">
        <p>Login to add, edit, or delete a shop profile</p><br >
        <!-- loop through the shops and display each name and location as a list item -->
        <ul class="none">
          @foreach ($shops as $shop)
          <li class="none">
            <a class="none" href="/shops/{{$shop->id}}">{{ $shop->name_location }}</a>
            <!-- add if -->
            @if(Auth::check())
              <a class="none" href="/shops/{{$shop->id}}/edit"><img src="/images/edit_saturated.png" style="height:12px; width:12px;"></a>
            @endif
            @if(Auth::check())
              <a class="none" href="/shops/{{$shop->id}}/delete"><img src="/images/delete.png" style="height:12px; width:12px;"></a>
            @endif

          </li>
          @endforeach
        </ul><br >

        @if(Auth::check())
          <a class="button is-link is-outlined is-focused" href="/shops/create">Add a Shop</a>
        @endif

      </div>

    </div>

@endsection
