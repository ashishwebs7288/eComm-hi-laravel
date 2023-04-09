@extends('master')
@section('content')

<div class="row ms-5">
    
    <div class="col-sm-10">
        <div class="trandding-appear">
            <h4>Results for Product</h4>
            @foreach($products as $item)
            <a href="/ordernow" class="btn btn-success mb-2">Order Now</a>
            <div class="row search-item cart-list-divider">
                <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trandding-image">
                    
                </a>
                </div>
                <div class="col-sm-3">
                
                    <div class="">
                        <h4>{{$item->name}}</h4>
                        <h6>{{$item->description}}</h6>

                    </div>
                
                </div>
                <div class="col-sm-3">
                
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
                </div>
               
            </div>
            @endforeach
        </div>
        <a href="/ordernow" class="btn btn-success">Order Now</a>
        <br>
        <br>
    </div>
</div>

@endsection