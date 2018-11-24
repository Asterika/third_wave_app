@extends('layout')

@section('content')

    <h1 class="title">Shops</h1>


    <!-- loop through the shops and display each name and location as a list item -->
  <ul>
    @foreach ($shops as $shop)
    <li>
      <a href="/shops/{{$shop->id}}">{{ $shop->name_location }}</a>
      <a href="/shops/{{$shop->id}}/edit"><img src="/images/edit_pencil.png" style="height:12px; width:12px;"></a>
      <a href="/shops/{{$shop->id}}/delete"><img src="/images/recycle-bin.png" style="height:12px; width:12px;"></a>

    </li>
    @endforeach
  </ul>

@endsection
