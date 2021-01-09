@extends('Admin.master')
@section('content')
<div class="page-content">
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Order-List</h2>
    </div>
  </div>
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Order Data</li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-lg-12">
          <div class="block margin-bottom-sm" >
            <div class="card-title">
            </div>
          
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Food Name</th>
                  <th>Food Price</th>
                  
                  <th>Qty</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                @foreach($data as $data)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$data->product_name}}</td>
                  <td>{{$data->product_price}}</td>
                  <td>{{$data->qty}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>  <div class="card" style="width: 73.5rem;">
      <ul class="list-group list-group-flush" style="">
        <li class="list-group-item"style=""><b>Sub Total: </b>Rs. {{$total_price}}</li>
        @foreach($coupon as $coupon)
        @if($coupon->coupon_code == '')
        <li class="list-group-item"style=""><b>Coupon Not Applied !!!</b></li>
        @else
        <li class="list-group-item"style=""><b>Coupon Discount ({{$coupon->coupon_code}}): </b>  {{$coupon->coupon_amount}}%</li>
        @endif
        <li class="list-group-item"style=""><b>Total: </b>Rs. {{$coupon->grand_total}}</li>
      </ul>
      
      
      
      
    </div>
    @endforeach
    <form class="form-horizontal" method="post">
      @csrf
      @method("PUT")
      <div class="card">
        <h5 class="card-header">Status</h5>
        <div class="card-body">
          <p class="card-text">
            {!! Form::radio('order_status', 2, null, ['id' => 'data']) !!} Delivered<br>
          {!! Form::radio('order_status', 3, null, ['id' => 'data']) !!} Cancelled</p>
          <button type="submit" class="btn btn-danger btn-min-width mr-1 mb-1">Save</button>
        </div>
      </div>
    </form>
  </section>
</div>
@endsection