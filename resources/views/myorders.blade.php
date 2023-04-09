@extends('master')
@section('content')

<div class="row ms-5">
    
    <div class="col-sm-10">
        <div class="trandding-appear">
            <h4>My Orders</h4>
            @foreach($orders as $item)
            <div class="row search-item cart-list-divider">
                <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trandding-image">
                    
                </a>
                </div>
                <div class="col-sm-3">
                
                    <div class="">
                        <h4>Name: {{$item->name}}</h4>
                        <h6>Delivery Status: {{$item->status}}</h6>
                        <h6>Address: {{$item->address}}</h6>
                        <h6> Payment Status: {{$item->payment_status}}</h6>
                        <h6>Payment Method: {{$item->payment_method}}</h6>
                       

                    </div>
                
                </div>
               
               
            </div>
            @endforeach
        </div>
        
    </div>
</div>

@endsection