@extends('Admin.master')
@section('content')
<div class="page-content">
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Delivered Order</h2>
    </div>
  </div>
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Delivered Order</li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm" >
            <div class="card-title">
            </div>
              @foreach($data as $dta)    

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
                <?php $i++; ?>
                 <h6>
        <font color="white">Table Number :  </font>
        <span class="badge badge-dark"><font size="4px">{{$dta->table}}</font></span>
      </h6>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$dta->product_name}}</td>
                  <td>{{$dta->product_price}}</td>
                  <td>{{$dta->qty}}</td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
            
            
          </div>
        </div>
      </div>
      
      <div class="card" style="width: 35.5rem;">
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
        
        
        
        
        </div><button class="btn btn-info btn-sm"><a href="{{url('invoice/')}}/{{$coupon->id}}"><font color="white">Print</a></font></button>
        @endforeach
      </section>
    </div>
    @endsection