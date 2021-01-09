@extends('Admin.master')
@section('content')
<div class="page-content">
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Delivered</h2>
    </div>
  </div>
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Delivered</li>
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
                  <th>Coupan_Code</th>
                  <th>Coupan_amount</th>
                  <th>Order_status</th>
                  <th>Grand Total</th>
                  <th>Action</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                @foreach($data as $itm)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$itm->id}}</td>
                  <td>{{$itm->table}}</td>
                  <td>{{$itm->number}}</td>
                  <td>{{$itm->coupon_code}}</td>
                  <td>{{$itm->coupon_amount}}</td>
                  <td> <span class="badge badge-success">Delivered</span></td>
                  <td>{{$itm->grand_total}}</td>
                  
                  <td>
                    <div class="row">
                      <div class="col-md-2">
                        
                        <button class="btn btn-success btn-sm"><a href="{{url('del_data_show/')}}/{{$itm->id}}"><font color="white">View</a></font></button>
                        
                      </div>
                      
                    </div>
                  </td>
                </tr>
              @endforeach              </tbody>
            </table>
            
          </div>
        </div>
      </div>
      
    </section>
    
  </div>
  @endsection