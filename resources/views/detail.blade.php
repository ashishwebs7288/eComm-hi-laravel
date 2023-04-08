@extends('master')
@section('content')
<div class="container">
<div class="row mt-2" >
    <div class="col-sm-6">
    <img src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/">Go Back</a>
        <h3>{{$product['name']}}</h3>
        <h4>Price: {{$product['price']}}</h4>
        <h5>Details: {{$product['description']}}</h5>
        <h5>Category: {{$product['category']}}</h5>
        <br>
        <form action="/add_to_cart" method="POST">
            @csrf
            @method('post')
            <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br>
        <button class="btn btn-success">Order Now</button>
        <br><br>
    </div>
</div>
</div>

@endsection