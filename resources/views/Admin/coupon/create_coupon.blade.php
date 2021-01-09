@extends('Admin.master')

@section('content')
<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Coupon</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Coupon</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
             
              <div class="col-lg-12">

                <div class="block">

                <a href="{{route('coupon.index')}}" class="float-right">
                  <button class="btn btn-sm btn-light"><font color="#00000"><b>Back</b></font></button>
                </a>
                  <div class="title"><strong class="d-block">Add Coupon</strong><span class="d-block"></span></div>

                  <div class="block-body">
                   <form class="form-horizontal" action="{{route('coupon.store')}}" method="POST">
                    @csrf
  

                      <div class="form-group">
                        <label class="form-control-label">Coupon Code</label>
                        <input type="text"  name="coupon_code" id="coupon_code" placeholder="Enter Coupon Code" class="form-control">
                         @error('coupon_code')
                         <div class="alrt alrt-danger">{{$message}}</div>
                         @enderror
                      </div>


                      <div class="form-group">
                        <label class="form-control-label">Amount</label>
                        <input type="text"  name="amount" id="amount" placeholder="Enter Amount" class="form-control">
                         @error('amount')
                         <div class="alrt alrt-danger">{{$message}}</div>
                         @enderror
                      </div>

                        <div class="form-group">
                          <label for="amount_type" class="control-label">Amount Type</label>
                            <select name="amount_type" id="amount_type" class="form-control" style="width: 415px;">
                            <option value="Percentage">Percentage</option>
                            </select>
                             @error('amount_type')
                             <div class="alrt alrt-danger">{{$message}}</div>
                             @enderror
                        </div>
                        
                      
                      <div class="form-group">
                        <label for="expiry_date" class="control-label">Expiry Date</label>
                             <div class="input-prepend">
                                <div  data-date="12-02-2012" class="input-append date datepicker">
                                    <input type="date" name="expiry_date" id="expiry_date" value="{{old('expiry_date')}}"  data-date-format="yyyy-mm-dd" class="span11" style="width: 375px;" placeholder="yyyy-mm-dd">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                              </div>
                              @error('expiry_date')
                              <div class="alrt alrt-danger">{{$message}}</div>
                              @enderror
                      </div> 
                        
                   <div class="control-group{{$errors->has('status')?' has-error':''}}">
                        <label class="control-label">Enable :</label>
                        <div class="controls">
                            <input type="checkbox" name="status" id="status" value="1">
                            <span class="text-danger">{{$errors->first('status')}}</span>
                        </div>
                    </div>




                  
                      <div class="form-group">       
                        <input type="submit" value="Add" class="btn btn-sm btn-danger">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Horizontal Form-->
              
            </div>
          </div>
        </section>
        
      </div>

@endsection