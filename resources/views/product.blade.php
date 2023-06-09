@extends('master')
@section('content')
<div class="container custom-product">
<div id="carouselExampleCaptions" class="carousel slide"  data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" ></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" ></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" ></button>
  </div>
  <div class="carousel-inner">
  @foreach($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="slider-img">
      <div class="carousel-caption slider-text">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="tranding-appear">
    <h3>Trandding Product</h3>
    @foreach($products as $item)
<div class="trandding-item">
<a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="trandding-image">
      <div class="">
        <h4>{{$item['name']}}</h4>
        
      </div>
</a>
    </div>
    @endforeach
  </div>
</div>

</div>

@endsection