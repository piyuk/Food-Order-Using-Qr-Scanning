@extends('Admin.master')

@section('content')
   <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Coupon-List</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Coupon-List</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                   <div class="card-title">
                   
                <a href="{{route('coupon.create')}}" class="float-right">
                  <button class="btn btn-sm btn-info">Add New Coupon</button>
                </a>
                </div>
                
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Coupon Code</th>
                          <th>Amount</th>
                          <th>Amount Type</th>
                          <th>Expiry Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; ?>
                        @foreach($coupons as $coupon)
                        <?php $i++; ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$coupon->coupon_code}}</td>
                            <td>{{$coupon->amount}}</td>
                            <td>{{$coupon->amount_type}}</td>
                            <td>{{$coupon->expiry_date}}</td>
                            <td>{{$coupon->status}}</td>
           <td>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-success btn-sm"><a href="{{url('coupon/')}}/{{$coupon->id}}/edit"><font color="white">Edit</a></font></button>
                </div>
                  <div class="col-md-3">
                      <form action="{{url('coupon/')}}/{{$coupon->id}}" method="post">
                        @csrf
                        @method("DELETE")
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </div>  
            </div>        
    </form>
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