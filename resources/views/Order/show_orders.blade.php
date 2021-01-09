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
      <li class="breadcrumb-item active">Order List</li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <div class="card-title">
              
              
            </div>
            
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Order No</th>
                  <th>Table Number</th>
                  <th>Phone Number</th>
                  <th>Coupon Code</th>
                  <th>Coupon Amount(%)</th>
                  <th>order_status</th>
                  <th>grand_total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                @foreach($orderdatas as $orderdata)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$orderdata->id}}</td>
                  <td>{{$orderdata->table}}</td>
                  <td>{{$orderdata->number}}</td>
                  <td>{{$orderdata->coupon_code}}</td>
                  <td>{{$orderdata->coupon_amount}}</td>
                  <td><span class="badge badge-success">Confirm</span></td>
                  <td>Rs.{{$orderdata->grand_total}}</td>
                  
                  <td>
                    <div class="row">
                      <div class="col-md-2">
                        <button class="btn btn-danger btn-sm"><a href="{{url('orderdata/')}}/{{$orderdata->id}}"><font color="white">View</a></font></button>
                      </div>
                      
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
</div>

@endsection