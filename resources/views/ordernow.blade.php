@extends('master')
@section('content')
<div class="form-check">

    
    <div class="col-md-10 ">
        
        
    <table class="table">
  <tbody>
    <tr>
      
      <td>Amount</td>
      <td>$ {{$total}}</td>
    </tr>
    <tr>
      
      <td>Tax</td>
      <td>$ 0</td>
    </tr>
    <tr>
      
      <td>Delivery</td>
      <td>$ 10</td>
    </tr>
    <tr>
      
      <td>Total</td>
      <td>$ {{$total}}</td>
    </tr>
  </tbody>
</table>
<form action="/orderplace" method="POST">
    @csrf
    @method('post')
  <div class="form-group">
    <textarea name="address" class="form-control"  placeholder="Enter the address"></textarea>
    
  </div>
  <div class="form-group">
    <label for="psw"><strong>Payment Method</strong></label> <br><br>
    <input type="radio" value="cash" name="payment"><span> Online Payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span> EMI Payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span> Delevery Payment</span><br><br>
  </div>
  
  <button type="submit" class="btn btn-info mb-3">Order Now</button>
</form>
    
</div>
</div>
@endsection