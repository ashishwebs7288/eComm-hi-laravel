@extends('master')
@section('content')
<div class="row">
    <div class="col-sm-4">
Filter
    </div>
    <div class="col-sm-4">
    <div class="custome-product">
    <h4>Results for Product</h4>
    @foreach($products as $item)
<div class="search-item">
<a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="trandding-image">
      <div class="">
        <h4>{{$item['name']}}</h4>
        <h6>{{$item['description']}}</h6>
        
      </div>
</a>
    </div>
    @endforeach
  </div>
    </div>
</div>



@endsection